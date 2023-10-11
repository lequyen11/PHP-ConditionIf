
     <?php
// 10.1. Viết chương trình nhập vào một số nguyên. Kiểm tra số đó nguyên dương hay nguyên âm. In ra màn hình kết quả.

$a = -3;
if($a > 0){
    echo ("Số: " . $a . " là số nguyên dương");
}else if($a == 0){
    echo ("Số: " . $a . " không phải là số nguyên dương va cũng không phải là số nguyên âm");   
}else if($a < 0) {
    echo ("Số: " . $a . " là số nguyên âm");
}else{
    echo ("Vui lòng nhập số");
}
echo '<br>';

//  10.2. Viết chương trình nhập vào một số nguyên n. Kiểm tra n chia hết cho 3 hay 5. In kết quả ra màn hình.

$n = 15;
if($n % 3 == 0 && $n % 5 != 0)
    echo ("Số $n: chia hết cho 3");
else if($n % 5 == 0 && $n % 3 != 0)
    echo ("Số $n: chia hết cho 5");
else if($n % 5 == 0 && $n % 3 == 0)
    echo ("Số $n: chia hết cho ca 3 va 5");
else 
    echo( " So nhap vao k hop le hoac k chia het cho 3 va 5");
echo '<br>';

// 10.3. Viết chương trình nhập vào tháng trong năm. In ra số ngày của tháng đó.
$Month = 2;
if($Month == 1 || $Month == 3 || $Month == 5 || $Month == 7 || $Month == 8 || $Month == 10 || $Month == 12)
    echo ("Tháng " . $Month . " có 31 ngày!");
else if($Month == 2)
    echo ("Tháng " . $Month . " có 28 ngay hoac 29 ngày!");
else 
    echo ("Tháng " . $Month . " có 30 ngày!");
echo '<br>';

// 10.4. Viết chương trình giải phương trình bậc 2.

$a = 1;
$b = -4;
$c = 4;

$delta = $b * $b - 4 * $a * $c;

if($delta > 0){
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    echo "Phương trình có hai nghiệm thực là x1 = $x1 và x2 = $x2.";
}
elseif($delta == 0){
    $x = -$b / (2 * $a);
    echo "Phương trình có nghiệm kép là x = $x.";
}else{
    echo "Phương trình không có nghiệm thực.";      
}
echo '<br>';

// 10.5. Viết chương trình nhập vào 3 số a, b, c. Kiểm tra có phải là 3 cạnh của một tam giác không?

$a = 4;
$b = 6;
$c = 3;
if( $a + $b > $c && $a + $c > $b && $b + $c > $a)
    echo "Ba số $a, $b, $c là ba cạnh của một tam giác.";
else
    echo "Ba số $a, $b, $c không phải là ba cạnh của một tam giác.";
echo '<br>';    

?>