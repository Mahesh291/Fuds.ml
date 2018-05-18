<?php
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"user");
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
<a href="tutorial3.php"><div id="top" style="">
<h4 id="top1" style=" ">Upload Files</h4>
</div>
</a>
<a href="subscribers.php">
<div id="top" style="">
<h1 id="top1" style="color:rgb(250,10,100);">New Users</h1>
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
<?php
$result1 = mysqli_query($con,"SELECT * FROM subscriber") or die(mysqli_error());
	while($row = mysqli_fetch_array($result1)){
   ?>
   <h4 style="color:rgb(10,10,10); width:40%; min-width:340px; background:rgb(200,200,200); padding:10px; border-radius:2px; ">
   
   <?php echo $row['email'];?>
   </h4>
   <?php
	}
   ?>