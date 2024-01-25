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
    <link rel="stylesheet" href="asset/css/style_show.css">

    <!-- Link favavicon -->
    <link rel="shortcut icon" href="asset/images/ERICRemove Logo.png" type="image/x-icon">

    <!-- Skitter Styles -->
    <link href="asset/dist/skitter.css" type="text/css" media="all" rel="stylesheet" />

    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Summary Page</title>
</head>

<body>
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>
    <!-- End Top Navigation Bar -->
    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start Header Article -->
    <div class="article-summary bg-primary d-flex justify-content-center align-items-center">
        <div class="search-engine">
            <h4 class="text-center text-light my-4">Search engine for PDF files.</h4>
            <form class="d-flex" action="" method="post">
                <div class="search">
                    <input class="form-control" type="text">
                    <i class="fa-solid fa-magnifying-glass text-light"></i>
                </div>
            </form>
        </div>
    </div>
    <!-- Ent Header Article -->

    <!-- Start content Article -->
    <div class="container my-4">
        <div class="row">
            <div class="left-nav col-sm-4">
                <ul>
                    <li>
                        <a href="">Survey Research</a>
                    </li>
                    <li>
                        <a href="">Causal-Comparative Research</a>
                    </li>
                    <li>
                        <a href="">Experimental Research</a>
                    </li>
                    <li>
                        <a href="">Correlational Research</a>
                    </li>
                    <li>
                        <a href="">Grounded Theory Research</a>
                    </li>
                    <li>
                        <a href="">Ethnographic Research</a>
                    </li>
                    <li>
                        <a href="">Phenomenological Research</a>
                    </li>
                    <li>
                        <a href="">Action Research</a>
                    </li>
                    <li>
                        <a href="">Exploratory Sequential Mixed Methods</a>
                    </li>
                    <li>
                        <a href="">Convergent Parallet Mixed Metods</a>
                    </li>

                </ul>
            </div>
            <div class="right-nav col-sm-8">
                <div class="container right-nav my-4 ">
                    <a href="arcticle.html">
                        <div class="card mt-4" style="width: 100%;">
                            <div class="card-body row my-4">
                                <div class="col-sm-10">
                                    <h5 class="card-title mb-3">Academic writing</h5>
                                    <p class="card-text">Chan Sokhomavatey <br>
                                        Educational Psychology and Innovation.</p>
                                </div>
                                <div class="col-sm-2">
                                    <h5>0</h5>
                                    <h6>Downloads <i class="fa-solid fa-download"></i></h6>
                                    <div class="line-download">

                                    </div>
                                    <h5>0</h5>
                                    <h6>View <i class="fa-solid fa-eye"></i></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="arcticle.html">
                        <div class="card mt-4" data-aos="zoom-in-up" style="width: 100%;">
                            <div class="card-body row my-4">
                                <div class="col-sm-10">
                                    <h5 class="card-title mb-3">Academic writing</h5>
                                    <p class="card-text">Chan Sokhomavatey <br>
                                        Educational Psychology and Innovation.</p>
                                </div>
                                <div class="col-sm-2">
                                    <h5>0</h5>
                                    <h6>Downloads <i class="fa-solid fa-download"></i></h6>
                                    <div class="line-download">

                                    </div>
                                    <h5>0</h5>
                                    <h6>View <i class="fa-solid fa-eye"></i></h6>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="arcticle.html">
                        <div class="card mt-4" data-aos="zoom-in-up" style="width: 100%;">
                            <div class="card-body row my-4">
                                <div class="col-sm-10">
                                    <h5 class="card-title mb-3">Academic writing</h5>
                                    <p class="card-text">Chan Sokhomavatey <br>
                                        Educational Psychology and Innovation.</p>
                                </div>
                                <div class="col-sm-2">
                                    <h5>0</h5>
                                    <h6>Downloads <i class="fa-solid fa-download"></i></h6>
                                    <div class="line-download">

                                    </div>
                                    <h5>0</h5>
                                    <h6>View <i class="fa-solid fa-eye"></i></h6>
                                </div>
                            </div>
                        </div>
                    </a>
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