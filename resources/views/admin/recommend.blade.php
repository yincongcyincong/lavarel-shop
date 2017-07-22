@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title" style='color:white;'>首页推荐信息</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li class="active" >首页推荐信息</li>
    </ol>
    <h3 class="m-t-0 m-b-15" style='color:white;'>
        @if(session('msg'))
            {{ session('msg') }}
        @endif
    </h3>
    <form action="" method='post' name='myform'>
        <input type="hidden" name='_method' value='delete'>
        {{ csrf_field() }}
    </form>
    <form action="/admin/recommend" method='get'>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>商品号搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='Sid'>
        </div><br><br><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;margin-top:-60px;'>搜索</button>
    </form>
    <a href="{{ url('admin/recommend/create') }}">添加首页推荐信息</a>
    <table class="table tile" style='color:white;'>
        <thead>
            <tr >
                <th>编号</th>
                <th>商品名</th>
                <th>商品价格</th>
                <th>商品类型</th>
                <th>商品图片</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{ $v->Sid }}</td>
                <td>{{ $v->Sname }}</td>
                <td>{{ $v->Sprice }}</td>
                <td>{{ $v->Stype }}</td>
                <td><img src="{{ url('admin/picture') }}/{{ $v->Simgpath }}" alt=""></td>
                <td>
                    <a href="javascript:doDel({{ $v->Sid }});">删除</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $Sid->appends($where)->links() }}
</div>
<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
	
	var head = $(".headnav li:eq(3)")
	var index = head.index();
	//alert(index);
	head.addClass("current_menu").siblings().removeClass('current_menu');
	//头部导航和左边导航对应
	$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

    function doDel(Sid)
    {
        if (confirm('确定要删除?')) {
            var form = document.myform;
            form.action = '/admin/recommend/'+Sid;
            form.submit();
        };
    }

</script>

@endsection