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
<title>Reg_Xss</title>
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
<script>

function biaodan(){
	<?php if($regopen != 0): ?>if($v("regcode")==""){
	alert("抱歉,不能为空");	
	return false;
}<?php endif; ?>
if($v("email")==""){
	alert("抱歉,不能为空");	
	return false;
}
if($v("pwd")==""){
	alert("抱歉,不能为空");	
	return false;
}
if($v("pwd2")==""){
	alert("抱歉,不能为空");	
	return false;
}
if($v("yzm")==""){
	alert("抱歉,不能为空");	
	return false;
}
if($v("pwd")!==$v("pwd2")){
	alert("抱歉,两次密码不一致");
	}
return true;
} 		

	</script>
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
    <h3>注册</h3>
    <hr>
    <form method="post" class="am-form" onsubmit="return biaodan()" action="<?php echo U('Index/Reg/add');?>">
    	 <label for="regcode">邀请码:</label>
      <input type="text" name="regcode" id="regcode" value="" <?php if($regopen == 0): ?>disabled<?php endif; ?>>
      <br />
      <label for="email">邮箱:</label>
      <input type="email" name="email" id="email" value="" onblur="zm();">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="pwd" id="pwd" value="">
   
      <br />
	   <label for="pwd2">密码:</label>
      <input type="password" name="pwd2" id="pwd2" value="">
   
      <br />
	   <label for="yzm">验证码:</label>
      <input type="text" name="yzm" id="yzm" value="">
   
      <br />
      <div class="am-cf">
       <!--  <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
    <img title="点击刷新" src="<?php echo U("Index/Verify/indexver");?>" alt="验证码" class="am-fl am-img-bdrs" onclick="this.src='<?php echo U("Index/Verify/indexver");?>?'+new Date().getTime()";/>
	<input type="submit" name="" value="注册" class="am-btn am-btn-lg am-btn-danger am-btn-sm am-fr">
      </div>
    </form>
    
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">账号已经注册！
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
    </div>
  </div>
</div>
    <hr>
    <p>© 2014 TinXss, Inc. Licensed under MIT license.</p>
  </div>
</div>
<script>
  function zm(){
  var zmail=document.getElementById('email');
  var	murl=new _ajax("<?php echo U("Index/Reg/zemail");?>?Zmail="+zmail.value+"");
  	murl._get();
  	murl._ok(zz);
  	}
  	function zz(re){
  		if(re !== ""){
  	$('#doc-modal-1').modal('open');}
  		}

</script>
</body>

<script src="/Theme/default/Public/assets/js/zepto.min.js?1.1.4"></script>
<script src="/Theme/default/Public/assets/js/amazeui.js"></script>

</body>
</html>