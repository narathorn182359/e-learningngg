
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


$name_admin = $_POST['name'];
$surname_admin = $_POST['surname'];
$user_admin = $_POST['user'];
$password_admin = $_POST['pass'];
$email_admin = $_POST['email'];
$id_admin = $_POST['id'];
$password_admin = md5($password_admin);

// $sql = "UPDATE user SET username='$user_admin', name_ = '$name_admin',surname = '$surname_admin' where id = '$id_admin' and password_ = '$password_admin'";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully ";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



$sql = "SELECT * FROM user where id='$id_admin' and password_='$password_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    $sql = "UPDATE user SET username='$user_admin', name_ = '$name_admin',surname = '$surname_admin' where id = '$id_admin' and password_ = '$password_admin'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
} else {
    echo "wrongpassword";
}
$conn->close();


?>