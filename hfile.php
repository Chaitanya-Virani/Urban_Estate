<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="hfile.css"> <!-- You can link your CSS file here -->
    <script>
        function toggleSearch() {
            var searchBar = document.getElementById("searchBar");
            searchBar.style.display = (searchBar.style.display === "block") ? "none" : "block";
        }
    </script>
</head>

<body>
    <header>
        <section>
            <div class="menu_bar">
                <a href="home.php"><img src="IMAGES/Home logo.png" class="img-fluid" height="70px" width="150px"></a>

                <ul class="align:cenetr;">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="">Deal Type<i class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdown__menu">
                            <ul>
                                <li><a href="#">Buy</a></li>
                                <li><a href="sell.php">Sell</a></li>
                                <li><a href="">Rent</a></li>
                                <li><a href="">Other</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">FAQs</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li style="position: relative;">
                        <button type="button" onclick="toggleSearch()" style="background-color: white; border:none;"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <div id="searchBar" class="search-bar">
                            <input type="text" placeholder="Search..." class="sss">
                        </div>
                    </li>
                    <?php
                    session_start();
                    if (!isset($_SESSION['NAME'])) {
                        echo "<li><a href='Signin.php'>Sign In</a></li>";
                    } else {
                        echo "
                            <li><i class='fa-solid fa-user' style='color: #000000;'></i>
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
        </section>
    </header>
</body>

</html>
