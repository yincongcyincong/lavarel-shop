<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
	   凡客诚品 - 会员登录
    </title>
    <link href="{{ asset('home/logincss/login.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('home/logincss/footer.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('home/logincss/css.css') }}" rel="stylesheet" type="text/css" />
    
    
    <meta name="keywords" content="凡客诚品 - 会员登录," />
    <meta name="description" content="凡客诚品 - 会员登录" />
</head>
<body>
    <center>
        <div id="Head" align="left">
            <img class="logo" src="loginimages/logo_new.jpg">
            <p>
                <a href="" target="_blank">
                    帮助
                </a>
            </p>
        </div>
    </center>
    <div class="wrapper">
        <div style="width: 100%; height: 25px; position: relative;">
            <h3 style="font-size: 22px; color: #979797; font-weight: bolder; text-align: left;
                height: 25px; line-height: 25px; float: right; margin: 0 100px 0 0; width: 400px;
                position: relative;">
                    凡客 Vancl 登录 
                <span style="font-size: 14px; font-weight: normal; position: absolute;right: 0px; bottom: 0px;">没有账户免费
                <a href="{{  url('/home/register')  }}" style="color: #b42025;margin: 0px;">
                    注册
                </a> 
                </span>
            </h3>
        </div>
        <div class="login">
            <div class="tag">
                <ul id="tags">
                    <li class="on" style='width:400px;'>
                        普通登录
                    </li>
                </ul>
            </div>
            <h4 style='margin-left:150px;'>
                @if(session('msg'))
                    {{ session('msg') }}
                @endif
           </h4> 
            <!--tag-->
            <form action="{{ url('/home/login') }}" class="form-horizontal" method='post'>
            {{ csrf_field() }}
            <div id="shows">
                <div class="user_infor">
                    <div id="vanclLoginError" class="tips">
                        用户名或者密码错误!
                    </div>
                    <div id="_uname" class="newtxt">
                        <input name="Uname" type="text" value="" placeholder='请输入用户名'>
                    </div>
                    <div id="vanclUserNameError" class="tips">
                        用户名不能为空!
                    </div>
                    <div id="_upwd" class="newtxt">
                        <input name="Upwd" type="password" class="inputtextcolor" value="" placeholder='请输入密码'>
                    </div>
                    <div id="vanclPasswordError" class="tips">
                        密码不能为空!
                    </div>
                    <p id='pValidate' class="newtxt">
                        <input maxlength="6" style="width: 155px; height: 48px; border: 0 none;color: #acacac;text-indent: 10px;" name="code" type="text" class="inputtextcolor"  name="code" value="" placeholder='请输入验证码'>
                        <img src='{{ url('/home/captch').'/'.time() }}' style="width: 145px; height: 53px; position: absolute; right: 0px; top: 0px; " onclick="this.src='{{ url('/home/captch') }}/'+Math.random()" />
                    </p>
                    <div id="validateError" style="display: none" class="tips">
                        验证码不能为空!
                    </div>
                    <div class="bt">
                        <div class="clear">
                        </div>
                        <input type="submit" value="登陆" style="width:365px;px;height:55px;background-color:#a10000;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="advert">
            <img src="loginpicture/login120412_newlogo.jpg" id="_advertImage" style="width: 465px; display: none" />
            <img src="loginpicture/login120412_newlogo.jpg" style="width: 465px" />
        </div>
        
        <!--shows-->
        <div style="clear: both;">
        </div>
    </div>
    <center>
    <div id="bottom" align="center">
		<div id="bottoms">
			<p class="bZp3">
                Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号
            </p>
            <div>
                <a href='http://baidu.com'><img rel="nofollow" src="loginimages/1.png" class="redLogo" target="_blank" style="width:200px;"></a>
                <a href='http://baidu.com'><img rel="nofollow" src="loginimages/1.png" class="redLogo" target="_blank" style="width:200px;"></a>
                <a href='http://baidu.com'><img rel="nofollow" src="loginimages/1.png" class="redLogo" target="_blank" style="width:200px;"></a>
                <a href='http://baidu.com'><img rel="nofollow" src="loginimages/1.png" class="redLogo" target="_blank" style="width:200px;"></a>
            </div>
        </div>
	</div>
    </center>
    <script src="loginjs/quicklogin.js"></script>
    <script src="home/public/js/jquery-3.1.1.min.js"></script>
    <script src="home/bootstrap/js/bootstrap.min.js"></script>
    <script src="home/public/js/delaunay.js"></script>
    <script src="home/public/js/TweenMax.js"></script>
    <script src="home/js/effect.js"></script>
    <script src="home/js/b_login.js"></script> 
</body>
</html>
