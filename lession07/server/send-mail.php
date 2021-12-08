<?php

session_start();

require 'src/PHPMailer.php';
require 'src/Exception.php';
require 'src/SMTP.php';

// su dung thu vien khi require vao
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

const PATH_UPLOAD = 'uploads/';

function mySendMail()
{
    if(isset($_POST['btnSendEmail'])){
        $toEmail = $_POST['email'] ?? null;
        $toEmail = strip_tags($toEmail);

        $subject = $_POST['subject'] ?? null;
        $subject = strip_tags($subject);

        // upload file
        $fileAttachment = null;
        if(!empty($_FILES['attachFile']['tmp_name'])){
            // thuc su nguoi dung da upload file
            if($_FILES['attachFile']['error'] === 0){
                $fileAttachment = $_FILES['attachFile']['name'];
                $tmpFile = $_FILES['attachFile']['tmp_name'];
                move_uploaded_file($tmpFile, PATH_UPLOAD.$fileAttachment);
            }
        }

        $content = trim($_POST['content'] ?? '');

        // validate data
        $errorsSendMail = validateDataSendMail($toEmail, $subject, $fileAttachment, $content); // mang thong bao loi
        $flagError = false;
        foreach($errorsSendMail as $err) {
            if(!empty($err)){
                $flagError = true;
                break;
            }
        }

        if($flagError){
            // co loi thao tac nhap du lieu cua nguoi dung
            // gan loi vao mang session
            $_SESSION['errorSendMail'] = $errorsSendMail;
            // quay ve lai giao dien send email
            header("Location:../unit-01.php?state=error");
        } else {
            // xoa bo session loi neu co
            if(!empty($_SESSION['errorSendMail'])){
                unset($_SESSION['errorSendMail']);
            }
            // tien hanh send mail
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output

                //$mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.googlemail.com';                  //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'testt3h@gmail.com';                  
                $mail->Password   = 'testt3h@*#';                           //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


                //Recipients
                $mail->setFrom('testt3h@gmail.com', 'T3H-PHP2108');
                $mail->addAddress($toEmail); // gui den ai 
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                $mail->addAttachment(PATH_UPLOAD.$fileAttachment); // file vua upload
                
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $subject;
                $mail->Body    = $content;
                //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if($mail->send()){
                    header("Location:../unit-01.php?state=success");
                } else {
                    header("Location:../unit-01.php?state=fail");
                }

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }
}

function validateDataSendMail($email, $subject, $file, $content)
{
    $errors = [];
    $errors['email'] = filter_var($email, FILTER_VALIDATE_EMAIL) ? '' : 'Vui long nhap dung dinh dang email';
    $errors['subject'] = empty($subject) ? 'Vui long nhap tieu de' : '';
    $errors['fileAttachment'] = $file === null ? 'Vui long dinh kem file' : '';
    $errors['content'] = empty($content) ? 'Vui long nhap noi dung' : '';
    return $errors;
}
mySendMail();