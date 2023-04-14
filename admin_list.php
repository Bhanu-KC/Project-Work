<?php

// Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'medical_form';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die('Could not connect to the database: ' . mysqli_connect_error());
}


// Query the database
$sql = 'SELECT * FROM patient';
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Could not retrieve data from the database: ' . mysqli_error($conn));
}
?>

<html>

<head>
    <title>My Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){
            background-color: #f2f2f2;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h1 {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }
    </style>
</head>
<body>
<header>Appointments</header>
<table>
    <tr>
        <th>Patient No.</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>App. Date</th>
        <th>Gender</th>
        <th>Symptoms</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['first_name']; ?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><?php echo $row['symptoms']; ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
