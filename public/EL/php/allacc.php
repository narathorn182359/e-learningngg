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
        $lim = $_POST["lim"];
        $strSQL = "SELECT * FROM gall where status = 1 ORDER BY ID DESC";        
       // $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


       $result = $conn->query($strSQL);

        $resultID = array();
        $resultPoster = array();
        $resultTitle = array();
        $resultDes = array();
        $resultCat = array();
        $resultPic = array();
        $resultCre = array();
        $resultMod = array();
        $resultLang = array();
        $resultPok = array();
        $owner= array();
        $tokee= array();


        if ($result->num_rows > 0) {
            // output data of each row
            while($objResult = $result->fetch_assoc()) {
        // while($objResult = mysql_fetch_array($objQuery))
        
        // {
            array_push($resultID,$objResult["id"]);
            array_push($resultTitle,$objResult["name_"]);
            array_push($resultDes,$objResult["des_"]);
            array_push($resultPic,$objResult["pic"]);
            array_push($resultPok,$objResult["pok"]);
           
            
            
        }
       
        $result = array(); 
        array_push($result,$resultID);
        array_push($result,$resultTitle);
        array_push($result,$resultDes);
        array_push($result,$resultPic);
        array_push($result,$resultPok);
       // array_push($result,$resultMod);
       $conn->close();
        echo json_encode($result);
        }
?>  
