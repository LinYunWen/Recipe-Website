<!DOCTYPE html>
<html>
<title>Recipe3</title>
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

<!-- Header -->
<header class="w3-display-container w3-content" style="max-width:1500px; margin-top: 67px;">
  <img class="w3-image" src="./img/recipe/3.jpg" alt="The Hotel" style=" width:100%; height:600px;" >
  <div class="w3-display-left w3-padding w3-col l6 m8">
    <div class="w3-container w3-red">
      <h2><i class="fa fa-cutlery w3-margin-right"></i>蘇格蘭蛋包派</h2>
    </div>
    <div class="w3-container w3-padding-16" style="background-color: pink; height: 320px;">
        <table border="0" style="width: 100%;">
          <tr style="border-color: #EFECBA;">
            <td style="padding:0px; width: 40%;  background-color: #EFECBA; border-color: black; border-width: 0px;">
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px; ">
                <input type="checkbox" id="ingredient1" class="ingredient">
                <label for="ingredient1">&nbsp 1.無鹽奶油 &nbsp</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient2" class="ingredient">
                <label for="ingredient2">&nbsp 2.中筋麵粉 &nbsp</label>
              </dir>
			        <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient3" class="ingredient">
                <label for="ingredient3">&nbsp 3.鹽 &nbsp</label>
              </dir>
			        <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient4" class="ingredient">
                <label for="ingredient4">&nbsp 4.水 &nbsp</label>
              </dir>
			        <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient5" class="ingredient">
                <label for="ingredient5">&nbsp 5.絞肉 &nbsp</label>
              </dir>
			        <dir style="background-color; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient6" class="ingredient">
                <label for="ingredient6">&nbsp 6.糖 &nbsp</label>
              </dir>
			        <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px;">
                <input type="checkbox" id="ingredient7" class="ingredient">
                <label for="ingredient7">&nbsp 7.水煮蛋 &nbsp</label>
              </dir>
            </td>

            <td style="width: 20%; background-color: #EFECBA;">
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px; ">
                <label for="ingredient1">-- 120g</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient2">-- 200g</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient3">-- 8~9g</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient4">-- 4~5大匙</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient5">-- 500g</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient6">-- 6g</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 20px;">
                <label for="ingredient7">-- 3顆</label>
              </dir>
            </td>

            <td style="background-color: #F1DD5D;">
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px; ">
                <input type="checkbox" id="tool1" class="tool">                
                <label for="tool1">&nbsp 鋼盆 &nbsp</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px; ">
                <input type="checkbox" id="tool2" class="tool">                
                <label for="tool2">&nbsp 擀麵棍 &nbsp</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px; ">
                <input type="checkbox" id="tool3" class="tool">                
                <label for="tool3">&nbsp 叉子 &nbsp</label>
              </dir>
              <dir style="background-color:; width: 100%; margin:10px 0px; padding-left: 50px; ">
                <input type="checkbox" id="tool4" class="tool">                
                <label for="tool4">&nbsp 刀子 &nbsp</label>
              </dir>
            </td>
          </tr>
        </table>
    </div>
  </div>
</header>


  <div class="w3-container w3-padding-32  " style=" float: right; width: 20%; min-height: 1730px; background-color: #FACA75;">
    <h2>Others commment:</h2>
    

    <div id="commment1" class="comment" style="margin-bottom: 10px;  background-color:  #EFECBA; border-radius: 7px;">
      <div id="commmentUserImg1" class="commmentUserImg" style="float: left; padding:10px; height: 40px">
        <img height="40px" width="40px" src="./img/character/5.jpg">
      </div>
      <div id="commmentUserName" class="commentUserName" style="margin:20px; padding-top: 20px; background-color: ; border-bottom: 3px solid #FF666A;  border-radius: 0px; height: 60px;">嘟嘟</div>

      <div id="commmentContent" class="commentContent" style="padding-top: ; padding-left:5%; padding-bottom: ; background-color:; height: 50%; text-indent: 20px; position:relative; top: -10px;">
        <p>這是我的菜嘿嘿嘿ˊWˋ</p>
      </div>
    </div>

    <div id="commment2" class="comment" style="margin-bottom: 20px;">
      <div id="commmentUserImg2" class="commmentUserImg" style="float: left; padding:10px; height: 40px">
        <img height="40px" width="40px" src="./img/character/1.jpg">
      </div>
      <div id="commmentUserName" class="commentUserName" >一郎</div>

      <div id="commmentContent" class="commentContent" >
        <p>謝謝樓主！</p>
      </div>
    </div>

    <div id="commment3" class="comment" style="margin-bottom: 20px;">
      <div id="commmentUserImg3"  style="float: left; padding:10px; height: 40px">
        <img height="40px" width="40px" src="./img/character/2.jpg">
      </div>
      <div id="commmentUserName" class="commentUserName" >二一</div>

      <div id="commmentContent" class="commentContent" >
        <p>我不要被二一QQ</p>
      </div>
    </div>

    <div id="commment4" class="comment" >
      <div id="commmentUserImg4" style="float: left; padding:10px; height: 40px">
        <img height="40px" width="40px" src="./img/character/3.jpg">
      </div>
      <div id="commmentUserName" class="commentUserName" >小山</div>

      <div id="commmentContent" class="commentContent" >
        <p>蛋蛋豪RRRRRRRRR</p>
      </div>
    </div>
	
	<div id="commment5" class="comment" style="margin-bottom: 20px; visibility:hidden">
      <div id="commmentUserImg5" style="float: left; padding:10px; height: 40px">
        <img height="40px" width="40px" src="./img/lizard.jpg">
      </div>
      <div id="Username" class="commentUserName">User</div>

      <div id="Usercomment"class="commentContent" >
        <p>感謝大大無私分享<3</p>
      </div>
    </div>

  </div>

