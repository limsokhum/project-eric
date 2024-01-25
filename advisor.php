<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Costom Link CSS -->
    <link rel="stylesheet" href="asset/css/style.css">

    <!-- Link favavicon -->
    <link rel="shortcut icon" href="asset/images/ERICRemove Logo.png" type="image/x-icon">

    <!-- Skitter Styles -->
    <link href="asset/dist/skitter.css" type="text/css" media="all" rel="stylesheet" />

    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Research Advisory Team | Education, Research</title>

    <style>
    .profile-advicer {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    @media screen and (max-width: 996px) {
        .profile-advicer {
            display: block;
        }
    }
    </style>
</head>

<body>
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>
    <!-- End Top Navigation Bar -->

    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start content Article -->
    <div class="container mt-5">
        <div data-aos="fade-down-right" class="row">
            <div class="left-nav col-sm-3">
                <ul>
                    <li>
                        <a href="director-message.php">Director's Message</a>
                    </li>
                    <li>
                        <a href="our-hostory.php">Our History</a>
                    </li>
                    <li>
                        <a href="boarddirector.php">Board of Directors</a>
                    </li>
                    <li>
                        <a href="advisor.php">Board of Advisors</a>
                    </li>
                    <li>
                        <a href="ericstaff.php">ERIC Staff</a>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-down-left" class="right-nav col-sm-9">
                <div class="container right-nav my-4 ">
                    <a href="">
                        <div class="card my-3" style="width: 100%;">
                            <div class="card-body my-4">
                                <h5 class="card-title">Research Advisory Team</h5>
                                <div class="line-directore">

                                </div>
                                <div class="profile-advicer">

                                    <div data-aos="fade-up" class="card my-5"
                                        style="width: 12rem; height: 12rem; border-radius: 50%; border: 3px solid #0284a7;">
                                        <img src="asset/images/advicer1.png" alt="..."
                                            style="width: 100%; height: 100%; border-radius: 50%;">
                                        <h6 class="card-title mt-3 text-center" style="color: #595d5f;">BOUN Kakada</h6>
                                    </div>
                                    <div data-aos="fade-up" class="card my-5"
                                        style="width: 12rem; height: 12rem; border-radius: 50%; border: 3px solid #0284a7;">
                                        <img src="asset/images/advicer2.png" alt="..."
                                            style="width: 100%; height: 100%; border-radius: 50%;">
                                        <h6 class="card-title mt-3 text-center" style="color: #595d5f;">NGETH Borin</h6>
                                    </div>
                                    <div data-aos="fade-up" class="card my-5"
                                        style="width: 12rem; height: 12rem; border-radius: 50%; border: 3px solid #0284a7;">
                                        <img src="asset/images/advicer3.png" alt="..."
                                            style="width: 100%; height: 100%; border-radius: 50%;">
                                        <h6 class="card-title mt-3 text-center" style="color: #595d5f;">NGETH Borin</h6>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>

                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- Ent content Article -->

    <!-- Start Footer -->
    <?php include('asset/include/footer.php');?>
    <!-- Ent Footer -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Michalsnik JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    function NavBarFunction() {
        document.getElementById("navbar").style = "display: block";
        document.getElementById("menu_navbar").style = "display: none";
        document.getElementById("remove_navbar").style = "display: block";
    }

    function RemoveNavBarFunction() {
        document.getElementById("navbar").style = "display: none";
    }
    // Ent Init Skitter

    // Start Michalsnik JS
    AOS.init();
    // Ent Michalsnik JS
    </script>

</body>

</html>