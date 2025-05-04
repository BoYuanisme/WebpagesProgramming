<html>
<head>
<meta charset = "UTF -8">
</head>


<?php
echo "檔案名稱: ".$_FILES["file"]["name"]."<br/>";
echo "暫存檔名: ".$_FILES["file"]["tmp_name"]."<br/>";
echo "檔案尺寸: ".$_FILES["file"]["size"]."<br/>";
echo "檔案種類: ".$_FILES["file"]["type"]."<hr/>";

$time=time();

$FILEname = "pic\\".$time.".png";

if ( copy($_FILES["file"]["tmp_name"], $FILEname)) {
   echo "檔案上傳成功<br/>";
   unlink($_FILES["file"]["tmp_name"]);
}
?>

</html>