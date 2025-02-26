<?php include 'TEST2.php';?>
<html>
    <body>
        <p style="margin-top:140px;">
</body>
</html>
<?php
// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "urban_estate");


    // $id = $_POST['id'];
    $name = $_POST['name'];
$builder = $_POST['builder'];
$address = $_POST['address'];
$pin = $_POST['pin'];
$bhk = $_POST['BHK'];
$area = $_POST['area'];
$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$file = $_FILES['file'];
$filename = $file['name'];
$filetmpnm = $file['tmp_name'];
$newFilename = uniqid() . "-" . $filename; // Generate unique filename
$destination = 'uploads/' . $newFilename;
move_uploaded_file($filetmpnm, $destination);

// Print the uploaded image using HTML <img> tag
// echo '<img src="' . $destination . '" alt="Uploaded Image">';



    // Inserting valuess!!!
    $q = "INSERT INTO p_info(NAME, BUILDER, ADDRESS, AREA, BHK, PIN, IMG, p1, p2) VALUES ('$name','$builder','$address','$area','$bhk', '$pin','$destination', '$p1', '$p2')";
    $check = mysqli_query($conn, $q);
    if ($check) {

        // $q1 = "SELECT ID FROM p_info where NAME = '$name'";
        // $c = mysqli_query($conn, $q1);
        // if ($c) {
        //     $n = mysqli_fetch_assoc($c);
        //     $id = $n['ID'];

        //     $q2 = "insert into p_price values ('$id','$p1','$p2')";
        //     $c1 = mysqli_query($conn, $q2);

        //     if ($c1) {
        //         $query = "insert into p_image values('$id','$destination')";
        //         $check = mysqli_query($conn, $query);
        //         if ($check) {
        //             echo "data inserted!!!";
        //         } 
        //         else {
        //             echo mysqli_error($conn);
        //         }

        //     }
        //     else {
        //         echo mysqli_error($conn);
        //     }

        // }
        // else {
        //     echo mysqli_error($conn);
        // }
        // echo"$c";
        // $q1 = "select ID from p_info where "
        echo"Data Inserted!!!";

    } else {
        echo mysqli_error($conn);
    }












}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Name:<input type="text" name="name" required><br><br>
        Builder:<input type="text" name="builder" required><br><br>
        Address:<input type = "text" name = "address" required><br><br>
        PIN:<input type = "text" name = "pin" required><br><br>
        Area:<input type="text" name="area" required><br><br>
        BHK:<input type="text" name="BHK" required><br><br>
        Price:<input type="text" name="p1"required><input type="text" name="p2"required><br><br>
        Images:<input type="file" name="file" id="fileToUpload"required><br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>

</html>