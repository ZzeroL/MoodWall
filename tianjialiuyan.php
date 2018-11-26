<?php
	//接受liuyan.php 这个页面提交过来的留言数据
		//var_dump($_POST);
		
		//验证标题不能为空
		
		if(empty($_POST['name'])){
			header("location:./liuyan.php?e=1");
			exit;
		}
		
		//if(empty($_POST['author'])){
			//header("location:./liuyan.php?e=2");
			//exit;
		
		if(empty($_POST['article'])){
			header("location:./liuyan.php?e=3");
			exit;
		}
	include("./upload.php");
	
	// 把数据处理
	$link = mysqli_connect("localhost","root","123456");
	mysqli_select_db($link,"xinqingqiang");
	mysqli_set_charset($link,"utf8");
	$res = uploadfile($_FILES["pictureone"]);
	$res1 = uploadfile($_FILES["picturetwo"]);
	$res2 = uploadfile($_FILES["picturethree"]);
	if($res['ok?']){
	$name = $_POST['name'];
	$time = $_POST['time'];
	$article =$_POST['article'];
	$pictureone = $res["info"];
	$picturetwo = $res1["info"];
	$picturethree = $res2["info"];
	$sql = "insert into content(name,time,article,pictureone,picturetwo,picturethree)
		values ('{$name}','{$time}','{$article}','{$pictureone}','{$picturetwo}','{$picturethree}')";
	$result = mysqli_query($link,$sql);
	if($result){
			header("location:./index.php");
			
		}else{
			echo "插入失败！";
		}
}else{
		echo"图片上传失败！";
}
?>