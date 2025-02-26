<?php
    include 'hfile.php';
?>
<?php

$id = $_SESSION['I'];
// echo"$id"."got";

$c = mysqli_connect("localhost", "root", "");
mysqli_select_db($c, "urban_estate");

if ($c) 
{
    $query = "SELECT p_info.NAME, p_info.ID, p_info.BUILDER, p_info.ADDRESS, p_info.BHK, p_price.p1, p_price.p2, p_image.IMG 
    FROM p_info 
    JOIN p_price ON p_info.ID = p_price.ID
    JOIN p_image ON p_info.ID = p_image.ID";

$result = mysqli_query($c, $query);
if (!empty($row['IMG'])) {
    $image_src = "data:image/jpeg;base64," . base64_encode($row['IMG']); // Assuming image format is JPEG
  } else {
    $image_src = "default_image.png"; // Provide a default image path if image data is empty
  }
// Use a loop to iterate through all rows
 while ($row = mysqli_fetch_assoc($result)) {
    echo "ID: " . $row['ID'] . "<br>";
    echo "NAME: " . $row['NAME'] . "<br>";
    echo "BUILDER: " . $row['BUILDER'] . "<br>";
    // ... and so on for other columns

    // Access data from p_price and p_image tables
    echo "PRICE: " . $row['p1'] . "<br>"; // Replace with actual price column name
    echo "IMAGE URL: " . $image_src . "<br>"; // Replace with actual image URL column name

    echo "<br>"; // Add a line break between entries
}

// Close the connection (optional, assuming it's done elsewhere)
mysqli_close($c);

}
?>