<?php
session_start();
if(isset($_SESSION["Administrator"])){
    echo "<a href = 'form0314.php' target='new'>Form</a><br>";
    echo "<a href = 'info0314.php' target='new'>Info</a><br>";
    echo "<a href = 'logout.php'>Logout</a><br>";
}else{
    echo "You don't have the permissions";
    header("Location:login.php");
}
?>