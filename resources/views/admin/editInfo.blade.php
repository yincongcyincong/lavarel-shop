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
			<h3><a href="/admin/shopinfo">浏览商品信息</a></h3>
			<form action='/admin/shopinfo/{{ $ty->Sid }}' method='post' enctype='multipart/form-data'>
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<table border='0' width="330px" height='200px'>
					<tr>
						<td id="aa">商品名称：</td>
						<td><input type='text' name='Sname' value="{{ $ty->Sname }}"></td>
					</tr>
					<tr>
						<td id="aa">商品价格：</td>
						<td>
							<input type='text' name='Sprice' value="{{ $ty->Sprice }}">
						</td>
					</tr>
					<tr>
						<td id="aa">文件：</td>
						<td><input type='file' name='mypic'></td>
					</tr>
					<tr>
						<td colspan='2' align='center'><input type='submit' value='修改'></td>
					</tr>
				</table>
			</form>
			
		</center>
	</body>
	@endsection
	<script type="text/javascript">
		
		var head = $(".headnav li:eq(1)")
		var index = head.index();
		//alert(index);
		head.addClass("current_menu").siblings().removeClass('current_menu');
		//头部导航和左边导航对应
		$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


	</script>
</html>