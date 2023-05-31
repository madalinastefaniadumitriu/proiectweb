<?php
session_start();
include 'connection.php';
if(isset($_SESSION['username'])) {
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imaginile tale!</title>

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

<body style="background-color:pink;">
<?php
$sql = "SELECT * FROM images WHERE mime='image/jpeg' || mime='image/png' || mime='image/avif' || mime='image/bmp' || mime='image/gif' || mime='image/vnd.microsoft.icon' || mime='image/svg+xml' || mime='image/tiff' || mime='image/webp' ORDER BY id DESC"; 
$result = mysqli_query($con, $sql)or die(mysqli_error($con));
echo "<h2>Imaginile mele:</center></h2>";
?>
     <table rules="rows">
     
     <tr>
         
         <th>Nume</th>
         <th>Imagine</th>
         
     </tr>

<?php
while($row = mysqli_fetch_array($result)) {
  ?>
  
  <tr style="border-bottom: 1px solid black;">
           <td style="width:300px">
               <h1> <?php echo $row["name"]; ?></h1>
           </td>
           <td style="width:300px">
  
  <?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['data'] ).'" height="200" width="200"/>';
  ?>
  
  </td>
  <td>
  
 
  
  </td>
  </tr>
  
  <?php 
  }
  ?>

</body>

</html>
<?php

} else{
    header("Location:index.php");
}
?>