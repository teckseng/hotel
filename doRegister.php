<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$entered_username = $_POST['usernamer'];
//echo $entered_username;
$entered_password = $_POST['passwordr'];
//echo $entered_password;
$name = $_POST['name'];
//echo $name;
$address = $_POST['address'];
//echo $address;
$email = $_POST['email'];
//echo $email;


$host = "localhost";
$username = "root";
$password = "";
$db = "c203_hotelreview";



//echo $directorID;
//echo $title;
// open connection
$link = mysqli_connect($host, $username, $password, $db);



// build sql query
$query = "SELECT * FROM users WHERE username = '$entered_username' ";



// execute sql query
$result = mysqli_query($link, $query) or die('Error querying database');
$row = mysqli_fetch_assoc($result);

//if (!empty($row)){
//echo "<pre>";
//print_r($row);
//echo "<pre>";
//}


if (empty($row)) {
    $queryInsert = " INSERT INTO users (username, password, name, address, email)
VALUES ('$entered_username',SHA1('$entered_password'),'$name','$address','$email')";
    $result1 = mysqli_query($link, $queryInsert) or die('Error querying database');
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="stylesheets/problemStylesheet.css" rel="stylesheet" type="text/css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <title>Register</title>
        </head>


        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hotel Review</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="hotels.php">Hotels</a>
                        </li>

                    </ul>
                </div>

                <form class="d-flex" role="search"> 
                    Login/Register
                    <input class="form-control me-2" type="search" placeholder="Search" >

                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <body>
            <style>
                form{
                    background-color: #f8f9fd;
                    border: 10px white;
                    width:650px;
                    height:auto;
                    margin: auto;

                }
            </style>

            <br>
            <form action="Login.php">

                <h1 style="text-align: center"><b>Thank You</b></h1>
                <h6 style="text-align: center">Thank you for creating an account with us, with an acocunt, you unlock a list of the cheapest list of hotels you can find!</h6>
                <h5 style="text-align:center"> <input type="submit" value="Login" /></h5>
            </form>
            <!--        <h6 style="text-align:center">Click here to <a href="Login.php">Login</a> now!</h6>-->

        </body>
    </html>


    <?php
} else {
    ?>
    <html>
        <head>
        <body>
            <style>
                form{
                    background-color: #f8f9fd;
                    border: 10px white;
                    width:650px;
                    height:auto;
                    margin: auto;

                }
            </style>

            <br>
            <form action="Register.php">

                <h1 style="text-align: center"><b>There seems to be an error</b></h1>
                <h5 style="text-align: center">Sorry, we are unable to create an account for you, the username might have been taken up, or you might have already have an account with us</h5>
                <h5 style="text-align:center"> <input type="submit" value="Register" /></h5>
            </form>
        </body>
    </head>
    </html>

    <?php
}






//if (!empty($row) && $usernamer != row['usernamer'] && $passwordr != $row['passwordr']) {
//   
//} else {
//    $queryInsert = " INSERT INTO users (username, password, name, address, email)
//VALUES ('$usernamer','$passwordrr','$name','$address','$email')";
//    $resultt = mysqli_query($link, $queryInsert) or die('Error querying database');
//}
// close connection
mysqli_close($link);
?>




