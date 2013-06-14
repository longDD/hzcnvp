<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css" />
<link rel="stylesheet" href="__PUBLIC__/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="__PUBLIC__/css/fullcalendar.css" />
<link rel="stylesheet" href="__PUBLIC__/css/matrix-style.css" />
<link rel="stylesheet" href="__PUBLIC__/css/matrix-media.css" />
<link rel="stylesheet" href="__PUBLIC__/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" href="__PUBLIC__/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">杭州捷点内部管理系统</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">欢迎登陆</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> 用户设置</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> 注销</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">设置</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">注销</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> 杭州捷点内部管理系统</a>
  <ul>
    <li class="active"><a href="<?php echo U('/Index');?>"><i class="icon icon-home"></i> <span>综合首页</span></a> </li>
    <li> <a href="<?php echo U('/Project');?>"><i class="icon icon-th"></i> <span>项目管理</span></a></li>
    <li> <a href="<?php echo U('/News');?>"><i class="icon icon-reorder"></i> <span>信息管理</span></a></li>
    <li> <a href="<?php echo U('/ooxx');?>"><i class="icon icon-file"></i> <span>维护管理</span></a> </li>  
    <li> <a href="<?php echo U('/User');?>"><i class="icon icon-user"></i> <span>用户管理</span></a> </li>
    <li> <a href="<?php echo U('/System');?>"><i class="icon icon-cog"></i> <span>系统配置</span></a> </li>
    <li class="content"><span>杭州捷点内部管理系统-Base版</span></li>
  </ul>
</div>
系统管理
	-菜单模块
	-功能列表
	-便签管理
	-操作记录
	-系统信息
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in/">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="__PUBLIC__/js/excanvas.min.js"></script> 
<script src="__PUBLIC__/js/jquery.min.js"></script> 
<script src="__PUBLIC__/js/jquery.ui.custom.js"></script> 
<script src="__PUBLIC__/js/bootstrap.min.js"></script> 
<script src="__PUBLIC__/js/jquery.flot.min.js"></script> 
<script src="__PUBLIC__/js/jquery.flot.resize.min.js"></script> 
<script src="__PUBLIC__/js/jquery.peity.min.js"></script> 
<script src="__PUBLIC__/js/fullcalendar.min.js"></script> 
<script src="__PUBLIC__/js/matrix.js"></script> 
<script src="__PUBLIC__/js/matrix.dashboard.js"></script> 
<script src="__PUBLIC__/js/jquery.gritter.min.js"></script> 
<script src="__PUBLIC__/js/matrix.interface.js"></script> 
<script src="__PUBLIC__/js/matrix.chat.js"></script> 
<script src="__PUBLIC__/js/jquery.validate.js"></script> 
<script src="__PUBLIC__/js/matrix.form_validation.js"></script> 
<script src="__PUBLIC__/js/jquery.wizard.js"></script> 
<script src="__PUBLIC__/js/jquery.uniform.js"></script> 
<script src="__PUBLIC__/js/select2.min.js"></script> 
<script src="__PUBLIC__/js/matrix.popover.js"></script> 
<script src="__PUBLIC__/js/jquery.dataTables.min.js"></script> 
<script src="__PUBLIC__/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>