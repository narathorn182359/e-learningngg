
<?ob_start();?>
<?php
    header('Access-Control-Allow-Origin: *'); 
?>
<?php
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


$today = date("Y/m/d");
$username = $_POST['username'];
$password = md5($_POST['password']);
$name = $_POST['name'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$hobby = $_POST['hobby'];
$interest = $_POST['interest'];




$sql = "SELECT * FROM members ";
$sql .=" where username =  '".$username."' OR mail = '".$mail."'";
$du = false;
$result = $conn->query($sql);
$allHTML = "";
//echo "xxxxx".$sql;

if ($result->num_rows > 0) {
    $du = true;
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
       
    }
    echo "DUPPLICATE";
} else {

    $sqlx = "INSERT INTO members ";
    $sqlx .="VALUES (null,'".$username."','".$password."','".$name."','".$lname."','".$mail."','".$age."','".$sex."','".$hobby."','".$interest."','".$today."')";
           
    
    if ($conn->query($sqlx) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sqlx . "<br>" . $conn->error;
    }


}

$conn->close();
?>


