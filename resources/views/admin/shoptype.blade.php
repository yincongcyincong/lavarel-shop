@extends('admin.base.index')
	@section('content')
	<style>
		table{
			color:#fff;
		}
		table tr th{
			font-size: 20px;
		}
		table tr td{
			font-size: 14px;
		}
		table tr th,td{
			color:#fff;
			text-align: center;
			height: 30px;
		}
	</style>
	<body>
		<form action='' method='post' name='myform'>
			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
			<input type='hidden' name='_method' value='delete'>
		</form>

		<!-- 搜索 -->
		<div style="margin-left:120px; margin-top:50px;">
			<form action="/admin/shoptype" method="get">
				<font color="#fff">商品类型 : &nbsp;&nbsp;</font><input type="text" name="Stype">
		      	<input type="submit" value="搜索">
			</form>
		</div>
		<div class="container" style='margin-left:100px;'>
	      <div class="row">
	        <div class="col-lg-3 col-md-4 col-sm-6 illu">
	            <dl>
	                <dd>
	                    <table border="0" width="900">
	                    	<tr>
	                    		<th colspan="4" style="font-size:24px; color:pink;">
	                    			** 商品类型 **
	                    			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    			<a href="/admin/shoptype/create" style="color:#fff; font-size:14px;">__添加__</a>
	                    		</th>
	                    	</tr>
	                    	<tr>
	                    		<th>商品类型编号</th>
	                    		<th>商品所属者</th>
	                    		<th>商品类型</th>                    		                   	<th>操&nbsp;&nbsp;&nbsp;&nbsp;作</th>                    	
	                    	</tr>
	                    	@if(session('msg'))
								{{ session()->get('msg') }}
							@endif
	                    	@foreach($list as $v)
	                    	<tr>
	                    		<td>{{ $v->Stid }}</td>
	                    		<td>{{ $v->Uid }}</td>
	                    		<td>{{ $v->Stype }}</td>
	                    		<td>
									<a href="/admin/shoptype/{{ $v->Stid }}/edit" style="color:#fff;">修改</a>
									&nbsp;&nbsp;|&nbsp;&nbsp; 
									<a href="javascript:doDel({{ $v->Stid }})" style="color:#fff;">删除</a>
									&nbsp;&nbsp;|&nbsp;&nbsp; 
									<a href="{{ url('/admin/shopinfo') }}/{{ $v->Stid }}" style="color:#fff;">查看商品信息</a>
								</td>
	                    	</tr>
	                    	<tr>
	                    		<td colspan="4">{{ $list->appends($where)->links() }}</td>
	                    	</tr>
	                    	@endforeach
	                    </table>
	                </dd>
	            </dl> 
	        </div>
	    </div>	  
	</body>
	<script type="text/javascript">
		function doDel(Stid)
		{
			if(confirm('确定要删除吗？')){
				var form = document.myform;
				form.action = '/admin/shoptype/'+Stid;
				form.submit();
			}
		}
	</script>
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


	</script>
	@endsection
	<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
	
	</html>           
