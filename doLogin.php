<?php
session_start();
$entered_username = $_POST['username'];
$entered_password = $_POST['password'];
//$entered_address = $_POST['address'];
//$entered_email = $_POST['email'];




$host = "localhost";
$username = "root";
$password = "";
$db = "c203_hotelreview";



// open connection
$link = mysqli_connect($host, $username, $password, $db);



// build sql query
$query = "SELECT * FROM users where password = SHA1('$entered_password')  AND username = '$entered_username'";



// execute sql query
$result = mysqli_query($link, $query) or die('Error querying database'); //excutes first and stores the array in $result

$row = mysqli_fetch_assoc($result); //it takes the array and assigns it to row

//$num_rows = mysqli_num_rows($result);
//if (){
//    
//}
// process the result
if (mysqli_num_rows($result) == 1) {
//    $row = mysqli_fetch_array($result);x

    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['email'] = $row['email'];

    if (isset($_POST['remember'])) {
        setcookie("username", $row['username'], time() + 60 * 60 * 24 * 31);
    }
    $msg = "<b>Username: </b>" . $_SESSION['username'] . "</br>";
    $msg .= "<b>Name: </b>" . $_SESSION['name'] . "</br>";
    $msg .= "<b>Address: </b>" . $row['address'] . "</br>";
//    $msg .= "<b>Address: </b>" . $_SESSION['address'] . "</br>";
    $msg .="<b>Email: </b>" . $_SESSION['email'] . "</br>";
//    $msg .= "<p><a href='index.php'>Home</a></p>";
    //echo $msg;
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <link href="stylesheets/problemStylesheet.css" rel="stylesheet" type="text/css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
            <title>Register</title>

        <body>
            <style>
                .sucessful{
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
            

            <br>
            <form class="sucessful" action="hotels.php">

                <h1><b>Welcome</b></h1>
                <?php echo $msg?>
                
                


                <h5 style="text-align:center"> <input type="submit" value="Login" /></h5>
                <h6 style="text-align:center">Click here to <a href="Register.php">Register</a> now!</h6>
            </form>
        </body>


        <!--        </head>
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
                    <form action="Hotel.php">
        
                        <h1 style="text-align: center"><b>There seems to be an error</b></h1>
        
                        <h5 style="text-align: center">There seems to be an error logging you in, please ensure username and password is correct.</h5>
                        <h5 style="text-align:center"> <input type="submit" value="Login" /></h5>
                        <h6 style="text-align:center">Click here to <a href="Register.php">Register</a> now!</h6>
                    </form>
                </body>-->
        <!--        <body> 
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
                    </nav>

                </body>-->

    </html>



    <?php
} else {
    ?>
    <html>
        <head>
        <meta charset="UTF-8">
        <link href="stylesheets/problemStylesheet.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      
        </head>
        
        <body>
            <style>
                .failed{
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
            </br>
            <form class="failed" action="Login.php">

                <h1 style="text-align: center"><b>Login Failed</b></h1>

                <h5 style="text-align: center">No matching records found!</h5>
                
                <h6 style="text-align:center"><a href="Login.php">Login</a> again.</h6>
            </form>
        </body>
    </head>
    </html>

    <?php
}


// close connection
mysqli_close($link);
?>

