<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4</title>
</head>
<body>
        <form action="save_pass.php" method="post">
                Mật khẩu cũ :   <input type = "password" name ="old_pass" id="old_pass"><br>
                Mật khẩu mới :   <input type = "password" name ="new_pass" id="new_pass"><br>
                Nhập lại mật khẩu :   <input type = "password" name ="again_pass" id="again_pass"><br>
                
                <input type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()">
                <label for="showPasswordCheckbox">Hiển thị mật khẩu</label><br>

                <input type="submit" name="submit" value="Lưu"> 
        </form>

        <script src="edit_pass.js"></script>
</body>
</html>