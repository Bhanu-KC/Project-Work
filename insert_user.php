<?php
$host='localhost';
$username="root";
$password="";
$database="medical_form";

$conn=mysqli_connect($host,$username,$password,$database);

if(!$conn){
    echo "Failed";
}else{
    echo"Success";
    $query="insert into user(name,email,password) values('".$_POST['name']."','".$_POST['email']."','".password_hash($_POST['password'],PASSWORD_DEFAULT)."')";
    if ($conn->query($query)==true) {
        echo "user registered";
    }else{
        echo "failed";
    }
}
header('Location: Login.php');

