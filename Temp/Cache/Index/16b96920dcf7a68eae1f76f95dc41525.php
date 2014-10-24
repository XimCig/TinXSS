<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>  
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Theme/default/Public/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="/Theme/default/Public/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/Theme/default/Public/assets/css/app.css">
  <script src="/Theme/default/Public/assets/js/app.js"></script>
<title>Tin_XSS</title>
<meta name="description" content="">
<meta name="keywords" content="">
</head> 
<style>
  .footer {
      background: #2d3e50;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
    }
</style>
<body>
<header class="am-topbar am-topbar-inverse">
  <h1 class="am-topbar-brand">
    <a href="/">TinxXSS</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>


<div class="am-topbar-right">
      <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm" onclick="window.location.href='<?php echo U("Index/index/logut");?>'">退出</button>
    </div>
    <div class="am-topbar-right">
      <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><?php echo ($hash['email']); ?></button>
    </div>
	  
  </div>
</header>	
<section class="am-panel am-panel-success">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">查看代码</h3>
  </header>
  <div class="am-panel-bd">
  <div class="am-g">
  <div class="col-lg-6 col-md-8 col-sm-centered">
  
<form method="post" class="am-form" onsubmit="return yz()" action="<?php echo U('Index/Index/code/?do=add');?>">
    	
      <label for="poject">项目名:<?php echo ($poject['name']); ?></label>
   

     <div class="am-form-group">
      <label for="doc-ta-1">调用代码:</label>
         <input type="text" name="name" id="name" value="<?php echo ($code['code1']); ?>">

  </div>
  <div class="am-form-group">
      <label for="doc-ta-1">百度短网址(坏了的):</label>
         <input type="text" name="name" id="name" value="<?php echo ($code['code2']); ?>">

  </div>
 	  <div class="am-form-group">
      <label for="doc-ta-1">代码</label>
      <textarea class="" rows="5" id="miaoshu"><?php echo ($Bigcode); ?></textarea>
    </div>
    </form>
  </div>
</section>



<footer class="footer">
  <div class="am-container">
    <p>2014 前端由<a href="http://www.yunshipei.com" target="_blank">AllMobilize, Inc.</a>支持  -核心由<a
        href="http://thinkphp.cn" target="_blank">ThinkPHP </a>引擎驱动. by the Cig</p>
  </div>
</footer>
<script src="/Theme/default/Public/assets/js/zepto.min.js?1.1.4"></script>
<script src="/Theme/default/Public/assets/js/amazeui.js"></script>

</body>
</html>