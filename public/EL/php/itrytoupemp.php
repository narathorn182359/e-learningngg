

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

// $ses_id =  $row["id"];   
// $emp_id = $row["emp_id"];   
// $emp_idcard =  $row["emp_idcard"];   
// $name_title =  $row["name_title"];   
// $name =  $row["name"];   
// $last_name =  $row["last_name"];   
// $department =  $row["department"];   
// $position =  $row["company"];   
// $start_work =  $row["start_work"];   


$emp_id = $_POST['emp_id'];
$emp_idcard = $_POST['emp_idcard'];
$name_title = $_POST['name_title'];
$name = $_POST['name'];
$department = $_POST['department'];
$company = $_POST['company'];
$last_name = $_POST['last_name'];
$start_work = $_POST['start_work'];
$id_admin = $_POST['id'];

// $sql = "UPDATE user SET username='$user_admin', name_ = '$name_admin',surname = '$surname_admin' where id = '$id_admin' and password_ = '$password_admin'";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully ";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



$sql = "SELECT * FROM employee where id='$id_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    $sql = "UPDATE employee SET emp_id='$emp_id', emp_idcard = '$emp_idcard',name_title = '$name_title' ,
    name='$name', department = '$department',company = '$company',last_name = '$last_name',start_work = '$start_work' 
    where id = '$id_admin'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
} else {
    echo "wrongpassword";
}
$conn->close();

}
?>