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
		<form action="indent" method="post">
         {{ csrf_field() }}
         {{ method_field('PUT') }}
		收货人姓名:<input type='text' name='Ufname'>
		<br><br>
		收货人电话:<input type='text' name='Ufphone'>
		<br><br>
		收货人地址:
		<select id='cid' name='Ufsheng'>
			<option>---请选择---</option>
		</select>

		<input type='text' name='Ufaddress' placeholder="请输入详细地址">
		<br><br>
		邮政编码:<input type="text" name='Ufpostalcode'><br><br>
		<input type='submit' value='添加'>
		</form>
		</center>
	</body>
	<script type="text/javascript">
		$.ajax({
			url:'{{ url("indent/0") }}',
			type:'get',
			async:true,
			dataType:'json',
			success:function(data)
			{
				// console.log(data);
				for (var i = 0; i < data.length; i++) {
					$('#cid').append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
				};
			},
			error:function()
			{
				alert('ajax请求失败');
			}
		});
		
		var num = 1;
		$("select").live("change",function(){
			//删除掉选择的select后面所有的select
			$(this).nextAll('select').remove();
			//获取选择的select的值
			var ob = $(this).val();
			//判断是不是选择的默认，如果是默认就不执行ajax
			if(ob != '---请选择---'){
				//把当前对象保存下来，拿到ajax回调函数中使用
				var sel = $(this);
				//发送ajax
				$.ajax({
					url:'{{ url("indent") }}',
					type:'post',
					async:true,
					data:{upid:ob},
					headers: {
				        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				    },
					dataType:'json',
					success:function(data)
					{
						console.log(data);
						//如果返回的数组长度=0,说明没有下一个select
						if(data.length>0){
							if (data[0].level == 2) {
								//生成一个新的select
								var select = $("<select name='Ufshi'><option>---请选择---</option></select>");
								// console.log(data);
								//把返回回来的数据遍历成option追加到新生成的select内
								for (var i = 0; i < data.length; i++) {
									$(select).append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
								};
								//把新生成的select追加到上一个select的后边
								sel.after(select);
								num++;
							}else if (data[0].level == 3){
								//生成一个新的select
								var select = $("<select name='Uzone'><option>---请选择---</option></select>");
								// console.log(data);
								//把返回回来的数据遍历成option追加到新生成的select内
								for (var i = 0; i < data.length; i++) {
									$(select).append("<option value='"+data[i].id+"'>"+data[i].name+"</option>");
								};
								//把新生成的select追加到上一个select的后边
								sel.after(select);
								num++;
							}
						}
					},
					error:function()
					{
						alert('ajax请求失败');
					}
				});
			}
		})
	</script>
</html>
