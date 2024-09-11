<?php


$dbh = mysqli_connect('localhost', 'root', '', 'melody');
// Kết nối tới MySQL server

if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());
// Nếu kết nối thất bại thì đưa ra thông báo lỗi


//                      *************BÀI TẬP VỀ NHÀ*****************                 


//SỬ DỤNG MYSQL ĐỂ HIỂN THỊ DỮ LIỆU
$sql_stmt = "SELECT * FROM my_contacts";
// Câu lệnh select

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if (!$result)
    die("Database access failed: " . mysqli_connect_error());
// Thông báo lỗi nếu thực thi thất bại

$rows = mysqli_num_rows($result);
// Lấy số hàng trả về

if ($rows) {
    while ($row = mysqli_fetch_array($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
}

/*
//SỬ DỤNG MYSQL ĐỂ THÊM DỮ LIỆU VÀO BẢNG

    $sql_stmt = "INSERT INTO `my_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
    $sql_stmt .= "VALUES('Poseidon','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')"; 

    $result = mysqli_query($dbh, $sql_stmt); // Thực thi câu lệnh SQL

    if (!$result) {
        die("Thêm mới thất bại: " . mysqli_connect_error()); 
        // Thông báo lỗi nếu thực thi câu lệnh thất bại
    } else {
        echo "Bạn vừa thêm thành công vào danh sách";
    }
*/


// SỬ DỤNG MYSQL ĐỂ CẬP NHẬT DỮ LIỆU VÀO BẢNG
/*
    $sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '745',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($dbh,$sql_stmt);
    // Thực thi câu lệnh SQL

    if (!$result) {
        die("Cập nhật dữ liệu thất bại " . mysqli_connect_error());
        // Thông báo lỗi nếu thực thi thất bại
    } else {
        echo "ID số 5 vừa được cập nhật thành công vào danh sách";
    }
 */



/*
// SỬ DỤNG MYSQL ĐỂ XÓA DỮ LIỆU TRONG BẢNG
    $id = 6; 
        // ID của Venus trong CSQL
        
        $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
        // Câu lệnh SQL Delete
        
        $result = mysqli_query($dbh,$sql_stmt); 
        // Thực thi câu lệnh SQL
        
        if (!$result) {
            die("Xóa dữ liệu thất bại " . mysqli_connect_error());
            // Thông báo lỗi nếu thực thi thất bại 
        } else {
            echo "ID số $id Vừa được xóa thành công";
        }
*/

//mysqli_close($dbh); // Đóng kết nối CSDL

?>