<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('css/rightmain.css') }}">
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css') }}"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/index.css') }}">
	<title>后台管理系统</title>
</head>
<body>

	<div class="head">
		<div class="headlogo pull-left">
			<h1><a href="javascript:;">后台管理</a></h1>
			
		</div> 
		<ul class="headnav pull-left">
			<li class="menu_0 current_menu">
				<a href="javascript:;">用户信息管理</a>
			</li>
			<li class="menu_1">
				<a href="javascript:;">商品信息管理</a>
			</li>
			<li class="menu_2">
				<a href="javascript:;">配送信息管理</a>
			</li>
			<li class="menu_3">
				<a href="javascript:;">其他管理</a>
			</li>
		</ul>
		<ul class="headlink pull-right">
			<li class="link_0"><a href="javascript:;">您好，{{ session('adminuser')->Cname }}</a></li>
			<li class="link_1"><a href="javascript:;"><span class="ton">隐藏菜单</span></a></li>
			<li class="link_2"><a href="{{ url('/admin/index') }}">首页</a></li>
			<li class="link_3"><a href="javascript:;">帮助</a></li>
			<li class="link_4"><a href="{{ url('/admin/logout') }}">退出</a></li>
		</ul>
	</div>
	<!-- 头部页面结束 -->
	<div class="leftmenu">
		<div class="leftmenu_0">
			<dl>
				<dt>用户管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="{{ url('/admin/comment') }}" >用户评论</a></li>
						<li><a href="{{ url('/admin/users') }}">超级用户管理</a></li>
						<li><a href="{{ url('/admin/userss') }}">普通用户管理</a></li>
						<li><a href="{{ url('/admin/basis') }}">用户基本信息管理</a></li>
					</ul>
				</dd>
			</dl>

		</div>
		<!-- leftmenu_0结束 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>商品信息管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="/admin/shoptype">商品类型</a></li>
					</ul>
				</dd>
			</dl>
		</div>
		<!-- leftmenu_1结束 模块管理 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>配送信息管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="{{ url('/admin/indent') }}">订单信息</a></li>
					</ul>
				</dd>
			</dl>
			

		</div>
		<!-- leftmenu_2系统设置结束 -->
		<div class="leftmenu_0 hidden">
			<dl>
				<dt>其他信息管理</dt>
				<dd>
					<ul class="clearfix">
						<li><a href="{{ url('/admin/car') }}">购物车管理</a></li>
						<li><a href="{{ url('/admin/link') }}">友情链接管理</a></li>
						<li><a href="{{ url('/admin/recommend') }}">首页推荐管理</a></li>
					</ul>
				</dd>
			</dl>
			
			
		</div>
	</div>
	<!-- 左边导航结束 -->
	<div class="rightmain" id="rightmain">
		<div class="rightcontent">
			 @yield('content')

		</div>
	</div>
	
	 <script src="{{ asset('admin/public/js/jquery-1.8.3.min.js') }}"></script>
    
      <script src="{{ asset('admin/bootstrap/js/bootstrap.min.js') }}"></script>
	  <script src="{{ asset('admin/public/js/banner.js') }}"></script>
	  <script type="text/javascript">
	    //导航经过改变宽度和颜色
		$(".headnav li").click(function(){
			var index = $(this).index();
			//alert(index);
			$(this).addClass("current_menu").siblings().removeClass('current_menu');
			//头部导航和左边导航对应
			$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

		});

		//头部导航和左边导航对应
		// bannerplay($(".leftmenu"),$(".leftmenu_0"),$(".headnav li"),4,false,2);
        $('#a').click(function(){
        	alert(111);
        });
		//左边导航点击上拉
		$(".leftmenu dl dt").click(function(){
			 if(false == $(this).siblings("dd").is(":visible")){//如果不可见点击后变蓝色
			 	$(this).css('background-position','right -30px');
			}else{
				$(this).css('background-position','right 0px');//可见点击后变红色
			}

			$(this).siblings('dd').slideToggle('fast').siblings('dt');//.end()

		});
		//点击隐藏菜单
		var i=1;
		
		//替换文字并显示隐藏左侧导航
		function replace(){
			var i=j=1;
			var x=$(".link_1");
			var y=$(".ton");
			y.click(function(){
				i++;
				if(i%2==0){
					//alert(i)
					y.text("显示菜单");
					$('#rightmain').addClass('rightmain1').removeClass('rightmain');
				}else{
					y.text("隐藏菜单");
					$('#rightmain').addClass('rightmain').removeClass('rightmain1');
				}
				
			})
			x.click(function(){
			j++;
			//alert(j);
			j%2==0 ? $(".leftmenu").css('display','none') : $(".leftmenu").css('display','block');
		})
	}
		replace();

		//左侧导航切换出右侧页面ifream
		$(".leftmenu dl dd ul li a").click(function(){
			var _link = $(this).attr('_link');
			//alert(_link)
		$("#main").attr('src',_link);
		$(this).addClass('current-menuleft').parent().siblings().children().removeClass('current-menuleft');
		$(this).parents('dl').siblings().find('dd ul li a').removeClass('current-menuleft');

		});



	</script>
</body>
</html>