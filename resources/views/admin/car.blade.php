@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title" style='margin-left:20px;color:white;'>购物车信息</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <!-- <li><a href="#" style="color:white;">Home</a></li>
      <li><a href="#" style="color:white;">Library</a></li> -->
      <li class="active" >购物车管理</li>
    </ol>
    <form action="/admin/car" method='get'>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>用户名搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='Uname'>
        </div><br><br><br><br>

        <div class="col-md-3 m-b-15">
            <label style='color:white;'>商品名搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='Pname'>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;'>搜索</button>
    </form>

    <table class="table tile" style='color:white;'>
        <thead>
            <tr >
                <th>编号</th>
                <th>用户名</th>
                <th>商品名</th>
                <th>商品属性</th>
                <th>商品价格</th>
                <th>图片</th>
            </tr>
        </thead>
        <tbody>
        @for ($i = 0;$i < $num;$i++)
            <tr>
                <td>{{ $Cid++ }}</td>
                <td>{{ $Udata[$i]->Uname }}</td>
                <td>{{ $Sdata[$i]->Sname }}</td>
                <td>颜色:{{ $id[$i]->Scolor }},型号:{{ $id[$i]->Ssize }},数量:{{ $id[$i]->Snum }}</td>
                <td>{{ $Sdata[$i]->Sprice }}</td>
                <td><img src="{{ url('admin/picture') }}/{{ $Sdata[$i]->Simgpath }}"></td>
            </tr>
        @endfor 
        </tbody>
    </table>
{{ $id->appends($where)->links() }}
</div>
<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
	
	var head = $(".headnav li:eq(3)")
	var index = head.index();
	//alert(index);
	head.addClass("current_menu").siblings().removeClass('current_menu');
	//头部导航和左边导航对应
	$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');


</script>

@endsection