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
        $sql = "SELECT * FROM student WHERE ID = '".$id."'";
        $result = $conn -> query($sql);
        //trả về 1 hàng kq trong mỗi lần gọi và use trong vòng lặp để gọi từng
        $row = $result -> fetch_assoc();
        print_r($row);
    ?>
<body>
    
     <form action="sua.php" method="post">
        <label for="id">ID</label>
            <input type="text" name="id" id="id" value ="<?php echo $row['id']; ?>"><br>
        <label for="name">Name</label>
            <input type ="text" name="name" id="name" value="<?php echo $row['fullname']; ?>"><br>
        <label for="email">E-mail</label>
            <input type="text" name="email" id="email" value ="<?php echo $row['email']; ?>"><br>
        <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" value ="<?php echo $row['Birthday']; ?>"><br>
        <label for="major_id">Industry Code</label>
            <select name="major_id" id="major_id">
                <option value="TN001">TN001</option>
                <option value="TN002">TN002</option>
                <option value="TN003">TN003</option>
                <option value="TN005">TN005</option>
            </select><br>
        <label for="major_name">Industry Name</label>
            <input list = "major_id-name" name = "major_name" id = "major_name">
            <datalist id="major_id-name">
                <option>Hệ Thống Thông Tin</option>
                <option >Công Nghệ Thông Tin</option>
                <option >Khoa Học Máy Tính</option>
                <option >Kỹ Thuật Phần Mềm</option>
            </datalist><br>
        <input type ="submit" value = "Submit">
        
     </form>
    
</body>
</html>