import execjs
jstext="function hello(str){return str;}"
ctx=execjs.compile(jstext)    #编译js代码
a = ctx.call("hello", "hello world")
print(a)