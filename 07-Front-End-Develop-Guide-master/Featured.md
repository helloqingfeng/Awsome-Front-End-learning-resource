## Front-End Develop 项目精选

> 站在个人的角度，针对开源项目做了一个甄别、筛选以及介绍。

由[@icepy](http://weibo.com/2455876310)负责整理

说明：顺序不分排名先后。

## 目录

* [框架](#framework)
* [模板引擎](#template)
* [模块化](#module)
* [图表](#charts)
* [界面](#ui)
* [网络](#network)
* [异步编程](#async)
* [数据库操作](#db)
* [应用环境类工具](#product-tools)
* [开发环境类工具](#dev-tools)
* [react 生态圈](#react)
* [angular 生态圈](#angular)

### <a id="framework"></a> 框架

项目 |开发者&组织 | 备注
---- | ---- | ----
[vue](https://github.com/yyx990803/vue) | [yyx990803](https://github.com/yyx990803) | 用于构建Web界面的MVVM JavaScript框架；
[ionic](https://github.com/driftyco/ionic) | [Ionic](https://github.com/driftyco)| Ionic是一个强大的HTML5 原生应用（native app） 开发框架，帮助你用HTMLL，css和javascript构建具有原生味道的移动应用（mobile apps）；
[koa](https://github.com/koajs/koa) | [koajs](https://github.com/koajs) | 下一代Node.js Web开发框架
[angular.js](https://github.com/angular/angular.js) | [Angular](https://github.com/angular) | AngularJS是为了克服HTML在构建应用上的不足而设计的，通过为开发者呈现一个更高层次的抽象来简化应用的开发。如同其他的抽象技术一样，这也会损失一部分灵活性。换句话说，并不是所有的应用都适合用AngularJS来做。AngularJS主要考虑的是构建CRUD应用。幸运的是，至少90%的WEB应用都是CRUD应用。但是要了解什么适合用AngularJS构建，就得了解什么不适合用AngularJS构建。
[avalon](https://github.com/RubyLouvre/avalon) | [RubyLouvre](https://github.com/RubyLouvre) | 用于构建Web界面的MVVM JavaScript框架；
[express](https://github.com/strongloop/express) | [StrongLoop, Inc.](https://github.com/strongloop) | 它用于构建Web网站，非常快速；
[riot](https://github.com/riot/riot) | [riot](https://github.com/riot/) | 一个小巧的UI和代码结构的框架；
[wx](https://github.com/baoshan/wx) | [baoshan](https://github.com/baoshan)| wx是极简设计的微信（公共平台）应用参考级框架，而并非微信接口在node.js下的幂等映射；

### <a id="template"></a> 模板引擎

项目 |开发者&组织 | 备注
---- | ---- | ----
[ejs](https://github.com/tj/ejs) | [tj](https://github.com/tj) | JavaScript模板引擎；
[artTemplate](https://github.com/aui/artTemplate) | [aui](https://github.com/aui) | JavaScript模板引擎；

### <a id="module"></a> 模块化

项目 |开发者&组织 | 备注
---- | ---- | ----
[requirejs](https://github.com/jrburke/requirejs)| [jrburke](https://github.com/jrburke) | JavaScript模块化的开山鼻祖，代表着AMD规范。
[seajs](https://github.com/seajs/seajs)| [seajs](https://github.com/seajs) |JavaScript模块化库，代表着CMD规范。

### <a id="charts"></a> 图表

项目 |开发者&组织 | 备注
---- | ---- | ----
[three.js](https://github.com/mrdoob/three.js) | [mrdoob](https://github.com/mrdoob/) |three.js是JavaScript编写的WebGL第三方库。提供了非常多的3D显示功能。Three.js 是一款运行在浏览器中的 3D 引擎，你可以用它创建各种三维场景，包括了摄影机、光影、材质等各种对象；
[echarts](https://github.com/ecomfe/echarts) | [Baidu EFE team](https://github.com/ecomfe) | 基于Canvas，纯Javascript图表库，提供直观，生动，可交互，可个性化定制的数据可视化图表；
[d3](https://github.com/mbostock/d3) | [mbostock](https://github.com/mbostock)|基于JavaScript编写的一个图表库，非常强大；

### <a id="ui"></a> 界面

项目 |开发者&组织 | 备注
---- | ---- | ----
[amazeui](https://github.com/amazeui/amazeui) | [amazeui](https://github.com/amazeui) | 国人出品的HTML5框架
[fullPage.js](https://github.com/alvarotrigo/fullPage.js) | [alvarotrigo](https://github.com/alvarotrigo)| fullPage.js 是一个基于 jQuery 的插件，它能够很方便、很轻松的制作出全屏网站；
[jQuery](https://github.com/jquery/jquery) | [jQuery Foundation](https://github.com/jquery) | jQuery 是一个高效、精简并且功能丰富的JavaScript 工具库；
[Zepto](https://github.com/madrobby/zepto/) | [madrobby](https://github.com/madrobby) | Zepto是一个轻量级的针对现代高级浏览器的JavaScript库， 它与jquery有着类似的api。 如果你会用jquery，那么你也会用zepto；
[FastClick](https://github.com/ftlabs/fastclick) | [FT Labs](https://github.com/ftlabs) | FastClick是一个简单的、易于使用的库，消除在移动浏览器上触发click事件与一个物理Tap(敲击)之间的300延迟；
[backbone](https://github.com/jashkenas/backbone) | [jashkenas](https://github.com/jashkenas) | Backbone.js为复杂WEB应用程序提供模型(models)、集合(collections)、视图(views)的结构。其中模型用于绑定键值数据和自定义事件；集合附有可枚举函数的丰富API； 视图可以声明事件处理函数，并通过RESRful JSON接口连接到应用程序；
[cheerio](https://github.com/cheeriojs/cheerio) | [cheeriojs](https://github.com/cheeriojs/) | 它可以从一坨html的片断中构建DOM结构，然后提供像jquery一样的css选择器查询；
[hammer.js](https://github.com/hammerjs/hammer.js) | [hammerjs](https://github.com/hammerjs)| 处理触摸事件，以及手势的JavaScript库；

### <a id="network"></a> 网络

项目 |开发者&组织 | 备注
---- | ---- | ----
[socket.io](https://github.com/socketio/socket.io) | [Socket.IO](https://github.com/socketio) | Socket.io是使用得非常普遍的前端调用Websocket的库；
[superagent](https://github.com/visionmedia/superagent) | [visionmedia](https://github.com/visionmedia) |superagent 是nodejs里一个非常方便的客户端请求代理模块；

### <a id="async"></a> 异步编程

项目 |开发者&组织 | 备注
---- | ---- | ----
[async](https://github.com/caolan/async) | [caolan](https://github.com/caolan/) |JS实现的一个方便快捷异步编程的库；
[persistencejs](https://github.com/coresmart/persistencejs) | [coresmart](https://github.com/coresmart)| 是一个异步的Javascript库的对象关系映射框架；

### <a id="db"></a> 数据库操作

项目 |开发者&组织 | 备注
---- | ---- | ----
[node-mongodb-native](https://github.com/mongodb/node-mongodb-native) | [mongodb](https://github.com/mongodb)| nodejs用于操作mongodb；

### <a id="product-tools"></a> 应用环境类工具

项目 |开发者&组织 | 备注
---- | ---- | ----
[underscore](https://github.com/jashkenas/underscore) | [jashkenas](https://github.com/jashkenas)| JavaScript函数工具库；
[lo_dash](https://lodash.com/)| [Lodash Utilities](https://github.com/lodash) | JavaScript函数工具库； 
[sugar.js](http://sugarjs.com/) | [andrewplummer](https://github.com/andrewplummer) | 它扩展了现有的JS对象的方法，让你可以用更少的代码做更多的事情；
[JavaScript-MD5](https://github.com/blueimp/JavaScript-MD5) | [blueimp](https://github.com/blueimp/) | JS版的MD5;
[resumable.js](https://github.com/23/resumable.js) | [23](https://github.com/23)| 这是用于HMLT5 File Api封装可以方便操作文件的一个库；
[node-memwatch](https://github.com/lloyd/node-memwatch) | [lloyd](https://github.com/lloyd) | 用于检测Node服务内存
[node-heapdump](https://github.com/bnoordhuis/node-heapdump) | [bnoordhuis](https://github.com/bnoordhuis) | Node内存调试

### <a id="dev-tools"></a> 开发环境类工具

项目 |开发者&组织 | 备注
---- | ---- | ----
[browserify](https://github.com/substack/node-browserify) | [substack](https://github.com/substack)| browserify是一个node.js模块，主要用于改写现有的CommonJS模块，使得浏览器端也可以使用这些模块；
[TSD](https://github.com/DefinitelyTyped/tsd) | [DefinitelyTyped](https://github.com/DefinitelyTyped)| 在TypeScript中替换第三方库所使用的引用文件;
[TypeScript](https://github.com/Microsoft/TypeScript) | [Microsoft](https://github.com/Microsoft)| JavaScript的超集，扩展了类型，类，接口等语法，兼容ES6；
[Commander.js](https://github.com/tj/commander.js) | [tj](https://github.com/tj)| 可以帮助快速开发Nodejs命令行工具的一个包
[marked](https://github.com/chjj/marked) | [chjj](https://github.com/chjj) | markdown解析器；
[node-inspector](https://github.com/node-inspector/node-inspector) | [node-inspector](https://github.com/node-inspector) |nodejs的调试工具；
[node-supervisor](https://github.com/petruisfan/node-supervisor) | [petruisfan](https://github.com/petruisfan) |nodejs用于无需重启的工具
[candy](https://github.com/guo-yu/candy) | [guo-yu](https://github.com/guo-yu)| 基于多说社交评论的社会化论坛系统，采用 Node.js/Mongodb 构建；

### <a id="react"></a> react 生态圈

项目 |开发者&组织 | 备注
---- | ---- | ----
[React](https://github.com/facebook/react) | [Facebook](https://github.com/facebook)| 这是该公司用于构建反应式图形界面的JavaScript库;
[react-redux](https://github.com/rackt/react-redux) | [rackt](https://github.com/rackt) | Flux架构实现
[react-router](https://github.com/rackt/react-router) | [rackt](https://github.com/rackt) | React路由系统
[Flow](https://github.com/facebook/flow) | [Facebook](https://github.com/facebook)| 该公司出品的一个JavaScript静态编译器
[React Native](https://github.com/facebook/react-native) | [Facebook](https://github.com/facebook) | 该公司出品的一个可以使用JavaScript来构建Native UI的库；
[classnames](https://github.com/JedWatson/classnames) | [JedWatson](https://github.com/JedWatson/)| 一个简单的工具有条件性的添加class类名
[react-bootstrap](https://github.com/react-bootstrap/react-bootstrap) | [react-bootstrap](https://github.com/react-bootstrap/)| bootstrap react版

### <a id="angular"></a> angular生态圈

项目 |开发者&组织 | 备注
---- | ---- | ----
[angular-ui-router](https://github.com/angular-ui/ui-router) | [AngularUI](https://github.com/angular-ui) | angular-ui-router是AngularJS的路由框架，和默认的$route不同，它将所有路由包装成可划分层级的状态机状态,路由路径在ui-router中不是必须的。由于ui-router的路由状态机是分层级的，所以使用ui-router可以非常方便地创建包含多个嵌入的子模板；