<?php
namespace Index\Controller;
use Think\Controller;
class RegController extends Controller{
	public function index(){
	
		$this->assign('regopen',C("REGCODE_OPEN"));
		
		$this->display();
	}
public function zemail(){
	if(!isset($_GET['Zmail'])){echo "Network Error!";die();}
	$zemail=I('Zmail');
	$email=M("user");
	$qu=$email->where('email="'.$zemail.'"')->select();
	if(is_array($qu)){
			echo "账号已经注册";
		}

}

public function add(){
	if(!IS_POST)$this->error("Error!!");
	if(C("REGCODE_OPEN")!="0"){
if(I('regcode')=='')$this->error("Error!!");}
	if(I('email')=='')$this->error("Error!!");
	if(I('pwd')=='')$this->error("Error!!");
	if(I('pwd2')=='')$this->error("Error!!");
	if(I('yzm')=='')$this->error("Error!!");
	if(I('pwd')!=I('pwd2'))$this->error("Error!!");
	if(!check_verify(I('yzm')))$this->error("验证码错误!!");
	$que=M("user");
	$qua=M('regcode');
if(C('REGCODE_OPEN')=="0"){}else{
	$qureg=$que->where('regcode="'.I('regcode').'"')->select();
	$qucode=$qua->where('regcode="'.I('regcode').'"')->select();
	if(is_array($qureg))$this->error("邀请码已经使用");
	if(!is_array($qucode))$this->error("邀请码错误或不正确");
}
$regarr=array(
    'email'	=>I('email'),
		'pass'		=>md5(I('pwd')),
		'regtime' =>time(),
		'regcode'=>I('regcode'),
		'hash' => substr(md5(I('pwd').time()),24),
);
$que->add($regarr);
if(is_object($que)){
		$this->success("注册成功",U("Index/index"));
	
	}else{
		$this->error("注册失败,联系管理员");
		
		}
}
}