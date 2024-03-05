<!DOCTYPE HTML> 
<html>  
    <head>
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font awesome.min.css">
       
    </head>
<body> 
    <form action="log.php" method="post"> 
                <label for="email">Username:</label>
                <input type="text" name="email"><br> 

                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass"><br> 

                <input type="checkbox" id="showPasswordCheckbox" onchange="togglePasswordVisibility()">
                <label for="showPasswordCheckbox">Hiển thị mật khẩu</label><br>
                <input type="submit"> 
    </form> 

    <script src="./login-test.js"></script>
</body> 
</html>
