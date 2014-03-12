---
title: 千岛湖鸟类与墓群的决定因素分析
tags: [多模型推断,模型选择,千岛湖,逐步回归,盗墓]
categories: [统计,娱乐]
layout: post
comments: yes
---

<script src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML" type="text/javascript"></script>


#### －基于模型选择和多模型推断的方法

[**斯幸峰**](http://sixf.org/cn)

三墩职业技术学校空想资本主义学院理论空间学研究所, 杭州 310058, 中国浙江

## 摘要

由于常规的逐步回归分析在使用过程中有诸多缺陷，而信息理论的赤池信息量准则(AIC)弥补这一缺点。此文基于AIC的判定方法，利用模型选择和多模型推断(Model selection and multimodel inference)探讨了千岛湖岛屿的鸟类多样性的决定因素。同时开展对千岛湖墓葬分布的可能性分析，为盗墓的理论研究打下翔实的基础。

## 关键词

AIC、盗墓、多模型推断、模型选择、鸟类、千岛湖、逐步回归


## 前言

面对一系列可能的备选模型，如何评判模型的优劣？选用逐步回归分析(stepwise regression)还是信息理论(information theoretic analysis)？Whittingham等(2006)对2004年的《Ecology Letters》、《Journal of Applied Ecology》和《Animal Behaviors》三个杂志分析，共有65篇文章使用多元回归(multiple regression)，其中57%的研究使用了逐步回归的方法。虽然逐步回归依旧广泛使用，但是有许多缺陷，如：参数估计的误差(bias in parameter)，模型选择算法的不一致(inconsistencies among model selection algorithms)，多个假设检验的内在缺陷(inherent problem of multiple hypothesis testing)，以及最后结果只依赖单一的最优模型(inappropriate focus or reliance on a single best model)。至于具体的缺陷原理，此处不予细说，本文将采用信息理论简要介绍多模型推断的方法。

千岛湖地处浙江西部，山清水秀，民风淳朴(此处省略一百字)。自1959年新安江大坝建成后，形成1078个岛屿(108米水位时)，乃名副其实的“千岛湖”，是一个得天独厚的路桥岛屿天然实验场所。[本研究团队](http://mypage.zju.edu.cn/personnelCard/pingding)自2002年开始千岛湖地区的鸟类调查，到目前已经逐渐拓展到蜘蛛、蜥蜴、青蛙、蛇、猴子、昆虫、兽类、蝴蝶以及植物等各项业务，欢迎广大生态爱好者和有志之士前来参观与洽谈。撰写本文的起因是早先跟本团队中的“蜘蛛侠”吴博士尝试探讨鸟类多样性与风水的关系，加上近日刚好看了一些有关模型选择和多模型推断(model selection and multimodel inference)的文献，采用“先进”的AIC(Akaike information criterion)技术，探讨该学术问题的可能性。

本文主要探讨的问题包括两部分：1) AIC是啥？莫非是美国国际大学(American International College)吗？ 2) 模型选择的操作步骤；3) 千岛湖岛屿上鸟类和墓葬分布的机理。

## 材料与方法 

### 研究地点与岛屿参数

按照面积和隔离度，进行分层随机(stratified random sampling)在千岛湖选取40个岛屿。自2002年起开始实地考察并详细并测量了跟鸟类多样性相关的各种岛屿参数：面积、隔离度、 植被物种数、生境数目、周长、周长面积比、形状指数、海拔，并于昨晚想像了各种与及盗墓可能性相关的岛屿参数：凹凸度、坡度、朝向、铝和硅的含量，沙土指数和pH值。

其中铝和硅的含量是白膏泥的主要组成元素。由于白膏泥防水性能好，是墓葬出没的指标。沙土指数反映了建墓的可能性，即如果沙土含量过多，土质不夯实，容易测漏。pH值，跟墓葬中的有机体“发酵”程度相关。形状指数、凹凸度、坡度和朝向是判断风水优劣的关键，因为圆山、朝南、土层厚及石头少的生境是墓葬出现的高发区。

### AIC

AIC(Akaika Information Criterion)即赤池信息量准则，是评估统计模型的复杂度和衡量统计模型拟合优良性的一种标准。最早由日本统计学家赤池弘次创立和发展，由此得名。

AIC在一般情况下，可以表示为

$$AIC = 2k-2ln(L)$$

其中: k是参数的数量, L是似然函数(likelihood function)。这是公式，知道就可以，R语言中有现成的命令(`stat`包中的`AIC`命令，及`stats`包中的`extractAIC`命令)。如果自己动手算，也可以：假设条件是模型的误差服从独立正态分布，n为观察数, RSS为残差平方和，则

$$AIC = 2k+n ln(\frac{RSS}{n})$$

