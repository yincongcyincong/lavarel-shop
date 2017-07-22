@extends('admin.base.index')

@section('content')
		<center>
		    <h1 style='color:white;'>超级用户信息管理</h1>
			<form action='/admin/users/{{ $controllers->Cid }}' method='post'>
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<!-- <input type='hidden' name='_method' value='delete'> -->
				<table border='1'>
					<div class='row'>
				<div class="col-lg-4" style='margin-left:380px;'>
					<b style='color:white;'>超级用户名:</b><input name='Cname' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $controllers->Cname  }}'>
				</div><br><br><br>
				<div class="col-lg-4" style='margin-left:380px;'>
					<b style='color:white;'>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:</b><input name='Cpwd' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $controllers->Cpwd  }}'>
				</div><br><br><br><br>
				<div class='row'>
					<div class='col-sm-12'>
						<input type='submit' class='btn' value='修改'>
					</div>
				</div>
				</table>
			</form>
			
		</center>

@endsection