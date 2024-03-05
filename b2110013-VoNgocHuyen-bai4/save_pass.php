<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";
$conn = new mysqli($servername, $username, $password, $dbname); // Check connection 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPass = $_POST['old_pass'];
    $newPass = $_POST['new_pass'];
    $againPass = $_POST['again_pass'];

    session_start();
    $id = $_SESSION['id'];
    $sql = "SELECT password FROM customers where id = '$id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPass = $row['password'];


        if (md5($oldPass) !== $storedPass) {
            echo "Mật khẩu không chính xác";
            exit();
        }

        if ($agianPass !== $newPass) {
            echo "Nhập lại mật khẩu không khớp";
            header('Refresh: 2; url=edit_pass.php');
        }

        if ($newPass === $oldPass) {
            echo "Mật khẩu mới không được trùng với mật khẩu cũ";
            header('Refresh: 2; url=edit_pass.php');
        }

        $hashedPass = md5($newPass);
        $updateSQL = "UPDATE customers SET password = '$hashedPass'  WHERE  id ='" . $id . "'";
        if ($conn->query($updateSQL) === TRUE) {
            echo "Thay đổi mật khẩu thành công";
            echo '<a href="login.php">Trang chủ</a>';
        } else {
            echo  "Thất bại" . $conn->error;
        }
        header('Refresh: 2;url = edit_pass.php');
    } else {
        echo "Thông tin không chính xác";
        exit();
    }
}
