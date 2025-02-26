<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="contactus.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="image/Navy Blue Urban Modern Real Estate Logo (1).png" class="img-fluid">
</head>

<body>
        <?php
            include "TEST.php";
        ?>

        <section class="sc">
            <div class="container">
                <div class="help">
                    <h3>Help Center Frequently Asked Questions</h3>
                </div>
            </div>

            <div class="container">
                <div class="text">
                    <h4>Can’t Find What You’re Looking For?</h4>
                    <p>Fill out the form below and we will get in touch with you as soon as possible.</p>
                    <div class="f1">
                        <input type="text" placeholder="First Name" required><input type="text" placeholder="Last Name">
                    </div>

                    <div class="f2">
                        <input type="email" placeholder="Email" required><input type="text" placeholder="Phone No">
                    </div>

                    <div class="f3">
                        <input type="text" placeholder="What Can We Help You With?">
                    </div>

                    <div class="sb mb-3">
                        <button type="submit">Submit</button>
                    </div>
                    
                </div>
            </div>
        </section>
        <hr>
        <!--FOOTER-->

        <?php include 'footer.php'; ?>
</body>
</html>
    