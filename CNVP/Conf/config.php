<?php
$database = require 'sys.db.php';
$rbac =  require 'sys.rbac.php';
$config = array(
	'SHOW_PAGE_TRACE'=>true,
    'URL_MODEL'                 =>  2, // 如果你的环境不支持PATHINFO 请设置为3    
);
$r = array_merge($database,$rbac,$config);
return $r;
?>