---
title: 北河以北
layout: page
---

<div id="toc">
    {% for post in site.posts limit: 1 %}

        <h2>
        <a title="{{ post.title }}" href="cn/{{ post.url }}" >{{ post.title }}</a> 
        </h2>

        <p id="tip-info">{{ post.date | date:"%B %e, %Y" }}</p>
        {{ post.content }}
 
<section class="meta">
<span class="author">
  <a>发表于</a>
</span>
<span class="time">
  
  <time datetime="{{ page.date | date:"%Y-%m-%d" }}">{{ page.date | date:"%Y-%m-%d" }}</time>
</span>
<br />

{% if page.categories %}
<span class="categories">
  分类
  {% for cat in page.categories %}
  <a href="{{ site.url }}/categories/#{{ cat }}" title="{{ cat }}">{{ cat }}</a>&nbsp;
  {% endfor %}
</span>
{% endif %}
{% if page.tags %}
<span class="tags">
  标签 
  {% for tag in page.tags %}
  <a href="{{ site.url }}/tags/#{{ tag }}" title="{{ tag }}">{{ tag }}</a>&nbsp;
  {% endfor %}
</span>
{% endif %}
</section>
{% if page.comments %}
{% include comments.md %}                                  
{% endif %}

    <p>
    <a href="{{ site.url }}/archive">更多文章 </a>
    </p>
</div>

