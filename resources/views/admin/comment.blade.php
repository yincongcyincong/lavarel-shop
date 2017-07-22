@extends('admin.base.index')
	
	
		<style>
			table{
				color:#fff;
			}
			table tr th,td{
				color:#fff;
				text-align: center;
			}
		</style>
	@section('content')

		<!-- 搜索 -->
		<div style="margin-left:120px; margin-top:50px;">
			<form action="/admin/comment" method="get">
				<font color="#fff">商品编号 : &nbsp;&nbsp;</font><input type="text" name="goodsId">
		      	<input type="submit" value="搜索">
			</form>
		</div>
		<div class="container" style='margin-left:100px;'>
	      <div class="row">
	        <div class="col-lg-3 col-md-4 col-sm-6 illu">
	            <dl>
	                    <table border="0" width="700">
	                    	<tr>
	                    		<th colspan="5" style="font-size:24px; color:pink;">** 用户评论 **</th>
	                    	</tr>
	                    	<tr>
	                    		<th>评论编号</td>
	                    		<th>商品编号</td>
	                    		<th>评论者名字</td>
	                    		<th>评论内容</td>  
	                    		<th>评论等级</td>                    		                   
	                    	</tr>
	                    	@foreach($list as $v)
	                    	<tr>
	                    		<td>{{ $v->id }}</td>
	                    		<td>{{ $v->goodsId }}</td>
	                    		<td>{{ $v->Uname }}</td>
	                    		<td>{{ $v->details }}</td>
	                    		<td>{{ $v->Ugrade }}</td>
	                    	</tr>
	                    	<tr>
	                    		<td colspan="5"> {{ $list->appends($where)->links() }}</td>
	                    	</tr>
	                    	@endforeach
	                    </table>
	                   
	                </dd>
	            </dl> 
	        </div>
	    </div>	  

	@endsection
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


	</script>
          
