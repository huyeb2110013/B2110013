<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// $date = date_create($_POST["birthday"]);
$sql = "INSERT INTO major(id,name_id)
        VALUES('".$_POST["id"] ."', '".$_POST["name_id"]."')";

    if ($conn->query($sql) == TRUE) {
        echo "Thêm major thành công";
        header('Location: major_index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn->close();

?>