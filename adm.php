<?php
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']==1){
        echo 'parabens';
    }else{
        header('location:teste.php');
    }
}else{
    header('location:teste.php');
}
?>

<h1>UHUUL VOCE EH ADM</h1>