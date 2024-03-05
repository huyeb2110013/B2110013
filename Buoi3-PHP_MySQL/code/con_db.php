<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Con_db</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlsv";
        // kết nối csdl
        $conn = new mysqli($servername,$username,$password,$dbname);
        if ( $conn -> connect_error ){
           die("Connection failed: " .$conn -> connect_error);
        }
        // else echo "Connect successfully";
        
        // CREATE TABLE 
        //USIGNED : chỉ định cột không kh chứa gtri âm 
        /* AUTO_INCREMENT : tự động tăng giá trị mỗi cột
        thường dùng cho kiểu INT và khóa chính*/
        /*DEFAULT CURRENT_TIMESTAMP đặt gtri mặc định cho cột dạng thời gian
        là thời điểm hiện tại*/

        $sql = "CREATE TABLE student(
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            fullname VARCHAR(50) NOT NULL,
            email VARCHAR(50),
            Birthday date,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )" ;

        if ( $conn -> query($sql) == TRUE){
                echo "Table student created successfully";
            } else {
                echo "Error creating table: {$conn -> connect_error}";
            }
        // đóng kết nối csdl
        $conn -> close ();
    ?>
</body>
</html>