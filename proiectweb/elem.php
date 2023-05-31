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
    <title>Uite ceva distractiv!</title>

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
canvas {
    border: 10px solid #FFB7D7;
}
</style>

<body>
<svg height="210" width="500">
  <polygon points="100,10 40,198 190,78 10,78 160,198" style="fill:red;stroke:blue;stroke-width:5;fill-rule:nonzero;"/>
</svg>

<script>
    window.onload = function() {
        var canvas = document.getElementById("myCanvas");
        var context = canvas.getContext("2d");
        context.arc(150, 100, 70, 0, 2 * Math.PI, false);
        context.stroke();
    };
    </script>
<canvas id="myCanvas" width="300" height="200"></canvas>


</body>

</html>
<?php

} else{
    header("Location:index.php");
}
?>