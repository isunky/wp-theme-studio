# Sunky Studio WordPress 主题与插件

为 `sunky.net` 定制的 WordPress 主题和内容插件。前台导航保留「作品」和「文章」；首页列出已发布作品，每个作品都有独立详情页，可维护版本、亮点、功能、下载方式和版本记录。

## 目录

- `wp-content/themes/sunky-studio/`：主题模板、响应式样式和作品插画。
- `wp-content/plugins/sunky-content/`：作品、版本记录内容类型及后台编辑字段。

仓库保留原有 Apache-2.0 `LICENSE`。

## 环境要求

- WordPress 6.6 或更新版本
- PHP 8.0 或更新版本

## 安装

1. 将 `wp-content/themes/sunky-studio/` 复制到网站的 `wp-content/themes/`。
2. 将 `wp-content/plugins/sunky-content/` 复制到 `wp-content/plugins/`。
3. 在 WordPress 后台先启用 **Sunky Content** 插件，再启用 **Sunky Studio** 主题。
4. 新建「首页」和「文章」两个页面，并将「文章」页固定链接设为 `articles`。
5. 在 **设置 → 阅读** 里选择静态首页，将两个页面分别设为首页和文章页；然后在 **设置 → 固定链接** 保存一次以刷新路由。

主题和插件也可分别压缩成 ZIP 单独安装；压缩包根目录应直接包含 `sunky-studio/` 或 `sunky-content/` 文件夹。两者可以独立安装和启用。

## 内容维护

- 在 **作品 → 添加作品** 填写名称、一句话介绍、当前版本、作品亮点、主要功能、截图、源码链接和下载地址。
- 在 **版本记录** 选择所属作品，填写版本、平台、下载地址和更新说明。
- 在 **文章 → 写文章** 使用 WordPress 区块编辑器撰写和发布文章。
- Windows MSI、便携 ZIP 或 Edge 扩展安装包上传到主机（FTP 或主机文件管理器），然后在作品编辑页填写 HTTPS 下载地址。

版本字段未填写时，首页显示「版本 —」，不会猜测版本号。文章没有设置特色图片时，会使用主题内置的文档插画。
