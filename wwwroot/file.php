<?php
	include 'db.php';
	if(!$uligon){
		header('Location:/login.php');
		exit;
	}
	if(date('j',$ttitme)>$conf['my']) exit('本月作品'.$conf['my'].'号之后禁止修改！');
$file=$_FILES["file"]["tmp_name"];



//2017.05.02
$img_info = getimagesize($file);
$img_info_height=$img_info['1'];
//end

$imagethumb=$conf['imagethumb'];
$dtsyyy=$conf['syxzssdhsy'];
$sykd=$conf['sykd'];
$sygd=$conf['sygd'];
$syzb=$conf['syzb'];
$syyb=$conf['syyb'];


if(!$file) exit('图片上传失败！');
$image = new imagick($file); 
$syxzsssyxzss=$conf['syxz'];
if($conf['syxzss']) $syxzsssyxzss=rand(-360,360);
if($conf['syxzssf']==1){
$im = new imagick();


//2017.05.02  单条水印

	if($dtsyyy){
		//$syzb=0;
		$sygd=$img_info_height/2+$conf['syybyingg'];
		$syyb=$sygd;
	}
//end

$im->newimage( $sykd, $sygd, new imagickpixel( "none" ) );

$draw = new imagickdraw(); 
$draw->setfillcolor(new imagickpixel( $conf['syys'] ));
//$draw->setgravity(imagick::gravity_northwest);
$draw->setFont('simsun.ttc');
	//$draw->setStrokeWidth(2);
    $draw->setFontSize($conf['syyssiez']);
$waterText=$conf['sy'];
$draw->annotation($syzb,$syyb ,$waterText);
//$draw->setgravity(imagick::gravity_southeast);
//$draw->annotation(5,15 ,'copyright');
$im->drawimage( $draw);


$im->rotateImage(new ImagickPixel('none'), $syxzsssyxzss);

$image = $image->textureimage($im);
}else if($conf['syxzssf']==2){
	$src2 = new Imagick($imagethumb);
	


	if($dtsyyy){
		$src2->thumbnailImage($img_info['0'],$img_info_height/2+$conf['syybyingg']);  
	}
	$src2->rotateImage(new ImagickPixel('none'), $syxzsssyxzss);
	$image = $image->textureimage($src2);
}









//$image->compositeimage($image,imagick::composite_copy,0,0);
//header( "content-type: image/{$image->getimageformat()}" );
$nwff=md5(md5(md5($file).rand(100000,999999).$ttitme).rand(1000000,9999999));
$immmok= $image->writeimage('u/'.$nwff.'.jpg');
$image->clear();
$image->destroy();
//imagejpeg($im);

if($immmok){
	$stmt = $dbh->prepare("INSERT INTO p (uid, url,ctime,dtime,mtime,dday,zt,bz,sm,bumen) VALUES (:uid, :url,:ctime,:dtime,:mtime,:dday,:zt,:bz,:sm,:bumen)");
	$stmt->bindParam(':uid', $uligon);
	$stmt->bindParam(':url', $nwff);
	$stmt->bindParam(':sm', $_POST['sm']);
	$stmt->bindParam(':zt', $stmtusernewbbttt['bt']);
	$stmt->bindParam(':bz', $stmtusernewbbttt['bz']);
	$stmt->bindParam(':bumen', $user_arr['bumen']);
	/*$dtime=date('Y',$ttitme);
	$mtime=date('n',$ttitme);
	$ctime=$ttitme;
	$dday=date('j',$ttitme);*/
	
	//$ttitme=$ttitme;
	$ctime=$ttitme;
	$dtime=date('Y',$ttitme);
	$mtime=date('n',$ttitme);
	$dday=date('j',$ttitme);
	
	
	
	$stmt->bindParam(':dtime', $dtime);
	$stmt->bindParam(':mtime', $mtime);
	$stmt->bindParam(':ctime', $ctime);
	$stmt->bindParam(':dday', $dday);
	$stmt->execute();
	
	$title='会员管理';
	$mmmdddhh='up';
	include 'headu.php';
	echo '<p style="margin-top: 29px;"><i class="fi-check" style="color:green;"></i>上传成功！3秒后跳转！</p><script>setTimeout("location.href = \'u.php?mm=by\';",2000);</script>';
	

	include 'foot.php';
	
	
	exit;
}
exit('上传失败！');
?>