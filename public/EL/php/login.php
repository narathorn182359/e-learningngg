
<?ob_start();session_start();?>
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
$password = ($_POST['password']);
$typ = $_POST['typ'];




$sql = "SELECT * FROM employee ";
$sql .=" where emp_idcard =  '".$username."' and emp_id = '".$password."'";
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
        $emp_id = $row["emp_id"];   
        $emp_idcard =  $row["emp_idcard"];   
        $name_title =  $row["name_title"];   
        $name =  $row["name"];   
        $last_name =  $row["last_name"];   
        $department =  $row["department"];   
        $position =  $row["company"];   
        $realposi =  $row["position"];   
        $start_work =  $row["start_work"]; 
        $pic =  $row["pic"];                                                                                                           
    }

    // $_SESSION["ses_id"] = $ses_id
    // $_SESSION["emp_id"] = $emp_id
    // $_SESSION["emp_idcard"] = $emp_idcard
    // $_SESSION["name_title"] = $name_title
    // $_SESSION["name"] = $name
    // $_SESSION["last_name"] = $last_name
    // $_SESSION["department"] = $department
    // $_SESSION["type_"] = "EMP"
    echo "Login successfully00x1x00".$ses_id."00x1x00".$emp_id."00x1x00".$emp_idcard."00x1x00".$name_title."00x1x00".$name."00x1x00".$last_name."00x1x00".$department."00x1x00".$position."00x1x00".$start_work."00x1x00".$pic."00x1x00".$realposi;
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


