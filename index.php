<?php
// +----------------------------------------------------------------------
// | 采用国内伟大的ThinkPHP框架
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | QQ：252560815   Blog：404sec.com
// +----------------------------------------------------------------------
// | Author: Cig <cig@404sec.com>
// +----------------------------------------------------------------------
//绑定Index模块
define('BIND_MODULE','Index');
//项目名称
define("APP_NAME",'Index');
//App目录
define("APP_PATH","./Tinx/");
//编译目录
define("RUNTIME_PATH","./Temp/");
//调试模式
define("APP_DEBUG",true);
//核心目录
define("THINK_PATH",'./Include/');
//引入核心
require(THINK_PATH.'ThinkPHP.php');