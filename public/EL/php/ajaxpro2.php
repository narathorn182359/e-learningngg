
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


$cat_admin = $_POST['cat'];
$des_admin = $_POST['des'];
$id_admin = $_POST['id'];
$type = $_POST['type'];

$sql = "SELECT * FROM article where id='$id_admin' and status =1";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    if($doooo=="DO"){
        $sql = "UPDATE article SET name_='$cat_admin', des_ = '$des_admin', img_ = '$imageName',type_ ='$type' where id = '$id_admin'";
    }
    else{
        $sql = "UPDATE article SET name_='$cat_admin', des_ = '$des_admin', type_ ='$type' where id = '$id_admin'";
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