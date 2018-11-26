<?php
	session_start();
	header("Content-type:image/jpg");
	//设置画布
	$img = imagecreatetruecolor(400,50);
	//定义颜色
	$green = imagecolorallocate($img,31,249,13);
	$red = imagecolorallocate($img,255,4,4);
	$sred = imagecolorallocate($img,255,49,54);
	$white = imagecolorallocate($img,255,255,255);
	$blue = imagecolorallocate($img,94,210,207);
	$yellow = imagecolorallocate($img,234,228,11);
	$syellow = imagecolorallocate($img,217,217,0);
	$pink = imagecolorallocate($img,239,120,153);
	//给画布填充颜色
	imagefill($img,0,0,$white);
	$suijicolor = imagecolorallocate($img,rand(0,255),rand(0,255),rand(0,255));
	$result = '';
	$res = '';
	$str = "qwertyuioplkjhgfdsazxcvxzQWERTYUIOPLKJHGFDSAZXCVBNM123456789";
	for($i=0;$i<4;$i++){
		$result = substr($str,rand(0,61),1);
		$res .= $result;
		$x=$i*100+rand(10,20);
		$y=rand(30,40);
		$jiaodu = rand(-45,45);
		imagettftext($img,25,$jiaodu,$x,$y,$suijicolor,"./bahnschrift.ttf",$result);
	}
	//把拿到的验证码放到session中
	$_SESSION['code'] = $res;
	//干扰线
	for($i=1;$i<=10;$i++){
		imagearc($img,rand(0,400),rand(0,50),rand(0,400),rand(0,50),rand(0,400),rand(0,50),$suijicolor);
		
	}
	//干扰点
	for($i=1;$i<=1000;$i++){
		imagesetpixel($img,rand(0,400),rand(0,50),$suijicolor);
	}
	//输出图像到浏览器
	imagejpeg($img);