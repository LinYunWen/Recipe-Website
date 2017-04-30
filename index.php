<!DOCTYPE html>
<html>

<head>
	<title>Recipe Fun Fun</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style type="text/css">
	#subCategory{
		font-family: Sans-serif;
		font-size: 20px;
	}
	nav{
		font-family: Sans-serif;
		font-size: 20px;
	}
	a:link{
		text-decoration: none;
	}


</style>

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-sidenav a {padding:20px}
</style>

<script>
	function showUpDescript(mode,num){
		var description = document.getElementById('imgDescript'+num);
		var img = document.getElementById('rightSideImg'+num);
		//window.alert("hello");
		if(mode=="0")
		{
			description.style.visibility = 'visible';
			img.style.opacity = '0.7';
		}
		else if(mode=="1")
		{
			description.style.visibility = 'hidden';
			img.style.opacity = '1';			
		}
	}

	function fillStar(obj,mode){


		  if(mode=="1")
		    obj.className="fa fa-star-o";
		  else if(mode=="2")
		    obj.className="fa fa-star";
		  else if(mode=="3")
		  	obj.className="fa fa-heart-o w3-text-red";
		  else if(mode=="4")
		  	obj.className="fa fa-heart w3-text-red";
	}

	function cancel(){
		var bodyObj = document.getElementById('bodyTag');
		var loginDiv = document.getElementById('loginDiv');

		bodyObj.style = "filter:blur(0px) grayscale(0);";
		loginDiv.style = "visibility: hidden; z-index: 4; height: 400px; width: 40%; background-color: lightblue; position: absolute; left: 400px; top: 150px;";
	}


	function Weblogin(){
		w3_close();

		var bodyObj = document.getElementById('bodyTag');
		var loginDiv = document.getElementById('loginDiv');

		bodyObj.style = "filter:blur(3px) grayscale(70%);";
		loginDiv.style = "visibility: none; z-index: 4; height: 400px; width: 40%; background-color: lightblue; position: absolute; left: 400px; top: 150px;";
	}
</script>
<body style="background-color: #EFECBA;">


<div id="loginDiv" style="visibility: hidden; z-index: 4; height: 400px; width: 40%; background-color: lightblue; position: absolute; left: 400px; top: 150px; padding: 50px 35%;">
  <button onclick="cancel()" style="float: right;">X</button>
  <iframe src="register.php" style="width: 100%; height: 350px;" frameborder="0"></iframe>
</div>

<div id="bodyTag">
<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top  w3-animate-right" style="display:none;z-index:2; width:15%;min-width:100px; right:0;" id="mySidenav">
<!--<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-right" style="display:none;z-index:2;width:10%;min-width:300px" id="mySidenav">-->
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  
  <a  onclick="Weblogin()">Login</a>
  <a href="./profile.php" onclick="w3_close()">Food</a>
</nav>

<!--Top menu -->
<div class="w3-top" style="box-shadow: 3px 3px 5px #888888;">
    <div id="Logo" style="float: left; padding-top: 10px; padding-right: 7px; padding-left: 15px">
      <img height="50px" width="50px" src="./img/logo.png">
    </div>
  <div class="w3-xlarge w3-padding-xlarge" style="padding-top:15px;  background-color:#FF845C;">
  <!--<div class="w3-white w3-xlarge w3-padding-xlarge" style="max-width:1200px;margin:auto; background-color:blue;">-->
    <div class="w3-opennav w3-right w3-hover-text-grey" onclick="w3_open()">☰</div>
    <div class="w3-left" style="background-color: green;"></div>
    <div class="w3-center"><a href="http://140.116.245.148/WebCourse/students/f74031051/final_project/index.php">Fun Fun Food</a></div>
    <div></div>
  </div>
</div>
  
  <!--left side bar-->
  <div class="left_side_bar" style="width:13%; max-width:1200px;padding:20px; margin-top:30px; float:left; background-color: #FF7B64; border-radius: 7px;">
  	
  	<div id="subCategory" align="center">
	  	
	  	<p align="center"><a href="./recipe1.php">泡芙</a></p>
	  	<p><a href="./recipe2.php">牛軋糖</a></p>
	  	<p><a href="./recipe3.php">蛋包派</a></p>
  	</div>
  	
  </div>

 <!-- right side bar-->
  <div class="left_side_bar" style="width:25%; max-width:1200px;padding:20px; margin-top:30px; float:right;">
  	
  	<div style="background-color: #FF8638; padding:10px; margin-bottom: 10px; height: 290px; z-index: 1; border-radius: 10px; box-shadow: 3px 3px 5px #888888; ">
      <a href="./recipe1.php">
        <h3>法式脆餅酥皮泡芙</h3>
        <div id="imgDescript1" style=" visibility: hidden; background-color: white; opacity:0.7;width: 
              ;height: 210px; z-index:2; position:relative; top: 5px; padding: 15px;" onmouseover="showUpDescript(0,1)" onmouseout="showUpDescript(1,1)" ">
    			<div style="opacity: 1;">酥脆的口感，與奶油一同席捲味蕾！</div>
    	  </div>
        <div style="z-index: 1; background-color: ; padding:5px; height: 250px; width: 100%; position:relative;top: -210px;" onmouseover="showUpDescript(0,1)" onmouseout="showUpDescript(1,1)">
        	<img id="rightSideImg1" src="./img/recipe/1.jpg" alt="Sandwich" style="width:100%; min-height: 210px; position: relative;" >
        </div>
	  </a>
    </div>



  </div>


