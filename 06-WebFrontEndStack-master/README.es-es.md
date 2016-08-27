# Overflow Stack
The overflow stack family (Web Front End Stack, Database Stack, .NET Stack etc.):
http://overflowstack.github.io

# Localization
English:
https://github.com/unruledboy/WebFrontEndStack/

中文:
https://github.com/unruledboy/WebFrontEndStack/blob/master/README.zh-cn.md

Español:
https://github.com/unruledboy/WebFrontEndStack/blob/master/README.es-es.md


# WebFrontEndStack
Web front-end stack: navegadores, plataformas, librerías, frameworks, herramientas etc.

![Image of Web Front End Stack](Web Front End Stack.png)

# Genera la imagen

## Prepara el entorno
Tienes que tener instalado el Visual Studio 2010+ en Windows.

1. Instalar [nodejs](https://nodejs.org).

2. Instalar [Phantomjs](http://phantomjs.org).

3. Instalar [Python 2.7](https://www.python.org/).

4. ``npm install``

Si aparece algún error, comprueba las dependencias de [phantomjs-node](https://github.com/sgentle/phantomjs-node/wiki), [node-gyp](https://github.com/TooTallNate/node-gyp#installation).

## Ejecución de comandos
``npm start`` para lanzar un servidor done ver el html.

``npm run build`` para generar la imagen.


## Opciones
### Uso
	node index task1 \[task2\] \[task3\] .. \[--option=value\] \[--option=value\] ...
#### Tareas
##### phantomjs
	Genera la imagen
##### readme
	Reconstruye los README.
##### updatestargazers
	Actualiza los contadores de estrellas de los proyectos github.
#### Opciones
#### port
	Default: 3000
#### update_existed_stargazers
	Default: false

# ¿Por qué realizar esta tabla?
Alguna vez te has preguntado:
* ¿Cuantas tecnologías se incluyen en el desarrollo Front end?
* ¿Cuantas conozco?


No pude encontrar un diagrama muy completo que mostrase la pila de tecnologías involucradas en el desarrollo web front end, así realicé mi propia versión.

Puede que haya errores, en categorías, enlaces o en nombres de
librerías, o puede que falte alguna que consideres importante, pero
bonito es que puedes modificarlo y arreglarlo como quieras.

Puedes encontrar una vista previa del gráfico aquí (usa el ratón para
moverte / hacer zoom):

https://rawgit.com/unruledboy/WebFrontEndStack/master/ux/WebFrontEndStack.htm


# The Web Front End Stack
<!--BUILD_START-->

- Web Front End
	- Navegadores
		- [Internet Explorer](http://windows.microsoft.com/en-us/internet-explorer/download-ie)
		- [Chrome](http://www.google.com/chrome/)
		- [Firefox](https://www.mozilla.org/)
		- [Safari](http://www.apple.com/safari/)
		- [Opera](http://www.opera.com/)
		- [Edge](https://www.microsoft.com/en-us/windows/microsoft-edge)
		- [Netscape ;-)](https://en.wikipedia.org/wiki/Netscape)
	- Protocolos
		- [HTTP/1.1](https://www.ietf.org/rfc/rfc2616.txt)
			- URI
			- Sesión
			- Autenticación
			- Petición
			- Respuesta
		- [HTTP/2](https://en.wikipedia.org/wiki/HTTP/2)
			- Compresión
			- Minificación
			- Server Push
		- WebSocket
	- The 3 Pillars
		- HTML (HyperText Markup Language)
		- CSS (Cascading Style Sheets)
		- JavaScript
	- Estándares
		- W3C
			- HTML
			- CSS
			- XHTML
			- XML
	- Conceptons principales
		- HTML
			- [DOM](https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model)
			- [Element](https://developer.mozilla.org/en-US/docs/Web/API/Element)
			- Attribute
		- JavaScript
			- [Prototype](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object/prototype)
			- [Scope](https://developer.mozilla.org/en-US/docs/Glossary/Scope)
			- [Closure](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Closures)
			- [JSON (JavaSript Object Notation)](https://developer.mozilla.org/en-US/docs/Glossary/JSON)
			- [AJAX (Asynchronous JavaScript and XML)](https://developer.mozilla.org/en-US/docs/AJAX)
		- CSS
			- Selector
			- Priority
			- Specificity
			- Box Model
	- Motores de renderizado
		- [Trident (IE)](https://en.wikipedia.org/wiki/Trident_(layout_engine))
		- [Blink / prev. WebKit (Chrome)](http://www.chromium.org/blink)
		- [Gecko (Firefox)](https://developer.mozilla.org/en-us/docs/Mozilla/Gecko)
		- [WebKit (Safari)](http://www.webkit.org/)
		- [Blink / prev. Presto (Opera)](http://www.chromium.org/blink)
		- [EdgeHTML (Edge)](https://en.wikipedia.org/wiki/EdgeHTML)
	- Motores JavaScript
		- [JScript (IE8- / ASP)](https://en.wikipedia.org/wiki/JScript)
		- [Chakra (IE9+ / Edge)](https://en.wikipedia.org/wiki/Chakra_(JScript_engine))
		- [V8 (Chrome / Opera / Nodejs / MongoDB)](https://developers.google.com/v8/?hl=zh-CN) [[GitHub]](https://github.com/v8/v8/)
		- [SpiderMonkey (Firefox)]( https://developer.mozilla.org/en-us/docs/Mozilla/Projects/SpiderMonkey)
		- [Nitro (Safari)](https://en.wikipedia.org/wiki/WebKit#JavaScriptCore)
	- Tiempo de ejecución
		- Cookie
		- Local Cache
		- Session Storage
		- Local Storage
		- Componentes
			- Extensiones
			- Plugins
		- Resources
			- Images
			- Icons
			- Fonts
			- Audios
			- Videos
	- Editores de texto
		- [Sublime Text](http://www.sublimetext.com/)
		- [WebStorm](https://www.jetbrains.com/webstorm/)
		- [Atom](https://atom.io/) [[GitHub]](https://github.com/atom/atom/)
		- [Vim](http://www.vim.org/)
		- [Emacs](https://www.gnu.org/software/emacs/)
		- [Brackets](http://brackets.io/) [[GitHub]](https://github.com/adobe/brackets/)
		- [Light Table](http://lighttable.com/) [[GitHub]](https://github.com/LightTable/LightTable/)
		- [Visual Studio](https://www.visualstudio.com/)
		- [Visual Studio Code](https://code.visualstudio.com/) [[GitHub]](https://github.com/Microsoft/vscode)
		- Dreamweaver ;-)
		- FrontPage / SharePoint Designer ;-)
	- Build Tasks
		- Minificación
		- Compilación
		- Concatenación
		- Uglification
		- Optimización de imágenes
		- Tests unitarios
	- Herramientas de tareas
		- [Grunt](http://www.gruntjs.com/) [[GitHub]](https://github.com/cowboy/jquery-tiny-pubsub/)
		- [Gulp](http://gulpjs.com/) [[GitHub]](https://github.com/gulpjs/gulp/)
		- [Brunch](http://brunch.io/) [[GitHub]](https://github.com/brunch/brunch/)
		- [Yeoman](http://yeoman.io/)
		- Broccoli [[GitHub]](https://github.com/broccolijs/broccoli/)
	- Depuración
		- [Developer Tools](https://developer.chrome.com/devtools)
		- [Firebug](http://getfirebug.com/) [[GitHub]](https://github.com/firebug/firebug/)
	- Herramientas base
		- [Node.js](https://nodejs.org/) [[GitHub]](https://github.com/joyent/node/)
		- [Phantom.js](http://phantomjs.org/) [[GitHub]](https://github.com/ariya/phantomjs/)
		- [SpiderMonkey](https://developer.mozilla.org/en-US/docs/Mozilla/Projects/SpiderMonkey)
	- Calidad
		- [JSLint](http://www.jslint.com/) [[GitHub]](https://github.com/douglascrockford/JSLint/)
		- [JSHint](http://jshint.com/) [[GitHub]](https://github.com/jshint/jshint/)
		- [jscs](http://jscs.info/) [[GitHub]](https://github.com/jscs-dev/node-jscs)
		- [Closure Linter](https://developers.google.com/closure/utilities/)
	- Gestores de paquetes
		- [npm](https://www.npmjs.com/) [[GitHub]](https://github.com/npm/npm/)
		- [Bower](http://bower.io/) [[GitHub]](https://github.com/bower/bower/)
	- Test
		- Herramientas
			- [QUnit](https://qunitjs.com/) [[GitHub]](https://github.com/jquery/qunit/)
			- [Jasmine](http://jasmine.github.io/) [[GitHub]](https://github.com/jasmine/jasmine/)
			- [Mocha](https://mochajs.org/) [[GitHub]](https://github.com/mochajs/mocha/)
			- [Selenium](http://www.seleniumhq.org/) [[GitHub]](https://github.com/SeleniumHQ/selenium/)
			- [WebDriverIO](http://webdriver.io/) [[GitHub]](https://github.com/webdriverio/webdriverio/)
			- [Protractor](http://www.protractortest.org/)
			- [Chai](http://chaijs.com/) [[GitHub]](https://github.com/jfirebaugh/konacha/)
			- [Sinon.JS](http://sinonjs.org/) [[GitHub]](https://github.com/cjohansen/Sinon.JS/)
			- [Karma](http://karma-runner.github.io/) [[GitHub]](https://github.com/karma-runner/karma/)
			- nodeunit [[GitHub]](https://github.com/caolan/nodeunit/)
			- tape [[GitHub]](http://github.com/substack/tape)
			- [nightmare](http://nightmarejs.org/) [[GitHub]](https://github.com/segmentio/nightmare)
		- Composite
			- [Sauce Labs](https://saucelabs.com/)
			- [Browser Stack](https://www.browserstack.com/)
			- [Browser Shots](http://browsershots.org/)
			- [Browserling](https://www.browserling.com/)
			- [Browser Sandbox](https://spoon.net/browsers/)
			- [Cross Browser Testing](https://crossbrowsertesting.com/)
			- [Browsera](http://www.browsera.com/)
			- [SortSite](http://www.powermapper.com/products/sortsite/checks/browser-compatibility/)
	- Librerías y frameworks
		- JavaScript base library
			- [jQuery](https://jquery.com/) [[GitHub]](https://github.com/jquery/jquery/)
			- [Prototype](http://prototypejs.org/) [[GitHub]](https://github.com/sstephenson/prototype/)
			- [Zepto](http://zeptojs.com/) [[GitHub]](https://github.com/madrobby/zepto/)
			- [MooTool](http://mootools.net/) [[GitHub]](https://github.com/mootools/mootools-core/)
		- Módulos
			- ES6 Module
			- CommonJS
				- [webpack](http://webpack.github.io/) [[GitHub]](https://github.com/webpack/webpack/)
				- [browserify](http://browserify.org/) [[GitHub]](https://github.com/substack/node-browserify/)
			- AMD
				- [RequireJS](http://requirejs.org/) [[GitHub]](https://github.com/jrburke/requirejs/)
			- UMD
				- umd [[GitHub]](https://github.com/umdjs/umd/)
		- JavaScript Framework
			- [AngularJS](https://angularjs.org/) [[GitHub]](https://github.com/angular/angular.js/)
			- [Backbone](http://backbonejs.org/) [[GitHub]](https://github.com/jashkenas/backbone/)
			- [Knockout](http://knockoutjs.com/) [[GitHub]](https://github.com/SteveSanderson/knockout/)
			- [Ember](http://emberjs.com/) [[GitHub]](https://github.com/emberjs/ember.js/)
			- [React](http://facebook.github.io/react/) [[GitHub]](https://github.com/facebook/react/)
			- [polymer](https://www.polymer-project.org/) [[GitHub]](https://github.com/polymer/polymer/)
			- [Deft.js](http://deftjs.org/) [[GitHub]](https://github.com/deftjs/DeftJS/)
			- [Vue](http://vuejs.org/) [[GitHub]](https://github.com/yyx990803/vue/)
			- [Riot](http://riotjs.com/) [[GitHub]](https://github.com/riot/riot)
		- UI framework
			- [Bootstrap](http://getbootstrap.com/) [[GitHub]](https://github.com/twbs/bootstrap/)
			- [Semantic UI](http://semantic-ui.com/) [[GitHub]](https://github.com/Semantic-Org/Semantic-UI/)
			- [Foundation](http://foundation.zurb.com/) [[GitHub]](https://github.com/zurb/foundation/)
			- [Material UI](http://material-ui.com/) [[GitHub]](https://github.com/callemall/material-ui/)
			- [WinJS](https://dev.windows.com/en-us/develop/winjs) [[GitHub]](https://github.com/winjs/winjs)
			- [Pure](http://purecss.io/) [[GitHub]](https://github.com/yahoo/pure/)
			- [Amaze UI](http://amazeui.org/) [[GitHub]](https://github.com/allmobilize/amazeui)
		- WebSocket
			- [Socket.io](http://socket.io/) [[GitHub]](https://github.com/Automattic/socket.io/)
			- web-socket-js [[GitHub]](https://github.com/gimite/web-socket-js/)
		- Visualización de datos
			- [D3](http://d3js.org/) [[GitHub]](https://github.com/mbostock/d3/wiki/Gallery/)
			- [Echarts](http://echarts.baidu.com) [[GitHub]](https://github.com/ecomfe/esl/)
			- [HighCharts](http://www.highcharts.com/) [[GitHub]](https://github.com/highslide-software/highcharts.com/)
			- [Vis.js](http://visjs.org/) [[GitHub]](https://github.com/almende/vis/)
			- [Flot](http://www.flotcharts.org/) [[GitHub]](https://github.com/flot/flot/)
		- WebGL
			- [Three.js](http://threejs.org/) [[GitHub]](https://github.com/mrdoob/three.js/)
			- [Babylon.js](http://www.babylonjs.com/) [[GitHub]](https://github.com/BabylonJS/Babylon.js/)
			- [Pixi.js](http://www.pixijs.com/) [[GitHub]](https://github.com/GoodBoyDigital/pixi.js/)
		- CSS3 Animation
			- [Animate.css](https://daneden.github.io/animate.css/) [[GitHub]](https://github.com/daneden/animate.css/)
			- [bounce.js](http://bouncejs.com/) [[GitHub]](https://github.com/tictail/bounce.js/)
			- [Effeckt.css](https://h5bp.github.io/Effeckt.css/) [[GitHub]](https://github.com/h5bp/Effeckt.css/)
			- [move.js](https://visionmedia.github.io/move.js/) [[GitHub]](https://github.com/visionmedia/move.js/)
		- Control de flujo
			- ES6
				- Promise
				- Generator
			- ES7
				- yield
				- await
			- async [[GitHub]](https://github.com/caolan/async/)
			- co [[GitHub]](https://github.com/tj/co/)
			- Promise
				- Bluebird [[GitHub]](https://github.com/petkaantonov/bluebird/)
				- q [[GitHub]](https://github.com/kriskowal/q/)
				- when.js [[GitHub]](https://github.com/cujojs/when/)
		- Funcional
			- [bacon.js](http://baconjs.github.io/) [[GitHub]](https://github.com/baconjs/bacon.js/)
			- [immutable.js](https://facebook.github.io/immutable-js/) [[GitHub]](https://github.com/facebook/immutable-js/)
			- [ramda](http://ramdajs.com/) [[GitHub]](http://github.com/ramda/ramda)
			- [underscore.js](http://underscorejs.org/) [[GitHub]](https://github.com/jashkenas/underscore)
			- [lodash](https://lodash.com/) [[GitHub]](https://github.com/lodash/lodash)
			- [ReactiveX](http://reactivex.io/) [[GitHub]](https://github.com/Reactive-Extensions/RxJS)
		- Mobile UI
			- [jQuery Mobile](https://jquerymobile.com/) [[GitHub]](https://github.com/jquery/jquery-mobile/)
			- [Jo](http://joapp.com/) [[GitHub]](https://github.com/davebalmer/jo/)
			- [Dojo Mobile](https://dojotoolkit.org/reference-guide/1.10/dojox/mobile.html)
			- [Lungo](http://lungo.tapquo.com/) [[GitHub]](https://github.com/tapquo/Lungo.js/)
	- Pre-procesadores CSS
		- LESS
			- [LESS](http://lesscss.org/) [[GitHub]](https://github.com/less/less.js/)
			- [Hat](http://lesshat.madebysource.com/) [[GitHub]](https://github.com/csshat/lesshat/)
		- Sass(SCSS)
			- [Compass](http://compass-style.org/) [[GitHub]](https://github.com/chriseppstein/compass/)
			- [Bourbon](http://bourbon.io/) [[GitHub]](https://github.com/thoughtbot/bourbon/)
			- [Gumby](http://www.gumbyframework.com/) [[GitHub]](https://github.com/GumbyFramework/Gumby/)
		- Stylus
			- nib [[GitHub]](https://github.com/tj/nib/)
	- Future Standards
		- [babel](https://babeljs.io/) [[GitHub]](https://github.com/babel/babel)
	- Plantillas
		- [Handlebars](http://handlebarsjs.com/) [[GitHub]](https://github.com/wycats/handlebars.js/)
		- [Haml](http://haml.info/) [[GitHub]](https://github.com/haml/haml/)
		- [Slim](http://slim-lang.com/) [[GitHub]](https://github.com/slim-template/slim/)
		- [Jade](http://jade-lang.com/) [[GitHub]](https://github.com/jadejs/jade/)
		- [Ejs](http://www.embeddedjs.com/)
		- [Spacebars](http://meteorcapture.com/spacebars/)
		- [mustache](http://mustache.github.io/) [[GitHub]](https://github.com/janl/mustache.js/)
	- Modernisation
		- [Normalize](http://necolas.github.io/normalize.css/) [[GitHub]](https://github.com/necolas/normalize.css/)
		- Reset
	- Buenas prácticas
		- [SEO](https://en.wikipedia.org/wiki/Search_engine_optimization)
		- Responsiveness
		- [CDN](https://en.wikipedia.org/wiki/Content_delivery_network)
	- Seguridad
		- Sandbox
		- [XSS](https://en.wikipedia.org/wiki/Cross-site_scripting)
		- [CORS](http://www.w3.org/TR/cors/)
	- Lenguajes intermedios
		- [CoffeeScript](http://coffeescript.org/) [[GitHub]](https://github.com/jashkenas/coffeescript/)
		- [TypeScript](http://www.typescriptlang.org/) [[GitHub]](https://github.com/Microsoft/TypeScript/)
		- ClojureScript [[GitHub]](https://github.com/clojure/clojurescript/)
		- [JSX (Facebook)](http://facebook.github.io/react/docs/jsx-in-depth.html)
	- Empaquetadores de Apps para móvil
		- [PhoneGap / Cordova](https://cordova.apache.org/) [[GitHub]](https://github.com/apache/cordova-android/)
		- [MUI](http://dev.dcloud.net.cn/mui/) [[GitHub]](https://github.com/dcloudio/mui/)
		- [React Native](https://facebook.github.io/react-native/) [[GitHub]](https://github.com/facebook/react-native/)
		- [Ionic](http://ionicframework.com/) [[GitHub]](https://github.com/driftyco/ionic/)
	- Desktop Application Development
		- [Electron](http://electron.atom.io/) [[GitHub]](https://github.com/atom/electron)
		- [NW.js](http://nwjs.io/) [[GitHub]](https://github.com/nwjs/nw.js)

<!--BUILD_END-->
