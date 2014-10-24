<?php
namespace Index\Controller;
use Think\Controller;
class LoginController extends Controller {
			public function index(){
				
				$this->display();
			}	
	public function login(){
		if(!IS_POST)$this->error('Error!');
		$login=M('user');
$data=array(
	"email"=>I('email'),
	'pwd'=>md5(I('pwd')),
	);
	
	
  $sb=$login->where('email="'.$data['email'].'" and pass="'.$data['pwd'].'"')->select();
  if(is_array($sb)){
  		
  		session("hash",$sb[0][hash]);
  		session('login',1);
  		
  		$this->success("登陆成功",U("Index/index"));
  		
  		
  	}else{
  		$this->error("账号密码不正确");
  		}


		
	}
}