
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


$vichaid = $_POST['idvicha'];
$empid = $_POST['idemp'];

$sql = "SELECT * FROM scorer where vichaid = '$vichaid' and empid = '$empid'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
       // $allHTML = $allHTML.''.$row["score"]."|||";
        $allHTML = $allHTML.' วันที่ '.$row["dt"]." คะแนน ".$row["score"]."|||";
    }
    echo "alladmin_".$allHTML;
} else {
    echo $empid."0xx results".$vichaid;
}
$conn->close();
?>