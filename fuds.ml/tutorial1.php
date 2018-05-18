<?php
	
$con = mysqli_connect("localhost", "root", "");
					  
			mysqli_select_db($con,"user");

?>
<html>
<title>
Tutorial
</title>
<head>

<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  
</head>

<script>
function show(str) {
	
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "tutorial_search.php?q="+str, true);
  xhttp.send();   
  
   
}

</script>
<style>
@media screen and (min-width: 1000px) {

#search{
width:25%;
left:65%; 

margin-top:6px;
	
}
#name{
	margin-top:30px;
	border:1px solid rgb(200,200,200);
	height:45px;
}

#button{
	height:45px;
	margin-top:-45px;
}
#products2{
margin-top:700px;;
font-size:35px;


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
	
#search{
width:40%; 
margin-top:-40px;	
margin-left:40%;
border:none;


}
#name{
	height:40px;
	
	border-left:none;
	margin-top:52px;
	border-right:none;
}
#button{
	height:40px;
	margin-top:-40px;
}	
	.hori{
		margin-top:40px;
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
 
 
 
div.hori{
	background:black;	
 overflow: auto;
    white-space: nowrap;	

}
div.hori a{
	
 display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
	
}
</style>
<body style="padding:0px;margin:0px; ;background: linear-gradient(to right, rgb(5,5,5) , rgb(40,40,40))">

<div id="top-nav"  style="position:fixed;width:100%;z-index:2;opacity:;  ">


 <div  id="search" style="position:fixed; display:block;z-index:;height:40px; ">
 <span>
<input type="hidden" name="file" value="<?php echo $_GET['file'];?>"> 
 <input id="name" name="query" type="text"  onclick="show1()"  onkeyup="show(this.value)"class="form-control" style="padding-left:40px; background:rgb(250,250,250); color:rgb(10,10,10);border-radius:2px;font-weight:bold;width:100%;border-to:none;

font-family: 'Roboto', sans-serif;" placeholder="Search"></span><button style="position:absolute; background:white;margin-left:85.4%; " id="button" type="submit" class="btn btn-default" ><i class="material-icons">&#xE8B6;</i></span></button>

<button href="javascript:void(0);" id="back" onclick="show2()" style="background:white; width:30px;border:none;margin-left:100%;position:absolute;margin-top:-38px;height:20px; "><i class="material-icons">&#xE14A;</i></button>
 
 </div>
<span style="font-size:30px;margin-top:-px;position:fixed;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,40,40);">&#9776;</h4></span>

<div style="display:block; background:#0a0a0a;width:100%; " id="head">
     <div style="margin-left:6%;float:left;width:200px; height:100px;"id="logo">
 <h1 style="font-size:35px; letter-spacing:2px;margin-top:20px;color:#ff0000; text-shadow: 1px 1px rgb(40,40,40);font-weight:bold;font-family: 'Oswald', sans-serif;">
 Fuds</h1><p style="font-weight:bold;font-size:15.5px; color:#f0f0f0;letter-spacing:0.5px;text-shadow: 0.6px 0.6px rgb(40,40,40);margin-top:-10px;font-family: 'Oswald', sans-serif;" >Ethical Hacking</p>
 
    </div>
	
	
	
	 <div class="collapse navbar-collapse" id="myNavbar">
	<div style="float:left;display:block; min-width:340px;width:35%;margin-left:20%; color:rgb(250,250,250); margin-top:30px;margin-right:0px; height:40px; ;">
<span style="margin-top:10px;"class="glyphicon glyphicon-earphone"></span> <p style="margin-left:25px;font-weight:bold; letter-spacing:1px;font-family: 'Oswald', sans-serif;font-size:14.5px;margin-top:-16px;" >9144916612
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

 
 
 
 <a href="tutorial1.php?file=pdf"><li <?php if(!empty($_GET['file']) && $_GET['file'] == 'pdf'){?> 
  style="
  
 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px;
 " <?php } ?>>PDF TUTORIAL</li></a>
 <a href="tutorial1.php?file=video"><li <?php if(!empty($_GET['file']) && $_GET['file'] == 'video'){?> style="

 color:#f8f8f8;
 background:rgb(250,0,0);
 
 padding:10px;
 padding-top:20px;
 margin-top:-20px;
 height:60px; " <?php } ?>>VIDEO TUTORIAL<span class="caret"></span></li></a>
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


</div>


 <div id="txt"></div>
 <div id="main" >
 
<br/>
<?php if ($_GET['file'] == 'video'){
	?>
<div  class="hori" style="display:block; min-height:100px; background:rgb(40,40,40); opacity:0.8; padding:30px; margin-bottom:40px; ">
<h2 style="background:rgb(250,10,10); padding:15px; border-radius:10px;  font-size:13px;position:absolute;margin-top:2px; color:white;">Video Tutorials</h2>


<?php
if(empty($_GET['que'])){
	$result = mysqli_query($con,"SELECT * FROM tuts") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
		$ext = pathinfo($row['file'],PATHINFO_EXTENSION);
		?>
		
<a onclick="load()" style="text-decoration:none;" href="<?php echo $row['file'];?>">	

		<?php
		 
	switch($ext){
		
		
		case "":
	?>
	

<iframe src="<?php echo $row['file'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width:100%; margin-top:50px; height:250px;"></iframe>

<div style="width:300px; height:30px; background:rgb(30,30,30); font-size:12px; ">
<span class="wordWrap" style="color:rgb(200,200,200); background:rgb(30,30,30);  padding:10px; border-radius:10px; display:inline-block; width:300px; font-size:15px; "><?php echo $row['descr'];?></span>
</div>

<?php 
break;
case "mp4":
	?>
	


<video controls style="width:300px; height:250px; " poster="video.png" >
<source src="<?php echo $row['file'];?>" type="video/mp4">
</video>

<div style="width:300px; height:30px; background:rgb(30,30,30); font-size:12px; ">
<span class="wordWrap" style="color:rgb(200,200,200); background:rgb(30,30,30);  padding:10px; border-radius:10px; display:inline-block; width:300px; font-size:15px; "><?php echo $row['descr'];?></span>
</div>

<?php 
break;
	}
	
?>
</a>

<?php
	
	}
}
}
?>
</div>
	
<div class="h" style="background:rgb(0,0,0); opacity:; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>

<?php
if(!empty($_GET['que'])){
	?>
	
<center>
<div style="margin-top:100px; margin-left:10%;">
<?php
	$result = mysqli_query($con,"SELECT * FROM tuts WHERE id = '$_GET[que]'") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
		$ext = pathinfo($row['file'],PATHINFO_EXTENSION);
		
		 
	switch($ext){
		case "":
	?>
	
<a onclick="load()" style="text-decoration:none;" href="<?php echo $row['file'];?>">	


<iframe src="<?php echo $row['file'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width:80%; min-width:340px; margin-top:130px; height:450px;"></iframe>

<?php 
break;
	
	case "pdf":
?>
<iframe src="<?php echo $row['file'];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width:80%; margin-top:70px; height:450px;"></iframe>

<div style="width:300px; height:30px; background:rgb(30,30,30); font-size:12px; ">
<span class="wordWrap" style="color:rgb(200,200,200); background:rgb(30,30,30);  padding:10px; border-radius:10px; display:inline-block; width:300px; font-size:15px; "><?php echo $row['descr'];?></span>
</div>
</a>
<?php
break;
	}	
	}
}
	?>
	
	
	

<?php 
if ($_GET['file'] == 'pdf'){
	?>
	<div style="margin-top:100px; margin-left:10%;">
<?php

	$result = mysqli_query($con,"SELECT * FROM tuts ORDER BY id DESC") or die(mysqli_error());
	while($row = mysqli_fetch_array($result)){
		
		$ext = pathinfo($row['file'],PATHINFO_EXTENSION);
		
		 
	switch($ext){
		
		
		case "pdf":
	?>
	
<a onclick="load()" style="text-decoration:none;" href="<?php echo $row['file'];?>">
<div class="col-sm-4" style="margin-top:10px; min-height:400px;">	
<img src="pdf1.png" style="width:200px;">

<div class="thumbnail" style="width:50%; min-width:200px; background:rgb(30,30,30); margin-top:10px; border-radius:10px;">
<span class="wordWrap" style="color:rgb(200,200,200); background:rgb(30,30,30);  padding:10px; border-radius:10px; display:inline-block; font-size:15px; "><?php echo $row['descr'];?></span>
</div>
</div>
<?php 
break;
	}
	
?>
</a>

<?php
	
	}
	?>
	</div>
	
		
<div class="h" style="background:rgb(0,0,0); opacity:; height:20px;position:absolute; margin-top:-60px;width:100%; " ></div>
<?php
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

<script>
window.onload=document.getElementById("back").style="display:none;";
  
	
function show1(){
	
	document.getElementById("back").style="display:block;background:white; width:30px;border:none;margin-left:75%;position:absolute;margin-top:-35px; color:rgb(10,10,10);height:20px; "
   	
   document.getElementById("main").style="display:none;"
   document.getElementById("txt").style="display:block; "
document.getElementById("button").style="display:none; "

		
	}
 function show2(){
		
   document.getElementById("main").style="display:block;width:100%;min-width:350px;overflow:auto;margin-top:100px; border:0px solid red; "
document.getElementById("back").style="display:none; "
document.getElementById("txt").style="display:none; "
document.getElementById("button").style="display:block;position:absolute; background:white;margin-left:85.4%;  "

		
	}
	</script>
