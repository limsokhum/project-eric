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

    <link rel="stylesheet" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">users</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Management</a></li>
                                <li class="breadcrumb-item"><span>Users</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-4">
                    </div>
                    <div class="col-sm-8 col-8 text-right add-btn-col">
                        <a href="#" class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#add_user"><i
                                class="fas fa-plus"></i> Add User</a>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="form-control select">
                                    <option>Select </option>
                                    <option>Loren Gatlin</option>
                                    <option>Tarah Shropshire</option>
                                </select>
                                <label class="focus-label">Users</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input class="form-control datetimepicker-input datetimepicker floating" type="text"
                                    data-toggle="datetimepicker">
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input class="form-control datetimepicker-input datetimepicker floating" type="text"
                                    data-toggle="datetimepicker">
                                <label class="focus-label">To</label>
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
                                            <th style="width:30%;">Name</th>
                                            <th>Email</th>
                                            <th>School</th>
                                            <th>Created Date</th>
                                            <th>Role</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">D</a>
                                                <h2><a href="profile.html">Daniel Porter <span>Admin</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="dfbbbeb1b6bab3afb0adabbaad9fbaa7beb2afb3baf1bcb0b2">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-danger-border">Admin</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">J</a>
                                                <h2><a href="profile.html">John Doe <span> Maths Teacher</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="0b616463656f646e4b6e736a667b676e25686466">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-success-border">Teacher</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">R</a>
                                                <h2><a href="profile.html">Richard Miles <span>Admin</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="e89a818b80899a8c8581848d9ba88d90898598848dc68b8785">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-success-border">Employee</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">J</a>
                                                <h2><a href="profile.html">John Smith <span>Sports</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="402a2f282e332d293428002538212d302c256e232f2d">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-success-border">Employee</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">M</a>
                                                <h2><a href="profile.html">Mike Litorus <span>English</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="65080c0e00090c110a17101625001d04081509004b060a08">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-success-border">Employee</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">W</a>
                                                <h2><a href="profile.html">Wilmer Deluna <span>H.O.D</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="4a3d2326272f382e2f263f242b0a2f322b273a262f64292527">[email&#160;protected]</a>
                                            </td>
                                            <td>Preschool</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-success-border">Employee</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">B</a>
                                                <h2><a href="profile.html">Barry Cuda <span>Preschool</span></a></h2>
                                            </td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="a6c4c7d4d4dfc5d3c2c7e6c3dec7cbd6cac388c5c9cb">[email&#160;protected]</a>
                                            </td>
                                            <td>Ruth C. Gault</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <span class="badge badge-info-border">Student</span>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_user"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_user"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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

        <div id="add_user" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">Add User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="m-b-30">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Firstname <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Lastname <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Username <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating">
                                        <label class="focus-label">Password <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating">
                                        <label class="focus-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control floating">
                                        <label class="focus-label">Phone <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <select class="form-control select">
                                            <option>Admin</option>
                                            <option>Student</option>
                                            <option>Employee</option>
                                        </select>
                                        <label class="focus-label">Role</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <select class="form-control select">
                                            <option>Global Technologies</option>
                                            <option>Delta Infotech</option>
                                        </select>
                                        <label class="focus-label">School</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control">
                                        <label class="focus-label">Employee ID <span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
                                <table class="table custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Module Permission</th>
                                            <th class="text-center">Read</th>
                                            <th class="text-center">Write</th>
                                            <th class="text-center">Create</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Import</th>
                                            <th class="text-center">Export</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Employee</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Holidays</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leave Request</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Events</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg">Create User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="edit_user" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="m-b-30">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control" value="John">
                                        <label class="focus-label">Firstname <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control" value="Doe">
                                        <label class="focus-label">Lastname <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control" value="johndoe">
                                        <label class="focus-label">Username <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="text" class="form-control" value="johndoe@example.com">
                                        <label class="focus-label">Email <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating">
                                        <label class="focus-label">Password <span class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input type="password" class="form-control floating">
                                        <label class="focus-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input value="97358458700" type="number" class="form-control">
                                        <label class="focus-label">Phone </label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <select class="form-control select">
                                            <option>Admin</option>
                                            <option>Student</option>
                                            <option selected="">Employee</option>
                                        </select>
                                        <label class="focus-label">Role</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <select class="form-control select">
                                            <option>Cbse School</option>
                                            <option>Icse School</option>
                                        </select>
                                        <label class="focus-label">School</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form-focus">
                                        <input value="st-0001" type="text" class="form-control">
                                        <label class="focus-label">Employee ID <span class="text-danger">*</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
                                <table class="table custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Module Permission</th>
                                            <th class="text-center">Read</th>
                                            <th class="text-center">Write</th>
                                            <th class="text-center">Create</th>
                                            <th class="text-center">Delete</th>
                                            <th class="text-center">Import</th>
                                            <th class="text-center">Export</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Employee</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Holidays</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Leave Request</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Events</td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                            <td class="text-center">
                                                <input checked="" type="checkbox">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg">Edit User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_user" class="modal" role="dialog">
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