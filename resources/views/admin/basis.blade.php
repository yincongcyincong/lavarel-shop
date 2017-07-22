@extends('admin.base.index')

@section('content')
	    <center>
	    <style>
			#aa,td,h1{
				color:#fff;
				text-align: center;
			}
	    </style>
	    <form action='' method='post' name='myform'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
		    <input type='hidden' name='_method' value='delete'>
	    </form>
		<h1>用户基本信息管理</h1>
		<form action='/admin/basis' method='get'>
            <div class='media-body'>
                <input type='text' class='form-control m-b-5' name='Ufname' placeholder='按真实姓名搜索'>
                <input type='submit' class='btn' value='搜索'>
            </div>
        </form>
		<table width='900' height='30' border='0'>
			<tr>
				<th id="aa">用户号&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th id="aa">省&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th id="aa">市&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th id="aa">区(县)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th id="aa">联系电话</th>
				<th id="aa">真实姓名</th>
				<th id="aa">收货地址</th>
				<th id="aa">邮政编码</th>
			</tr>
			@foreach($list as $v)
			<tr>
				<td>{{ $v->Uid }}</td>
				<td>{{ $v->Ufsheng }}</td>
				<td>{{ $v->Ufshi }}</td>
				<td>{{ $v->Uzone }}</td>
				<td>{{ $v->Ufphone }}</td>
				<td>{{ $v->Ufname }}</td>
				<td>{{ $v->Ufaddress }}</td>
				<td>{{ $v->Ufpostalcode }}</td>
			</tr>
		    @endforeach
		</table>
		{{ $list->appends($where)->links() }}
	</center>
	<script type="text/javascript">
		function doDel(Uid)
		{
			if(confirm('确定要删除吗？')){
				var form = document.myform;
				form.action = '/admin/basis/'+Uid;
				form.submit();
			}
		}
	</script>
@endsection
