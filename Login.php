<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$rememberUsername = "";

if (isset($_COOKIE['username'])) {
    $rememberUsername = $_COOKIE['username'];
}
?>

hi this is text;





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
            .login{
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

        <!--confirm take out-->
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
                        </form>^
                    </div>
                </nav>-->
        <!--conrirm take out-->
    </body>
    <body>
        <br>
        <form  class="login" method="post" action="doLogin.php">

            <h1 style="text-align: center"><b>Login</b></h1>
            <br>
            Username:<br> <input id="idUsername" type="text" name="username" placeholder="Enter Username" required
                                 value="<?php echo $rememberUsername; ?>"  style="margin-top: 15px; padding:4px;" size="80px"/> 
            <br/><br/>
            Password: <br><input id="idPassword" type="password" name="password" placeholder="Enter Password" required style="margin-top: 15px; padding:4px;" size="80px"/></br>
            </br>
            <td colspan="2" align="left"><input type="checkbox" name="remember">Remember Me</td>
            </br><h5 style="text-align:center"> <input type="submit" value="Login" /></h5>

        </form>
        <h6 style="text-align:center">Dont have an account? <a href="Register.php">Register</a> one now!</h6>
        <!--        <h6 style="text-align:center">Not a member yet? <a href="Register.php">Register</a> now!</h6>-->

    </body>
</html>
