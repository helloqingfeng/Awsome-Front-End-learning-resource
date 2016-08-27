<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [闭包](#%E9%97%AD%E5%8C%85)
  - [闭包的应用](#%E9%97%AD%E5%8C%85%E7%9A%84%E5%BA%94%E7%94%A8)
    - [保存变量现场](#%E4%BF%9D%E5%AD%98%E5%8F%98%E9%87%8F%E7%8E%B0%E5%9C%BA)
    - [封装](#%E5%B0%81%E8%A3%85)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->


## 闭包

- 闭包有函数和与其相关的引用环境的组合而成
- 闭包允许函数访问其引用环境中的变量（又称自由变量）
- 广义上来说，所有 JavaScript 的函数都可以成为闭包，因为 JavaScript 函数在创建时保存了当前的词法环境。

```
function add() {
  var i = 0;
  return function() {
    alert(i++);
  }
}
var f = add();
f();
f();
```

### 闭包的应用

#### 保存变量现场

```javascript

// 错误方法
var addHandlers = function(nodes) {
  for (var i = 0, len = nodes.length; i < len; i++) {
    nodes[i].onclick = function(){
      alert(i);
    }
  }
}

// 正确方法
var addHandlers = function(nodes) {
  var helper = function(i) {
    return function() {
      alert(i);
    }
  }

  var (var i = 0, len = nodes.length; i < len; i++) {
    nodes[i].onclick = helper(i);
  }
}
```

#### 封装

```javascript

// 将 observerList 封装在 observer 中
var observer = (function(){
  var observerList = [];
  return {
    add: function(obj) {
      observerList.push(obj);
    },
    empty: function() {
      observerList = [];
    },
    getCount: function() {
      return observerList.length;
    },
    get: function() {
      return observerList;
    }
  };
})();
```