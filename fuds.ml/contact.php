<?php
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"user");
?>
<html>

<head>

<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  
</head>
<style>
@media screen and (min-width: 1000px) {

#products2{
margin-top:700px;;
font-size:35px;


}	
#content{
	font-size:20px;
}

#about{
	margin-top:140px;
}
.hori{margin-top:140px;
}

 #back{
	 height:250px;
 }
 
 #back span{
	 font-size:35px;
 }
#head{
	height:110px;
}
#main{
	margin-top:50px;
}
	#menus1{
		display:none;
	}
    #open {
        display:none;
		opacity:0;
		
    }
    


#top-nav{
	height:80px;
	background:white;
}	

#logo{
	margin-top:-2px;	
}

#profile{
	margin-top:7px;
	margin-right:2%;
}


}

@media screen and (max-width: 1000px) {
	.hori{
		margin-top:40px;
	}
		
#content{
	font-size:12px;
}
#about{
	margin-top:50px;
}
 #back{
	 height:150px;
	
 } #back span{
	 
	 font-size:20px;
 }
 
	#menus
	{
		display:none;
	}
	
#nav{
		display:none;
	}
	 
#head{
height:70px;
}	
	

#products2{
margin-top:80px;

}	
#top-nav{
	height:45px;
	background:none;
	
}
#logo{
	margin-top:-18px;	

}
}

#menus i{
	margin-left:10%;
	opacity:;
	color:rgb(10,10,10);
	text-shadow:1px 1px rgb(100,100,100);
	font-weight:bold;
}
	
#menus  span{
	font-size:10px;

	margin-top:-5px;
	font-family: 'Roboto', sans-serif;
}

.wordWrap {
    word-wrap: break-word;     
    white-space: -moz-pre-wrap; 
    white-space: pre-wrap; 
}
#menus div {
	width:40px;position:absolute;margin-left:29%;margin-top:-3px;border:0px solid rgb(240,240,240);border-radius:50%; height:40px; overflow:hidden;
	float:left;
	margin-left:%;

}
.loader {
display:none;
  border: 4px solid #f3f3f3;
  border-radius: 50%;
  border-top: 5px solid rgb(30,30,30);
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
#menus li a:hover span{
	
background:rgb(40,40,40);

text-decoration:none;

border-radius:10px;

}
#r li a:hover span{
 width:80%;
 margin-left:0px;
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 
 margin-top:0px;

 

}
a:hover{
	text-decoration:none;
}



#menus li {
	display:inline; float:left;
	list-style-type:none;
	margin-left:4%;
	
}
#menus li a span{
	
	border-radius:10px;
	padding:10px; color:rgb(250,250,250); font-size:16px; font-family: 'Roboto', sans-serif;
	
	letter-spacing:0.6px;
	
}

.r {
	
    width: 0px;
    position: fixed;
  list-style-type:none;
    top: 25;
    left: 0;
    background-color: ;
    overflow-x: hidden;
	overflow-y: auto;

height:600px;    transition: 0.5s;
   
}
#r li span {
	margin-top:10px;
	font-family: 'Oswald', sans-serif;
 display:inline; float:left;
 padding:10px;
 padding-top:0px;
  margin-left:30px;
  
  
 font-weight:bold;
  font-size:15px;
  
 color:#f8f8f8;
	
}
#r li a{

	color:rgb(250,150,0);
	
}
#item span{
	
	background:rgb(0,0,0);
	height:170px;
	
	opacity:0.8;position:absolute; margin-left:0px;font-family: 'Roboto', sans-serif; margin-top:80px;  color:rgb(200,200,200); text-shadow:0.2px 0.1px rgb(100,100,100);font-size:30px; font-weight:bold;
}

.col-sm-3 span{
	
	
	width:200px;

	padding-left:50px;
	padding-right:50px;
	
	opacity:0.8; margin-top:10px;font-family: 'Roboto', sans-serif;  color:rgb(100,100,100); text-shadow:0.2px 0.1px rgb(100,100,100);font-size:20px; font-weight:bold;
}


 
 #social_icons a li{
 
 display:inline; float:left;
 
 
 
 
 
 }
 li{
 
 list-style-type:none;
 }
 
 #nav a li{
	 font-family: 'Oswald', sans-serif;
 display:inline; float:left;
 padding:10px;
 padding-top:0px;
  margin-left:30px;
  
  
 font-weight:bold;
  font-size:15px;
  
 color:#f8f8f8;
 
 
 }
 #nav a li:hover {
 
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;
 

 }
 #list li 
 {
	 color:rgb(250,250,250);
 }
 #connect{
	 margin-top:50px;
 }
 #connect li{
	 display:inline; 
	 float:left;
	 width:20%;
 }
 #details li{
	 float:left;
	 margin-top:20px;
	 
	 
 }
 #details li img{
	 width:20%;
 }
 #details li span{
	 
	 color:rgb(200,200,200);
	 margin-left:10px;
 }
	 
 
 
</style>
<body style="padding:0px;margin:0px; ;background:rgb(150,150,150); background-size:100%;;">

<div id="top-nav"  style="position:fixed;width:100%;z-index:2;opacity:;  ">

<span style="font-size:30px;margin-top:-px;position:fixed;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,40,40);">&#9776;</h4></span>

