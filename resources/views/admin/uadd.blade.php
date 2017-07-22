@extends('admin.base.index')

@section('content')
    <center>
    <style>
		h5{
				color:#fff;
				text-align: center;
			}
		input{
			text-align: center;
		}
	</style>
	</center>
	<div class='block-area'>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action='/admin/userss' method='post' style='margin-left:350px;height:100%;'>
			{{ csrf_field() }}
			<h1 style='margin-left:150px;color:#fff;'>普通用户管理</h1>
			<div class='row'>
				<div class="col-lg-8">
					<h5>用&nbsp;户&nbsp;名:<input name='Uname' class="form-control m-b-10" placeholder="请输入用户名" type="text"></h5>
				
					<h5>密&nbsp;&nbsp;&nbsp;&nbsp;码:<input name='Upwd' class="form-control m-b-10" placeholder="请输入密码" type="text"></h5>
				
					<h5>性&nbsp;&nbsp;&nbsp;&nbsp;别：  
							<select name='Ufsex' class='form-control m-b-5' style='text-align: center;'>
                                <option value=''>----全部----</option>
                                <option value='0'>----男----</option>
    							<option value='1'>----女----</option>
                            </select>
				    </h5>
					<h5>年&nbsp;&nbsp;&nbsp;&nbsp;龄:<input name='Uage' class="form-control m-b-10" placeholder="请输入年龄" type="text"></h5>
				
					<h5>用户昵称:<input name='Rname' class="form-control m-b-10" placeholder="请输入昵称" type="text"></h5>
				</div>
					<div style='text-align:center;margin-right:260px;'>
						<input type='submit' class='btn' value='添加'>
					</div>
				</div>
			</div>
		</form>
	</div>
@endsection