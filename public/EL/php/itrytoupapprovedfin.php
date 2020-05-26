

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
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$cat_admin = "xox".$_POST['alla'];
$id_admin = $_POST['id'];

// $sql = "UPDATE user SET username='$user_admin', name_ = '$name_admin',surname = '$surname_admin' where id = '$id_admin' and password_ = '$password_admin'";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully ";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



$sql = "SELECT * FROM classroom where id='$id_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    $sql = "UPDATE classroom SET finished = approved, statusfin = 'close' where id = '$id_admin'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ".$sql;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
} else {
    echo "wrongpassword".$sql;
}
$conn->close();

}
?>