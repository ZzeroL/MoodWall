<?php	
	session_start();
	if(empty($_SESSION['username'])) {
		echo "<a href='session/login.php'>亲，请登录</a>";
	}else{
		header("location:./liuyan.php");
		echo "欢迎您，".$_SESSION['username'].","."<a href='./session/logout.php'>退出</a>";
	}
?>