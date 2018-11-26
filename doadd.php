<head>
	<meta charset="utf-8">
</head>
<?php
	//接受添加商品的信息
	//包含上传图片函数
	include("./upload.php");
	//执行添加活动文件
	//链接数据库
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"class_web");
	mysqli_set_charset($link,"utf8");
	//图片上传
	$res = uploadfile($_FILES["picture"]);
	if($res['ok?']){
		//准备插入sql语句
		$summary = $_POST["summary"];
		$name = $_POST["actname"];
		$plan = $_POST["plan"];
		$content = $_POST["content"];
		$rule = $_POST["rule"];
		$turn = $_POST["turn"];
		$picture = $res["info"];
		$people = $_POST["people"];
		
		$sql = "insert into addcontent(actname,summary,plan,content,rule,turn,picture,people)
		values ('{$name}','{$summary}','{$plan}','{$content}','{$rule}','{$turn}','{$picture}','{$people}')";
		//执行sql语句
		$result = mysqli_query($link,$sql);
		if($result){
			header("location:./blog.php");
			
		}else{
			echo "插入失败！";
		}
	}else{
		echo"图片上传失败！";
	}
	