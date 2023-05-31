<?php
session_start();
include('connection.php'); 

/*
Verificari daca variabilele sunt setate
*/
if(isset($_POST['username']) && isset($_POST['password']))
{$username = $_POST['username'];  
$password = $_POST['password'];  
}else
header("Location:index.php");  
	
  /*
  Selectare din baza de date
  */
	$sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";  
	$result = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
	$count = mysqli_num_rows($result);  
	  
    /*
    Verificari daca parola , username si captcha sunt corecte 
    */
	if($count == 1 && (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "")) {
		header("Location:pg1.php");
		$_SESSION["username"]=$_POST["username"];

        /*
        Verificare daca remember e activ si seteaza datele in cookies
        */
		if(!empty($_POST["remember"])) {
			setcookie ("username",$_POST["username"],time()+ 3600);
			setcookie ("password",$_POST["password"],time()+ 3600);
} else {
	setcookie("username","");
	setcookie("password","");
}
	} else{  
		echo "<h1> Login failed. Invalid username or password. Don t forget to verify if you are a robot !</h1>";  
	?><p><a href="logout.php"> Back to login</a> </p>
	<?php	
	}


?>


