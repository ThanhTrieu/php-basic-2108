<?php
declare(strict_types=1); 
// thong bao loi tren phien ban 7.0 tro len (cu phap dung php7 tro len)

// 1 - Null Coalescing Operator 
$n = isset($a) ? $a : 1; // ???
// echo $n; // ???
// kiem tra dieu kien dung hay sai. Dung thi tra ve gia tri dang sau ?, Sai thi tra ve gia tri dang :
// mot bien duoc goi la ton tai, khi mh khai bao no va khong gan gia tri bang null

// tu phien ban php 7 tro len (php 8 phien ban moi nhat - khong co phien ban php 6)
$a = 100;
$m = $a ?? 10; //isset($a) ? $a : 10; 
// echo $m;

// 2 - Spaceship Operator 
// $n = 1;
// $m = 100;
$compare = $n <=> $m;
// ket qua tra ve -1 thi bieu thuc bien tay trai nho hon bieu thuc ben tay phai
// ket qua tra ve 1 thi bieu thuc bien tay trai lon hon bieu thuc ben tay phai
// ket qua tra ve 0 thi bieu thuc bien tay trai bang bieu thuc ben tay phai
// echo $compare;


// vong lap do...while (kiem tra dieu kien sau)
// luon luon thuc thi it nhat 1 vong lap roi sau do kiem tra dieu kien de co tiep tuc thuc thi cac vong lap sau hay ko?
$i = 1;
do {
    //echo $i;
    $i++;
} while($i < 10);
// 1 - n (dieu kien luon dung vong lap vo han)

/************************* HAM trong PHP ********************/
$k = 10; // global - toan cuc (khong nam trong ham)
function sumNumber($a, $b = null)
{
    // de su dung duoc bien toan cuc tu ben ngoai ham vao
    // khai bao bien la bien toan cuc cho ham biet
    global $k;
    return $a + $b + $k; // khong hieu bien $k; // bien cuc bo (duoc dinh nghia trong ham)
}
// 1 - tu khoa(keyword) function (bat buoc phai khai bao va viet dung cu phap)
// 2 - sumNumber: ten ham (do LTV tu dinh nghia)
// 3 - $a, $b : tham so (tham so bat buoc - hay tham so khong bat buoc) 
// 4 - return : tu khoa  - tra ket qua ve cho ham va thoat khoi ham
$res = sumNumber(3,4);
//echo $res;

// bien static trong ham
function checkStatic()
{
    static $count = 0; // cuc bo - nhung khong giong nhu cac bien cuc bo thong thuong, gia tri cua bien se duoc luu lai sau moi lan goi ham ra su dung (thoat ra khoi ham)
    $count++;
    echo $count;
}
//checkStatic(); // goi ham ra su dung
//checkStatic();
//checkStatic();
//checkStatic();

// tham chieu(tham bien) - tham tri ham php (truyen tham so vao trong ham)
// 1- tham tri : truyen bien vao ham, khi ra khoi ham, bien do khong bi thay doi theo logic trong ham

$thamTri = 10;
function hamThamTri($thamTriThamSo)
{
    $thamTriThamSo += 10; // $thamTriThamSo =  $thamTriThamSo + 10
}
echo $thamTri; // 10
echo "<br/>";
hamThamTri($thamTri); // bien truyen vao ham ko bi thay doi theo logic trong than ham
echo $thamTri; // 10
echo "<br/>";

$thamChieu = 20;
function hamThamChieu(& $thamSo)
{
    // $thamSo : bien truyen vao ham theo kieu tham chieu
    $thamSo += 30;
}
echo $thamChieu; // 20
echo "<br/>";
hamThamChieu($thamChieu); // truyen bien vao ham theo kieu tham chieu - gia tri cua bien se bi thay doi theo logic ben trong ham
echo "<br/>";
echo $thamChieu; // 50
echo "<br/>";

/*********** lamda function php / anonymous functions. *****************/
// function a() {

// }
// let a = function() {
    // cus js
// }

$v = 10; // bien toan cuc
$kiemTraChanLe = function($n) use($v) { // closure
    // su dung bien toan cuc tu ngoai vao trong ham
    $n += $v;
    if($n % 2 === 0){
        return true;
    }
    return false;
}; // phai co cham ;
// ham thong qua 1 bien
$result = $kiemTraChanLe(5);
//var_dump($result); // hien thi ket qua va kieu du lieu cua bien

/// nhung cach dinh nghia ham ben tren - su dung dc cho cac phien ban php khac nhau
/// Nhung cach dinh nghia ham ben duoi sau day chi su dung tu phien ban php 7.0 tro len ma thoi

function kiemTraSoNguyenTo(int $a) : bool 
{
    if($a <= 1){
        return false;
    }
    if($a === 2){
        return true;
    }
    for($i = 2; $i <= sqrt($a); $i++) {
        if($a % $i === 0){
            return false;
        }
    }
    return true;
}

// int a: gia tri truyen vao cho tham so a phai co kieu du lieu la int
// :bool : ham nay bat buoc phai co return va phai return ve gia tri co kieu du lieu la boolean

$check = kiemTraSoNguyenTo(15);
//var_dump($check);

function tinhGiaiThua(int $a) : int 
{
    if($a < 0){
        return 0;
    }
    if($a === 0 || $a === 1){
        return 1;
    }  

    $gt = 1;
    for($i = 1; $i <= $a; $i++){
        $gt *= $i;
    }
    return $gt;
}
$r = tinhGiaiThua(5);
var_dump($r);