---
title: 北河以北
layout: page
---

<div id="toc">
    {% for post in site.posts limit: 3 %}
        {% if post.post-link %}
        <h2><a href="{{ post.post-link }}" title="External link">{{ post.title }}</a> <a href="{{ post.url }}" title="Permanent link to: '{{ post.title }}'">&raquo;</a></h2>
        {% else %}
        <h2><a href="cn/{{ post.url }}" title="Permanent link to: '{{ post.title }}'">{{ post.title }}</a></h2>
        {% endif %}
<span class="time">
  <time datetime="{{ page.date | date:"%Y-%m-%d" }}">{{ page.date | date:"%Y-%m-%d" }}</time>
</span>
        {{ post.content }}
    {% endfor %}
    
    <p>
   <h2> <a href="{{ site.url }}/archive">更多文章 </a></h2>
    </p>
</div>

