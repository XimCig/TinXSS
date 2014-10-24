<?php
namespace Index\Controller;
use Think\Controller;
class RegcodeController extends Controller{


public function index(){
if(!isset($_GET['code']))$this->error("Error");
if($_GET['code']!= C('REGCODE'))$this->error('Error');

$code=base64_encode(C('REGCODE'));
$int=C('REG_CODE_INT');
$codearr=array();
$qu=M("regcode");

$qq=$qu->where('regpass="'.C('REGCODE').'"')->select();

if(is_array($qq)){
	foreach ($qq as $arr){
	echo $arr['regcode']."<br>";	
}
die();
}


for($i=0;$i<$int;$i++){
$codearr[$i]=md5($code.$i);

}
foreach ($codearr as $arr){
	echo $arr."<br>";	
}

$codea['regcode']=$codearr;


for($i=0;$i<$int;$i++){
$qu->regpass=C('REGCODE');
$qu->regcode=$codearr[$i];
$qu->add();
}



}


}