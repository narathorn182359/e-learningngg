
<?ob_start();
session_start();?>
<?php
    header('Access-Control-Allow-Origin: *'); 
?>
<?php
  $servername = "localhost";
  $username = "elearn21_rolex";
  $password = "root";
  $dbname = "";
  
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
$typ = $_POST['typ'];




$sql = "SELECT * FROM adminis ";
$sql .=" where username =  '".$username."' and password = '".$password."'";
$du = false;
$result = $conn->query($sql);
$allHTML = "";
//echo "xxxxx".$sql;

if ($result->num_rows > 0) {
    $du = true;
    $ses_id = "";
    $emp_id = "";
    $emp_idcard = "";
    $name_title = "";
    $name = "";
    $last_name = "";
    $department = "";
    $position = "";
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // $ses =   
        $ses_id =  $row["id"];      
        $admin_name =  $row["admin_name"]; 
        $_SESSION["admin"] = $admin_name;
                                                                                                                  
    }

    // $_SESSION["ses_id"] = $ses_id
    // $_SESSION["emp_id"] = $emp_id
    // $_SESSION["emp_idcard"] = $emp_idcard
    // $_SESSION["name_title"] = $name_title
    // $_SESSION["name"] = $name
    // $_SESSION["last_name"] = $last_name
    // $_SESSION["department"] = $department
    // $_SESSION["type_"] = "EMP"
    echo "Login successfully";
} else {
    echo "Error: ";
    // $sqlx = "INSERT INTO members ";
    // $sqlx .="VALUES (null,'".$username."','".$password."','".$name."','".$lname."','".$mail."','".$age."','".$sex."','".$hobby."','".$interest."','".$today."')";
           
    
    // if ($conn->query($sqlx) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $sqlx . "<br>" . $conn->error;
    // }


}

$conn->close();
?>


