<!DOCTYPE HTML>
<HTML LANG="EN">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document</title>
    
</head>
<body>
    <?php
        #1Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
            echo strlen("Hello world")."<BR/>";
        #2Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
            echo str_word_count("XIN CHAO BAN")."<br>";
        #3Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
            echo strrev("HE LO")."<br>";
        #4Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
            eCHO STRPOS("xIN CHAO BẠN","BẠN")."<br>";
        #5Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
            ECHO STR_REPLACE("BẠN","WORLD","HELLO BẠN")."<br>";
        #6Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
            /* Hàm trả về số âm nếu chuỗi thứ nhất nhỏ hơn chuỗi thứ 2,
             trả về 0 nếu hai chuỗi bằng nhau và trả về số dương nếu chuỗi thứ nhất lớn hơn chuỗi thứ 2*/
                $str1 = "Anh trai say 2";
                $str2 = "Anh";
                $resuld = strncmp($str1,$str2,1);
                echo $resuld;
                if(strncmp($str1,$str2,3)==0){
                    echo" chuỗi có bắt đầu bằng chuỗi con"."<br>";
                }
                else{
                    echo "chuỗi không bắt đầu bằng chuỗi con"."<br>";
                }
        #7Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
                $Hoa = strtoupper($str1);
                echo $Hoa."<br>";
        #8Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
                $Thuong = strtolower($Hoa);
                echo $Thuong."<br>";
        #9Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
                $In_dau = ucwords($str1);
                echo $In_dau."<br>";
        #10Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
            # chỉ xóa khoảng trắng ở đầu và cuối chuỗi, không xóa khoảng trắng ở giữa chuỗi.
                $loai_1 = trim($str1);
                echo $loai_1."<br>";
        #11Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
            # Hàm này sẽ kết thúc khi ký tự đầu tiên của chuỗi không nằm trong danh sách ký tự do bạn chỉ định
                $loai_2 = ltrim($str1,"A");
                echo $loai_2."<br>";
        #12Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
                $loai_3 = rtrim($str1,"2");
                echo $loai_3."<br>";
        #13Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
                $loai_4 = explode(" ",$str1);
                print_r ($loai_4)."<br>";
        #14Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
                $array = array("Đinh","Thị","Ngọc","Diễm");
                $loai_5 = implode(" ",$array);
                echo $loai_5."<br>";
        #15Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
            # Cú pháp: str_pad( $str, $lent, $pad_str, $pad_type) --- Nếu ko chỉ định vị trí thêm vào thì mặc định sẽ thêm ở cuối chuỗi
            # Lưu ý: $pad_type phải viết in hoa hết     
                $loai_6 = str_pad( $str1, 15, "_", STR_PAD_LEFT);
                echo $loai_6."<br>";
        #16Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
                $str3 = "Anh trai vượt ngàn chông gai";
                $str4 = "gai";
                $loai_7 = strrchr($str3,"g");
                
                if($loai_7 == true){
                    if($loai_7 == $str4){
                        echo "Chuỗi có kết thúc bằng một chuỗi con khác"."<br>";
                    }
                    else{
                        echo "Chuỗi không kết thúc bằng một chuối con khác"."<br>";
                    }
                }
                else{
                    echo "Không tìm thấy ký tự cần tìm"."<br>";
                }
        #17Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
            /* Cú pháp: strstr( $str, $char, $type)
                Lưu ý: $type là ko bắt buộc, nếu ko truyền tham số thì mặc định sẽ lấy theo FALSE
                    Nếu $type là TRUE thì trả về kq từ đầu chuỗi --> vị trí xuất hiện đầu tiên của $Char (không bao gồm $Char)
                    Ngược lại FALSE thì trả về kq tính từ vị trí ký tự xuất hiện đầu tiên của $Char --> cuối chuỗi (bao gồm $Char)*/
                $loai_8 = strstr($str3,"v",false);
                $str5 = "vượt";
                if(strncmp($loai_8,$str5,7)==0){
                    echo" chuỗi có chứa chuỗi con"."<br>";
                }
                else{
                    echo" chuỗi không chứa chuỗi con"."<br>";
                }
        #18Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
                $partern = '/1|2/';
                $subject = $str1;
                $replacement = '';
                echo preg_replace($partern, $replacement, $subject)."<br>";
        #19Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
                if (is_int($str1)) {
                    echo 'chuỗi có là một số nguyên'."<br>";
                }else{
                    echo 'chuỗi không phải là một số nguyên'."<br>";
                }
        #20Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
                $email = "diemdinh531@gmail.com";
                if(filter_var($email,FILTER_VALIDATE_EMAIL)=== false){
                    echo $email ," không là email"."<br>";
                }
                else{
                    echo $email ," là email"."<br>";
                }
    ?>
</body>
</html>