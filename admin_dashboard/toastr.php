<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link href="../../../../css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/plugins/toastr/toatr.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/logo-eric.png" type="image/x-icon">
</head>

<body>

    <div class="main-wrapper">

        <!-- start header -->
        <?php include('include/header.php');?>
        <!-- ent header -->

        <!-- start lift sidebar  -->
        <?php include('include/sidebar.php');?>
        <!-- end left sidebar -->


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Toastr</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Elements</a></li>
                                <li class="breadcrumb-item"><span>>Toastr</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card" id="types">
                            <div class="card-header">
                                <h4 class="card-title">Types</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-success mr-1 mb-1"
                                    id="type-success">Success</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1"
                                    id="type-info">Info</button>
                                <button type="button" class="btn btn-outline-warning mr-1 mb-1"
                                    id="type-warning">Warning</button>
                                <button type="button" class="btn btn-outline-danger mr-1 mb-1"
                                    id="type-error">Error</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Position</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 mb-4">
                                        <h5 class="mb-3">Top Positions</h5>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-top-left">Top
                                            Left</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-top-center">Top
                                            Center</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-top-right">Top
                                            Right</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-top-full">Top Full
                                            Width</button>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="mb-3">Bottom Positions</h5>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-bottom-left">Bottom
                                            Left</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-bottom-center">Bottom
                                            Center</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-bottom-right">Bottom
                                            Right</button>
                                        <button type="button" class="btn btn-outline-primary mr-1 mb-1"
                                            id="position-bottom-full">Bottom
                                            Full Width</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Options</h4>
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn btn-outline-success mr-1 mb-1"
                                    id="text-notification">Notifications</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1" id="close-button">Close
                                    Button</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1"
                                    id="progress-bar">Progress Bar</button>
                                <button type="button" class="btn btn-outline-success mr-1 mb-1"
                                    id="clear-toast-btn">Clear Toast</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Clear Toasts</h4>
                            </div>
                            <div class="card-body">
                                <div class="row mt-1">
                                    <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                                        <h5>Remove</h5>
                                        <p>Immediately remove current toasts without using animation.</p>
                                        <button type="button" class="btn btn-outline-info mr-1 mb-1"
                                            id="show-remove-toast">Show
                                            Toast</button>
                                        <button type="button" class="btn btn-outline-danger mr-1 mb-1"
                                            id="remove-toast">Remove
                                            Toast</button>
                                    </div>
                                    <div class="col-md-6 col-sm-12 mb-3 mb-md-0">
                                        <h5>Clear</h5>
                                        <p>Remove current toasts using animation.</p>
                                        <button type="button" class="btn btn-outline-info mr-1 mb-1"
                                            id="show-clear-toast">Show
                                            Toast</button>
                                        <button type="button" class="btn btn-outline-danger mr-1 mb-1"
                                            id="clear-toast">Clear
                                            Toast</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Duration & Timeout</h4>
                            </div>
                            <div class="card-body">
                                <p>you can use options like <code>showDuration</code>, <code>hideDuration</code>,
                                    <code>timeout</code> for your
                                    toasts. To create a sticky toast set the <code>timeout</code> to <code>0</code>
                                </p>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="fast-duration">Show
                                    .5s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="slow-duration">Hide
                                    3s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="timeout">Timeout
                                    5s</button>
                                <button type="button" class="btn btn-outline-info mr-1 mb-1" id="sticky">Sticky
                                    Toast</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Ruth C. Gault</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>


        <script src="assets/js/jquery-3.6.0.min.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>

        <script src="assets/plugins/toastr/toastr.min.js"></script>
        <script src="assets/plugins/toastr/toastr.js"></script>

        <script src="assets/js/app.js"></script>
    </div>
</body>

</html>