###Web浏览器

>web 浏览器(通常被称为浏览器)是一个用于检索、展示和遍历在万维网上的信息资源的软件应用程序. 信息资源被定义成统一资源定位符(URI/URL). 它可能是网页, 图片, 视频或者一个内容片断. 超链接的出现使用户能轻松的将浏览器导航到相关的资源, 尽管浏览器主要是为了使用万维网, 但它们还可以用来访问 Web服务器在私人网络所提供的信息或文件在文件系统. - Wikipedia

[主流的浏览器](http://www.sitepoint.com/browser-trends-april-2015-statcounter-vs-netmarketshare/) 如下:

1. [Chrome](http://www.google.com/chrome/) (引擎: [Blink](https://en.wikipedia.org/wiki/Blink_%28layout_engine%29) + [V8](https://en.wikipedia.org/wiki/V8_%28JavaScript_engine%29))
2. [Firefox](https://www.mozilla.org/en-US/firefox/new/) (引擎: [Gecko](https://en.wikipedia.org/wiki/Gecko_%28software%29) + [SpiderMonkey](https://en.wikipedia.org/wiki/SpiderMonkey_%28software%29))
3. [Internet Exploere](http://windows.microsoft.com/en-us/internet-explorer/download-ie) (引擎: [Trident](https://en.wikipedia.org/wiki/Trident_%28layout_engine%29) + [Chakra](https://en.wikipedia.org/wiki/Chakra_%28JScript_engine%29))
4. [Safari](https://www.apple.com/safari/) (引擎: [Webkit](https://en.wikipedia.org/wiki/WebKit) + [SquirrelFish](https://trac.webkit.org/wiki/SquirrelFish))

![statcounter](https://raw.githubusercontent.com/dwqs/fedHandlebook/master/images/statcounter.png)

**浏览器和web技术的演变(API 等):**

* [www.evolutionoftheweb.com](http://www.evolutionoftheweb.com/) [read]
* [Timeline of web browsers](https://en.wikipedia.org/wiki/Timeline_of_web_browsers) [read]

**最常用的无壳浏览器:**

* [PhantomJS](http://phantomjs.org/) (引擎: [Webkit](https://en.wikipedia.org/wiki/WebKit) + [SquirrelFish](https://trac.webkit.org/wiki/SquirrelFish))
* [slimerjs](http://slimerjs.org/) (引擎: [Gecko](https://en.wikipedia.org/wiki/Gecko_%28software%29) + [SpiderMonkey](https://en.wikipedia.org/wiki/SpiderMonkey_%28software%29))
* [TrifleJS](http://triflejs.org/) (引擎: [Trident](https://en.wikipedia.org/wiki/Trident_%28layout_engine%29) + [Chakra](https://en.wikipedia.org/wiki/Chakra_%28JScript_engine%29))

**浏览器怎么工作的**

* [我所知道的关于浏览器和Web的20件事](http://www.20thingsilearned.com/en-US/foreword/1) [read]
* [浏览器如何工作的: 现代浏览器背后的秘密](http://www.html5rocks.com/en/tutorials/internals/howbrowserswork/) [read]
* [快速 CSS: 浏览器是怎么组织网页的](http://dbaron.org/talks/2012-03-11-sxsw/master.xhtml) [read]
* [浏览器是如何渲染一个网站的?](https://www.youtube.com/watch?v=SmE4OwHztCc) [watch]

![browser-work](https://raw.githubusercontent.com/dwqs/fedHandlebook/master/images/browsers-work.png)

**浏览器优化**

* [网站性能优化](https://www.udacity.com/course/website-performance-optimization--ud884) [watch]
* [浏览器渲染优化](https://www.udacity.com/course/browser-rendering-optimization--ud860) [watch]

**浏览器安全**

* [浏览器安全手册](https://code.google.com/p/browsersec/wiki/Main) [read]
* [HTML5 安全参考手册](https://html5sec.org/#javascript) [read]
* [前端安全](https://mikewest.org/2013/09/frontend-security-frontendconf-2013) [watch]
* [Web 安全: JavaScript, HTML, CSS 的使用](http://www.amazon.com/Security-Web-Developers-Using-JavaScript/dp/1491928646/) [read][$]
* [网络混战: 现代 Web 应用安全指南](http://lcamtuf.coredump.cx/tangled/) [read]

**浏览器比较**

* [Web 浏览器的比较](https://en.wikipedia.org/wiki/Comparison_of_web_browsers) [read]

**浏览器的发展**

在过去, 前端开发者会花费大量的时间让代码在不同的浏览器中正常工作. 除非你必须写出兼容老版本浏览器的代码(如: IE6/IE7), 否则跟现在比起来, 这(浏览器兼容)在以前是一个很大的问题. 虽说浏览器兼容问题现在仍然存在, 但前端开发者并不用花费很多时间就能处理这类问题. 而实际上, 现代抽离出的框架(如: JQuery, pre-processors, transpilers)已经废除了很多浏览器不一致问题.

**绿色浏览器**

浏览器的最新版本被认为是绿色浏览器, 也就是说, 浏览器会自动更新而不用去提示用户更新. 浏览器的自动更新摒弃了老版本浏览器进程缓慢的问题, 因为对于老版本浏览器和现代浏览器之间的共性的差异化开发是很复杂的(如: 新规范和更新速度).

**浏览器选择**

现在大多数前端开发者使用 Chrome, "Chrome 开发工具"对开发者很有用, 然而, 所有浏览器都提供了开发者工具, 所以选择一个开发用的浏览器是一个主观的问题. 更重要的问题是要了解需要支持哪些浏览器, 当你在开发的时候, 要在每个浏览器中做测试, 但无论选择哪一款浏览器都能完成开发任务, 我建议使用 Chrome 是因为 Chrome 开发工具一直在改进, 并且包含了更健全地特性.

**浏览器 Hacks**

* [browserhacks.com](http://browserhacks.com/) [read]
