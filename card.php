<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Property Information</title>
  <link rel="stylesheet" href="card.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="image/Navy Blue Urban Modern Real Estate Logo (1).png" class="img-fluid">
</head>

<body>
  <?php include 'TEST2.php'; ?>
  <html>
    <body>
      <p style="margin-top:150px">
</body>
</html>
  <div class="container mt-5">
    <div class="row">
      <?php
      $conn = mysqli_connect("localhost", "root", "", "urban_estate");
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Ensure the 'IMG' column in your database table is of a BLOB or TEXT data type
      $query = "SELECT NAME, ID, ADDRESS, BHK, p1, p2, IMG FROM p_info";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          // Check if the image data is not empty (optional)
          if (!empty($row['IMG'])) {
            $image_src = "data:image/jpeg;base64," . base64_encode($row['IMG']); // Assuming image format is JPEG
          } else {
            $image_src = "default_image.png"; // Provide a default image path if image data is empty
          }
          ?>
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top" src="<?php echo $row['IMG']; ?>" alt="Property Image">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $row['NAME']; ?>
                </h5>
                <p class="card-text">
                  <?php echo $row['ADDRESS']; ?>
                </p>
                <p class="card-text">
                  <?php echo $row['p1'] . " - " . $row['p2']; ?>
                </p>
                <p class="card-text">
                  <?php echo $row['BHK'] . " BHK"; ?>
                </p>
                <p class="card-text">
                  <?php echo $row['ID']; ?>
                </p>
                <form method="POST">
                  <button type="submit" class="btn btn-primary" name="but" value="<?= $row['ID']; ?>">View More</button>
                </form>
                <?php
                if (isset($_POST['but'])) {
                  $id = $_POST['but']; // Access the ID directly from the submitted form data
                  echo"$id";
                  $_SESSION['I'] = $id;
                  if (isset($_SESSION['I'])) {
                    $id = $_SESSION['I'];
                    echo "$id"."got";
                } else {
                    // Handle the case where the session variable is not set
                    echo "Session variable 'I' is not available.";
                }
                
                echo"<script>window.location.href = 'prop_info.php';</script>";
              }
                ?>

              </div>
            </div>
          </div>
          <?php
        }
      } else {
        echo "No properties found";
      }
      mysqli_close($conn);
      ?>
    </div>
  </div>
</body>

</html>