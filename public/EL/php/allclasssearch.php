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


        if($lim=='ทั้งหมด')
        $strSQL = "SELECT * FROM classroom  ORDER BY ID DESC";        
      
        else
        $strSQL = "SELECT * FROM classroom where name_ LIKE '%$lim%' OR paped LIKE '%$lim%' OR laksood LIKE '%$lim%' ORDER BY ID DESC";        
      
      
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
        $owner= array();
        $tokee= array();

        $resultLaksood = array();
        $resultday = array();
        $resulttime = array();
        $resultplace = array();
        $resultnumber = array();
        $resultreserved = array();
        $resultlecture = array();
        $resultwait= array();
        $resultapp = array();
        $resultfin = array();
        $resultwho = array();


        if ($result->num_rows > 0) {
            // output data of each row
            while($objResult = $result->fetch_assoc()) {
        // while($objResult = mysql_fetch_array($objQuery))
        
        // {
            array_push($resultID,$objResult["id"]);
            array_push($resultTitle,$objResult["name_"]);
            array_push($resultDes,$objResult["des_"]);
            array_push($resultPic,$objResult["img_"]);
            array_push($resultCat,$objResult["paped"]);
            array_push($resultCre,$objResult["code_"]);


            array_push($resultLaksood,$objResult["laksood"]);
            array_push($resultday,$objResult["day_"]);
            array_push($resulttime,$objResult["time_"]);
            array_push($resultplace,$objResult["place_"]);
            array_push($resultnumber,$objResult["number_"]);
            array_push($resultreserved,$objResult["reserved"]);
            array_push($resultlecture,$objResult["lecture"]);
            array_push($resultwait,$objResult["waitapp"]);
            array_push($resultapp,$objResult["approved"]);
            array_push($resultfin,$objResult["finished"]);
            array_push($resultwho,$objResult["mustlearn"]);

            //array_push($resultMod,$objResult["price_"]);
            
            
        }
       
        $result = array(); 
        array_push($result,$resultID);
        array_push($result,$resultTitle);
        array_push($result,$resultDes);
        array_push($result,$resultCat);
        array_push($result,$resultPic);
        array_push($result,$resultCre);


        array_push($result,$resultLaksood);
        array_push($result,$resultday);
        array_push($result,$resulttime);
        array_push($result,$resultplace);
        array_push($result,$resultnumber);
        array_push($result,$resultreserved);
        array_push($result,$resultlecture);

        array_push($result,$resultwait);
        array_push($result,$resultapp);
        array_push($result,$resultfin);
        array_push($result,$resultwho);

       // array_push($result,$resultMod);
       $conn->close();
        echo json_encode($result);
        }
?>  

