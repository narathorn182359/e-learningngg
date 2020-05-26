<?php
   ob_start();
   session_start();


   $servername = "localhost";
   $username = "elearn21_rolex";
   $password = "root";
   $dbname = "";
   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);mysqli_set_charset($conn, "utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$user = $_POST['username'];
$pass = md5($_POST['password']);


$sql = "SELECT * FROM adminis where username='$user' and password ='$pass'  and status = 1";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        // $ses =   
         $ses_id =  $row["id"];      
         $admin_name =  $row["admin_name"]; 
         $_SESSION["admin"] = $admin_name;
                                                                                                                   
     }
     echo "login success";
    
} else {
    echo "wrongpassword";
}
$conn->close();

//echo 'done';
?>