<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset='utf-8'>
		<script type="text/javascript" src="{{  url('home/js/jquery-1.8.3.min.js')  }}"></script>

		<meta name="csrf-token" content="{{ csrf_token() }}">

	</head>
	<body>
		<center>
		<form action="{{ url('indent') }}/{{ $data->id }}" method="post">
         {{ csrf_field() }}
        
		收货人姓名:<input type='text' name='Ufname' value='{{ $data->Ufname }}'>
		<br><br>
		收货人电话:<input type='text' name='Ufphone' value='{{ $data->Ufphone }}'>
		<br><br>
		收货人地址:
		省:<input type="text" name='Ufsheng' value='{{ $data->Ufsheng }}'>
		市: <input type="text" name='Ufshi' value='{{ $data->Ufshi }}'>
		区: <input type="text" name='Uzone' value='{{ $data->Uzone }}'>
		<input type='text' name='Ufaddress' value='{{ $data->Ufaddress }}'>
		<br><br>
		邮政编码:<input type="text" name='Ufpostalcode' value='{{ $data->Ufpostalcode }}'><br><br>
		<input type='submit' value='修改'>
		</form>
		</center>
	</body>
	<script type="text/javascript">
		
	</script>
</html>
