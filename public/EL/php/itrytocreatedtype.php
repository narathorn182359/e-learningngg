
<?php
session_start();

if($_SESSION["admin"] == null){

    echo " You not have permission to access this page";
    ?>
    <meta http-equiv="refresh" content="0;url=logina.php" />

    <?
}
else{
    header('Access-Control-Allow-Origin: *'); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elearn21_rolex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);mysqli_set_charset($conn, "utf8");
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$cat_admin = $_POST['cat'];
$des_admin = $_POST['des'];



$sql = "INSERT INTO category (id, name_, des_)
VALUES (null, '$cat_admin', '$des_admin')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>