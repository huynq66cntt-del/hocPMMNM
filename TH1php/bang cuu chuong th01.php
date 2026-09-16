<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuc Hanh 1</title>
</head>
<body>
    <h2>cau 1</h2>
    <?php
   
    $n = rand(1, 100);
    for( $i = 0; $i < $n; $i++){
        if($i % 2 == 0) echo $i." ";
    }
    ?>
    <h2>cau 2</h2>
    <table border = "1">
        <tr>
            <?php
            for($i = 1; $i <= 10; $i++){
                printf("<td>Bang cuu chuong %d</td>", $i);
            }
            ?>
            
        </tr>
            <?php
            for($i = 1; $i <= 10; $i++){
                echo "<tr>";
                for($j = 1; $j <=10; $j++){
                    printf("<td>%d * %d = %d</td>", $i, $j, $i * $j);
                }
                echo "</tr>";
            }
            ?>
    </table>
    <h2>Cau 3</h2>
    <?php
    
    //cau3
    $N = rand(-100, 100);
    function Uoc($N){
        for($i = 1; $i < $N; $i++){
            if($N % $i == 0){
                printf("%d ", $i);
            }
        }
    }
    function Ngto($N){
        for($i = 2; $i <= sqrt($N); $i++){
            if($N % $i == 0) return 0;
        }
        return $N > 1;
    }
    function TongNT($N){
        $sum = 0;
        for($i = 2; $i < $N; $i++){
            if(Ngto($i) == 1) $sum+=$i;
        }
        return $sum;
    }
    function SCP($N){
        $i = sqrt($N);
        if($i * $i == $N) return 1;
        else return 0;
    }
    //main
    printf("%d<br>", $N);
    if($N > 0){
        Uoc($N);
        if(Ngto($N)) printf("<br>%d la so nguyen to<br>", $N);
        else printf("<br>%d khong phai la so nguyen to<br>", $N);
        printf("Tong nguyen to nho hon %d: %d<br>", $N, TongNT($N));
        if(SCP($N)) printf("%d la so chinh phuong<br>", $N);
        else printf("%d khong phai la so chinh phuong<br>", $N);
    }
    ?>

</body>
</html>