<?php
namespace Index\Controller;
use Think\Controller;
class mailController extends Controller{
	public function index(){
	 
$mailto='13178457010@163.com';  //收件人
$subject="开门,送Cookie饼干的来了！！"; //邮件主题
$body=date('时间：Y年m月d日   H:i:s');  //邮件内容
sendmailto($mailto,$subject,$body);
echo "finish".date('时间：Y年m月d日   H:i');
	
	}

}