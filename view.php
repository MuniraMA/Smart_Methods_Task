<?php

function view_from_db(){
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
	} else { //Connected successfully
		$sql = "SELECT value, name FROM motor";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "Name: " . $row["name"]. " - Value:" . $row["value"]. "<br>";
			}
		} else {
			echo "No results";
		}
        	$conn->close();
	}
}

view_from_db();

?>

