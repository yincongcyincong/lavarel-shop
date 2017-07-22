@extends('admin.base.index')

@section('content')
    <ol class="breadcrumb" style='background-color:rgba(0,0,0,0.1);'>
      <li><a href="{{ url('admin/indent') }}" style="color:white;">订单管理</a></li>
      <li><a href="{{ url('admin/indent') }}/{{ $data->Bid }}" style="color:white;">订单详细信息</a></li>
      <li class="active" >订单修改</li>
    </ol>
    <form action="/admin/indent/{{ $data->Bid }}" method='post' style='padding-left:400px;margin-top:100px;'>
        <input type="hidden" name='_method' value='put'>
        {{ csrf_field() }}
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>收货人</label>
            <input type="text" class="input-sm form-control mask-date" value='{{ $data->Bconsignee }}' name='Bconsignee' >
        </div><br><br><br><br>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>收货地址</label>
            <input type="text" class="input-sm form-control mask-date" value='{{ $data->Baddress }}' name='Baddress'>
        </div><br><br><br><br>
        <div class="col-md-3 m-b-15">
            <label style='color:white;'>收货电话</label>
            <input type="text" class="input-sm form-control mask-date" value='{{ $data->Bphone }}' name='Bphone'>
        </div><br><br><br><br>
        <button class="btn btn-alt m-r-5" type='submit' style='margin-left:50px;'>修改</button>
    </form>

@endsection
