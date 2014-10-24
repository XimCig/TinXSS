#TinXSS
TinXSS是一个开源Xss漏洞测试平台
```
TinXSS目录结构
|-- README.md	# 介绍文档
|-- LICENSE     # 开源许可证
|-- xss.sql     # 数据字段SQL文件
|-- xss.php     # 核心XSS文件,xss模块入口文件
|-- index.php   # 应用入口文件
|-- Conf.php    # 配置文件
|-- Include     # ThinkPHP框架
|-- Tinx        # 核心应用目录
|-- Temp        # 运行目录
|-- Theme       # 视图文件
```
###功能说明
-邮箱接受机制，自动采用Mail函数或者类
-ThinkPHP强大的模板类，缓存支持
-邀请码功能，开启邀请码在配置文件，
-额，没了
##第一个版本
我写的第一个版本，Bug肯定，如果有建议的话Email ：252560815@qq.com
##配置说明
```
1：配置数据库-conf.php
2：导入Sql文件到数据库
3：修改下邮箱的配置，那是我的邮箱%>_<%
4：配置也就那几项，看着修改吧
5：注意别放在子目录，要根目录！
```
###介绍已完
作者Email：252560815@qq.com
