 <?php 
	//把数据从liuyanban.db中取出来
  $result = file_get_contents("./liuyanban.db");
  //把取出来的大字符串拆分成小的数组
  $result = rtrim($result,"@");
  
  $array = explode('@',$result);
  //index.php页面告诉我删除谁
  $id = $_GET['id'];
  //删除选中数据
  unset($array[$id]);
  //把剩下的数据组成大的字符串放回去
  
	if(empty($array)){
		file_put_contents("./liuyanban.db","");
	}
	else{
		$result = implode($array,"@")."@";
		file_put_contents("./liuyanban.db",$result);
	}
  //如果都删除完了，一条也没有了，就返回一个空字符串回去
	
  
  //页面跳转回index.php
  header("location:./index.php");