<!-- !PAGE CONTENT! -->
<div class="w3-main w3-padding" style="width:60%; max-width:1200px;margin-left:15%;margin-top:100px; background-color: white;">
<!--<div class="w3-main w3-content w3-padding" style="width:60%; max-width:1200px;margin-top:100px; background-color: pink;">-->

<a href="./recipe3.php">
  <div id="dailyNew" style="height: 300px; margin:10px 0px; background-color: ; box-shadow: -1px 3px 5px #888888;">
   	<div style="float: left; padding: 10px 0; width:50%; background-color: ;">
  		<img style="width:100%; min-height: 280px; background-color: ;" src="./img/recipe/3.jpg">
  	</div>
  	<div style="padding-top: 20px; padding-left:53%; background-color: ; height: 95%">
  		<h2>Today daily New</h2>
  		<p style="text-indent: 20px;">一口咬下，每每都是驚喜！</p>
  	</div>
  </div>
</a>

  <!--user poster-->
  <a href="./recipe2.php">
  <div id="poster" style="height: 300px; margin:15px 0; background-color: ; box-shadow: -3px 3px 5px #888888;">
   	<div style="float: left; padding: 0px 0; width:50%; height: 300px; background-color: ;">
   		<div id="star_heart" style=" 	background-color: white; opacity:0.7;width: 100%;height: 40px; z-index:2; position:relative;top: 260px; padding: 7px; float: left;">
   			<i class="fa fa-heart-o w3-text-red" style="transform: scale(2);padding:7px 3% ;" onmouseover="fillStar(this,4)" onmouseout="fillStar(this,3)" onclick="fillStar(this,-1)"></i>
   			<i class="fa fa-star-o" style="transform: scale(2);padding:7px 5% ; color:yellow;" onmouseover="fillStar(this,2)" onmouseout="fillStar(this,1)"></i>
  	 	</div>

  		<img style="width:100%; height: 300px; background-color: ; position:relative;top: -40px" src="./img/recipe/2.jpg">
  	</div>

  	<div id="posterUser" >
  		<div id="posterUserImg" style="float: left; padding:0 20px;  padding-top: 10px; height: 20%">
  			<img height="40px" width="40px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
  		</div>
  		<div id="posterUserName" style="padding:20px; background-color: #FFA895; ">阿司</div>
  	</div>
  	<div id="posterContents" style="padding-top: 5px; padding-left:57%; height: 50%; border-bottom: 3px solid lightgrey;  background-color:;">
  		<p>傳統風味●全新感受</p>
  	</div>
  	
  	<div id="posterRespond1" style="background-color: ; height:15%; width: 100%">
  		<div id="posterUserImg" style="float: left; padding-left: 20px; padding-top: 7px; border-left: 0px solid lightblue;">
  			<img height="25px" width="25px" src="./img/character/5.jpg" style="border-left: 3px solid lightblue;">
  		</div>
  		<div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ; border-bottom: 3px solid lightgrey; ">前來報到</div>
  	</div>

  	<div id="posterRespond2" style="background-color: purple height:15%; width: 100%">
  		<div id="posterUserImg" style="float: left;padding-left: 20px; padding-top: 7px;">
  			<img height="25px" width="25px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
  		</div>
  		<div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ;">給開司一罐啤酒</div>
  	</div>
  </div>
