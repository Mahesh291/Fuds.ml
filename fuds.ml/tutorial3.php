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
<a href="#"><div id="top" style="">
<h4 id="top1" style="color:rgb(250,10,100); ">Upload Files</h4>
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
<h1 id="top1" style=";">Tools</h1>
</div>
</div>
</a>
<br/>


<div style="width:50%;margin-top:60px;float:left; min-width:340px;min-height:300px;padding:10px;background:white;border:1px solid rgb(230,230,230); ">
<span style="padding:10px;  width:100%;color:rgb(40,40,40); font-size:19px; ">Upload Files</span>
<form action="tutorial3.php" method="post" enctype="multipart/form-data">

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Type of tutorial*   </label><select name="type" class="form-control" style="margin-top:4px;max-width:200px;">
<option value=""> select </option>
<option  value="Keylogger">Keylogger</option>

<option value="Denial of Service">Denial of Service</option>
<option value="WAP">WAP</option>
<option  value="Eavesdropping">Eavesdropping</option>
<option value="Phishing">Phishing</option>
<option  value="Trojan">Trojan</option>
<option value="Cookie hijacking">Cookie Hijacking</option>


<option  value="others">Others</option>

</select>



</div>


<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Descripton*  </label><textarea name="descr" type="text" class="form-control" style="max-width:200px;"></textarea>



</div>

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Upload tutorial*  </label><input name="file" type="file" style="margin-left:4px;max-width:200px;"></textarea>



</div>

<br/><br/>
<div class="col-sm-18">
<br/>


<button style="width:100%; height:40px;margin-top:40px; background:rgb(100,20,200);color:white;"name="submit" ><span style="font-wieght:bold; font-size:16px;letter-spacing:1px ;">submit</span></button>
</div>
</div>


<center>
<div style="width:50%;margin-top:60px;float:left; min-width:340px;min-height:300px;padding:10px;background:white;border:1px solid rgb(230,230,230); ">
<span style="padding:10px;  width:100%;color:rgb(40,40,40); font-size:19px;float:left; ">Youtube Video</span>
<form action="tutorial3.php" method="post" enctype="multipart/form-data">

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Type of tutorial*   </label><select name="type1" class="form-control" style="margin-top:4px;max-width:200px;">
<option value=""> select </option>
<option  value="Keylogger">Keylogger</option>

<option value="Denial of Service">Denial of Service</option>
<option value="WAP">WAP</option>
<option  value="Eavesdropping">Eavesdropping</option>
<option value="Phishing">Phishing</option>
<option  value="Trojan">Trojan</option>
<option value="Cookie hijacking">Cookie Hijacking</option>


<option  value="others">Others</option>

</select>



</div>


<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Descripton*  </label><textarea name="descr1" type="text" class="form-control" style="max-width:200px;"></textarea>



</div>

<div class="col-sm-4" style="margin-top:30px; ">
<label style="float:left;font-family: 'Bree Serif', serif;color:rgb(100,20,200);">Paste Embed Link*  </label><input name="file1" type="text" style="margin-left:4px;max-width:200px;">



</div>

<br/><br/>
<div class="col-sm-18">
<br/>


<button style="width:100%; height:40px;margin-top:40px; background:rgb(100,20,200);color:white;" name="submit1" ><span style="font-wieght:bold; font-size:16px;letter-spacing:1px ;">submit</span></button>
</div>
</div>


</center>




<?php
if(isset($_POST['submit'])){

$type = $_POST['type'];

$descr = $_POST['descr'];

$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
    

$a = "";
$b = move_uploaded_file($tmp,$a.$file);

	
$time = date("h:i:s");
$q2 = mysqli_query($con,"INSERT INTO tutorial (type,file,descr,time1,email) VALUES ('$type','$file','$descr','$time','$email')") or die("failed" . mysqli_error());
}

?>
<?php
if(isset($_POST['submit1'])){

$type = $_POST['type1'];

$descr = $_POST['descr1'];
$file = $_POST['file1'];
   

	
$time = date("h:i:s");
$q2 = mysqli_query($con,"INSERT INTO tutorial (type,file,descr,time1) VALUES ('$type','$file','$descr','$time')") or die("failed" . mysqli_error());

}
?>

<script>
    window.close();
</script>
<?php


?>


</body>
</html>			