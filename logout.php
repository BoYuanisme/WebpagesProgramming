<?php
session_start();
session_destroy();
setcookie("userName","",time()-1800,"/");
header("Location:login.php");
?>