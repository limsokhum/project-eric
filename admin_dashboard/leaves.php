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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Leave Request</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Management</a></li>
                                <li class="breadcrumb-item"><a href="#">Employees</a></li>
                                <li class="breadcrumb-item"><span> Leave Request</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 col-6">
                    </div>
                    <div class="col-sm-4 col-6 text-right add-btn-col">
                        <a href="#" class="btn btn-primary btn-rounded float-right" data-toggle="modal"
                            data-target="#add_leave"><i class="fas fa-plus"></i> Add Leave</a>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus select-focus">
                                <select class="form-control select">
                                    <option> -- Select -- </option>
                                    <option>Casual Leave</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
                                </select>
                                <label class="focus-label">Leave Type</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <div class="form-group form-focus select-focus">
                                <select class="select">
                                    <option> -- Select -- </option>
                                    <option> Pending </option>
                                    <option> Approved </option>
                                    <option> Rejected </option>
                                </select>
                                <label class="focus-label">Leave status</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
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
                        <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                            <a href="#" class="btn btn-search rounded btn-block mb-3"> Search </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="table-responsive">
                                <table class="table custom-table mb-0 datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Employee</th>
                                            <th>Leave Type</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>No of Days</th>
                                            <th>Reason</th>
                                            <th class="text-center">status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">R</a>
                                                <h2><a href="#">Richard Miles <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>8 Aug 2018</td>
                                            <td>8 Aug 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-purple"></i> New
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">J</a>
                                                <h2><a> John Doe <span> Maths Teacher</span></a></h2>
                                            </td>
                                            <td>Medical Leave</td>
                                            <td>13 Jul 2018</td>
                                            <td>15 Jul 2018</td>
                                            <td>3 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">J</a>
                                                <h2><a>John Smith <span>Sports</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>27 Jun 2018</td>
                                            <td>28 Jun 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">M</a>
                                                <h2><a>Mike Litorus <span>English</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>13 May 2018</td>
                                            <td>13 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-danger"></i> Declined
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">R</a>
                                                <h2><a>Richard Parker <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>31 Mar 2018</td>
                                            <td>31 Mar 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-purple"></i> New
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">C</a>
                                                <h2><a>Catherine Manseau <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">B</a>
                                                <h2><a>Buster Wigton <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">M</a>
                                                <h2><a>Melita Faucher <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-danger"></i> Declined
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">T</a>
                                                <h2><a>Tarah Shropshire <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-purple"></i> New
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">D</a>
                                                <h2><a>Domenic Houston <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">
                                                    <img src="assets/img/user.jpg" alt="John Doe">
                                                </a>
                                                <h2><a>John Doe <span> Maths Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-success"></i> Approved
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
                                                                class="fas fa-trash-alt m-r-5"></i> Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="profile.html" class="avatar">R</a>
                                                <h2><a>Rolland Webber <span>Science Teacher</span></a></h2>
                                            </td>
                                            <td>Casual Leave</td>
                                            <td>5 May 2018</td>
                                            <td>6 May 2018</td>
                                            <td>2 days</td>
                                            <td>Going to Hospital</td>
                                            <td class="text-center">
                                                <div class="dropdown action-label">
                                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                                        data-toggle="dropdown" aria-expanded="false">
                                                        <i class="far fa-dot-circle text-danger"></i> Declined
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-purple"></i> New</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-info"></i> Pending</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-success"></i> Approved</a>
                                                        <a class="dropdown-item" href="#"><i
                                                                class="far fa-dot-circle text-danger"></i> Declined</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false"><i
                                                            class="fas fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" title="Edit"
                                                            data-toggle="modal" data-target="#edit_leave"><i
                                                                class="fas fa-pencil-alt m-r-5"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" title="Decline"
                                                            data-toggle="modal" data-target="#delete_approve"><i
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

        <div id="add_leave" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Leave Request</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Leave Type <span class="text-danger">*</span></label>
                                <select class="form-control select">
                                    <option>Select Leave Type</option>
                                    <option>Casual Leave 12 Days</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>From <span class="text-danger">*</span></label>
                                <input class="form-control datetimepicker-input datetimepicker" type="text"
                                    data-toggle="datetimepicker">
                            </div>
                            <div class="form-group">
                                <label>To <span class="text-danger">*</span></label>
                                <input class="form-control datetimepicker-input datetimepicker" type="text"
                                    data-toggle="datetimepicker">
                            </div>
                            <div class="form-group">
                                <label>Number of days <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" readonly="">
                            </div>
                            <div class="form-group">
                                <label>Remaining Leaves <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" readonly="" value="12">
                            </div>
                            <div class="form-group">
                                <label>Leave Reason <span class="text-danger">*</span></label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="m-t-20 text-center custom-mt-form-group">
                                <button class="btn btn-primary btn-lg">Send Leave Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="edit_leave" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Leave</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Leave Type <span class="text-danger">*</span></label>
                                <select class="form-control select">
                                    <option>Select Leave Type</option>
                                    <option>Casual Leave 12 Days</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>From <span class="text-danger">*</span></label>
                                <input class="form-control datetimepicker-input datetimepicker" type="text"
                                    data-toggle="datetimepicker">
                            </div>
                            <div class="form-group">
                                <label>To <span class="text-danger">*</span></label>
                                <input class="form-control datetimepicker-input datetimepicker" type="text"
                                    data-toggle="datetimepicker">
                            </div>
                            <div class="form-group">
                                <label>Number of days <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="2">
                            </div>
                            <div class="form-group">
                                <label>Remaining Leaves <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" value="12">
                            </div>
                            <div class="form-group">
                                <label>Leave Reason <span class="text-danger">*</span></label>
                                <input class="form-control" value="Going to hospital">
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_approve" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered  modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Decline Leave Request</h4>
                    </div>
                    <form>
                        <div class="modal-body">
                            <p>Are you sure want to declined this leave Request?</p>
                            <div class="m-t-20 text-left">
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Decline</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>