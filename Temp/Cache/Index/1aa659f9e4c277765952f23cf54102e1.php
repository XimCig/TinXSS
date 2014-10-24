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
<title>XSS_Login</title>
<meta name="description" content="">
<meta name="keywords" content="">
</head> 
<body>
  	
  	<style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>TinXss</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="col-lg-6 col-md-8 col-sm-centered">
    <h3>登录</h3>
    <hr>
    <form method="post" class="am-form" action="<?php echo U('Login/Login');?>">
      <label for="email">邮箱:</label>
      <input type="email" name="email" id="email" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="pwd" id="pwd" value="">
   
      <br />
      <div class="am-cf">
       <!--  <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
     <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fr">
      </div>
    </form>
    <hr>
    <p>© 2014 TinXss, Inc. Licensed under MIT license.</p>
  </div>
</div>
</body>
  	
<script src="/Theme/default/Public/assets/js/zepto.min.js?1.1.4"></script>
<script src="/Theme/default/Public/assets/js/amazeui.js"></script>

</body>
</html>