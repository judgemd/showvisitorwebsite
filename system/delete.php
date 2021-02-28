<?php
        include("connection.php");

        $lastvisitornumber = $conn -> query("SELECT * FROM visitors ORDER BY visitornumber DESC LIMIT 1");
    	$outputs = $lastvisitornumber->fetch_array();

		$lastvisitornumber = $outputs["visitornumber"];

        $visitor = $_POST["deletenumber"];

        $lastvisitor = $lastvisitornumber - $visitor;

        $sql = "UPDATE visitors  SET visitornumber = '$lastvisitor' WHERE id = '3' ";

   if ($conn->query($sql) === TRUE) {
        echo "Succesfull DELETE";
        header("Location: ../index.php");

    } 
    else {
        echo "ERROR: " . $conn->error;
    }


?>