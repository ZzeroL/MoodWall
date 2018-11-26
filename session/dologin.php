<head>
	<meta charset="utf-8">
</head>
<?php
	session_start();
	//执行登录
	//判断账号，密码，验证码是否正确
	//先判断验证码
	if(strtolower($_POST['code'])!= strtolower($_SESSION['code'])){
		die("验证码错误");
	}
	//判断账号
		//1 连接数据库
			$link = mysqli_connect("localhost","root","123456");
		//2 选择数据库
			mysqli_select_db($link,"shop");
		//3 设置编码为utf-8
			mysqli_set_charset($link,"utf8");
		//4 查询输入的账号是否存在
			$sql = "select username from users where username='{$_POST['username']}'";
		//5 把sql语句发送到数据库
			$result = mysqli_query($link,$sql);
		//6 解析一下这个结果对象，看看对象中有没有账号，有就是一个数组没有就是空
			$res = mysqli_fetch_assoc($result);
		//7 判断如果是null 就是没有账号，如果不是null，就是有账号
			if($res!=null){
				//有账号再去查看密码，如果没有账号，就告诉账号不存在
				//判断密码
				$password = md5($_POST['password']);//md5加密
				//查询密码是否正确
				$sql2 = "select password from users where username='{$_POST['username']}' and password='{$password}'";
				//把sql语句发送到数据库
				$result = mysqli_query($link,$sql2);
				//解析一下这个结果对象，看看对象中有没有密码，有就是一个数组，没有就是null
				$res = mysqli_fetch_assoc($result);
				
				if(!($res == null)){
					//密码正确，把用户名放入session中
					$_SESSION['username'] = $_POST['username'];
					//跳转页面到首页
					header("location:../index.php");
				}else{
					//密码错误
					die("密码错误");
				}
			}else{
				die("账号不存在，请联系官方！");
			}
?>