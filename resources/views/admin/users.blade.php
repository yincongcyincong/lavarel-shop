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
		<h1>超级用户信息管理</h1>
		<form action='/admin/users' method='get'>
            <div class='media-body'>
                <input type='text' class='form-control m-b-5' name='Cname' placeholder='超级用户名'>
                <input type='submit' class='btn' value='搜索'>
            </div>
                        
        </form>
		<table width='700' border='0'>
			<tr>
				<th id="aa">管理员号</th>
				<th id="aa">超级用户名</th>
				<th id="aa">密&nbsp;&nbsp;&nbsp;码</th>
				<th id="aa">操作</th>
			</tr>
			@foreach($list as $v)
			<tr>
				<td>{{ $v->Cid }}</td>
				<td>{{ $v->Cname }}</td>
				<td>{{ $v->Cpwd }}</td>
				<td>
					<a href="/admin/users/create" style="color:#fff;">添加</a>
					<a href="/admin/users/{{ $v->Cid }}/edit" style="color:#fff";>修改</a>
					<a href="javascript:doDel({{ $v->Cid }})" style="color:#fff">删除</a>
				</td>
			</tr>
		    @endforeach
		</table>
			{{ $list->appends($where)->links() }}
	</center>
	<script type="text/javascript">
		function doDel(Cid)
		{
			if(confirm('确定要删除吗？')){
				var form = document.myform;
				form.action = '/admin/users/'+Cid;
				form.submit();
			}
		}
	</script>
@endsection
