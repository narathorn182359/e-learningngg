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


$emp_id = $_POST['emp_id'];
$emp_idcard = $_POST['emp_idcard'];
$name_title = $_POST['name_title'];
$name = $_POST['name'];
$department = $_POST['department'];
$company = $_POST['company'];
$last_name = $_POST['last_name'];
$start_work = $_POST['start_work'];
$pic = $_POST['pic'];
$posi = $_POST['posi'];

$sql = "INSERT INTO employee (id, emp_id,emp_idcard, name_title, name,last_name,department,company,start_work,pic,position)
VALUES (null, '$emp_id', '$emp_idcard','$name_title','$name','$last_name','$department','$company','$start_work','$pic','$posi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}
//echo 'done';
?>