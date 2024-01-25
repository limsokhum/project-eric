<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status']; 
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
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

    <!-- Font Family -->
    <link
        href="https://fonts.googleapis.com/css2?family=REM:wght@200;300;400&family=Roboto:ital,wght@0,400;0,500;1,500&display=swap"
        rel="stylesheet">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Costom Link CSS -->
    <link rel="stylesheet" href="../asset/css/style.css">

    <!-- Link favavicon -->
    <link rel="shortcut icon" href="../asset/images/ERICRemove Logo.png" type="image/x-icon">

    <!-- Skitter Styles -->
    <link href="../asset/dist/skitter.css" type="text/css" media="all" rel="stylesheet" />

    <!-- Skitter JS -->
    <script type="text/javascript" language="javascript" src="../asset/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" language="javascript" src="../asset/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" language="javascript" src="../asset/dist/jquery.skitter.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- Swiper -->
    <link rel="stylesheet" href="asset/js/package.json">
    <link rel="stylesheet" href="asset/js/sandbox.config.json">
    <link rel="stylesheet" href="asset/js/yarn.lock">

    <!-- Michalsnik CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <title>Home Page</title>
</head>

<body>
    <!-- Start Progress Bar -->
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <!-- Ent Progress Bar -->

    <!-- Start Navigation Bar -->
    <?php include('../asset/include/navbar-login.php')?>
    <!-- Ent Navigation Bar -->

    <!-- Start Slider -->

    <div id="content" style="width: 100%;">
        <div class="skitter-large-box">
            <div class="skitter skitter-large">
                <ul>
                    <li><a href="#cube"><img
                                src="https://cdri.org.kh/storage/images/CDRI%20Slide%20show1_1669003295.png"
                                class="cubeHide" /></a>
                    </li>
                    <li><a href="#cubeRandom"><img
                                src="https://cdri.org.kh/storage/images/CDRI%20Slide%20show5_1669349014.png"
                                class="cubeSize" /></a>
                    </li>
                    <li><a href="#block"><img src="https://cdri.org.kh/storage/images/Banner11_1670929358.jpg"
                                class="cubeShow" /></a>
                    </li>
                    <li><a href="#cube"><img
                                src="https://cdri.org.kh/storage/images/CDRI%20Slide%20show4_1669003544.png"
                                class="cube" /></a>
                    </li>
                    <li><a href="#cubeRandom"><img src="https://cdri.org.kh/storage/images/Banner1_1616985804.jpg"
                                class="cube" /></a>
                    </li>
                    <li><a href="#block"><img src="https://cdri.org.kh/storage/images/Banner6_1629970379.jpg"
                                class="cube" /></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Start Slider -->

    <!-- Start Botton Slide Bar -->
    <div class="container-fluid about_decucation py-4">
        <div data-aos="fade-right" class="education">
            <i class="fa-solid fa-graduation-cap fa-3x text-light"></i>
            <div class="detail text-light">
                <h6>EDUCATION</h6>
                <p>Quality and Value</p>
            </div>

        </div>
        <div class="education">
            <i class="fa-brands fa-searchengin fa-3x text-white"></i>
            <div class="detail text-light">
                <h6>RESEARCH</h6>
                <p>Standard and Quality</p>
            </div>

        </div>
        <div class="education">
            <i class="fa-solid fa-lightbulb fa-3x text-light"></i>
            <div class="detail text-white">
                <h6>INNOVATION</h6>
                <p>Learning and Technology</p>
            </div>

        </div>
    </div>
    <!-- Ent Botton Slide Bar -->

    <!-- Start Content HomePage -->
    <div class="container">

        <div class="ed-re-in text-center py-4">
            <h4 class="text-danger py-2">Education, Research, and Innovation Centre</h4>
            <h6>We are committed to enhancing education quality for humanity. <br>
                With quality education, people are able to leave the cave of ignorance.
            </h6>
        </div>

        <!-- Featured News & Events -->
        <div class="Featured_News_Events my-4">
            <h4 class="text-center my-4" style="color: #336666; font-weight: 500;">Featured News & Events</h4>

            <div class="swiper_slide mt-4">

                <!-- Start Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper pb-5">
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Ent Swiper -->

            </div>

        </div>
        <!-- Featured News & Events -->


        <!-- Project Publication -->
        <div class="project_publication my-4">
            <h4 class="text-center my-4" style="color: #336666; font-weight: 500;">Project Publications</h4>

            <div class="project_publication_content" id="project_publication_content">

                <!-- Start Swiper -->
                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>

                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <div class="card card_swiper">
                    <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- Ent Swiper -->

            </div>

        </div>
        <!-- Project Publication -->


        <!-- Recent Projects -->
        <div class="Featured_News_Events my-4">
            <h4 class="text-center my-4" style="color: #336666; font-weight: 500;">Recent Projects</h4>

            <div class="swiper_slide">

                <!-- Start Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper pb-5">
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" id="swiper_slide">
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/VXIRe8gb89.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                            <div class="card card_swiper">
                                <img src="https://cdri.org.kh/storage/images/hfCHkjtpkc.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the
                                        card's content.</p>
                                    <a href="#" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <!-- Ent Swiper -->

            </div>

        </div>
        <!-- Recent Project -->



        <!-- Start Button Submit An Article -->
        <div class="button_submitJounal container my-5 d-flex justify-content-center">
            <button class="btn btn_submitJounal btn-2x-lg" type="submit">Submit an Article</button>
        </div>
        <!-- Start Button Submit An Article -->

    </div>
    <!-- Ent Content HomePage -->








    <!-- Start Bottom Footer -->
    <div class="container-fluid" style="background-color: #595d5f;">
        <div class="container">
            <div class="title-footer py-3" style="color: #fdc101;">
                <h6 style="font-family: Khmer OS Muol Light;">មជ្ឈមណ្ឌលអប់រំ ស្រាវជ្រាវ និងនវានុវត្ដន៍</h6>
                <h6>Education, Research, and Innovation Centre</h6>
            </div>
            <div class="bottom-nav text-light">
                <div class="about-us">
                    <h6 class="fw-bold">About Us</h6>

                    <div class="contain-about mt-4">
                        <div class="address d-flex">
                            <i class="fa-sharp fa-solid fa-location-dot fs-6"></i>
                            <p class="mx-3" style="font-family: Khmer OS Siemreap;">ភូមិខាងជើង សង្កាត់អណ្ដូងខ្មែរ
                                ក្រុងកំពត ខេត្ដកំពត</p>
                        </div>
                        <div class="e-mail d-flex">
                            <i class="fa-solid fa-envelope fs-6"></i>
                            <p class="mx-3">ericcambodia.info@gmail.com</p>
                        </div>
                        <div class="mobile d-flex">
                            <i class="fa-solid fa-phone-volume fs-6"></i>
                            <p class="mx-3">+855 97 222 0 829</p>
                        </div>
                    </div>
                </div>
                <div class="more-link">
                    <h6 class="fw-bold">More Link</h6>
                    <div class="contain-more-link mt-4">
                        <a class="text-decoration-none text-light" href="">careers</a><br>
                        <a class="text-decoration-none text-light" href="">Blog</a><br>
                        <a class="text-decoration-none text-light" href="">Help & Support</a>
                    </div>
                </div>
                <div class="important-links">
                    <h6 class="fw-bold">Important Links</h6>
                    <div class="contain-important mt-4">
                        <a class="text-decoration-none text-light" href="">Consulting Services</a><br>
                        <a class="text-decoration-none text-light" href="">Call for Papers</a><br>
                        <a class="text-decoration-none text-light" href="">Eding Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Bottom Footer -->
    <!-- Start Bottom Footer Copyright -->
    <div class="container-fluid" style="background-color: #a51417;">
        <p class="py-4 text-center text-light">Copyright 2022 Education, Research, and Innovation Centre. All rights
            reserved.</p>
    </div>
    <!-- Ent Bottom Footer Copyright -->




    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Michalsnik JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Progress Bar -->
    <script src="asset/js/script.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });
    </script>

    <script>
    // Start Initialize Swiper 
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    // Ent Initialize Swiper 

    // Start Init Skitter
    $(document).ready(function() {
        $('.skitter-large').skitter({
            numbers: true,
            dots: false
        });
    });

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