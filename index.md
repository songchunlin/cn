---
title: 北河以北
layout: page
---

<div id="toc">
    {% for post in site.posts limit: 1 %}
        {% if post.post-link %}
        <h2><center><a href="{{ post.post-link }}" title="External link">{{ post.title }}</a> <a href="{{ post.url }}" title="Permanent link to: '{{ post.title }}'">&raquo;</a></center></h2>
        {% else %}
        <h2><center><a href="{{ site.url }}{{ post.url }}" title="Permanent link to: '{{ post.title }}'">{{ post.title }}</a></center></h2>
        {% endif %}
        {{ post.content }}
        <section class="meta">
          <a>发表于</a><p id="tip-info">{{ post.date | date:"%Y-%m-%d" }}</p>
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
    {% endfor %}
    
    <p>
   <h2> <a href="{{ site.url }}/archive">全部文章 &raquo;</a></h2>
    </p>
</div>

