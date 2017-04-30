<?php

include_once "./func.php";
if($_REQUEST[action]=="logout"){
	setcookie("user","");
	setcookie("pw","");
	print "登出OK";
	print "<br><a href=\"login.php\">login</a><br/>";
	exit;
}
if($_REQUEST[user]){
	$r=md5($_POST[pw]);
	//$r= $_POST[pw];

	//if(vaild($_REQUEST[user],$r)){
	if(vaild($_POST[user],$r)){
		//setcookie("user",$_REQUEST[user]);
		setcookie("user",$_POST[user]);
		setcookie("pw",$r);
		//print "登入OK";

		print "<script>location.href='show.php';</script>";
		exit;
	}else{
		print "登入失敗";
	}
}
login($_REQUEST[url]);

?>