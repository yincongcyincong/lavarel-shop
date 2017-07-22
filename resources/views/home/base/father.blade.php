<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
        
<head>
        
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="csrf-token" content="{{ csrf_token() }}">   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
    
    
<title>
        衬衫_VANCL凡客诚品衬衫,免烫衬衫,休闲衬衫,法兰绒衬衫,牛津纺衬衫,短袖衬衫,男士衬衫,长袖衬衫,女士衬衫,商务衬衫,麻衬衫，尽在衬衫频道！</title>
        
<meta name="keywords" content="免烫衬衫,休闲衬衫,法兰绒衬衫,牛津纺衬衫,短袖衬衫,男士衬衫,长袖衬衫,女士衬衫,商务衬衫，标准版衬衫，宽松版衬衫" />
        
<meta name="description" content="VANCL衬衫频道提供多款衬衫,免烫衬衫,短袖衬衫,长袖衬衫价格,图片,评论,促销等相关信息,为您购买衬衫,免烫衬衫,短袖衬衫,长袖衬衫衬衫裙，青年布衬衫，领尖扣衬衫，温莎领衬衫，吉国武衬衫，提供最有价值的参考内容。"  />

    <link href='{{ asset("home/css/product_list.css") }}' type="text/css" rel="stylesheet" charset="utf-8" />

    <link href="{{ asset('home/css/productinfo.css') }}" type="text/css" rel="stylesheet" />

    <link href='{{ asset("home/css/father.css") }}' type="text/css" rel="stylesheet" charset="utf-8" />
        
   
    <script type="text/javascript">
        try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {}</script>
        
    <![endif]-->
        
</head>
        
<body class="full">
        
    <div id="Head">
        
        <div id="headerTopArea" class="headerTopAreaBox">
        <div class="headerTopArea">
        
        <div class="headerTop">
        
            <div class="headerTopRight" style="width: 126px;">
        
                <div class="active notice" id="vanclCustomer">
            <a class="mapDropTitle" href="//catalog.vancl.com/zhuanti/tg_20100510.html" target="_blank">
        
                        网站公告
                    </a>
        
                </div>
        
                <div class="payattention">
        
                    <em>
        </em>
        
                    <a href="javascript:void(0);" class="vweixinbox">
        
                        <span class="vweixin" style="background: url(images/w1.jpg) no-repeat left 3px;">
        </span>
        
                        <b class="vweixinTip">
        </b>
                    </a>
        
                    <a href="//e.weibo.com/vancl" class="track vanclweibo" name="hp-hp-head-weibo-v:n" target="_blank" style="background: url(images/w2.jpg) no-repeat left 3px;">
        
                        
                    </a>
        
                </div>
        
            </div>
        
            <div class="headerTopLeft">
        
            <div id="welcome" class="top loginArea">
                您好,
                @if (session('homeindex'))
                    {{ session('homeindex')->Uname }}
                <span>
                    <a href="{{ url('/home/logout') }}" name="hp-hp-head-signin-v:n" class="top track">
                        退出登录
                    </a>&nbsp;|&nbsp;
                    <a href="{{  asset('/home/login')  }}" name="hp-hp-head-register-v:n" class="track">
                        更换用户
                    </a>
                </span>
                @else
                <span class="top">
                    欢迎光临凡客诚品！&nbsp;
                </span>
                    <span>
                    <a href="{{  asset('/home/login')  }}" name="hp-hp-head-signin-v:n" class="top track">
                        登录
                    </a>&nbsp;|&nbsp;
                    <a href="{{  asset('/home/register')  }}" name="hp-hp-head-register-v:n" class="track">
                        注册
                    </a>
                </span>
                 @endif
                
            </div>
        
            <div class="recommendArea">
        
                <a href="{{ url('home/indents') }}" rel="nofollow" class="track" name="hp-hp-head-order-v:n">
         我的订单</a>
        
            </div>
        
            </div>
        
            <span class="blank0">
        </span>
        
        </div>
        
    </div>
        
</div>
        
<div id="logoArea" class="vanclLogoSearch">
        <div class="vanclSearch fr">
        
    <div class="searchTab">
        
        <div class="search fl">
            <form action="{{ url('home/productlist') }}" method='get'>
                <input type="text" class="searchText ac_input textBox Enter fl" name="search" id="skey" value=""/>
            
                <input type="submit" value='' class="searchBtn sousuoBtn btn" id="btnHeaderSearch" />
            </form>
        </div>
        
        <div class="buycar fr active" id="shoppingCarNone">
        
            <p>
 <a id="shoppingcar_link" rel="nofollow" 
 @if(session('homeindex')) href="{{ url('home/car') }}" @else href="{{ url('home/login') }}" @endif name="hp-hp-head-cart-v:n:t" class="shopborder track cartab">
        购物车(
                <span car_product_total="shoppingCar_product_totalcount" id='num'>
                 {{ $n }}
                </span> )
     </a>
        <s>
        </s>
        
            </p>
        
            <div class="bottomlines">  
            </div>
            <div class="BuycarTab shopDropList">
            </div>
        </div>
        
    </div>
        
    <div class="hotWord">
        
        <p>
         热门搜索：
            <a  class="track" href="{{ asset('home/productlist/1') }}" target="_blank">
                免烫衬衫
            </a>
        
            <a  class="track" href="{{ asset('home/productlist/2') }}" target="_blank">
                高支衬衫
            </a>
        </p>
        
        </div>
        
    </div>
        
