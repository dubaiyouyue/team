<?php
	include 'db.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<!-- saved from url=(0064)http://www.17sucai.com/preview/137615/2015-01-15/demo/index.html -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><META content="IE=11.0000" 
http-equiv="X-UA-Compatible">
 
<META http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<TITLE>注册</TITLE> 
<SCRIPT src="js/jquery-1.9.1.min.js" type="text/javascript"></SCRIPT>
 
<STYLE>
body{
	background: #ebebeb;
	font-family: "Helvetica Neue","Hiragino Sans GB","Microsoft YaHei","\9ED1\4F53",Arial,sans-serif;
	color: #222;
	font-size: 12px;
}
*{padding: 0px;margin: 0px;}
.top_div{
	background: #008ead;
	width: 100%;
	height: 400px;
}
.ipt{
	border: 1px solid #d3d3d3;
	padding: 10px 10px;
	width: 290px;
	border-radius: 4px;
	padding-left: 35px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
	-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
	-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
	transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s
}
.ipt:focus{
	border-color: #66afe9;
	outline: 0;
	-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)
}
.u_logo{
	background: url("images/username.png") no-repeat;
	padding: 10px 10px;
	position: absolute;
	top: 43px;
	left: 40px;

}
.p_logo{
	background: url("images/password.png") no-repeat;
	padding: 10px 10px;
	position: absolute;
	top: 12px;
	left: 40px;
}
a{
	text-decoration: none;
}
.tou{
	background: url("images/tou.png") no-repeat;
	width: 97px;
	height: 92px;
	position: absolute;
	top: -87px;
	left: 140px;
}
.left_hand{
	background: url("images/left_hand.png") no-repeat;
	width: 32px;
	height: 37px;
	position: absolute;
	top: -38px;
	left: 150px;
}
.right_hand{
	background: url("images/right_hand.png") no-repeat;
	width: 32px;
	height: 37px;
	position: absolute;
	top: -38px;
	right: -64px;
}
.initial_left_hand{
	background: url("images/hand.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -12px;
	left: 100px;
}
.initial_right_hand{
	background: url("images/hand.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -12px;
	right: -112px;
}
.left_handing{
	background: url("images/left-handing.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -24px;
	left: 139px;
}
.right_handinging{
	background: url("images/right_handing.png") no-repeat;
	width: 30px;
	height: 20px;
	position: absolute;
	top: -21px;
	left: 210px;
}

</STYLE>
     
<SCRIPT type="text/javascript">
$(function(){
	//得到焦点
	$("#password").focus(function(){
		$("#left_hand").animate({
			left: "150",
			top: " -38"
		},{step: function(){
			if(parseInt($("#left_hand").css("left"))>140){
				$("#left_hand").attr("class","left_hand");
			}
		}}, 2000);
		$("#right_hand").animate({
			right: "-64",
			top: "-38px"
		},{step: function(){
			if(parseInt($("#right_hand").css("right"))> -70){
				$("#right_hand").attr("class","right_hand");
			}
		}}, 2000);
	});
	//失去焦点
	$("#password").blur(function(){
		$("#left_hand").attr("class","initial_left_hand");
		$("#left_hand").attr("style","left:100px;top:-12px;");
		$("#right_hand").attr("class","initial_right_hand");
		$("#right_hand").attr("style","right:-112px;top:-12px");
	});
});
</SCRIPT>
 
<META name="GENERATOR" content="MSHTML 11.00.9600.17496"></HEAD> 
<BODY><form name="myform" id="myform" action="redb.php" method="POST">
<DIV class="top_div"></DIV>
<DIV style="background: rgb(255, 255, 255); margin: -100px auto auto; border: 1px solid rgb(231, 231, 231); border-image: none; width: 400px; height: 200px; text-align: center;">
<DIV style="width: 165px; height: 96px; position: absolute;">
<DIV class="tou"></DIV>
<DIV class="initial_left_hand" id="left_hand"></DIV>
<DIV class="initial_right_hand" id="right_hand"></DIV></DIV>

<?php
	if(!$conf['re']){
		echo '<P style="padding: 30px 0px 10px; position: relative;color:red;">网站已经关闭注册功能，请联系管理员。</p><div style="display:none;">';
	}
?>

<P style="padding: 30px 0px 10px; position: relative;"><SPAN 
class="u_logo"></SPAN>         <INPUT class="ipt" type="text" placeholder="请输入用户名" id="yhm" name="yhm" value=""> 
    </P>
<P style="position: relative;padding-bottom:10px;"><SPAN class="p_logo"></SPAN>         
<INPUT class="ipt" id="password" name="password" type="text" placeholder="请输入密码" value=""> </P>

<DIV style="height: 50px; line-height: 50px; margin-top: 30px; border-top-color: rgb(231, 231, 231); border-top-width: 1px; border-top-style: solid;">
<P style="margin: 0px 35px 20px 45px;">
           <SPAN style="float: right;"><A style="color: rgb(204, 204, 204); margin-right: 10px;" 
href="/login.php">登录 </a>

<input type="submit" style="background: rgb(0, 142, 173); padding: 7px 10px; border-radius: 4px; border: 1px solid rgb(26, 117, 152); border-image: none; color: rgb(255, 255, 255); font-weight: bold;"  value="注册" />

             
           </SPAN>         </P>
		   
<?php
	if(!$conf['re']){
		echo '</div>';
	}
?>
		   
		   </DIV></DIV>
		   <div style="text-align:center;">

</div></form>
<script>
function wjmm(){
	alert('请联系管理员重置密码。');
}
function zc(){
	var yhm=$('#yhm').val();
	var password1=$('#password1').val();
	var password2=$('#password2').val();
}
</script>


<script>
var loadinggif='data:image/gif;base64,R0lGODlhEAAQALMPAHp6evf394qKiry8vJOTk83NzYKCgubm5t7e3qysrMXFxe7u7pubm7S0tKOjo////yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJCAAPACwAAAAAEAAQAAAETPDJSau9NRDAgWxDYGmdZADCkQnlU7CCOA3oNgXsQG2FRhUAAoWDIU6MGeSDR0m4ghRa7JjIUXCogqQzpRxYhi2HILsOGuJxGcNuTyIAIfkECQgADwAsAAAAABAAEAAABGLwSXmMmjhLAQjSWDAYQHmAz8GVQPIESxZwggIYS0AIATYAvAdh8OIQJwRAQbJkdjAlUCA6KfU0VEmyGWgWnpNfcEAoAo6SmWtBUtCuk9gjwQKeQAeWYQAHIZICKBoKBncTEQAh+QQJCAAPACwAAAAAEAAQAAAEWvDJORejGCtQsgwDAQAGGWSHMK7jgAWq0CGj0VEDIJxPnvAU0a13eAQKrsnI81gqAZ6AUzIonA7JRwFAyAQSgCQsjCmUAIhjDEhlrQTFV+lMGLApWwUzw1jsIwAh+QQJCAAPACwAAAAAEAAQAAAETvDJSau9L4QaBgEAMWgEQh0CqALCZ0pBKhRSkYLvM7Ab/OGThoE2+QExyAdiuexhVglKwdCgqKKTGGBgBc00Np7VcVsJDpVo5ydyJt/wCAAh+QQJCAAPACwAAAAAEAAQAAAEWvDJSau9OAwCABnBtQhdCQjHlQhFWJBCOKWPLAXk8KQIkCwWBcAgMDw4Q5CkgOwohCVCYTIwdAgPolVhWSQAiN1jcLLVQrQbrBV4EcySA8l0Alo0yA8cw+9TIgAh+QQFCAAPACwAAAAAEAAQAAAEWvDJSau9WA4AyAhWMChPwXHCQRUGYARgKQBCzJxAQgXzIC2KFkc1MREoHMTAhwQ0Y5oBgkMhAAqUw8mgWGho0EcCx5DwaAUQrGXATg6zE7bwCQ2sAGZmz7dEAAA7';

;(function ($) {
    $.fn.tishicengjsqiu = function() {
        var mycars = new Array();
        //name值 对应提示
        mycars['yhm'] = "请输入用户名";
        mycars['password'] = "请输入密码";
        mycars['yb'] = "请填写邮政编码";
        mycars['xm'] = "请填写收货人姓名";
        mycars['tel'] = "请填写11位手机号";
        mycars['content'] = "请填写内容";
        mycars['ucontacts'] = "请填写联系人";
        mycars['address'] = "请填写地址";
        mycars['contacts'] = "请填写联系方式";
        
        $(this).submit(function(){
            //var mycars=new Array();
            

            var sv=true;
            $(this).find('input,textarea,select').each(function (){
               var fname=$(this).attr('name');
               //如果是下拉选项
               sfname=this.nodeName;
              
               if(sfname=='SELECT'){
                    //区分大小写
                    //alert(sfname);
                    //var vsel=$(this+' option:selected').val();
                    var sval=$(this).val();
                    if(sval.length<1){
                        //alert(sval);
                        $(this).css({'color':'red','background':'yellow'});
                        sv=false;
                        return false;
                    }
                    //console.log();
                    
               }
               if(fname && (!$(this).val() || fname=='tel' || fname=='email')){
                    var thisval=$(this).val();
                    if(fname=='tel'){
                        if(thisval.length ==11 && !isNaN(thisval)){
                            //sv=true;
                            return true;
                        }
                    }else if(fname=='email'){
                        
                        //对电子邮件的验证
                        var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
                        if(myreg.test(thisval)){
                            //alert('提示\n\n请输入有效的E_mail！');
                            //myreg.focus();
                            //sv=true;
                            return true;
                        }
                    }
                    $(this).val(mycars[fname]);
                    $(this).css({'color':'red','background':'yellow'});
                    //$(this).attr('id','fotishiidddxzq');
                    $("html,body").animate({scrollTop:$(this).offset().top},100);
                    var sthis=this;
                    var test = setTimeout(function(){
                        //alert($(sthis).attr('name'));
                        $(sthis).removeAttr('style');
                        $(sthis).val('');
                        $(sthis).focus();
                    },1200);
                    
                    //清理方法 
                    //clearTimeout(test);
                    //alert(sv);
                    sv=false;
                    return false;
               }
               //mycars[fname]=$(this).val();
            });
            
            return sv;
        });

        
    }
})(jQuery);
//使用
$('#myform').tishicengjsqiu();
</script>

</BODY></HTML>
