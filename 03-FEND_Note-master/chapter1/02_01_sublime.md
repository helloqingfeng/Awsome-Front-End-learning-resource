<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Sublime 编辑器](#sublime-%E7%BC%96%E8%BE%91%E5%99%A8)
  - [介绍](#%E4%BB%8B%E7%BB%8D)
  - [安装](#%E5%AE%89%E8%A3%85)
    - [Windows/OS X](#windowsos-x)
    - [Ubuntu](#ubuntu)
  - [推荐插件](#%E6%8E%A8%E8%8D%90%E6%8F%92%E4%BB%B6)
    - [1. Package Control](#1-package-control)
    - [2.Emmet](#2emmet)
    - [3.JQuery](#3jquery)
    - [4.FileHeader](#4fileheader)
    - [5.Pretty Json](#5pretty-json)
    - [6.CSS Format](#6css-format)
    - [7.ConvertToUTF8](#7converttoutf8)
  - [用户自定义代码](#%E7%94%A8%E6%88%B7%E8%87%AA%E5%AE%9A%E4%B9%89%E4%BB%A3%E7%A0%81)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

### Sublime 编辑器

#### 介绍

Sublime Text是一款性感的编辑器，具有优雅，快速，插件多等优势，不失为前端开发者的轻量高效编辑器。

#### 安装

##### Windows/OS X

官方[站点](http://www.sublimetext.com/)下载安装即可。

##### Ubuntu

可参见 [Ubuntu 下使用 Sublime Text 并解决中文输入问题](http://www.zntec.cn/archives/ubuntu-sublime-text-fcitx.html)，用apt-get安装，解决任务栏，中文输入等多个问题。

##### Sublime 快捷键
<kbd>command/control</kbd> + <kbd>P</kbd> 进入查找命令（Goto Anything）,此时有三种选择：

* `:` 输入行数找到对应行 （<kbd>control</kbd> + <kbd>G</kbd>）
* `@` 找到特定函数 （<kbd>command/control</kbd> + <kbd>R</kbd>）
* `#` 找到对应变量与块

#### 推荐插件

##### 1. Package Control

以后的插件安装基本都靠他了，安装方法可以去[Package Control](https://packagecontrol.io/installation)查看，注意Sublime Text的版本问题。

##### 2.Emmet

前端神器，相信搞前端的没有不用的

**下面插件在Edit 或者 Tools 里面看到插件功能：**

##### 3.JQuery

写JQuery怎么能不用他来增强你的提示？

##### 4.FileHeader

自动创建文件开头模板，并且会根据最后的保存时间修改更新时间

##### 5.Pretty Json

写json不格式话怎么行？

##### 6.CSS Format

css格式化

##### 7.ConvertToUTF8

GBK编码兼容

#### 用户自定义代码

Preferences - Settings - User 里面加入，全部的设置均为 `JSON` 文本。

```
"translate_tabs_to_spaces": true,
"tab_size": 2,
```
把Tab对齐转化为空格对齐，tab_size 控制转化比例。

```
"trim_trailing_white_space_on_save": true,
```

自动移除行尾多余空格。

```
"ensure_newline_at_eof_on_save": true,
```

自动在文件末尾加入一个空行，git 用户相信知道是干嘛的。

```
"save_on_focus_lost": true,
```

 窗口失去焦后立即保存文件。

 ```
 "bold_folder_labels": true,
 ```

侧栏文件夹加粗。
