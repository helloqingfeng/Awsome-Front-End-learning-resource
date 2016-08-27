/* global require, setTimeout, console, __dirname, process*/
/**
 * Builder
 * @author zsx<zsx@zsxsoft.com>
 */
(function () {
	"use strict";

	const pageWidth = 2000; // Magic number!
	const pageHeight = 3800;

	let Express = require('express');
	let path = require('path');
	let phantom = require("phantomjs-promise");
	let request = require("request");
	let async = require("async");
	let fs = require('fs');
	let commandLineArgs = require("command-line-args");

	let app = new Express();

	let cli = commandLineArgs([{
		name: "help",
		alias: "h",
		type: Boolean,
		defaultOption: true,
		description: "Display this message."
	}, {
		name: "port",
		alias: "p",
		type: Number,
		defaultValue: 3000,
		description: "(Default: 3000) Set the port what express listening."
	}, {
		name: "update_existed_stargazers",
		alias: "ues",
		type: Boolean,
		defaultValue: false,
		description: "(Default: false) Update project's stargazers including existed."
	}, {
		name: "phantomjs",
		type: Boolean,
		defaultValue: false,
		description: "The task to generate the image."
	}, {
		name: "readme",
		type: Boolean,
		defaultValue: false,
		description: "The task to update readme."
	}, {
		name: "updatestargazers",
		type: Boolean,
		defaultValue: false,
		description: "The task to update the count of the stargazers."
	}]);
	let options = cli.parse();
	let httpServer = "http://127.0.0.1:" + options.port + "/";

	let languages = [];
	let jsonData = JSON.parse(fs.readFileSync('./ux/WebFrontEndStack.json', "utf-8")); // Require will lock the file.

	/**
	 * Tiemout
	 * @param int ms
	 * @return Promise<any>	 
	 */
	function timeout(ms) {
		return new Promise((resolve, reject) => {
			setTimeout(resolve, ms, 'done');
		});
	}
	/**
	 * Recursion to generate readme
	 * @param object object
	 * @param string language
	 * @param int deep
	 * @return string	 
	 */
	function buildReadme(object, language, deep) {
		let deeper = deep + 1;
		let deepString = new Array(deeper).join("\t") + "- ";
		let ret = [];
		let lang = "";
		if (object.languages) {
			lang = object.languages[language];
		}
		lang = lang || object.name;

		ret.push((function (deepString, name, url, github) {
			let haveUrl = !!url;
			let haveGitHub = !!github;
			let ret = [];
			ret.push(deepString);
			ret.push((haveUrl ? "[" : "") + name + (haveUrl ? "](" + url + ")" : ""));
			ret.push((haveGitHub ? " [\[GitHub\]](" + github + ")" : ""));
			return ret.join("");
		})(deepString, lang, object.url, object.github));

		if (object.children) {
			object.children.map((value, index) => {
				ret.push(buildReadme(value, language, deeper));
			});
		}
		return ret.join("\n");
	}

	/**
	 * Update the stargazers of the GitHub repo
	 * Be careful! There have the rate limit!
	 * @see  https://developer.github.com/v3/#increasing-the-unauthenticated-rate-limit-for-oauth-applications
	 * @return Promise<any>
	 */
	function updatestargazers() {
		return new Promise((resolve, reject) => {

			function getGitHubApi(github) {
				let githubArray = github.split("/");
				// I want a sprintf T_T
				return "https://api.github.com/repos/" + githubArray[3] + "/" + githubArray[4];
			}


			let q = async.queue(function (object, callback) {
				if (!object.github || (!options.update_existed_stargazers && object.stargazers)) {
					callback(false);
					return;
				}
				let githubUrl = getGitHubApi(object.github);
				console.log("Getting " + githubUrl);
				request({
					url: githubUrl,
					headers: {
						"User-Agent": "https://github.com/unruledboy/WebFrontEndStack" // GitHub required user-agent
					}
				}, (err, res, body) => {
					if (!err && res.statusCode == 200) {
						let json = JSON.parse(body);
						if (json === null) {
							callback(false);
							return;
						}
						object.stargazers = json.stargazers_count;
						callback(true);
					} else {
						if (res.statusCode == 403) { // Out of API limit!
							console.error("Out of GitHub API limit!");
							console.error("The limit will be reset when " + new Date(res.headers['x-ratelimit-reset'] * 1000));
							q.kill();
							reject("Out of GitHub API limit!");
						}
						callback(false);
					}
				});

			}, 5);
			q.drain = function () {
				fs.writeFileSync('./ux/WebFrontEndStack.json', JSON.stringify(jsonData), "utf-8");
				resolve();
			};
			function addQueue(object) {
				q.push(object, (noErr) => {
					if (noErr) console.log(object.name + " = " + object.stargazers);
				});
				if (object.children) {
					object.children.forEach((val) => {
						addQueue(val);
					});
				}
			}
			addQueue(jsonData);

			return q;
		});
	}
	/**
	 * For running phantomjs to take a screenshot for the webpage
	 * @return Promise<any>
	 */
	function phantomjs(language) {
		let displayLanguage = language === "" ? "en" : language;
		let promise = new Promise((resolve, reject) => {
			return phantom.createAsync().then((phantom) => {
				return phantom.createPageAsync();
			}).then((objects) => {
				console.log("Setting viewportSize..");
				return objects.page.setAsync('viewportSize', {
					width: pageWidth,
					height: pageHeight
				});
			}).then((objects) => {
				console.log("Opening " + httpServer + "?locale=" + language + " for " + displayLanguage);
				return objects.page.openAsync(httpServer + "?locale=" + language);
			}).then((objects) => {
				console.log("Rendered HTML, the image will be saved after 2 seconds.");
				if (objects.ret[0] != "success") {
					throw objects.ret[0];
				}
				return timeout(2000).then(() => {
					return objects.page.renderAsync(path.join(__dirname, 'Web Front End Stack' + (language === "" ? "" : ".") + language + '.png'));
				});
			}).then((objects) => {
				console.log("The image(" + displayLanguage + ") saved successfully!");
				objects.page.close();
				objects.phantom.exit();
				resolve();
			});
		});
		return promise;

	}


	/**
	 * To rebuild the README.md
	 * @return Promise<any>
	 */
	function readme(language) {
		let extension = (language === "" ? "" : ".") + language;
		let promise = new Promise((resolve, reject) => {
			fs.readFile('./README' + extension + '.md', "utf-8", (err, content) => {
				if (err) return reject(err);
				resolve(content);
			});
		});
		return promise.then((fileContent) => {
			let ret = buildReadme(jsonData, language, 0);
			fileContent = fileContent.replace(/<\!--BUILD_START-->[\d\D]+?<\!--BUILD_END-->/, "{%BuildStart%}");
			fs.writeFileSync('./README' + extension + '.md', fileContent.replace("{%BuildStart%}", "<!--BUILD_START-->\n\n" + ret + "\n\n<!--BUILD_END-->", "utf-8"));
			console.log('Readme (' + language + ') built successfully!');
		});
	}


	/**
	 * To start an express server
	 * @return Promise<any>
	 */
	function server() {
		return new Promise((resolve, reject) => {
			return app
				.set('port', options.port)
				.set('view engine', 'html')
				.use(Express.static(path.join(__dirname, '/ux')))
				.use('/', function (req, res) {
					res.redirect('/WebFrontEndStack.htm?locale=' + req.query.locale);
				})
				.listen(options.port, function () {
					console.info('Express started on: http://127.0.0.1:' + options.port);
					resolve(app);
				});
		});
	}

	if (options.help) {
		let usage = cli.getUsage({
			title: "Generator"
		});
		console.log(usage);
		return;
	}

	let queue = [];
	queue.push(server());

	// Firstly, check languages.

	languages.push("");
	for (let item in jsonData.languages) {
		languages.push(item);
	}

	languages.map((val) => {
		if (options.phantomjs) {
			queue.push(phantomjs(val));
		}
		if (options.readme) {
			queue.push(readme(val));
		}
	});

	if (options.updatestargazers) {
		queue.push(updatestargazers());
	}

	let promise = Promise.all(queue);

	if (queue.length > 1) { // for somebody who only want to start the server.
		console.log("You can press Ctrl+C to exit if tasks finished.");
		promise.then(() => {
			console.log("OK!");
			process.exit(0);
		});
	}
})();
