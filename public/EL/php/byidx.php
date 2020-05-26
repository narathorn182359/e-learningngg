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
        $emp = "xox".$_POST["emp"];
        $id = $_POST["id"];
        $strSQL = "update product set learning = concat(learning,'$emp') where id='$id' ORDER BY ID DESC";        
       // $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


       $result = $conn->query($strSQL);

        if ($result->num_rows > 0) {
            // output data of each row
            while($objResult = $result->fetch_assoc()) {
       
        }
       
      
       $conn->close();
        echo $result;
        }
?>  