</a>

  <a href="./recipe2.php">
  <div id="poster" style="height: 300px; margin:15px 0; background-color: ; box-shadow: -3px 3px 5px #888888;">
    <div style="float: left; padding: 0px 0; width:50%; height: 300px; background-color: ;">
      <div id="star_heart" style="  background-color: white; opacity:0.7;width: 100%;height: 40px; z-index:2; position:relative;top: 260px; padding: 7px; float: left;">
        <i class="fa fa-heart-o w3-text-red" style="transform: scale(2);padding:7px 3% ;" onmouseover="fillStar(this,4)" onmouseout="fillStar(this,3)" onclick="fillStar(this,-1)"></i>
        <i class="fa fa-star-o" style="transform: scale(2);padding:7px 5% ; color:yellow;" onmouseover="fillStar(this,2)" onmouseout="fillStar(this,1)"></i>
      </div>

      <img style="width:100%; height: 300px; background-color: ; position:relative;top: -40px" src="./img/recipe/1.jpg">
    </div>

    <div id="posterUser" >
      <div id="posterUserImg" style="float: left; padding:0 20px;  padding-top: 10px; height: 20%">
        <img height="40px" width="40px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding:20px; background-color: #FFA895; ">小名</div>
    </div>
    <div id="posterContents" style="padding-top: 5px; padding-left:57%; height: 50%; border-bottom: 3px solid lightgrey;  background-color:;">
      <p>今天沒事就來吃吃吃囉~^^!</p>
    </div>
    
    <div id="posterRespond1" style="background-color: ; height:15%; width: 100%">
      <div id="posterUserImg" style="float: left; padding-left: 20px; padding-top: 7px; border-left: 0px solid lightblue;">
        <img height="25px" width="25px" src="./img/character/5.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ; border-bottom: 3px solid lightgrey; ">頭香</div>
    </div>

    <div id="posterRespond2" style="background-color: purple height:15%; width: 100%">
      <div id="posterUserImg" style="float: left;padding-left: 20px; padding-top: 7px;">
        <img height="25px" width="25px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ;">好哇~不揪</div>
    </div>
  </div>
</a>

  <a href="./recipe2.php">
  <div id="poster" style="height: 300px; margin:15px 0; background-color: ; box-shadow: -3px 3px 5px #888888;">
    <div style="float: left; padding: 0px 0; width:50%; height: 300px; background-color: ;">
      <div id="star_heart" style="  background-color: white; opacity:0.7;width: 100%;height: 40px; z-index:2; position:relative;top: 260px; padding: 7px; float: left;">
        <i class="fa fa-heart-o w3-text-red" style="transform: scale(2);padding:7px 3% ;" onmouseover="fillStar(this,4)" onmouseout="fillStar(this,3)" onclick="fillStar(this,-1)"></i>
        <i class="fa fa-star-o" style="transform: scale(2);padding:7px 5% ; color:yellow;" onmouseover="fillStar(this,2)" onmouseout="fillStar(this,1)"></i>
      </div>

      <img style="width:100%; height: 300px; background-color: ; position:relative;top: -40px" src="./img/recipe/3.jpg">
    </div>

    <div id="posterUser" >
      <div id="posterUserImg" style="float: left; padding:0 20px;  padding-top: 10px; height: 20%">
        <img height="40px" width="40px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding:20px; background-color: #FFA895; ">美美</div>
    </div>
    <div id="posterContents" style="padding-top: 5px; padding-left:57%; height: 50%; border-bottom: 3px solid lightgrey;  background-color:;">
      <p>ㄏㄏ~~今天是網美的一天</p>
    </div>
    
    <div id="posterRespond1" style="background-color: ; height:15%; width: 100%">
      <div id="posterUserImg" style="float: left; padding-left: 20px; padding-top: 7px; border-left: 0px solid lightblue;">
        <img height="25px" width="25px" src="./img/character/5.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ; border-bottom: 3px solid lightgrey; ">++</div>
    </div>

    <div id="posterRespond2" style="background-color: purple height:15%; width: 100%">
      <div id="posterUserImg" style="float: left;padding-left: 20px; padding-top: 7px;">
        <img height="25px" width="25px" src="./img/character/4.jpg" style="border-left: 3px solid lightblue;">
      </div>
      <div id="posterUserName" style="padding-left: 57%; padding-top:8px; padding-bottom: 12px; background-color: ;">你真棒</div>
    </div>
  </div>
</a>

<!-- End page content -->
</div>
<footer class="w3-margin-top" style="background-color: #FF845C; " >
      <div id="commmentUserImg" style="float: left;  height: 20%; padding-left: 42%; padding-top: 10px; padding-right: 10px;" >
        <img height="50px" width="50px" src="./img/logo.png">
      </div>
      <div id="commmentUserName" style="padding: 25px 0; font-size: 20px" >Fun Fun Food</div>

  <div class="" align="center">
    <i class="fa fa-facebook-official w3-hover-text-indigo"></i>
    <i class="fa fa-instagram w3-hover-text-purple"></i>
    <i class="fa fa-snapchat w3-hover-text-yellow"></i>
    <i class="fa fa-pinterest-p w3-hover-text-red"></i>
    <i class="fa fa-twitter w3-hover-text-light-blue"></i>
    <i class="fa fa-linkedin w3-hover-text-indigo"></i>
  </div>
</footer>

</div>
<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}
</script>

</body>
</html>