<div style="display:block; background:#0a0a0a;width:100%; " id="head">
     <div style="margin-left:6%;float:left;width:200px; height:100px;"id="logo">
 <h1 style="font-size:35px; letter-spacing:2px;margin-top:20px;color:#ff0000; text-shadow: 1px 1px rgb(40,40,40);font-weight:bold;font-family: 'Oswald', sans-serif;">
 Fuds</h1><p style="font-weight:bold;font-size:15.5px; color:#f0f0f0;letter-spacing:0.5px;text-shadow: 0.6px 0.6px rgb(40,40,40);margin-top:-10px;font-family: 'Oswald', sans-serif;" >Ethical Hacking</p>
 
    </div>
	
	
	
	 <div class="collapse navbar-collapse" id="myNavbar">
	<div style="float:left;display:block; min-width:340px;width:35%;margin-left:20%; color:rgb(250,250,250); margin-top:30px;margin-right:0px; height:40px; ;">
<span style="margin-top:10px;"class="glyphicon glyphicon-earphone"></span> <p style="margin-left:25px;font-weight:bold; letter-spacing:1px;font-family: 'Oswald', sans-serif;font-size:14.5px;margin-top:-16px;" >+91 903 914 3865
  </span>
	</div> 
	<div id="social_icons" style="display:block;float:right;margin-top:28px;width:200px; height:40px; ">
   <a href="#"><li><img src="fb.png" style="width:45px; height:45px;"></li></a>
 <a href="#"><li><img src="twitter.png" style="width:45px; height:45px;"></li></a>
 <a href="#"><li><img src="google.png" style="width:45px; height:45px;"></li></a>

 </div>
 </div>
 </div>

 <div id="nav" style=" width:100%; 	height:60px; background:#1f1f1f;">
 <br/><div  style="margin-left:50px;"><center><a  href="Home.php"><li >HOME</li> </a>

 
 
 
 <a href="tutorial1.php?file=pdf"><li>PDF TUTORIAL</li></a>
 <a href="tutorial1.php?file=video"><li>VIDEO TUTORIAL<span class="caret"></span></li></a>
 <a href="tools.php"><li>TOOLS<span class="caret"></span></li></a>
 <a href="#"><li>SKILLS<span class="caret"></span></li></a>
 <a href="contact.php"><li
 style="
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;" >CONTACT US <span class="caret"></span></li></a>
 <a href="about.php"><li >ABOUT US<span class="caret"></span></li></a>

</center></div> 
 
 </div>
 
 
 
 
 <br/>
 
 
 
 </div>
 <br/>
 




<div id="r" style="z-index:2;background:rgb(0,0,0); margin-top:45px;" class="r">
 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="font-size:30px;color:rgb(240,20,20);float:right;">&times;</h1></a>

  <li><a href="Home.php"><span style="">Home</span></a></li>
  <li><a href="tutorial1.php?file=video"><span style="">Video Tutorial</span></a></li>
  <li><a href="tutorial1.php?file=pdf"><span style="">Pdf Tutorial</span></a></li>
  <li><a href="Home.php"><span style="">Tools </span></a></li>
  <li><a href="Home.php"><span style="">Contact us</span></a></li>
  <li><a href="about.php"><span style="">About us</span></a></li>
</div>	


<center><div style="display:block; z-index:-2;width:100%;position:fixed; ">


</div>	
<div id="about" style="width:100%; min-height:600px; background:rgb(0,0,0); opacity:0.9; padding:10px;">


<div class="col-sm-4" style="display:block;margin-left:-10px; height:340px;margin-top:0px;  float:left;">
<h3 style="color:white;font-size:20px;position:absolute;margin-top:40px;margin-left:14%; ">Connect with us </h3>
<br/><br/>
<div id="connect" style="width:300px; height:100px;">
<li><a href="#"><img src="s1.png"style=""></a></li>
<li><a href="#"><img src="s2.png"style=""></a></li>
<li><a href="#"><img src="s3.png"style=""></a></li>
<li><a href="#"><img src="s4.png"style=""></a></li>
<li><a href="#"><img src="s5.png"style=""></a></li>
<div style="display:block; width:100%;">
<form action="contact.php" method="POST">
<textarea type="text"  name="feedback" style="padding-left:30px;padding-top:10px;background:rgb(200,200,200);margin-left:0px;width:100%;opacity:0.9; margin-top:50px; min-width:250px; height:70px;" placeholder="Please give your feedback"></textarea>
<br/>
<button  name="enter" style="background:rgb(250,200,20); width:100%; min-width:250px; margin-top:10px;margin-left:0px;height:50px;border:none; border-radius:2px;  color:rgb(240,240,240); ">Submit your Feedback</button>
<br/>
</form>
</div>
</div>
</div>

<div class="col-sm-6" style="display:block;margin-left:-10px; margin-top:-10px;  float:right;">
<h3 style="color:white;font-size:20px;margin-top:60px;margin-left:-150px; ">Notify us at :</h3>
<br/><br/>
<div id="details" style="width:300px; margin-top:-30px;height:100px;">
<li><a href="#"><img src="t2.png"style=""><span>9039143865</span></a></li>
<li><a href="#"><img src="t1.png" style="width:14%;"><span>30-c Damoh Naka Jabalpur</span></a></li>
<li><a href="#"><img src="t3.png"style=""><span>9039143865</span></a></li>
</div>
</div>
</div>

<?php
if(isset($_POST['enter'])){
	$fb = $_POST['feedback'];
	$result1 = mysqli_query($con,"INSERT INTO feedback (feedback) VALUES('$fb')") or die(mysqli_error());
	
}
?>
<script>
function openA() {
    document.getElementById("r").style.width = "200px";
}

function closeA() {
    document.getElementById("r").style.width = "0";
}
</script>