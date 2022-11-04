<?php
session_start();

if(isset($_POST['email'])){
    if($_POST['email']=="rafael@123.com"){
        $_SESSION['usuario']=1;
        header('location:adm.php');
    }else{
        $_SESSION['usuario']=0;
        header('location:teste.php');
    }
}else{
    header('location:teste.php');
}


?>