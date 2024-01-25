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

    <link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Employee Salary</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Payroll</a></li>
                                <li class="breadcrumb-item"><span> Employee Salary</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-5">
                    </div>
                    <div class="col-sm-8 col-7 text-right add-btn-col">
                        <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal"
                            data-target="#add_salary"><i class="fas fa-plus"></i> Add Salary</a>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">
                            <div class="form-group form-focus">
                                <input class="form-control" type="text">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus select-focus">
                                <select class="select form-control">
                                    <option> -- Select -- </option>
                                    <option>Employee</option>
                                    <option>H.O.D</option>
                                </select>
                                <label class="focus-label">Role</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-3 col-12">
                            <div class="form-group form-focus">
                                <input class="form-control datetimepicker-input datetimepicker floating" type="text"
                                    data-toggle="datetimepicker">
                                <label class="focus-label">From</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus">
                                <input class="form-control datetimepicker-input datetimepicker floating" type="text"
                                    data-toggle="datetimepicker">
                                <label class="focus-label">To</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12 ">
                            <a href="#" class="btn btn-search rounded btn-block mb-3"> search </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="table-responsive mt-2">
                                <table class="table custom-table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width:25%;">Employee</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Joining Date</th>
                                            <th>Role</th>
                                            <th>Salary</th>
                                            <th>Payslip</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white">J</a><a
                                                        href="profile.html">John Doe <span> Maths Teacher</span></a>
                                                </h2>
                                            </td>
                                            <td>EM-0001</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="69030601070d060c290c11080419050c470a0604">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"> Maths Teacher</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white">R</a><a
                                                        href="profile.html">Richard Miles <span>Science
                                                            Teacher</span></a></h2>
                                            </td>
                                            <td>EM-0002</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="34465d575c554650595d58514774514c55594458511a575b59">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$72000</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white">J</a><a
                                                        href="profile.html">John Smith <span>Sports</span></a></h2>
                                            </td>
                                            <td>EM-0003</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="3d575255534e505449557d58455c504d5158135e5250">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Sports</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$48200</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
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
                                            <td>EM-0004</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="e88581838d84819c879a9d9ba88d90898598848dc68b8785">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">English</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$59698</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar text-white">W</a>
                                                <h2><a href="profile.html">Wilmer Deluna <span>H.O.D</span></a></h2>
                                            </td>
                                            <td>EM-0005</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="c3b4aaafaea6b1a7a6afb6ada283a6bba2aeb3afa6eda0acae">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">H.O.D</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$43000</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar text-white">J</a>
                                                <h2><a href="profile.html">Jeffrey Warden <span>Science
                                                            Teacher</span></a></h2>
                                            </td>
                                            <td>EM-0006</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="9ef4fbf8f8ecfbe7e9ffecfafbf0defbe6fff3eef2fbb0fdf1f3">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$45000</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">B</a>
                                                <h2><a href="profile.html">Bernardo Galaviz <span>Science
                                                            Teacher</span></a></h2>
                                            </td>
                                            <td>EM-0007</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="85e7e0f7ebe4f7e1eae2e4e9e4f3ecffc5e0fde4e8f5e9e0abe6eae8">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Science Teacher</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$38400</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">L</a>
                                                <h2><a href="profile.html">Lesley Grauer <span>H.O.D</span></a></h2>
                                            </td>
                                            <td>EM-0008</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="4e222b3d222b37293c2f3b2b3c0e2b362f233e222b602d2123">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jun 2015</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">H.O.D</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$75500</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">J</a>
                                                <h2><a href="profile.html">Jeffery Lalor <span>H.O.D</span></a></h2>
                                            </td>
                                            <td>EM-0009</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="d0bab5b6b6b5a2a9bcb1bcbfa290b5a8b1bda0bcb5feb3bfbd">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">H.O.D</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$73550</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">L</a>
                                                <h2><a href="profile.html">Loren Gatlin <span>Sports</span></a></h2>
                                            </td>
                                            <td>EM-0010</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="c5a9aab7a0aba2a4b1a9acab85a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Sports</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$55000</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">T</a>
                                                <h2><a href="profile.html">Tarah Shropshire <span>Sports</span></a></h2>
                                            </td>
                                            <td>EM-0011</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="88fce9fae9e0fbe0fae7f8fbe0e1faedc8edf0e9e5f8e4eda6ebe7e5">[email&#160;protected]</a>
                                            </td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Sports</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$92400</td>
                                            <td><a class="btn btn-sm btn-primary" href="salary-view.html">Generate
                                                    Slip</a></td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#edit_salary" title="Edit"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                                            data-target="#delete_salary" title="Delete"><i
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

        <div id="add_salary" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">Add staff Salary</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select staff</label>
                                        <select class="select">
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Net Salary</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="">Earnings</h4>
                                    <div class="form-group">
                                        <label>Basic</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>DA(40%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>HRA(15%)</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Conveyance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Allowance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Medical Allowance</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="">Deductions</h4>
                                    <div class="form-group">
                                        <label>TDS</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>ESI</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>PF</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Leave</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Prof. Tax</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Labour Welfare</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Fund</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg">Create Salary</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="edit_salary" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-lg">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit staff Salary</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Select staff</label>
                                        <select class="select">
                                            <option>John Doe</option>
                                            <option>Richard Miles</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Net Salary</label>
                                        <input class="form-control" type="text" value="$4000">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="">Earnings</h4>
                                    <div class="form-group">
                                        <label>Basic</label>
                                        <input class="form-control" type="text" value="$6500">
                                    </div>
                                    <div class="form-group">
                                        <label>DA(40%)</label>
                                        <input class="form-control" type="text" value="$2000">
                                    </div>
                                    <div class="form-group">
                                        <label>HRA(15%)</label>
                                        <input class="form-control" type="text" value="$700">
                                    </div>
                                    <div class="form-group">
                                        <label>Conveyance</label>
                                        <input class="form-control" type="text" value="$70">
                                    </div>
                                    <div class="form-group">
                                        <label>Allowance</label>
                                        <input class="form-control" type="text" value="$30">
                                    </div>
                                    <div class="form-group">
                                        <label>Medical Allowance</label>
                                        <input class="form-control" type="text" value="$20">
                                    </div>
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h4 class="">Deductions</h4>
                                    <div class="form-group">
                                        <label>TDS</label>
                                        <input class="form-control" type="text" value="$300">
                                    </div>
                                    <div class="form-group">
                                        <label>ESI</label>
                                        <input class="form-control" type="text" value="$20">
                                    </div>
                                    <div class="form-group">
                                        <label>PF</label>
                                        <input class="form-control" type="text" value="$20">
                                    </div>
                                    <div class="form-group">
                                        <label>Leave</label>
                                        <input class="form-control" type="text" value="$250">
                                    </div>
                                    <div class="form-group">
                                        <label>Prof. Tax</label>
                                        <input class="form-control" type="text" value="$110">
                                    </div>
                                    <div class="form-group">
                                        <label>Labour Welfare</label>
                                        <input class="form-control" type="text" value="$10">
                                    </div>
                                    <div class="form-group">
                                        <label>Fund</label>
                                        <input class="form-control" type="text" value="$40">
                                    </div>
                                    <div class="form-group">
                                        <label>Others</label>
                                        <input class="form-control" type="text" value="$15">
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_salary" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Salary</h4>
                    </div>
                    <form>
                        <div class="modal-body">
                            <p>Are you sure want to delete this?</p>
                            <div class="m-t-20 text-left">
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
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