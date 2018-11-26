<head>
	<meta charset="utf-8">
</head>
<?php	
	session_start();
	//判断验证码
	if(strtolower($_POST['code'])!= strtolower($_SESSION['code'])){
		die("验证码错误");
	}
	//判断密码和重复密码
	if($_POST['password']!=$_POST['repass']){
		die("两次输入密码不同，请重新输入！");
	}
	
	
	//1 链接数据库
		$link = mysqli_connect("localhost","root","123456");
	//2 选择数据库
		mysqli_select_db($link,"xinqingqiang");
	//3 设置编码
		mysqli_set_charset($link,"utf8");
		
		//把密码加密
		$password = md5($_POST['password']);
		
	//4 准备插入的sql语句
		$sql = "insert into users(name,username,password) values('{$_POST['name']}','{$_POST['username']}','{$password}')";
		
		$result = mysqli_query($link,$sql);
		if($result) {
			echo "注册成功";
			header("location:./login.php");
		}else{
			echo "失败";
		}
		