<?php
namespace Index\Controller;
use Think\Controller;
class VerifyController extends Controller{
	public function indexver(){
	$config=array(
	"useCurve"=>false,
	"imageW"=>'180',
	'length'=>4,
	'useNoise'=>false,
	);
	    $Verify = new \Think\Verify($config);
    $Verify->entry();
}
}