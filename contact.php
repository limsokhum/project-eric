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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Costom Link CSS -->
    <link rel="stylesheet" href="asset/css/style_show.css">

    <!-- Link favavicon -->
    <link rel="shortcut icon" href="asset/images/ERICRemove Logo.png" type="image/x-icon">

    <!-- Skitter Styles -->
    <link href="asset/dist/skitter.css" type="text/css" media="all" rel="stylesheet" />

    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Contact Us | Education, Research</title>

</head>

<body>

    <!-- start NavigationBar -->
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>

    <!-- End Top Navigation Bar -->

    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start content Article -->
    <div class="container my-4">
        <div class="contact-description d-flex justify-content-center">
            <div class="text-description" style="width: 22rem;">
                <h3 class="title-contact " style="color: #0284a7; font-weight: 400;">KEEP IN TOUCH WITH US</h3>
                <p class="text-description text-center">
                    If you have any question. Just fill in the contact form and we will answerr you shortly.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="left-contact col-sm-5">

                <div class="card" style="width: 100%;">
                    <div class="row px-2 py-4">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <img src="asset/images/location.png" alt="" style="width: 3.1rem; height: 3.5rem;">
                        </div>
                        <div class="col-sm-9">
                            <h5>Location</h5>
                            <p class="card-text" style="font-family: Khmer OS System;">ភូមិខាងជើង សង្កាត់អណ្ដូងខ្មែរ
                                ក្រុងកំពត ខេត្ដកំពត</p>
                        </div>
                    </div>
                </div>

                <div class="card my-3" style="width: 100%;">
                    <div class="row px-2 py-4">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <img src="asset/images/email.png" alt="" style="width: 3.5rem; height: 3.5rem;">
                        </div>
                        <div class="col-sm-9">
                            <h5>Email</h5>
                            <p class="card-text">ericcambodia.info@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="card my-3" style="width: 100%;">
                    <div class="row px-2 py-4">
                        <div class="col-sm-3 d-flex justify-content-center align-items-center">
                            <img src="asset/images/call.png" alt="" style="width: 3.5rem; height: 3.5rem;">
                        </div>
                        <div class="col-sm-9">
                            <h5>Phone Number</h5>
                            <p class="card-text">+855 97 222 0 892</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-contact col-sm-7">
                <div class="container">
                    <form class="form-floatin" action="" method="post">
                        <div class="form-floating">
                            <input class="form-control mb-3" type="text" name="" id="floatingInput">
                            <label for="floatingInput">Full Name</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control mb-3" type="text" name="" id="floatingInput">
                            <label for="floatingInput">PhoneNumber</label>
                        </div>
                        <div class="form-floating">
                            <input class="form-control mb-3" type="text" name="" id="floatingInput">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-2">
                            <textarea class="form-control" name="" id="floatingTextarea"
                                style="width: 100%; height: 10rem;"></textarea>
                            <label for="floatingTextarea">Comments</label>
                        </div>
                        <div class="contact-submit">
                            <input class="btn btn-contact mt-3" type="submit" value="SUBMIT MESSAGE">
                        </div>
                    </form>
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