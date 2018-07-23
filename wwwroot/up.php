<?php
session_start();
	include 'db.php';
	if(!$uligon){
		header('Location:/login.php');
		exit;
	}
	
	$title='上传/修改';
	$mmmdddhh='up';
	include 'headu.php';
?>

<p style="margin-top: 29px;"><i class="fi-upload"></i>上传修改作品</p>

<form action="file.php" class="ffurr" method="POST" id="upprrsss" name="upprrsss" enctype="multipart/form-data" target="hidden_iframe">
<input type="hidden" name="<?php echo ini_get("session.upload_progress.name"); ?>" value="test" />
<p class="pb10">
<label for="file" style="font-size: 14px;"><i class="fi-photo"></i>请选择上传作品图片:</label>
<input type="file" name="file" id="file" /> </p>
<p class="pb10">
<label for="file" style="font-size: 14px;"><i class="fi-paperclip"></i>作品备注说明:</label>
<input type="text" name="sm" value="" /> </p>

<p class="pb10" style="color:red;display:none;" id="zesscc">正在上传...</p>

<div id="progress" class="progress" style="margin-bottom:15px;display:none;height: auto;">
        <!--<div class="bar" style="width:0%;"></div>-->
        <div class="label" style="width:0%;">0%</div>
</div>

<p class="pb10" style="<?php
	if(date('j',$ttitme)>($conf['my']-1)) echo 'display:none;';
?>">
<input type="button" id="submitdsfsd" value="上传" class="inss button" onclick="dasfas();" /></p>
<p class="pb10" style="font-size: 12px;color: #999;"><i class="fi-info" style="font-size: 14px;color: #000;"></i><span style="<?php
	if(date('j',$ttitme)>($conf['my']-1)) echo 'color:red;';
?>">每月作品<?php
	echo $conf['my'];
?>号之后禁止修改</span></p>
</form>


<iframe id="hidden_iframe" name="hidden_iframe" src="about:blank" style="display:none;"></iframe>

<script>

function fetch_progress(){
        $.get('progress.php',{ '<?php echo ini_get("session.upload_progress.name"); ?>' : 'test'}, function(data){
                var progress = parseInt(data);
                $('#progress .label').html(progress + '%');
                $('#progress .label').css('width', progress + '%');
                //$('#progress .bar').css('width', progress + '%');

                if(progress < 100){
                        setTimeout('fetch_progress()', 100);
                }else{
				$('#zesscc').hide();
            $('#progress .label').html('上传完成!');
			
			setTimeout(function(){
				location.href = '/sybyzt.php';
			}, 1500);
			
        }
        }, 'html');
}

/*$('#upprrsss').submit(function(){
		alert(321);
        $('#progress').show();
        setTimeout('fetch_progress()', 100);
});*/


function dasfas(){
	var file=$('#file').val();
	if(file){
		$('#submitdsfsd').hide();
		$('#zesscc').show();
		document.getElementById("upprrsss").submit();
		
        $('#progress').show();
        setTimeout('fetch_progress()', 100);
		
	}else{
		layer.alert('请选择要上传的作品图片',{title:'提示'});    
	}
}
</script>

<?php
	include 'foot.php';
	?>