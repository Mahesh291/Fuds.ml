<?php	
     session_start();
	 $id = $_POST['id'];
	 $id1  = $_POST['id1'];
	 $id2 = $_POST['id2'];
	 $id3 = $_POST['id3'];
	 $id4 = $_POST['id4'];
	 $email = $_POST['email'];
	 
	 
	$con = mysqli_connect("localhost", "id3497772_root", "iamanewprogrammer");
					  
			mysqli_select_db($con,"id3497772_user");

   
	
if(!empty($id1)){	
$a1 = mysqli_query($con,"SELECT * FROM stats WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($a1) < 0){
	$a1 = mysqli_query($con,"INSERT INTO stats (email,i_id) VALUES ('$email','$id')") or die(mysqli_error());	
}
}	
if(!empty($id2)){	
$a1 = mysqli_query($con,"SELECT * FROM stats WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($a1) > 0){
	$a1 = mysqli_query($con,"DELETE FROM stats WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
}
}	
if(!empty($id3)){	
$a1 = mysqli_query($con,"SELECT * FROM stats1 WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($a1) < 0){
	$a1 = mysqli_query($con,"INSERT INTO stats1 (email,i_id) VALUES ('$email','$id')") or die(mysqli_error());	
}
}
	
if(!empty($id4)){	
$a1 = mysqli_query($con,"SELECT * FROM stats1 WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($a1) > 0){
	$a1 = mysqli_query($con,"DELETE FROM stats1 WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
}
}



	
	$res = array();
	
	$up_stat = 0;
    $down_stat = 0;	
	
$q1 = mysqli_query($con,"SELECT * FROM stats WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($q1) > 0){
	
$up_stat = 1;
}
else{
	$up_stat = 0;
}

$q2 = mysqli_query($con,"SELECT * FROM stats1 WHERE (email = '$email') AND (i_id = '$id')") or die(mysqli_error());	
if(mysqli_num_rows($q2) > 0){
	
$down_stat = 1;
}

else{
	$down_stat = 0;
}

$res  = array_push($res,array("up_stat"=>$up_stat,"down_stat"=>$down_stat));

echo json_encode(array("details"=>$res));
	
    
    
	
?>