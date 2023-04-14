<html>
<head>
    <title> UK Hospital </title>

    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#date').datepicker({
                dateFormat: 'yy-mm-dd'
            });
        });

        const form = document.querySelector('form');

        form.addEventListener('submit', (event) => {
            event.preventDefault();
            const dateValue = document.getElementById('date').value;
            alert(`You selected ${dateValue}`);
        });
    </script>

</head>
<body>

<div class="top">
    <div>
        Contact Us +91 96366 20000 / 01 | ukh@hospital.com
    </div>
</div>

<div class="logo">
    <div>
        <table>
            <tr>
                <td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> UK  </font><font color="#000"> Hospital</font> </td>
                <td> <br> <br>
                    <font size="4px">
                        <a href="login.php">Login</a>
                        <a href="register.php">Register</a>

                    </font>
                </td>
            </tr>
        </table>
    </div>
</div>

<div class="middle">
    <div style="background-image:url('img/a.jpg');">
        <p>
            <br> <br>
            Health Care Services  <br>
            <font size="5px"> We Care About Your Health </font>
        </p>
    </div>
</div>




<div class="bottom">
    <div>
        <table border="0">
            <tr>
                <td width="700px">
                    <font color="#000"> We are medical center </font> <br> <br>

                    <font color="#000" size="5px"> We Have Medicare Plan Options for You! </font> <br> <br>

                    Phasellus pretium orci sit amet mi ullamcorper egestas. Sed non mattis metus. Integer vel lorem tincidunt, pharetra eros nec, posuere odio. Nullam eget bibendum sem, venenatis lacinia justo. Duis aliquet lobortis neque, eget volutpat nulla iaculis a. <br><br>

                    In hac habitasse platea dictumst. Praesent condimentum justo justo, at ultricies diam accumsan vitae. Donec ac elementum diam. Ut quam orci, posuere quis lacus sed, vehicula rhoncus massa. Nunc volutpat nibh nulla, tincidunt egestas tellus faucibus nec. <br><br>
                    <ul>
                        <li> Nulla venenatis auctor quam, ac porta lectus dictum in
                        <li>Aliquam sodales nisi sit amet lorem
                        <li>Suspendisse vulputate tellus in justo convallis imperdiet
                        <li>Morbi id lorem consequat, sodales mi non
                        <li>Nulla venenatis auctor quam, ac porta lectus dictum in
                    </ul>
                    <br>
                </td>


                <td> </td>
            </tr>


        </table>
    </div>
</div>
<form id="appointment-form" action="insert.php" method="post">
    <div class="bottom_up">
        <div>
            Make an Appointment

            <table>

                <tr>
                    <td width="500px"> </td>
                    <td>	<input type="text" placeholder="First Name" name="first_name">
                    <td> 	<input type="text" placeholder="Last Name" name="last_name">
                </tr>
                <tr height="30px">

                </tr>
                <tr>
                    <td width="500px"> </td>
                    <td>	<input type="text" placeholder="Email Id" name="email">
                    <td> 	<input type="text" placeholder="Mobile No" name="mobile_no">
                </tr>

                <tr height="30px">

                </tr>
                <tr>
                    <td width="500px"> </td>
                    <td>	<select name="gender"> <option > -- Gender -- </option> <option value="Male"> Male </option> <option value ="Female"> Female </option> </select>
                    <td><input id="date" type="text" placeholder="Appointment Date" name="date"></td>
                </tr>

                <tr height="30px">

                </tr>
                <tr>
                    <td width="500px"> </td>

                    <td colspan="2"><textarea placeholder="Write Your Symptoms" name="symptoms"></textarea></td>
                </tr>

                <tr height="30px">

                </tr>
                <tr>
                    <td width="500px"></td>
                </tr>
                <tr>
                    <td width="500px"> </td>
                    <td colspan="2"><button> SUBMIT </button></td>
                </tr>

            </table>

        </div>
    </div>

</form>


