<?php include 'TEST.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form method = "POST">
        <input type = "text" name = "search">
        <input type = "button" name = "enter" value = "search"><br>
    </form>
</body>
</html>
<?php
    $c = mysqli_connect("localhost","root","","urban_estate");
    if($c){
        if(isset($_POST['search'])){
            $val = $_POST['search'];
            $query = "select * from p_info where concat(NAME,ADDRESS,BUILDER) like '%$val%'";
            $check = mysqli_query($c,$query);
        
            

            if($check){
            $query2 = "SELECT p_info.NAME, p_info.PIN, p_info.BUILDER, p_info.AREA, p_info.ID, p_info.ADDRESS, p_info.BHK, p_price.p1, p_price.p2, p_image.IMG 
            FROM p_info 
            LEFT JOIN p_price ON p_info.ID = p_price.ID
            LEFT JOIN p_image ON p_info.ID = p_image.ID
            WHERE CONCAT(p_info.NAME, p_info.ADDRESS, p_info.BUILDER) LIKE '%$val%'";
                $check2 = mysqli_query($c, $query2);
                if(mysqli_num_rows($check) > 0){
                    foreach($check2 as $items){
                        ?><br>
                            <table>
                                <tr>
                                    <td>NAME : <?= $items['NAME']; ?></td>
                                </tr>
                                <tr>
                                    <td>ADDRESS : <?= $items['ADDRESS']; ?></td>
                                </tr>
                                <tr>
                                    <td>BUILDER : <?= $items['BUILDER']; ?></td>
                                </tr>
                                <tr>
                                    <td>PIN CODE : <?= $items['PIN']; ?></td>
                                </tr>
                                <tr>
                                    <td>PRICE : <?= $items['p1'];?><?php echo " - ";?><?= $items['p2']; ?></td>
                                </tr>
                                <tr>
                                    <td>AREA : <?= $items['AREA']; ?></td>
                                </tr>
                            </table>

                        <?php
                    }
                }
                else{
                    echo"no Properties found!!!";
                }
            }
        }
    }
?>