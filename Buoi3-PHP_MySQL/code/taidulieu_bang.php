
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";
//$table = "student";

$conn = new mysqli($servername, $username, $password, $dbname);
    if( $conn -> connect_error){
        die("Connection failed: {$conn -> connect_error}");

    } 

//tao chuoi luu cau lenh lai
$sql = "SELECT * FROM student";
//thuc thi cau lenh thong qua doi tuong conn
$result = $conn -> query($sql);
//show dulieu nhu bien 
if( $result->num_rows > 0){ //num_rows kiem tra bao nhieu ban ghi duoc tra ve tu Select
        print_r( $result ); // hien thi noi dung va cau truc doi tuong $result
        echo '<br>';

//     }
//cach2
while ($row = $result->fetch_assoc()){ // fetch_assoc lấy ra 1 bản ghi next từ kq truy vấn
    echo "id: {$row["id"]}" ."- Hoten: {$row["fullname"]}" ."- Email: {$row["email"]}" 
    ."-ngaysinh: {$row["Birthday"]}" ." - reg date: {$row["reg_date"]}" ."<br>";
    
} 

// $result -> free_result();
//trinh bay voi bang html
//fetch_all trong 1l gọi strả về all các hàng kq từ câu truy vấn dưới dạng mang 2chieu
$result = $conn -> query($sql);
$result_all = $result -> fetch_all();
print_r($result_all); //hiển thị thuộc tính và giá trị của đối tượng 
echo "<table border = 1>
<tr><th>ID</th>
<th>Hoten</th>
<th>Email</th>
<th>Ngaysinh</th>
</tr>";
foreach($result_all as $row ){
    $date = date_create($row[3]); // tạo đối tượng dateTime từ 1 chuỗi ngày tháng ở vtri t3
    echo "<tr>" 
    ."<td>{$row[0]}</td>" 
    ."<td>{$row[1]}</td>" 
    . "<td>{$row[2]}</td>" 
    ."<td>{$date->format('d-m-Y')}</td>".
    "</tr>";
    
}   echo "</table>";
}
else echo "Rỗng";

$conn ->close();

// cách 5 sử dụng fetch_array

// while ($row = $result->fetch_array()){ 
//     echo "id: {$row["0"]}" ."- Hoten: {$row["1"]}" ."- Email: {$row["2"]}" 
//     ."-ngaysinh: {$row["3"]}" ." - reg date: {$row["4"]}" ."<br>";
    
// } 
// $result -> free_result();

// }
// // cách 6 sử dụng fetch_row
// while($row = $result -> fetch_row()){
//     echo "id: {$row["0"]}" ."- Hoten: {$row["1"]}" ."- Email: {$row["2"]}" 
//     ."-ngaysinh: {$row["3"]}" ." - reg date: {$row["4"]}" ."<br>";
    
// }
// }

//cách 6 fetch_object()

// while($row = $result -> fetch_object()){
//     echo "id: {$row["id"]}" ."- Hoten: {$row["fullname"]}" ."- Email: {$row["email"]}" 
//     ."-ngaysinh: {$row["Birthday"]}" ." - reg date: {$row["reg_date"]}" ."<br>";
    
// }

// }