<!-- Page content -->
<div class="" style="max-width:1532px; width: 80%;">
  <div class=" w3-red w3-padding-32" style="padding-left: 20px;">
    <h2><i class="fa fa-info w3-deep-orange w3-padding w3-margin-right"></i> Steps</h2>
  </div>
  
  <div class=" " style="background-color: #EFECBA; padding: 2%; height:;">
    <div id="step1" class="w3-yellow" style="background-color: ; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=28" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent"  style="background-color: ; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep1: </h3>
          <p style="text-indent: 30px;">
            派皮製作
          </p>
      </dir>
    </div>

    <div id="step2" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=127" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color:; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep2: </h3>
          <p style="text-indent: 30px;">
            肉餡製作
          </p>
      </dir>
    </div>

    <div id="step3" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=149" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color: ; margin-left: 30%; padding-top: 20px; ">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep3: </h3>
          <p style="text-indent: 30px;">
            派皮桿開
          </p>
      </dir>
    </div>

    <div id="step4" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=187" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color: ; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep4: </h3>
          <p style="text-indent: 30px;">
            造型製作
          </p>
      </dir>
    </div>
	
	<div id="step5" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=290" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color: ; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep5: </h3>
          <p style="text-indent: 30px;">
            派邊整形
          </p>
      </dir>
    </div>
	
	<div id="step6" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=364" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color: ; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep6: </h3>
          <p style="text-indent: 30px;">
            裝飾製作
          </p>
      </dir>
    </div>
	
	<div id="step7" class="w3-yellow" style="background-color: pink; height: 180px; margin-bottom: 40px; box-shadow: 5px 5px 5px #888888;">
      <div id="video" style="float: left; width: 30%; opacity: ;">
        <iframe width="100%" height="180" src="https://www.youtube.com/embed/lnfMMmHBFMM?start=413" frameborder="0" allowfullscreen></iframe>
      </div>
      <dir id="stepContent" style="background-color: ; margin-left: 30%; padding-top: 20px;">
          <h3 class="w3-section w3-leftbar w3-border-blue  w3-pale-green" style="margin-right: 80%">&nbspStep7: </h3>
          <p style="text-indent: 30px;">
            主體結合、烘焙
          </p>
      </dir>
    </div>
  </div>


</div>

  <div id="score" >
    <div id="star" style="" align="center">
      <h2>Rate the stars for this recipe</h2>
      <p>If you have any questions, do not hesitate to ask them.</p>
      <i class="fa fa-star-o w3-text-red" id="star1" style="transform: scale(2); margin: 15px;" onmouseover="fillStar(this,1)" onmouseout="fillStar(this,0)" onclick="clickStar(this)"></i>
      <i class="fa fa-star-o w3-text-red" id="star2" style="transform: scale(2); margin: 15px;" onmouseover="fillStar(this,1)" onmouseout="fillStar(this,0)" onclick="clickStar(this)"></i>
      <i class="fa fa-star-o w3-text-red" id="star3" style="transform: scale(2); margin: 15px;" onmouseover="fillStar(this,1)" onmouseout="fillStar(this,0)" onclick="clickStar(this)"></i>
      <i class="fa fa-star-o w3-text-red" id="star4" style="transform: scale(2); margin: 15px;" onmouseover="fillStar(this,1)" onmouseout="fillStar(this,0)" onclick="clickStar(this)"></i>
      <i class="fa fa-star-o w3-text-red" id="star5" style="transform: scale(2); margin: 15px;" onmouseover="fillStar(this,1)" onmouseout="fillStar(this,0)" onclick="clickStar(this)"></i>
    </div>

    <div id="commment1" class="w3-opacity w3-hover-opacity-off" style="margin-top: 0px; padding: 0 3%; background-color: lightblue; position: relative; top:15px;">
      <div id="commmentUserImg" style="float: left; padding-top: 20px; padding-left:5%; height: 20%">
        <img height="50px" width="50px" src="./img/lizard.jpg">
      </div>
      <div id="commmentUserName" style="padding:30px 10%; background-color: ;font-size: 20px">User</div>

      <div id="commmentContent" style="padding-bottom: 1%;padding-left: 5%; background-color: ;">
        <form action="form.asp" target="_blank">
          <p><textarea id="leaveComment" style="width: 100%; height: 150px;">leave your comment here^^...</textarea></p>
          <p><button class="w3-btn w3-padding-large" onclick="comment();" type="button">SEND MESSAGE</button></p>
        </form>
      </div>
    </div>
    
  </div>

<!-- End page content -->



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

function comment(){
	document.getElementById('commment5').style.visibility="visible";
	comment=document.getElementById('leaveComment').value;
	document.getElementById('Usercomment').innerHTML=comment;
}

</script>


</body>
</html>
