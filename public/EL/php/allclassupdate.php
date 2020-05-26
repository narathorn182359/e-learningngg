<?php header('Access-Control-Allow-Origin: *');

    
       
		//echo "Copy/Upload Complete<br>";

        //*** Insert Record ***//
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
	//	$objConnect = mysql_connect("localhost","whp0808153026AP7","qh7LaWHT8q") or die("Error Connect to Database");
     //   $objDB = mysql_select_db("rolex");
        $code = $_POST["code"];
        $citi = $_POST["citi"];
        $strSQL = "UPDATE classroom set waitapp = CONCAT(waitapp, 'xox', '$citi'), reserved = reserved+1 where code_ = '$code'";        
       // $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
       echo $strSQL;

       $result = $conn->query($strSQL);

   


        if ($result->num_rows > 0) {
            // output data of each row
            while($objResult = $result->fetch_assoc()) {
      
            
        }
       
        $result = "ok";
       



       // array_push($result,$resultMod);
       $conn->close();
        echo $strSQL;
        }
?>  

