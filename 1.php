<?php include 'TEST.php'; ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';
if (isset($_POST['submit'])) {
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "urban_estate");
    if ($con) {
        $mail = $_POST['m'];
        $_SESSION['em'] = $mail; 
        $q = "select NAME from log_info where EMAIL ='$mail' ";
        $check = mysqli_query($con, $q);

        if (mysqli_num_rows($check) == 0) {
            echo '<div class="alert alert-danger" role="alert">
                                    Email not Registered!!!
                                    </div>';
        } else {
            function generateOTP($length = 6)
                {
                    $characters = '0123456789';
                    $otp = '';

                    // Generate random OTP of specified length
                    for ($i = 0; $i < $length; $i++) {
                        $otp .= $characters[rand(0, strlen($characters) - 1)];
                    }

                    return $otp;
                }

                // Generate a 6-digit OTP
                $otp = generateOTP();


                // $nm = "ADMIN";
                $mail = new PHPMailer(true);
                try {
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'smtp.gmail.com';          // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                     // Enable SMTP authentication
                    $mail->Username = 'askurbanestate@gmail.com';// SMTP username
                    $mail->Password = 'uqkh qrsl lesz wtyi';         // SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                  // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;

                    $mail->setFrom('askurbanestate@gmail.com', 'Urban Estate');
                    $mail->addAddress($_SESSION['em']);
                    $mail->addReplyTo('askurbanestate@gmail.com', 'Reply');
                    // $mail->addCC('solankirudra587@gmail.com','Locket!!');
                    // $mail->addAttachment('file path');

                    $mail->isHTML(true);                       // Set email format to HTML
                    $mail->Subject = 'Reset Password';
                    $mail->Body = 'Here is your otp to reset password' . $otp;

                    $mail->send();
                    echo 'Email has been sent successfully';
                    $_SESSION['otp'] = $otp;
                    // $_SESSION['mail'] = $mail;
                    if($otp)
                    {
                        echo"<script>window.location.href = '2.php';</script> ";          
                    }

                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
        }
    } else {
        unset($_POST['m']);
        echo '<div class="alert alert-danger" role="alert">
                                    Database connection failed!!!
                                    </div>';
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="forgetpass.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" href="image/Navy Blue Urban Modern Real Estate Logo (1).png" class="img-fluid">
</head>

<body>
    <div class="container-fluid">
        <div class="form-box">
            <h1 id="title">Forget Your Password</h1>
            <p>Enter your email address and we\'ll send you a link to set your password</p>
            <form method="POST" action="">
                <div class="input-group">
                    <div class="input-field" id="namefield">
                        <input type="email" placeholder="Enter Email" name="m" required>
                    </div>
                    <div class="btn-field">
                        <button type="submit" id="signupbtn" name="submit">Send</button>
                    </div>
                </div>
            </form>
            <div class="knp">
                <p>Know Your Password?<a href="Signin.php">Sign in</a></P>
            </div>
        </div>
    </div>
</body>

</html>