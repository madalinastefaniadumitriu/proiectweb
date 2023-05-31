<?php
session_start();
include 'connection.php';
if(isset($_SESSION["username"])) {
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adauga un video!</title>

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

<body style="background-color:#33FFC4;">
<?php


if(isset($_POST['but_upload'])){
    $maxsize = 10000000; 
    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != ''){
        $name = $_FILES['file']['name'];
        $target_dir = "videos/";
        $target_file = $target_dir . $_FILES["file"]["name"];
 
        $extension = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
 
        $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

        if( in_array($extension,$extensions_arr) ){

           if(($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
              $_SESSION['message'] = "File too large. File must be less than 5MB.";
           }else{

              if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){

                $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";
 
                mysqli_query($con,$query);
                $_SESSION['message'] = "Upload successfully.";
              }
           }
 
        }else{
           $_SESSION['message'] = "Invalid file extension.";
        }
    }else{
        $_SESSION['message'] = "Please select a file.";
    }
    header('location: adaugarevid.php');
    exit;
 } 

     if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
     }
     ?>
     <form method="post" action="adaugarevid.php" enctype='multipart/form-data'>
       <input type='file' name='file' />
       <input type='submit' value='Upload' name='but_upload'>
     </form>

</body>

</html>
<?php

} else{
    header("Location:index.php");
}
?>