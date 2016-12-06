---
title: 用 R 操作 Excel 数据
layout: post
categories: [学无止境]
tags: [R,Excel,数据]
comments: yes
---


对于 Excel 表格中的数据，如果只需要其中的一部分数据，解决的办法可以是手动筛选，可以通过 VBA，也可以通过 R 语言。第一种方法最不推荐，特别是文件很多的时候，效率太低；第二种方法，我不会；于是我考虑通过 R 来解决。 

数据来自[全国水雨情信息网](http://xxfb.hydroinfo.gov.cn/)，这个网站有全国各大站点的水情和雨情数据，每天更新。我的数据是几千行全国河流重点水文站的水情数据，但是我需要的只是其中的几十行，格式均为 xlsx。xlsx 这个包可以很好地解决我的问题。思路是把文件读进 R，设定筛选条件筛选需要的数据，再把数据导出生成新数据文件。这样极大地提高了整理数据的效率。 

方法如下：

{% highlight r %} 
install.packages(xlsx) 
library(xlsx)  
dat <- read.xlsx("2015-3-9.xlsx", sheetName="Sheet1", header = FALSE) 
newdat1 <- dat[which(dat$X1=="长江 "&dat$X3=="通天河 "), ]
newdat2 <- dat[which(dat$X1=="长江 "&dat$X3=="金沙江 "), ]
newdat3 <- dat[which(dat$X1=="长江 "&dat$X3=="长江 " & dat$X2!="湖北 " & dat$X2!="湖南 " & dat$X2!="安徽 " & dat$X2!="江西 "&dat$X2!="江苏 "),]
newdat4 <- dat[which(dat$X1=="长江 "&dat$X3=="雅砻江 "), ]
newdat5 <- dat[which(dat$X1=="长江 "&dat$X3=="大渡河 "), ] 
newdat6 <- dat[which(dat$X1=="长江 "&dat$X3=="岷江 "), ] 
newdat7 <- dat[which(dat$X1=="长江 "&dat$X3=="嘉陵江 "), ] 
newdat <- rbind(newdat1, newdat2, newdat3, newdat4, newdat5, newdat6, newdat7) 
write.csv(newdat, file="2015-3-9.csv", fileEncoding="gbk") 

{% endhighlight %}

参考资料：Kabacoff, Robert. **_R in Action_**. Manning Publications Co., 2011.

## Comments

**[尚磊的博客](#36417 "2015-04-15 22:34:39"):** 好高端的样子。人生一大恨，没有学习一门程序语言。

**[周世兴](#45897 "2015-12-24 20:31:01"):** 你好，我想请教下如何在全国水雨情信息网下载降雨的数据。

**[宋春林](#47478 "2016-01-01 16:06:23"):** 我用的是OutWit Hub这个工具。

