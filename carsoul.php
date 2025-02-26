<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="image/Navy Blue Urban Modern Real Estate Logo (1).png" class="img-fluid">
</head>
<body>

<?php include 'hfile.php'; ?>

<!-- Add this button to trigger the login popup -->
<button type="button" class="btn btn-primary" id="loginBtn">Login</button>

<!-- Modal for login form -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Your login form goes here -->
        <form method="POST" action="">
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
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // JavaScript to show the login modal when the button is clicked
    $(document).ready(function() {
        $('#loginBtn').click(function() {
            $('#loginModal').modal('show');
        });
    });
</script>

</body>
</html>
