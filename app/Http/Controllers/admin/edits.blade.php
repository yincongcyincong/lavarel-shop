<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<style type="text/css">
			
		</style>
	</head>
	<body>
		<center>
		    <h1>超级用户信息管理</h1>
			<form action='/admin/users/{{ $controllers->Cid }}' method='post'>
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<!-- <input type='hidden' name='_method' value='delete'> -->
				<table border='1'>
				<div class='row'>
				<div class="col-lg-8">
					<h1>用户&nbsp;名:</h1><input name='Uname' class="form-control m-b-10" placeholder=".col-lg-2" type="text">
				</div>
				<div class="col-lg-8">
					<h1>密&nbsp;&nbsp;&nbsp;码:</h1><input name='Upwd' class="form-control m-b-10" placeholder=".col-lg-2" type="text">
				</div>
				<div class="col-lg-8">
					<h1>年龄:</h1><input name='Uage' class="form-control m-b-10" placeholder=".col-lg-2" type="text">
				</div>
				<div class="col-lg-8">
					<h1>性别:</h1><input name='Ufsex' class="form-control m-b-10" placeholder=".col-lg-2" type="text">
				</div>
				<div class="col-lg-8">
					<h1>用户昵称:</h1><input name='Rname' class="form-control m-b-10" placeholder=".col-lg-2" type="text">
				</div>
				<div class='row'>
					<div class='col-sm-12' style='margin-left:280px; margin-top:50px;'>
						<input type='submit' class='btn' value='添加'>
					</div>
				</div>
			</div>
				</table>
			</form>
			
		</center>
	</body>
</html>