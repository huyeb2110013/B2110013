

<?php 
    $conn = new mysqli("localhost","root","","qlsv");
    if($conn -> connect_error){
        die("Connection failed: {$conn -> connect_error}");

    }


    $sql = "SELECT * FROM major";
    $result = $conn -> query($sql);
    if($result -> num_rows > 0){

        $result = $conn -> query($sql);
        $result_all = $result -> fetch_all();
    
    ?>
        <h1>Bảng Thông tin về chuyên ngành</h1>

        <table border = 1>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan = "2">HanhDong</th>
                </tr>
<?php 
        foreach($result_all as $row){
            echo "<tr>" 
                       
                        ."<td>{$row[0]}</td>" 
                        ."<td>{$row[1]}</td>".
                    
                    "<td>";
?>

            <form action="major_form_edit.php" method ="post">
                <input type ="submit" name ="action" value ="Sua"/>
                <input type = "hidden" name ="id" value ="<?php echo $row[0];?>"/>

            </form>
            <?php
                echo "</td>";
                echo "<td>";
            ?>
             <form action="major_xoa.php" method ="post">
                <input type="submit" name="action" value="Xoa"/>
                <input type="hidden" name="id" value ="<?php echo $row[0]; ?>">
            </form>
            
            <?php
                echo "</td></tr>";
            }
                echo "</table>";
        }  else echo "Không có kết quả trả về!!";

        $conn->close();
        ?>
