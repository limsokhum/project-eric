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

    <title>Submit Journal</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
    }

    .wrapper .input-data {
        width: 90%;
        margin: 1px auto;
        position: relative;
    }

    .wrapper .input-data input {
        height: 100%;
        width: 100%;
        border: none;
        font-size: 17px;
        border-bottom: 2px solid silver;
    }

    .input-data input:hover~label,
    .input-data input:valid~label {
        transform: translateY(-20px);
        font-size: 18px;
        color: #4158d0;
    }

    .wrapper .input-data label {
        position: absolute;
        bottom: 10px;
        left: 0;
        color: grey;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    .input-data .underline {
        position: absolute;
        height: 2px;
        width: 100%;
        bottom: 0;
    }

    .input-data .underline:before {
        position: absolute;
        content: "";
        height: 100%;
        width: 100%;
        background: #4158d0;
        transform: scaleX(0);
        transform-origin: center;
        transition: transform 0.3s ease;
    }

    .input-data input:focus~.underline:before,
    .input-data input:valid~.underline:before {
        transform: scaleX(1);
    }

    .newpage-progressive {
        width: 90%;
        margin: 1px auto;
        position: relative;
    }

    .upload-file {
        width: 90%;
        margin: 1px auto;
        position: relative;
    }

    .newpage-progressive .btn-next {
        border: 2px solid #0083a4;
        padding: 0.6rem 1.8rem;
        border-radius: 5px;
        color: #0083a4;
        font-weight: bold;
        transition: 100ms;
    }

    .newpage-progressive .btn-next:hover {
        border: 2px solid #0083a4;
        background-color: #0083a4;
        padding: 0.6rem 1.8rem;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
    }

    .btn-preview {
        border: 2px solid #a51417;
        padding: 0.6rem 1.8rem;
        border-radius: 5px;
        color: #a51417;
        font-weight: bold;
        transition: 100ms;
    }

    .btn-preview:hover {
        border: 2px solid #a51417;
        background-color: #a51417;
        padding: 0.6rem 1.8rem;
        border-radius: 5px;
        font-weight: bold;
        color: #fff;
    }

    .checked-question {
        width: 90%;
        margin: 1px auto;
        position: relative;
    }

    .img-area {
        position: relative;
        width: 90%;
        height: 200px;
        background: var(--grey);
        margin-bottom: 30px;
        margin: 20px auto;
        border-radius: 15px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        border: 3px dashed grey;
    }

    .img-area .icon {
        font-size: 100px;
    }

    .img-area h3 {
        font-size: 20px;
        font-weight: 500;
        margin-bottom: 3px;
    }

    .img-area p {
        color: #999;
    }

    .img-area p span {
        font-weight: 600;
    }

    table,
    th,
    td {
        border: 1px silver grey;
        border-collapse: collapse;
    }
    </style>
</head>

<body style="background-color: #f8f8f8;">

    <!-- start NavigationBar -->
    <!-- Start Top Navigation Bar -->
    <?php include('asset/include/navbar-login.php');?>

    <!-- End Top Navigation Bar -->

    <!-- Start Navigation Bar -->
    <?php include('asset/include/navbar.php');?>
    <!-- Ent Navigation Bar -->

    <!-- Start content Article -->
    <div class="container my-4" id="multi-step-form-container">
        <!-- Form Steps / Progress Bar -->
        <ul class="form-stepper form-stepper-horizontal text-center mx-auto my-5">
            <!-- Step 1 -->
            <li class="form-stepper-active text-center form-stepper-list" step="1">
                <a class="mx-2 text-decoration-none">
                    <span class="form-stepper-circle">
                        <span>1</span>
                    </span>
                    <div class="label">Manuscript</div>
                </a>
            </li>
            <!-- Step 2 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                <a class="mx-2 text-decoration-none">
                    <span class="form-stepper-circle text-muted">
                        <span>2</span>
                    </span>
                    <div class="label text-muted">Ethics declarations</div>
                </a>
            </li>
            <!-- Step 3 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                <a class="mx-2 text-decoration-none">
                    <span class="form-stepper-circle text-muted">
                        <span>3</span>
                    </span>
                    <div class="label text-muted">Upload file</div>
                </a>
            </li>
            <!-- Step 4 -->
            <li class="form-stepper-unfinished text-center form-stepper-list" step="4">
                <a class="mx-2 text-decoration-none">
                    <span class="form-stepper-circle text-muted">
                        <span><i class="fa-solid fa-eye"></i></span>
                    </span>
                    <div class="label text-muted">Preview</div>
                </a>
            </li>
        </ul>
        <!-- Step Wise Form Content -->
        <form class="content-form-submit-journal" id="userAccountSetupForm" name="userAccountSetupForm"
            enctype="multipart/form-data" method="POST">
            <!-- Step 1 Content -->
            <section id="step-1" class="form-step">
                <h4 class="font-normal text-center py-3">Manuscript details</h4>
                <!-- Step 1 input fields -->
                <div class="mt-3">
                    <div class="row py-4">
                        <div class="wrapper">
                            <div class="input-data">
                                <input type="text" required>
                                <div class="underline"></div>
                                <label>Manuscript Title</label>
                                <div class="span-title-input mt-1" style="color: grey; font-size: 0.8rem;">
                                    <span class="float-start ">you can enter characters on a keyboard.</span>
                                    <span class="float-end ">0/100 Words</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row py-4">
                        <div class="wrapper">
                            <div class="input-data">
                                <input type="text" required>
                                <div class="underline"></div>
                                <label>Abstract</label>
                                <div class="span-title-input mt-1" style="color: grey; font-size: 0.8rem;">
                                    <span class="float-start">you can enter short detail.</span>
                                    <span class="float-end">0/250 Words</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row py-4">
                        <div class="wrapper">
                            <div class="input-data">
                                <input type="text" required>
                                <div class="underline"></div>
                                <label>Manuscript word count</label>
                                <div class="span-title-input mt-1" style="color: grey; font-size: 0.8rem;">
                                    <span class="float-start">Enter your nanuscript word count.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="row py-4">
                        <div class="wrapper">
                            <div class="input-data">
                                <input type="text" required>
                                <div class="underline"></div>
                                <label>Corresponding author</label>
                                <div class="span-title-input mt-1" style="color: grey; font-size: 0.8rem;">
                                    <span class="float-start">Enter author name .</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button newpage-progressive">
                    <button class="btn-navigate-form-step btn-next" type="button" step_number="2">Next</button>
                </div>
            </section>
            <!-- Step 2 Content, default hidden on page load. -->
            <section id="step-2" class="form-step d-none">
                <h4 class="font-normal text-center py-3">Ethics declarations</h4>
                <!-- Step 2 input fields -->
                <div class="mt-3">
                    <div class="row py-2">
                        <div class="wrapper">

                            <div class="checked-question">
                                <span class="questions">
                                    Do you confirm that all the research meets ethical guidelines and adheres to the
                                    legal
                                    requirements of the study country?
                                </span>
                                <div class="form-checkbox d-flex">
                                    <div class="form-yes d-flex">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">Yes</label>
                                    </div>
                                    <div class="form-no d-flex mx-2">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-0">
                    <div class="row py-4">
                        <div class="wrapper">

                            <div class="checked-question">
                                <span class="questions">
                                    Do you confirm that the manuscript includes a description of all necessary ethics
                                    approvals, including the name of the ethics committee, its respective institution,
                                    and the approval number is given?
                                </span>
                                <div class="form-checkbox d-flex">
                                    <div class="form-yes d-flex">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">Yes</label>
                                    </div>
                                    <div class="form-no d-flex mx-2">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-0">
                    <div class="row py-4">
                        <div class="wrapper">

                            <div class="checked-question">
                                <span class="questions">
                                    Do you confirm that any participants have been given an opportunity to review the
                                    final manuscript and have provided written consent to publish?
                                </span>
                                <div class="form-checkbox d-flex">
                                    <div class="form-yes d-flex">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">Yes</label>
                                    </div>
                                    <div class="form-no d-flex mx-2">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-0">
                    <div class="row py-4">
                        <div class="wrapper">

                            <div class="checked-question">
                                <span class="questions">
                                    Do you confirm that anyone listed under the Acknowledgements section of the
                                    manuscript has been informed of their inclusion and approve this?
                                </span>
                                <div class="form-checkbox d-flex">
                                    <div class="form-yes d-flex">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">Yes</label>
                                    </div>
                                    <div class="form-no d-flex mx-2">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mt-0">
                    <div class="row py-4">
                        <div class="wrapper">

                            <div class="checked-question">
                                <span class="questions">
                                    Are you using material or data that has been published before?
                                </span>
                                <div class="form-checkbox d-flex">
                                    <div class="form-yes d-flex">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">Yes</label>
                                    </div>
                                    <div class="form-no d-flex mx-2">
                                        <input type="checkbox" name="" id="">
                                        <label class="m-2" for="">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="button newpage-progressive">
                    <button class="btn-navigate-form-step btn-preview" type="button" step_number="1">Prev</button>
                    <button class="btn-navigate-form-step btn-next" type="button" step_number="3">Next</button>
                </div>
            </section>
            <!-- Step 3 Content, default hidden on page load. -->
            <section id="step-3" class="form-step d-none">
                <h4 class="font-normal text-center py-3">Upload file</h4>
                <!-- Step 3 input fields -->
                <div class="mt-3">
                    <div class="row py-2">
                        <div class="wrapper">
                            <div class="upload-files">
                                <div class="select-image">
                                    <!-- <input type="file" name="" id=""> -->
                                    <div class="img-area" data-img="">
                                        <i class='bx bxs-cloud-upload icon'></i>
                                        <h3>File Upload</h3>
                                        <p>Image size must be less than <span>20MB</span></p>
                                        <input class="btn btn-primary" type="file" id="file" accept="file/*">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="button newpage-progressive">
                    <button class="btn-navigate-form-step btn-preview" type="button" step_number="2">Prev</button>
                    <button class="btn-navigate-form-step btn-next" type="button" step_number="4">Next</button>
                </div>
            </section>
            <!-- Step 4 Content, default hidden on page load. -->
            <section id="step-4" class="form-step d-none">
                <h4 class="font-normal text-center py-3">Preview</h4>
                <!-- Step 4 input fields -->
                <div class="mt-3">
                    <div class="row py-2">
                        <!-- <div class="wrapper">

                            <div class="checked-question">
                                <table>
                                    <thead>
                                        <th>Mulity Detail</th>
                                        <th>Edit</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ddddddddddddddd</td>
                                            <td>dfddfdfdfd</td>
                                        </tr>
                                        <tr>
                                            <td>ddddddddddddddd</td>
                                            <td>dfddfdfdfd</td>
                                        </tr>
                                        <tr>
                                            <td>ddddddddddddddd</td>
                                            <td>dfddfdfdfd</td>
                                        </tr>
                                        <tr>
                                            <td>ddddddddddddddd</td>
                                            <td>dfddfdfdfd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div> -->
                    </div>
                </div>
                <div class="mt-3 newpage-progressive">
                    <button class="btn-navigate-form-step btn-preview" type="button" step_number="3">Prev</button>
                    <button class="submit-btn btn-next" type="submit">Save</button>
                </div>
            </section>
        </form>
    </div>
    <!-- Ent content Article -->

    <!-- Start Footer -->
    <?php include('asset/include/footer.php');?>
    <!-- Ent Footer -->

    <script src="asset/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js">
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- Michalsnik JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Script Upload files -->
    <script src="asset/js/script_fileupload.js"></script>

</body>

</html>