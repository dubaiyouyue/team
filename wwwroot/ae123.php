<?php
	include 'db.php';
	if(!$uligon){
		header('Location:/login.php');
		exit;
	}
	if($user_arr['admim']!=1) exit('没有权限！');
	
	$ssid=$_GET['id']+0;
	$stmt = $dbh->prepare('SELECT * from user where id=:ssid limit 1');
	$stmt->execute(array('ssid' => $ssid));

	$sssddd=array();
	foreach ($stmt as $row) {
		$sssddd[]=$row;
	}
	
	$sssddd=$sssddd['0'];
	
	$title='会员管理';
	$mmmdddhh='user';
	include 'head.php';
?>
<p style="margin-top: 29px;"><i class="fi-puzzle"></i>会员管理</p>

<form action="aep.php" method="POST">
<p><i class="fi-torso"></i>用户: <input readonly="readonly" style="border: none;" name="name" value="<?php
	echo $sssddd['name'];
?>"></p>
<p><i class="fi-save"></i>密码: <input type="text" name="pass">（留空不修改）</p>
<input type="hidden" name="id" value="<?php
	echo $ssid;
?>">
<p><i class="fi-results-demographics"></i>部门: <select name="bumen">
<option value="<?php
	$bumen_arr[($)sssddd['bumen']+0]
	if($sssddd['bumen']==1) echo '1';
	else if($sssddd['bumen']==2) echo '2';
	else if($sssddd['bumen']==3) echo '3';
	else if($sssddd['bumen']==4) echo '4';
?>"><?php
	if($sssddd['bumen']==1) echo '设计部';
	else if($sssddd['bumen']==2) echo '网页部';
	else if($sssddd['bumen']==3) echo '商务部';
	else if($sssddd['bumen']==4) echo '策划部';
	else if($sssddd['bumen']==3) echo '商务部';
?> </option>
	<option value ="0" <?php
	if($sssddd['bumen']==3) echo 'style="display:none;"';?>>商务部</option>
  <option value ="1" <?php
	if($sssddd['bumen']==1) echo 'style="display:none;"';?>>设计部</option>
  <option value ="2" <?php
	if($sssddd['bumen']==2) echo 'style="display:none;"';?>>网页部</option>
</select></p>

<p><i class="fi-shield"></i>权限: <input type="radio" <?php
	if($sssddd['admim']==0) echo 'checked="checked"';
?> name="admim" value="0" />员工 <input type="radio" <?php
	if($sssddd['admim']==1) echo 'checked="checked"';
?> name="admim" value="1" />管理员</p>

<p><i class="fi-lock"></i>审核: <input type="radio" <?php
	if($sssddd['satus']==0) echo 'checked="checked"';
?> name="satus" value="0" />禁用 <input type="radio" name="satus" <?php
	if($sssddd['satus']==1) echo 'checked="checked"';
?>  value="1" />通过</p>

<input type="submit" value="修改" class="button success">
</form>

<?php
	include 'foot.php';
	?>