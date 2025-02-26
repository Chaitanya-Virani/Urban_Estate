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
                <h1 id="title">Enter New password</h1>
                <form method="POST" action="">
                    <div class="input-group">
                        <div class="input-field" id="namefield">
                            <input type="password" placeholder="New password" name="nm" required>
                        </div>
                        <div class="input-field" id="namefield">
                            <input type="password" placeholder="Confirm password" name="cnm" required>
                        </div>
                        <div class="btn-field">
                            <button type="submit" id="signupbtn" name="reset">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
    <?php
    if(isset($_POST['reset']))
    {   
        if($_POST['nm'] == $_POST['cnm'])
        {
            $pass = $_POST['cnm'];
            $em = $_SESSION['em'];
            $con = mysqli_connect("localhost", "root", "");
            mysqli_select_db($con, "urban_estate");
            if ($con) {
                $q = "update log_info set PASSWORD = '$pass' where EMAIL = '$em'";
                $check = mysqli_query($con,$q);
                if($check)
                {
                    echo"<script>window.location.href = 'Signin.php';</script> ";          

                }
            }
        }
    }?>