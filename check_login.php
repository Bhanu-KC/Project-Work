<?php
$host = 'localhost';
$username = "root";
$password = "";
$database = "medical_form";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    echo "Failed";
} else {
    if (!$conn) {
        echo "Failed";
    } else {
        $query = "SELECT * FROM user WHERE name='" . $_POST['name'] . "'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $data = mysqli_fetch_assoc($result);
            if (password_verify($_POST['password'], $data['password'])) {
                // If user is "admin", redirect to admin.php
                if ($data['name'] == "admin" && $_POST['password'] == "admin") {
                    header("location: admin_list.php");
                    exit();
                } else {
                    echo 'Successfully Logged in';
                }
            } else {
                echo 'Password incorrect';
            }
        } else {
            echo 'User not found';
        }
    }
}
