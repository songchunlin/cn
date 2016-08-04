---
title: 如何理解统计学中的 Power
layout: post
categories: [学无止境]
tags: [R,统计学,t 检验]
comments: yes
---

统计学中有一个概念叫做Power，国外的统计学教材多有详细的讨论。在《R语言实战》这本书中Power被翻译为功效，与之相关的概念还有统计功效（[Statistical power](http://en.wikipedia.org/wiki/Statistical_power)）、功效分析（Power analysis）等。 

要说Power，还得从假设检验说起。假设检验是根据研究的问题预先设定一个零假设（null hypothesis，H0）和一个备择假设（alternative hypothesis，H1），然后从总体中抽样，通过计算样本统计量来估计总体的特征。假设零假设为真，如果计算得到的观测样本统计量的概率小于某个特定值（这个特定概率要事先设定，常见的比如0.05），则认为这是小概率事件，统计学中认为小概率事件不可能发生，从而拒绝零假设，接受备择假设。否则就无法拒绝原假设（但是不能说接受零假设，无法拒绝和接受之间是有距离的）。

假设检验中可能会出现第一型及第二型错误（[Type I and type II errors](http://en.wikipedia.org/wiki/Type_I_and_type_II_errors)）。第一型错误有的统计学书中称为假阳性错误，意思是零假设实际上是正确的，但是却被错误地拒绝了；第二型错误也称为假阴性错误，意思是零假设是错误的，但是却错误地没有被拒绝。这两种错误在实际研究工作中是应该避免的，用表格表示如下：

![Type I and type II errors](http://epiville.ccnmtl.columbia.edu/assets/images/error_table.jpg)

而Power简单来说就是在零假设错误的情况下成功拒绝零假设接受备择假设的概率（1-β），用公式来表示就是：

![](http://upload.wikimedia.org/math/5/5/f/55f068d2fd9ec5849bc75f1f88fd80f3.png) 

Power是检验研究工作有效性的一个很有用的指标，Power越大，说明犯第二型错误的概率越小。在实际研究工作中，Power值越大说明拒绝零假设的底气越足，研究结果也越可靠。影响Power值大小的因素有：样本容量——样本容量越大，犯错误的概率就越小，Power就越大；[Effect size](http://en.wikipedia.org/wiki/Effect_size)（不知道咋翻译，影响量级？）的大小——Effect size越大则Power越大；样本的变异程度——方差越小Power越大；统计显著性的阈值标准，假设检验标准设为0.01相比0.05显然更难于拒绝零假设，Power值也越小。 

R中可以用[pwr](http://cran.r-project.org/web/packages/pwr/)包来实现对Power的分析。