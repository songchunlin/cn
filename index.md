---
title: 北河以北
layout: page
---

<div id="toc">
    {% for post in site.posts limit: 3 %}
        {% if post.post-link %}
        <h2><center><a href="{{ post.post-link }}" title="External link">{{ post.title }}</a> <a href="{{ post.url }}" title="Permanent link to: '{{ post.title }}'">&raquo;</a></center></h2>
        {% else %}
        <h2><center><a href="{{ site.url }}{{ post.url }}" title="Permanent link to: '{{ post.title }}'">{{ post.title }}</a></center></h2>
        {% endif %}
        {{ post.content }}
        <p id="tip-info">{{ post.date | date:"%Y-%m-%d" }}</p>
    {% endfor %}
    
    <p>
   <h2> <a href="{{ site.url }}/archive">全部文章 &raquo;</a></h2>
    </p>
</div>