</div>
        
<div class="navlist clear" id="mainNavBox" style="z-index:300!important;">
        
    <ul>
        
        <li class="vancllogo_Con" style="text-align: left;">
        
            <a href="//www.vancl.com"></a>
        </li>
        
        <li>
        
            <a href="{{ url('home/zhuye') }}">首页</a>
        <span class="NavLine">
        </span>
        
        </li>
        
        <li>
            <a href="{{ url('home/productlist') }}" class="track" name="hp-hp-head-nav_1-v:n" target="_blank">
                全部商品
            </a>
            <span class="NavLine"> </span>
        </li>

        @foreach($shoptype as $v)
            <li>
                <a href="{{ url('home/productlist') }}/{{ $v->Stid }}" class="track" name="hp-hp-head-nav_1-v:n" target="_blank">
                    {{ $v->Stype }}
                </a>
                <span class="NavLine"> </span>
            </li>
        @endforeach
     </ul>
        
</div>
            
</div>

    


    
@yield('content')    




    
    
<div class="blank0" style="height:32px;">
        
    
</div>
        <div class="vanclFoot" style="margin-top:0px;">
        
<div class="vanclCustomer publicfooterclear">
        
    <ul>
        
        <li>
        
            <a href="//help.vancl.com/Home/contact" rel="nofollow" target="_blank">
        <p class="onlineCustomer">
        <img src="{{ url('home/picture/onlinecustomer.png') }}" style="width:auto;height:auto;">
        </p>
        <p class="onlineTime">
         7X9小时在线客服</p>
        </a>
        </li>
        
        <li>
        
            <a href="//help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank">
        <p class="seven">
        <img src="{{ url('home/picture/seven.png') }}" style="width:auto;height:auto;">
        </p>
        <p>
         7天内退换货</p>
        <p>
         购物满199元免运费</p>
        </a>
        
        </li>
        
        <li class="twocode">
        
            <p>
        <img src="{{ url('home/picture/2014_8_29_16_39_33_7709.jpg') }}" style="width: 104px; height: 104px;">
        </p>
        <p>
         扫描下载<em>
        凡客</em>
        客户端</p>
        
        </li>
        
        </ul>
        </div>
        <div class="vanclOthers publicfooterclear">
        <ul>
        <li>
        <a href="//www.vancl.com/help/about.htm" target="_blank">
        关于凡客</a>
        </li>
        <li>
        <a href="//help.vancl.com/Content/1.html" target="_blank">
        新手指南</a>
        </li>
        <li>
        <a href="//help.vancl.com/category/transfer" target="_blank">
        配送范围及时间</a>
        </li>
        <li>
        <a href="//help.vancl.com/Category/31-1.html" target="_blank">
        支付方式</a>
        </li>
        <li>
        <a href="//help.vancl.com/Category/43-1.html" target="_blank">
        售后服务</a>
        </li>
        <li class="none">
        <a href="//help.vancl.com/" target="_blank">
        帮助中心</a>
        </li>
        </ul>
        </div>
        </div>
        <div id="footerArea" class="">
        <div class="footBottom">
        <div class="footBottomTab">
        <p>
         Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p>
        <p>
         凡客诚品（北京）科技有限公司</p>
        </div>
        </div>
        <span class="blank20">
        </span>
        <div class="subFooter">

       @foreach($link as $v)
        <a href="{{ $v->url }}" style="display: inline-block;" target="_blank">
        <img style="width: 120px; height: 39px;" src="{{ url('') }}/{{ $v->photo }}"/>
        </a>
        @endforeach

        <div class="blank0">
        </div>
        </div>
        </div>
        <div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10">
        <ul>
        <li class="downApp">
        <a href="//m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank">
        </a>
        </li>
        <li class="online">
        <a href="//imweb.vancl.com/" target="_blank">
        </a>
        </li>
        <li class="BlackTop">
        <a href="javascript:;" onclick="javascript:document.getElementById('headerTopArea').scrollIntoView()">
        </a>
        </li>
        </ul>
        </div>
        
</body>
        
</html>
        
