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
                            <h5 class="text-uppercase mb-0 mt-0 page-title">attendance sheet</h5>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="index.html">Management</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Employees</a></li>
                                <li class="breadcrumb-item"> <span>Attendance</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <input type="text" class="form-control">
                            <label class="focus-label">Employee name</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <select class="form-control select">
                                <option>Jan</option>
                                <option>Feb</option>
                                <option>Mar</option>
                                <option>Apr</option>
                                <option>May</option>
                                <option>Jun</option>
                                <option>Jul</option>
                                <option>Aug</option>
                                <option>Sep</option>
                                <option>Oct</option>
                                <option>Nov</option>
                                <option>Dec</option>
                            </select>
                            <label class="focus-label">Select Month</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus">
                            <select class="form-control select">
                                <option>2019</option>
                                <option>2018</option>
                                <option>2018</option>
                                <option>2016</option>
                                <option>2015</option>
                            </select>
                            <label class="focus-label">Select Year</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <a href="#" class="btn btn-success rounded btn-block"> search </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <div class="table-responsive">
                            <table class="table custom-table mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Employee</th>
                                        <th>1</th>
                                        <th>2</th>
                                        <th>3</th>
                                        <th>4</th>
                                        <th>5</th>
                                        <th>6</th>
                                        <th>7</th>
                                        <th>8</th>
                                        <th>9</th>
                                        <th>10</th>
                                        <th>11</th>
                                        <th>12</th>
                                        <th>13</th>
                                        <th>14</th>
                                        <th>15</th>
                                        <th>16</th>
                                        <th>17</th>
                                        <th>18</th>
                                        <th>19</th>
                                        <th>20</th>
                                        <th>22</th>
                                        <th>23</th>
                                        <th>24</th>
                                        <th>25</th>
                                        <th>26</th>
                                        <th>27</th>
                                        <th>28</th>
                                        <th>29</th>
                                        <th>30</th>
                                        <th>31</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ruth C. Gault</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="First-off"><i
                                                        class="fas fa-check text-success"></i></span> <span
                                                    class="First-off"><i class="fas fa-times text-danger"></i></span>
                                            </div>
                                        </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td>
                                            <div class="half-day"><span class="First-off"><i
                                                        class="fas fa-times text-danger"></i></span> <span
                                                    class="First-off"><i class="fas fa-check text-success"></i></span>
                                            </div>
                                        </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Richard Miles</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>John Smith</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Mike Litorus</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Wilmer Deluna</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Jeffrey Warden</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Bernardo Galaviz</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Lesley Grauer</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Jeffery Lalor</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Loren Gatlin</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Tarah Shropshire</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                    <tr>
                                        <td>Richard Miles</td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-times text-danger"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                        <td><i class="fas fa-check text-success"></i> </td>
                                    </tr>
                                </tbody>
                            </table>
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

    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>