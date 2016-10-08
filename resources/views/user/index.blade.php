<!DOCTYPE html>
<html>
	<head>
		<title>学生信息管理</title>
		<meta charset='utf-8'>
		<script type="text/javascript">
			function doDel(id)
			{
				if(confirm("确定要删除吗？")){
					var form = document.myform;
					form.action = '/user/'+id;
					form.submit();
				}
			}
		</script>
	</head>
	<body>
		<center>
			<form action="/user/" method='post' name='myform' style='display:none;'>
				<input type='hidden' name='_token' value='{{ csrf_token() }}'>
				<input type='hidden' name='_method' value='delete'>
			</form>
			<h3>浏览学生信息</h3>
			<table width='700' border='1'>
				<tr>
					<th>学号</th>
					<th>姓名</th>
					<th>性别</th>
					<th>年龄</th>
					<th>操作</th>
				</tr>
				@foreach($list as $user)
					<tr>
						<td>{{ $user->id }}</td>
						<td>{{ $user->name }}</td>
						<td>
							@if($user->sex == 0)
							女
							@else
							男
							@endif
						</td>
						<td>{{ $user->age }}</td>
						<td>
							<a href="javascript:doDel({{ $user->id }})">删除</a>|
							修改
						</td>
					</tr>
				@endforeach
			</table>
		</center>
	</body>
</html>
