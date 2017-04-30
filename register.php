<?php
print "<h1 align='center' style='padding: 20px;'>Login</h1>";

if($_REQUEST[user]){
	include "config.php";
	//$result=mysql_query("SELECT * FROM `member` WHERE account='$_REQUEST[user]'",$link);
	//$result=mysql_query($link,"SELECT * FROM member");
	$result=mysql_query("SELECT * FROM `member`",$link);
	//print "result ".$result."<br>";
	$used = 0;
	$r=md5($_POST[pw]);

	while( $rows=mysql_fetch_assoc($result))
	{//($result,MYSQLI_ASSOC); )
		//$rows=mysql_fetch_assoc($result);//($result,MYSQLI_ASSOC);
		
		//print "hello ".$rows."<br>";
		//echo $rows." ";
		//echo $rows['account']."<br>";
		$temp1 = $rows['account'];
		$temp2 = $rows['password'];
		$temp3 = $rows['email'];
		//print $temp1." ";
		//print $temp2." ";
		//print $temp3." ";
		//print $_REQUEST[user];
		
		if($temp1==$_REQUEST[user]){
			$used = 1;
		}
		else if($temp2==$r){
			$used = 2;
		}
		//print "<h1>used: ".$used."</h1>";
	}

	switch ($used) {
		case '1':
			print "<script>window.alert('此帳號有人使用');location.href=('register.php');</script>";
			//print "此帳號有人使用";
			break;
		case '2':
			print "<script>window.alert('此密碼有人使用');location.href=('register.php');</script>";
			//print "此密碼有人使用";
			break;
		default:
			print "<script>window.alert('此帳號密碼註冊成功');</script>";
			//print $r;
			$result=mysql_query("INSERT INTO `member` (`account` ,`password` ,`email`,`telephone`) VALUES ( '$_REQUEST[user]','$r','$_POST[email]','')",$link);
			//print "<script>window.alert('此密碼有人使用');location.href=('register.php');</script>";
			break;
	}
	/*

		if($used>0){
			swicth

			print "<script>window.alert('此帳號有人使用');location.href=('register.php');</script>";
			//print "此帳號有人使用";
		}
		else{
			print "此帳號註冊成功";
			$r=md5($_POST[pw]);
			print $r;
			$result=mysql_query("INSERT INTO `member` (`account` ,`password` ,`email`,`telephone`) VALUES ( '$_REQUEST[user]','$r','$_POST[email]','')",$link);
			//$result=mysql_query("INSERT INTO `user` (`id` ,`user` ,`pw`) VALUES ( NULL , '$_REQUEST[user]', '$r');",$link);
			//print "<script>location.href=('login.php');</script>";
		//	print "<script>location.href=('show.php');</script>";
		}*/
}else{
	print '
			<form action="http://140.116.245.148/WebCourse/students/f74031051/final_project/register.php" method="post" >
			<p style="padding: 5px 36%;">
				Username: <input type="text" name="user"><br>
				Password: <input type="password" name="pw"><br>
				Email: <input type="text" name="email"><br>
			</p>
			<p align="center">
				<input type="submit" style="" value="登入">
				<input type="submit" value="註冊">
				</p>
			</form>';
}
?>