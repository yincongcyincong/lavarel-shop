@extends('admin.base.index')
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<style type="text/css">
			#aa{
				color: #fff;
			}
			tr td{
				text-align: center;
			}
		</style>
	</head>
	@section('content')
	<body>
		<center>
			<h3><a href="/admin/shoptype" style="color:#fff;">浏览商品类型</a></h3>
			<form action='/admin/shoptype' method='post'>
				{{ csrf_field() }}
				<table  width="250" height="200px;">
					<tr>
						<td id="aa">商品所属者：</td>
						<td>
							<input type='text' name='Uid'>
						</td>
					</tr>
					<tr>
						<td id="aa">商品类型：</td>
						<td><input type='text' name='Stype'></td>
					</tr>
					<tr>
						<td colspan='2' align='center'>
							<input type='submit' value='添加'>
						</td>
					</tr>
				</table>
			</form>
			
		</center>
	</body>
	@endsection
	<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


	</script>
</html>