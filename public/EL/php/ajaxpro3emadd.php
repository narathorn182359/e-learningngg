<meta charset="utf-8" />
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
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$emp_id = $_POST['emp_id'];
$emp_idcard = md5($_POST['emp_idcard']);
$name_title = $_POST['name_title'];

$sql = "INSERT INTO adminis (id, username,password, admin_name)
VALUES (null, '$emp_id', '$emp_idcard','$name_title')";
echo "New record created successfully".$sql;
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
//echo 'done';
?>