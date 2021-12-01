<?php
function kiemTraNgaySinhNhat()
{
    if(isset($_POST['btnCheck'])){
        $birthday = $_POST['yourBirthday'] ?? '';
        //echo $birthday;
        // can so sanh ngay va thang sinh nhat voi ngay va thang hien tai
        $arrBirthday = explode('-', $birthday); // tra ve 1 mang
        // kiem tra xem nguoi dung co nhap dung dinh dang ngay thang ko
        $year  = $arrBirthday[0] ?? null; // nam sinh nhat
        $month = $arrBirthday[1] ?? null; // thang sinh nhat
        $day   = $arrBirthday[2] ?? null; // ngay sinh nhat
        $currentYear = date('Y'); // lay ra full current year;
        if(checkdate($month, $day, $year)){
            $yourCurrentBirthday = $currentYear.'-'.$month.'-'.$day;
            $today = date('Y-m-d');
            // so sanh yourCurrentBirthday voi today ???
            $timeYourBirthday = strtotime($yourCurrentBirthday);
            $timeToday = strtotime($today);
            if($timeYourBirthday < $timeToday){
                // qua sinh nhat roi
                header("Location:../birthday.php?state=over&d=".$birthday);
            } elseif($timeYourBirthday === $timeToday) {
                // sinh nhat
                header("Location:../birthday.php?state=happy&d=".$birthday);
            } else {
                // tinh con bao ngay nua toi sinh nhat - thong bao cho nguoi dung
                $timeDays = $timeYourBirthday - $timeToday;
                $rangeDay = $timeDays/86400;
                header("Location:../birthday.php?state=wait&d=".$birthday."&range=".$rangeDay);
            }
        } else {
            header("Location:../birthday.php?state=error");
        }
    }
}
kiemTraNgaySinhNhat();