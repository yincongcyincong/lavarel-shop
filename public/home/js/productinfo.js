function doChange(ob,id) {
	var color = $(ob).find('p').html();
	
	$('#onlickColor span').appendTo(ob)

	$(ob).siblings('li').attr('id','');
	$(ob).attr('id','onlickColor');

	//对号

	$(ob).siblings('li').children('span').remove()

	$.ajax({
		url:'/home/productinfo/'+id+'/edit',
		type:'get',
		async:true,
		data:{Scolor:color},
		
		success:function(data)
		{
			var img = data.substr('2');
			console.log(data);
			$('#midimg').attr('src','http://lamp167.com/admin/picture/'+img)
		},
		error:function()
		{
			alert('ajax请求失败');
		}
	});
}

function ChooseThisSize(ob){
	$(ob).siblings('li').attr('id','');
	$(ob).attr('id','clickColor');
}

function shoppingCar(id){
	var color = $('#onlickColor').find('p').html();
	var size = $('#clickColor').find('p').html();
	var num = $('#selectedAmount').val();
	console.log(num);
	if (!size) {
		alert('请选择尺码');
	}else{

		$.ajax({
			url:'/home/carinfo/'+id,
			type:'get',
			async:true,
			data:{Scolor:color,Ssize:size,Snum:num},
			
			success:function(data)
			{
				switch(data){
					case '已存在':
						alert('此商品已存在在购物车中');
					break;
					case '添加成功':
						$('#num').html(parseInt($('#num').html())+1);
						alert('添加成功');
					break;
				}
				
			},
			error:function()
			{
				alert('ajax请求失败');
			}
		});
	}
}

function buy(id){
	var color = $('#onlickColor').find('p').html();
	var size = $('#clickColor').find('p').html();
	var num = $('#selectedAmount').val();
	var money = $('#price').html();

	console.log(money);
	if (!size) {
		alert('请选择尺码');
	}else{

		$('#Onum').val(num);
		$('#Scolor').val(color);
		$('#Ssize').val(size);
		$('#Omoney').val(money);
		
		document.buyform.submit();

    }
}