<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

     header("Location: webbisivu/index.html");
    
}else{
     header("Location: index.php");
     exit();
}
 ?>