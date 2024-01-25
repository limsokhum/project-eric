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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">Roles & Permissions</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                                <li class="breadcrumb-item"><span>Roles & Permissions</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3">
                                <a href="#" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#add_role"><i class="fas fa-plus"></i> Add Roles</a>
                                <div class="roles-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="javascript:void(0);">Administrator
                                                <span class="role-action">
                                                    <span class="action-circle large" title="Edit" data-toggle="modal"
                                                        data-target="#edit_role">
                                                        <i class="material-icons">edit</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete"
                                                        data-toggle="modal" data-target="#delete_role">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                        <li><a href="">Correspondent</a></li>
                                        <li><a href="">Principal</a></li>
                                        <li><a href="">Vice-Principal</a></li>
                                        <li><a href="">Accountant</a></li>
                                        <li><a href="">Co-ordinator</a></li>
                                        <li><a href="">Teachers</a></li>
                                        <li><a href="">HR</a></li>
                                        <li><a href="">Parents</a></li>
                                        <li><a href="">Students</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9">
                                <h6 class="card-title">Module Access</h6>
                                <div class="m-b-30 mt-3">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Employee
                                            <div class="material-switch float-right">
                                                <input id="staff_module" type="checkbox" checked="checked">
                                                <label for="staff_module" class="badge-success"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Holidays
                                            <div class="material-switch float-right">
                                                <input id="holidays_module" type="checkbox">
                                                <label for="holidays_module" class="badge-success"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Leave Request
                                            <div class="material-switch float-right">
                                                <input id="leave_module" type="checkbox">
                                                <label for="leave_module" class="badge-success"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Events
                                            <div class="material-switch float-right">
                                                <input id="events_module" type="checkbox">
                                                <label for="events_module" class="badge-success"></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            Chat
                                            <div class="material-switch float-right">
                                                <input id="chat_module" type="checkbox">
                                                <label for="chat_module" class="badge-success"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="table-responsive">
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
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Holidays</td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Leave Request</td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Events</td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                                <td class="text-center">
                                                    <input type="checkbox" checked="">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
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

        <div id="add_role" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Role</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control">
                                <label>Role Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg">Create Role</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="edit_role" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Role</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" value="H.O.D">
                                <label>Role Name <span class="text-danger">*</span></label>
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary btn-lg mb-3">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="delete_role" class="modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Role</h4>
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>