<!DOCTYPE html>
<html>
	<head>
		<title>登录</title>
		<meta charset="utf-8">
		<style>
			body{
				margin:0px;
				padding:0px;
				background:url("timg.jpg") no-repeat;
			}
			.top{
				width:1920px;
				height:50px;
				background-color:#dad6c4;
			}
			.topleft{
				width:270px;
				height:50px;
				margin-left:200px;
				float:left;
				
			}
			.topleft p{
				font-size:20px;
				color:#5d5f62;
			}
			.topright{
				width:200px;
				height:50px;
				margin-right:200px;
				float:right;
			}
			.topright p{
				font-size:20px;
				color:#5d5f62;
				float:left;
				padding-left:20px;
			}
			.content{
				width:1920px;
				height:900px;
				
			}
			.zhongjian{
				width:920px;
				height:500px;
				margin:0px auto;
				margin-top:200px;
			}
			.zhongjianzuo{
				width:300px;
				height:500px;
				background-color:rgba(10,139,212,0.5);
				float:left;
				border-top-left-radius:20px;
				border-bottom-left-radius:20px;
			}
			.zhongjianshang{
				width:200px;
				height:80px;
				margin-top:100px;
				margin-left:50px;
				color:white;
				
			}
			
			.zhongjianxia{
				width:160px;
				height:80px;
				position:relative;
				top:200px;
				left:70px;
				color:white;
				
			}
			.zhongjianyou{
				width:620px;
				height:500px;
				background-color:rgba(222,222,212,0.5);
				float:left;
				border-top-right-radius:20px;
				border-bottom-right-radius:20px;
			}
			.login{
				width:200px;
				height:100px;
				margin-left:50px;
			}
			.login p{
				color:#2591b7;
				font-size:50px;
			}
 			.name{
				width:500px;
				height:120px;
				margin-left:50px;
				position:relative;
				top:-30px;
				border-radius:20px;
				background-color:rgba(10,139,212,0.5);
			}
			.name p{
				float:left;
				color:white;
				font-size:20px;
				position:relative;
				left:80px;
				margin-top:10px;
			}
			.name a{
				color:white;
			}
			.code{
				width:500px;
				height:100px;
				margin-left:50px;
				position:relative;
				top:10px;
				border:1px solid black;
				border-radius:20px;
				background-color:rgba(10,139,212,0.5);
			}
		</style>
	</head>
	<body>
	
		<div class="top">
			<div class="topleft">
				<p>Welcome to liuyanban3.0</p>
			</div>
			<div class="topright">
				<p>中文</p><p>|</p>&nbsp;&nbsp;<p>英文</p>
			</div>
		
		</div>
		<div class="content"> 
			<div class="zhongjian">
				<div class="zhongjianzuo">
					<div class="zhongjianshang">
					<h1>Message Board</h1>
					</div>
					<div class="zhongjianxia">
					<h1>Welcome</h1>
					</div>
				</div>
				<div class="zhongjianyou">
					<div class="login">
						<p>Login</p>
					</div>
					<form action="dologin.php" method="post">
						
						<div class="name">
							<center>
							<p><b>请输入账号：</b><input type="text" name="username" style="width:200px;height:20px;"></p><br><br>
							<p><b>请输入密码：</b><input type="password" name="password" style="width:200px;height:20px;"></p><br>
							</center>
						</div>
						<div class="name">
							<center>
								<img src="./code.php" onclick="code()" id="code">
								<p><b>请输入验证码：</b><input type="text" name="code" style="width:200px;height:20px;"></p>
							</center>
						</div>
						<div>
							<button type="submit"  style="width:200px; height:50px;border-radius:20px;background-color:#00bfff;float:left;position:relative;top:10px;left:60px;font-size:20px;color:white;">登录</Button>
							<a href="./register.php" style="width:200px; height:50px;border-radius:20px;background-color:#00bfff;float:left;position:relative;top:10px;left:150px;font-size:20px;color:white;text-decoration:none;text-align:center;line-height:50px;">注册</a>
							
						</div>
					</form>
				</div>
			</div>
		</div>
		<script>
	function code()
	{
		document.getElementById('code').src = "./code.php?"+Math.random();
	}
</script>
	</body>
</html>



	