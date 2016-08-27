##致 Front-End Developers（2015）

摘录至百度百科

> Web前端开发工程师是一个很新的职业，在国内乃至国际上真正开始受到重视的时间不超过7年。Web前端开发是从网页制作演变而来的，名称上有很明显的时代特征。在互联网的演化进程中，网页制作是Web 1.0时代的产物，那时网站的主要内容都是静态的，用户使用网站的行为也以浏览为主。


2005年以后，互联网进入Web 2.0时代，各种类似桌面软件的Web应用大量涌现，网站的前端由此发生了翻天覆地的变化。网页不再只是承载单一的文字和图片，各种丰富媒体让网页的内容更加生动，网页上软件化的交互形式为用户提供了更好的使用体验，这些都是基于前端技术实现的。

近二十年的发展之后，到目前的形势来看，“前端”这个行业的热火程度，应该可以用“爆发式”来描述，不管是PC端的原始开发技术，移动端这几年膨胀的“框架”，手机App混合开发的ionic以及react native，链接硬件的cylonjs和osbean，服务端的Nodejs，都预示着“前端”应该说是JavaScript这门语言的可应用程度，超出了很多人的预期，那么我需要问自己，“学的完吗？”

显而易见，学不完。

###该如何起航

如果是一个初学者，我想很可能会被这“玩意”吓着了，平心而论，我们应该学会适应它，以及有一份很好的指南对资源去进行筛选。

一些借鉴该如何起航：

就初学来看HTML，CSS，JavaScript是你唯一的入门方式，如果反过来，我真心的推荐Apple的Swift做为你的入门语言，为什么？因为你需要了解程序的实质是什么，Swift可以很好的让你了解什么是类型系统，什么是面向对象，什么是编译器。

了解“程序”是你起航的开始。

====

###前端可能是这样的

分类   | 技术代表  | 评价
----- | ----- | ------
PC |原始生产HTML，CSS，JavaScript，最有代表的技术是[jQuery](https://jquery.com/) | 相信是大多数人的入门，适合传统页面的编程。 
PC |开始考虑模块以及代码结构，最有代表的技术是[RequireJS](http://requirejs.org/)和[Backbone.js](http://backbonejs.org/)，这一阶段也会使用了一些工具函数库，开始流行自动构建工具，比如[Underscore.js](http://underscorejs.org/)和[Grunt](http://gruntjs.com/)| 相信大家到了这个阶段，也是Ajax使用最多的时候，无刷新页面，客户端模板也开始应用。
PC |从[Angular](https://angularjs.org/)开始，整个业界开始风靡双向绑定，依赖注入，自动化测试，Nodejs越来越多的应用在“前端”领域中，国内比较有代表的是司徒正美老师的[avalon](https://github.com/RubyLouvre/avalon)和尤小右老师的[vue](https://github.com/yyx990803/vue)|WebApp兴起，以及硬件设备越来越给力的计算能力和内存利用率，意味着“前端”开始更加的追求体验，细致，的问题
PC |[reactjs](https://facebook.github.io/react/)的出现，又开启了一次新的尝试，Nodejs也开启了从分裂成iojs，又合并成为了Nodejs的进程|Nodejs开始对于前端的工程化越来越重要，想想你使用的工具，多多少少都构建在Nodejs之上。
PC |未来个人感觉web components，编译型的JavaScript会成为很多团队的首选选择，比如[Flow](https://code.facebook.com/posts/1505962329687926/flow-a-new-static-type-checker-for-javascript/)，[TypeScript](http://www.typescriptlang.org/) | 编译可以减少在运行时的错误，可以检查代码有利于维护。
Mobile|基于HTML5，CSS3编写的页面，比如营销广告，最有代表性的技术是[Zepto](http://zeptojs.com/)，基于它的效果插件非常多| 也许大家开始适应了没有960px像素的时候
Mobile|HTML5单页应用的出现|大多数人会选择把PC端WebApp实现的技术移到这里来，相应的HTML5，CSS3技术开始大量的使用
Mobile|HTML5游戏的出现，《神经猫》在微信中的疯传，最有代表性的技术是[COCOS2D-JS](http://www.cocos2d-x.org/wiki/Cocos2d-JS)| 游戏是你复习数学几何知识最好的基友
Mobile|[PhoneGap](http://phonegap.com/)的出现，让使用HTML CSS JavaScript开发App成为了可能|探索与摸索
Mobile|[ionic](http://ionicframework.com/)让Angular与[Apache Cordova](https://cordova.apache.org/)结合开启了高级HTML5混合移动应用开发框架的进程，它最有代表性。|利用HTML5 CSS3 JavaScript编写的大量应用开始在市场上可以被找到。
Mobile|[React Native](https://facebook.github.io/react-native/)让开发移动App有了一个新选择，虽然它实现的逻辑，已经有很多人在从前就实现了，但是愿意尝试使用这个技术的人还是蛮多的|通过中间语言JavaScript转换成Native语言实现，虽然只有UI
Mobile|未来个人感觉HTML5 CSS3 JavaScript会成为很多团队开发App首选选择，抛开一些（游戏）等需要高性能，复杂动画的领域，为什么？|快速，简单，周期短，试错的机会增加
Server|[Node.js](https://nodejs.org/)我相信这应该是最有代表性的，而且未来也会越来越重要|使用JavaScript的用户数量巨大，服务器知识的普及，会让学习成本低
Database|[MongoDB](https://www.mongodb.org/)应该是在这个领域比较有代表性|数据库的出现，让存储的解决方案成为了可能
Docker|也许你应该要了解一下什么是[Docker](https://github.com/DeanXu/Docker-introduce/blob/master/README.md)|你的开发效率会进一步提升
硬件领域|听说有人使用[cylonjs](http://cylonjs.com/)开发机器人|国内也有一家公司推出了[智能机器控制器与快速开发框架](http://www.osbean.com/)，嗨，JavaScript已经入侵硬件领域了
自动化|最有代表的应该是[Grunt](http://gruntjs.com/)| 但是你依然有很多选择，[gulp](http://gulpjs.com/)是其中之一
css编译|最有代表的应该是[sass](http://sass-lang.com/)| 编译的出现让你组织代码，管理更容易了
2015年|通过了ES2015，也许你目前还不清楚这是什么，那么我告诉你，这就是ECMA6，随着今年（2015）Apple WWDC和Google I/O的落幕，一大波的硬件，软件即将更新，数不尽的各种服务类SDK，以及HTML5 Device Api| 少年，未来的你面对无尽的学习，以及从PC切换到移动的思维逻辑，可能还有可穿戴设备喔

###展望

随着W3C发布的的公告“耗时8年 HTML5标准终于完工了”，可以看出来以后HTNL5和CSS3应该会被重点使用，而且现在更多的方向是朝着移动端迁移。

有理由相信，这是迎接变革的开始，未来这是一个全新的战场。








