<?php
// tim hieu va xu ly voi chuoi (String) trong php
// chuoi phai dat trong nhay don hoac nhay kep
// khai bao so, chu cai, cac ky tu dac biet .... nam trong chuoi
$title = 'php';
// $title; // loi
$str = 'Dang hoc $title co ban'; // $title : khong phai la bien (cac ky tu binh thuong thoi)
$str2 = "Dang hoc {$title} basic"; // $title : la 1 bien
// neu dung nhay don thi khong su dung bien ngay ben trong chuoi dc
// dung nhay kep thi su dung bien ngay trong chuoi
//echo $str;
echo '<br/>';
//echo $str2;

$str3 = 'Dang hoc'. $title .'co ban'; 
// . : toan tu ghep chuoi - noi chuoi
//echo $str3;

$str4 = 'Dang hoc \'JS\' co ban';
// long - ghep nhay don vao trong nhay don khac.
$str5 = "Dang hoc \"CSS\" co ban";
$str6 = "Dang hoc 'CSS' co ban"; // oke
$str7 = 'Dang hoc "CSS" co ban'; // oke
// echo $str4;
// echo '<br/>';
// echo $str5;
// echo '<br/>';
// echo $str6;
// echo '<br/>';
// echo $str7;

/************ Cac ham xu ly voi chuoi (cac ham co san php da dinh nghia cho ban) *****/
$myStr = 'hoc php khong kho'; // dem trong chuoi co bao ky tu
// echo strlen($myStr); // cac ky tu don gian
// mb_strlen(): dung ham nay cho cac dinh dang ky tu dac biet
$pass = '123456789';
$pass2 = '123456789';
echo md5($pass);
echo '<br/>';
echo md5($pass2);
echo '<br/>';

$myStr2 = "Cac ban ban di choi thi nghi som nhe";
// di choi = di ngu : tim kiem va thay the ky tu nam trong chuoi
$myStr3 = str_replace('di choi', 'di ngu', $myStr2);
echo $myStr2;
echo '<br/>';
echo $myStr3;
echo '<br/>';

$fruits = 'cam,quyt,mit,dua';
$arrFruits = explode(',', $fruits);
// mang ko echo : echo chi danh cho string
//var_dump($arrFruits);

$scription = "<script>alert('hi you')</script>"; // php hieu la string // trinh duyet doc dich la js
//echo $scription;
echo htmlentities($scription); // php no se chuyen het cac cu phap cua html,css,js ve thanh cac text(ki tu) binh thuong - trinh se ko hieu la html - css -js nua