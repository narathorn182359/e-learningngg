
<?php
session_start();

if($_SESSION["admin"] == null){

    echo " You not have permission to access this page";
    ?>
    <meta http-equiv="refresh" content="0;url=logina.php" />

    <?
}
else{




    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elearn21_rolex";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$id_admin = $_POST['newlink'];


$sql = "UPDATE  youtube  set linkyoutube = '$id_admin' where id=1";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully ".$sql;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// $allHTML = "";
// if ($result) {
//     echo "New record created successfully ";
    
// } else {
//     echo "wrongpassword";
// }
$conn->close();
}
//echo 'done';
?>