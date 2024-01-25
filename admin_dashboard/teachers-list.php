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

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/css/select2.min.css">

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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Teachers</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.php"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Teachers</a></li>
                                <li class="breadcrumb-item"><span> All Teachers</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                    </div>
                    <div class="col-sm-8 col-12 text-right add-btn-col">
                        <a href="add-teacher.php" class="btn btn-primary float-right btn-rounded"><i
                                class="fas fa-plus"></i> Add Teacher</a>
                        <div class="view-icons">
                            <a href="all-teachers.php" class="grid-view btn btn-link"><i class="fas fa-th"></i></a>
                            <a href="teachers-list.php" class="list-view btn btn-link active"><i
                                    class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Teacher ID</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Teacher Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select form-control">
                                    <option>Maths</option>
                                    <option>English</option>
                                    <option>Science</option>
                                    <option>Social Science</option>
                                    <option>Finance</option>
                                </select>
                                <label class="focus-label">Subject</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="btn btn-search rounded btn-block mb-3"> search </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                                <table class="table custom-table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="min-width:50px;">Name (Subject)</th>
                                            <th style="min-width:70px;">Teacher ID</th>
                                            <th style="min-width:50px;">Gender</th>
                                            <th style="min-width:50px;">Address</th>
                                            <th style="min-width:80px;">Date of Birth</th>
                                            <th style="min-width:50px;">Email</th>
                                            <th style="min-width:50px;">Mobile</th>
                                            <th class="text-right" style="width:15%;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">R</a>
                                                    <a href="profile.php">Ruth C. Gault <span>(Maths)</span></a>
                                                </h2>
                                            </td>
                                            <td>TE-0d001</td>
                                            <td>Male</td>
                                            <td>520 Cambridge Place,USA</td>
                                            <td>1 Jun 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="0b797e7f63686c6a7e677f4b6e736a667b676e25686466">[email&#160;protected]</a>
                                            </td>
                                            <td>410-610-2754</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">M</a>
                                                <h2><a href="profile.php">Michael <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d021</td>
                                            <td>Male</td>
                                            <td>4850 Edgewood Road,USA</td>
                                            <td>1 Jan 1986</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="5a373339323b3f362c382f2e2e3b28291a3f223b372a363f74393537">[email&#160;protected]</a>
                                            </td>
                                            <td>870-983-5423</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">M</a>
                                                <h2><a href="profile.php">Martin<span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d022</td>
                                            <td>Male</td>
                                            <td>1018 Marshville Road,USA</td>
                                            <td>5 apri 1983</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="214c405355484f42424940514c404f614459404c514d440f424e4c">[email&#160;protected]</a>
                                            </td>
                                            <td>845-594-9679</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">K</a>
                                                <h2><a href="profile.php">Kenneth <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d023</td>
                                            <td>Male</td>
                                            <td>11 Johnstown Road,USA</td>
                                            <td>10 Jan 1987</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="f299979c9c97869a809593809c9780b2978a939f829e97dc919d9f">[email&#160;protected]</a>
                                            </td>
                                            <td>847-383-8653</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">R</a>
                                                <h2><a href="profile.php">Ronald <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d024</td>
                                            <td>Male</td>
                                            <td>2306 Bernardo street,USA</td>
                                            <td>11 Jan 1982</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="4a3825242b262e38262f28253d0a2f322b273a262f64292527">[email&#160;protected]</a>
                                            </td>
                                            <td>813-240-7315</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">B</a>
                                                <h2><a href="profile.php">Brenda <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d025</td>
                                            <td>Male</td>
                                            <td>80 Poplar Chase Lane,USA</td>
                                            <td>21 Jun 1988</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="690b1b0c070d0808081b0706050d290c11080419050c470a0604">[email&#160;protected]</a>
                                            </td>
                                            <td>208-381-8106</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">D</a>
                                                <h2><a href="profile.php">Daniel <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d026</td>
                                            <td>Male</td>
                                            <td>4824 Kimberly Way,USA</td>
                                            <td>1 Jan 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="dfbbbeb1b6bab3adafbabebdb0bba69fbaa7beb2afb3baf1bcb0b2">[email&#160;protected]</a>
                                            </td>
                                            <td>616-843-8603</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">D</a>
                                                <h2><a href="profile.php">Dennis <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d027</td>
                                            <td>Male</td>
                                            <td>1441 Argonne street,USA</td>
                                            <td>22 Jan 1983</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="5531303b3b3c26213634372730273415302d34382539307b363a38">[email&#160;protected]</a>
                                            </td>
                                            <td>302-258-6160</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">H</a>
                                                <h2><a href="profile.php">Heriberto <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d028</td>
                                            <td>Male</td>
                                            <td>3343 Shinn Avenue,USA</td>
                                            <td>1 July 1982</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="96fef3e4fff4f3e4e2f9fbf8fff3f4e3fee4d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</a>
                                            </td>
                                            <td>724-552-9237</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">J</a>
                                                <h2><a href="profile.php">Jean <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d029</td>
                                            <td>Male</td>
                                            <td>2297 Aspen Courtc ,USA</td>
                                            <td>1 feb 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="670d0206090d0f020903021514080927021f060a170b024904080a">[email&#160;protected]</a>
                                            </td>
                                            <td>617-330-4593</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">D</a>
                                                <h2><a href="profile.php">Daniel <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d026</td>
                                            <td>Male</td>
                                            <td>4824 Kimberly Way,USA</td>
                                            <td>1 Jan 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="771316191e121b050712161518130e37120f161a071b125914181a">[email&#160;protected]</a>
                                            </td>
                                            <td>616-843-8603</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">D</a>
                                                <h2><a href="profile.php">Dennis <span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d027</td>
                                            <td>Male</td>
                                            <td>1441 Argonne street,USA</td>
                                            <td>1 Jan 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="84e0e1eaeaedf7f0e7e5e6f6e1f6e5c4e1fce5e9f4e8e1aae7ebe9">[email&#160;protected]</a>
                                            </td>
                                            <td>302-258-6160</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">H</a>
                                                <h2><a href="profile.php">Heriberto<span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d028</td>
                                            <td>Male</td>
                                            <td>3343 Shinn Avenue,USA</td>
                                            <td>1 Jan 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="d8b0bdaab1babdaaacb7b5b6b1bdbaadb0aa98bda0b9b5a8b4bdf6bbb7b5">[email&#160;protected]</a>
                                            </td>
                                            <td>724-552-9237</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.php" class="avatar">J</a>
                                                <h2><a href="profile.php">Jean<span>(Maths)</span></a></h2>
                                            </td>
                                            <td>TE-0d029</td>
                                            <td>Male</td>
                                            <td>2297 Aspen Courtc ,USA</td>
                                            <td>1 Jan 1985</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="f69c9397989c9e9398929384859998b6938e979b869a93d895999b">[email&#160;protected]</a>
                                            </td>
                                            <td>617-330-4593</td>
                                            <td class="text-right">
                                                <a href="edit-exam.php" class="btn btn-primary btn-sm mb-1">
                                                    <i class="far fa-edit"></i>
                                                </a>
                                                <button type="submit" data-toggle="modal" data-target="#delete_employee"
                                                    class="btn btn-danger btn-sm mb-1">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
                                        <div class="list-item new-message">
                                            <div class="list-left">
                                                <span class="avatar">R</span>
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
                                    <a href="chat.php">
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
        </div>

        <div id="delete_employee" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee</h4>
                    </div>
                    <form>
                        <div class="modal-body">
                            <p>Are you sure want to delete this?</p>
                            <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>