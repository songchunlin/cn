---
title: 有趣的三门问题
layout: post
categories: [学无止境]
tags: [统计学,R]
comments: yes
---

昨天的生物统计学课上，李老师提到统计学上的一个问题：三门问题（又称蒙提霍尔问题，英文：[Monty Hall problem](http://en.wikipedia.org/wiki/Monty_Hall_problem)），很有意思。这个问题源自美国电视游戏节目Let's Make a Deal，玩法如下： 

参赛者会看见三扇关闭了的门，其中一扇的后面有一辆汽车，选中后面有车的那扇门就可以赢得该汽车，而另外两扇门后面则各藏有一只山羊。当参赛者选定了一扇门，但未去开启它的时候，知道门后情形的节目主持人会开启剩下两扇门的其中一扇，露出其中一只山羊。主持人其后会问参赛者要不要换另一扇仍然关上的门。问题出来了：为了增大获奖概率，换还是不换？ 

![](http://upload.wikimedia.org/wikipedia/commons/thumb/3/3f/Monty_open_door.svg/500px-Monty_open_door.svg.png) *图片文件来自[维基百科](http://en.wikipedia.org/wiki/Monty_Hall_problem)*。

有一点需要明确：主持人一开始就知道每扇门后面是羊还是车，在参赛者第一次选择之后，主持人打开的剩下两扇门的其中一扇一定是羊。 

这个问题看似很简单，我的第一直觉是：换不换都一样。既然主持人已经排除了一只羊，那剩下的两扇门后面不是羊就是车，选中的概率是1/2，很合理的解释，不是么？ 

但直觉是错的，答案是**要换**，换了之后会使获得汽车的概率达到2/3。 

李老师的解释我没太记住，我的理解是这样的：当参赛者有了第二次选择的机会时，只有在一种情况下他换门之后会失败，那就是一开始他就选择了车。但是参赛者第一次做出选择的时候选中车的概率仅为1/3，换句话说他换门失败的概率是1/3，从而换门成功的概率就是2/3了。 

还可以这样分解来看。有三种情况：参赛者第一次选择了羊A，主持人排除了羊B，换门，获奖；参赛者第一次选择了羊B，主持人排除了羊A，换门，获奖；参赛者第一次选择了汽车，主持人排除了羊A或者羊B，换门，失败。 

是不是很有意思？逻辑上完美，直觉上却相悖。 

这个问题还可以用R来模拟，代码原作者为[Bodo Winter](http://www.bodowinter.com/)： 

{% highlight r %} 
doors <- c("A","B","C") 
xdata=c() 
for(i in 1:100000) 
{ 
prize <- sample(doors)[1] 
pick <- sample(doors)[1] 
open <- sample(doors[which(doors != pick & doors != prize)])[1] 
switchyes <- doors[which(doors != pick & doors !=open)] 
if(pick==prize){xdata=c(xdata,"noswitchwin")} if(switchyes==prize){xdata=c(xdata,"switchwin")} 
} 
length(which(xdata == "switchwin")) 
{% endhighlight %}

这段代码的意思就是让电脑模拟游戏过程，先选择再换门，做一万次游戏换一万次门，我运行的结果为换门获胜的次数为66753，非常接近2/3。如果把游戏无限做下去，那换门获胜的概率就无限接近于2/3。其实本来我是准备让电脑做一亿次实验的，让R运行着我就吃饭去了，回来之后这篇博文快写完了居然还没有算完，于是改成十万次。每次运行的结果都不一样，但基本都是在2/3左右小幅度波动。这就在实验上证实了换门是明智的。