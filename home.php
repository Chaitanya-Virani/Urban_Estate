<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
            integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="icon" href="IMAGES/Navy Blue Urban Modern Real Estate Logo (1).png" class="img-fluid">
    </head>

    <body>
        <?php include "TEST.php";?>
        <?php
    if (isset($_SESSION['status']))
    {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
    }
?>
        <!-------------------------------------------------2 st CARSOUL-------------------------------------------------------------------------->


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="IMAGES/5.png" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/6.png" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="IMAGES/9.png" class="d-block w-100" alt="Slide 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


        <!-------------------------------------------------END CARSOUL-------------------------------------------------------------------------->

        <!--3 st Section-->
        <section>

            <h2 class="t">
                Explore Rentals in Charlotte, NC
            </h2>

            <div class="container list">
                <div class="row bg-light imgg">
                    <div class="col-3 mage">
                        <button type="submit">
                            <a href="#">
                                <img src="IMAGES/2.jpg" class="img-fluid">

                            </a>

                        </button>
                    </div>

                    <div class="col-3 mage">
                        <button type="submit">
                            <a href="#">
                                <img src="IMAGES/2.jpg" class="img-fluid">
                            </a>
                        </button>

                    </div>

                    <div class="col-3 mage">
                        <button type="submit">
                            <a href="#">
                                <img src="IMAGES/2.jpg" class="img-fluid">
                            </a>
                        </button>

                    </div>

                    <div class="col-3 mage">
                        <button type="submit">
                            <a href="#">
                                <img src="IMAGES/2.jpg" class="img-fluid">
                            </a>
                        </button>

                    </div>

                </div>


            </div>
            <a href = "card.php"><button type="button" class="vc">View More</button></a>
        </section>
        <hr>
        <!--SECTION $ 1S Text and 1S Images-->

        <section>
            <div class="Rental">
                <h3>The Most Rental Listings</h3>
                <p>Choose from over 1 million apartments, houses, condos, and townhomes for rent.
                </p>
            </div>

            <div class="container ">
                <div class="row mb-5">
                    <div class="col-6 Renting">
                        <div class="TD">
                            <h4>Renting Made Simple</h4>
                            <p>Browse the highest quality listings, apply online, sign your lease,and even pay your rent
                                from any device.</p>
                        </div>
                        <div class="LINK">
                            <a href="">Find Out More</a>
                        </div>
                    </div>

                    <div class="col-6 p-0">
                        <img src="IMAGES/3.jpg" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>
        <hr>
        <!--SECTION  2  $ 1S Text and 1S Images-->

        <section>
            <div class="Rental">
                <h3>Discover Homeownership</h3>
                <p>
                    Considering buying a home? Explore our sister site, Homes.com, designed for all,<br>including
                    first-time
                    buyers, to help you find your dream home.
                </p>
            </div>

            <div class="container ">
                <div class="row mb-5">
                    <div class="col-6 Renting">
                        <div class="TD">
                            <h4>Explore Your Options</h4>
                            <p>Opting to own a home is a major decision! Fortunately, Homes.com offers precise property
                                data, an agent directory, and collaboration tools for informed choices.</p>
                        </div>
                        <div class="LINK">
                            <a href="">Start Your Search</a>
                        </div>
                    </div>

                    <div class="col-6 p-0">
                        <img src="IMAGES/4.jpg" class="img-fluid">
                    </div>

                </div>
            </div>
        </section>

        <hr>

        <!--SECTION  3  $ 1S Text and 1S Images-->

        <section>
            <div class="Rental">
                <h3>The Perfect Place to Manage Your Property</h3>
                <p>Work with the best suite of property management tools on the market.</p>
            </div>

            <div class="container C1">
                <div class="row mb-5">
                    <div class="col-6 Renting">
                        <div class="TD">
                            <h4>Advertise Your Rental</h4>
                            <p>Connect with more than 75 million renters looking for new homes using our comprehensive
                                marketing platform.</p>
                        </div>
                        <div class="LINK">
                            <a href="">List Your Property</a>
                        </div>
                    </div>

                    <div class="col-6 p-0">
                        <img src="IMAGES/5 1.png" class="img-fluid">
                    </div>

                </div>
            </div>


            <div class="container mt-1">
                <div class="row mb-5">
                    <div class="col-6 p-0">
                        <img src="IMAGES/5 1.png" class="img-fluid">
                    </div>

                    <div class="col-6 Renting">
                        <div class="TD">
                            <h4>Lease 100% Online</h4>
                            <p>Accept applications, process rent payments online, and sign digital leases all powered on
                                a
                                single platform.</p>
                        </div>
                        <div class="LINK">
                            <a href="">Manage Your Property</a>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <hr>

        <!--FOOTER-->

        <?php include 'footer.php'; ?>

    </body>

</html>