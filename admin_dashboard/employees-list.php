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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Employee</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Management</a></li>
                                <li class="breadcrumb-item"> <span>All Employees</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                    </div>
                    <div class="col-sm-8 col-12 text-right add-btn-col">
                        <a href="add-employee.html" class="btn btn-primary float-right btn-rounded"><i
                                class="fas fa-plus"></i> Add Employee</a>
                        <div class="view-icons">
                            <a href="all-employees.html" class="grid-view btn btn-link"><i class="fas fa-th"></i></a>
                            <a href="employees-list.html" class="list-view btn btn-link active"><i
                                    class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee ID</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Employee Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select form-control">
                                    <option>Select Designation</option>
                                    <option>Maths</option>
                                    <option>Library</option>
                                    <option>Science</option>
                                    <option>English</option>
                                </select>
                                <label class="focus-label">Designation</label>
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
                                            <th>Name</th>
                                            <th>Employee ID</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Join Date</th>
                                            <th>Role</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2><a href="profile.html" class="avatar text-white">J</a><a
                                                        href="profile.html">Ruth C. Gault <span>Maths Teacher</span></a>
                                                </h2>
                                            </td>
                                            <td>EM-0001</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="295b5c5d414a4e485c455d694c51484459454c074a">[email&#160;protected]</a>om
                                            </td>
                                            <td>410-610-2754</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a role="button" href="#"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Maths Teacher </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">R</a><a
                                                        href="profile.html">Richard Miles <span>English</span></a></h2>
                                            </td>
                                            <td>EM-0002</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="b5c7dcd6ddd4c7d1d8dcd9d0c6f5d0cdd4d8c5d9d09bd6dad8">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>18 Mar 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">English</a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">J</a><a
                                                        href="profile.html">John Smith <span>Sports</span></a></h2>
                                            </td>
                                            <td>EM-0003</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="0d676265637e606479654d68756c607d6168236e6260">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>1 Apr 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Sports </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">M</a><a
                                                        href="profile.html">Mike Litorus <span>Library</span></a></h2>
                                            </td>
                                            <td>EM-0004</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="c7aaaeaca2abaeb3a8b5b2b487a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>1 Apr 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Library </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">W</a><a
                                                        href="profile.html">Wilmer Deluna <span>Science
                                                            Teacher</span></a></h2>
                                            </td>
                                            <td>EM-0005</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="56213f3a3b332432333a23383716332e373b263a337835393b">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>22 May 2014</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Science Teacher
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">J</a><a
                                                        href="profile.html">Jeffrey Warden <span>Sports</span></a></h2>
                                            </td>
                                            <td>EM-0006</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="254f40434357405c52445741404b65405d44485549400b464a48">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>16 Jun 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">Sports </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
                                                <h2><a href="profile.html" class="avatar text-white">B</a><a
                                                        href="profile.html">Bernardo Galaviz <span>English</span></a>
                                                </h2>
                                            </td>
                                            <td>EM-0007</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="3a585f48545b485e555d5b565b4c53407a5f425b574a565f14595557">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
                                            <td>1 Jan 2013</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" role="button"
                                                        class="btn btn-white btn-sm btn-rounded dropdown-toggle"
                                                        data-toggle="dropdown" aria-expanded="false">English </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">Science Teacher</a>
                                                        <a class="dropdown-item" href="#">English</a>
                                                        <a class="dropdown-item" href="#">Library</a>
                                                        <a class="dropdown-item" href="#">Sports</a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
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
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>