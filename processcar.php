<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname="carshop";
// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword,$dbname);//คำสั่ง connect database

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>

<?php

$brand = $_POST['brand'];
$color = $_POST['color'];
$regis = $_POST['regis'];
$price = $_POST['price'];

if(move_uploaded_file($_FILES["photo"]["tmp_name"],"img/".$_FILES["photo"]["name"]))
{
	//echo "Copy/Upload Complete";
}
$photoname="img/".$_FILES["photo"]["name"];
$insertcar = "INSERT INTO cars(brand,color,regis,price,photo)VALUE('$brand','$color','$regis','$price','$photoname')";
//echo $insertcar
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Car Shop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Car Shop</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="showcar.php">Car</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="regiscar.php">Add Car</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Expense</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Setting</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <p class="mt-4">
                        <?php
                            if (mysqli_query($conn, $insertcar)) {
                                echo "<h2>Add car successfully</h2>"; 
                            } else {
                                echo "Error: " . $insertcar . "<br>" . mysqli_error($conn);
                             }

                            ?>
                        </p>
                    
                   
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    <?php
    mysqli_close($conn);
    ?>
</html>

