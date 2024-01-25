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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">students List</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.php"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Students</a></li>
                                <li class="breadcrumb-item"><span> Students List</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-12">
                    </div>
                    <div class="col-sm-8 col-12 text-right add-btn-col">
                        <a href="add-student.php" class="btn btn-primary float-right btn-rounded"><i
                                class="fas fa-plus"></i> Add Student</a>
                        <div class="view-icons">
                            <a href="all-students.php" class="grid-view btn btn-link"><i class="fas fa-th"></i></a>
                            <a href="students-list.php" class="list-view btn btn-link active"><i
                                    class="fas fa-bars"></i></a>
                        </div>
                    </div>
                </div>
                <div class="content-page">
                    <div class="row filter-row">
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Student ID</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating">
                                <label class="focus-label">Student Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group form-focus select-focus">
                                <select class="select form-control">
                                    <option>Select class</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                </select>
                                <label class="focus-label">Class</label>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="btn btn-search rounded btn-block mb-3"> search </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <div class="table-responsive">
                                <table class="table custom-table datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Name </th>
                                            <th>Student ID</th>
                                            <th>Gender</th>
                                            <th>Parents Name</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th> Address</th>
                                            <th>Date of Birth</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th class="text-right">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">P</a>
                                                    <a href="profile.php">Parker <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d001</td>
                                            <td>Male</td>
                                            <td>Jeffrey M. Wong</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>913 Deer Ridge Drive,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="2353425148465163465b424e534f460d404c4e">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-5870</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">S</a>
                                                    <a href="profile.php"> Smith <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d002</td>
                                            <td>Male</td>
                                            <td>Michael S. Porch</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>3148 Melody Lane,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="47342a2e332f07223f262a372b226924282a">[email&#160;protected]</a>
                                            </td>
                                            <td>804-478-7698</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">H</a>
                                                    <a href="profile.php">Hensley <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d003</td>
                                            <td>Male</td>
                                            <td>Elaine A. Keenum</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>665 Isaacs Creek Road,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="3058555e435c5549705548515d405c551e535f5d">[email&#160;protected]</a>
                                            </td>
                                            <td>217-509-0538</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">F</a><a
                                                        href="profile.php">Friesen <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d004</td>
                                            <td>Male</td>
                                            <td>Marion S. Shannon</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>3821 Ash street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="6f091d060a1c0a012f0a170e021f030a410c0002">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">J</a>
                                                    <a href="profile.php">Jackson<span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d005</td>
                                            <td>Male</td>
                                            <td>Parker</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>3076 Gandy street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="573d36343c24383917322f363a273b327934383a">[email&#160;protected]</a>
                                            </td>
                                            <td>315-224-9840</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">G</a>
                                                    <a href="profile.php">Garrett<span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d007</td>
                                            <td>Male</td>
                                            <td>Jennifer M. Walker</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>2281 Whispering Pines Circle,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="a2c5c3d0d0c7d6d6e2c7dac3cfd2cec78cc1cdcf">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">P</a>
                                                    <a href="profile.php">Perry<span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d008</td>
                                            <td>Male</td>
                                            <td>Christopher S. Ramirez</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>1875 Charles street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="a7d7c2d5d5dee7c2dfc6cad7cbc289c4c8ca">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">W</a>
                                                    <a href="profile.php">Williams<span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d009</td>
                                            <td>Male</td>
                                            <td>Danielle D. Hickson</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>2230 Paul Wayne Haggerty Road,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="5c2b353030353d312f1c39243d312c3039723f3331">[email&#160;protected]</a>
                                            </td>
                                            <td>504-371-7703</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">J</a>
                                                    <a href="profile.php">Parker <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d010</td>
                                            <td>Male</td>
                                            <td>Parker</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>1645 Gateway Avenue,California</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="fe949196909a919bbe9b869f938e929bd09d9193">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">F</a>
                                                    <a href="profile.php">Friesen <span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d011</td>
                                            <td>Male</td>
                                            <td>Marion S. Shannon</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>3821 Ash street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="a7c1d5cec2d4c2c9e7c2dfc6cad7cbc289c4c8ca">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2>
                                                    <a href="profile.php" class="avatar text-white">J</a>
                                                    <a href="profile.php">Jackson<span></span></a>
                                                </h2>
                                            </td>
                                            <td>ST-0d012</td>
                                            <td>Male</td>
                                            <td>Parker</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>3076 Gandy street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="86ece7e5edf5e9e8c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a>
                                            </td>
                                            <td>315-224-9840</td>
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
                                                <h2><a href="profile.php" class="avatar text-white">G</a><a
                                                        href="profile.php">Garrett<span></span></a></h2>
                                            </td>
                                            <td>ST-0d014</td>
                                            <td>Male</td>
                                            <td>Jennifer M. Walker</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>2281 Whispering Pines Circle,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="721513000017060632170a131f021e175c111d1f">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2><a href="profile.php" class="avatar text-white">P</a><a
                                                        href="profile.php">Perry<span></span></a></h2>
                                            </td>
                                            <td>ST-0d015</td>
                                            <td>Male</td>
                                            <td>Christopher S. Ramirez</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>1875 Charles street,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="b7c7d2c5c5cef7d2cfd6dac7dbd299d4d8da">[email&#160;protected]</a>
                                            </td>
                                            <td>973-584-58700</td>
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
                                                <h2><a href="profile.php" class="avatar text-white">W</a><a
                                                        href="profile.php">Williams<span></span></a></h2>
                                            </td>
                                            <td>ST-0d016</td>
                                            <td>Male</td>
                                            <td>Danielle D. Hickson</td>
                                            <td>1</td>
                                            <td>A</td>
                                            <td>2230 Paul Wayne Haggerty Road,USA</td>
                                            <td>1 Jan 2012</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                                    data-cfemail="d9aeb0b5b5b0b8b4aa99bca1b8b4a9b5bcf7bab6b4">[email&#160;protected]</a>
                                            </td>
                                            <td>504-371-7703</td>
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
                        <h4 class="modal-title">Delete student</h4>
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