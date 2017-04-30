<?php
include_once "./config.inc.php";
include_once "./func.php";

print "$_COOKIE[user]<br>\n"."passwd="."$_COOKIE[pw]<br>\n";
if(vaild($_COOKIE["user"],$_COOKIE["pw"])){
	print " you are ".$_COOKIE["user"]."&nbsp;&nbsp;<br><a href=\"login.php?action=logout\">logout</a><br/>";
}else{
	login("show.php");
}
$result=mysql_query("SELECT * FROM `score` WHERE id=(SELECT id FROM user WHERE user='".$_COOKIE["user"]."')",$link);
?>
<table border="1">
<tr>
<td>id</td><td>english</td><td>chinese</td><td>math</td>
</tr>
<?php
while($rows=mysql_fetch_array($result,MYSQL_ASSOC)){
	print '<tr><td>'.$rows[id]."</td><td>".$rows[eng]."</td><td>".$rows[ch]."</td><td>".$rows[math]."</td></tr>";
}

?>