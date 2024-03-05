<!DOCTYPE html>
<html>
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

        $id = $_POST['id'];
        //Sử dụng cả nháy đơn và nháy kép cho biến $id giúp đảm bảo 
        //rằng nếu giá trị của $id chứa ký tự đặc biệt hoặc dấu nháy đơn, nó sẽ không làm hỏng cú pháp của truy vấn SQL
        $sql = "SELECT * FROM major WHERE ID = '".$id."'";
        $result = $conn -> query($sql);
        //trả về 1 hàng kq trong mỗi lần gọi và use trong vòng lặp để gọi từng
        $row = $result -> fetch_assoc();
        print_r($row);
    ?>
<body>
    
     <form action="major_edit.php" method="post">
        <label for="id">ID</label>
          <input type="text" name="id" id="id" value ="<?php echo $row['id']; ?>"><br>
        <label for="name_id">Name</label>
          <input type ="text" name="name_id" id="name_id" value="<?php echo $row['name_id']; ?>"><br>
          
        <input type ="submit" value = "Submit">
     </form>
    
</body>
</html>