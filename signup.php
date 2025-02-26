<html>

<head>
    <link rel="stylesheet" href="login.css">
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

<?php include 'TEST.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form is submitted

    $n = isset($_POST["nm"]) ? $_POST["nm"] : "";
    $e = isset($_POST["em"]) ? $_POST["em"] : "";
    $p = isset($_POST["ps"]) ? $_POST["ps"] : "";

    // Validate and process the form data
    if (!empty($n) && !empty($e) && !empty($p)) {
        $c = mysqli_connect("localhost", "root", "");
        if ($c) {
            mysqli_select_db($c, "urban_estate");

            $q = "INSERT INTO log_info VALUES ('$n', '$e', '$p')";
            if (mysqli_query($c, $q)) {
                // Redirect to another page after successful insertion
                header("Location: Signin.php");
                exit; // Make sure to exit after the header redirection
            } else {
                echo "Error: " . mysqli_error($c);
            }
        } else {
            echo "Error: " . mysqli_error($c);
        }
    } else {
        echo "Please fill in all the fields";
    }
}
?>

<!-- The rest of your HTML content goes here -->

    <div class="container-fluid">
       
        <div class="form-box">
            <h1 id="title">Sign Up</h1>
            <form method = "POST" action  = "">
                <div class="input-group">
                    <div class="input-field" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" placeholder="Name" name = "nm" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="Email" name = "em" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-user"></i>
                        <input type="password" placeholder="Password" name = "ps" required>
                    </div>
                    <p>Already SignIn <a href="Signin.php">Click Here</a></p>
                </div>
                <div class="btn-field">
                    <button type="submit" id="signupbtn" name = "sb">sign Up</button>
                </div>
            </form>
        </div>
    </div>
   <!--<script>
        let signupbtn = document.getElementById("signupbtn");
        let signinbtn = document.getElementById("signinbtn");
        let namefield = document.getElementById("namefield");
        let title = document.getElementById("title");

        signinbtn.onclick = function () {
            namefield.style.maxHeight = "0";
            title.innerHTML = "Sign In";
            signupbtn.classList.add("disable");
            signinbtn.classList.remove("disable");

        }

        signupbtn.onclick = function () {
            namefield.style.maxHeight = "60px";
            title.innerHTML = "Sign Up";
            signupbtn.classList.remove("disable");
            signinbtn.classList.add("disable");

        }



    </script>-->

</body>

</html>

