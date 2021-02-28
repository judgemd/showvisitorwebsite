<!DOCTYPE html> <?php

include("./system/connection.php");

$lastvisitornumber = $conn -> query("SELECT * FROM visitors ORDER BY visitornumber DESC LIMIT 1");
$outputs = $lastvisitornumber->fetch_array();

echo $outputs[0];

?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id = "image"></div>
        <div id = "container">
            <div id = "titleText"><h1 id = "text">Welcome to Isil Collage Robotics Coding Stand</h1>
                                  <h3 id = "text2">Total number of visitors</h3></div>
            <div id = "circles">
              <div class = "one" id="second">
                <h3 class = "day">31</h3>
              </div>
           </div>
        </div>
    </body>
</html>