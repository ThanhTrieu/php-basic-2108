<?php
// supper global $_SERVER
// biet duoc thong tin ben phia SERVER
//echo "<pre>";
//print_r($_SERVER);

// set time zone
date_default_timezone_set('Asia/Ho_Chi_Minh');

/********** Xu ly ngay thang (date - date time) php ******/
// 01 - lay ra ngay thang hien tai theo dinh dang
$today = date("d/m/Y H:i:s"); // d/m/Y;
//echo $today;
$day = date("d"); // lay ra ngay : D in ra text
$month = date("m"); // lay ra thang M : in ra text
$year = date("Y"); // lay ra nam: y :tra ve 2 so cua cua nam
$hour = date("H"); // lay ra time : h tinh theo mui gio 12 tieng am -pm
//echo $day .'-' . $month . '-' . $year . ' - time : ' . $hour;

// so sanh ngay thang - chuyen doi thoi gian ve so giay
$todate = date("Y-m-d"); //
$yesterday = "2021-11-30"; //
$timeTodate = strtotime($todate); // 23:59:00 ngay 01-12-2021
$timeYesterday = strtotime($yesterday); //23:59:00 ngay 30-11-2021
//echo $timeTodate . ' ---- ' . $timeYesterday;
// strtotime() : tra ve so giay tinh tu 00:00:00 ngay 1/1/1970 cho den ngay can tinh
// '2021-01-12' < '2021-02-12' // ko lam the
// biet so giay thi co the chuyen doi ve ngay thang
$myDay = date('Y-m-d', $timeYesterday);
//echo $myDay; //  "2021-11-30"; 

$d1 = date('Y-m-d', strtotime('+3months')); // day - week - month
//echo $d1; // "2021-01-04";

$date_int = mktime(0, 0, 0, 12, (1 + 12), 2021);// h - m - s - m - d - y
echo date('d-m-Y', $date_int);

// co giao dien cho nguoi dung nhap ngay thang nam sinh (sinh nhat)
// bam nut kiem tra voi ngay hien trai
// biet duoc la con bao lau thi toi sinh nhat
// hay la da qua sinh nhat
// hay chinh hom nay la sinh nhat
// 5-12-2021 // 4??