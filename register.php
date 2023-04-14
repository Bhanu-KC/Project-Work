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

            input[type="text"],
            input[type="email"],
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
                transition: background-color 0.2s ease-in-out;
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
        </style>
</head>
<body>
<header>
    <h1>Register</h1>
</header>
<form method="post" action="insert_user.php" enctype="multipart/form-data">
    <label for="person-name">Name:</label>
    <input type = "text" name="name" id="person-name" placeholder="Enter Your Name"><br>
    <label>Email:</label>
    <input type = "email" name="email" placeholder="Enter Your E-mail"><br>
    <label>Password:</label>
    <input type ="password" name="password" placeholder="Enter Your Password"><br>
    <input type="submit">
</form>
</body>
</html>