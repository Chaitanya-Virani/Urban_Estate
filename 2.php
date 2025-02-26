<?php include 'TEST.php'; ?>
<!DOCTYPE html>
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
                    <h1 id="title">Enter OTP</h1>
                    <p>An OTP has been sent to your email. Enter it below:</p>
                    <form method="POST">
                        <div class="input-group">
                            <div class="input-field" id="otpfield">
                                <input type="text" placeholder="Enter OTP" name="otp" required>
                            </div>
                            <div class="btn-field">
                                <button type="submit" id="verifybtn" name="submit">Verify OTP</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</body>
</html>
<?php
echo $_SESSION['em'];
    if (isset($_POST['submit'])) {
        $otp = $_SESSION['otp'];
        $otp1 = $_POST['otp'];
        
        if($otp == $otp1)
        {
            echo"<script>window.location.href = '3.php';</script> ";          

        }
    }
?>