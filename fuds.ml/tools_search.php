<?php
session_start();
$con = mysqli_connect("localhost", "root", "");
          
mysqli_select_db($con,"user");

?>


<html>
<head><link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<meta charset="utf-8"/>
<title>search </title>
</head>
<style> 

</style>
<body>

<div id="header">
</div>
<div style="display:block; overflow-x:hidden;height:450px;margin-top:110px;float:left;margin-left:%;width:100%; border:none;">
    <div style="margin-top:40px;"></div>

<?php

if(!empty($_GET['q'])){
$query = $_GET['q'];
$min_length = 1;
if(strlen($query) >= $min_length){
	$query = htmlspecialchars($query);
	$query = mysqli_real_escape_string($con,$query);
	
	$row_results = mysqli_query($con,"SELECT * FROM tools WHERE (`link` LIke '%".$query."%') OR (`file` LIke '%".$query."%')  OR (`descr` LIke '%".$query."%')  ") or die(mysqli_error());
	
	if(mysqli_num_rows($row_results) > 0){
		while($row = mysqli_fetch_array($row_results)){
		
		
?><center>

<div class="col-sm-5" >
<a onclick="load()" style="text-decoration:none;" href="<?php echo $row['link'];?>">	
<div style="width:300px;  height:240px; overflow:hidden; background:rgb(10,10,10); ">
<img src="<?php echo $row['file'];?>" style="width:100%;">
</div>
<div style="width:300px; height:10px; background:rgb(30,30,30);">

</div>
<span  class="wordWrap"  style="color:rgb(200,200,200); background:rgb(30,30,30); margin-top:-10px; margin-bottom:30px;  padding:10px; border-radius:10px; display:inline-block; width:300px; font-size:15px; "><?php echo $row['descr'];?></span>

	</div>

<?php

}
	}
}
}

?>

