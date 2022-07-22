<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//$host = "localhost";
//$username = "root";
//$password = "";
//$db = "c203_hotelreview";
//
//// open connection
//$link = mysqli_connect($host, $username, $password, $db);
//
////create SQL query
//$queryUsers = "SELECT * from users";
//
////excure SQL query
//$resultUsers = mysqli_query($link, $queryUsers);
//
////process the result
//while ($row = mysqli_fetch_array($resultUsers)) {
//    $arrUsers[] = $row;
//}
//
//
//
////close connection
//mysqli_close($link);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="stylesheets/problemStylesheet.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Register</title>


    </head>
    <body>
        <style>
            .register{
                background-color: #f8f9fd;
                border: 10px white;
                width:650px;
                height:auto;
                margin: auto;

            }

        </style>


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


        <!---- Navbar ------>
<!--        <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
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
                        <li class="nav-item">
                            <a class="nav-link" href="Register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.html">About Us</a>
                        </li>   
                    </ul>
                </div>

                <form class="d-flex" role="search"> 
                    Login/Register
                    <input class="form-control me-2" type="search" placeholder="Search" >

                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>-->
    </body>
    <body>
        <br>

        <form class="register" method="post" action="doRegister.php" >

            <h1 style="text-align: center"><b>Register</b></h1>
            <br>
            Username:<br> <input id="idUsername" type="text" name="usernamer" placeholder="Enter Username" style="margin-top: 15px; padding:4px;" size="80px"/> 
            <br/><br/>
            Password: <br><input id="idPassword" type="password" name="passwordr" placeholder="Enter Password" style="margin-top: 15px; padding:4px;" size="80px"/>

            <br/><br/>
            Name:<br> <input id="idname" type="text" name="name" placeholder="Enter Name" style="margin-top: 15px; padding:4px;" size="80px"/> 
            <br/><br/>

            Address:<br> <input id="idaddress" type="text" name="address" placeholder="Enter address" style="margin-top: 15px; padding:4px;" size="80px"/> 

            <br/><br/>
            Email: <br><input id="idemail" type="email" name="email" placeholder="Enter email" style="margin-top: 15px; padding:4px;" size="80px"/>

            <br/><br/>
            <h5 style="text-align:center"> <input class="bg-dark text-light" type="submit" value="Submit" /></h5>

        </form>

        <h6 style="text-align:center">Already a member? <a href="Login.php">Login</a> now!</h6>
        

    </body>
</html>
