<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="HEADER2.css">
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
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
            rel="stylesheet">
    </head>

    <body>
        <nav class="navbar" id="navbar" style="background-color:#212529;">
            <div class="w-100">
                <div class="row">
                    <div class="col-4 d-flex">
                        <img src="IMAGES/md.png">
                    </div>
                    <div class="col-5 list">
                        <ul class="d-flex">
                            <li><a href="HEADER2.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="">Rent</a></li>
                            <li><a href="sell.php">Sell</a></li>
                            <li><a href="postforsell.php">Property</a></li>
                            <?php
                    session_start();
                    if (!isset($_SESSION['NAME'])) 
                    {
                        echo "<li><a href='Signin.php'>Sign In</a></li>";
                    }
                     else
                    {
                        echo "
                            <li><i class='fa-solid fa-user' style='color: white;'></i>
                                <div class='DP'>
                                    <ul>
                                        <li><a href='#'>Your Home</a></li>
                                        <li><a href='sell.php'>Saved Homes</a></li>
                                        <li><a href=''>Account Setting</a></li>
                                        <li><a href='logout.php'>Logout</a></li>
                                    </ul>
                                </div>
                            </li>";
                    }
                    ?>

                    
                        </ul>
                    </div>
                    <div class="col-3 bt align-items-center d-flex justify-content-end">
                        <button type="submit">Get in Touch</button>
                    </div>
                </div>
            </div>
        </nav>
        

    </body>

</html>