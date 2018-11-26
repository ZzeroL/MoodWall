<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
	</head>
	<style>
		.biaoti{
			background-color:#ccccff;
		}
		table{
			border-right:1px solid #666;
			border-bottom:1px solid #666;
			border-left:1px solid #666;
		}
	</style>
	<body>
		<?php
			include ("./menu.php");
		?>
		<center>
			<!--enctype="multipart/form-data"   这条语句必须加在表单提交里，不然图片上传不成功-->
				<form action="tianjialiuyan.php"  method="post" enctype="multipart/form-data">
					<div>
						<table width="800" >
							<tr>
								<td colspan="2"  class="biaoti"><h2 align="center">心情发表</h2></td>
							</tr>
							<tr>
								<td align="right">发表者:</td>
								<td><input type="text" name="name" value="<?php  echo $_SESSION['username'];?>"readonly></td>
							</tr>
							<tr>
								<td><input type="hidden" name="time" value="<?php date_default_timezone_set('PRC'); echo date('Y-m-d'); ?>"></td>
							</tr>
							<tr>
								<td align="right">心情详情:</td>
								<td><textarea rows="10" cols="70" name="article"></textarea></td>
							</tr>
							<tr>
								<td align="right">心情配图：</td>
								<td><input type="file" name="pictureone"></td>
							</tr>
							<tr>
								<td align="right">心情配图：</td>
								<td><input type="file" name="picturetwo"></td>
							</tr>
							<tr>
								<td align="right">心情配图：</td>
								<td><input type="file" name="picturethree"></td>
							</tr>
						</table>
					</div>
					<div>
							<input type="submit" value="立即发表">
					</div>
					<?php
						
						switch(@$_GET['e']){
							case 1:
								echo"<h2>发表者不能为空</h2>";
							break;
							//case 2:
								//echo"<h2>留言者不能为空</h2>";
							//break;
							case 3:
								echo"<h2>心情内容不能为空</h2>";
							break;
							default:
							 break;
						}
					?>
				</form>
		</center>
	</body>
</html>