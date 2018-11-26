<!DOCTYPE html>
<html>
<head>
	<title>注册页面</title>
	<meta charset="utf-8">
	<style>
		body{
			background:url("a.jpg") no-repeat;
		}
		.content{
			width：500px;
			height:400px;
			background-color:rgba(222,222,212,0.5);
			color:white;
			font-size:20px;
		}
		input{
			width:300px;
			height:50px;
			border-radius:20px;
			background-color:#00bfff;
			font-size:20px;
			color:white;"
		}
		
	</style>
</head>
<body>
	<form action="doresister.php" method="post">
		<center>
		<h2>注册页面</h2>
		<table class="content">
		
		<tr>
			<td>请输入姓名:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>请输入账号:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>请输入密码:</td>
			<td><input type="text" name="password"></td>
		</tr>
		<tr>
			<td>请再次输入密码:</td>
			<td><input type="text" name="repass"></td>
		</tr>
		<tr>
			<td>请输入验证码:</td>
			<td><input type="text" name="code"></td>
		</tr>
		<tr>
			<td>验证码区域:</td>
		</tr>
		<tr>		
			<td>
				<img src="./code.php" onclick="code()" id="code">
			</td>
			
		</tr>
		<tr>
			<td><button type="submit" style="width:400px;height:50px;border-radius20px;background-color:rgba(159,242,240,0.7)">注册</button></td>
		</tr>
		</table>
		</center>
	<form>
	<script>
	function code()
	{
		document.getElementById('code').src = "./code.php?"+Math.random();
	}
</script>
</body>
</html>