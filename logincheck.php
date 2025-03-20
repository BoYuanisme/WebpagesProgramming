<?php
session_start();
?>
<h1>Login Result</h1>

<?php

$adminName = "NUK";
$adminPassword= "123456";
$userName = "BoYuan";
$userPassword = "a1123356";
$uName = $_POST["uName"];
$uPassword = $_POST["uPassword"];
$uST = $_POST["uST"];
if($userName == $uName && $userPassword == $uPassword && $uST = "user"){
    echo "User login success";
    $_SESSION["User"] = 1;
    $_SESSION["Administrator"] = null;
    setcookie("uName",$userName,time()+5,"/");
    header("Location:form0314.php");
}else if($adminName = $uName && $adminPassword == $uPassword && $uST = "administrator"){
    echo "Administrator login success";
    $_SESSION["Administrator"] = 1;
    setcookie("uName",$adminName,time()+5,"/");
    header("Location:admin.php");
}else{
    echo "Login fail , will send you back to login";
    header("Refresh:3;url = 'login.php'");
}
?>