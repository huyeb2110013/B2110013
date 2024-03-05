<?php

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //trich xuat tep tin tu bieu mau tai len
    //vidu : up tep image.jpg $taget_dir=uploads/, $tarrget_file= uploads/image.jps
$uploadOk = 1;
$imageFileType =strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

//PATHINFO_EXTENSION :phần mở rộng tệp tin , pathinfo($target_file,PATHINFO_EXTENSION): lấy phần mở rộng của tệp tin từ dg dẫn $target_file;
//strtolower chuyển đổi chuỗi thành chữ thường(chuyển pmo rộng này thành chữ thường)
// Check if image file is a actual image or fake image if(isset($_POST["submit"]))//kiem tra da nhan submit chua { 
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// getimagesize() lấy tt kích thc va kieu lay, tham so la dg dan tam thoi cua tep. ktra neu hinh anh kh hop le tra ve false
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }

    // Check if file already exists 
        if (file_exists($target_file)) { 
            echo "Sorry, file already exists."; 
            $uploadOk = 0; 
        } 
    // Check file size 
        if ($_FILES["fileToUpload"]["size"] > 500000) {  
            echo "Sorry, your file is too large."; 
            $uploadOk = 0; 
        }
        // Allow certain file formats 
        if($imageFileType != "jpg" && $imageFileType != "png" &&  $imageFileType != "jpeg" 
        && $imageFileType != "gif" ) { 
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  $uploadOk = 0; 
        } 
        // Check if $uploadOk is set to 0 by an error 
        if ($uploadOk == 0) { 
            echo "Sorry, your file was not uploaded."; 
        // if everything is ok, try to upload file 
        } else { 
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  $target_file)) { 
            echo "The file ".  htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). "  has been uploaded."; 
        //basename : lấy tên tep tư ten gốc cua tep.htmlspecialchars() ma hoa cac ki tu thanh chuoi HTML->ma hoa ten tep tin vua dc lay ten 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "qlbanhang";

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $id = $_COOKIE['id'];
        
        $sql = "UPDATE customers set img_profile = '".$_FILES["fileToUpload"]["name"]."'";
        $sql = "{$sql} WHERE ID = '".$id."'";
        
        echo $sql;

        if($conn->query($sql) == TRUE) {
            echo "Cap nhat csdl thanh xong!" . "<br>";
            echo '<a href="homepage.php">Trang chu</a>';
        }else{
            echo "Error: ".$sql. "<br>" .$conn->error;
        }
    }else{
        echo "Sorry, there was an error uploading your file.";
    }
 }
    ?> 
    
