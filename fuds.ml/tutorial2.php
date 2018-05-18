<?php
		$con = mysqli_connect("localhost" , "root" , "") or die("connect failed" .mysqli_error());	
        mysqli_select_db($con,"user") or die (mysqli_error());
?>

<head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">


<meta name="theme-color" content="#000000" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto" rel="stylesheet">
  
</head>
<style>
*{
	font-family: 'Roboto', sans-serif;
}
</style>


<form method="post"action="tutorial2.php" enctype="multipart/form-data" >
<h1>Video Tutorial</h1>

<input type="text" name="title" placeholder="Title">
<br>

<input type="text" name="descr" placeholder="Description">
<br>
<input type="text" name="topic" placeholder="Topic" >
<br>
<input type="file" name="file" placeholder="file">
<br>

<input type="submit" name="submit" value="upload">

</form>

<?php
if(isset($_POST['submit'])){

$type = $_POST['type'];

$descr = $_POST['descr'];

$file = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
    

$a = "";
$b = move_uploaded_file($tmp,$a.$file);
$file1 = $_FILES['file1']['name'];
	$tmp1 = $_FILES['file1']['tmp_name'];
    

$a1 = "";
$b1 = move_uploaded_file($tmp1,$a1.$file1);
	
$q2 = mysqli_query($con,"INSERT INTO tutorials (file,descr) VALUES ('$file','dfdf')") or die("failed" . mysqli_error());
}

?>

<?php
if(isset($_POST['submit'])){


$descr = $_POST['descr'];

$file = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];
$a = " ";

$b = move_uploaded_file($tmp,$a.$file);

	
$time = date("h:i:s");
$title = $_POST['title'];

$q2 = mysqli_query($con,"INSERT INTO tutorials (file,description,title) VALUES ('$file','$descr','$title')") or die("failed" . mysqli_error());

}
?>

