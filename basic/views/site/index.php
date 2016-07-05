<!doctype html>
<html>
<head>
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="apple-mobile-web-app-capable" content="yes" />

<link rel="stylesheet" type="text/css" href="<?php echo CSS_URL;?>global.css" />

<script src="<?php echo JS_URL;?>jquery-1.4.2.min.js"></script>

<script type="text/javascript" src="<?php echo JS_URL;?>main.js"></script>
</head>
<body id="backfff">
    <header id="title">
	  <div class="back" onclick="javascript:history.back(-1);">
      </div>
    登录
    </header>
    <section id="login">
        <div class="xhx">
            <span>账号：</span>
            <input type="text" id="txtuser" name="txtuser" placeholder="请输入用户名">
        </div>
        <div>
            <span>密码：</span>
            <input id="txtpwd" name="txtpwd" type="password" placeholder="请输入密码">
        </div>
        
        <input  type="hidden" name="openid" value="" />
        <a id="asubmit" class="btnLogin">登录</a>
        <a href="javascript:;"   class="btnWjmm">忘记密码？</a>
        <a href="/index.php?r=site/test"   class="btnRegister">注册</a>
    </section>  
    <div class="disanf">
        	<p><span></span><b>第三方账号登陆</b><span></span></p>
        	<div class="clear"></div>
        	<div class="disanf_img">
	        	<a href="{:U('Home/Index/auth')}"><img class="weixin" src="<?php echo IMG_URL;?>weixin.png" alt=""></a>
	        	<a href="#"><img class="qq" src="<?php echo IMG_URL;?>qq.png" alt=""></a>
        	</div>
     </div>
     <footer id="dh">
         <a href="{:U('Home/Message/message_list')}"><img class="info" src="<?php echo IMG_URL;?>info_01.png" alt=""></a>
         <a href="{:U('Home/Task/index')}"><img class="task" src="<?php echo IMG_URL;?>task_01.png" alt=""></a>
         <a href="{:U('Home/Mine/index')}"><img class="my" src="<?php echo IMG_URL;?>my_02.png" alt=""></a>
     </footer>
</body>
<script>
     /*登录功能*/
	 $("#asubmit").click(function(){
         //alert($("#txtpwd").val());return false;
		 $.post('/Home/User/login',{
		 	'nick' : $("#txtuser").val(),
		 	'psd'  : $("#txtpwd").val(),
		 },function(data){
		 	//console.log(data);return false;
		 	if(data === '0')
             {
             	//console.log('登录帐号或者密码输入错误');
	            $("#asubmit").html('<font color="red">登录帐号或者密码输入错误</font>');
	            setTimeout(function(){
	                $("#asubmit").html('登录');
	            },1500);
             }else{
             	window.location.href='/Home/Message/message_list';
             };
		 });
	 })
    $(".qq").click(function(){
        alert('程序猿在加紧修复中,可使用微信快速登录')
    })
</script>
</html>
