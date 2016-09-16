# 大前端工具集 [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

这个项目的定位是 **大前端程序猿的百宝箱**。主要针对 前端方向和 Node 方向；主要内容是国内外优秀的库、工具、套路、设计/交互或关注的前端组织/博客等等，反正用 **瑞士军刀** 来总结这篇文章再合适不过了。

对于列在这里的几乎所有项目，我都有去实践与了解，所以我会尽量给出中肯的建议和理解，也希望大家能多关注我的评语:)

> 感谢和期待大家的 PR，我会及时回复的~

---

<h2 id="catalog">目录</h2>

- [前端组织/前端博客](#blogs)
- [博客搭建](#blog_build)
- [HTML](#html)
- [CSS](#css)
- [浏览端 JS](#javascript)
- [Project Build](#project_build)
- [Node Package](#node_package)
- [Node Project](#node_project)
- [精选阅读](#read)
  - [前端技术](#fedev)
  - [Node 学习资料](#node_read)
  - [前端面试](#interview)
  - [其他技术](#otherdev)
- [工具/软件](#tools)
  - [Web](#web)
  - [APP](#app)
  - [Mac 软件篇](#mac_soft)
  - [Linux](#linux)
- [Chrome Plugins](#BrowserPlugins)
- [Git](#git)
- [服务端](#servers)
- [数据端](#backend)
- [客户端](#client)
- [设计/交互](#ux)
- [速查手册](#handbook)
- [杂七杂八](#other)
- [前端炫技-炫酷狂拽叼炸天的 Web](#cool)
- [小结](#summary)
- [TODO](#todo)

## 正文

<h3 id="blogs">前端组织/前端博客</h3>

> 虽混过外企俩家，但劳资英文这项的技能点还是灰色的...so，俺关注的站点主要以中文为主

- [GitHub](https://github.com) - 没 ```Github``` 都不好意思面基有木有！！！
- [MDN](https://developer.mozilla.org/zh-CN/) - 无数的资源再等着你探索，追标准和新特性肯定得关注的网站
- [Awesomes.cn](https://www.awesomes.cn/) - 国人维护的前端资源库，深度对接到 ```Github```，分类和展现清晰，值得收藏
- [如何跟上前端开发的最新前沿](https://uptodate.frontendrescue.org/zh/) - RT，不解释
- [慕课](http://www.imooc.com/) - 大量的在线计算机课程。 虽然初、中级居多，但是不乏有巨作值得细细品尝
- [阮一峰](http://javascript.ruanyifeng.com/) - 关注多年，拜读其 [ES6](http://es6.ruanyifeng.com/) 系列。虽网传靠写书进鸟阿里，但博客内容确实够丰富
- [W3Cplus](http://www.w3cplus.com/) - 大漠(《图解 CSS3》作者)在国内的影响力杠杠的，```Sass``` 专家级
- [淘宝前端团队](http://taobaofed.org/) - 内容涵盖 ```Web``` 和 ```Node```，要深度游深度，要广度有广度
- [奇舞团博客](http://www.75team.com/) - 坚持是最宝贵的，别人的奇舞周刊早已经过百期了
- [大搜车前端](http://f2e.souche.com/blog/) - 前端网红 [小芋头君](http://weibo.com/676588498) 所在的团队，文章质量高，尤其是 Node 方向的
- [百度 FEX](http://fex.baidu.com/) - 代表作 ```FIS```、```UEditor```、```WebUploader```、```KityMinder```
- [腾讯全端 AlloyTeam](http://www.alloyteam.com/) - 腾讯 Web 前端团队，博客真的有点丑...
- [粉丝日志 for 张丹](http://blog.fens.me/) - 大爱作者写的 ```Node``` 系列
- [张鑫旭](http://www.zhangxinxu.com/wordpress/) - 成名多年的、高产的前端大湿，```CSS```猛人


<h3 id="blog_build">博客搭建</h3>

- [Hexo](https://hexo.io/zh-cn/) - 快速、简洁且高效的博客框架，照着文档分分钟就可以在本地跑起来。```Github``` 地址:[Hexo](https://github.com/hexojs/hexo)
- [Jekyll](http://jekyll.bootcss.com/) - 将纯文本转化为静态网站和博客。由于环境依赖的问题，所以安装起来可能稍费劲那么一点。```Github``` 地址：[Jekyll](https://github.com/jekyll/jekyll)
- [GithubPages](https://pages.github.com/) - 免费的静态站点。配合着 ```Hexo``` 或 ```Jekyll``` 的模板，分分搭建出一套炫酷的个人博客
- [Tumblr](https://www.tumblr.com/) - 轻博客的祖师爷，各种各样的主题感觉不错
- [Wordpress](https://zh-cn.wordpress.com/) - 这玩意古老到都不想介绍

> 使用 ```Hexo/Jekyll + GitPage```，前端搭建静态博客那是相当 easy。用 ```Markdown``` 写文章做记录，再 ```push``` 到 ```Github``` 上，分分钟高大上有木有

再推荐三款视觉效果极佳的 ```Hexo``` 主题，且在 ```Github``` 上的 ```star``` 都很不错：
- [NexT](https://github.com/iissnan/hexo-theme-next)
- [Yilia](https://github.com/litten/hexo-theme-yilia)
- [Tranquilpeak](https://github.com/LouisBarranqueiro/hexo-theme-tranquilpeak)

不能偏心，所以也推荐三款 ```Jekyll``` 的好主题：
- [So Simple](https://github.com/mmistakes/so-simple-theme) 如果你看过俺的博客，对这个主题就肯定不会陌生啦
- [HPSTR](https://github.com/mmistakes/hpstr-jekyll-theme) 当初 [fefork](http://www.fefork.com/) 差点选这个主题:)
- [beautiful](https://github.com/daattali/beautiful-jekyll#readme)

<h3 id="html">HTML</h3>

纯 ```HTML``` 相关其实没有好玩的项目，所以这儿展示的内容主要都是一些模板，而且以下列出来的都是免费的，方便拿取搭架后台或者博客

- [HEAD](https://github.com/joshbuchea/HEAD) - 最全的 ```<head>``` 列表，真心佩服这种偏执的整理能力
- [blur-admin](https://github.com/akveo/blur-admin) - 视觉冲击极强的管理后台，各种动画效果。PS：因为团队有[ant-design](https://github.com/ant-design/ant-design)的使用经验，感觉使用起来不是很顺畅，这套后台又是基于```AngularJS```，所以再三权限之后还是没实际使用，劳资还是别给团队添乱了，囧...
- [AdminLTE](https://github.com/almasaeed2010/AdminLTE) - 很小清新的后台模板，每次看[preview](https://almsaeedstudio.com/preview) 页面都觉得很有视觉冲击
- [gentelella](https://github.com/puikinsh/gentelella) - 刚用这个搭建了我司内部用的的数据平台，效果喜人。模板实现的功能比较全，比如登录、注册甚至各种 ```widget```，所以最终交付的时候，自己几乎没写几行CSS。
- [material-design-lite](https://github.com/google/material-design-lite) - ```Star``` 数超过2W的开源模板项目，包含了多套简洁的 ```templates```，可以用于博客、后台或者企业首页。


<h3 id="css">CSS</h3>

- [MetroUI](http://metroui.org.ua/) - 好看好用，重点是样式特别、个性
- [Font-Awesome](http://fontawesome.io/) - 图标字体库。相类似的库有不少，大厂都喜欢造轮子嘛:)
- [LoadersCSS](https://connoratherton.com/loaders) - 用 CSS 技术实现 loading 动画； 补一句，想熟悉、理解 ```keyframes、animation、transform、transition``` 的童鞋可以直接去读其源码(只有千把行代码)，读完就算出师鸟:)
- [WeUI](https://github.com/weui/weui) - 一套同微信原生视觉体验一致的基础样式库 为微信 Web 开发量身设计，令用户的使用感知更加统一
- [PostCSS](https://github.com/postcss/postcss) - 最近才知道大名鼎鼎[Autoprefixer](https://github.com/postcss/autoprefixer)是其插件 推荐大漠的文章[《PostCSS深入学习》](http://www.w3cplus.com/PostCSS/postcss-deep-dive-what-you-need-to-know.html)，有关 PostCSS 不是什么？PostCSS 是什么？PostCSS 可以做什么等等问题，文章里面有答案
- [CSSgram](https://github.com/una/CSSgram) - 图片滤镜库，终于可以用 CSS 在 web 上实现滤镜的效果鸟 IE不支持，不过新的移动设备支持没问题 [Can I Use](http://caniuse.com/#search=CSS%20Blend%20Modes)
- [HINT.css](https://github.com/chinchang/hint.css) - 一款非常小巧的提示框效果
- [Balloon.css](http://kazzkiq.github.io/balloon.css/) - 同上，一款非常小巧的提示框效果
- [Hover.css](http://ianlunn.github.io/Hover/) - 很多鼠标 Hover 态的效果，可以给产品学习一下:)
- [Cursor](http://css-cursor.techstream.org/) - 记录各浏览器对Cursor的支持情况
- [csscss](https://github.com/zmoazeni/csscss) - 用于检查 CSS 代码冗余
- [purecss](http://purecss.io/) - 小巧的响应式 CSS 库，Yahoo!出品
- [hamburgers](https://jonsuh.com/hamburgers/) - 简单的动画库，让 Click(or Tap) 变得美妙
- [cssmatic](http://www.cssmatic.com) - 一个帮忙调试CSS效果的工具


<h3 id="javascript">浏览端 JS</h3>

- [requirejs](https://github.com/requirejs/requirejs) - JS模块化是构建复杂项目的第一步 中文学习文档奉上：[RequireJS 中文网](http://www.requirejs.cn/)
- [three.js](https://github.com/mrdoob/three.js) - JavaScript 3D 库。超多的 [examples](http://threejs.org/examples/) 等着你去发现，你只需要关注内存和风扇就行了
- [ECharts](http://echarts.baidu.com/index.html) - 好用，最关键的是支持的图表展示非常之多，强烈推荐
- [Swiper](http://www.swiper.com.cn) - 强大的 Slider 库 其实这类效果库非常多，但文档能那么专业的就很少鸟
- [babel](https://babeljs.io/) - ```ES6``` 用起来。这个插件可以让我们用新的 **标准/提案** 写 ```JavaScript``` 代码，然后再向下 **转换编译**，最终生成随处可用的 ```JavaScript``` 代码。中文文档奉上[《babel-handbook》](https://github.com/thejameskyle/babel-handbook/blob/master/translations/zh-Hans/README.md)
- [fullPage](http://alvarotrigo.com/fullPage/) - 非常好用的全屏滑动库，看 Demo 就明白
- [PhotoSwipe](http://photoswipe.com/) - 偶常用的 js 库 官网上有这么一句很关键、重要"no dependencies"
- [Vuejs](http://cn.vuejs.org) - 比较喜欢其作者... 所以劳资正在看源码学习学习
- [mixitup](https://github.com/patrickkunka/mixitup) 一款基于 ```jQuery``` 的 **排序/过滤** 的JS库，最关键是有着美妙的动画效果
- [favico.js](http://lab.ejci.net/favico.js/) - 动态改变浏览器标签栏中的网站图标，非常好玩
- [ant.design](http://ant.design) - 蚂蚁金服搞的良心项目，文档美好的令人发指 样式优雅，强烈推荐内部系统尝试此库
- [highlightjs](https://highlightjs.org/) - 代码高亮库，支持非常多的语言
- [daterangepicker](http://www.daterangepicker.com) - 时间选择插件的不二选择，基于 ```Bootstrap``` 和 [Moment.js](http://momentjs.com/)
- [nodePPT](https://github.com/ksky521/nodePPT) - 前同事三水的大作，好用必须得支持:) 用 Markdown 写 PPT，还可以 HTML 混排，上手飞快
- [excellentexport](https://github.com/jmaister/excellentexport) - 纯前端的 Excel 导出，非常之方便
- [Sortable](https://github.com/RubaXa/Sortable) - 拖拽神器，用了就知道
- [toastr](https://github.com/CodeSeven/toastr) - 信息提示的库，推荐的原因是卖相好、功能强大  [demo](http://codeseven.github.io/toastr/demo.html)
- [peity.js](http://benpickles.github.io/peity/) - jQuery的图表插件，特别cute，感觉萌萌哒 将HTML转换成一个小的```<svg>```饼图、圆环图、折线图等等
- [emojify.js](https://github.com/Ranks/emojify.js) - 能够将```emoji```关键词转换为```emoji```图片的```JS```插件 可以快速的为你的网站提供```emoji```表情支持
- [Push.js](https://github.com/Nickersoft/push.js) - 基于 ```Notification API``` 实现的桌面效果的提示栏。浏览器支持情况不错，如[http://caniuse.com/#search=Notification](http://caniuse.com/#search=Notification)
- [Highcharts](http://www.hcharts.cn/) - Highcharts 中文网，又是一个图表库 确实功能强大，但是觉得不好看... PS：官网就做的不好看，脏脏的赶脚
- [NProgress](https://github.com/rstacruz/nprogress/) - 使页面加载时有更好的loading效果
- [Noticejs](https://github.com/jaredreich/notie.js) - 一个简单的通知库，木有依赖
- [onepage-scroll](https://github.com/peachananr/onepage-scroll) - 依赖 jQuery 的单页滚动库，和 [fullPage](http://alvarotrigo.com/fullPage/) 类似
- [videojs](http://videojs.com/) - 当下视频需求都用上```<video>```鸟 样式和交互统一的问题交给 videojs 搞定:)
- [clipboard](http://zenorocha.github.io/clipboard.js/) - 仅 2KB 大小，搞定剪贴板功能，屌不屌~ 但是，Safari 不支持...
- [impress.js](https://github.com/impress/impress.js) -  用来写 PPT 不错，偶也曾为其写过一篇[impress.js 初体验](http://www.cnblogs.com/Darren_code/archive/2013/01/04/impressjs.html)
- [Cropper](http://fengyuanchen.github.io/cropper/) - 国人开发的图片裁剪库

> ___```Swiper/PhotoSwipe/fullPage``` 有这仨库，微信里常见的 H5 页完全不是问题哒___


<h3 id="project_build">Project Build</h3>

- [pm2](https://www.npmjs.com/package/pm2) - 是一个带有负载均衡功能的 Node 应用的进程管理器； 是 [Forever](https://www.npmjs.com/package/forever) 的进阶库，想了解的可以看这篇文章[《拥抱PM2》](http://se77en.cc/2013/06/27/goodbye-node-forever-hello-pm2-translation/)
- [Webpack](http://webpack.github.io/) - 项目构建工具，由于过于复杂和太强大，所以劳资还没去深入研究。推荐篇教程：[webpack 教程资源收集](https://github.com/naraku666/webpack-tutorial-collection)
- [Gulp](https://github.com/gulpjs/gulp/) - Gulp 是基于 Node 实现 Web 前端自动化开发的工具。 俺总结了篇[《gulp使用小结》](http://www.fefork.com/gulp_1/)，推荐您阅读:)
- [Bower](http://bower.io/) - 前端项目的包管理其实是件复杂的事 谁谁谁依赖谁谁谁，谁谁谁依赖谁谁谁的某个版本...卧槽 Bower 就是搞定这件事儿的，亲爹是 Twitter 推荐篇 Bower 的中文文章：[《bower 解决 js 的依赖管理》](http://blog.fens.me/nodejs-bower-intro/)
- [Grunt](http://gruntjs.com/) - 和 Gulp 类似，都是项目构建的常见选择 对比这俩的文章可谓不少，推荐篇[《Gulp vs Grunt》](http://www.benben.cc/blog/?p=407) 英盲又想看文档，可以去[Grunt 中文网](http://www.gruntjs.net/)
- [FIS](http://fex-team.github.io/fis3/) - 度厂出品的前端构建工具 文档清晰，功能强大，推荐了解和使用
- [Gitlab CI](https://ci.gitlab.org/) - 一套基于[Gitlab](https://about.gitlab.com/)的持续集成服务
- [Travis CI](https://travis-ci.org/) - 为 Github 上的项目打造的 CI 服务。记得 2013年 开始陆续看到文章介绍，刚在官网上看到，目前已经有 30W 开源项目和 23.5W 用户在使用。大概看了一下 [getting started](https://travis-ci.org/getting_started)，简单几步就可以实现开源项目的持续集成。

> Gulp + Webpack 的使用__套路__参考: [learning-gulp](https://github.com/demohi/learning-gulp)

> Gulp 资料收集：[use-gulp](https://github.com/Platform-CUF/use-gulp)

> 推荐篇与 Webpack 相关的文章《[CSS Modules](http://boke.io/tan-tan-css-modules/)》

> Webpack 用起来吼吼：[webpack-howto](https://github.com/petehunt/webpack-howto)


<h3 id="node_package">Node Package</h3>

> 作为一名大前端甚至是多端，```Node``` 绝逼是必备的一块

> 有关 ```Node``` 的学习资料，请访问 [Node 学习资料](https://github.com/nieweidong/fetool#node_read)

##### 这里介绍些有特色且前端有必要知道的包

- [anywhere](https://www.npmjs.com/package/anywhere) - 随时随地将你的当前目录变成一个静态文件服务器的根目录
- [supervisor](https://www.npmjs.com/package/supervisor) - 监控 Node 代码，自动重启。 A supervisor program for running nodejs programs
- [nodemon](https://github.com/remy/nodemon) - 监控 Node 代码，自动重启。 Nodemon is a utility that will monitor for any changes in your source and automatically restart your server.
- [pm2](https://www.npmjs.com/package/pm2) - 是一个带有负载均衡功能的 Node 应用的进程管理器； 是 [Forever](https://www.npmjs.com/package/forever) 的进阶库，想了解的可以看这篇文章[《拥抱PM2》](http://se77en.cc/2013/06/27/goodbye-node-forever-hello-pm2-translation/)
- [async](https://www.npmjs.com/package/async) - 一个流程控制工具包，提供直接而强大的异步功能
- [optimist](https://www.npmjs.com/package/optimist) - 当需要处理 ```CLI``` 中的 ```argv``` 时(即命令行传参)，用它就行了
- [lodash](https://www.npmjs.com/package/lodash) - JS 工具库 ```Underscore.js```的一个 fork 发展而来
- [socket.io](https://github.com/socketio/socket.io) - 预计 Node 的实时框架 聊天室、页游等对实时性有高要求的较适用
- [Inquirer.js](https://github.com/SBoudrias/Inquirer.js) - 实现的效果比 [Commander](https://github.com/tj/commander.js) 简单、有趣，贴个 GIF供大家参考：[loc](https://raw.githubusercontent.com/nieweidong/local-info/master/img/loc.gif)
- [Commander](https://github.com/tj/commander.js) - 用 Commander.js 可以方便的创建基于 Node 的命令行工具，比如 [vue-cli](https://github.com/vuejs/vue-cli) 这类，瞬间觉得自己又高大上了呢~
- [Mongoose](https://github.com/Automattic/mongoose) - 让 NodeJS 更容易操作 Mongodb 数据库；  附上一篇[Mongoose 学习参考文档](https://cnodejs.org/topic/504b4924e2b84515770103dd)
- [CNPM](http://npm.taobao.org/) - 淘宝 NPM 镜像，提供了 NPM 同步的服务 当然可不仅仅这样，利用 CNPM 可以打造__企业/个人__私有的 NPM 服务 推荐篇搭建私有NPM的文章：[《CNPM搭建私有的NPM服务》](http://blog.fens.me/nodejs-cnpm-npm/)
- [koa](http://koajs.com/) - 玩 Node 都知道 express，但使用 koa 的就少很多，门槛比 Ex 稍高 通过 generator 避免繁琐的回调函数嵌套，强烈推崇 [官方的文章教程](https://github.com/guo-yu/koa-guide)
- [Shipit](https://github.com/shipitjs/shipit) - 一个强大的自动化部署工具。 shipit 很多地方非常类似 gulp，他们的核心都是任务系统。
- [node-inspector](https://www.npmjs.com/package/node-inspector) - Node 调试工具，使用起来跟 Chrome 的 JS 调试器很相似
- [winston](https://www.npmjs.com/package/winston) - Node 服务最流行的日志库之一
- [co](https://www.npmjs.com/package/co) - 用 generator 写法让异步代码同步
- [thenify-all](https://www.npmjs.com/package/thenify-all) - 把异步的方法变成 Promise 的 Promisifies all the selected functions in an object
- [PhantomJS](http://phantomjs.org/) - 一般用来做抓取截图和无界面测试 也可以用来操作 DOM 和网络监测，很好玩的库 [Quick Start](http://phantomjs.org/quick-start.html)
- [ava](https://www.npmjs.com/package/ava) - 偶是应TJ大神推荐而得之的 ```ava``` 未来的测试运行器
- [Mocha](https://github.com/mochajs/mocha) - Node 里最常用的测试框架； 它支持多种 Node 的 Assert libs； 同时支持异步和同步的测试，同时支持多种方式导出结果； 也支持直接在 browser 上跑 JS 代码测试。
- [koa-validate](https://www.npmjs.com/package/koa-validate) - ```koa``` 的校验库 可以非常方便的对 ```queryString``` 或 ```postBody``` 的信息进行验证
- [line-reader](https://www.npmjs.com/package/line-reader) - 基于```steam```的按行读文件，偶处理日志时用哒 要不实现一个按行读文件，又得 ```steam```、 又得 ```chunk```，还是比较麻烦的
- [binary](https://github.com/substack/node-binary) 作者是大神 [substack](https://github.com/substack)，对应的处理 ```PHP/Python``` 中的 ```unpack``` 方法。英文解释：Unpack multibyte binary values from buffers and streams.
- [everyauth](https://www.npmjs.com/package/everyauth) - OAuth 的集成解决方案
- [shelljs](http://documentup.com/shelljs/shelljs) - 写 Node 时难免需要用 shell 去操作些神马 shelljs 是基于 Node 的 shell 工具，API 及其简单
- [hashids](https://www.npmjs.com/package/hashids) - 看名称就懂，给 userid 加解密用的
- [node-pool](https://github.com/coopernurse/node-pool) - 让 ```Node``` 有连接池的概念
- [colors](https://www.npmjs.com/package/colors) - 花俏的小工具 让打印```console.log```时有更好的展示样式
- [n](https://www.npmjs.com/package/n) - 控制Node的版本，想升级一行代码搞定

> ```supervisor``` 和 ```nodemon``` 这俩都是监控 Node 代码，使得每次修改代码后会，开发 Node 程序必备

> 以上库俺都有使用过，甚至有不少都是项目开发中、各种特定场景下必用的，有任何使用问题欢迎沟通哈:)


<h3 id="node_project">Node Project</h3>

_暂无_


<h2 id="read">精选阅读</h2>

<h3 id="fedev">前端技术</h3>

- [2015D2前端论坛](http://www.imooc.com/learn/590) - Node方向非常值得看，有干货，相信东哥推荐哈
- [前端开发规范手册](http://zhibimo.com/read/Ashu/front-end-style-guide/index.html) -  此手册主要实现的目标：代码一致性和最佳实践
- [《babel-handbook》](https://github.com/thejameskyle/babel-handbook/blob/master/translations/zh-Hans/README.md) - 可以用新的规范(如 ```ES6```)写代码，经过 ```babel``` 编译后生成没有兼容问题的代码
- [JavaScript Standard Style](http://standardjs.com/) - 强烈推荐，尤其适合技术 Leader。优秀的 JS 编码规范是好前端团队的开始
- [ECMAScript 6入门](http://es6.ruanyifeng.com/) - 阮一峰大神所著，一本开源的JS教程 全面介绍 ECMAScript 6新引入的语法特性
- [ReactNative 中文版](http://wiki.jikexueyuan.com/project/react-native/) - 翻译自官方的中文文档
- [ReactWebpackCookBook](https://fakefish.github.io/react-webpack-cookbook/index.html) - 此书会引导读者是进入```React```和```Webpack```的世界。 俩都是非常前沿的技术，同时使用会更有趣。
- [ReactNative 学习指南](https://github.com/ele828/react-native-guide) - 新玩意层出不穷... 对于能持续学习的童鞋，这是个美好的时代
- [HTML/CSS 编码规范](http://www.css88.com/doc/codeguide/) - 编写灵活、稳定、高质量的```HTML```和```CSS```代码的规范
- [移动前端入门](http://gold.xitu.io/entry/56c29abfa34131005b8cb1f3) - 入门价值高，移动方向常见问题的较好总结
- [GulpBook](https://github.com/nimojs/gulp-book) - Gulp 是基于 Node 实现 Web 前端自动化开发的工具


<h3 id="node_read">Node 学习资料</h3>

- [Node.js 中文资料导航](https://github.com/youyudehexie/node123) - Node 的中文资料导航，```start1300+```
- [从零开始 NodeJS 系列文章](http://blog.fens.me/series-nodejs/) - 基本上每一篇都看过，强烈推荐
- [Node.js 包教不包会](http://nqdeng.github.io/7-days-nodejs/) - 值得阅读，看完绝不用买书鸟
- [七天学会 NodeJS](https://github.com/alsotang/node-lessons) - 劳资还没看，不过看目录还不错:)
- [Style Guide](https://github.com/dead-horse/node-style-guide) - 这是一份关于如何写出一致且美观的 ```Node``` 代码的风格指南
- [koa实战](http://book.apebook.org/minghe/koa-action/index.html) - “[明河](https://github.com/minghe)出品”这四字已经说明一切。PS：正在连载中
- [stream-handbook](https://github.com/jabez128/stream-handbook) - 如果学习 NodeJS，那么流一定是需要掌握的概念


<h3 id="interview">前端面试</h3>

- [笔试面试知识整理](https://github.com/HIT-Alibaba/interview) - 打开其 Gitbook 上的地址我都惊呆了。虽然有部分内容待完善，但是光浏览目录都是享受。
- [在 LinkedIn 做面试官的故事](http://dongfei.baijia.baidu.com/article/52449) - 非面试题，介绍 LinkedIn 的面试过程 文章有很多中肯的建议和想法，推荐阅读
- [大漠：写给前端面试者](http://www.w3cplus.com/css/write-to-front-end-developer-interview.html) - 这篇文章不涉及任何的面试题 大漠与大家聊聊面试者与被面者之间的感受...
- [前端面试题](https://github.com/h5bp/Front-end-Developer-Interview-Questions/tree/master/Translations/Chinese) - Git 上非常火的前端面试题，```start17k+```
- [前端面经](https://github.com/paddingme/Front-end-Web-Development-Interview-Question) - 主要内容是些前端面试笔试题和面试套路，值得阅读


<h3 id="otherdev">其他技术</h3>

- [命令行的艺术](https://github.com/jlevy/the-art-of-command-line/blob/master/README-zh.md) - 熟练使用命令行是优秀工程师的基础
- [MongoDB 极简实践入门](https://github.com/StevenSLXie/Tutorials-for-Web-Developers/blob/master/MongoDB%20%E6%9E%81%E7%AE%80%E5%AE%9E%E8%B7%B5%E5%85%A5%E9%97%A8.md) - 入门推荐的套路，非常浅显易懂
- [Mac 设置指南](https://github.com/macdao/ocds-guide-to-setting-up-mac) - Mac 使用必看 尤其适合 偏执狂/强迫症 患者:)
- [Markdown 资料](https://github.com/xirong/my-markdown) - 简单看些语法入门，快速用起来


<h2 id="tools">工具/软件</h2>

<h3 id="web">Web</h3>

- [百度脑图](http://naotu.baidu.com) - 非常方便的思维导图工具。功能强、样式佳、无广告，算百度出的良心产品之一。除了 Evernote，脑图是我非常依赖的记录工具
- [CanIuse](http://caniuse.com/) - __前端必备__；查看浏览器对各种新特性的兼容情况
- [overapi](http://overapi.com/) - 最全的开发人员在线速查手册
- [ProcessOn](https://www.processon.com/) - 和百度脑图的功能类似，脑图工具。但是还有社交、通讯的功能，提倡 **协作绘图** 的理念。感觉网页跳转的时候有点慢，模板样式比百度脑图好看(个人观点)，而且团队协作的功能真的相当好用。
- [Slides](https://slides.com/) - 一个所见即所得的 WebPPT 编辑器。虽然装X效果一般，但是比较推荐，因为无论懂不懂 UI，做出来的效果不会太难看
- [faviconer.co](http://www.faviconer.co/) - 一个所见即所得的icon生成器，很好用
- [smallpdf](http://smallpdf.com/cn) - 提供各种格式和 PDF 互相转换
- [Cmd Markdown](https://www.zybuluo.com/mdeditor) - 好用的 Web 版 Markdown 编辑器
- [VimAwesome](http://vimawesome.com/) - Vim 插件集合，__Vim 党必备__
- [Tower](https://tower.im) - 小而美的多人协同工具。 不光只有 Web 版，还有 iPhone、iPad、Android、微信版。
- [StackEdit](https://stackedit.io/editor) - 又是一款 Web 版 Markdown 编辑器
- [墨刀](https://modao.cc/) - 一个在线移动应用原型制作工具。 旨在帮助产品经理快速制作可在手机端展示的移动应用原型。
- [htm2pdf](http://www.htm2pdf.co.uk) - HTML to PDF
- [Speaker Deck](https://speakerdeck.com/p/featured) - 在线的演讲稿展示平台
- [RunJS](http://runjs.cn/) - 在线编辑、展示、分享、交流你的 ```JavaScript``` 代码
- [Bootswatch](https://bootswatch.com/) - ```Bootstrap``` 的免费模板
- [AdminLTE](https://github.com/almasaeed2010/AdminLTE/) -  又是一个 ```Bootstrap``` 的免费管理后台


<h3 id="app">APP</h3>

> 以下列表中的 APP 都是不区分系统平台的

- [印象笔记](https://www.yinxiang.com/) - 免费账号完全够用，跨平台跨终端的记录软件
- [365日历](http://www.365rili.com/) - 首先肯定比系统自带的日历强大，要不推荐个蛋蛋 俺一般用来搞目标管理，比如学习计划和工作计划 生活中会订阅演唱会、电影首映的信息
- [多看阅读](http://www.duokan.com/) - kindle 确实好，但是懒得随身带着 多看还算不错，书较多且偶尔有特价比较爽
- [Surge](https://itunes.apple.com/cn/app/surge-web-developer-tool-proxy/id1040100637?mt=8&v0=WWW-GCCN-ITSTOP100-PAIDAPPS&l=&ign-mpt=uo%3D4) - 非免费 牛逼的网络开发与调试工具，前端必备
- [Monkey](https://github.com/coderyi/Monkey) - Monkey 是 iPhone 上一个 GitHub 第三方客户端。 展示 GitHub 上的开发者的排名，以及仓库的排名


<h3 id="mac_soft">Mac 软件篇</h3>

> 对于美好事务的追求无论何时都不算晚。

Mac 下的软件那么多，又是免费又是付费，应该怎么选呢？我来分享下我的推荐列表，推荐的优先级老规矩，从上往下依次降低。

- [Alfred](https://www.alfredapp.com/) - **免费**，绝对的推荐Top1，很提效率，高级版 ```Powerpack``` 售价 ```£17```。除了能快速搜索和打开应用程序之外，查找文本文件、全文检索、调起浏览器搜索和计数器都是俺经常使用的功能。如果想知道具体咋用，推荐阅读老池(池建强)的文章：[《神兵利器—Alfred》](http://www.cnblogs.com/chijianqiang/p/alfred.html)
- [iTerm2](http://www.iterm2.com/) - **免费**。```Mac``` 终端功能少又不好看，```iTerm2``` 可以解救你~  推荐篇文章：[《让你的命令行丰富多彩》](http://swiftcafe.io/2015/07/25/iterm/?hmsr=toutiao.io&utm_medium=toutiao.io&utm_source=toutiao.io)
- [HyperDock](https://bahoom.com/hyperdock/) - 售价 ```￥68```，感觉还是很值的(特么我还想说，```Windows``` 数年前就自带的功能，在 ```Mac``` 上还收费，略忧伤)。预览和快速切换窗口太有必要了，能用快捷键控制窗口，能让拖拽到边缘的窗口自动调整大小(window早就有的功能)，真心能提高效率。推荐篇中文的文章：[让Mac的窗口飞](http://www.cnblogs.com/ider/p/let-mac-window-fly-with-hyperdock.html)
- [ATOM](https://atom.io) - **免费**。2015/7 之前，在桌面环境下偶最喜欢的编辑器是 ```Sublime```，但之后就是 ```ATOM```，俺也专门为它写了篇___[使用纪要](https://github.com/nieweidong/learn-atom)___
- [Surge](https://itunes.apple.com/us/app/surge-web-developer-tool-proxy/id1040100637) - ```$99.99```。关注 ```IOS``` 开发或者常备梯子的同学，肯定都知道这大名鼎鼎的软件。价钱从 ```￥68``` 涨到 ```$99``` 也让偶咋舌，背后的故事就不细说了，感兴趣可自行去谷歌百度一下。PS：翻墙软件 [小飞机ShadowsocksX](https://shadowsocks.com/) 也非常棒，同样推荐：“轻量级科学上网姿势，改变您的生活体验！”
- [1Password](https://1password.com/) - **免费** 试用一个月，售价不便宜 ```$64.99```。如果觉得对各种账号的密码管理心累，那么推荐你使用，这个钱肯定值，```Mac``` 和 ```iPhone``` 通用，爽歪歪。如果账号密码都是那种一、俩个套路，而且被盗也随意，那么用不用就无所谓啦
- [Sequel Pro](http://www.sequelpro.com) - **免费**。好用的Mysql工具
- [Manico](http://manico.im/) - **免费** 版已经很好用了，全功能版售价 ```￥25```。快捷启动和切换 ```APP``` 的工具，高效的第一步
- [Moom](http://manytricks.com/moom/) - 售价 **$10**，有试用版。个人觉得这钱花的值，设置快捷键之后可以方便的调整每个窗口的位置。我不管在家还是公司都是开双屏，外接屏幕三分之一 ```iTerm```，三分之二 ```ATOM```，日常使用时各种全屏、居中、靠左、靠右等用快捷键来回着换，辛福感满满的。
- [CheatSheet](https://www.mediaatelier.com/CheatSheet/) - **免费**。能够显示当前程序的快捷键列表，默认的快捷键是长按 ⌘
- [马克鳗](http://www.getmarkman.com/) - **免费** 版已经够用啦，收费版是 ```60/年```。英文名 ```MarkMan```，非常强大好用的标注、测量工具，__强烈推荐__
- [BrowseShot](https://itunes.apple.com/cn/app/browseshot/id615916400) - **免费**。偶正在使用的网页截图工具，强烈推荐
- [Wireshark](https://www.wireshark.org/) - **免费**。说实话，```Mac``` 下木有 ```Fiddler``` 挺不习惯，不过在有更强大的替代品，虽然有点复杂...还好后来下载到便宜(```￥68```)的 ```Surge``` 做替代品
- [LICEcap](http://www.cockos.com/licecap/) - **免费**。屏幕录制工具，支持导出 GIF 动画图片格式 轻量级、使用简单，录制过程中可以改变录屏范围
- [Bartender 2](https://www.macbartender.com/) - 售价 ```$20.97```，但是可 **免费** 试用四周。Mac右上角菜单的管理工具，试用之后右上角的菜单瞬间清爽了，反正试用下也不花钱:)
- [BeyondCompare](http://www.scootersoftware.com) - **免费**。在Windows下就开始用了 比对文件和文件夹杠杠好使，Merge必备工具
- [SourceTree](https://www.sourcetreeapp.com/) - **免费**。属于大名鼎鼎的 ```Atlassian```，一款好用的的 ```Git``` 客户端工具，重点是 **支持中文**，哈哈:)
- [focus booster](https://www.focusboosterapp.com/) - **免费** 已经够用，当然还有更高级的 ```INDIVIDUAL/PROFESSIONAL```，售价分别是 ```$3/$5```。因为比较在意时间管理，所以当工作压力较大时，这软件是俺的必备之物
- [WebTorrent](https://webtorrent.io/) - **免费**。直接播放种子，你懂得。年轻的斯坦福大神 [Feross](http://feross.org/) 开发，Git上的开源项目哦。
- [WebStorm](http://www.jetbrains.com/webstorm/) - **$129**，可试用一个月。功能超强的前端 ```IDE```，谁用谁知道 PS：貌似俺插件装多了，用着卡卡的，风扇呼呼转...然后俺就卸载装了，装了 ```ATOM```...
- [MindNode](http://mindnode.com/) - 售价 **$29.99**，有免费试用版。这是款漂亮的思维导图工具。其实 [百度脑图](http://naotu.baidu.com/) 这类 Web 上的工具绝对够用了，不太推荐...
- [Mou](http://25.io/mou/) - 我曾使用过的 Markdown 编辑器，不推荐使用。原本已经准备去掉，但是偶还是想让大家了解下这个有意思的事情：[《一年了，那个闻名遐迩的 Mou 你还记得吗？》](http://matrix.sspai.com/p/c7a3c9c0)

以上列出来的都是偶觉得比较有意思、有特点的软件。当然，类似 ```Docker```、```Polarr(泼辣修图)``` 等这类都太小众；```有道翻译 ```、```Evernote```、```Foxmail``` 等这类又太大众；然后有些软件买了觉得有点“亏”，比如刚出手买入的 ```Final Cut Pro```，其实机器自带的 ```iMovie``` 就挺好了（完美诠释《Final从入手到放弃》）。所以，这几类就不一一往这列举啦~


<h3 id="linux">Linux</h3>

> 作为一名程序员兼工具控，我期待自己无比高效

首先，都是免费哒；然后，所列项目都是针对 ```CLI(命令行界面)``` 哒；最后，探索无止境

- [oh-my-zsh](http://ohmyz.sh/) - ___终端党___ 必备，好处太多太多，比如炫酷的外观，超强的易用性...推荐大家阅读知乎的问题：[《为什么说 zsh 是 shell 中的极品？》](https://www.zhihu.com/question/21418449)
- [spf13-vim](https://github.com/spf13/spf13-vim) - 对于 Vim 偶之前做了好多文档和记录，但是自从了解有这个套路，那些记录都可以丢掉了。不过建议想了解的去看看 .vimrc 中的 Plugin，确实足够大而全。PS：如果遇见 ```neocomplete does not work``` 之类的错误，可以参考 [Problems with Vim and lua?](http://stackoverflow.com/questions/26724859/problems-with-vim-and-lua)
- [Vundle](https://github.com/VundleVim/Vundle.vim) - Vim 党必备。用于管理各种 Vim 插件，有 Git 就可以安装 ```$ git clone https://github.com/gmarik/vundle.git ~/.vim/bundle/vundle```
- [tree](http://mama.indstate.edu/users/ice/tree/) - linux 以树状图逐级列出目录的内容，装逼效果和实用功能都不错
- [cloc](http://cloc.sourceforge.net/) - 可用来计算 文件夹中各种语言的代码占比情况。展示内容非常直观，如某目录下 ```JavaScript``` 有多少个文件，共多少空格行数、注释行数、代码行数，就这些简单粗暴的内容。常见的安装方式可通过 ```npm``` 来进行安装。
- [oneapm](http://www.oneapm.com/) - 强大的运维工具，提供多种监控客户端； 有采集、分析、展示等一套功能； PS：我这用了服务器监控(免费哦)
- [httpie](https://github.com/jkbrzt/httpie) - 一个 CLI 中的 HTTP 客户端，用法简单，非常适合用来搞调试、测试
- [ESLint](http://eslint.org/) - 前端大神[Nicholas C. Zakas](http://nczonline.net/)创建。JavaScript 辅助编码的规范工具，有效控制偶们的代码质量
- [Lucario](https://github.com/raphamorim/lucario) 暗色系主题，支持 Vim, Atom, Sublime Text, TextMate, Terminal.app, iTerm, Xcode and XTerm
- [cmatrix](http://www.asty.org/cmatrix/) - 作用就是装逼，可以在屏幕上显示经典的黑客帝国的数码雨效果(看官方文档上也有其他效果，俺就不往细研究了)。在 Mac 下安装非常简单，一步搞定：`$ brew install cmatrix`

**Mac**
- [Homebrew](http://brew.sh/) - 有了他 ```OS X``` 程序猿能更好的专注代码层面。最近在看《七周七语言》，里面出现各种语言环境，用 ```brew``` 来安装、管理各种解释器和编译器，省心省力！
- [Xcode](https://developer.apple.com/xcode/) - 因为玩 ```Swift``` 所以早早就下载了，后来才知道原来 ```Mac``` 下如果不安装 ```Xcode```，部分常用的指令都不支持，囧

<h3 id="BrowserPlugins">Chrome 浏览器插件</h3>

> ```Chrome``` 应用商店必定是需要翻墙的哈。

以下插件都是俺多年积累淘出来的，数量不多，所以就不区分 ```Github``` 插件和非 ```Github``` 插件了。按照俺推荐的强度自上向下展示，且大多数插件就是偶工作和生活必备，希望能对大家有用。后续如有新发现好插件，偶也会及时更新哒。

- [Postman](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop) - ```POST``` 接口调试终结者，异常强大的接口调试工具。稍稍有一点学习成本，推荐之
- [JSONView](https://chrome.google.com/webstore/detail/jsonview/chklaanhfefbnpoihckbnefhakgolnmc) - 就是个 ```JSON``` 格式的查看工具，可以很方便的展示数据，麻麻再也不用担心偶调试接口啦。PS：同类插件有不少，所以用的开心就行
- [二维码生成器](https://chrome.google.com/webstore/detail/%E4%BA%8C%E7%BB%B4%E7%A0%81qr%E7%A0%81%E7%94%9F%E6%88%90%E5%99%A8/pflgjjogbmmcmfhfcnlohagkablhbpmg) - RT。PS：这FF早已经自带生成二维码工具了，```Chrome``` 还得装插件才行，任性...
- [WEB前端助手(FeHelper)](https://chrome.google.com/webstore/detail/web%E5%89%8D%E7%AB%AF%E5%8A%A9%E6%89%8Bfehelper/pkgccpejnmalmdinmhkkfafefagiiiad) - [百度FE](https://www.baidufe.com/)出品，功能超全的 Chrome 插件。简单列一下其功能：QR码生成器、字符串编解码工具、JSON格式化查看器、前端编码规范检测、代码压缩工具、页面取色工具、统计并分析网页加载性能等等
- [Eye Dropper](https://chrome.google.com/webstore/detail/eye-dropper/hmdcmlfkchdmnmnmheododdhjedfccka) - 前端必备的颜色提取神器，操作简单容易上手
- [Vimium](https://chrome.google.com/webstore/detail/vimium/dbepggeogbaibhgnhhndojpepiihcmeb) 和 ```Vim``` 快捷键一样，浏览网站时不需要鼠标咯
- [Page Ruler](https://chrome.google.com/webstore/detail/page-ruler/jlpkojjdgbllmedoapgfodplfhcbnbpn) - 前端必备的尺子。计算页面元素间距、位置等信息的时候，你就知道它的好了，无脑上手，你值得拥有
- [FireShot](https://chrome.google.com/webstore/detail/capture-webpage-screensho/mcbpblocgmgfnpjjppndjkmgjaogfceg) - 可以截取整个网页、部分页面，然后支持导出为各种格式。俺微博上发的网页全景图都是靠这个插件截取的
- [Infinity](https://chrome.google.com/webstore/detail/infinity-new-tab/dbfmnekepjoapopniengjbcpnbljalfg) - 好不好用有点见仁见智了，但是我个人比较喜欢。使用后会让你的 **新标签页** 耳目一新，有漂亮的背景和各种常用的功能，比如地图、天气、```Gmail```、```Chrome```商店等等。当然，在这个插件的设置中还可以设置壁纸、动画效果等等
- [Momentum](https://chrome.google.com/webstore/detail/momentum/laookkfknpbbblfpciffpaejjkokdgca) - 同样也是 **新标签页** 的插件，但是不管是视觉上(高清大图)还是功能上，都比 [Infinity](https://chrome.google.com/webstore/detail/infinity-new-tab/dbfmnekepjoapopniengjbcpnbljalfg) 高大上不少，```Setting``` 里面有不少设置和快捷键，都很好上手的。[Infinity](https://chrome.google.com/webstore/detail/infinity-new-tab/dbfmnekepjoapopniengjbcpnbljalfg)胜在中文和直观，[Momentum](https://chrome.google.com/webstore/detail/momentum/laookkfknpbbblfpciffpaejjkokdgca)胜在视觉冲击。俺基本上这俩款看心情换着用，所以希望你也都能喜欢:)
- [Google翻译](https://chrome.google.com/webstore/detail/google-translate/aapbdbdomjkkjkaonfhkkikfgjllcleb) - 英文不好又得经常浏览英文资料的，一般都准备好了翻译工具。不过能在浏览器里达到划词翻译的方案就不多了，偶推荐这个Google翻译(PS：如不能翻墙，有道词典的扩展也同样支持划词翻译)。
- [Octotree](https://chrome.google.com/webstore/detail/octotree/bkhaagjahfmjljalopjnoealnfndnagc) - 在浏览器左侧展示 ```Github``` 项目的文件导航，使目录结构一目了然，而且我们国内 ```Github``` 的访问速度又不稳定，用这个工具也就很提效率了。对经常使用 ```Github``` 的同学强烈推荐
- [BuiltWith](https://chrome.google.com/webstore/detail/builtwith-technology-prof/dapjbgnjinbpoindlpdmhochffioedbn) / [wappalyzer](https://chrome.google.com/webstore/detail/wappalyzer/gppongmhjkpfnbhagpmjfkannfbllamg) / [Chrome Sniffer Plus](https://chrome.google.com/webstore/detail/chrome-sniffer-plus/fhhdlnnepfjhlhilgmeepgkhjmhhhjkh) - 几款超强的网站分析工具，可以给出网站非常多的技术栈信息。大到 ```Web Servers```、服务端的 ```Frameworks``` 或 ```JS``` 框架，小到 ```meta```、编码格式甚至 ```Analytics```，非常推荐
- [Adblock Plus](https://chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb/related) - 非常非常有名的免费的过滤广告的插件。PS：广告屏蔽这个见仁见智，其实俺个人还是比较接受一些个性化推荐的广告
- [Wide Github](https://chrome.google.com/webstore/detail/wide-github/kaalofacklcidaampbokdplbklpeldpj/related) - 无聊又实用的 ```Github``` 插件。无聊是因为这个插件就特么一个功能，**加宽**，能让 ```Github``` 页面变宽，每行展示更多的内容，尤其配合着[Octotree](https://chrome.google.com/webstore/detail/octotree/bkhaagjahfmjljalopjnoealnfndnagc)，展示效果极佳。非常推荐 ```Mac``` 用户实用，因为屏幕比较不大，变宽后阅读感觉更好
- [Gmail](https://chrome.google.com/webstore/detail/google-mail-checker/mihcahmgecmbnbcchbopgniflfhgnkff) - 方便查看自己的 ```Gmail``` 邮件
- [Imagus](https://chrome.google.com/webstore/detail/imagus/immpkjjlgappgfkkfieppnmlhakdmaab) 鼠标指针悬停在链接或缩略图上时直接在当前页面的弹出视图上显示这些图片、HTML5 视频/音频和内容专辑...看新浪微博时贼有用:)
- [DevTools Author](https://chrome.google.com/webstore/detail/devtools-author/egfhcfdfnajldliefpdoaojgahefjhhi) - 纯装逼的插件，可以选择你的 ```Chrome``` 开发者工具的主题，且支持的主题超过25种，视觉装逼控必备。设置分大概三步，官网有文字说明，```youtube``` 上的视频教程奉上(Customization With DevTools Author)[https://www.youtube.com/watch?v=AUZagMLMAJc]
- [GitPlug](https://chrome.google.com/webstore/detail/porter-plug/lngoojfoglemfpbeiomhgheccpdheilp) - 在 ```Github``` 项目页中嵌入有关的图表信息，直观的展示当前项目的 ```Star Trend```，能方便看到当前这个开源项目的发起时间，火爆趋势；对比较知名的项目还有相关的 ```News``` 展示
- [OctoLinker](https://chrome.google.com/webstore/detail/octolinker/jlmafbaeoofdegohdhinkhilhclaklkp) - 在 ```package.json``` 或任意 ```.js``` 文件中，可以方便的对 ```require()``` 的 ```package``` 进去点击，跳转去对应的 ```Github``` 页面。PS：特么不太好表达，建议你去这个插件的概述页，里面有个十来秒的视频，看完就明白鸟

补充：

1. 翻墙代理的插件偶没使用，偶手机和电脑的翻墙都是配的 ```Surge``` 无脑搞定，不过翻墙代理插件推荐[Proxy SwitchySharp](https://chrome.google.com/webstore/detail/proxy-switchysharp/dpplabbmogkhghncfbfdeeokoefdjegm)，熊掌公司里大多用的都是它
2. 日常开发相关的插件就以上这些，还有几款如知乎的插件、购物插件等这类与开发效率不沾边的，俺就不这上头列了哈


<h3 id="git">Git</h3>

- [Git 教程-廖雪峰](http://www.liaoxuefeng.com/wiki/0013739516305929606dd18361248578c67b8067c8c017b000) - 俺有看过不少 Git 的文章，确实这个系列是最通俗易懂的
- [GitAwards](http://github-awards.com/) - Git 工具，可以查看 Git 排名
- [Git 速查](https://github.com/flyhigher139/Git-Cheat-Sheet/blob/master/Git%20Cheat%20Sheet-Zh.md) - 分类清晰的速查表
- [Git 简明指南](http://rogerdudler.github.io/git-guide/index.zh.html) - 入门```Github```的简明指南，木有高深内容:)
- [Git 学习资料整理](https://github.com/xirong/my-git) - 内容包括很多 Git 的相关资料，```star 1200+```
- [GitHub 漫游指南](https://github.com/phodal/github-roam) - 一篇还算不错的 Git 学习总结，就是乱了点... 我理解作者___漫游___的意思是漫无目的想到哪写到哪~ 看到作者为鸟达成 Git 连击的成就，也是蛮拼的:)


<h3 id="servers">服务端</h3>

如 ```Ruby、Python、Perl``` 等相似的服务端语言的学习资源。

_暂无_


<h3 id="backend">数据端</h3>

- [Mongoose](https://github.com/Automattic/mongoose) - 让 NodeJS 更容易操作 Mongodb 数据库。  附上一篇[Mongoose 学习参考文档](https://cnodejs.org/topic/504b4924e2b84515770103dd)


<h3 id="client">客户端</h3>

面对大名鼎鼎的 Electron，我懵逼了。犹豫了一会儿，不知道把其放在哪个分类中，于是我单开了一个 **客户端** 的类目。

- [Electron](http://electron.atom.io/) - 如果你想利用 web 技术构建跨平台的桌面程序，那么赶紧来了解 Electron。

<h3 id="ux">设计/交互</h3>

> 作为负责最终效果呈现的前端工程师，多少得了解些 __设计和交互__ 的，这也是为什么 fetool 会单独的存在这一章...当然话又说回来了，偶毕业的第一份工作是设计:)

- [站酷](http://www.zcool.com.cn/works/) - 里面好东西太多，俺当年真没少再上面淘素材
- [UI中国](http://www.ui.cn/list.html) - 光听名字就知道有多高大上鸟:)


<h3 id="handbook">速查手册</h3>

> RT，这篇都是些文档或者API，一般这类东西都在大家浏览器的书签内，偶这也列一下大前端常用的手册地址

- [JavaScript Standard Style](http://standardjs.com/) - 强烈推荐，尤其适合技术 Leader。优秀的 JS 编码规范是好前端团队的开始
- [HEAD](https://github.com/joshbuchea/HEAD) - 最全的 ```<head>``` 列表，真心佩服这种偏执的整理能力
- [百度CDN公共库](http://cdn.code.baidu.com/) - 基本常见的库都收录拉，搞 demo 的时候特方便
- [HTML 和 CSS 代码规范](http://codeguide.bootcss.com/) - 编写灵活、稳定、高质量的 HTML 和 CSS 代码的规范
- [Linux命令中文手册](http://linux.51yip.com) - 木有系统的好好学习 Linux，所以命令更不熟悉 真羡慕那些CLI玩的飞起的:)
- [Git 速查](https://github.com/flyhigher139/Git-Cheat-Sheet/blob/master/Git%20Cheat%20Sheet-Zh.md) - 分类清晰的速查表
- [jQueryAPI 1.11.3](http://jquery.cuishifeng.cn/) - ZeptoAPI 基本和 jQuery 一样，所以看一份就好
- [CSS](http://www.css88.com/book/css/) - CSS 在线参考手册
- [Redux 中文文档](http://cn.redux.js.org/index.html) - 作为个前端，React 还是得尝试下的。英文文档就不给大家推荐了~
- [Express API](http://www.expressjs.com.cn/4x/api.html) - 中文手册:) 4.x和3.x都有
- [CI用户指南](http://codeigniter.org.cn/user_guide/index.html) - 一个轻量级的 PHP 框架用户指南 推荐指数低的原因是劳资PHP比较弱，囧
- [Yaf](http://www.laruence.com/manual/) - 鸟哥(惠新宸)所写的 PHP 框架 推荐指数低的原因同上...


<h3 id="other">杂七杂八</h3>

> 放些开发中较有用的杂物在这儿

- [提問的智慧](https://github.com/ryanhanwu/How-To-Ask-Questions-The-Smart-Way) - RT，[简体版](https://github.com/FredWe/How-To-Ask-Questions-The-Smart-Way/blob/master/README-zh_CN.md)。“當你拋出一個技術問題時，最終是否能得到有用的回答，往往取決於你所提問和追問的方式。本指南將教你如何正確的提問以獲得你滿意的答案。”——摘自原文
- [租房要点](https://github.com/soulteary/tenant-point) - 适用于北上广深杭，大城市打拼__租房__确实是硬伤
- [QQ 群规](https://github.com/jsfront/src/blob/master/qq.md) - 突然某天，有个 QQ 群让我加群 原本我是拒绝的，但当我看完这篇 QQ 群规后... 劳资真的被感动到了，太牛逼、够专业！ 最后，我默默加群鸟:)
- [.gitignore 文件](https://github.com/github/gitignore) - 介绍不同语言项目的 gitignore 模板
- [程序员如何优雅的挣零花钱？](https://github.com/easychen/howto-make-more-money) - 中肯的文章，如果读完能有些许收获，那么恭喜你
- [git-draw](https://github.com/ben174/git-draw) - 黑魔法，可以修改自己 Git 上的 Contributions
- [GitBook](https://www.gitbook.com) - 写记录的好地方
- [Codebabes](https://codebabes.com/) - 学编程的网站。 重点是每通过一个测试，尼玛对应的妞会脱一件衣服... PS：要翻墙哦~
- [emailframe](http://emailframe.work/) - 邮件展示确实比较坑，建议有需要的收藏
- [ReadmeSample](https://github.com/nieweidong/ReadmeSample) - 项目高大上的第一步就是__包装__，所以来看看 ```README``` 的书写套路吧 PS：劳资怎么这么无聊...


<h3 id="cool">前端炫技-_炫酷狂拽叼炸天站点_</h3>

- [three.js](https://github.com/mrdoob/three.js) - JavaScript 3D 库。超多的 [examples](http://threejs.org/examples/) 等着你去发现，你只需要关注内存和风扇就行了
- [windows93](http://www.windows93.net/) - 模拟 Win93 桌面，思路、体验和整体效果比较有意思
- [GeekTyper](http://geektyper.com/) - 好玩又具有 Geek 精神的网站，虽然创建的目的是个恶作剧 PS：网站需要翻墙
- [2016.makemepulse.com](http://2016.makemepulse.com/) - 帅哭了。请使用现代浏览器打开
- [前端技能栈](http://skill.phodal.com/) - 好玩的前端技能栈展示
- [Mapbox](https://www.mapbox.com/) - 非常叼的开源项目，有方便的 JSAPI(还有 SDK)。 不过免费版只能浅尝，流量有限。 PS：网站需要翻墙
- [mixitup](https://mixitup.kunkalabs.com/) 一款基于 ```jQuery``` 的 **排序/过滤** 的JS库，最关键是有着美妙的动画效果
- [Clark Duvall](http://www.clarkduvall.com/) - 一枚歪果仁的个人 blog，范儿叼叼的
- [earth](https://github.com/cambecc/earth) - 全球天气的可视化项目
- [SuperScrollorama](http://johnpolacek.github.io/superscrollorama/) - 好玩好看的动画库，链接是 SuperScrollorama 的展示页
- [parallax.js](http://matthew.wagerfield.com/parallax/) - 一个视差引擎的官网，在电脑和手机上都有很好的体验
- [CSS字母](http://yusugomori.com/projects/css-sans/fonts) - 用 CSS 实现英文字母，叼叼的
- [墨刀](https://modao.cc/) - 一个在线移动应用原型制作工具。 旨在帮助产品经理快速制作可在手机端展示的移动应用原型。

<h3 id="summary">小结</h3>

##### 背景
  俺算个比较能自我总结的码农，所以偶尔喜欢写点东西做些记录或者自我熏陶陶醉一下。
  可写着写着发现```Evernote```里面的东西太尼玛多(乱)了，于是想着把一些技术相关的资料都整理整理，都丢到```Github```上沉淀下来。 这样Evernote就可以只需要记录些偏生活方便的，看着清爽一些...

  所以，这篇记录其实只是为偶自己而写，确信以后也一直会这样~~~

##### 说说目标
  其实与这篇记录类似的文章太多鸟，俺也不愿意成为一个单纯的收集资料，分享资料的这么个东西。
  我希望 fetool 能更生动、更个性，最好能更另类点，对于每样工具的思考和解析更多点，吐槽也必须有理有据，然后再配上劳资收集的 low 图，完美！
  __希望通过不停的完善这篇记录，能Push劳资多了解业内的新玩具和新创意，然后围绕这些新东西，客观的再写点好东西，比如文章、资料、开源项目这些，让其他伙伴们少走弯路或学的更顺畅点儿__

> 所以劳资对自己的要求是：这篇记录里列出的每样东西，自己都得的去了解、去尝试，然后再列出来。 能举一反三最好，如果达不到至少也能清楚的认识：列出来的这玩意对程序员有没有卵用，解决了啥痛点。


<h3 id="todo">TODO</h3>

1. 继续完善和扩充内容

2. “备注/说明”这一栏不够犀利，希望再多加入自己的理解、点评、吐槽，让这篇记录更犀利和生动

3. 支持导出多种格式，如```.pdf```、```.epub```、```.mobi```等

4. 后续看看如果有必要，可以单独搞个页面，优化下阅读和展示效果

---

以下是 [@拔赤](http://weibo.com/jayli) 总结的前端技能图：
![拔赤总结的前端技能图](https://raw.githubusercontent.com/nieweidong/fetool/master/img/fe.jpg)

---

完善 ing，慢慢把 __Evernote__ 和 __浏览器书签__ 里面的好东西慢慢捣腾到这儿，更欢迎 PR，谢谢。

<img src="https://raw.githubusercontent.com/nieweidong/fetool/master/img/me.jpg" width="120" height="120" style="border-radius: 60px;" />

用自己青涩时的照片镇楼，哇哈哈~

#### 您可以通过以下方式联系到我：
- 微博 [@聂微东](http://weibo.com/darrencode "Darren 聂微东")
- 个人 Blog [fefork.com](http://www.fefork.com/ "一枚 Web 技术领域的手艺人")
- 博客园 [犀利的东哥](http://www.cnblogs.com/Darren_code/ "关注前端技术")
- QQ 群 **214199415**，群名__前端 Club__。PS：入群务必请提供 __有内容的 git 或 blog 地址__，否则进不去哈:)

## License

[![CC0](http://mirrors.creativecommons.org/presskit/buttons/88x31/svg/cc-zero.svg)](https://creativecommons.org/publicdomain/zero/1.0/)

---

**[⬆ 返回顶部](#catalog)**

[opensource_icon]: http://nieweidong.github.com/images/open_source.svg
[free_icon]: http://nieweidong.github.com/images/freeware.svg
[hot_icon]: http://nieweidong.github.com/images/hot.svg
[rec_icon]: http://nieweidong.github.com/images/rec.svg
[must_icon]: http://nieweidong.github.com/images/must.svg
