<?php

session_start();
session_unset();
session_destroy();
session_write_close();
   setcookie('username', "", 0);
setcookie('password', "", 0);
    // setcookie(session_name('username','password'),'',0,'/');
     session_regenerate_id(true);
header("Location:index.php");
               
?>