增加了自由参数提高了拟合的优良性，即AIC鼓励数据的优良性但是尽量避免出现过度拟合(overfitting)的情况，所以优先考虑的模型是AIC值最小的那一只。

其中在样本小的情况下(n/k < 40)，AIC 转变成AICc(corrected AIC)，即：

$$AICc = AIC + 2k \frac {k+1}{n-k-1}$$

当n增加时，AICc收敛成AIC。所以AICc可以应用于任何样本大小的情况下(注: 这部分内容主要抄自[维基百科](http://zh.wikipedia.org/wiki/赤池信息量准则)，不过维基百科中的文献引用有个小错误，即参考书是 Burham & Anderson(2002)，而不是2004)

如果数据有过度离散(overdispersion)的影响，则需要考虑Q版的AIC，即

$$QAIC = \frac {-2ln(L)}{\hat{c}} + 2k$$

$\hat{c}$ 为方差膨胀系数(VIF)或者过度离散系数(overdispersion coefficient)。如果 $\hat{c}$ 大于1，则需要采用QAIC。当然，Q版的，也有QAICc，道理同上。一般可以参数进入模型前，只要保证参数的独立性，则可以避免过度离散的情况。

### 计算模型权重

得到各个模型的AIC值后，按照AIC从小到大排列，然后每个模型的AIC值与最小的AIC值相减，得到ΔAIC。

通过得到的ΔAIC，计算各个模型的模型权重，即Akaika weight(*w<sub>i</sub>*)。其中第 *i* 个模型的模型权重为：

$$w_i = \frac {e^{(- \frac{1}{2} \Delta AIC_i)}}{\sum_{r=1}^R e^{(- \frac {1}{2} \Delta AIC_r)}}$$

公式不复杂，而且R中有现成的命令计算*w<sub>i</sub>*。*w<sub>i</sub>*在0至1之间，并且所有模型权重之和为1。模型权重越大，表示该模型是真实模型的可能性就越大。比如第二个模型的*w<sub>2</sub>*为0.31，则表示这个模型为真实模型(best possible model)的可能性为31%。

通过模型权重还可以计算各个参数的重要值(importance)。方法很简单，比如参数1，则挑出含参数1的所有模型，然后把这些模型的权重相加，即使该参数的权重。各个参数的权重一比，就知道谁最重要了。

### 模型选择的不确定性和多模型推断

其实现实一般不会这么完美的，上述所有结论都建立在ΔAIC>2的基础上，即第二个模型的AIC值比最小模型的AIC值差值大于2。如果小于2，则说明第一个模型跟第二个模型(或者连续前四五个模型)为真实模型的可能性差不多，无法决定优劣。咋么办？终极武器：模型平均(model averaging)。

曾经ΔAIC>2是条金科玉律(Burnham & Anderson, 2002)，但是Anderson大神在2008版的书中似乎把ΔAIC>2给降级了(Andersion, 2008)，建议不要轻信这条规律，而是建议把所有模型统统进入模型进行平均，也就是不要随便剔除一些看似不可能模型，哪怕这些模型的权重都小得接近于零。如果ΔAIC>2，通过最优模型，带入实际岛屿参数，就可以计算出预测的鸟类种数或者存在墓葬的可能性。现在由于ΔAIC<2，第一个模型无法“代表”其他模型，于是所有模型都得参与进来。假设 *Y<sup>^</sup>* 值为预测值(鸟类种数或墓葬出现概率)，则平均预测值为：

$$\hat {\bar {Y}} = \sum_{r=1}^R (w_i \hat {Y_i})$$

啥意思？假设有九个可能模型，则有九个模型的权重，以及可以计算出九个预测值。如今，平均预测值就是预测值分别乘以权重后的和，比如

$$w_1\hat{Y_1}+w_2\hat{Y_2}+...+w_9\hat{Y_9}$$


既然预测值*Y<sup>^</sup>*需要模型平均，参数估计值也得平均，道理跟估计预测值相似。假设参数*i*的参数估计为*θ<sub>i</sub>*，本来当ΔAIC>2时只要直接采用最小AIC模型的 *θ<sub>i</sub>* 值即可，现在则需要把含有参数 $i$ 的所有模型列出来，进行相似的模型平均：

$$\hat {\bar {\theta}} = \sum_{r=1}^R (w_i \hat {\theta_i})$$

同理，计算参数估计的方差时，也得进行模型平均，得到非条件方差估计(unconditional variance estimate)，详见(Burnham & Anderson, 2002, p162):

$$\hat{var}\left(\hat{\bar{\theta}}\right)=\left[\sum_{i=1}^R w_i\sqrt{\hat {var}(\hat{\theta_i}|g_i)+(\hat{\theta_i}-\hat{\bar {\theta}})^2}\right]^2$$

Anderson大神似乎对这个公式也不是很满意，建议更新为Anderson(2008)第111页的公式，其实结果相差不多：

$$var\left(\hat{\bar{\theta}}\right)=\sum_{i=1}^R w_i\left[var(\hat {\theta_i}|g_i)+(\hat{\theta_i}-\hat{\bar{\theta}})^2\right]$$

 其中 $\hat{\bar{θ}}$ 是模型的平均参数估计，*w<sub>i</sub>*是模型权重，以及 *g<sub>i</sub>*表示第*i*个模型。简言之，非条件方差估计就是包括两部分：根号内的前部分是本身的取样方差，另外一部分是由于模型选择不确定导致的方差。所以，把后者考虑进去以后，最后的方差估计不会由于模型的不确定性而降低准确性。我怕表达不准，列出Anderson(2008)第111页的原文: an estimator of the variance of parameter estimater esimates that incorporates both sampling variance, given a model, and a variance component for model selection uncertainty. 所以，最后参数的置信区间为 

$$\hat {\bar {\theta}} \pm 1.96 \times \sqrt{var\left({\hat {\bar {\theta}}}\right)}$$

### 实战演练

演练开始之前，请确保已经安装下列软件包：`glmulti`, `MuMIn`, `bbmle`。网速给力的情况下，最简单的方法是直接在R语言操作界面输入

`install.packages("glmulti")`

否则，从R的镜像网站下载压缩包后再本地安装。


#### 演练一：千岛湖鸟类多样性的决定因素

导入 `glmulti`包


```r
library(glmulti)
```

```
## Loading required package: rJava
```


导入千岛湖鸟类和岛屿数据(注：这个数据是真实的，只是我把数据随机调换顺序了)


```r
tilbird <- read.table("tilbird.txt", h = T)  #找到 'tilbird.txt'文件并打开
str(tilbird)  # 检查`til.bird`的数据结构
```

```
## 'data.frame':	40 obs. of  9 variables:
##  $ birdspp  : int  43 34 35 32 31 27 30 33 24 24 ...
##  $ area     : num  1289.2 143.2 109 55.1 46.4 ...
##  $ isolation: num  897 1415 965 954 730 ...
##  $ plants   : int  198 99 86 59 51 49 57 69 74 85 ...
##  $ habitats : int  7 6 6 5 5 5 5 3 4 3 ...
##  $ Pe       : num  105965 17465 12022 7570 10444 ...
##  $ PAR      : num  82.2 122 110.3 137.4 225.2 ...
##  $ SI       : num  832 412 325 288 433 ...
##  $ elev     : num  298 251 227 198 174 ...
```


数据中第一列为鸟类物种数，其余八列为岛屿参数，分别为：面积、隔离度、植物物种数、生境类别数、岛屿周长、周长面积比(越大表示边缘越多)、形状指数(完全的圆形，则形状指数为1)和海拔。

模型开始之前得进行岛屿参数的独立性检验。其中方法可以使用相关分析(correlation test)，方差膨胀系数(VIF)和主成份分析(PCA)，这里采用常用的相关分析。

相关分析的R语言命令是`cor.test`，这是两两检验。`cor`是多个参数一起检验，可以多个参数一起检验的时候，结果不给出p值，于是我写了一个小函数，就是多个参数检验的时候也同时给出p值。命令名称为`cor.sig`，代码为：


```r
cor.sig = function(test) {
    res.cor = cor(test)
    res.sig = res.cor
    res.sig[abs(res.sig) > 0] = NA
    nx = dim(test)[2]
    for (i in 1:nx) {
        for (j in 1:nx) {
            res.cor1 = as.numeric(cor.test(test[, i], test[, j])$est)
            res.sig1 = as.numeric(cor.test(test[, i], test[, j])$p.value)
            if (res.sig1 <= 0.001) {
                sig.mark = "***"
            }
            if (res.sig1 <= 0.01 & res.sig1 > 0.001) {
                sig.mark = "** "
            }
            if (res.sig1 <= 0.05 & res.sig1 > 0.01) {
                sig.mark = "*  "
            }
            if (res.sig1 > 0.05) {
                sig.mark = "   "
            }
            if (res.cor1 > 0) {
                res.sig[i, j] = paste(" ", as.character(round(res.cor1, 3)), 
                  sig.mark, sep = "")
            } else {
                res.sig[i, j] = paste(as.character(round(res.cor1, 3)), sig.mark, 
                  sep = "")
            }
        }
    }
    as.data.frame(res.sig)
}
```


所有岛屿参数进行相关分析，


```r
cor.sig(tilbird[, 2:9])  #第一列不算，那是鸟类物种数，即Y值。
```

```
##                area isolation    plants  habitats        Pe       PAR
## area           1*** -0.115     0.798***  0.623***  0.996*** -0.429** 
## isolation -0.115         1*** -0.132    -0.191    -0.117     0.299   
## plants     0.798*** -0.132         1***  0.542***  0.798*** -0.521***
## habitats   0.623*** -0.191     0.542***      1***  0.676*** -0.805***
## Pe         0.996*** -0.117     0.798***  0.676***      1*** -0.481** 
## PAR       -0.429**   0.299    -0.521*** -0.805*** -0.481**       1***
## SI         0.857*** -0.045     0.697***  0.827***  0.898*** -0.619***
## elev       0.726*** -0.127     0.666***  0.924***  0.775*** -0.803***
##                  SI      elev
## area       0.857***  0.726***
## isolation -0.045    -0.127   
## plants     0.697***  0.666***
## habitats   0.827***  0.924***
## Pe         0.898***  0.775***
## PAR       -0.619*** -0.803***
## SI             1***  0.888***
## elev       0.888***      1***
```


结果表明，面积跟周长、周长面积比、形状指数和海拔呈显著相关。考虑到这些因素的生物学意义，很明显，除去其他显著相关的参数而保留面积是合理的，因为在岛屿生物地理学框架下，面积是极为重要的参数，且这里的其他参数都可能由于面积而产生。比如海拔，由于是岛屿，在坡度相似的情况下，面积越大，海拔越高。所以，最后进入模型的是四个参数：面积、隔离度、植物数和生境数。

权且采用最常见的线性模型(linear model)，创建总模型(global model)，即包括所有参数：


```r
global.model <- lm(birdspp ~ area + isolation + plants + habitats, data = tilbird)
```


然后利用`glmulti`包中的函数`glmulti`对所有可能模型中来选择最优模型。此处由于是4个参数，则共有2^4=16个可能模型(**此处不考虑交互效应**)。


```r
bird.model <- glmulti(global.model, level = 1, crit = "aicc")  #选用AICc进行评判模型
```

```
## Initialization...
## TASK: Exhaustive screening of candidate set.
## Fitting...
## Completed.
```

```r
summary(bird.model)
```

```
## $name
## [1] "glmulti.analysis"
## 
## $method
## [1] "h"
## 
## $fitting
## [1] "lm"
## 
## $crit
## [1] "aicc"
## 
## $level
## [1] 1
## 
## $marginality
## [1] FALSE
## 
## $confsetsize
## [1] 100
## 
## $bestic
## [1] 204.9
## 
## $icvalues
##  [1] 204.9 205.3 206.9 207.5 214.3 214.9 216.6 217.1 217.8 218.4 220.6
## [12] 221.3 226.2 226.7 243.6 244.5
## 
## $bestmodel
## [1] "birdspp ~ 1 + plants + habitats"
## 
## $modelweights
##  [1] 4.005e-01 3.296e-01 1.499e-01 1.103e-01 3.555e-03 2.653e-03 1.141e-03
##  [8] 9.180e-04 6.250e-04 4.660e-04 1.578e-04 1.095e-04 9.564e-06 7.474e-06
## [15] 1.568e-09 1.005e-09
## 
## $includeobjects
## [1] TRUE
```

结果出来了，最优模型只包括面积和生境的参数，看看：


```r
lm9 <- lm(birdspp ~ area + habitats, data = tilbird)
summary(lm9)
```

```
## 
## Call:
## lm(formula = birdspp ~ area + habitats, data = tilbird)
## 
## Residuals:
##    Min     1Q Median     3Q    Max 
## -6.665 -2.266  0.128  1.844  8.594 
## 
## Coefficients:
##             Estimate Std. Error t value Pr(>|t|)    
## (Intercept) 17.47172    2.33167    7.49  6.3e-09 ***
## area         0.00779    0.00343    2.27   0.0289 *  
## habitats     2.29668    0.65987    3.48   0.0013 ** 
## ---
## Signif. codes:  0 '***' 0.001 '**' 0.01 '*' 0.05 '.' 0.1 ' ' 1
## 
## Residual standard error: 3.42 on 37 degrees of freedom
## Multiple R-squared:  0.545,	Adjusted R-squared:  0.52 
## F-statistic: 22.2 on 2 and 37 DF,  p-value: 4.71e-07
```


但再看看刚才的模型的AICc结果：


```r
summary(bird.model)$icvalue
```

```
##  [1] 204.9 205.3 206.9 207.5 214.3 214.9 216.6 217.1 217.8 218.4 220.6
## [12] 221.3 226.2 226.7 243.6 244.5
```


发现第二个模型的ΔAICc为225.6429-225.4588=0.1841。坑爹啊！如果此时ΔAICc>2，则模型选择到此结束，即最优模型为第一个模型。可是，现实比较残忍，继续模型平均，列出所有可能模型：


```r
lm1 <- lm(birdspp ~ area + isolation + plants + habitats, data = tilbird)
lm2 <- lm(birdspp ~ isolation + plants + habitats, data = tilbird)
lm3 <- lm(birdspp ~ area + plants + habitats, data = tilbird)
lm4 <- lm(birdspp ~ area + isolation + habitats, data = tilbird)
lm5 <- lm(birdspp ~ area + isolation + plants, data = tilbird)
lm6 <- lm(birdspp ~ plants + habitats, data = tilbird)
lm7 <- lm(birdspp ~ isolation + habitats, data = tilbird)
lm8 <- lm(birdspp ~ isolation + plants, data = tilbird)
lm9 <- lm(birdspp ~ area + habitats, data = tilbird)
lm10 <- lm(birdspp ~ area + plants, data = tilbird)
lm11 <- lm(birdspp ~ area + isolation, data = tilbird)
lm12 <- lm(birdspp ~ area, data = tilbird)
lm13 <- lm(birdspp ~ isolation, data = tilbird)
lm14 <- lm(birdspp ~ plants, data = tilbird)
lm15 <- lm(birdspp ~ habitats, data = tilbird)
lm16 <- lm(birdspp ~ 1, data = tilbird)
```


看着比较壮观，但是碰到十个参数，共 2^10=1024 个可能模型的时候就比较麻烦了。没事，可以再编个程序循环一下就行，此处暂时不提。

16个可能模型一起平均，


```r
library(MuMIn)
lm.ave <- model.avg(lm1, lm2, lm3, lm4, lm5, lm6, lm7, lm8, lm9, lm10, lm11, 
    lm12, lm13, lm14, lm15, lm16)
summary(lm.ave)
```

```
## 
## Call:
## model.avg.default(object = lm1, lm2, lm3, lm4, lm5, lm6, lm7, 
##     lm8, lm9, lm10, lm11, lm12, lm13, lm14, lm15, lm16)
## 
## Component models:
##        df  logLik  AICc Delta Weight
## 24      4  -97.88 204.9  0.00   0.40
## 234     5  -96.76 205.3  0.39   0.33
## 124     5  -97.55 206.9  1.96   0.15
## 1234    6  -96.46 207.5  2.58   0.11
## 34      4 -102.60 214.3  9.45   0.00
## 4       3 -104.13 214.9 10.03   0.00
## 134     5 -102.43 216.6 11.72   0.00
## 14      4 -103.95 217.1 12.16   0.00
## 12      4 -104.34 217.8 12.93   0.00
## 123     5 -103.32 218.4 13.51   0.00
## 2       3 -106.95 220.6 15.68   0.00
## 23      4 -106.08 221.3 16.41   0.00
## 13      4 -108.52 226.2 21.29   0.00
## 1       3 -110.00 226.7 21.78   0.00
## 3       3 -118.47 243.6 38.72   0.00
## (Null)  2 -120.09 244.5 39.61   0.00
## 
## Term codes:
##      area  habitats isolation    plants 
##         1         2         3         4 
## 
## Model-averaged coefficients: 
##              Estimate Std. Error Adjusted SE z value Pr(>|z|)    
## (Intercept) 14.016589   2.311063    2.372339    5.91   <2e-16 ***
## plants       0.092700   0.022636    0.023348    3.97   0.0001 ***
## habitats     1.921310   0.542074    0.560239    3.43   0.0006 ***
## isolation   -0.000818   0.000573    0.000593    1.38   0.1677    
## area        -0.002977   0.004172    0.004313    0.69   0.4901    
## ---
## Signif. codes:  0 '***' 0.001 '**' 0.01 '*' 0.05 '.' 0.1 ' ' 1
## 
## Full model-averaged coefficients (with shrinkage): 
##  (Intercept)    plants  habitats isolation      area
##    14.016589  0.092572  1.905393 -0.000364 -0.000784
## 
## Relative variable importance:
##    plants  habitats isolation      area 
##      1.00      0.99      0.45      0.26
```


结果中的第一部分，'Component models'，即列出了所有模型的自由度(df)，对数似然函数(logLik)，AICc值，ΔAICc值和模型权重。比如最优模型的模型权重为**0.22**，即为真实模型的可能性为22%(其实是非常低的，一般达到0.6-0.7就很不错了，当然，这里使用的数据是被我随机化过的，所以结果没有实际参考价值)

其中的第4部分，'Full model-averaged coefficients'，即使平均参数估计， $\hat{\bar{θ}}$ 。

第5部分，'Relative variable importance'，即是各个参数的重要值。最大为1，可见该例子中，面积是最重要的，次之是生境。至于隔离度和植物数量，则在模型中贡献不大。

此时如果打算计算岛1预测的鸟类物种数，则可以如下进行模型平均：


```r
pred.mat <- matrix(NA, ncol = 16, nrow = 40, dimnames = list(paste("isl", 1:40, 
    sep = ""), paste("lm", 1:16, sep = "")))  #建立一个空矩阵，放40个岛的各16各模型预测值，如下所示
pred.mat[, 1] <- predict(lm1)
pred.mat[, 2] <- predict(lm2)
pred.mat[, 3] <- predict(lm3)
pred.mat[, 4] <- predict(lm4)
pred.mat[, 5] <- predict(lm5)
pred.mat[, 6] <- predict(lm6)
pred.mat[, 7] <- predict(lm7)
pred.mat[, 8] <- predict(lm8)
pred.mat[, 9] <- predict(lm9)
pred.mat[, 10] <- predict(lm10)
pred.mat[, 11] <- predict(lm11)
pred.mat[, 12] <- predict(lm12)
pred.mat[, 13] <- predict(lm13)
pred.mat[, 14] <- predict(lm14)
pred.mat[, 15] <- predict(lm15)
pred.mat[, 16] <- predict(lm16)
# 输出40个岛屿的平均预测值，即上述的 hat-bar(Y)
bird.pred <- pred.mat %*% summary(lm.ave)$summary$Weight
t(bird.pred)  #把矩阵换方向，给页面省点空间，跟分析无关
```

```
##       isl1  isl2  isl3  isl4  isl5 isl6  isl7 isl8 isl9 isl10 isl11 isl12
## [1,] 43.83 33.87 33.09 28.86 28.33 27.2 28.02 26.5 28.5 26.65 29.07 27.45
##      isl13 isl14 isl15 isl16 isl17 isl18 isl19 isl20 isl21 isl22 isl23
## [1,] 22.86 23.73 26.22 27.59 27.66 23.43 23.15 23.57 26.14 24.94 24.95
##      isl24 isl25 isl26 isl27 isl28 isl29 isl30 isl31 isl32 isl33 isl34
## [1,] 24.81 22.83 22.66 21.37 22.21 25.95  22.7  25.9 23.78 23.28 25.64
##      isl35 isl36 isl37 isl38 isl39 isl40
## [1,] 26.37 24.06 22.33 23.14 23.75 24.61
```


还有一点是非条件方差估计，这个，有点麻烦，等以后再说。计算方法其实跟上述的 $\hat{\bar{Y}}$ 类似。

#### 实战演练二: 千岛湖墓群的决定因素

这个分析就跟上述方法相似了，按部就班：


```r
tiltomb <- read.table("tiltomb.txt", h = T)  #读取墓的虚拟数据 'tiltomb.txt'
cor.sig(tiltomb[, -1])
```

```
##               area    plants  habitats        SI      elev    convex
## area          1***  0.798***  0.623***  0.857***  0.726***  0.041   
## plants    0.798***      1***  0.542***  0.697***  0.666*** -0.019   
## habitats  0.623***  0.542***      1***  0.827***  0.924***  0.394*  
## SI        0.857***  0.697***  0.827***      1***  0.888***  0.237   
## elev      0.726***  0.666***  0.924***  0.888***      1***  0.307   
## convex    0.041    -0.019     0.394*    0.237     0.307         1***
## slope     0.248     0.394*    0.311     0.247     0.322*    0.264   
## aspect   -0.114    -0.031     0.226     0.069     0.278     0.075   
## Al        0.088     0.204     0.308     0.223     0.326*     0.06   
## Si        0.055     0.184     0.173      0.14     0.243     0.081   
## sand     -0.207     0.021    -0.118     -0.22    -0.191    -0.311   
## pH       -0.194    -0.326*   -0.247     -0.17    -0.228     0.018   
##              slope    aspect        Al        Si      sand        pH
## area      0.248    -0.114     0.088     0.055    -0.207    -0.194   
## plants    0.394*   -0.031     0.204     0.184     0.021    -0.326*  
## habitats  0.311     0.226     0.308     0.173    -0.118    -0.247   
## SI        0.247     0.069     0.223      0.14     -0.22     -0.17   
## elev      0.322*    0.278     0.326*    0.243    -0.191    -0.228   
## convex    0.264     0.075      0.06     0.081    -0.311     0.018   
## slope         1*** -0.093     0.412**   0.334*    0.111     -0.53***
## aspect   -0.093         1***  0.075     0.101    -0.086     0.198   
## Al        0.412**   0.075         1***  0.887***  0.615*** -0.756***
## Si        0.334*    0.101     0.887***      1***  0.504*** -0.646***
## sand      0.111    -0.086     0.615***  0.504***      1*** -0.598***
## pH        -0.53***  0.198    -0.756*** -0.646*** -0.598***      1***
```


结果发现面积、形状指数和海拔显著相关。考虑岛实际因素，岛屿面积或者说千岛湖以前的山头大小估计不会是墓葬考虑的因素，而这个山头圆不圆，这关乎风水的事，应该是主要因素，所以剔除面积和海拔。再看发现形状指数跟沙土也有正相关，可是考虑沙土多少是决定建不建墓的关键因素，予以保留，何况不是非常强烈的正相关(coef. = 0.373)。再看发现铝、硅和坡度有相关，可以确信铝和硅，其中之一是冗余的，因为白膏泥富含铝和硅。白膏泥相对铝含量较多，此处选择去除硅，以及另外的坡度。pH跟沙土相关，看来得把pH去除，估计过了上千年，墓葬中的有机质早化成泥土了。

再看看选取参数后的结果，


```r
cor.sig(tiltomb[, c("plants", "habitats", "SI", "convex", "aspect", "Al", "sand")])
```

```
##             plants  habitats        SI    convex    aspect        Al
## plants        1***  0.542***  0.697*** -0.019    -0.031     0.204   
## habitats  0.542***      1***  0.827***  0.394*    0.226     0.308   
## SI        0.697***  0.827***      1***  0.237     0.069     0.223   
## convex   -0.019     0.394*    0.237         1***  0.075      0.06   
## aspect   -0.031     0.226     0.069     0.075         1***  0.075   
## Al        0.204     0.308     0.223      0.06     0.075         1***
## sand      0.021    -0.118     -0.22    -0.311    -0.086     0.615***
##               sand
## plants    0.021   
## habitats -0.118   
## SI        -0.22   
## convex   -0.311   
## aspect   -0.086   
## Al        0.615***
## sand          1***
```


后续步骤跟演练一类似，不同的是，此处的应变量为二元结构，即presence-absence数据，得用广义线性模型中的逻辑斯帝回归(logistic regression)。其他注解省略，直接上程序，


```r
global.model.tomb <- glm(tomb ~ plants + habitats + SI + convex + aspect + Al + 
    sand, family = binomial("logit"), data = tiltomb)
tomb.model <- glmulti(global.model.tomb, level = 1, crit = "aicc")
```

```
## Initialization...
## TASK: Exhaustive screening of candidate set.
## Fitting...
## 
## After 50 models:
## Best model: tomb~1+habitats
## Crit= 55.4946426318003
## Mean crit= 61.2928677656059
```

![plot of chunk unnamed-chunk-14](https://raw.github.com/sixf/TIL-model-selection/master/figure/unnamed-chunk-141.png) 

```
## 
## After 100 models:
## Best model: tomb~1+habitats
## Crit= 55.4946426318003
## Mean crit= 62.1673748202582
```

![plot of chunk unnamed-chunk-14](https://raw.github.com/sixf/TIL-model-selection/master/figure/unnamed-chunk-142.png) 

```
## 
## After 150 models:
## Best model: tomb~1+habitats
## Crit= 55.4946426318003
## Mean crit= 61.961797879279
```

![plot of chunk unnamed-chunk-14](https://raw.github.com/sixf/TIL-model-selection/master/figure/unnamed-chunk-143.png) 

```
## Completed.
```

```r
summary(tomb.model)
```

```
## $name
## [1] "glmulti.analysis"
## 
## $method
## [1] "h"
## 
## $fitting
## [1] "glm"
## 
## $crit
## [1] "aicc"
## 
## $level
## [1] 1
## 
## $marginality
## [1] FALSE
## 
## $confsetsize
## [1] 100
## 
## $bestic
## [1] 55.49
## 
## $icvalues
##   [1] 55.49 57.02 57.37 57.54 57.86 57.88 57.92 57.98 58.33 59.11 59.19
##  [12] 59.39 59.43 59.51 59.61 59.84 59.96 59.97 59.98 60.05 60.07 60.12
##  [23] 60.17 60.22 60.31 60.39 60.39 60.45 60.50 60.75 60.82 60.89 61.22
##  [34] 61.43 61.57 61.59 61.68 61.74 61.79 61.80 61.83 61.87 61.87 61.89
##  [45] 62.01 62.12 62.13 62.15 62.17 62.39 62.44 62.57 62.59 62.60 62.66
##  [56] 62.67 62.70 62.72 62.73 62.75 62.75 62.77 62.78 62.79 62.82 62.83
##  [67] 62.87 62.95 63.01 63.08 63.09 63.41 63.53 63.54 63.66 63.73 63.81
##  [78] 63.91 64.05 64.14 64.20 64.39 64.41 64.45 64.47 64.52 64.57 64.59
##  [89] 64.60 64.61 64.62 64.68 64.70 64.75 64.77 64.78 64.78 64.83 64.87
## [100] 64.92
## 
## $bestmodel
## [1] "tomb ~ 1 + habitats"
## 
## $modelweights
##   [1] 0.128895 0.060215 0.050588 0.046452 0.039523 0.039070 0.038387
##   [8] 0.037162 0.031300 0.021153 0.020362 0.018351 0.018034 0.017282
##  [15] 0.016432 0.014668 0.013839 0.013729 0.013665 0.013229 0.013062
##  [22] 0.012760 0.012424 0.012150 0.011631 0.011135 0.011126 0.010795
##  [29] 0.010573 0.009297 0.008987 0.008661 0.007364 0.006612 0.006189
##  [36] 0.006106 0.005841 0.005679 0.005542 0.005503 0.005417 0.005326
##  [43] 0.005319 0.005273 0.004959 0.004704 0.004660 0.004631 0.004590
##  [50] 0.004106 0.004004 0.003754 0.003715 0.003699 0.003581 0.003571
##  [57] 0.003510 0.003485 0.003459 0.003434 0.003418 0.003393 0.003378
##  [64] 0.003356 0.003311 0.003295 0.003230 0.003100 0.003011 0.002909
##  [71] 0.002890 0.002458 0.002319 0.002313 0.002168 0.002098 0.002018
##  [78] 0.001918 0.001790 0.001706 0.001663 0.001510 0.001494 0.001468
##  [85] 0.001450 0.001413 0.001381 0.001368 0.001358 0.001354 0.001343
##  [92] 0.001308 0.001292 0.001261 0.001246 0.001244 0.001240 0.001211
##  [99] 0.001190 0.001156
## 
## $includeobjects
## [1] TRUE
```


结果一看，最优模型只包括生境参数，看来理论想像的数据也不错嘛，虽然烦人的ΔAICc依旧小于2，此处就不再进行模型平均了，因为 2^7=128 个可能模型，那个循环程序还没写好，所以就此为止。

## 结果

千岛湖鸟类多样性主要取决于岛屿面积和生境多样性，而墓葬可能性取决于岛屿的生境多样性。

## 讨论

听说统计上有一个更牛的利器是[随机森林模型](http://blog.sciencenet.cn/blog-661364-615921.html)(random forest model)，可以无视参数是否独立，直接进入模型而且可以精确预测。哪天有兴趣琢磨琢磨。

PS: 以下是娱乐时间。

生境丰富的山头是墓葬的首选，所以，各位看官以后到千岛湖旅游，不要去什么猴岛蛇岛，选择生境种类最多的岛，才是王道！怎么算生境种类，建议看看[群落生态学](http://en.wikipedia.org/wiki/Community_(ecology))。

最后检验一下鸟类多样性跟墓葬出现的相关性分析：


```r
cor.test(tilbird[, 1], tiltomb[, 1])
```

```
## 
## 	Pearson's product-moment correlation
## 
## data:  tilbird[, 1] and tiltomb[, 1]
## t = 3.256, df = 38, p-value = 0.002378
## alternative hypothesis: true correlation is not equal to 0
## 95 percent confidence interval:
##  0.1821 0.6797
## sample estimates:
##    cor 
## 0.4671
```


结果是显著正相关(t = 3.2562, df = 38, p-value = 0.002378)。墓葬的出现，表示该岛风水还不错，所以最后证实本文的最初假设，即跟蜘蛛侠讨论时所做的预测：鸟类多样性与风水有显著的相关性。至于机理的讨论，还得依赖于路径分析(pathway analyses)，即是不是中间由于生境多样性搭了桥的原因？对于有关该科学问题的进一步分析，这不是本篇论文能够解决的。请听下回分解。

## 致谢

谢谢看官的一路捧场，浏览完这块又长又臭的博文。谢谢实验室提供的平台和提供的支助，给于了我想像的空间，以及岛屿的数据。有关墓葬的生境数据，来自[古田山大样地](http://blog.sciencenet.cn/blog-267448-463699.html)，我想像着搬到千岛湖了，在此致谢。分析方法部分参考于<a href="https://gist.github.com/sixf/9488518">此</a>。本文的源代码及数据可以点击[此处](https://github.com/sixf/TIL-model-selection/archive/master.zip)下载。看官就是reviewer(评审员)，若有任何reviews，请在留言处指出，谢谢！

## 参考文献

1.	Anderson, David R. (2008) *Model based inference in the life sciences: a primer on evidence*. New York: Springer.
Burnham, Kenneth P., and David R. Anderson. (2002) *Model selection and multimodel inference: a practical information-theoretic approach*. Springer.
2.	Symonds, Matthew RE, and Adnan Mouθalli. (2011) A brief guide to model selection, multimodel inference and model averaging in behavioural ecology using Akaike’s information criterion. *Behavioral Ecology and Sociobiology*, **65**: 13-21.
APA  
3.	Whittingham, Mark J., et al. (2006) Why do we still use stepwise modelling in ecology and behaviour?. *Journal of animal ecology*, **75**: 1182-1189.
