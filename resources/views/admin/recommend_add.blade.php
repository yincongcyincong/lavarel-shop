@extends('admin.base.index')

@section('content')

<div class="block-area" id="defaultStyle" style='margin-top:60px;'>
    <h3 class="block-title" style='margin-left:20px;color:white;'>首页推荐信息</h3>
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li><a href="{{ url('admin/recommend') }}" style="color:white;">首页推荐</a></li>
      <li class="active" >添加首页推荐</li>
    </ol>
    @if (count($errors) > 0)
        <div class="alert alert-danger" >
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/recommend" method='post'>
    {{ csrf_field() }}
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>商品编号</label>
            <input type="text" class="input-sm form-control mask-date" name='Sid'>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:20px;'>添加</button>
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