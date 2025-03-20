<?php
if (isset($_COOKIE["uName"])) {
    echo "Welcome back, " . $_COOKIE["uName"];
    echo "<a href = 'logout.php'>Logout</a><br>";
} else if(isset($_COOKIE["uName"]) ){
    echo "Welcome back, " . $_COOKIE["uName"];
    echo "<a href = 'logout.php'>Logout</a><br>";
} else {
    echo "<h1>Please login to use the system</h1>";
    echo '<form action="logincheck.php" method="POST">';
    echo "Please select your status: <input type='radio' name='uST' value='administrator'>administrator";
    echo "<input type='radio' name='uST' value='user'>user<br>";
    echo 'Please input your username: <input type="text" name="uName" required><br>';
    echo 'Please input your password: <input type="password" name="uPassword" required><br>';
    echo '<input type="submit"><input type="reset">';
    echo '</form>';
    echo date('Y-m-d H:i:s');
}
?>