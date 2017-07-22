@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title">友情链接</h3>
    <h4 class="m-t-0 m-b-15" style='color:white;'>
        @if(session('msg'))
            {{ session('msg') }}
        @endif
    </h4>
    <form action="" method='post' name='myform'>
        {{ csrf_field() }}
        <input type="hidden" name='_method' value='delete'>
    </form>
    <form action="{{ url('admin/link') }}" method='get'>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>网站搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='name'>
        </div><br><br><br><br>

        <div class="col-md-3 m-b-15">
            <label style='color:white;'>网站url搜索</label>
            <input type="text" class="input-sm form-control mask-date" name='url'>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;'>搜索</button>
    </form>
    <a href="{{ url('admin/link/create') }}">添加链接</a>
    <table class="table tile" style='color:white;'>
        <thead>
            <tr >
                <th>编号</th>
                <th>网站url</th>
                <th>网站名字</th>
                <th>网站图片</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr>
                <td>{{ $v->id }}</td>
                <td>{{ $v->url }}</td>
                <td>{{ $v->name }}</td>
                <td><img src="{{ asset('/') }}{{ $v->photo }}"></td>
                <td>
                    <a href="{{ url('/admin/link')}}/{{ $v->id }}/edit">修改</a>
                    <a href="javascript:doDel({{ $v->id }});">删除</a>
                    <a href="{{ url('/admin/link/img')}}/{{ $v->id }}">修改图片</a>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
    {{ $data->appends($where)->links() }}
</div>
<script src="{{ asset('admin/public/js/jquery-3.1.1.js') }}"></script>
<script type="text/javascript">
	
	var head = $(".headnav li:eq(3)")
	var index = head.index();
	//alert(index);
	head.addClass("current_menu").siblings().removeClass('current_menu');
	//头部导航和左边导航对应
	$(".leftmenu").find(".leftmenu_0").eq(index).removeClass("hidden").siblings().addClass('hidden');

    function doDel(id){
        var form = document.myform;
        form.action = '/admin/link/'+id;
        form.submit();
    }

</script>

@endsection