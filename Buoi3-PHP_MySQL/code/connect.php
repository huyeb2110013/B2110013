<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="qlsv";
        $conn = new mysqli($servername,$username,$password);
        if( $conn->connect_error ){
           die("Connection failed: " .$con->connect_error);
        } 
        
        else Echo "Connected successfully";
    ?>

</body>
</html>