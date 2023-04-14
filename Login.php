<html>
<head>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 50px;
        }


        label {
            display: block;
            font-size: 20px;
            margin-bottom: 10px;
        }


        input[type="name"],
        input[type="password"] {
            font-size: 18px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            width: 300px;
        }

        input[type="submit"] {
            background-color: #0087DC;
            color: white;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0070b6;
        }
        header {
            background-color: #0087DC;
            color: white;
            padding: 10px;
            text-align: center;
        }

        h1 {
            font-size: 30px;
            margin: 0;
            padding: 0px 0;
        }

        a {
            color: #0087DC;
            text-decoration: none;
            font-size: 18px;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>


<body>
<header>
    <h1>Login</h1>
</header>
<form method="post" action="check_login.php" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="name" name="name"><br>
    <label>Password:</label>
    <input type="password" name="password"><br>
    <input type="submit">
</form>
<a href="register.php">Not a user? Register here.</a>
</body>
</html>
