<?php
$conn = new mysqli("localhost", "root", "", "qlsv");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$id = $_POST['id'];
$sql = "UPDATE major set 
         id = '".$_POST['id']."',
         name_id= '".$_POST['name_id']."'
         WHERE ID='".$id."'";

    if ( $conn -> query($sql) == TRUE ) {
        header('Location: major_index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>