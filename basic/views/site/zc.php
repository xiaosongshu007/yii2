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
    注册
    </header>
    <section id="chuce">
        <div class="xhx">
            <span>账号：</span>
            <input type="text" id="txtzh" name="txtzh" placeholder=""/>
        </div>
        <div class="xhx">
            <span>密码：</span>
            <input type="password" id="txtpsw" name="txtpsw" placeholder="">
        </div>
        <div class="xhx">
            <span>确认密码：</span>
            <input type="password" id="txtpsw2" name="txtpsw2" placeholder="">
        </div>
        <div class="youxiang">
            <span>邮箱：</span>
            <input type="text" id="txtyx" name="txtyx" placeholder="">
        </div>
        
         <input  type="hidden" name="openid" value="" />
        <a id="zc" class="btnLogin">注册</a>
        <a href="{:U('Home/Index/index')}"class="btnRegister">登录</a>
        
    </section>  
    <footer id="dh">
        <a href="{:U('Home/Message/message_list')}"><img class="info" src="<?php echo IMG_URL;?>info_01.png" alt=""></a>
        <a href="{:U('Home/Task/index')}"><img class="task" src="<?php echo IMG_URL;?>task_01.png" alt=""></a>
        <a href="{:U('Home/Mine/index')}"><img class="my" src="<?php echo IMG_URL;?>my_02.png" alt=""></a>
     </footer>
</body>
<script>
     /*注册功能*/

     //点击注册按钮响应事件
     $("#zc").click(function(){
		 //alert('hello');return false;
         var pwd=$("#txtpsw").val();
         var pwd2=$("#txtpsw2").val();
         if(pwd!==pwd2)
         {
            $("#zc").html('<font color="red">两次输入密码不一致</font>');
            setTimeout(function(){
                $("#zc").html('注册');
            },1500);
            return false;
         };
         
         $.post('/index.php?r=site/zhuce',{
            'nick' : $("#txtzh").val(),
            'email': $("#txtyx").val(),
            'psd'  : pwd,
         },function(data){
            console.log(data);return false;
            if(data != '1')
             {
                $("#zc").html('<font color="red">'+data+'</font>');
                setTimeout(function(){
                    $("#zc").html('注册');
                },1500);                
             }else{
                window.location.href='/Home/User/fullinfo';
             };
         });
     })

 
</script>
</html>
