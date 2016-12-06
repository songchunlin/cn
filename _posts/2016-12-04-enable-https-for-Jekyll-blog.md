---
title: 为 Jekyll 博客启用免费 SSL
layout: post
categories: [器物杂谈]
tags: [博客,HTTPS,SSL]
comments: yes
---

本来基于 Github Pages 的静态页面默认就是支持 HTTPS 的，但是绑定了自定义域名这个默认选项就无效了。HTTPS 的好处不容多说，之前一直因为 SSL 证书昂贵的价格而没有配置。偶然发现 [Cloudflare](https://www.cloudflare.com) 提供了免费的 SSL，于是就用为我的博客开启了 HTTPS。

开启的步骤非常简单，去 [Cloudflare](https://www.cloudflare.com) 的网站注册账号，选择免费套餐，添加域名，一直到最后一步会提示更改 Name Server 为新分配的地址。这个时候只需要登录域名提供商（比如我的是 GoDaddy）进入管理域名页面，把域名服务器替换为 Cloudlfare 提供的 Name Server。我第一次设置的时候把 Cloudlfare 提供的 Name Server 和之前的 Name Server 并列，等了大半天都没有生效，删除之前的 DNSPod 的 Name Server 立马就生效了，网站也正常访问。设置完成后尝试再次添加 DNSPod 的 Name Server，Chrome 访问直接提示不安全，一看是因为把 SSL 证书解析到 github.com 了，所以必须删除之前的域名服务器地址。

添加完了稍等几分钟，用 HTTPS 前缀 [https://songchunlin.net/](https://songchunlin.net/) 就可以访问了。但是这时还必须手动输入 HTTPS 才能访问加密站点，HTTP 前缀访问还是老样子，需要做一点设置让 HTTP 强制跳转 HTTPS。

做法是在 layout 文件的 <head> 标签下添加如下代码：

{% highlight r %} 
      <script type="text/javascript">
        var host = "enter your site url here";
        if ((host == window.location.host) && (window.location.protocol != "https:"))
            window.location.protocol = "https";
    </script>
{% endhighlight %}

修改后 commit 到 GitHub 上应该就可以强制跳转 HTTPS 了，个别站点会出现 HTTPS 叹号，这是因为页面的少数资源不是加密的，比如我的多说评论里面从新浪微博调取的头像就不是加密的，导致浏览器认为整个页面不安全。还有我使用的公式服务  MathJax，之前并不是 HTTPS的，去官网查了最新的代码修改即可：

{% highlight r %} 
<script src='https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML'></script>
{% endhighlight %}

其实对于个人网站 SSL 并不是一个必须的选项，连我大中科院的网站至今都没有 SSL 加密，但是看到那行绿色的字母心里还是挺舒服的，有这个作用就值了。

---
12月5日更新：由于使用 HTTPS 之后博客访问速度大大减缓，得不偿失，所以取消了 HTTPS。