
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

$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $allHTML = $allHTML."".$row["id"]."^".$row["emp_id"]."^".$row["emp_idcard"]."^".$row["name_title"]."^".$row["name"]."^".$row["last_name"]."^".$row["department"]."^".$row["company"]."^".$row["start_work"]."^".$row["pic"]."^".$row["position"]."0000000000";

    }
    echo "alladmin_".$allHTML;
} else {
    echo "0 results";
}
$conn->close();
?>