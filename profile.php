<!DOCTYPE html>
<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  table{
    font-family: Sans-serif;
    font-size: 20px;
  }

  input[type=checkbox] {
    transform: scale(2);
  }

  .commentUserImg{
      float: left; 
      padding:10px; 
      height: 40px;
  }
  .commentUserName{
    margin:20px; 
    padding-top: 20px;
    background-color: ; 
    border-bottom: 3px solid #FF666A; 
    border-radius: 0px; height: 60px;
  }
  .commentContent{
    padding-top: ;
    padding-left:5%;
    padding-bottom: ; 
    background-color:; 
    height: 50%; 
    text-indent: 20px; 
    position:relative; 
    top: -10px;
  }
  .comment{
    margin-bottom: 10px;  
    background-color:  #EFECBA; 
    border-radius: 7px;
  }
  nav{
    font-family: Sans-serif;
    font-size: 20px;
  }
  .w3-sidenav a {padding:20px}
</style>

<script type="text/javascript">
  
function fillStar(obj,mode){

  var idName = obj.id;
  //window.alert(idName);
  var num = idName.split("r");
  //window.alert(num[1]);
  var tempObj;
  
  for(var i=parseInt(num[1]) ; i>0 ; i--)
  {
    tempObj = document.getElementById("star"+i);
    if(mode=="0")
      tempObj.className="fa fa-star-o w3-text-red";
    else
      tempObj.className="fa fa-star w3-text-red";
  }
}

function clickStar(obj){
  var idName = obj.id;
  //window.alert(idName);
  var num = idName.split("r");
  //window.alert(num[1]);
  var tempObj;
  
  for(var i=parseInt(num[1]) ; i>0 ; i--)
  {
    tempObj = document.getElementById("star"+i);
    //window.alert(tempObj.onmouseout);
    if(tempObj.onmouseout == null)
    {
      
      tempObj.onmouseout = "fillStar(this,0)";
      //window.alert(tempObj.onmouseout);
    }
    else{
      tempObj.onmouseout = "";
      //window.alert(tempObj.onmouseout);
    }
  }
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

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}

  a:link{
    text-decoration: none;
  }
</style>
<body class="w3-light-grey">


<div id="loginDiv" style="visibility: hidden; z-index: 4; height: 400px; width: 40%; background-color: lightblue; position: absolute; left: 400px; top: 150px; padding: 50px 35%;">
  <button onclick="cancel()" style="float: right;">X</button>
  <iframe src="register.php" style="width: 100%; height: 350px;" frameborder="0"></iframe>
</div>

<div id="bodyTag">
<!-- Sidenav (hidden by default) -->
<nav class="w3-sidenav w3-card-2 w3-top  w3-animate-right" style="display:none;z-index:2; width:15%;min-width:100px; right:0;z-index:3" id="mySidenav">
<!--<nav class="w3-sidenav w3-card-2 w3-top w3-xlarge w3-animate-right" style="display:none;z-index:2;width:10%;min-width:300px" id="mySidenav">-->
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-closenav">Close Menu</a>
  
  <a  onclick="Weblogin()">Login</a>
  <a href="./profile.php" onclick="w3_close()">Food</a>
</nav>

<!--Top menu -->
<div class="w3-top" style="box-shadow: 3px 3px 5px #888888;z-index: 2">
    <div id="Logo" style="float: left; padding-top: 10px; padding-right: 7px; padding-left: 15px">
      <img height="50px" width="50px" src="./img/logo.png">
    </div>
  <div class="w3-xlarge w3-padding-xlarge" style="padding-top:15px;  background-color:#FF845C;">
  <!--<div class="w3-white w3-xlarge w3-padding-xlarge" style="max-width:1200px;margin:auto; background-color:blue;">-->
    <div class="w3-opennav w3-right w3-hover-text-grey" onclick="w3_open()">☰</div>
    <div class="w3-left" style="background-color: green;"></div>
    <div class="w3-center"><a href="http://140.116.245.148/WebCourse/students/f74031051/test/index.php">Fun Fun Food</a></div>
    <div></div>
  </div>
</div>

<nav class="w3-sidenav w3-collapse w3-white w3-animate-left"  id="mySidenav1"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close1()" class="w3-hide-large w3-right w3-jumbo w3-padding" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="./img/lizard.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4 class="w3-padding-0"><b>USER</b></h4>
   
  </div>
 <a href="./index.php" class="w3-padding">Home</a> 
  <br>
  <a onclick="changeIframe('./myrecipe.html')" class="w3-padding">Recipe</a>
<br> 
</nav>
<div class="w3-main" style="margin-left:300px;margin-top:70px;"  height="1000px" width="1000px"id="Recipe">
<header class="w3-container" id="portfolio">
    
    <span class="w3-opennav w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open1()"><i class="fa fa-bars"></i></span>
  
    
  </header>
  <iframe id="frame" src="myrecipe.html" height="1000px" width="1000px" frameborder="0" scrolling="no">
		</iframe>
</div>

  


 

<!-- End page content -->


</div>
<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
}

function w3_open1() {
    document.getElementById("mySidenav1").style.display = "block";
    
}
 
function w3_close1() {
    document.getElementById("mySidenav1").style.display = "none";
    
}

function changeIframe(source){
	var frame = document.getElementById('frame');
	
	frame.src = source;
	w3_close1();
}

</script>


</body>
</html>
