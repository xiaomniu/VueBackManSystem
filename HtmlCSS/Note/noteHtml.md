# HTML & CSS 概述
## 术语
1. w3c
万维网联盟: https://www.w3.org
MDN: https://developer.mozilla.org
2. HTML
w3c组织定义的语言标准
3. 浏览器
    3.1. shell：外壳
    3.2. core：内核（JS执行引擎、渲染引擎）
    IE: Trident
    FirFox: Gecko
    Chrome: Webkit / Blink
    Safari: WebKit
    Opera: Presto / Blink
## 版本 和 兼容性
HTML5：2014年
CSS3：目前还没制定完成
XHTML：可以认为是 HTML的种类其中的一个版本，完全符合XML的规范。
## 元素
整体：元素
元素 = 起始标记 + 结束标记 + 元素内容 + 元素属性
属性 = 属性名 + 属性值
属性的分类：
    - 局部属性：某些元素特有的属性
    - 全局属性：所有元素通用的属性
有些元素没有 结束标记：**空元素**
## 标准的文档结构
HTML：页面、HTML文档
```html
<!DOCTYPE html>
```
文档声明，告诉浏览器，当前文档使用的HTML标准是HTML5
不写文档声明，将导致浏览器进入怪异渲染模式。
```html
<html lang="cmn-hans">
    ...
</html>
```
根元素，一个页面最多只能有一个，并且该元素是所有其他元素的父元素或祖元素
HTML5版本中没有强制要求书写该元素
lang属性：language，全局属性，表示该元素内部使用的文字是使用哪种自然语言书写而成的。
```html
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
```
文档的元数据：附加信息。
charset：指定网页内容编码。
viewport：适配移动端界面size
http-equiv、content：如果 使用的是IE浏览器的话，建议使用的 edge内核

# 语义化
## 什么是语义化
1. 每个HTML元素都有具体的含义
a元素：超链接
p元素：段落
h1元素：一级标题
2. 所有元素与展示效果无关
元素展示到页面中的效果，应该由CSS决定。
因为浏览器带有默认的CSS样式，所以每个元素都有一些默认样式。

**重要：选择什么元素，取决于内容的含义，而不是显示出来的效果**
## 为什么需要语义化
1. 为了搜索引擎优化（SEO）
搜索引擎：百度、搜搜、Bing、Google
每隔一段时间，搜索引擎会从整个互联网中，抓取页面源代码。
2. 为了让浏览器理解网页
阅读模式、语音模式

# 文本元素
## h
标题：head
h1~h6：一级标题 ~ 六级标题
```html
<!-- h$*6{$级标题} -->
    <h1>1标题</h1>
    <h2>2标题</h2>
    <h3>3标题</h3>
    <h4>4标题</h4>
    <h5>5标题</h5>
    <h6>6标题</h6>
```
## p
段落：paragraphs
```html
<!-- p*3>lorem3 -->
    <p>Lorem, ipsum dolor.</p>
    <p>Quia, cupiditate ad?</p>
    <p>Laboriosam, nesciunt voluptatem?</p>
```
> 乱数假文，没有任何实际含义的文字 lorem
## span【无语义】
没有语义，仅用于设置样式
> 以前：某些元素在显示时会独占一行（块级元素）。而某些元素不会（行级元素）
> 块级元素、行级元素 至高出现在 4.01 标准中。
> 到了HTML5，已经弃用了。而使用的是：流内容、措辞内容
## pre
预格式化文本元素
空白折叠：在源代码中的连续空白字符（空格、换行、制表），在页面显示时，会被折叠为一个空格
例外：在pre元素中内容不会出现空白折叠
在pre元素内部出现的内容，会按照源代码格式显示到页面上。
该元素通常用于在网页上显示代码。

```html
    <code>
        <pre>
            var i = 2;
            if (i > 2) {
                console.log('abcdefg');
            }
        </pre>
    </code>
```
pre元素功能的本质：它有一个默认的 CSS 样式 **white-space: pre;**
> 显示代码时，通常外面包裹一个 code 元素，code 表示代码区域。

