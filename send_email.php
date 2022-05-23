<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
include('connection/connection.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions


function sendemail()
{
    $conn = connection();
    $mail = new PHPMailer(true);
    try {
        //Get Code
        $sql1 = "SELECT `code`,`uname` FROM `admin` WHERE `id`= '1'";
        $code = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($code) > 0) {
            while ($row = mysqli_fetch_array($code)) {
                $verificationcode = $row['code'];
                $useremail = $row['uname'];
            }
        }else{

        }
        //Server settings
        $mail->SMTPDebug = 1;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.zoho.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'samgyandmartsend@zohomail.com';                     //SMTP username
        $mail->Password   = 'M!YMrXxT9C9kW9M';                               //SMTP password
        $mail->SMTPSecure = 'ssl';                                 //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('samgyandmartsend@zohomail.com', '');
        $mail->addAddress($useremail, 'Joe User');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Verification Code ';
        $mail->Body    = 'This is your verication code <b>  "' . $verificationcode . '"</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo "<script>alert('Verification Sent! Check your Email'); window.location='forgot-password2.php'</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
