<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';
//PHPMailer library is required to send email from localhost
$mail = new PHPMailer(true);

$mail->SMTPDebug = 2;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'bhanuprakashkc13@gmail.com';
//get password from gmail, follow https://www.getmailbird.com/gmail-app-password/ to generate your app password
//2 factor authentication should be activated to generate app password
$mail->Password = 'mmbqijjvugjreoyv';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('bhanuprakashkc13@gmail.com', 'Bhanu');
$mail->addAddress($_POST['email']);


$mail->isHTML(true);
$mail->Subject = 'Subject';
$mail->Body = 'This is to confirm that you have an appointment for "'.$_POST['first_name'].'", "'.$_POST['last_name'].'", "'.$_POST['email'].'", "'.$_POST['mobile_no'].'", "'.$_POST['gender'].'", "'.$_POST['date'].'", "'.$_POST['symptoms'].'"';
if ($mail->send()) {
    echo 'mail sent';
}


$host = "localhost";
$username = "root";
$password = "";
$database = "medical_form";
$conn = mysqli_connect($host, $username, $password, $database);

$fileName = basename($_FILES["image"]["name"]);
$saveTo='image/'.$fileName;
$temp_name=$_FILES["image"]["tmp_name"];
move_uploaded_file($temp_name,$saveTo);

$query = "INSERT INTO patient (first_name, last_name, email, mobile_no, gender, date, symptoms) VALUES ('".$_POST['first_name']."','".$_POST['last_name']."','".$_POST['email']."','".$_POST['mobile_no']."','".$_POST['gender']."','".$_POST['date']."','".$_POST['symptoms']."')";

if (mysqli_query($conn, $query)) {
        echo "Data inserted successfully";
    } else {
        echo "Data insertion failed";
    }

header('Location: after.php');
?>