# HTML实体
## 实体字符
HTML Entity
实体符号通常用于在页面上显示一些特殊符号。
1. `&单词;`
2. `&#数字;`
- 小于 符号 <
`&lt;`
- 大于 符号 >
`&gt;`
- 空格 符号
`&nbsp;`
- 版权 符号
`&copy;`
- & 符号
`&amp;`

# a
超链接
## href 属性
hyper reference （引用）：表示跳转地址
1. 普通链接
跳转地址
2. 锚链接
跳转到某个锚点（跳转到某个页面的某个位置）
id属性：全局属性，表示元素在文档中的唯一编号
3. 功能性连接
点击后，触发某个功能
    - 执行JS代码，javascript:alert('hello world！！')
    - 发送邮件（要求计算机上按照有邮件发送软件:exchange），mailto:
    - 拨号（要求计算机上安装有拨号软件，或使用的是移动端访问），tel:123****3242
```html
    <a href="javascript:alert('hello world！！')">执行JS代码</a>
    <a href="mailto:2222@qq.com">mailto</a>
    <a href="tel:123****2342">tel</a>

    <!-- a[href="#chapter$"]{章节$}*6 -->
    <a href="#chapter1">章节1</a>
    <a href="#chapter2">章节2</a>
    <a href="#chapter3">章节3</a>
    <a href="#chapter4">章节4</a>
    <a href="#chapter5">章节5</a>
    <a href="#chapter6">章节6</a>

    <!-- ((h2[id="chapter$"]>{章节$})+p>lorem1000)*6 -->
    <h2 id="chapter1">章节1</h2>
    <p>Lorem ipsum dolor sit amet.</p>
    <h2 id="chapter2">章节2</h2>
    <p>Totam unde praesentium veritatis consequatur.</p>
    <h2 id="chapter3">章节3</h2>
    <p>Harum, cumque. Sunt, voluptatem numquam.</p>
    <h2 id="chapter4">章节4</h2>
    <p>Vero possimus tempore similique maiores!</p>
    <h2 id="chapter5">章节5</h2>
    <p>Aliquam tenetur corporis quibusdam nihil.</p>
    <h2 id="chapter6">章节6</h2>
    <p>Voluptatibus est consectetur quasi odit.</p>
    
    <a href="#">回到顶部</a>
```
## target 属性
表示跳转窗口的位置
- _self：在当前页面窗口中打开，默认值
- _blank：在新窗口中打开

## title 属性
鼠标移动到该元素上时，的提示文字


# 路径的写法
## 站内资源 和 站外资源
站内资源：当前网站的资源
站外资源：非当前网站的资源
## 绝对路径 和 相对路径
站外资源：绝对路径
站内资源：相对路径、绝对路径

1. 绝对路径（url地址）
协议名：http、https、file
主机名：域名、IP地址
端口号：如果协议是 http，默认端口 80；如果协议是 https，默认端口号 443；
```
协议名://主机名:端口号/路径
scheme://host:port/path
```
当 跳转目标和当前页面 的协议相同时，可以省略协议

2. 相对路径
以 `./` 开头，表示当前资源所在的目录。
以 `../` 开头，表示当前资源所在的目录 的 上一级目录。


# 图片元素
## img 元素
image缩写，空元素
src属性：source
alt属性：当图片资源失效时，将使用该属性的文字替代图片

## 和 a元素 联用
```html
    <figure>
    <a target="_blank" href="https://ys.mihoyo.com/main/">
        <img usemap="#solarMap" src="../yuanshen.jpg" alt="原神背景图">
    </a>
    <figcaption>
        <h2>原神官网</h2>
    </figcaption>
    <p>
        这是原神官网背景图片
    </p>
    <map name="solarMap">
        <area shape="circle" coords="120,930,20" href="https://ys.mihoyo.com/cloud/?utm_source=default#/" alt=""
            target="_blank">

        <area shape="rect" coords="20,570,60,590" href="https://ys.mihoyo.com/cloud/?utm_source=default#/"
            alt="" target="_blank">

        <area shape="poly" coords="20,570, 60,570, 60,590, 30,590, 10,590"
            href="https://ys.mihoyo.com/cloud/?utm_source=default#/" alt="" target="_blank">
    </map>
</figure>
```

