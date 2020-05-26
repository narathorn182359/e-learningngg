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
        
        $strSQL = "SELECT * FROM test where idvicha = '$lim'  ORDER BY ID DESC";        
       // $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


       $result = $conn->query($strSQL);

        $resultq1 = array();
        $resultq2 = array();
        $resultq3 = array();
        $resultq4 = array();
        $resultq5 = array();
        $resultq6 = array();
        $resultq7 = array();
        $resultq8 = array();
        $resultq9 = array();
        $resultq10 = array();

        $resultc1q1 = array();
        $resultc1q2 = array();
        $resultc1q3 = array();
        $resultc1q4 = array();
        $resultc1q5 = array();
        $resultc1q6 = array();
        $resultc1q7 = array();
        $resultc1q8 = array();
        $resultc1q9 = array();
        $resultc1q10 = array();

        $resultc2q1 = array();
        $resultc2q2 = array();
        $resultc2q3 = array();
        $resultc2q4 = array();
        $resultc2q5 = array();
        $resultc2q6 = array();
        $resultc2q7 = array();
        $resultc2q8 = array();
        $resultc2q9 = array();
        $resultc2q10 = array();

        $resultc3q1 = array();
        $resultc3q2 = array();
        $resultc3q3 = array();
        $resultc3q4 = array();
        $resultc3q5 = array();
        $resultc3q6 = array();
        $resultc3q7 = array();
        $resultc3q8 = array();
        $resultc3q9 = array();
        $resultc3q10 = array();

        $resultc4q1 = array();
        $resultc4q2 = array();
        $resultc4q3 = array();
        $resultc4q4 = array();
        $resultc4q5 = array();
        $resultc4q6 = array();
        $resultc4q7 = array();
        $resultc4q8 = array();
        $resultc4q9 = array();
        $resultc4q10 = array();

        
    

        if ($result->num_rows > 0) {
            // output data of each row
            while($objResult = $result->fetch_assoc()) {
        // while($objResult = mysql_fetch_array($objQuery))
        
       
        // {
            array_push($resultq1,$objResult["q1"]);
            array_push($resultq2,$objResult["q2"]);
            array_push($resultq3,$objResult["q3"]);
            array_push($resultq4,$objResult["q4"]);
            array_push($resultq5,$objResult["q5"]);
            array_push($resultq6,$objResult["q6"]);
            array_push($resultq7,$objResult["q7"]);
            array_push($resultq8,$objResult["q8"]);
            array_push($resultq9,$objResult["q9"]);
            array_push($resultq10,$objResult["q10"]);

            array_push($resultc1q1,$objResult["c1q1"]);
            array_push($resultc1q2,$objResult["c1q2"]);
            array_push($resultc1q3,$objResult["c1q3"]);
            array_push($resultc1q4,$objResult["c1q4"]);
            array_push($resultc1q5,$objResult["c1q5"]);
            array_push($resultc1q6,$objResult["c1q6"]);
            array_push($resultc1q7,$objResult["c1q7"]);
            array_push($resultc1q8,$objResult["c1q8"]);
            array_push($resultc1q9,$objResult["c1q9"]);
            array_push($resultc1q10,$objResult["c1q10"]);

            array_push($resultc2q1,$objResult["c2q1"]);
            array_push($resultc2q2,$objResult["c2q2"]);
            array_push($resultc2q3,$objResult["c2q3"]);
            array_push($resultc2q4,$objResult["c2q4"]);
            array_push($resultc2q5,$objResult["c2q5"]);
            array_push($resultc2q6,$objResult["c2q6"]);
            array_push($resultc2q7,$objResult["c2q7"]);
            array_push($resultc2q8,$objResult["c2q8"]);
            array_push($resultc2q9,$objResult["c2q9"]);
            array_push($resultc2q10,$objResult["c2q10"]);

            array_push($resultc3q1,$objResult["c3q1"]);
            array_push($resultc3q2,$objResult["c3q2"]);
            array_push($resultc3q3,$objResult["c3q3"]);
            array_push($resultc3q4,$objResult["c3q4"]);
            array_push($resultc3q5,$objResult["c3q5"]);
            array_push($resultc3q6,$objResult["c3q6"]);
            array_push($resultc3q7,$objResult["c3q7"]);
            array_push($resultc3q8,$objResult["c3q8"]);
            array_push($resultc3q9,$objResult["c3q9"]);
            array_push($resultc3q10,$objResult["c3q10"]);

            array_push($resultc4q1,$objResult["c4q1"]);
            array_push($resultc4q2,$objResult["c4q2"]);
            array_push($resultc4q3,$objResult["c4q3"]);
            array_push($resultc4q4,$objResult["c4q4"]);
            array_push($resultc4q5,$objResult["c4q5"]);
            array_push($resultc4q6,$objResult["c4q6"]);
            array_push($resultc4q7,$objResult["c4q7"]);
            array_push($resultc4q8,$objResult["c4q8"]);
            array_push($resultc4q9,$objResult["c4q9"]);
            array_push($resultc4q10,$objResult["c4q10"]);

          
            
            
        }
       
         $result = array(); 
         array_push($result,$resultq1);
        array_push($result,$resultq2);
        array_push($result,$resultq3);
        array_push($result,$resultq4);
        array_push($result,$resultq5);
        array_push($result,$resultq6);
        array_push($result,$resultq7);
        array_push($result,$resultq8);
        array_push($result,$resultq9);
        array_push($result,$resultq10);


        array_push($result,$resultc1q1);
        array_push($result,$resultc1q2);
        array_push($result,$resultc1q3);
        array_push($result,$resultc1q4);
        array_push($result,$resultc1q5);
        array_push($result,$resultc1q6);
        array_push($result,$resultc1q7);
        array_push($result,$resultc1q8);
        array_push($result,$resultc1q9);
        array_push($result,$resultc1q10);


        array_push($result,$resultc2q1);
        array_push($result,$resultc2q2);
        array_push($result,$resultc2q3);
        array_push($result,$resultc2q4);
        array_push($result,$resultc2q5);
        array_push($result,$resultc2q6);
        array_push($result,$resultc2q7);
        array_push($result,$resultc2q8);
        array_push($result,$resultc2q9);
        array_push($result,$resultc2q10);

        array_push($result,$resultc3q1);
        array_push($result,$resultc3q2);
        array_push($result,$resultc3q3);
        array_push($result,$resultc3q4);
        array_push($result,$resultc3q5);
        array_push($result,$resultc3q6);
        array_push($result,$resultc3q7);
        array_push($result,$resultc3q8);
        array_push($result,$resultc3q9);
        array_push($result,$resultc3q10);


        array_push($result,$resultc4q1);
        array_push($result,$resultc4q2);
        array_push($result,$resultc4q3);
        array_push($result,$resultc4q4);
        array_push($result,$resultc4q5);
        array_push($result,$resultc4q6);
        array_push($result,$resultc4q7);
        array_push($result,$resultc4q8);
        array_push($result,$resultc4q9);
        array_push($result,$resultc4q10);




      
       // array_push($result,$resultMod);
       $conn->close();
        echo json_encode($result);
        }
        else{
            echo "not".$strSQL;
        }
?>  

