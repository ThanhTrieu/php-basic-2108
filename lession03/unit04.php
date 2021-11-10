<?php
// cac ham xu ly ve mang (cac ham co san cua php)
$person = ['name' => 'Teo', 'age' => 23];
// thay doi ten key-index sang chu hoa hay chu thuong(ap dung cho mang ket hop - khong tuan tu)
$person2 = array_change_key_case($person, 1); // 1 CASE_UPPER: chu hoa | 0 CASE_LOWER : chu thuong
echo '<pre>';

//print_r($person); // van la cai mang ban dau - khong bi thay doi
//print_r($person2); // mang da bi thay doi gia tri key-index

$number = [1,1,2,3,4,2,2,2,3,4,5];
print_r(array_count_values($number));
// gia tri cua mang ban dau se la key-index cua mang ket qua tra ve
// so lan xuat hien giong cua cac phan tu ban dau se la gia tri cua mang ket qua tra ve
$number2 = [1,2,3,4,5,6,7,8,9];
$number3 = array_chunk($number2, 5, true); // 3 phan tu ?
// true - mac dinh : tu dong nhan lai key-index tu mang ban dau
// false : tu dong tao lai key-index moi
print_r($number3);

$number4 = array_slice($number2, 3, 3, true);
// true: lay lai key-index cua mang ban dau
// mac dinh - false : tu dong tao lai key-index moi
print_r($number4);

if(in_array(6, $number2)){
    // kiem tra phan tu co nam trong mang ko ?
    echo 'OK';
} else {
    echo 'Not Found';
}