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

    $sql = "SELECT * 
            FROM student sv, major m
            WHERE sv.major_id = m.id";
    
    //MYSQLI_ASSOC kết quả tar về là mảng liên kết truy vấn theo tên cột (key)
    $result = $conn->query($sql);
    if( $result->num_rows > 0 ){
        $result = $conn->query($sql);
        $result_all = $result -> fetch_all();
    ?>
    <h1>Bảng dữ liệu sinh viên</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Hoten</th>
            <th>Email</th>
            <th>Ngaysinh</th>
            <th>MaNganh</th>
            <th>TenNganh</th>
            <th colspan="2">Hanhdong</th>
        </tr>

        <?php
            foreach($result_all as $row){
               // $date = date_create ($row['Birthday']);
                echo "<tr>" 
                       
                        ."<td>{$row[0]}</td>" 
                        ."<td>{$row[1]}</td>" 
                        ."<td>{$row[2]}</td>"
                        ."<td>{$row[3]}</td>"
                        ."<td>{$row[5]}</td>"
                        ."<td>{$row[7]}</td>".
                    "<td>";
        ?> 
            <form action="form_sua.php" method ="post">
                <input type ="submit" name ="action" value ="Sua"/>
                <input type = "hidden" name ="id" value ="<?php echo $row[0];?>"/>

            </form>
            <?php
                echo "</td>";
                echo "<td>";
            ?>
            <form action="xoa.php" method ="post">
                <input type="submit" name="action" value="Xoa"/>
                <input type="hidden" name="id" value ="<?php echo $row[0]; ?>">
            </form>

            <?php
                echo "</td></tr>";
            }
                echo "</table>";
        }   else echo "Không có kết quả trả về!!";

        $conn->close();
        ?>
    <!-- </table> -->

