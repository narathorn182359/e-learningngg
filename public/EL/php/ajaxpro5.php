
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

$doooo = $_POST['doooo'];
$ll = $_POST['link'];

if($doooo=="DO"){

echo $data ;
list($type, $data) = explode(';', $data);
list(, $data)      = explode(',', $data);


$data = base64_decode($data);
$imageName = time().'.png';
file_put_contents('upload/'.$imageName, $data);
}


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


$id_admin = $_POST['id'];


$sql = "SELECT * FROM sinka where id='$id_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    if($doooo=="DO"){
        $sql = "UPDATE sinka SET  img_ = '$imageName', link = '$ll' where id = '$id_admin'";
    }
    else{
        $sql ="UPDATE sinka SET  img_ = '$imageName', link = '$ll' where id = '$id_admin'";
    }

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
//echo 'done';
?>