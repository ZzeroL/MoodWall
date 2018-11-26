<head>
	<meta charset="utf-8">
</head>
<?php
	function uploadfile($file){
		$info = ['info'=> '','ok?' => false];
		//处理错误
		if($file['error']){
			switch($file['error']){
				case 1:
					$info['info'] = "上传的文件超过了php.ini中的upload_max_filesize选项的限制值";
					return $info;
					break;
				case 4:
					$info['info'] = "没有文件被上传";
					return $info;
					break;
				default:
					$info['info'] = "未知错误";
					break;
			}
		}
		//限制允许的文件类型
		$allowtype = ['image/jpeg','image/jpg','image/png','image/gif'];
		if(!in_array($file['type'],$allowtype)){
			$info['info'] = "您上传的文件格式不是图片格式，请重新上传";
			return $info;
		}
		//限制大小
		$allowsize = 10240000;//允许10M
		if($file['size']>$allowsize){
			$info['info'] = "您上传的文件太大，无法上传，请重新上传";
			return $info;
		}
		//处理名字重复覆盖问题，使用一个随机函数随机一个数 然后把这个数使用MD5加密成一个32位的字符串
		$filename = md5(rand(1,9999).time()).".jpeg";
		//把上传的图片从tem临时目录放到服务器上的文件夹中
		move_uploaded_file($file['tmp_name'],"./upload/{$filename}");
		$info['info'] = $filename;
		$info['ok?'] = true;
		return $info;
	}
?>