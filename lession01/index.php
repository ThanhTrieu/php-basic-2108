<?php
// trong truong hop nay ko dung den the dong php
// khi nao can dung the dong php - khi nao ko ?
// trong truong hop khong co the dong php, ngam hieu rang trong file code nay chi chua ma lenh(code) php ma thoi


echo "<h1> Hi you !</h1>"; // ban chat php van hieu la string(chuoi)
// ben phia client se nhan dc(trinh duyet) se doc va dich - hien thi

// tren web server xampp - file co ten la index.php : hieu day la file mac dinh chay (khi ko chi ro truy cap chinh xac vao file nao)

/******** Khai bao bien trong php ***************/
// su dung ky tu $ de khai bao bien
// cac ky tu dung dang sau ky $ duoc goi la ten bien
$name = 'Teo';
// mot bien duoc duoc goi la hop le :
// 1- bat dau bang ky tu $
// 2 - theo sau ky tu $ khong phai la khoang trang hay la so
//$ age = 20; // sai
//$1email = 'Teo@gmail.com'; // sai
// $if; $esle; hop le
// tieu chuan de dat ten bien
// camel - under score, case study
$myName = 'Teo'; // hay dung
$MyName = 'Teo';
$my_name = 'Teo';
// nhat quan chi su dung 1 loai trong toan bo ung dung

/*********** khai bao hang so *************/
// 1 - define
define('PI',3.14); // khong dung trong class oop
const MY_NAME = 'ABC'; // su dung trong class oop
// hang so viet hoa het va dung dau gach duoi ngan cach(quy uoc)
// ko co ky tu $ 
echo MY_NAME;
echo "<br/>";
echo PI;
echo "<br/>";
//////////////////////////////////////////////////

$test = 'hello';
$a = 'test'; // gia tri cua 1 bien lai la 1 bien khac.
echo $$a; // tham chieu den gia tri cua bien khac
// $$ : khong phai la de dung khai bao bien
echo "<br/>";
///////////////////////////////////////////////////


/************ 1 so dieu luu y *******************/
// php ko quy dinh san kieu du lieu cho bien - chi nhan kieu du lieu khi gan gia tri cho bien

$myName = 'Teo'; // khong giong nhu tu khoa let trong js
// duoc phep dinh nghia lai bien da ton tai. (trong thuc te thi nen tranh)

$myEmail = 'teo@gmail.com';
echo gettype($myEmail); // hien thi kieu du kieu cua bien
echo "<br/>";

$myAge = 20;
echo gettype($myAge);
echo "<br/>"; // integer

$checking = true;
echo gettype($checking); // boolean
echo "<br/>";

$money = 10.12;
echo gettype($money); //double
echo "<br/>";

$demo = null; // trong php : khong bao gio khai bao bien ma ko gan tri cho no (gay ra loi Notice)
// Error
// 1: Notice
// 2: warning
// 3: fatal error(bat buoc phai fix - logic)
echo gettype($demo); // NULL
echo "<br/>";
// khi khai bao 1 bien trong php - ma chua can su dung ngay, hay gan gia tri bang null cho no - khi gan bang null, trinh thong dich no se hieu la bien do chua ton tai - chua can cap phat vung nho de luu tru

$a = '10'; // number string : trong chuoi chi chua so
$b = 20;
$c = $a + $b; // phep toan hoc
echo $c;
