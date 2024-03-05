<?php
$conn = new mysqli("localhost", "root","", "qlsv");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$id = $_POST['id'];
$sql = "DELETE FROM major WHERE ID = '".$id."'";

    if ( $conn -> query($sql) == TRUE ) {
        header('Location: major_index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>