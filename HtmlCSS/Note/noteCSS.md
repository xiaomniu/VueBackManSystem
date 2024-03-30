# 为网页添加样式
## 术语解释
```html
<style>
    h1{
        color: red;
        background-color: lightblue;
        text-align: center;
    }
</style>
```
CSS规则 = 选择器 + 声明块
### 选择器
选择器：选中元素
1. ID选择器：选中的是对应 id 值的元素
2. 元素选择器
3. 类选择器
### 声明块
出现在大括号中
声明块中包含很多声明（属性），每个声明（属性）表达了某一方面的样式

## CSS代码书写位置
1. 内部样式表
书写在 style 元素中
2. 内联样式表
直接书写在元素的 style 属性中
3. 外部样式表
将样式书写到独立的css文件中
```html
<link rel="stylesheet" href="./css/index.css">
```
1) 外部样式可以解决多页面样式重复的问题
2) 有利于浏览器缓存，从而提高页面响应速度
3) 有利于代码分离（HTML和CSS），更容易阅读和维护

# 创建的样式声明
## color
元素内部的文字颜色
**预设值**：定义好的颜色单词
**三原色**：色值，红绿蓝
```html
<style>
{
    color:rgb(0, 255, 0);
    color:#ff00ff;
}
</style>
```
## backgroud-color
元素背景颜色
## font-size
元素内部文字的尺寸大小
1）px：像素，文字的高度占多少像素
2）em：相对单位，相对于父元素的字体大小
每个元素必须有字体大小，如果没有声明，则直接使用父元素的字体大小。
如果没有父元素，则使用基准字号（浏览器设置里的字体大小）
> user agent，UA，用户代理（浏览器）
## font-weight
文字粗细程度，可以取值 数字，可以取值 预设值（normal、bord）
> strong元素，默认加粗（strong重要的、不能忽视的内容；em强调的内容）
## font-family
文字类型：微软雅黑、宋体、Arail、sans-serif(非衬线字体类型的集合)
必须用户计算中存在的字体才有效
可以多个联合使用，第一个没有就用下一个：font-family: consolas,宋体,微软雅黑,Arial,sans-serif;
## font-style
字体样式，字体倾斜等样式 italic 等
> i、em 元素，默认样式是 倾斜字体；实际使用中，通常用它表示一个图标
## text-decoration
文本修饰，给文本加条线
中间加条线 line-through，下面加条线 underline 等
> a元素：超链接
> del元素：错误的内容
> s元素：过期的内容
## text-indent
首行文本缩进
text-indent:2em; 缩进2个字符
## line-height
每行文本的高度，该值越大，每行文本的距离越大
设置行高为容器的高度，可以让每行文本垂直居中
行高可以设置为纯数字，表示相对于当前元素的字体大小
## width
元素的宽度
## height
元素的高度
## letter-space
文字的间隙
## text-align
元素内部文字的水平排列方式


# 选择器
## 简单选择器
1. ID选择器
2. 元素选择器
3. 类选择器
4. 通配符选择器
`*`号，选中所有的元素
5. 属性选择器
根据属性名 和 属性值 选择元素
> [用法链接](https://developer.mozilla.org/zh-CN/docs/Web/CSS/Attribute_selectors)
> `https://developer.mozilla.org/zh-CN/docs/Web/CSS/Attribute_selectors`
```css
{
    [href]{
        color:red;
    }
    [href="https://www.sina.com"]{
        color:green;
    }
}
```
6. 伪类选择器（后面都是加个`:`号）
选中某些元素的某种状态（按照以下顺序编写状态样式代码）
1）link：超链接未访问时的状态
2）visited: 超链接访问过后的状态
3）hover：鼠标移动到上方的状态
4）active：激活状态（鼠标按下）
```css
/* 选中鼠标悬停时的 a元素 */
a:hover{
    color: red;
}
/* 鼠标按下时的 a元素 */
a:hover{
    color: #008c8c;
}
```
7. 伪元素选择器
生成并选中某个元素内部的第一个子元素或者最后一个子元素
before
after
```html
<style>
    span::before{
        content: "《";
        color: red;
    }
    span::after{
        content: "》";
        color: blue;
    }
</style>
<p>
    <span>功夫</span>这个电影挺好看
</p>
```
## 选择器的组合
1. 后代元素 —— 空格
```html
<style>
    .red li{
        color: chocolate;
    }
    .red .haha{
        color: green;
    }
</style>
<div class="red">
    <p>Lorem ipsum dolor sit.</p>
    <ul>
        <!-- (li>lorem4)*4 -->
        <li>Lorem ipsum dolor sit.</li>
        <li>Sed harum impedit earum!</li>
        <li class="haha">Dolor hic ratione ea?</li>
        <li>A sapiente qui dolorem.</li>
    </ul>
</div>
```
2. 子元素 —— >
```html
<style>
    .red>ul>.yiyi{
        color: rgb(169, 172, 19);
    }
</style>
<div class="red">
    <ul>
        <!-- (li>lorem4)*4 -->
        <li>Lorem ipsum dolor sit.</li>
        <li>Sed harum impedit earum!</li>
        <li class="haha">Dolor hic ratione ea?</li>
        <li>A sapiente qui dolorem.</li>
    </ul>
</div>
```
3. 相邻兄弟元素 —— +
相邻的后面一个兄弟元素
```html
<style>
    .haha+li{
        color: red;
    }
</style>
<div>
    <ul>
        <!-- (li>lorem4)*4 -->
        <li>Lorem ipsum dolor sit.</li>
        <li class="haha">Sed harum impedit earum!</li>
        <li>Dolor hic ratione ea?</li>
        <li>A sapiente qui dolorem.</li>
    </ul>
</div>
```
4. 兄弟元素 —— ~
后面的所有兄弟元素
```html
<style>
    .haha~li{
        color: red;
    }
</style>
<div>
    <ul>
        <!-- (li>lorem4)*4 -->
        <li>Lorem ipsum dolor sit.</li>
        <li class="haha">Sed harum impedit earum!</li>
        <li>Dolor hic ratione ea?</li>
        <li>A sapiente qui dolorem.</li>
    </ul>
</div>
```
## 选择器的并列
多个选择器用`,`分隔
```html
<style>
    .haha+li, p{
        color: red;
    }
</style>
<ul>
    <li>Lorem ipsum dolor sit.</li>
    <li class="haha">Dolor hic ratione ea?</li>
    <li>Sed harum impedit earum!</li>
    <li>A sapiente qui dolorem.</li>
</ul>
<p>Lorem ipsum dolor sit.</p>
<p>Maxime iste sequi laboriosam?</p>
<p>Cumque assumenda vitae et.</p>
<p>Inventore accusamus itaque voluptates.</p>
```


# 层叠
声明冲突：同一个样式，多次应用到同一个元素
层叠：解决声明冲突的过程，浏览器自动处理（权重计算）
## 比较重要性
## 比较特殊性
## 比较源次性