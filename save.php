<?php


	//Database Settings
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "smart_methods";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
      
	// Check connection
	if ($conn->connect_error) {		
		echo "Connection Failed";       
	} else { //Connected Successfully
		$sql1 = "UPDATE motor SET value= " .$_POST["Motor1"]. " WHERE id=1";
		$sql2 = "UPDATE motor SET value= " .$_POST["Motor2"]. " WHERE id=2";
		$sql3 = "UPDATE motor SET value= " .$_POST["Motor3"]. " WHERE id=3";
		$sql4 = "UPDATE motor SET value= " .$_POST["Motor4"]. " WHERE id=4";
		$sql5 = "UPDATE motor SET value= " .$_POST["Motor5"]. " WHERE id=5";
		$sql6 = "UPDATE motor SET value= " .$_POST["Motor6"]. " WHERE id=6";

		if ( $conn->query($sql1) && $conn->query($sql2) && $conn->query($sql3) && $conn->query($sql4) && $conn->query($sql5) && $conn->query($sql6)) {
		   echo "Records Updated Successfully";
		} else {
			echo "Something went wrong";
		}
		$conn->close();
	}

?>

