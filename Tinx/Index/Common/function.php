<?php
function check_verify($code, $id = ''){
$verify = new \Think\Verify();
return $verify->check($code, $id);
}