<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

$conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
$id = $_POST['id'];
$date = date_create($_POST["birthday"]);
$sql = "DELETE FROM student WHERE ID = '".$id."'";

    if ( $conn -> query($sql) == TRUE ) {
        header('Location: taidulieu_bang1.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>