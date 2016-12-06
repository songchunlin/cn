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
         <p id="tip-info"> <a>发表于</a>{{ post.date | date:"%Y-%m-%d" }}</p>
</section>
    {% endfor %}
    
    <p>
   <h2> <a href="{{ site.url }}/archive" title="全部文章列表">全部文章 &raquo;</a></h2>
    </p>
</div>

