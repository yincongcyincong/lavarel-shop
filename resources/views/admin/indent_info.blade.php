@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title" style='color:white;'>订单详细信息</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li><a href="{{ url('admin/indent') }}" style="color:white;">订单管理</a></li>
      <li class="active" >订单详细信息</li>
    </ol>
    <h3 class="m-t-0 m-b-15" style='color:white;'>
        
    </h3>
    <table class="table tile" style='color:white;'>
        <thead>
            <tr >
                <th>收货人</th>
                <th>收货地址</th>
                <th>收货电话</th>
                <th>邮编</th>
                <th>商品名</th>
                <th>购买数量</th>
                <th>送货方式</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->Bconsignee }}</td>
                <td>{{ $data->Baddress }}</td>
                <td>{{ $data->Bphone }}</td>
                <td>{{ $data->Bpostalcode }}</td>
                <td>{{ $Sdata->Sname }}</td>
                <td>{{ $Odata->Onum }}</td>
                <td>{{ $Odata->Dname }}</td>
                <td>
                    <a href="/admin/indent/{{$data->Bid}}/edit" style='color:white'> 修改</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
	
			var head = $(".headnav li:eq(2)")
			var index = head.index();
			//alert(index);
			head.addClass("current_menu").siblings().removeClass('current_menu');
			//头部导航和左边导航对应
			$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

            

</script>

@endsection