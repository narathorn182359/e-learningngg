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
$data = $_POST['image'];


list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);


$data = base64_decode($data);
$imageName = time().'.png';
file_put_contents('upload/'.$imageName, $data);


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


$cat_admin = $_POST['cat'];
$des_admin = $_POST['des'];
$catid_admin = $_POST['catid'];
$paped_admin = $_POST['paped'];
$youtube = $_POST['youtube'];
$gdrive = $_POST['gdrive'];
$s1x = $_POST['s1x'];

$sql = "INSERT INTO product (id, name_, des_, img_,code_,paped,youtube,gdrive,mm)
VALUES (null, '$cat_admin', '$des_admin','$imageName','$catid_admin','$paped_admin','$youtube','$gdrive','$s1x')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
//echo 'done';
?>