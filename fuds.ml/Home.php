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
  
	 <script src = "http://code.jquery.com/jquery-1.11.1.min.js"></script>
 
</head>
<html>
<title>WELCOME</title>

<style> 

@media screen and (min-width: 1000px) {

#products2{
margin-top:700px;;
font-size:35px;


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
 
 #links li{
	 font-family: 'Roboto', sans-serif;
	 margin:10px; 
	 color:rgb(170,170,170);
 
 }
 
 #contact li{
	 font-family: 'Roboto', sans-serif;
	 margin:5px;
	 color:rgb(170,170,170);
	 
	 
 }
 #contact li span{
	 color:rgb(200,200,200);
 }
 
 
 
 
</style>

<?php


?>
<body style=" background: linear-gradient(to right, rgb(5,5,5) , rgb(40,40,40));">


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
 <br/><div  style="margin-left:50px;"><center><a  href="#"><li style="
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;" >HOME</li> </a>

 
 
 
 <a href="tutorial1.php?file=pdf"><li>PDF TUTORIAL</li></a>
 <a href="tutorial1.php?file=video"><li>VIDEO TUTORIAL<span class="caret"></span></li></a>
 <a href="tools.php"><li>TOOLS<span class="caret"></span></li></a>
 <a href="#"><li>SKILLS<span class="caret"></span></li></a>
 <a href="contact.php"><li>CONTACT US <span class="caret"></span></li></a>
 <a href="about.php"><li>ABOUT US<span class="caret"></span></li></a>

</center></div> 
 
 </div>
 
 
 
 
 
 
 
 
 </div>
 




<div id="r" style="z-index:2;background:rgb(0,0,0); margin-top:45px;" class="r">
 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="font-size:30px;color:rgb(240,20,20);float:right;">&times;</h1></a>

  <li><a href="Home.php"><span style="">Home</span></a></li>
  <li><a href="tutorial1.php?file=video"><span style="">Video Tutorial</span></a></li>
  <li><a href="tutorial1.php?file=pdf"><span style="">Pdf Tutorial</span></a></li>
  <li><a href="tools.php"><span style="">Tools </span></a></li>
  <li><a href="contact.php"><span style="">Contact us</span></a></li>
  <li><a href="about.php"><span style="">About us</span></a></li>
</div>	
<br/>

<body style="background:rgb(250,250,250); min-width:340px;">
<div style="display:block; z-index:-2;width:100%;position:fixed; ">
<img src="hack5.jpg" style="z-index:-2;width:100%;">
<center>
</center>
</div>	
<div style="display:block; width:100%;margin-top:0px;background:rgb(10,10,10);opacity:; ">

<img src="hack3.jpg" style="width:100%;">
</div>	
<div id="back" style="width:100%; display:block;  background:rgb(0,0,0); opacity:0.9;">
<center><br/><br/>
<span style=" font-weight:bold; color:rgb(250,250,250); text-shadow:0.2px 0.2px rgb(100,100,100);">
<span style="color:rgb(250,0,0);"> Ethical Hacking Tutorial </span><br/>in Easy Understandable Language
 <br/>and Much More</span>
</span>

</div>
<div style="width:100%;padding:10px; padding-bottom:50px; margin-top:0px;min-height:500px;background:rgb(30,30,30);">
<center>

<span style="font-weight:bold; font-size:40px; color:rgb(90,90,90);">
Ethical Hacking </span>
<br/><br/>
<div style="margin-left:0px;">

<div class="col-sm-3" style="margin-top:30px;">
<div id="item" style="display:block; width:100%; height:250px; overflow:hidden;">
<span style="display:inline; ">
Security For Your Websites
</span>
<img src="hack5.jpg" style="height:250px;">
</div>
</div>
<div class="col-sm-3" style="margin-top:30px;">
<div id="item" style="display:block; width:100%; height:250px; overflow:hidden;">
<span style="padding:4px;">
Become a Professional Hacker
</span>
<img src="hack3.jpg" style="height:250px;">
</div>
</div>
<div class="col-sm-3"style="margin-top:30px;">
<div id="item" style="display:block; width:100%; height:250px; overflow:hidden;">
<span style="">
Get in our community
</span>
<img src="hack4.jpg" style="height:250px;">
</div>
</div>
<div class="col-sm-3"style="margin-top:30px;">
<div id="item" style="display:block; width:100%; height:250px; overflow:hidden;">
<span style="">
Security For Your Websites
</span>
<img src="i1.jpg" style="height:250px;">
</div>
</div>


