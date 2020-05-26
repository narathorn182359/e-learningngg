
<?php
session_start();

if($_SESSION["admin"] == null){

    echo " You not have permission to access this page";
    ?>
    <meta http-equiv="refresh" content="0;url=logina.php" />

    <?
}
else{
    header('Access-Control-Allow-Origin: *'); 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "elearn21_rolex";
// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$id_admin = $_POST['id'];

$q1 = $_POST['q1'] ;
$q2 = $_POST['q2'] ;
$q3 = $_POST['q3'] ;
$q4 = $_POST['q4'] ;
$q5 = $_POST['q5'] ;
$q6 = $_POST['q6'] ;
$q7 = $_POST['q7'] ;
$q8 = $_POST['q8'] ;
$q9 = $_POST['q9'] ;
$q10 = $_POST['q10'] ;

$c1q1 = $_POST['c1q1'] ;
$c1q2 = $_POST['c1q2'] ;
$c1q3 = $_POST['c1q3'] ;
$c1q4 = $_POST['c1q4'] ;
$c1q5 = $_POST['c1q5'] ;
$c1q6 = $_POST['c1q6'] ;
$c1q7 = $_POST['c1q7'] ;
$c1q8 = $_POST['c1q8'] ;
$c1q9 = $_POST['c1q9'] ;
$c1q10 = $_POST['c1q10'] ;


$c2q1 = $_POST['c2q1'] ;
$c2q2 = $_POST['c2q2'] ;
$c2q3 = $_POST['c2q3'] ;
$c2q4 = $_POST['c2q4'] ;
$c2q5 = $_POST['c2q5'] ;
$c2q6 = $_POST['c2q6'] ;
$c2q7 = $_POST['c2q7'] ;
$c2q8 = $_POST['c2q8'] ;
$c2q9 = $_POST['c2q9'] ;
$c2q10 = $_POST['c2q10'] ;


$c3q1 = $_POST['c3q1'] ;
$c3q2 = $_POST['c3q2'] ;
$c3q3 = $_POST['c3q3'] ;
$c3q4 = $_POST['c3q4'] ;
$c3q5 = $_POST['c3q5'] ;
$c3q6 = $_POST['c3q6'] ;
$c3q7 = $_POST['c3q7'] ;
$c3q8 = $_POST['c3q8'] ;
$c3q9 = $_POST['c3q9'] ;
$c3q10 = $_POST['c3q10'] ;


$c4q1 = $_POST['c4q1'] ;
$c4q2 = $_POST['c4q2'] ;
$c4q3 = $_POST['c4q3'] ;
$c4q4 = $_POST['c4q4'] ;
$c4q5 = $_POST['c4q5'] ;
$c4q6 = $_POST['c4q6'] ;
$c4q7 = $_POST['c4q7'] ;
$c4q8 = $_POST['c4q8'] ;
$c4q9 = $_POST['c4q9'] ;
$c4q10 = $_POST['c4q10'] ;

$aq1 = $_POST['aq1'] ;
$aq2 = $_POST['aq2'] ;
$aq3 = $_POST['aq3'] ;
$aq4 = $_POST['aq4'] ;
$aq5 = $_POST['aq5'] ;
$aq6 = $_POST['aq6'] ;
$aq7 = $_POST['aq7'] ;
$aq8 = $_POST['aq8'] ;
$aq9 = $_POST['aq9'] ;
$aq10 = $_POST['aq10'] ;
           
       

// $sql = "UPDATE user SET username='$user_admin',name_ = '$name_admin',surname = '$surname_admin' where id = '$id_admin' and password_ = '$password_admin'";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully ";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();



$sql = "SELECT * FROM test where idvicha='$id_admin'";
$result = $conn->query($sql);
$allHTML = "";
if ($result->num_rows > 0) {
    $sql = "UPDATE test SET q1='$q1', q2= '$q2', q3= '$q3',q4='$q4',q5='$q5',q6='$q6',q7='$q7',q8='$q8',q9='$q9',q10='$q10',c1q1='$c1q1',c1q2='$c1q2',c1q3='$c1q3',c1q4='$c1q4',c1q5='$c1q5',c1q6='$c1q6',c1q7='$c1q7',c1q8='$c1q8',c1q9='$c1q9',c1q10='$c1q10',c2q1='$c2q1',c2q2='$c2q2',c2q3='$c2q3',c2q4='$c2q4',c2q5='$c2q5',c2q6='$c2q6',c2q7='$c2q7',c2q8='$c2q8',c2q9='$c2q9',c2q10='$c2q10',c3q1='$c3q1',c3q2='$c3q2',c3q3='$c3q3',c3q4='$c3q4',c3q5='$c3q5',c3q6='$c3q6',c3q7='$c3q7',c3q8='$c3q8',c3q9='$c3q9',c3q10='$c3q10',c4q1='$c4q1',c4q2='$c4q2',c4q3='$c4q3',c4q4='$c4q4',c4q5='$c4q5',c4q6='$c4q6',c4q7='$c4q7',c4q8='$c4q8',c4q9='$c4q9',c4q10='$c4q10',aq1='$aq1',aq2='$aq2',aq3='$aq3',aq4='$aq4',aq5='$aq5',aq6='$aq6',aq7='$aq7',aq8='$aq8',aq9='$aq9',aq10='$aq10' where idvicha = '$id_admin'";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
} else {
    $sql ="INSERT INTO test (id,idvicha,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,c1q1,c1q2,c1q3,c1q4,c1q5,c1q6,c1q7,c1q8,c1q9,c1q10,c2q1,c2q2,c2q3,c2q4,c2q5,c2q6,c2q7,c2q8,c2q9,c2q10,c3q1,c3q2,c3q3,c3q4,c3q5,c3q6,c3q7,c3q8,c3q9,c3q10,c4q1,c4q2,c4q3,c4q4,c4q5,c4q6,c4q7,c4q8,c4q9,c4q10,aq1,aq2,aq3,aq4,aq5,aq6,aq7,aq8,aq9,aq10)
    VALUES (null,'$id_admin','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$c1q1','$c1q2','$c1q3','$c1q4','$c1q5','$c1q6','$c1q7','$c1q8','$c1q9','$c1q10','$c2q1','$c2q2','$c2q3','$c2q4','$c2q5','$c2q6','$c2q7','$c2q8','$c2q9','$c2q10','$c3q1','$c3q2','$c3q3','$c3q4','$c3q5','$c3q6','$c3q7','$c3q8','$c3q9','$c3q10','$c4q1','$c4q2','$c4q3','$c4q4','$c4q5','$c4q6','$c4q7','$c4q8','$c4q9','$c4q10','$aq1','$aq2','$aq3','$aq4','$aq5','$aq6','$aq7','$aq8','$aq9','$aq10')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
$conn->close();

}

?>