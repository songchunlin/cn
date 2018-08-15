---
title: Macbook Pro 固态硬盘扩容升级小记
layout: post
categories: [器物杂谈]
tags: [Mac,Apple,SSD]
comments: yes
---

我 2014 年[购买](http://songchunlin.net/cn/2014/09/rmbp/)的 MacBook Pro 硬盘容量为 256 GB，虽然后来买了创见 128 GB SD 扩容卡，容量到现在还是捉襟见肘了，一些大型的应用都没法装，时不时还需要清理，扩容势在必行。

网上搜索一番，最初进入我视野的是 OWC Aura SSD，官网上看起来很不错，专为 Mac 打造，1 TB 价格是 549.99 美元，但是写入速度只有 1066MB/s，还不如苹果原装 SSD 512 GB 的速度，让我对他们的性能产生怀疑。因为理论上容量越大的 SSD 速度越快才对，你这 1 TB 却还比不上人家 512 GB 的。去亚马逊一搜果然不少差评，比如安装后发热严重、耗电增加、还没有温度传感器等。我的目标转向了二手 Mac 原装三星 SSD。

亚马逊上原装 Mac 512 GB SSD 都在 400 美元左右，略贵。去 Ebay 上一搜，有一款 2015 年生产的型号为 MV-JPV512R/0A2 的 512 GB SSD，结合[拆机图](https://www.ifixit.com/Guide/MacBook+Pro+15-Inch+Retina+Display+Mid+2015+SSD+Replacement/48251)来看是 MacBook Pro 2015 款的原装 SSD。确认和我的电脑兼容，当天刚好 Ebay 全场八五折，238 美元入手，这个价格可以说非常实惠了，比 OWC 那个 480 GB 的都便宜 100 美元。

第一次在 Ebay 购物，没想到送货速度还很快，从加州到康州，两天就到了。

扩容教程参考了[这篇博文](http://www.cnfeat.com/blog/2016/07/18/MacbookProSSDUpdate/)。简单来说：第一步，准备 Time Machine 备份，[制作系统安装 U 盘](https://www.iplaysoft.com/macos-usb-install-drive.html)；第二步，参考 ifixit 的[教程](https://zh.ifixit.com/Guide/MacBook+Pro+13-Inch+Retina+%E6%98%BE%E7%A4%BA%E5%B1%8F++2014%E4%B8%AD%E6%9C%9F+SSD+%E6%9B%B4%E6%8D%A2/27849)拆机换掉旧 SSD，安上新 SSD；第三步，用系统安装盘给新 SSD 装上系统，大约半小时；第四步，从 Time Machine 恢复系统，大约一个半小时完成。第五步，再把旧 SSD 装上，[抹掉并重装系统](https://support.apple.com/zh-cn/HT204904)用于转手出售。

这次换 SSD 让我体会到了  Time Machine 的方便强大，恢复之后之前所有的数据、应用和设置都在，包括桌面图标的位置和 Dock 上应用的顺序都和之前一致。唯一的不足是 Launchpad 图标乱了，可能苹果觉得 Launchpad 不需要整理吧。

新的 SSD 最大的好处是让电脑使用的自由度增加了，不用纠结删除大应用了。系统报告里面链接宽度从 x2 变成了 x4，读写速度都提升了两倍多，不过我并没有感觉到，测试了才知道的，可能因为本来就够快了。

希望它还能为我服役一两年，然后换屏幕和内存最大，SSD 大于 512GB 的 MacBook Pro。
