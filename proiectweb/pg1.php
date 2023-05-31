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
    <title>Bine ai venit!</title>
    <script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Bine ai venit pe site-ul meu!";
}
</script>
</head>
<body style="background-color:powderblue;">
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


      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        
      </li>
    </ul>
  </div>
</nav>
<button class="btn btn-primary btn-lg" onclick="myFunction()">Apasa aici!</button>

<p id="demo"></p>
<iframe src="https://www.youtube.com/embed/OapT_kNJPUw?controls=0" height="200" width="300" title="Iframe Example"></iframe>
                    <br>
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            
</body>
</html>
<?php
} else{
    header("Location:index.php");
}
?>