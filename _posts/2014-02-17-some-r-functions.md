---
title: 一些 R 函数
layout: post
categories: [学无止境]
tags: [R,统计学]
comments: yes
---

粗略翻了一遍《统计建模与R软件》这本书。先说两个缺点。 

一是按照Google官方推荐的R语言[规范](http://google-styleguide.googlecode.com/svn/trunk/Rguide.xml)，赋值符号「<-」前后都应该加一个空格，但是这本书里面有的加了空格有的没有加空格，这在我看来是一个不能容忍的小瑕疵。二是离开packages谈作图，不严谨。ggplot2这么好的作图包只字不提，只是用「高级」、「低级」这样含糊的词来描述一些作图函数，不准确。 

总的来说，这本书是就着统计学的知识知识结构来讲R，统计学讲得比较多，R则涉及的不深。看书的时候随手记了一些R函数，摘录如下。 

**基本函数：** seq() 等间隔函数 rep() 重复函数 attribute(), attr(), mode(), length(), class() 属性函数 factor() 因子（或水平）函数 array() 构造多维数组 matrix() 构造矩阵 t() 求矩阵转置 det() 求方阵行列式的值 eigen() 求对称矩阵的特征值和特征向量 lsfit() 求最小二乘拟合结果 cbind(), rbind() 按照列或行合并矩阵 apply() 对数组（矩阵）某一维（或若干维）进行某种计算 scan() 读取纯文本文件数据（*.data格式数据） median() 求中位数 quantile() 求百分位数 var(), sd() 求方差和标准差 cov(), cor() 求协方差矩阵和相关矩阵 fivenum() 五数（最小值，下四分位数，中位数，上四分位数，最大值） uniroot() 求方程的根 

**作图函数：** stem() 作茎叶图 boxplot() 作箱线图 pairs(), coplot() 多变量数据可视化 dotchart() 点图 image(), contour(), persp() 画出三维图的映像、等值线和表面曲线 

**参数估计和假设检验：** 

shapiro.test() 正态性W检验 ks.test() 经验分布Kolmogorov-Smirnov检验 cor.test() 相关性检验，包括Pearson、Spearman、Kendall三种检验方法 var.test() 作方差比的检验和相应的区间估计 binom.test() 二项分布检验和估计函数 chisq.test() 卡方列联表检验和拟合优度的检验 fisher.test() Fisher精确检验 mcnemar.test() McNemar检验 wilcox.test() Wilcoxon符号秩检验和Wilcoxon秩和检验 

**回归分析：** 

lm() 做线性模型 summary() 结果概括 anova() 方差分析 predict() 从各种模型拟合函数预测结果 coefficients()或coef() 提取模型系数 deviance() 计算残差平方和 formula() 提取模型公式 residuals() 计算残差 step() 做逐步回归分析 rstandard() 计算回归模型的标准化（内学生化）残差 rstudent() 计算回归模型的（外）学生化残差 glm() 拟合计算广义线性模型 poly() 计算正交多项函数 nls()和nlm() 求解非线性最小二乘问题 p.adjust() P值调整函数 pairwise.t.test() 多重比较 

**方差分析：** 

bartlett.test() Bartlett检验（方差齐性检验） kruskal.test() Kruskal-Wallis秩和检验 friedman.test() Friedman秩和检验 

**多元分析：** 

scale() 做数据的中心化或标准化 sweep() 极差标准化变换 hclust() 系统聚类计算 princomp() 主成分分析函数