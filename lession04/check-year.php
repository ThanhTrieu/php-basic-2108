<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiem tra nam nhuan DL</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        $state = $_GET['state'] ?? null;
        $year  = $_GET['y'] ?? null;
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">
                <h5 class="text-center"> Kiem tra nam nhuan DL</h5>

                <?php if($state === 'error'): ?>
                    <p class="text-danger text-center"> Vui long nhap nam kiem tra la so</p>
                <?php endif; ?>

                <?php if($state === 'ok'): ?>
                    <p class="text-success text-center"> Nam nhuan DL</p>
                <?php endif; ?>

                <?php if($state === 'fail'): ?>
                    <p class="text-success text-center"> Khong phai nam nhuan DL</p>
                <?php endif; ?>

                <form class="mt-3 p-3 border" method="post" action="server/handle-check-year.php">
                    <div class="mb-3">
                        <label>Moi nhap nam kiem tra</label>
                        <input value="<?= $year; ?>" type="number" class="form-control" name="year" />
                    </div>
                    <button class="btn btn-primary" type="submit" name="btnCheck"> Kiem tra</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>