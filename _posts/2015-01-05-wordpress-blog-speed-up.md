---
title: 提高 WordPress 博客访问速度
layout: post
categories: [器物杂谈]
tags: [博客, WordPress]
comments: yes
---

WordPress 博客访问慢，原因可能有很多，比如主机性能、网站内容、Google 被墙等。前两个好理解，主机性能越强、网站插件越少、内容越小访问就越快，之所以和 Google 有关是因为WordPress 默认调用了Google 公共库和 Google 字体库，而在中国大陆 Google 是被封的，所以默认情况下在国内打开 WordPress 博客就是慢。 

对于前两种因素，有钱的可以买更高性能的主机，然后优化网站的插件、内容和代码，从而改善访问速度。对于 Google 的问题也是可以解决的。这要感谢360公司，提供了 [Google 公共库和字体库的镜像](http://libs.useso.com/)。我不用360的任何产品，对其也没有什么好感，但是这件事360做得很好，点赞。使用方法是把 WordPress文件中的fonts.googleapis.com 和ajax.googleapis.com分别换成 fonts.useso.com 和 ajax.useso.com，具体方法请点[此处](http://wpchina.org/how-to-use-360-mirrors-cdn-to-speed-up-your-wordpress-1564/)。 

经过以上几步，博客访问速度应该提升了很多，但是还可以使用 CDN 加速功能使其速度更快。七牛云提供了 10GB 每月的免费加速流量，对于普通博主来讲够了。具体方法参见[这里](https://tumutanzi.com/archives/12128)。 

我的博客经过上述设置之后，自我感觉访问速度快了很多，不知道你有没有感觉到？

## Comments

**[vicky](#28097 "2015-01-13 09:23:41"):** 感觉到了，速度的确很快！ 很喜欢你博客的界面，简洁，让人读文字时很容易focus。如果我也开博客，能模仿or抄袭你的界面吗？哈哈！ 看了好几篇文章，觉得你写的很好，独立博客的态度和坚持更博的毅力也让人钦佩。 支持你！

**[宋春林](#28103 "2015-01-13 09:49:24"):** 谢谢。 可以用我的博客界面，代码在[这里](https://github.com/songchunlin/My_WP_Theme)。

**[Riophae](#33498 "2015-03-07 01:15:41"):** 现在很快，没有问题

**[宋春林](#33541 "2015-03-07 10:58:51"):** 你的博客看起来很清爽。

