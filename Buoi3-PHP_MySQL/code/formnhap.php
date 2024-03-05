<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="luu.php" method="post">
        <label for="name">Name</label>
            <input type ="text" name="name" id="name"><br>
        <label for="email">E-mail</label>
            <input type="text" name="email" id="email"><br>
        <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday"><br>
        <label for="major_id">Industry Code</label>
            <select name="major_id" id="major_id">
                <option value="TN001">TN001</option>
                <option value="TN002">TN002</option>
                <option value="TN003">TN003</option>
                <option value="TN005">TN005</option>
            </select><br>
        <label for="major_name">Industry Name</label>
        <select name="major_name" id="major_name">
        <?php
            $conn = new mysqli("localhost","root","","qlsv");
            $sql = "SELECT * FROM major";
            $result = $conn -> query($sql);
           
            while($ect = $result -> fetch_assoc()){
                echo '<option value="' . $ect['name_id'] . '">' . $ect['name_id'] . '</option>';
            }
        ?>
            <!-- <input list = "major_id-name" name = "major_name" id = "major_name">
            <datalist id="major_id-name">
                <option>Hệ Thống Thông Tin</option>
                <option >Công Nghệ Thông Tin</option>
                <option >Khoa Học Máy Tính</option>
                <option >Kỹ Thuật Phần Mềm</option>
            </datalist><br> -->
        </select>
        <input type ="submit" value = "Submit">
    </form>
</body>
</html>