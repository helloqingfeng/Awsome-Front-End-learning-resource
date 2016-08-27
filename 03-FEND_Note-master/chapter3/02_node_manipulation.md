<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

  - [节点操作](#%E8%8A%82%E7%82%B9%E6%93%8D%E4%BD%9C)
    - [获取节点](#%E8%8E%B7%E5%8F%96%E8%8A%82%E7%82%B9)
      - [接口获取节点](#%E6%8E%A5%E5%8F%A3%E8%8E%B7%E5%8F%96%E8%8A%82%E7%82%B9)
        - [getElementById](#getelementbyid)
        - [getElementsByTagName](#getelementsbytagname)
        - [getElementsByClassName](#getelementsbyclassname)
        - [querySelector / querySelectorAll](#queryselector--queryselectorall)
    - [创建节点](#%E5%88%9B%E5%BB%BA%E8%8A%82%E7%82%B9)
    - [修改节点](#%E4%BF%AE%E6%94%B9%E8%8A%82%E7%82%B9)
    - [插入节点](#%E6%8F%92%E5%85%A5%E8%8A%82%E7%82%B9)
      - [appendChild](#appendchild)
      - [insertBefore](#insertbefore)
    - [删除节点](#%E5%88%A0%E9%99%A4%E8%8A%82%E7%82%B9)
    - [innerHTML](#innerhtml)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## 节点操作

因为 DOM 的存在，这使我们可以通过 JavaScript 来获取、创建、修改、或删除节点。

NOTE：下面提供的例子中的 `element` 均为元素节点。

### 获取节点

**父子关系**

- `element.parentNode`
- `element.firstChild`/`element.lastChild`
- `element.childNodes`/`element.children`

**兄弟关系**

- `element.previousSibling`/`element.nextSibling`
- `element.previousElementSibling`/`element.nextElementSibling`

通过节点直接的关系获取节点会导致代码维护性大大降低（节点之间的关系变化会直接影响到获取节点），而通过接口则可以有效的解决此问题。

```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ELEMENT_NODE & TEXT_NODE</title>
</head>
<body>
  <ul id="ul">
    <li>First</li>
    <li>Second</li>
    <li>Third</li>
    <li>Fourth</li>
  </ul>
  <p>Hello</p>
  <script type="text/javascript">
    var ulNode = document.getElementsByTagName("ul")[0];
    console.log(ulNode.parentNode);             //<body></body>
    console.log(ulNode.previousElementSibling); //null
    console.log(ulNode.nextElementSibling);     //<p>Hello</p>
    console.log(ulNode.firstElementChild);      //<li>First</li>
    console.log(ulNode.lastElementChild);       //<li>Fourth</li>
  </script>
</body>
</html>
```

NTOE：细心地人会发现，在节点遍历的例子中，body、ul、li、p节点之间是没有空格的，因为如果有空格，那么空格就会被当做一个TEXT节点，从而用ulNode.previousSibling获取到得就是一个空的文本节点，而不是 `<li>First</li>` 节点了。即节点遍历的几个属性会得到所有的节点类型，而元素遍历只会得到相对应的元素节点。一般情况下，用得比较多得还是元素节点的遍历属性。

**实现浏览器兼容版的element.children**

有一些低版本的浏览器并不支持 `element.children` 方法，但我们可以用下面的方式来实现兼容。

```html
<html lang>
<head>
  <meta charest="utf-8">
  <title>Compatible Children Method</title>
</head>
<body id="body">
  <div id="item">
    <div>123</div>
    <p>ppp</p>
    <h1>h1</h1>
  </div>
  <script type="text/javascript">
    function getElementChildren(e){
      if(e.children){
        return e.children;
      }else{
        /* compatible other browse */
        var i, len, children = [];
        var child = element.firstChild;
        if(child != element.lastChild){
          while(child != null){
            if(child.nodeType == 1){
              children.push(child);
            }
            child = child.nextSibling;
          }
        }else{
          children.push(child);
        }
        return children;
      }
    }
    /* Test method getElementChildren(e) */
    var item = document.getElementById("item");
    var children = getElementChildren(item);
    for(var i =0; i < children.length; i++){
      alert(children[i]);
    }
  </script>
</body>
</html>
```

NOTE：此兼容方法为初稿，还未进行兼容性测试。

#### 接口获取元素节点

- `getElementById`
- `getElementsByTagName`
- `getElementsByClassName`
- `querySelector`
- `querySelectorAll`

|API|只作用于 `document`|唯一返回值|live|
|---|:-----------------:|:--------:|:--:|
|getElementById|√|√||
|getElementsByTagName|||√|
|getElementsByClassName|||√|
|querySelectorAll||||
|querySelector||√|||

##### getElementById

获取文档中指定 `id` 的节点**对象**。

```javascript
var element = document.getElementById('id');
```

##### getElementsByTagName

动态的获取具有指定标签元素节点的集合（其返回值会被 DOM 的变化所影响，其值会发生变化）。此接口可直接通过元素而获取，不必直接作用于 `document` 之上。

```javascript
// 示例
var collection = element.getElementsByTagName('tagName');

// 获取指定元素的所有节点
var allNodes = document.getElementsByTagName('*');

// 获取所有 p 元素的节点
var elements = document.getElementsByTagName('p');
// 取出第一个 p 元素
var p = elements[0];
```

##### getElementsByClassName

获取指定元素中具有指定 `class` 的所有节点。多个 `class` 可的选择可使用空格分隔，与顺序无关。

```javascript
var elements = element.getElementsByClassName('className');
```

NOTE：IE9 及一下版本不支持 `getElementsByClassName`

**兼容方法**

```javascript
function getElementsByClassName(root, className) {
  // 特性侦测
  if (root.getElementsByClassName) {
    // 优先使用 W3C 规范接口
    return root.getElementsByClassName(className);
  } else {
    // 获取所有后代节点
    var elements = root.getElementsByTagName('*');
    var result = [];
    var element = null;
    var classNameStr = null;
    var flag = null;

    className = className.split(' ');

    // 选择包含 class 的元素
    for (var i = 0, element; element = elements[i]; i++) {
      classNameStr = ' ' + element.getAttribute('class') + ' ';
      flag = true;
      for (var j = 0, name; name = className[j]; j++) {
        if (classNameStr.indexOf(' ' + name + ' ') === -1) {
          flag = false;
          break;
        }
      }
      if (flag) {
        result.push(element);
      }
    }
    return result;
  }
}
```

##### querySelector / querySelectorAll

获取一个 `list` （其返回结果不会被之后 DOM 的修改所影响，获取后不会再变化）符合传入的 CSS 选择器的第一个元素或全部元素。

```javascript
var listElementNode = element.querySelector('selector');
var listElementsNodes = element.querySelectorAll('selector');

var sampleSingleNode = element.querySelector('#className');
var sampleAllNodes = element.querySelectorAll('#className');
```

NOTE: IE9 一下不支持 `querySelector` 与 `querySelectorAll`

### 创建节点

创建节点 -> 设置属性 -> 插入节点

```javascript
var element = document.createElement('tagName');
```

### 修改节点

**textContent**

获取或设置节点以及其后代节点的文本内容（对于节点中的所有文本内容）。

```javascript
element.textContent; // 获取
element.textContent = 'New Content';
```

NOTE：不支持 IE 9 及其一下版本。

**innerText** （不符合 W3C 规范）

获取或设置节点以及节点后代的文本内容。其作用于 `textContent` 几乎一致。

```javascript
element.innerText;
```

NOTE：不符合 W3C 规范，不支持 FireFox 浏览器。

**FireFox 兼容方案**

```javascript
if (!('innerText' in document.body)) {
  HTMLElement.prototype.__defineGetter__('innerText', function(){
    return this.textContent;
  });
  HTMLElement.prototype.__defineSetter__('innerText', function(s) {
    return this.textContent = s;
  });
}
```

### 插入节点

#### appendChild

在指定的元素**内**追加一个元素节点。

```javascript
var aChild = element.appendChild(aChild);
```

#### insertBefore

在指定元素的指定节点前插入指定的元素。

```javascript
var aChild = element.insertBefore(aChild, referenceChild);
```

### 删除节点

删除指定的节点的子元素节点。

```javascript
var child = element.removeChild(child);
```

### innerHTML

获取或设置指定节点之中所有的 HTML 内容。替换之前内部所有的内容并创建全新的一批节点（去除之前添加的**事件**和**样式**）。`innerHTML` 不检查内容，直接运行并替换原先的内容。

NOTE：只建议在创建全新的节点时使用。不可在用户可控的情况下使用。

```javascript
var elementsHTML = element.innerHTML;
```

**存在的问题**

- 低版本 IE 存在内存泄露
- 安全问题（用户可以在名称中运行脚本代码）
