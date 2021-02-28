<?php
        include("connection.php");

		$lastvisitornumber = $conn -> query("SELECT * FROM visitors ORDER BY visitors DESC LIMIT 1");
		$outputs = $lastvisitornumber->fetch_array();

		echo $outputs[0];

        $visitor = $_POST["changeparagraph"];
        $id = $_POST["changeid"];


        $sql = "UPDATE visitors  SET visitornumber = '$visitor' WHERE id = '$id' ";

    if ($conn->query($sql) === TRUE) {
        echo "Succesfull UPDATE";
        header("Location:../../index.php");
    } 
    else {
        echo "ERROR: " . $conn->error;
    }



?>