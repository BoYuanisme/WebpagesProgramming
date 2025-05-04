<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$to = $_POST["to"];
$subject = $_POST["subject"];
$content = nl2br($_POST["content"]);
$content_raw = $_POST["content"];

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'a0909805776@gmail.com';
    $mail->Password   = 'xtjp xlrc hlzq ksbd';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('a0909805776@gmail.com', 'Mailer');
    $mail->addAddress('a1123356@mail.nuk.edu.tw'); 
    $mail->addAddress($to); 

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $content;

    $mail->send();
    echo 'Email 已成功寄出<br>';
} catch (Exception $e) {
    echo "寄信失敗: {$mail->ErrorInfo}<br>";
}

// 儲存到資料庫
$link = new mysqli('localhost', 'root', '', 'webpage');
mysqli_set_charset($link, 'utf8');

if ($link->connect_error) {
    die("資料庫連線失敗：" . $link->connect_error);
}

$stmt = $link->prepare("INSERT INTO mail (email, subject, content) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $to, $subject, $content);


if ($stmt->execute()) {
    echo "資料已儲存至資料庫";
} else {
    echo "資料儲存失敗：" . $stmt->error;
}

$stmt->close();
$link->close();
?>