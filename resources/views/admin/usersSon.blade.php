@extends('admin.base.index')

@section('content')
	    <center>
	    <style>
			#aa,td,h1{
				color:#fff;
				text-align: center;
			}

			td{
				height:30px;
			}
	    </style>
	    <form action='' method='post' name='myform'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>
		    <input type='hidden' name='_method' value='delete'>
	    </form>
		<h1>普通用户信息管理</h1>
		<form action='/admin/userss' method='get'>
            <div class='media-body'>
                <input type='text' class='form-control m-b-5' name='Uname' placeholder='按普通用户名搜索'>
            </div>
            <input type='submit' class='btn' value='搜索'>
        </form>
		<table width='700' border='0'>
			<tr>
				<th id="aa">用户号</th>
				<th id="aa">普通用户名</th>
				<th id="aa">密&nbsp;&nbsp;&nbsp;码</th>
				<th id="aa">年&nbsp;&nbsp;&nbsp;龄</th>
				<th id="aa">性&nbsp;&nbsp;&nbsp;别</th>
				<th id="aa">角色名字</th>
				<th id="aa">操作</th>
			</tr>
			@foreach($list as $v)
			<tr>
				<td>{{ $v->Uid }}</td>
				<td>{{ $v->Uname }}</td>
				<td>{{ $v->Upwd }}</td>
				<td>{{ $v->Uage }}</td>
				<td>{{ $v->Ufsex }}</td>
				<td>{{ $v->Rname }}</td>
				<td>
					<a href="/admin/userss/create" style="color:#fff;">添加</a>
					<a href="/admin/userss/{{ $v->Uid }}/edit" style="color:#fff";>修改</a>
					<a href="javascript:doDel({{ $v->Uid }})" style="color:#fff">删除</a>
				</td>
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
				form.action = '/admin/userss/'+Uid;
				form.submit();
			}
		}
	</script>
@endsection
