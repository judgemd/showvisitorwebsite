<?php
    include("connection.php");
    


	$id = $conn -> query("SELECT * FROM visitors ORDER BY id DESC LIMIT 1");
	$outputs = $id->fetch_array();

		$maxnumber = $outputs["id"];
		$number = $maxnumber + 1;

    $cp = $_POST["score"];

            $sql = "INSERT INTO visitors (id, visitornumber) VALUES ($number, '$cp')";

        if(mysqli_query($conn, $sql)) {
			echo "successfull";
        } else {
            echo mysqli_error($conn);
}           
?>