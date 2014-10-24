<?php
$_con=array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'       =>    'Index',  // 默认模块
);
return array_merge(include("./conf.php"),$_con);