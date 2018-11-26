<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>心情墙</title>
		<!--<meta http-equiv="refresh" content="1">   刷新-->
	<style>
		.content{
			width:1000px;
			height:500px;
			background-color:white;
			border-style: solid;
			border-width: 1px;
		}
		.contenttop{
			width:1000px;
			height:100px;
		}
		.topleft{
			width:100px;
			height:100px;
			float:left;
		}
		
		.topname{
			border-style: solid;
			border-width:0px 1px 0px 1px;
			width:200px;
			height:100px;
			float:left;
		}
		.name{
			border-style: solid;
			border-width: 1px;
			width:200px;
			height:50px;
			line-height:50px;
			font-size:30px;
		}
		.time{
			width:200px;
			height:50px;
			line-height:50px;
			font-size:30px;
		}
		.contentmid{
			border-style: solid;
			border-width:1px;
			width:1000px;
			height:100px;
			line-height:50px;
			font-size:30px;
		}
		.contentbottom{
			width:300px;
			height:300px;
			float:left;
		}
		.jiange{
			width:50px;
			height:300px;
			background-color:pink;
			float:left;
		}
		.kongbai{
			width:1000px;
			height:20px;
			background-color:pink;
		}
	</style>
	</head>
	<body>
		<?php
			include ("./menu.php");
		?>
		<?php
									//链接数据库
									$link = mysqli_connect("localhost","root","123456");
									mysqli_select_db($link,"xinqingqiang");
									mysqli_set_charset($link,"utf8");
									$sql = "select * from content";
									$result = mysqli_query($link,$sql);
									while($res = mysqli_fetch_assoc($result)){
		?>
		<center>
			<div class="content">
				<div class="contenttop">
					<div class="topleft">
						<img style="width:100px; height:100px;" src="./011.jpg">
					</div>
					<div class="topname">
						<div class="name">
							<tr>
								<td ><?php echo $res['name']?></td>
							</tr>
						</div>
						<div class="time">
							<tr>
							<td ><?php echo $res['time']?>
							</td>
							</tr>
						</div>
					</div>
				</div>
				<div class="contentmid">
					<p><?php echo $res['article']?></p>
				</div>
				<div class="contentbottom">
					<img style="width:300px; height:300px;" src="./upload/<?php echo $res['pictureone']?>">
					
				</div>
				<div class="jiange">
				</div>
				<div class="contentbottom">
					<img style="width:300px; height:300px;" src="./upload/<?php echo $res['picturetwo']?>">
				</div>
				<div class="jiange">
				</div>
				<div class="contentbottom">
					<img style="width:300px; height:300px;" src="./upload/<?php echo $res['picturethree']?>">
				</div>
				
			</div>
		</center>
		<?php 
									}
		?>
	</body>
</html>




<!--<table border="1" width="400" cellspacing="0" bordercolor="pink">
					<tr align="center">
						<td>留言标题</td>
						<td>留言者</td>
						<td>留言内容</td>
						<td>管理</td>
					</tr>
					<?php
						//从liuyanban.db拿留言
						$result = file_get_contents("./liuyanban.db");
							//var_dump($result);
						if($result == ""){
							die("没有留言，请去留言");
						}
						//去掉右边多的一个符号
						$result = rtrim($result,'@');
						//拆分字符串为数组
						$result = explode('@',$result);
							//var_dump($result);
						
						//使用循环遍历一条条留言
						foreach ($result as $key=>$value){
								//var_dump($value);
							//拆分数组中的字符串为另一数组 
							$array = explode('#',$value);
								//var_dump($array);
							echo "<tr align='center'>";
								echo"<td>".$array[0]."</td>";
								echo"<td>".$array[1]."</td>";
								echo"<td>".$array[2]."</td>";
								echo"<td><a href='delete.php?id={$key}'>删除</a></td>";
							echo"</tr>";
						}
					?>
				</table>-->