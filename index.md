---
title: 北河以北
layout: page
---

<div id="toc">
    {% for post in site.posts limit: 5 %}
        {% if post.post-link %}
        <h2><a href="{{ post.post-link }}" title="External link">{{ post.title }}</a> <a href="{{ post.url }}" title="Permanent link to: '{{ post.title }}'">&raquo;</a></h2>
        {% else %}
        <h2>{{ post.title }} <a href="cn/{{ post.url }}" title="Permanent link to: '{{ post.title }}'">{{ post.title }}</a></h2>
        {% endif %}
        <p id="tip-info">{{ post.date | date:"%B %e, %Y" }}</p>
        {{ post.content }}
        
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

    {% endfor %}
    
    <p>
    <a href="{{ site.url }}/archive">更多文章 </a>
    </p>
</div>

