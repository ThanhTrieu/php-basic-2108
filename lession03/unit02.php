<?php
// hien thi du lieu ket hop voi html
$infoStudents = [
    [
        'msv' => 1,
        'name' => 'Van Teo',
        'age' => 20,
        'email' => 'vanteo@gmail.com',
        'gender' => 1, // 1 - nam | 0 - nu
        'phone' => '0132143432',
        'money' => 2000000
    ], // dai dien thong tin cho 1 nguoi sinh vien
    [
        'msv' => 2,
        'name' => 'Van Ty',
        'age' => 19,
        'email' => 'vanty@gmail.com',
        'gender' => 1, // 1 - nam | 0 - nu
        'phone' => '01321433',
        'money' => 3000000
    ],
    [
        'msv' => 3,
        'name' => 'Thi Mo',
        'age' => 18,
        'email' => 'thimo@gmail.com',
        'gender' => 0, // 1 - nam | 0 - nu
        'phone' => '2323232323',
        'money' => 4000000
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thong tin sinh vien</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center"> Thong tin sinh vien</h1>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Ma SV</th>
                            <th>Ho ten</th>
                            <th>Tuoi</th>
                            <th>Email</th>
                            <th>Gioi tinh</th>
                            <th>SDT</th>
                            <th>Hoc bong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- ket hop giua php va html -->
                        <?php $totalMoney = 0; ?>
                        <?php foreach($infoStudents as $key => $item): ?>
                            <?php $totalMoney += $item['money']; ?>
                            <tr>
                                <!-- <//?php echo ?> -->
                                <td><?= $item['msv']; ?></td>
                                <td><?php echo $item['name']; ?></td>
                                <td><?= $item['age']; ?></td>
                                <td><?= $item['email']; ?></td>
                                <td><?= $item['gender'] === 1 ? 'Nam' : 'Nu'; ?></td>
                                <td><?= $item['phone']; ?></td>
                                <td><?= number_format($item['money']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">Tong tien HB</td>
                            <td><?= number_format($totalMoney); ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</body>
</html>