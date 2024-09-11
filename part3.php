<!DOCTYPE HTML>
<HTML LANG="EN">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document</title>
    
</head>
<body>
    <?php
       /* $a = 5;
        $b = 7;
        $a++;
        echo $a."<br>";
        echo "a+b=".$a+$b."<br>";
        echo "a+b=".$a+$b;
        echo "a+b=".$a+$b."<br>";

        $mau = array("xanh","đỏ","tím","vàng");

        foreach($mau as $value){
            echo "$value";
        }
        */
        function chuvihcn(int $x, int $y)
        {
            return (($x+$y)*2);
        }

        $x = 7;
        $y = 4;
        echo "chuvihcn là:".chuvihcn(7,4)."<br>";

        //giải phườn trình bậc 1
        function giaiptbac1(int $a, int $b)
        {
            if($a!=0){
                if($b!=0){
                    return " nghiệm của phương tình là:".(-$b)/$a;
                }
                else{
                    return "phương trình có nghiệm duy nhất là: 1";
                }
            }
            else{
                return "phương tình có vô số nghiệm";
            }
        }

        $a =3;
        $b = 4;
       
        echo giaiptbac1(3,4)."<br>";
    //in ra danh sách và thứ tự sinh viên
        $list_sv = array(
           "1"=>"Bạch Bùi Nguyệt Anh",
           "2"=>"Đàm Phương Anh",
           "3" => " Nguyễn Mai Anh",
           "4" => " Phạm Thị Ngọc Ánh",
           "5" => " Đào Linh Chi",
           "6" => " Đinh Thị Ngọc Diễm"
        );
        /*foreach($list_sv as $x => $x_value){
            echo " Mời bạn có STT là ".$x."-".$x_value." lên bảng";
            echo "<br>";
        } */
       
       /* $sttRandom = array_rand($list_sv);
        $tenTuongUng = $list_sv[$sttRandom];
        echo "Mời bạn có STT \"$sttRandom\" - \"$tenTuongUng\" lên bảng làm bài tập.";
        */
         // echo $list_sinh_vien['23']."<br>";

        function tim_sinh_vien_bang_STT(int $stt, array $list_sv)
        {
            foreach ($list_sv as $key => $value) {
                if ($stt == $key) {
                    return $value;
                }
            }
        }

        $stt = rand(1, 6);
        echo '<div class="alert alert-success" role="alert"><b>';
        echo "Mời bạn may mắn có stt " . $stt . " tên là: " . tim_sinh_vien_bang_STT($stt, $list_sv);
        echo '</b></div>'; 


        $x1 = 5;
        $x2 = 7;
        function sum()
        {
            return $x1 +$x2;
        }

        echo sum();

    ?>
</body>
</html>