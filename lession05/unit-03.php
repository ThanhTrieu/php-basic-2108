<?php

$url = 'http://www.abc.com';
// kiem tra xem thuc su co phai url
if(filter_var($url, FILTER_VALIDATE_URL)){
    // FILTER_VALIDATE_URL : hang so ham
    // oke
    echo 'OK';
} else {
    // error
    echo 'Error';
}
echo '<br/>';

$email = 'test@example.com';
// kiem tra xem co phai email ko??? - kiem tra dinh dang
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'Yes';
} else {
    echo 'No';
}
echo '<br/>';

// xoa bo cac ky tu ko hop le
$url2 = 'http://www.tôi-đang-học-php.com';
// xoa bo di cac ky tu khong dung dinh dang la 1 URL
$newUrl = filter_var($url2, FILTER_SANITIZE_URL);
echo $newUrl;
// neu newUrl === url2 : khong co ky nao bat hop le nguoc lai