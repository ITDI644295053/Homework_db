<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "carshop";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'>
            <style>
                body {                        
                    font-family: 'Prompt';
                    background:#D8BFD8;
                    position: fixed;  
                    top: 50%;  
                    left: 50%;  
                    transform: translate(-50%, -50%);
                }
                form {  
                    border:8px solid #DA70D6;
                    padding:20px 50px; 
                    background:#E6E6FA;
                    width:50%;
                    border-radius:45px;}
                </style>
    </head>
    <body>
        <form action="processcar.php" method="post" enctype = "multipart/form-data">
            <center><h2>Car Shop</h2></center>
            brand : <input type="text" name="brand" ><br><br>         
            color : <input type="text" name="color" ><br><br> 
            vehicle registration : <input type="text" name="regis" ><br><br>
            price : <input type="number" name="price" ><br><br>
            photo : <input type="file" value="Upload" name="photo" ><br><br>
            <center><input type="submit" value="Save"></center>
        </form>
    </body>
</html>