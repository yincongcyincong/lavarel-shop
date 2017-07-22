@extends('admin.base.index')
	
	@section('content')
	<style>
			
			table tr th,td{
				color:#fff;
				text-align: center;
			}
			table tr th,td{
				height: 30px;
			}
		</style>
	<body>
		<form action='' method='post' name='myform'>
			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
			<input type='hidden' name='_method' value='delete'>
		</form>
		<form action="/admin/show/create" method='get' name='mform'>
			<input id='input' type="hidden" name='Sid' value=''>
		</form>

		<!-- 搜索 -->
		<form action="/admin/show/{{ $id }}" method="get">
			<div style="margin-left:120px; margin-top:50px;">
				<font color="#fff">型号：</font><input type='text' name='Ssize'>
            	<input type='submit' value='搜索'>
			</div>
		</form>
		<div class="container" style='margin-top:0px; margin-left:100px;'>
	      <div class="row">
	        <div class="col-lg-3 col-md-4 col-sm-6 illu">
	            <dl>
	                <dd>
						
	                    <table border="0" width="900">
	                    	<tr>
	                    		<th colspan="7" style="font-size:24px; color:pink;">
	                    			** 商品详细信息 **
	                    			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    			<a href="javascript:doAdd({{ $id }});" style="color:#fff; font-size:14px;">__添加__</a>
	                    		</th>	
	                    	</tr>
	                    	<tr>
	                    		<th>商品编号</th>
	                    		<th>商品型号</th>
	                    		<th>商品颜色</th>
	                    		<th>商品价格</th>
	                    		<th>商品数量</th>
	                    		<th>商品图片路径</th>                  		                   <th>操&nbsp;&nbsp;&nbsp;&nbsp;作</td>                    	
	                    	</tr>
	                    	@if(session('msg'))
								{{ session()->get('msg') }}
							@endif
	                    	@foreach($list as $v)
	                    	<tr>
	                    		<td>{{ $id }}</td>
	                    		<td>{{ $v->Ssize }}</td>
	                    		<td>{{ $v->Scolor }}</td>
	                    		<td>{{ $v->Sprice }}</td>
	                    		<td>{{ $v->Snum }}</td>
	                    		<td><img src="{{ url('admin/picture') }}/{{ $v->Simgpath }}" alt=""></td>
	                    		<td>
									<a href="/admin/show/{{ $v->Ssize }}.{{ $v->Scolor }}/edit" style="color:#fff;">修改</a>
									&nbsp;|&nbsp;
									<a href="javascript:doDel('{{ $v->Ssize }}.{{ $v->Scolor }}.{{ $id }}')" style="color:#fff;">删除</a>
									&nbsp;|&nbsp; 
									<a href="/admin/shopinfo/{{ $Stid }}" style="color:#fff;">返回商品信息</a>
								</td>
	                    	</tr> 
	                    	@endforeach
	                    	<tr>
	                    		<td colspan="7">{{ $list->appends($where)->links() }}</td>
	                    	</tr>
	                    </table> 
	                </dd>
	            </dl> 
	        </div> 
	    </div>	  
	</body>
	<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
	<script type="text/javascript">
		function doDel(data)
		{
			if(confirm('确定要删除吗？')){
				var form = document.myform;
				form.action = '/admin/show/'+data;
				form.submit();
			}
		}

		function doAdd(Sid){

			var input = document.getElementById('input');
			input.setAttribute('value',Sid);
			var myform = document.mform;
			myform.submit();
		}
	</script>
	<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


	</script>
	@endsection

	</html>           
