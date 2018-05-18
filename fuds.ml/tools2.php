<?php
session_start();

$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"user");

$email = $_POST['email'] = 'a123';

   
 ?> 

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>

#top{
width:24%; min-width:70px; height:85px; background:white;display:inline-block;margin-top:-10px;  ;
}
#top1{
	display:inline;
	color:rgb(100,100,100); font-weight:bold; font-size:12px;
   position:absolute;
   margin-top:17px;
   margin-left:-9%;
   padding:5px; border-radius:10px; color:rgb(50,50,50); 
}
input[type=text]{
	
	width:340px; height:60px;padding:20px; background:white; border:2px solid rgb(230,230,230); border-radius:2px;
}
.col-sm-5{
	margin-left:-10px;
	margin-top:10px;
}
.col-sm-10{
	margin-left:-10px;
	margin-top:10px;
}
</style>
 
<center>

<center>
<div style="display:block; width:100%; height:90px; padding:10px; background:white; border:2px solid rgb(240,240,240);">
<a href="tutorial3.php" ><div id="top" style="">
<h4 id="top1" style=" ">Upload Files</h4>
</div>
</a>
<a href="subscribers.php">
<div id="top" style="">
<h1 id="top1" style=";">New Users</h1>
</div>
</a>
<a href="feedbacks.php">
<div id="top" style="">
<h1 id="top1" style=";">Feedbacks</h1>
</div>
<a href="tools2.php">
<div id="top" style="">
<h1 id="top1" style="color:rgb(250,10,100);">Tools</h1>
</div>
</div>
</a>
<br/>
<div style="width:50%;">
<form action="tools2.php" method="post" enctype="multipart/form-data">

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Descripton*  </label><textarea name="descr" type="text" class="form-control" style="max-width:200px;"></textarea>



</div>

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Paste  Link*  </label><input name="link" type="text" style="margin-left:4px;max-width:200px;">


<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Upload tutorial*  </label><input name="file" type="file" style="margin-left:4px;max-width:200px;"></textarea>



</div>

</div>

<br/><br/>
<div class="col-sm-18">
<br/>


<button style="width:100%; height:40px;margin-top:40px; background:rgb(100,20,200);color:white;" name="submit" ><span style="font-wieght:bold; font-size:16px;letter-spacing:1px ;">submit</span></button>
</div>
</div>


</center>




<?php
if(isset($_POST['submit'])){

$descr = $_POST['descr'];
$link = $_POST['link'];

$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
    

$a = "";
$b = move_uploaded_file($tmp,$a.$file);

	
$time = date("h:i:s");
$q2 = mysqli_query($con,"INSERT INTO tools (file,descr,link) VALUES ('$file','$descr','$link')") or die("failed" . mysqli_error());
}

?>
<script>
    window.close();
</script>
<?php


?>


</body>
</html>			