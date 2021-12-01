<?php
// xu ly voi file trong php
// 01 - mo file
$pathFile = '../public/data/mysql.txt';
$fopen = fopen($pathFile, 'a+'); // r: chi thao tac doc du lieu trong file
// r+ : ghi de du lieu len du lieu cu
// w+: ghi de du lieu len du lieu cu, neu file chua ton tai, se tao file moi
// a+: ghi tiep du lieu vao du lieu cu
if($fopen){
    //echo "Mo file thanh cong";

    // ghi du lieu vao file
    fwrite($fopen, 'Hoc lap trinh php');

    // doc du lieu tu trong file
    // $data = fread($fopen, filesize($pathFile)); // filesize: lay ra dung luong file(kich thuoc)
    // echo $data; // khong thay du lieu ngoai trinh duyet
    // khi ghi du lieu vao file xong roi, kich thuoc cua file bi thay doi

    // mo lai file de doc
    $fopen2 = fopen($pathFile, 'r');
    $data = fread($fopen2, filesize($pathFile)); 
    //echo $data;

    // dong file
    fclose($fopen);
    fclose($fopen2);
    
} else {
    echo "Mo file that bai";
}