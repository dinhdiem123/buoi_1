<?php
$servername = "localhost";
$username = "root";
$password = "";

try{
  $conn = new PDO("mysql:host=$servername;dbname=melody", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Kết nối thành công"."<br>";


}catch(PDOException $e) {
  echo "Kết nối thất bại " . $e->getMessage();
  }

//HIỂN THỊ DỮ LIỆU


$stmt = $conn->prepare("SELECT * FROM my_contacts");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
if (count($rows) > 0) {
    foreach ($rows as $row) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No contacts found.";
}
/*
//THÊM DỮ LIỆU VÀO BẢNG

try {
   
    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country)
            VALUES ('Po','Mail','541',' poseidon@sea.oc ','Troy','Ithaca')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Bạn đã thêm thành công"."<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
*/
  
 

//CẬP NHẬT DỮ LIỆU 
try {

  
    $sql = "UPDATE my_contacts SET contact_no = '702' WHERE id='9'";
 
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo " Bạn vừa cập nhật ".$stmt->rowCount() . " thông tin thành công"."<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  

//XÓA DỮ LIỆU
try {
    // sql to delete a record
    $sql = "DELETE FROM my_contacts WHERE id='11'";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Bạn vừa xóa thành công"."<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }


?>
