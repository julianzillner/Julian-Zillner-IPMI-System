<?php
session_start();

if($_SESSION['userid'] === 1){
}
 else {
    echo '<a href="login.php">Log dich bitte ein</a>';    
}
?>