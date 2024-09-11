<!DOCTYPE HTML>
<HTML LANG="EN">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document</title>
    
</head>
<body>
    <?php
    //bài 8
    function giaiPTBac2($a, $b, $c) {
        // Kiểm tra nếu a bằng 0 thì không phải phương trình bậc 2
        if ($a == 0) {
            if ($b == 0) {
                return "Phương trình vô nghiệm";
            } else {
                return "Phương trình có một nghiệm: x = " . (-$c / $b);
            }
        }
        // Tính delta
        $delta = $b * $b - 4 * $a * $c;

        // Kiểm tra giá trị của delta để tìm nghiệm
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        } elseif ($delta == 0) {
            $x1 = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x1 = x2 = $x1";
        } else {
            return "Phương trình vô nghiệm";
        }
    }

    
//bài 10 trung bình cộng của mảng
    function tinhTrungBinhCong($arr) {
        $tong = array_sum($arr);
        $sophantu = count($arr);
        if ($sophantu == 0) {
            return "Mảng rỗng";
        }
        return $tong / $sophantu;
    }
    
    
//bài 9 hcn
    function printRectangle($width, $height) {
        for ($i = 0; $i < $height; $i++) {
            for ($j = 0; $j < $width; $j++) {
                if ($i == 0 || $i == $height - 1 || $j == 0 || $j == $width - 1) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "<br>";
        }
    }
    
   

   
    ?>
</body>
</html>