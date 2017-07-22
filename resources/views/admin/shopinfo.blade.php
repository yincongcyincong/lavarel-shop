@extends('admin.base.index')

	@section('content')
	<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');
	</script>
	<style>
			
		table tr th,td{
			color:#fff;
			text-align: center;
		}
	</style>

		<form action='' method='post' name='myform'>
			<input type='hidden' name='_token' value='{{ csrf_token() }}'>
			<input type='hidden' name='_method' value='delete'>
		</form>
		<div class="container" style='margin-top:60px; margin-left:100px;'>
	      <div class="row">
	      	<form action="/admin/shopinfo" method="get">
	      		<font color="#fff">商品名称 : &nbsp;&nbsp;</font><input type="text" name="Sname">
	      		<input type="submit" value="搜索">
	      	</form>
	      	<form action="/admin/shopinfo/create" method='get' name='mform'>
	      		<input type="hidden" id='inp' name='id' value=''>
	      	</form>
	        <div class="col-lg-3 col-md-4 col-sm-6 illu" >
	            <dl>
	                <dd>
	                    <table border="0" width="900">
	                    	<tr>
		                    	<th colspan="5" style="font-size:24px; color:pink;">
	                    			** 商品信息 **
	                    			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                    			<a href="javascript:doAdd({{ $id }});" style="color:#fff; font-size:14px;">__添加__</a>
	                    		</th>	
	                    	</tr>
	                    	<tr>
	                    		<th>商品编号</th>
	                    		<th>商品名称</th>
	                    		<th>商品价格</th>
	                    		<th>商品图片路径</th>                  		                   	<th>操&nbsp;&nbsp;&nbsp;&nbsp;作</td>                    	
	                    	</tr>
	                    	@if(session('msg'))
								{{ session()->get('msg') }}
							@endif
	                    	@foreach($list as $v)
	                    	<tr>
	                    		<td>{{ $v->Sid }}</td>
	                    		<td>{{ $v->Sname }}</td>
	                    		<td>{{ $v->Sprice }}</td>
	                    		<td><img src="{{ url('admin/picture') }}/{{ $v->Simgpath }}" alt=""></td>
	                    		<td>
									<a href="/admin/shopinfo/{{ $v->Sid }}/edit" style="color:#fff;">修改</a>
									&nbsp;&nbsp;|&nbsp;&nbsp; 
									<a href="javascript:doDel({{ $v->Sid }})" style="color:#fff;">删除</a>
									<a href="/admin/show/{{ $v->Sid }}" style="color:#fff;">查看详细信息</a>
								</td>
	                    	</tr>
	                    	@endforeach
	                    	<tr>
	                    		<td colspan="5">{{ $list->appends($where)->links() }}</td>
	                    	</tr>
	                    </table>
	                    
	                </dd>
	            </dl> 
	        </div>
	    </div>	  
	<script type="text/javascript">
		function doDel(Stid)
		{
			if(confirm('确定要删除吗？')){
				var form = document.myform;
				form.action = '/admin/shopinfo/'+Stid;
				form.submit();
			}
		}

		function doAdd(id){
			var form = document.mform;
			var input = document.getElementById('inp');
			input.value = id;
			form.submit();
		}
	</script>
	
	@endsection
	
          
