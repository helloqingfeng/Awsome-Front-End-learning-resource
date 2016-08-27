<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [浏览器兼容](#%E6%B5%8F%E8%A7%88%E5%99%A8%E5%85%BC%E5%AE%B9)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

### 浏览器兼容

主流浏览器都兼容 HTML5 的新标签，对于 IE8 及以下版本不认识 HTML5的新元素，可以使用 JavaScript 创建一个没用的元素来解决，例如：

```javascript
<script>
    document.createElement("header");
</script>
```
也可以使用 shiv 来解决兼容性问题，详情可参考 [HTML5 Shiv](https://github.com/afarkas/html5shiv)