<?php
// btcq : xu ly ve string
$string = 'hom nay la ngay mung 10/12/2021 + abc';
// kiem tra trong chuoi co so hay ko ?
// trong chuoi co ton tai ky tu "/"
// trong chuoi "/" co bat dau cua 1 chuoi ko
$btcq = '/[0-9]+/'; // // [] + : syntax cua btcq
//$btcq = '/\//'; // '/' chinh cua phap cua bieu thuc chinh quy nen khi ma truyen vao ben trong dinh nghia cua btcq can them dau '\'
// trong chuoi co dau + hay ko
//$btcq = '/\+/';
if(preg_match($btcq, $string)){
    echo 'OK';
} else {
    echo 'No';
}
echo "<br/>";

// kiem tra 1 chuoi so co 3 chu so va la so chan
$numberString = '124'; // hop le
// abc : a 1-9{1} | b \d([0-9]){1} | c [0,2,4,6,8]{1};
$btcq2 = '/^[1-9]{1}\d{1}[0,2,4,6,8]{1}$/';
// ^ : kiem tra viec ky tu bat dau ntn ?
// $: kiem tra viec ky tu ket thuc ntn ?
// [1-9]{1}: kiem tra so thu nhat
// \d{1}: kiem so thu 2
// [0,2,4,6,8]{1} : kiem tra so thu 3
// tong hop ca 3 dieu kien lai chinh kiem tra theo yeu cau cua bai toan dua ra
if(preg_match($btcq2, $numberString)){
    echo 'Thoa man dieu kien';
} else {
    echo 'Khong thoa man dieu kien';
}
echo "<br/>";

// kiem tra 1 chuoi so : co 6 chu so - cap so thu nhat chia het cho 5 cap so thu 2 la so chan - cap so thu 3 la so le
// abcdef: ab - cd - ef
// 152031
// kiem tra so dien thoai cua nguoi dung nhap vao xem co phai la so dien thoai cua nha mang viettel ko?
// 1 - 10
// dau so ???
// 09 678 (3) 7 con lai mien la so
// 016 8|9 6mien la so 
// 03 8| 7 so 
// let ke dc het cac dau nhan dien nha mang
$numberPhone = '0905091304';
$checkPhone = '/^(09[6-8]\d{7})|(03[2-9]\d{7})$/';
if(preg_match($checkPhone,$numberPhone)){
    echo "SDT {$numberPhone} dung la so nha mang Viettel";
} else {
    echo "SDT {$numberPhone} ko phai la so nha mang Viettel";
}
echo "<br/>";

// dd/mm/yyyy;
// 01/02/2021
// 10/12/2021
// 31/11/2021
$date = "10/12/2021";
$checkDate = '/^(0[1-9]|1\d|2\d|3[0-1])\/(0[1-9]|1[0-2])\/([1-9]\d{3})$/';
if(preg_match($checkDate,$date, $match)){
    // $match : tham so tuy chon (tham so thu 3 truyen vao preg_match)
    // tra ve ket qua la 1 mang chua cac ket qua ma btcq so khop
    ///echo "<pre>";
    //print_r($match);
    // da thoa man dinh dang - dua vao $match kiem tra tinh dung dan cua du lieu ngay thang
} else {
    echo "Dinh dang ngay thang nhap khong dung";
}
// viet btcq kiem tra do manh yeu cua mk nguoi dung
// mk manh : it nhat 8 ky tu tro len va co it nhat 1 chu hoa, it nhat 1 chu thuong, it nhat 1 so va it nhat 1 ky tu bac biet
// Ab1@dssfsfdfsdfsfsf;