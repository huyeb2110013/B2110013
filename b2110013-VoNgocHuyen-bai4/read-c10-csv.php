<?php 
$csv = array(); 
$name_file = 'BT10.csv'; 
$lines = file($name_file, FILE_IGNORE_NEW_LINES); 
//Hàm file() được sử dụng để đọc dữ liệu từ tệp CSV và trả về một mảng các dòng trong tệp.
//dua du lieu tu file csv vao mang: 
        foreach ($lines as $key => $value) { 
             $csv[$key] = str_getcsv($value); 
             // hàm str_getcsv() được sử dụng để phân tích cú pháp 
             //dòng dữ liệu CSV và trả về một mảng chứa các giá trị được tách ra từ dòng đó.
        } 
//in mang 
        echo '<pre>'; 
        print_r($csv); 
        echo '</pre>'; 
?> 
