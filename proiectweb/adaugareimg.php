<?php
session_start();
include 'connection.php';
if(isset($_SESSION["username"])) {
if(count($_FILES) > 0) {
if(is_uploaded_file($_FILES['image']['tmp_name'])) {

$name=$_FILES['image']['name'];
$mime=$_FILES['image']['type'];
$data =addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_name=$_POST["image_name"];
$sql = "INSERT INTO images(mime ,data, name)
VALUES('{$mime}', '{$data}', '$image_name')";

$current_id = mysqli_query($con, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($con));
if(isset($current_id)) {
    
header("Location:pg1.php");
}
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga o imagine!</title>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
        <a class="nav-link" href="pg1.php">Meniu</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="adaugareimg.php">Adaugare imagini</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adaugarevid.php">Adaugare video-uri</a>
      </li>
        <a class="nav-link" href="vid.php">Video-uri</a>
      <li class="nav-item">
      </li>
        <a class="nav-link" href="img.php">Imagini</a>
      <li class="nav-item">
      </li>
        <a class="nav-link" href="elem.php">Elemente canvas si svg</a>
      <li class="nav-item"></li>
        <a class="nav-link" href="harta.php">Harta</a>
      <li class="nav-item"> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
</head>
<style>

</style>

<body style="background-color:violet;">

<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Upload Image File:</label><br/>
<input name="image" type="file" class="inputFile" /><br/>
<label>File Name:</label><br/>
<input name="image_name" type="text" class="inputFile" /><br/>
<input type="submit" value="Submit" class="btnSubmit" />
</form>
</body>

</html>

<?php

} else{
    header("Location:index.php");
}
?>