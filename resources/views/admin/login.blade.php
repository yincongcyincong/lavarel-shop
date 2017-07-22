<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('admin/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="../public/css/base.css') }}">  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/b_login.css') }}">
	<title>凡客商城后台登录页面</title>
</head>
<body>
<div class="login">
	<div class="loginmain">
		<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;凡客商城后台管理系统</h2>
		<h4 style='margin-left:150px;'>
				@if(session('msg'))
					{{ session('msg') }}
				@endif
			</h4>
			<form action="{{ url('/admin/login') }}" class="form-horizontal" method='post'>
			{{ csrf_field() }}
		           <!-- 让表单在一行中显示form-horizontal -->
		          <div class="form-group">
		              <label for="username" class="col-lg-1 control-label">用户名</label>
		              <div class="col-lg-4">
		                <input type="text" name="username" id="username" class="form-control" placeholder="请输入账号">
		              </div>              
		          </div>
				  <div class="form-group"></div>
				  <div class="form-group"></div>

		          <div class="form-group">
		              <label for="password" class="col-lg-1 control-label">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
		              <div class="col-lg-4">
		                <input type="password" name="password" id="password" class="form-control" placeholder="请输入密码">
		              </div>              
		          </div>
                   <div class="form-group"> </div>
                   <!-- <div class="form-group"></div> -->

		          <div class="form-group">
		              <label for="password" class="col-lg-1 control-label">验&nbsp;&nbsp;证&nbsp;&nbsp;码</label>
		              <div class="col-lg-2">
		                <input type="text" name="code" id="password" class="form-control" placeholder="请输入验证码" style='float:left;'>
		                <img src="{{ url('/admin/captch').'/'.time() }}" style='float:left; margin-left:20px;' onclick='change(this)'>
		              </div>              
		          </div>

		          <div class="form-group">
		            <div class="col-lg-4 col-lg-offset-1">
		                <input type="submit" value="登录" class="btn btn-danger btn-lg">
		                <span class="text"></span>              
		            </div>

		          </div>


		    </form>
		    
	</div>
	<div class="rightpic">
		<div id="container">
			<!-- <img src="picture/1.jpg" alt="" width="500px" height="330px"> -->
		</div>
	</div>
</div>

<script src="{{ asset ('admin/public/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset ('admin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset ('admin/public/js/delaunay.js') }}"></script>
<script src="{{ asset ('admin/public/js/TweenMax.js') }}"></script>
<script src="{{ asset ('admin/js/effect.js') }}"></script>

<script src="{{ asset ('admin/js/b_login.js') }}"></script>	
<script type="text/javascript">
	function change(ob){
		ob.src="{{ url('/admin/captch').'/' }}"+Math.random();
	}
</script>
</body>
</html>