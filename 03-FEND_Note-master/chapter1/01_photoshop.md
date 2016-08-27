<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Photoshop](#photoshop)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

## Photoshop

**切图** 从设计稿中切除网页的素材并在代码中引入图片 (复杂的图片或者解决兼容问题)

```html
// 设计稿 (*.psd) -> 产出物 (*png, *.jpg)

<img src="../img/avatar.jpg" alt="desc">

<style type="text/css" media="screen">
  background-image: url(../../img/sprite.png);
  background-position: 0 0;
</style>
```