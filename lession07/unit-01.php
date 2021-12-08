<?php
    session_start();
    $state = trim($_GET['state'] ?? '');
    $message = [];
    if($state === 'error' && !empty($_SESSION['errorSendMail'])){
        $message = $_SESSION['errorSendMail'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send mail</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 offset-3">

                <h3 class="text-center my-3"> Send Mail</h3>

                <?php if(!empty($message)): ?>
                    <ul>
                        <?php foreach($message as $err):?>
                            <?php if(!empty($err)): ?>
                                <li style="color: red;"><?= $err; ?></li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <form class="border p-3" action="server/send-mail.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label>To email</label>
                        <input type="email" class="form-control" name="email" />
                    </div>
                    <div class="mb-3">
                        <label>Subject</label>
                        <input type="text" class="form-control" name="subject" />
                    </div>
                    <div class="mb-3">
                        <label>attach file</label>
                        <input type="file" name="attachFile" />
                    </div>
                    <div class="mb-3">
                        <label>Content</label>
                        <textarea class="form-control" name="content" rows="6"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="btnSendEmail"> Send </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>