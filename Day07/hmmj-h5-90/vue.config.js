const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  publicPath: './',   //将所有引入资源的路径都改为相对路径（不太推荐），因为项目上线就应该是在服务器的根目录
  transpileDependencies: true,
  css: {
    loaderOptions: {
      less: {
        // 若 less-loader 版本小于 6.0，请移除 lessOptions 这一级，直接配置选项。
        lessOptions: {
          modifyVars: {
            // 直接覆盖变量
            blue : '#fa6d1d',
          },
        },
      },
    },
  },
})
