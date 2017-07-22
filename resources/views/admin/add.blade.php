@extends('admin.base.index')

@section('content')
<center>
    <style>
		h3{
				color:#fff;
				text-align: center;
			}
	</style>
	</center>
	<div class='block-area'>
		<h3 class="block-title">Text Input</h3>
		<p>Text Inputs with different sizes by height and column.</p>
		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
		<form action='/admin/users' method='post'>
			{{ csrf_field() }}
			<center>
			<table border='1'>
			<div class='row' style="margin-left:450px;">
				<div class="col-lg-4">
					<h3>超级管理员:<input name='Cname' class="form-control m-b-10" placeholder=".col-lg-2" type="text"></h3>
				
					<h3>密码: <input name='Cpwd' class="form-control m-b-10" placeholder=".col-lg-2" type="text"></h3>
				
						<input type='submit' class='btn' value='添加'>
					</div>
				</div>
			</table>
			</center>
			</div>
		</form>
	</div>
@endsection