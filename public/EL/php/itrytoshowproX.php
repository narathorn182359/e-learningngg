
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

$sql = "SELECT * FROM classroom order by id desc";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       
        $allHTML = $allHTML."".$row["id"]."^".$row["name_"]."^".$row["des_"]."^".$row["img_"]."^".$row["code_"]."^".$row["paped"]."^".$row["laksood"]."^".$row["day_"]."^".$row["time_"]."^".$row["place_"]."^".$row["number_"]."^".$row["reserved"]."^".$row["lecture"]."^".$row["mustlearn"]."^".$row["waitapp"]."^".$row["approved"]."^".$row["finished"]."^".$row["statusfin"]."0000000000";

    }
    echo "alladmin_".$allHTML;
} else {
    echo "0 results";
}
$conn->close();
?>