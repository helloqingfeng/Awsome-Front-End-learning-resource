## 基本语法

### 变量标示符

**变量**的命名

```javascript
var _name = null;
var $name = null;
var name0 = null;
```

### 关键字与保留字

JavaScript 在语言定义中保留的字段，这些字段在语言使用中存在特殊意义或功能，在程序编写的过程中不可以当做变量或函数名称使用。无需记忆，报错修改即可。

关键字与保留字可以在 [Mozilla 开发者站点](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Lexical_grammar)找到。

### 字符敏感

字符串的大小写是有所区分的，不同字符指代不同的变量。

### 严格模式

**增益**

- 消除语法中不合理与不安全的问题，保证代码正常运行
- 提高编译效率，增加运行速度

**使用方法**

```javascript
<!-- 全局使用 严格 模式 -->
"use strict";
(function(){
  console.log('>>> Hello, world!');
})()

<!-- 或者在函数内部声明使用 严格 模式 -->
(function(){
  "use strict";
  console.log('>>> Hello, world!');
})()
```

严格模式与标准模式的区别：

- 严格模式下隐式声明或定义变量被静止
- 严格模式下对象重名的属性在严格模式下被静止
- 严格模式下 `arguments.callee()` 被禁用
- 严格模式下 `with()` 语句
- 更多限制

### 注释

```javascript
/*
  多行注释，不可嵌套
 */

// 单行注释
```
