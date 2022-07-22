<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="stylesheets/problemStylesheet.css" rel="stylesheet" type="text/css"/>
        <title>Register</title>

    </head>
    <body>
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
<!--                        <li class="nav-item">
                            <a class="nav-link" href="contact_us.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.html">About Us</a>
                        </li>-->
                    </ul>
                </div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </body>
</html>




<?php
include "dbFunctions.php";

$query = "SELECT * FROM items";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

while ($row = mysqli_fetch_array($result)) {
    $arrContent[] = $row;
}
?>

<body>
    <h1>List of Items</h1>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Item List</th>
            <th>Date Sold</th>
            <th>Quality</th>
            <th>Price</th>
            <th>Image</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        for ($i = 0; $i < count($arrContent); $i++) {
            $id = $arrContent[$i]['id'];
            $name = $arrContent[$i]['name'];
            $itemname = $arrContent[$i]['description'];
            $quality = $arrContent[$i]['quality'];
            $datesold = $arrContent[$i]['date_sold'];
            $price = $arrContent[$i]['price'];
            $image = $arrContent[$i]['image'];
            ?>
            <tr>
                <td><a href="restaurantDetails.php?id=<?php echo $id; ?>"><?php echo $name; ?></a></td>
                <td><?php echo $datesold; ?></td>
                <td><?php echo $quality; ?></td>
                <td><?php echo $price; ?></td>
                <td><img src="itemPics/<?php echo $image ?>" width="200" /></td>
                <td><a href="editItem.php?id=<?php echo $id; ?>">Edit</a></td>
                <td><a href="deleteItem.php?id=<?php echo $id; ?>">Delete</a></td>
            </tr>
            <?php
        }
        ?>      
    </table>
</body>
