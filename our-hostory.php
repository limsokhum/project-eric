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

    <title>Our History | Education, Research</title>
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
        <div class="row">
            <div data-aos="fade-down-right" class="left-nav col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <ul>
                    <li>
                        <a href="">Director's Message</a>
                    </li>
                    <li>
                        <a href="ourhistory.php">Our History</a>
                    </li>
                    <li>
                        <a href="boarddirector.php">Board of Directors</a>
                    </li>
                    <li>
                        <a href="advicer.php">Board of Advisors</a>
                    </li>
                    <li>
                        <a href="ericstaff.php">ERIC Staff</a>
                    </li>
                </ul>
            </div>
            <div data-aos="fade-down-left" class="right-nav col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div class="container right-nav my-4 ">
                    <a href="arcticle.html">
                        <div class="card my-3" style="width: 100%;">
                            <div class="card-body my-4">
                                <h5 class="card-title">Our History</h5>
                                <p class="card-text mt-4">Learning outcomes can be regarded as knowledge, attitudes, and
                                    skills students have attained by the end of a course or programme of study. Now, as
                                    impacted by the 21st century globalisation and internationalisation, learning
                                    standards are higher than they used to be in that people need greater knowledge and
                                    skills to survive and succeed. Hence, learning outcomes are higher and more
                                    complicated than ever before. As a matter of fact, educational outcomes in the 21st
                                    century cover various types of knowledge and skills that are important for students
                                    to compete in a borderless economy of this globalised world. These include content
                                    knowledge, learning and innovation skills, digital skills, life and career skills,
                                    and other favourable psychological attributes.

                                    Equipping students with such knowledge, skills, and attributes is not a really easy
                                    thing to do. To help students achieve these learning outcomes, teachers should be
                                    aware of three important things. First, teachers should know what the expected
                                    learning outcomes are. Basically, learning outcomes are usually concerned with
                                    cognitive domain or mental abilities (i.e., knowledge and mental skills), affective
                                    domain or emotional abilities (i.e., attitudes and self), and psychomotor domain or
                                    physical abilities (i.e., physical skills). Second, teachers should know a wide
                                    variety of effective learning models and techniques. This requires teachers to
                                    choose the most appropriate one(s) that can help students to effectively acquire and
                                    develop those abilities. To date, multiple learning models have been introduced and
                                    implemented in both schools and colleges. These models include cooperative learning,
                                    collaborative learning, problem-based learning, project-based learning, blended
                                    learning, inquiry-based learning, flipped classrooms, and so forth. Last but not
                                    least, teachers should know how to undertake student assessment. This involves
                                    deciding on what to assess (i.e., each type of learning outcomes), when to assess
                                    (i.e., each type of classroom assessment), and how to assess (i.e., each type of
                                    assessment tools). With these three things, teachers will definitely know what they
                                    want their students to achieve, how they help their students to achieve them, and
                                    whether or not their students achieve them.

                                    Education, Research, and Innovation Centre is intended to equip teachers with the
                                    abilities to identify expected learning outcomes for each course or semester,
                                    implement appropriate teaching models or techniques, and employ suitable assessment
                                    tools. To achieve this, the centre has three core missions: providing quality
                                    education and training, publishing quality research, and promoting learning
                                    innovation.</p>
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