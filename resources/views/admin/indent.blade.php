@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title" style='color:white;'>订单信息</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li class="active" >订单信息</li>
    </ol>
    <h3 class="m-t-0 m-b-15" style='color:white;'>
        @if(session('msg'))
            {{ session('msg') }}
        @endif
    </h3>
    <form action="/admin/indent" method='get'>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>用户名搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='Uname'>
        </div><br><br><br><br>

        <div class="col-md-3 m-b-15">
            <label style='color:white;'>订单是否到达</label>
            <input type="radio"  name='deliver' value='0'><span style='color:white;'>未发货</span>
            <input type="radio"  name='deliver' value='1'><span style='color:white;'>已发货</span>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;margin-top:-60px;'>搜索</button>
    </form>
    <table class="table tile" style='color:white;'>
        <thead>
            <tr >
                <th>编号</th>
                <th>用户名</th>
                <th>订单时间</th>
                <th>快递状态</th>
                <th>订单详细信息</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @for($i=0;$i < $num;$i++)
            <tr>
                <td>{{ $data[$i]->Bid }}</td>
                <td>{{ $Uname[$i]->Uname }}</td>
                <td>{{ $data[$i]->Bdate }}</td>
                @if($data[$i]->Bdelivered==0)
                <td class='post'>未发货</td>
                @else
                <td class='post'>已发货</td>
                @endif
                <td>
                    <a href="{{ url('/admin/indent') }}/{{$data[$i]->Bid}}" style='color:white'>订单详细信息</a>
                </td>
                <td>
                    <a href="javascript:doDel({{ $data[$i]->Bid }});"  style='color:white'>删除</a>
                    @if($data[$i]->Bdelivered == 0)
                    <a onclick = "doPost(this,{{ $data[$i]->Bid }},{{ $data[$i]->Bdelivered }});" style='color:white;cursor:pointer;'>确认发货</a>
                    @endif
                </td>
            </tr>
        @endfor
        </tbody>
    </table>
    {{ $data->appends($where)->links() }}
</div>
<form action="" method='post' name='myform'>
    <input type="hidden" name='_method' value='delete'>
    {{ csrf_field() }}
</form>
<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
	
	var head = $(".headnav li:eq(2)")
	var index = head.index();
	//alert(index);
	head.addClass("current_menu").siblings().removeClass('current_menu');
	//头部导航和左边导航对应
	$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

    function doDel(id){
        if (confirm('你确定要删除吗')) {
            var form = document.myform;
            form.action = '/admin/indent/'+id;
            form.submit();
        };
    }

    function doPost(ob,id,deliver)
    {
        
        if (confirm('你确定已经发货了吗?')) {
            $.ajax({
                url:'/admin/post/'+id,
                type:'get',
                async:true,
                data:{'deliver':deliver},
                success:function(data)
                {
                
                   $(ob).html('');
                   $(ob).parents('td').siblings('.post').html('已发货'); 
                   
                },
                error:function()
                {
                    alert('ajax请求失败');
                }
            });
        };
    }

</script>

@endsection