@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title">友情链接</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li><a href="{{ url('admin/link') }}" style="color:white;">友情链接</a></li>
      <li class="active" >友情链接修改</li>
    </ol>
    <h4 class="m-t-0 m-b-15" style='color:white;'>
        @if(session('msg'))
            {{ session('msg') }}
        @endif
    </h4>
    <form action="/admin/link/{{ $data->id }}" method='post'>
    {{ csrf_field() }}
    <input type="hidden" name='_method' value='put'>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>网站url</label>
            <input type="text" class="input-sm form-control mask-date" name='url' value='{{ $data->url }}'>
        </div><br><br><br><br>

        <div class="col-md-3 m-b-15">
            <label style='color:white;'>网站名</label>
            <input type="text" class="input-sm form-control mask-date" name='name'  value='{{ $data->name }}'>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;'>修改</button>
    </form>
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