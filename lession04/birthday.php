<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiem tra ngay sinh nhat</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        $state = $_GET['state'] ?? '';
        $birthday = $_GET['d'] ?? '';
        $day = $_GET['range'] ?? '';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">
                <h1 class="text-center my-3"> Kiem tra ngay sinh nhat</h1>

                <?php if($state === 'error'): ?>
                    <p class="text-center my-3 text-danger"> Vui long nhap dung du lieu</p>
                <?php elseif($state === 'over'): ?>
                    <p class="text-center my-3 text-info"> Sinh nhat ban da qua</p>
                <?php elseif($state === 'happy'): ?>
                    <p class="text-center my-3 text-success"> Chuc mung sinh nhat ban</p>
                <?php elseif($state === 'wait') : ?>
                    <p class="text-center my-3 text-primary"> Con <b><?= $day; ?></b> ngay se toi sinh nhat ban</p>
                <?php endif; ?>

                <form class="border p-3" method="post" action="server/check-birthday.php">
                    <div class="mb-3">
                        <label>Nhap ngay sinh</label>
                        <input value="<?= $birthday; ?>" type="date" class="form-control" name="yourBirthday" />
                    </div>
                    <button class="btn btn-primary" name="btnCheck" type="submit">Kiem tra</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>