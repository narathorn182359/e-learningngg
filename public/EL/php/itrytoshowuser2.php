
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
$idemp = $_POST["idemp"];
$sql = "SELECT * FROM employee where emp_id ='$idemp'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $allHTML = $allHTML."".$row["id"].",".$row["emp_id"].",".$row["name"].",".$row["last_name"].",".$row["department"].",".$row["company"]."0000000000";

    }
    echo "alladmin_".$allHTML;
} else {
    echo "0 results";
}
$conn->close();
?>