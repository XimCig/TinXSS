<?php
$_con= array(
'MODULE_ALLOW_LIST'    =>    array('Index','Xss','User'),
'DEFAULT_MODULE'       =>    'Index',  // 默认模块
);
return array_merge(include("./conf.php"),$_con);