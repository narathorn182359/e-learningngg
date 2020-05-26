<?php header('Access-Control-Allow-Origin: *');

    
       
		//echo "Copy/Upload Complete<br>";

        //*** Insert Record ***//
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
	//	$objConnect = mysql_connect("localhost","whp0808153026AP7","qh7LaWHT8q") or die("Error Connect to Database");
     //   $objDB = mysql_select_db("rolex");
       
        $id = $_POST["id"];

        $a1 = $_POST["a1"];
        $a2 = $_POST["a2"];
        $a3 = $_POST["a3"];
        $a4 = $_POST["a4"];
        $a5 = $_POST["a5"];
        $a6 = $_POST["a6"];
        $a7 = $_POST["a7"];
        $a8 = $_POST["a8"];
        $a9 = $_POST["a9"];
        $a10 = $_POST["a10"];
        $myidr = $_POST["myid"];
        $myid = "xox".$myidr;
       

        $strSQL = "SELECT * FROM test where idvicha = '$id'  ORDER BY ID DESC";        
       // $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


       $result = $conn->query($strSQL);

       $score = 0;

       if ($result->num_rows > 0) {
        // output data of each row
       
        while($objResult = $result->fetch_assoc()) {
    
          if($objResult["aq1"]==$a1){
            $score++;
          }
          if($objResult["aq2"]==$a2){
            $score++;
          }
          if($objResult["aq3"]==$a3){
            $score++;
          }
          if($objResult["aq4"]==$a4){
            $score++;
          }
          if($objResult["aq5"]==$a5){
            $score++;
          }
          if($objResult["aq6"]==$a6){
            $score++;
          }
          if($objResult["aq7"]==$a7){
            $score++;
          }
          if($objResult["aq8"]==$a8){
            $score++;
          }
          if($objResult["aq9"]==$a9){
            $score++;
          }
          if($objResult["aq10"]==$a10){
            $score++;
          }
        }
       
        
    }
    $now = new DateTime();
 
    $ymdNow = $now->format('Y/m/d H:s:i');
    

        if ($score > 7) {

            $strSQL2 = "UPDATE product set learning = REPLACE(learning, '$myid', ''), finished = CONCAT(finished,'$myid') where id = '$id'";        
            $result2 = $conn->query($strSQL2);

             $strSQL3 = "Insert into scorer (vichaid,empid,score,dt) values ('$id','$myidr','$score','$ymdNow')";        
            $result3 = $conn->query($strSQL3);
      
       $conn->close();
        
       
            echo "passed";
        }
        else{
            $strSQL3 = "Insert into scorer (vichaid,empid,score,dt) values ('$id','$myidr','$score','$ymdNow')";        
            $result3 = $conn->query($strSQL3);
      
       $conn->close();
            echo "failed";
        }
?>  

