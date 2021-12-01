<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <?php
        $state = $_GET['state'] ?? null;
    ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 offset-3">

                <?php if($state === 'error'): ?>
                    <h4 class="text-center text-danger my-3"> Vui long nhap du lieu</h4>
                <?php endif; ?>

                <?php if($state === 'error_connect'): ?>
                    <h4 class="text-center text-danger my-3"> He thong dang tam dung, ban vui long quay lai sau</h4>
                <?php endif; ?>

                <?php if($state === 'fail'): ?>
                    <h4 class="text-center text-danger my-3"> Tai khoan khong ton tai tren he thong !</h4>
                <?php endif; ?>

                <form method="post" action="server/handle-login.php" class="mt-3 p-3 border">
                    <div class="mb-3">
                        <label>username</label>
                        <input type="text" class="form-control" name="user"/>
                    </div>
                    <div class="mb-3">
                        <label>password</label>
                        <input type="password" class="form-control" name="pass"/>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnLogin"> Login </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>