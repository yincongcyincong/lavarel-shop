<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=uft-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
        凡客诚品 - 会员免费注册
    </title>
    <link rel="shortcut icon" href="registerimages/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="registercss/css.css" />
    <script type="text/javascript" language="javascript" src="registerjs/js.js"></script>
    <link href="registercss/reg.css" type="text/css" rel="stylesheet" />
</head>
<body id="body" class="wrapper">
    <div id="top" style="margin:10px 0 0 0;padding:0 0 10px 0; border-bottom:solid 1px #919191;">
        <img src="registerpicture/logo_new.jpg" alt="凡客诚品" title="凡客诚品" onclick="javascript:window.location.href='{{  url('/home/zhuye')  }}'" style="cursor:pointer" /></div>
    <!--logo-->
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        @if(session('msg'))
            {{ session('msg') }}
        @endif
    <form method="post" action="/home/register" id="myform">
        {{ csrf_field() }}
    <span class="box15"></span>
    <div class="regist">
        <h1>
            注册新用户 <span>我已经注册，现在就<a href="{{  url('/home/login')  }}">登录</a></span>
        </h1>
        <div style="width: 100%; height: 10px; overflow: hidden; clear: both;">
        </div>
        <div class="content_left">
            <!--tag-->
            <div class="infor clearfix" style="overflow: inherit">
                <div class="email">
                    <ul id="v2regListInfo_bar">
                       <li id='liphone' style="zoom: 1;">
                            <div class="v2regListInfo_rtCont" style="position: relative; zoom: 1;">
                               <div id="_umobile" class="newtxt" style="width:410px; float: left;">
                                    <input type="text" name="Uname" placeholder="请输入用户名"/>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        <li id='liphonecode'>
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                <div id="_mcode" class="newtxt" style="width: 410px;">
                                    <input name="Upwd" type="password" placeholder="设定登录密码"/>
                                </div>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        <li>
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                <div class="newtxt" style="width: 410px;">
                                    <input type="text" name="Uage" placeholder="请输入年龄"/>
                                </div>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        <li>
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                <div>
                                    <select name='Ufsex' class='form-control m-b-5' style="width:410px;height:50px;text-align:center;">
                                        <option value=''>--------------全部--------------</option>
                                        <option value='0'>--------------男--------------</option>
                                        <option value='1'>--------------女--------------</option>
                                    </select>
                                </div>
                                <span class="box3"></span>
                                <span class="v2reg_tips01"></span>
                                <span class="box5"></span>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        <li>
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                <div id="_mpassword" class="newtxt" style="width: 410px;">
                                    <input type="text" name="Rname" placeholder="请输入昵称"/>
                                </div>
                            </div>
                            <span class="Rclear"></span>
                        </li>
                        <li>
                            <div class="v2reg_bt">
                                <span class="box10"></span>
                                <input type="submit" value="立即注册" style="background:#9A9A9A;color:#FFFFFF;width:410px;height:50px;">
                            </div>
                        </li>
                    </ul>
                </div>
                <!--email-->
            </div>
            <!--infor-->
        </div>
        <!--content_left-->
        <div class="content_right">
            <img src="registerpicture/login120412_newlogo.jpg" id="ContentPlaceHolder1__advertImage" style="width: 465px; display: none" />
            <img src="registerpicture/login120412_newlogo.jpg" style="width: 465px" />
        </div>
        <!--content_right-->
        <div class="clear">
        </div>
    </div>
    <!--wrapper-->
    </form>
    <!--bottom-->
    <center>
    <div id="bottom" align="center">
        <div id="bottoms">
            <p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
            <div id="footerArea">
            <div class="subFooter">
            <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank">
            </a>
            <span class="costumeOrg"></span>
            <a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank">
            </a>
            <a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank">
             </a>
             </div>
            </div>
        </div>
    </div>
    </center>
    <!--javascript-->
    <script type="text/JavaScript" src="registerjs/js.js" language="javascript"></script>
    <script type="text/javascript" language="javascript" src="registerjs/js.js"></script>
</body>
</html>
