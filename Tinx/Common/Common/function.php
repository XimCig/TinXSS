<?php
function sendmailto($mailto, $mailsub, $mailbd)
{
   require './Tinx/Common/Common/mail.php';
    //##########################################
    $smtpserver     = C("SMTP_SERVER"); //SMTP服务器
    $smtpserverport = C('SMTP_PORT'); //SMTP服务器端口
    $smtpusermail   = C("SMTP_EMAIL"); //SMTP服务器的用户邮箱
    $smtpemailto    = $mailto;     //送给谁
    $smtpuser       = C("SMTP_USER_MAIL"); //SMTP服务器的用户帐号
    $smtppass       = C("SMTP_PASS"); //SMTP服务器的用户密码
    $mailsubject    = $mailsub; //邮件主题
    $mailsubject    = "=?UTF-8?B?" . base64_encode($mailsubject) . "?="; //防止乱码
    $mailbody       = $mailbd; //邮件内容
    //$mailbody = "=?UTF-8?B?".base64_encode($mailbody)."?="; //防止乱码
    $mailtype       = "HTML"; //邮件格式（HTML/TXT）,TXT为文本邮件. 139邮箱的短信提醒要设置为HTML才正常
    ##########################################
    $smtp           = new smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass); //这里面的一个true是表示使用身份验证,否则不使用身份验证.
    $smtp->debug    = FALSE; //是否显示发送的调试信息
    $smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
     
}

function dwz($url){
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"http://dwz.cn/create.php");
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$data=array('url'=>$url);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
$strRes=curl_exec($ch);
curl_close($ch);
$arrResponse=json_decode($strRes,true);
if($arrResponse['status']==0)
{
/**错误处理*/
echo iconv('UTF-8','GBK',$arrResponse['err_msg'])."\n";
}
/** tinyurl */
return $arrResponse['tinyurl']."\n";


}


function ti($time){
return date("Y年m月d日--H:i",$time);

}