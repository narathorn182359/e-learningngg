
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


$id_admin = $_POST['lim'];
$sql = "SELECT * FROM test where idvicha = '$id_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $allHTML = $allHTML."".$row["q1"]."xolox".$row["q2"]."xolox".$row["q3"]."xolox".$row["q4"]."xolox".$row["q5"]."xolox".$row["q6"]."xolox".$row["q7"]."xolox".$row["q8"]."xolox".$row["q9"]."xolox".$row["q10"]."xolox".$row["c1q1"]."xolox".$row["c1q2"]."xolox".$row["c1q3"]."xolox".$row["c1q4"]."xolox".$row["c1q5"]."xolox".$row["c1q6"]."xolox".$row["c1q7"]."xolox".$row["c1q8"]."xolox".$row["c1q9"]."xolox".$row["c1q10"]."xolox".$row["c2q1"]."xolox".$row["c2q2"]."xolox".$row["c2q3"]."xolox".$row["c2q4"]."xolox".$row["c2q5"]."xolox".$row["c2q6"]."xolox".$row["c2q7"]."xolox".$row["c2q8"]."xolox".$row["c2q9"]."xolox".$row["c2q10"]."xolox".$row["c3q1"]."xolox".$row["c3q2"]."xolox".$row["c3q3"]."xolox".$row["c3q4"]."xolox".$row["c3q5"]."xolox".$row["c3q6"]."xolox".$row["c3q7"]."xolox".$row["c3q8"]."xolox".$row["c3q9"]."xolox".$row["c3q10"]."xolox".$row["c4q1"]."xolox".$row["c4q2"]."xolox".$row["c4q3"]."xolox".$row["c4q4"]."xolox".$row["c4q5"]."xolox".$row["c4q6"]."xolox".$row["c4q7"]."xolox".$row["c4q8"]."xolox".$row["c4q9"]."xolox".$row["c4q10"]."xolox".$row["aq1"]."xolox".$row["aq2"]."xolox".$row["aq3"]."xolox".$row["aq4"]."xolox".$row["aq5"]."xolox".$row["aq6"]."xolox".$row["aq7"]."xolox".$row["aq8"]."xolox".$row["aq9"]."xolox".$row["aq10"]."0000000000";

    }
    echo "alladmin_".$allHTML;
} else {
    echo "0 results";
}
$conn->close();
?>