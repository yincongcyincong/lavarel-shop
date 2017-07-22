@extends('home.base.father')
   @section('content') 

    <script type="text/javascript" src="{{ asset('home/index/js/jquery-1.8.3.js') }}"></script>
    <link href="{{ asset('home/index/css/css.css') }}" type="text/css" rel="stylesheet" charset="utf-8" />
    <link href="{{ asset('home/index/css/css_1.css') }}" type="text/css" rel="stylesheet" charset="utf-8" />
    <link href="{{ asset('home/index/css/css_2.css') }}" type="text/css" rel="stylesheet" charset="utf-8" />

<style type="text/css">
        .topad
        {
            margin: 0 auto;
            width: 980px;
        }
        .full .topad .narrow
        {
            display: none;
        }
        .topad .narrow
        {
            display: block;
            width: 980px;
        }
        .full .topad .wide
        {
            display: block;
        }
        .topad .wide
        {
            display: none;
            width: 1200px;
        }
        
        
    /*左边logo*/
    .full .vanclLogoSearch {
        width: 1200px;
        position: relative;
    }
    .vanclLogo {
        width: 190px;
        height: 47px;
        padding: 0px 0px 0px 33px;
        position: absolute;a
        bottom: -6px;
    }

    /*焦点图及公共样式*/
    .slider2016-container,#rslides2016{height: 536px;overflow: hidden;width: 1200px;margin:0 auto;position:relative;}
    #rslides2016 li{}
    .rslides1_nav{position:absolute;top: 245px;cursor: pointer;height: 63px;width: 28px;z-index: 100;}
    .rslides1_nav.prev{background: url(index/images/cslef.png) no-repeat scroll 0px 0px;left: 0;}
    .rslides1_nav.next{background: url(index/images/csrig.png) no-repeat scroll 0px 0px;right: 0;}
    .commondefault2016{width:1200px;margin:0 auto;}

    #nums{width:160px;height:50px;margin-top:-30px; margin-left:300px;z-index:3;}
    #nums li{width:20px;height:20px;float:left;left:-100;text-align:center;border:solid 1px #333;margin-right:10px;color:white;border-radius:50%;background:white;cursor:pointer;}
    #nums .cur{background:pink;}

    /*导航*/
    .nautilus_subnav{width:1200px;margin:0 auto;background-color: transparent; height: 130px;padding-top:3px;font-family: 微软雅黑;padding:0px;}
    .shirt_nav{    height: 61px;}
    .activeLi{    background-color: #b82c22!important;   color: transparent;}
    .shirt_nav li{position:relative;float: left;font-size: 17px;height: 54px;line-height: 54px;text-align: center; padding: 0px; width: 50%;background-color: #F3F3F3;}
    .nautilus_subnav ul li a{color:black;display:block;}

    .triangle { width: 0; height: 0; position: absolute; bottom: -6.0px; left: 50%; margin-left: -7px; border-left: 7px solid transparent; border-right: 7px solid transparent; border-bottom: 7px solid #b82c22; transform: rotate(180deg);}

    .nautilus_subnav_two_1 ul li a{color:black;display:block;}
    .nautilus_subnav_two_1{ position:fixed;  width:1200px; height:54px; z-index:9999;background-color:#F3F3F3; top:0px; _position:absolute; _bottom:0px; _top:expression(eval(document.documentElement.scrollTop));}
    .shirt_navs ul{overflow:hidden;}
    .shirt_subnav{ margin-top: 20px;}
    .shirt_subnav li{height: 40px;line-height: 40px;text-align: center; padding: 0px; width: 240px;margin:0px auto 0px; position: relative; float: left; font-size: 17px;}
    .shirt_subnav li a{    color: black; display: block; width: 80%; margin: 0 10%; background-color: #F3F3F3;}
    .sw_nav{display:none;}
    .shirt_subnav li img{ position: absolute; bottom: 0px; left: 47%;}
    /*商品列表*/
    .list-title-img{width:1200px;margin:0 auto;}
    .shirts-product-list{width:1200px;margin:0 auto;}
    .shirts-product-list li{background: #FFF; margin: 20px 10px 45px 15px; border: 1px solid #e8e7ec; height: 300px;width: 260px;float: left;}
    .shirts-product-list li .tit,.shirts-product-list li .price{display:inline;}
    .shirts-product-list li .tit{height: 17px;line-height: 17px;text-align: center;color: #676767; font-weight: bold; background: #ffffff;text-align:center;overflow: hidden;margin-top:5px;margin-left: 10px;}
    .shirts-product-list li .price{font-size: 15px;font-family: "微软雅黑";color: #b80001;line-height: 15px;text-align:center;padding:1px;float: right;margin-right: 10px;}
    .line-through{text-decoration:line-through;}
    .shirts-product-list .product-img{position:relative;}
    .shirts-product-list .product-img h3{position: absolute; right: 10px; bottom: 10px; background: #A10000; color: #fff; font-size: 15px; font-family: microsoft yahei; height: 45px; width: 45px; text-align: center; border-radius: 50%; padding: 5px;}

    /*新版T恤图文分离*/
    .twfl {position: relative;}
    .twfl h2 {
        position: absolute;
        top: 192px;
        left: 192px;
        font-family: 微软雅黑;
        font-size: 16px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl h1 {
        position: absolute;
        top: 130px;
        left: 192px;
        font-family: 微软雅黑;
        font-size: 21px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl2 {position: relative;}
    .twfl2 h1 {
        position: absolute;
        top: 370px;
        left: 340px;
        font-family: 微软雅黑;
        font-size: 17px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl2 h2 {
        position: absolute;
        top: 105px;
        left:225px;
        font-family: 微软雅黑;
        font-size: 17px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }

    .twfl2 h3 {
        position: absolute;
        top:92px;
        left: 192px;
        font-family: 微软雅黑;
        font-size: 29px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl2 h4 {
        position: absolute;
        top: 130px;
        left:192px;
        font-family: 微软雅黑;
        font-size: 17px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl3 {position: relative;}
    .twfl3 h1 {
        position: absolute;
        top: 400px;
        left: 340px;
        font-family: 微软雅黑;
        font-size: 17px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl3 h2 {
        position: absolute;
        top: 155px;
        left:225px;
        font-family: 微软雅黑;
        font-size: 17px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }

    .twfl3 h3 {
        position: absolute;
        top:142px;
        left: 192px;
        font-family: 微软雅黑;
        font-size: 29px;
        width: 214px;
        font-weight: lighter;
    color:#727171;
    }
    .twfl3 h4 {
        position: absolute;
        top: 180px;
        left:192px;
        font-family: 微软雅黑;
        font-size: 17px;
        font-weight: lighter;
    color:#727171;
    }

    .shirt_subnav li{ width:300px;}

    .shirt_subnav_sw{ background:url("index/images/dhtsw.jpg") no-repeat scroll 0px 0px; }
    .shirt_subnav_sw li a{ text-indent:-9999px; background:none; }
    .shirt_subnav_sw li img{ display:none;}

    .shirt_subnav_xx li{ width:141px; margin-right:10px;}
    .shirt_subnav_xx li.none{ margin-right:0px;}
    .shirt_subnav_xx li a{ width:100%; margin:0; text-indent:-9999px; background:none; }
    .shirt_subnav_xx li img{ display:none;}
    .shirt_subnav_xx{ background:url("index/images/xxcsg.jpg") no-repeat scroll 0px 0px;}
    .shirt-list0926 ul li{ position:relative;}
    .catalog_half_point{  width:33px;  height:23px;  position:absolute;  left:0px;  top:0px; }

    .shirts-product-list li{ margin:20px 10px 0px 15px;}
    .channelContent2016 img{transition: 0.2s all linear;-webkit-transition:0.2s all linear;}
    .channelContent2016 img:hover{-webkit-box-shadow: 0 15px 30px rgba(0,0,0,0.1); box-shadow: 0 15px 30px rgba(0,0,0,0.1); -webkit-transform: translate3d(0, -2px, 0); transform: translate3d(0, -2px, 0); }
    .shirt-list0926{ margin-bottom:-20px;}

    .shirt_subnav_sw_nav li{ width:232px; margin:0px 10px 0px 0px;}
    .shirt_subnav_sw_nav li.none{ margin:0px;}
    .shirt_subnav_sw_nav ul li a{ width:100%; margin:0px;}
</style>

<div class="commondefault2016"> 
    <!--  ======================== 焦点图 S 轮播============================  -->
    <div class="slider2016-container">        
        <ul id="rslides2016">
            <li> <a title="牛津纺衬衫" href="{{ url('/home/productinfo') }}/1" target="_blank"><img src="index/picture/576.jpg" alt="牛津纺衬衫"></a></li>
            <li> <a title="免烫衬衫量身" href="{{ url('/home/productinfo') }}/2" target="_blank"><img src="index/picture/dzcsg.jpg" alt="免烫衬衫量身定制"></a></li>
            <li> <a title="凡客衬衫 吉国武 免烫 领尖扣 3.0" href="{{ url('/home/productinfo') }}/3" target="_blank"><img src="index/picture/pp3.0bbx.jpg" alt="凡客衬衫 吉国武 免烫 领尖扣 3.0 "></a></li>
            <li><a title="凡客衬衫 吉国武 免烫 温莎领 3.0" href="{{ url('/home/productinfo') }}/4" target="_blank"><img src="index/picture/ppwsl.jpg" alt="凡客衬衫 吉国武 免烫 温莎领 3.0"></a></li>
            <li> <a title="凡客衬衫 青年布 立领" href="{{ url('/home/productinfo') }}/5" target="_blank"><img src="index/picture/qnbll.jpg" alt="凡客衬衫 青年布 立领"></a></li>
        </ul>   
          
    </div>
        <ul id="nums">
            <li class="cur"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
   <!--  <!--  焦点图 E  -->
    <span class="blank20"></span>
    <!--  content  -->
    <div class="channelContent2016">
        

</div> 



<!-- xpxx 新品-->

<div  id="xpxx" class="shirt-list0926">

    <ul class="shirts-product-list">
        @foreach($aa as $v)
           <li>
           <a href="{{ url('/home/productinfo') }}/{{ $v->Sid }}" class="product-img" target="_blank" title=" {{ $v->Sname }}">
                <img alt="{{ $v->Sname }}" src="{{ url('/admin/picture') }}/{{ ltrim($v->Simgpath,'s_') }}" />
                <h3> <span class="tehui">特惠</span><span class="sprice">&#165;{{ $v->Sprice }}</span></h3>
            </a>
            <a title="{{ $v->Sname }}" style="display:inline;" class="tit" href="{{ url('/home/productinfo') }}/{{ $v->Sid }}"> {{ $v->Sname }}</a>
            </li>
        @endforeach
    </ul>

</div>


<script type="text/JavaScript" src="{{ asset('home/index/js/js.js') }}"></script>
<script type="text/JavaScript" src="{{ asset('home/index/js/js.js') }}"></script>
<script type="text/JavaScript" src="{{ asset('home/index/js/js.js') }}"></script>
<script type="text/javascript">
   
    //数字索引  //当前正在显示的图片的索引
    var index = 1;
    var inte = null;//定时器变量
    
    //自动执行函数
    function autoRun(){
        //定时器每过两秒切换一次
        inte = setInterval(function(){
            //显示下一个图片
            show(index++);
            //判断
            if(index>4){
                index=0;
            }
        },1500);
    }
    autoRun();


    //显示指定索引的那个图片
    function show(i){//索引从0开始的
        //获取索引为i的元素
        $('#rslides2016 li').eq(i).fadeIn();
        $('#rslides2016 li').eq(i).siblings().hide();
        //设置当前按钮的样式
        $('#nums li').eq(i).addClass('cur');
        $('#nums li').eq(i).siblings().removeClass('cur');
    }

    //绑定鼠标放上去的事件
    $('#nums li').hover(function(){
        //获取当前元素的索引
        index  = $(this).index();//获取当前元素在同辈元素中的一个索引1
        //显示当前的索引  并且索引加一
        show(index++);
        clearInterval(inte);
    }, function(){
        autoRun();
    });
</script>

@endsection