---
title: R学习资源汇总
layout: post
categories: [学无止境]
tags: [R,统计学,Coursera]
comments: yes
---

SAS是我这学期接触的第一个统计学软件，主要是因为选的两门统计学课程都以SAS作为教学软件，不得不学。但说实话SAS没有给我留下好的印象。首先这软件很难找到正版，它只租不卖，价钱特别贵而且租用期一过就要续费。其次，软件太大，我费了好大力气才找到9.2破解版，体积接近3个G，然后花了1个多小时才安装上。最后，SAS作为应用分析领域全球第一的软件，界面却非常之丑。之前课题组一个老师就强烈推荐我学习R，我也准备把R作为以后统计分析的工具。最近又到了选课的时间，看到李欣海老师的《生物统计学》课程介绍里面已经把R作为教学软件了，心里一阵高兴，终于可以系统的学习R了。李老师在课程介绍里对比了SAS和R： 

> R是使用最多的统计软件，是主流大学统计系的核心工具；在工业界（主要是药学等领域）SAS依旧是排行第一的统计工具，然而在学术界，R已经后来居上，成为排行首位的统计软件；最近几年来，生物学领域的重要研究成果几乎都是用R做统计分析的；个人感觉上，R易用而高效，编程效率比SAS快10倍；R的许多软件包可以非常方便地处理一些生物学问题；R免费、开源，前景不可限量。

SAS能做的事情，R基本上都能做。而且因为R是开源软件，全世界的人都可以为R开发相关的软件包，这些软件包极大地丰富了R的功能。我用demo函数看了R画的图，比SAS的图漂亮。最重要的是，R是免费的，不存在用盗版的问题。我现在看个电子书都要先去Kindle书店看看有没有正版，有正版就买正版看。要是用盗版软件做科研数据分析，总感觉不舒服。 

R是我自己想学的，所以我等不了下学期了，这个寒假就开始学。最近上网发现了好多学习资源，整理在这里。一方面给自己备忘，一方面方便和我一样想学R的人。 

## MOOCs

MOOC即大型开放式网络课程（massive open online courses）。这类课程和以前的大学公开课不一样。以前的公开课仅仅是放一些教学视频在网上，而MOOC不仅有视频、课件，还有作业、考试以及学习论坛。MOOC的课程都是世界名校提供，开课和学习时间相对固定，完成课程学习并考试合格可以得到一个认证证书。这里推荐两门[Coursera](https://www.coursera.org/)上的两门统计学课程： 

  * [Statistics One](https://www.coursera.org/course/stats1)，由普林斯顿大学的Andrew Conway教授讲授，是统计学入门类课程，有24个理论课和12个实验课，实验课就是学习用R做统计分析。现在这门课的开课时间已经过了，但是课程还是也学，只是没有结业证书了。
  * [Computing for Data Analysis](https://www.coursera.org/course/compdata)，由约翰霍普金斯大学的Roger D. Peng讲授。这门课相对比较难，用R做统计分析，是该大学生物统计学专业研究生一年级的专业课，现在已经开课，想拿证书还来得及。
上面两门课我都开始学了，课程完全免费，Computing for Data Analysis交49美元认证费就可以在课程结束、考试合格后拿到证书。我感觉用这种方式学习R是最有效的，有老师讲授，有实践操作，有作业和考试，还可以在论坛互动。希望通过寒假系统的学习掌握R的基本操作。 

## 书

多方了解，这几本书对于R的入门学习应该是非常有用的： 

  * 《Software for Data Analysis: Programming with R》,John M. Chambers写的，Computing for Data Analysis课程首推教材
  * 《R语言实战》，高涛等翻译过来的著作，原名叫《R in action: Data Analysis and Graphics with R》，人民邮电出版社出版
  * 《统计建模与R软件》，比较全面的介绍R作统计分析的书，作者薛毅，清华大学出版社出版
  * [《153 分钟学会 R》](http://cran.r-project.org/doc/contrib/Liu-FAQ.pdf)，153分钟显然是不可能学会R的，这本书是刘思喆编的关于R最常见的153个问题
  * [《R Reference Card》](http://cran.r-project.org/doc/contrib/Short-refcard.pdf)，非常简短的小册子，总结了20类常见的R使用代码
要是读完这些书还不过瘾，[这里](http://www.r-project.org/doc/bib/R-books.html)还有很多R相关的书。 

## 网站和博客

  * [R官方网站](http://www.r-project.org/)，这里可以下载各个版本的R软件和R软件包，还有[R入门简介](http://cran.r-project.org/doc/manuals/R-intro.html)、[R-FAQ](http://cran.r-project.org/doc/manuals/R-FAQ.html)、[R数据导入\导出](http://cran.r-project.org/doc/manuals/R-data.html)、[R语言定义](http://cran.r-project.org/doc/manuals/R-lang.html)、[写R扩展程序](http://cran.r-project.org/doc/manuals/R-exts.html)等非常有用的文档
  * [统计之都](http://cos.name/)，学习统计学和R的中文社区
  * [Cookbook for R](http://www.cookbook-r.com/)，解决R常见问题
  * [Quick-R](http://www.statmethods.net/)，帮助R学习者快速入门
  * [Try R](http://tryr.codeschool.com/)，在线学习R的网站，比较好玩
  * [R-Bloggers](http://www.r-bloggers.com/)，[Inside-R](http://www.inside-r.org/blogs)，都是R人合写的博客
  * [Simply Statistics](http://simplystatistics.org/)，约翰霍普金斯大学的Roger D. Peng和他的朋友们合写的关于统计学的博客
  * [Google's R Style Guide](http://google-styleguide.googlecode.com/svn/trunk/Rguide.xml)，Google官方出的R语言编程指南
  * [陈刚的博客](http://gossipcoder.com/)，进去搜「R入门25招」
  * [R客](http://r-ke.info/)，中文R用户资源博客
今后我会继续在这个博客分享R学习相关的体会和经验。

## Comments

**[钟冬梅](#43505 "2015-10-12 16:12:07"):** 太棒了。。我也想系统的学习R，基本知识已经了解，现在想学编程。我没有上过网上的公开课程，看来得又多了一条途径。真的好喜欢你的博客，界面，内容。还有这么多关于R的东西。。太棒了