## 和 map元素 联用
map：地图
map的子元素：area

## 和figure元素 联用
指代、定义，通常用于把 图片、图片标题、描述信息 包裹起来

figure子元素：figcaption
表示指代的东西的标题


# 多媒体元素
video 视频
audio 音频

## video 元素
controls：控制控件的显示，取值只能为 controls
某些属性，只有两种状态：1. 不写  2. 取值为属性名，这种属性叫做布尔属性
布尔属性，在 HTML5中，可以不用书写属性值
autoplay：布尔属性，自动播放
muted：布尔属性，静音播放
loop：布尔属性，循环播放
```html
    <video controls autoplay muted loop src="../yuanshen.mp4" style="width: 700px;"></video>
```
## audio
用法 和 video元素 完全一致

## 兼容性
1. 旧版本的浏览器不支持这两个元素
    使用 flash插件可以实现
2. 不同的浏览器支持的音频格式可能不一致
    mp4、webm
```html
    <video controls autoplay muted loop style="width: 700px;">
        <source src="../yuanshen.mp4">
        <source src="../yuanshen.webm">
        <p>
            对不起，您的浏览器不支持video元素，请点击这里下载最新版本浏览器
        </p>
    </video>
```

# 列表元素
## 有序列表
ol：ordered list
li：list item（列表项）
ol是父元素，li是子元素，他们联合起来使用。ol 表示整个列表，li 表示其中的某一项
ol元素的子元素，只能是 li元素
ol 的 type 属性
- 'a' 表示小写字母编码
- 'A' 表示大写字母编码
- 'i' 表示小写罗马数字编码
- 'I' 表示大写罗马数字编码
- '1' 表示数字编码（默认值）
> 除非在封闭的 `<li> `元素中使用不同的 type 属性，否则类型集将用于整个列表。
> type属性在 HTML4 中启用，但在 HTML5 中被重新引入。除非序号很重要，否则使用 CSS list-style-type 属性代替。

ol 的 reversed 属性
- 将序号倒序显示
```html
    <ol type="a" reversed>
        <li>步骤一</li>
        <li>步骤二</li>
        <li>步骤三</li>
    </ol>
```
## 无序列表
ul：unordered list
用法和 ol 一致
无需列表 通常用于 制作菜单 或 新闻列表。

## 定义列表
通常用于一些术语的定义
dl：definition list
dt：definition title
dd：definition description
```html
    <dl>
        <dt>HTML</dt>
        <dd>HTML的说明</dd>
        <dt>元素</dt>
        <dd>元素的说明</dd>
    </dl>
```

# 容器元素
容器元素：该元素代表一个块区域，内部用于放置其他元素
## div 元素
没有语义
## 语义化的元素
#### header
通常用于表示页头，也可以表示文章的头部
#### footer
通常用于表示页脚，也可以表示文章的尾部
#### article
通常用于表示整篇文章
#### section
通常用于表示文章的章节
#### aside
通常用于表示侧边栏（附加信息）

# 元素包含关系
以前：块级元素可以包含行级元素，行级元素不能包含块级元素，a元素除外
现在HTML5中，元素的包含关系由元素的内容决定。
例如，查看`h1`元素中是否可以包含`p`元素（MDN里面查）
总结：
1. 容器元素中可以包含任何元素
2. a 元素中几乎可以包含任何元素
3. 某些元素有固定的子元素（如：ul>li，ol>li，dl>dt+dd）
4. 标题元素 和 段落元素 不能相互嵌套，并且不能包含容器元素