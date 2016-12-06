---
title: 把博客从 WordPress 迁移到 Jekyll
layout: post
categories: [器物杂谈]
tags: [博客,写作,Jekyll,GitHub]
comments: yes
---

很久以前就想把博客从臃肿的 WordPress 迁移到轻量的 Jekyll，但是一直没有做这件事。一方面空间还没有到期，另一方面研究了几次 Jekyll 的文档都感觉非常困惑。这两天忙里偷闲折腾了一下，终于把博客迁移到基于 Jekyll 了。

Jekyll 的好处是非常多的。首先，基于 GitHub Pages 的 Jekyll 博客有 1G 空间，作为个人博客足够了，而这一切都是免费的，对比之下，我之前使用的衡天主机 300M 的空间一年要 120 元；其次，稳定可靠。博客文件托管在 GitHub 的 repositories 里，比那些空间提供商可靠可靠。之前的 WordPress 博客一个月总会有那么一两次收到博客无法访问的邮件。为了保险起见，我直接把放博客文件的 repositories 克隆到本地的 iCloud Drive 文件夹里，这样在本地的修改同时就备份到 iCloud 了，不用担心文件丢失。再次，管理方便。Jekyll 支持 Markdown，我写博客的时候直接用 Macdown 在本地完成，然后用 GitHub 客户端 commit 上去就可以更新博文。同样的方法也可以用来更新 CSS 文件修改博客主题。最后，足够自由。所有的代码都是自己的，想改成什么样就改成什么样。

对于 [Jekyll](http://jekyllrb.com/) 的安装说明一直很困惑，直到现在也是，按照其安装命令行在 Terminal 里尝试多次都不成功。但是这并不影响我搭建基于 Jekyll 的博客，因为 GitHub 上有个神奇的按钮叫「Fork」，于是我就 fork 了[斯幸峰博士](http://sixf.org/)的 [Github](https://github.com/sixf) 中放他博客文件的 repositories，然后进行了一系列的修改，新博客就基本搭建完成了。

新博客主要由[主站](http://songchunlin.net/)、[中文博客](http://songchunlin.net/cn/)和[英文博客](http://songchunlin.net/en/)组成，主站只有一个页面，主要放中英文简介以及中英文博客的进入按钮。这么套现成的模板我很喜欢，也利于国际化的交流（当然是在认真更新英文内容的基础上），在原有模板的基础上修改了布局、字体、行距以及颜色等元素，整体风格和原来的 WordPress 博客保持一致。评论模块本来想用 Disqus 的，但是要翻墙才能使用，于是中文博客用多说，英文博客用 Disqus。

接下来的工作就是导入原 WordPress 的文章和评论了。WordPress 提供了导出的功能，但是是 XML 格式的，网上搜了一个 Python 脚本转为 Markdown 格式，再做一些微调放入 _posts 文件夹 commit 上去，新博客就有内容了。比较郁闷的是评论无法导入新的多说里面，之前 WordPress 博客的评论只能附在文章后面了。

最后一步是把 songchunlin.github.io 这个域名设置为 songchunlin.net，这很简单，在 repository 设置中绑定域名，然后把 DNSPOD 中之前的 A 记录值改到 192.30.252.153 和 192.30.252.154 即可。

今后博客就在这里安家不再折腾了。博客迁移的过程也让我更加熟悉 GitHub 这一神器，准备以后用来托管我所有的代码。