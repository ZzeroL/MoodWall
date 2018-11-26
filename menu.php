<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>心情墙</title>
		<style>
			a{
				font-size:20px;
				color:black;
				text-decoration:none;
			}
			a:hover{
				font-size:24px;
				color:white;
				background-color:#7bb707;
				text-decoration:none;
			}
			.top{
				width:1920px;
				height:50px;
				background-color:#00bfff;
			}
			.huanying{
				width:200px;
				height:50px;
				float:left;
			}
			
		</style>
	</head>
	<body>
		
			<div class="top">
				<div class="huanying">
					<?php	
					session_start();
					if(empty($_SESSION['username'])) {
						echo "<a href='session/login.php'>亲，请登录</a>";
					}else{
						echo "欢迎您，".$_SESSION['username'].","."<a href='./session/logout.php'>退出</a>";
					}
?>
				</div>
			</div>
		<center>
			<div>
			<h1>心情墙</h1>
			<a href="./index.php">123</a>  |  <a href="./01.php">我要留言</a>
			</div>
		</center>
		<hr>
	</body>
