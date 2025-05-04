<form action="upConfirm.php" method="post" enctype="multipart/form-data">

<?php

if (file_exists("pic\\test.png")){
    echo "<img scr = 'pic\\test.png' width ='20%'>"."<br>";
    
}
                                                                                   
?>
<input type="file" name="file"/>
<br>
<input type = "submit">
</form>