<?php	//这个页面是退出页面
		//退出的原理很简单，在登录页面是判断$_SESSION['username'] 空还是不空，如果是空，那么就是没有登录，提出的思路就是给他变空了
		session_start();
		$_SESSION['username'] = null;
		header("location:../index.php");