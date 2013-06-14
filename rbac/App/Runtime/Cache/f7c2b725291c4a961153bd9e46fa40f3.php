<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>『ThinkPHP管理平台』By ThinkPHP <?php echo (THINK_VERSION); ?></title>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/blue.css" />
<script type="text/javascript" src="__PUBLIC__/Js/Base.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/prototype.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/mootools.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Think/ThinkAjax.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/Form/CheckForm.js"></script>
<script type="text/javascript" src="__PUBLIC__/Js/common.js"></script>
<script language="JavaScript">
<!--
//指定当前组模块URL地址 
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
//-->
</script>
</head>

<body>

<div id="main" class="main" >
<script language="JavaScript">
<!--
function selectGroup(){
 var result= PopModalWindow('__URL__/select/pid/0',268,360);
 if(typeof(result) == "undefined") return;
	$('groupName').value=result[0][0];
	$('pid').value=result[0][1];
}

//-->
</script>
<div class="content">
<div class="title">新增组 [ <a href="__URL__">返回列表</a> ]</div>
<div id="result" class="result none"></div>
<form method=post id="form1" >
<table cellpadding=3 cellspacing=3 >
<tr>
	<td class="tRight" >组名：</td>
	<td class="tLeft" ><input type="text" class="medium bLeftRequire"  check='^\S+$' warning="组名不能为空,且不能含有空格" name="name"></td>
</tr>
<tr>
	<td class="tRight">组状态：</td>
	<td class="tLeft"><select class="small bLeft"  name="status">
	<option value="1">启用</option>
	<option value="0">禁用</option>
	</select></td>
</tr>
<tr>
	<td class="tRight tTop">描 述：</td>
	<td class="tLeft"><TEXTAREA class="large bLeft" name="remark"  ROWS="5" COLS="57"></TEXTAREA></td>
</tr>
<tr>
	<td ></td>
	<td class="center"><div style="width:85%;margin:5px">
	<input type="hidden" name="ajax" value="1">
	<div class="impBtn fLeft"><input type="button" value="保存" onclick="sendForm('form1','__URL__/insert/','tips')" class="save imgButton"></div>
	<div class="impBtn fRig"><input type="reset" class="reset imgButton" value="清空" ></div>
	</div></td>
</tr>
</table>
</form>
</div>
</div>