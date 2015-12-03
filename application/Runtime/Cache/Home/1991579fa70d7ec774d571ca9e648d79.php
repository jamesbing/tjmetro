<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>天津地铁车辆调度管理系统</title>
<link rel="stylesheet" type="text/css" href="Public/css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="loginpanelwrap">
  	
	<div class="loginheader">
    <div class="logintitle"><a href="#">天津地铁调度管理系统用户登录</a></div>
    </div>
<!--="<?php echo U('index/example');?>">  "<{U(User/updateHandle)}>"--> 
<form method="post" action="<?php echo U('Home/Login/login');?>">
    <div class="loginform">
        
        <div class="loginform_row">
        <label>用户名:</label>
        <input type="text" class="loginform_input" name="user_name" id="user_name"/>
        </div>
        <div class="loginform_row">
        <label>密码：</label>
        <input type="password" class="loginform_input" name="password" id="password" />
        </div>
        <div class="loginform_row">
        <input type="submit" class="loginform_submit" value="登录" />
        </div> 
        <div class="clear"></div>
    </div>
 </form>

</div>

    	
</body>
</html>