</div>
</div>

<div style="width:100%;padding:10px; min-height:540px;background:rgb(10,10,10);opacity:0.95;">
<center>
<span style="font-weight:bold; font-size:40px; color:rgb(90,90,90);">
Video Tutorials </span>
<br/>
<br/>
<center>
<div style="margin-left:0px; margin-top:100px;">
<div class="col-sm-3" style="margin-top:20px;height:290px;">
<img src="icon1.png" style="width:50%; max-width:150px; ">
<div class="caption">
<br/>
<span style="" >Learn By Pdf Tutorials</span>
</div>

</div>
<div class="col-sm-3" style="margin-top:20px;height:290px;">
<img src="icon2.png" style="width:50%;max-width:150px;" >
<div class="caption">
<br/>
<span style="" >Watch Video Tutorials</span>
</div>

</div>
<div class="col-sm-3" style="margin-top:20px;height:290px;">
<img src="icon4.png" style="width:50%;max-width:150px;">

<div class="caption">
<br/>
<span style="" >Write Content For us</span>
</div>
</div>
<div class="col-sm-3" style="margin-top:20px;height:290px;">
<img src="icon3.png" style="width:50%;max-width:150px;">

<div class="caption">
<br/>
<span style="" >Be a Security Expert</span>
</div>
</div>
</div>	
</div>



<div id="foot" style="display:block; width:100%; margin-top:-2px;min-height:350px; background:rgb(30,30,30);">
<div class="col-sm-4" style=" height:300px;  margin-top:2px;">

<h3 style="color:white;font-size:20px;position:absolute;margin-top:8px;margin-left:10px;">Share Fuds on</h3>
<br/>
<div id="list" style="width:50px;float:left;padding:8px;">
<a href="#"><img src="fb1.png" style="width:50px; margin-top:20px;"></a>
<br/>
<a href="#"><img src="twitter1.png" style="width:50px;margin-top:20px"></a>
<a href="#"><img src="google1.png" style="width:50px;margin-top:20px;">
</a>
</div>

</div>
<div class="col-sm-4" style="margin-bottom:0px; margin-top:2px; padding:10px;background:; height:300px;">

<h3 style="color:white;font-size:20px;position:absolute;margin-top:8px;margin-left:10px;">Get Tutorial on Mail</h3>
<form action="Home.php" method="POST">
<input type="text" placeholder="Enter your mail" name="mail" style="padding-left:30px;background:rgb(200,200,200);margin-left:30px;width:80%;opacity:0.9; margin-top:70px; min-width:250px; height:50px;">
<br/>
<button name="enter" style="background:rgb(250,200,20); width:80%; min-width:250px; margin-top:10px;margin-left:30px;height:50px;border:none; border-radius:2px;  color:rgb(240,240,240); ">SUBSCRIBE TO US</button>
<br/>
</form>

</div>
<div class="col-sm-4" style="margin-bottom:0px;margin-top:2px;  background:; height:300px;">
<div id="links" style="width:30%; float:left; min-width:100px;height:250px; ">
<h3 style="font-size:18px; color:rgb(240,240,240);">Important Links</h3>
<li>About us</li>
<li>Contact us </li>
<li>Become Partner</li>

</div><div id="contact"  style="width:30%; margin-right:70px;float:right; min-width:120px; ">
<h3 style="font-size:18px; color:rgb(240,240,240); 250px;">Contact us </h3>
<li>Contact.no:<span>9039143865</span></li>
<li>Office Address: <span>Damoh Naka 30-c Jabalpur</span> </li>
<li>Email:<span class="wordWrap" style="max-width:100px;">mahesh29sharm@gmail.com</span></li>
</div>
</div>
</div>

<div style="width:100%; height:98px; background:rgb(0,0,0);margin-top:0px; ">
<center>
<br/>
<h3 style="color:rgb(240,240,240); font-size:16px; margin-top:20px; ">© <span style="color:rgb(250,250,250); font-size:15px; ">Fuds Tutorial</span></h3>
<p style="font-size:13px; color:rgb(200,200,200); ">All Right Reserved</p>
</div>
</div>

<?php
if(isset($_POST['enter'])){
	$mail = $_POST['mail'];
	$result1 = mysqli_query($con,"INSERT INTO subscriber (email) VALUES('$mail')") or die(mysqli_error());
	
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