<?php
/*
Verificare casute goale
*/
session_start();
require_once 'connection.php';
if(!isset($_POST["username"]) || !isset($_POST["password"]))
{
  $remember="";
  $username="";
  $password="";
 
}
else{
    $remember=$_POST["remember"];
    $username=$_POST["username"];
    $password=$_POST["password"];

                  }

?>

<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script> 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>

<style>
  .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="imglogin.jpg"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <div class="login-form">
    <form action="verificari.php" method="post">
         

          <div class="divider d-flex align-items-center my-4">
            <h1>Login</h1>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" class="form-control form-control-lg" placeholder="Enter username" name="username" required="required" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" />
            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password"  class="form-control form-control-lg" placeholder="Enter password" name="password" required="required" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" />
        
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" name="remember"/>
              <label class="form-check-label" for="form2Example3">
              Remember me      
              </label>
              
            </div>
            <div class="g-recaptcha" data-sitekey="6LeaPTImAAAAANItLR7pDcEpMhkog0mZ8NrZcVip"></div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" name="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            
          </div>
</div>
        
      </div>
    </div>
  </div>
  </form>
  <div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>
    <!-- Copyright -->

    
  </div>
</section>
  
</body>
</html>