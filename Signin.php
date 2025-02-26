<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="IMAGES/20.jpg" class="img-fluid">
</head>
<body>
    <?php include 'TEST2.php';?>
<div class="container-fluid">
    <div class="form-box">
        <h1 id="title">Sign In</h1>
        
        <?php 
        
        
        // Initialize error message variable
        $error_message = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["em"]) && isset($_POST["ps"])) {
                $e1 = $_POST["em"];
                $p1 = $_POST["ps"];
                $c = mysqli_connect("localhost", "root", "");
                mysqli_select_db($c, "urban_estate");
                if ($c) {
                    $query = "SELECT * FROM log_info WHERE EMAIL = '$e1'";
                    $result = mysqli_query($c, $query);
                    $data = mysqli_fetch_assoc($result);
                    if (!empty($e1) && !empty($p1)) {                 
                        if ($result && mysqli_num_rows($result) > 0) {
                            if ($data['PASSWORD'] == $p1) {
                                $name = $data['NAME'];
                                $_SESSION['NAME'] = $name; 
                                $_SESSION['status'] = "Login successful!!";
                                // Redirect to HEADER2.php
                                header("Location: HEADER2.php");
                                exit(); // Ensure script stops here
                            } else {
                                $error_message = "Invalid Email or Password!!";
                            }
                        } else {
                            $error_message = "User not found, please register";
                        }
                    } else {
                        $error_message = "Email and password are required";
                    }
                } else {
                    $error_message = "Error: " . mysqli_connect_error();
                }
            }
        }
        ?>
        
        <!-- Display error message if it's not empty -->
        
        
        <!-- Sign-in form -->
        <form method="POST">
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" placeholder="Email" name="em" required>
            </div>
            <div class="input-field">
                <i class="fa-solid fa-user"></i>
                <input type="password" placeholder="Password" name="ps" required>
            </div>

            <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message; ?>
        </div>
        <?php endif; ?>

        
            <p>Lost Password ?<a href="1.php">Click Here!</a></p>
            <p>Not Registered?<a href="signup.php">Click Here!</a></p>
            <div class="btn-field">
                <button type="submit" id="signupbtn" name="sb">Sign In</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
