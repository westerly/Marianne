<?php


//echo $_POST["date"];

if(isset($_POST["key"]) && $_POST["key"]=="protect"){
	if(isset($_POST["owner"]) && isset($_POST["date"])){
		include "connect.php";
		// Check if the date is already in DB
		if(!$error){
			$ownerSecure = mysql_real_escape_string($_POST["owner"]);
			// check connexion datas
			$query = "SELECT * FROM reservations WHERE owner='".$ownerSecure."' AND date='"
					.$_POST["date"]."';" or die("Error in the consult.." . mysqli_error($con));
			
			//execute the query.
			$result = mysqli_query($con, $query);
			// The date is not already in DB, we create a new row
			if($result->num_rows == 0){
				$query = "INSERT INTO reservations (date,owner) VALUES ('".$_POST["date"]."', '".$ownerSecure."');";
			}else{
				// The date is already in DB, we delete the row
				$query = "DELETE FROM reservations where date ='".$_POST["date"]."' AND owner = '".$ownerSecure."';";
			}			
			$result = mysqli_query($con, $query);
		}
	}	
}
