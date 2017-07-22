@extends('admin.base.index')

@section('content')
	<center>
	    <h1 style=' color:white;'>超级用户信息管理</h1>
		<form action='/admin/userss/{{ $Uid->Uid }}' method='post'>
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<!-- <input type='hidden' name='_method' value='delete'> -->
			<table border='1'>
		<div class='row' style='margin-left:240px;color:white;'>
			<div class="col-lg-8">
				<h5>用户&nbsp;名:</h5><input name='Uname' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $Uid->Uname  }}'>
			</div>
			<div class="col-lg-8">
				<h5>密&nbsp;&nbsp;&nbsp;码:</h5><input name='Upwd' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $Uid->Upwd  }}'>
			</div>
			<div class="col-lg-8">
				<h5>年龄:</h5><input name='Uage' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $Uid->Uage  }}'>
			</div>
			<div class="col-lg-8">
				<h5>性别:</h5><input name='Ufsex' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $Uid->Ufsex  }}'>
			</div>
			<div class="col-lg-8">
				<h5>用户昵称:</h5><input name='Rname' class="form-control m-b-10" placeholder=".col-lg-2" type="text" value='{{  $Uid->Rname  }}'>
			</div>
			<div class='row'>
				<div class='col-sm-12' style='position:relative; left:-150px; margin-top:20px;'>
					<input type='submit' class='btn' style=' color:black;' value='修改'>
				</div>
			</div>
		</div>
			</table>
		</form>
		
	</center>
@endsection