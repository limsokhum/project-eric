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
							<h5 class="text-uppercase mb-0 mt-0 page-title">Parents list</h5>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-12">
							<ul class="breadcrumb float-right p-0 mb-0">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><a href="index.html">Parents</a></li>
								<li class="breadcrumb-item"><span> Parents list</span></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-12">
					</div>
					<div class="col-sm-8 col-12 text-right add-btn-col">
						<a href="add-parent.html" class="btn btn-primary float-right btn-rounded"><i
								class="fas fa-plus"></i> Add Parent</a>
						<div class="view-icons">
							<a href="all-parents.html" class="grid-view btn btn-link"><i class="fas fa-th"></i></a>
							<a href="parents-list.html" class="list-view btn btn-link active"><i
									class="fas fa-bars"></i></a>
						</div>
					</div>
				</div>
				<div class="content-page">
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Parents ID</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Parents Name</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Mobile</label>
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
											<th>Name </th>
											<th>ID</th>
											<th>Gender</th>
											<th>Student Name</th>
											<th>Occupation</th>
											<th>Address</th>
											<th>Email</th>
											<th>Mobile</th>
											<th class="text-right">Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<h2><a href="profile.html" class="avatar text-white">J</a><a
														href="profile.html">Jeffrey M. Wong <span></span></a></h2>
											</td>
											<td>PT-0d001</td>
											<td>Male</td>
											<td>Parker</td>
											<td>Mathematical technician</td>
											<td>913 Deer Ridge Drive,Succasunna, NJ 07876</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="8fe5eae9e9fdeaf6e2f8e0e1e8cfeaf7eee2ffe3eaa1ece0e2">[email&#160;protected]</a>
											</td>
											<td>973-584-5870</td>
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
														href="profile.html">Michael S. Porch<span></span></a></h2>
											</td>
											<td>PT-0d002</td>
											<td>Male</td>
											<td> Smith</td>
											<td>Commodities trader</td>
											<td>3148 Melody Lane,Mckenney, VA 23872</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="4b262228232a2e27383b243928230b2e332a263b272e65282426">[email&#160;protected]</a>
											</td>
											<td>804-478-7698</td>
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
												<h2> <a href="profile.html" class="avatar text-white">E</a><a
														href="profile.html">Elaine A. Keenum<span></span></a></h2>
											</td>
											<td>PT-0d003</td>
											<td>Male</td>
											<td>Hensley</td>
											<td>Plasma cutter</td>
											<td>665 Isaacs Creek Road,Golden, IL 62339</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="cbaea7aaa2a5aeaaa0aeaea5bea68baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a>
											</td>
											<td>217-509-0538</td>
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
														href="profile.html">Marion S. Shannon<span></span></a></h2>
											</td>
											<td>PT-0d004</td>
											<td>Male</td>
											<td>Parker</td>
											<td>Friesen</td>
											<td>3821 Ash street,Lewisville, TX 75067</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="81ece0f3e8eeeff2f2e9e0efefeeefc1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a>
											</td>
											<td>972-874-9653</td>
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
												<h2> <a href="profile.html" class="avatar text-white">E</a><a
														href="profile.html">Erin A. Collins<span></span></a></h2>
											</td>
											<td>PT-0d005</td>
											<td>Male</td>
											<td>Jackson</td>
											<td>Management information systems director</td>
											<td>3076 Gandy street,Syracuse, NY 13224</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="86e3f4efe8e7e5e9eaeaefe8f5c6e3fee7ebf6eae3a8e5e9eb">[email&#160;protected]</a>
											</td>
											<td>315-224-9840</td>
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
														href="profile.html">William D. Jones<span></span></a></h2>
											</td>
											<td>PT-0d006</td>
											<td>Male</td>
											<td>Mason</td>
											<td>Aircraft structure assembler</td>
											<td>4633 Wilson street,San Diego, CA 92111</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="7a0d131616131b171e1015141f093a1f021b170a161f54191517">[email&#160;protected]</a>
											</td>
											<td>973-584-58700</td>
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
														href="profile.html">Jennifer M. Walker<span></span></a></h2>
											</td>
											<td>PT-0d006</td>
											<td>Male</td>
											<td>Garrett</td>
											<td>Bill and account collector</td>
											<td>2281 Whispering Pines Circle,Dallas, TX 75207</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="99d3fcf7f7f0fffcebd4cef8f5f2fcebd9f3f6ecebebf8e9f0fdfcb7faf6f4">[email&#160;protected]</a>
											</td>
											<td>972-372-5354</td>
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
												<h2><a href="profile.html" class="avatar text-white">C</a><a
														href="profile.html">Christopher S. Ramirez<span></span></a></h2>
											</td>
											<td>PT-0d007</td>
											<td>Male</td>
											<td>Perry</td>
											<td>Independent agent</td>
											<td>1875 Charles street,Plymouth, MI 48170</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="5f1c372d362c2b302f373a2d2c2d3e32362d3a251f">[email&#160;protected]</a>@example.com
											</td>
											<td>734-459-5639</td>
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
												<h2><a href="profile.html" class="avatar text-white">D</a><a
														href="profile.html">Danielle D. Hickson<span></span></a></h2>
											</td>
											<td>PT-0d008</td>
											<td>Male</td>
											<td>Williams</td>
											<td>Plant manager</td>
											<td>2230 Paul Wayne Haggerty Road,Marrero, LA 70072</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="e3898c8b8d878c86a3869b828e938f86cd808c8e">[email&#160;protected]</a>
											</td>
											<td>504-371-7703</td>
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
														href="profile.html">Jacqueline C. Green<span></span></a></h2>
											</td>
											<td>PT-0d010</td>
											<td>Male</td>
											<td>Kulick</td>
											<td>Civil engineer</td>
											<td>4796 Froe street,Wheeling, WV 26003</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="cba1aaa8babeaea7a2a5aea8acb9aeaea58baeb3aaa6bba7aee5a8a4a6">[email&#160;protected]</a>
											</td>
											<td>304-370-7153</td>
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
												<h2> <a href="profile.html" class="avatar text-white">J</a><a
														href="profile.html">Parker <span></span></a></h2>
											</td>
											<td>PT-0d001</td>
											<td>Male</td>
											<td>Parker</td>
											<td>Mathematical technician</td>
											<td>1645 Gateway Avenue,California</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="0b616463656f646e4b6e736a667b676e25686466">[email&#160;protected]</a>
											</td>
											<td>973-584-58700</td>
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
														href="profile.html">Jeffrey M. Wong <span></span></a></h2>
											</td>
											<td>PT-0d001</td>
											<td>Male</td>
											<td>Parker</td>
											<td>Mathematical technician</td>
											<td>913 Deer Ridge Drive,Succasunna, NJ 07876</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="e8828d8e8e9a8d91859f87868fa88d90898598848dc68b8785">[email&#160;protected]</a>
											</td>
											<td>973-584-5870</td>
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
														href="profile.html">Michael S. Porch<span></span></a></h2>
											</td>
											<td>PT-0d002</td>
											<td>Male</td>
											<td> Smith</td>
											<td>Commodities trader</td>
											<td>3148 Melody Lane,Mckenney, VA 23872</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="24494d474c45414857544b56474c64415c45495448410a474b49">[email&#160;protected]</a>
											</td>
											<td>804-478-7698</td>
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
												<h2><a href="profile.html" class="avatar text-white">E</a><a
														href="profile.html">Elaine A. Keenum<span></span></a></h2>
											</td>
											<td>PT-0d003</td>
											<td>Male</td>
											<td>Hensley</td>
											<td>Plasma cutter</td>
											<td>665 Isaacs Creek Road,Golden, IL 62339</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="543138353d3a31353f31313a213914312c35392438317a373b39">[email&#160;protected]</a>
											</td>
											<td>217-509-0538</td>
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
												<h2><a href="profile.html" class="avatar">M</a><a
														href="profile.html">Marion S. Shannon<span></span></a></h2>
											</td>
											<td>PT-0d004</td>
											<td>Male</td>
											<td>Parker</td>
											<td>Friesen</td>
											<td>3821 Ash street,Lewisville, TX 75067</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="3855594a5157564b4b505956565756785d40595548545d165b5755">[email&#160;protected]</a>
											</td>
											<td>972-874-9653</td>
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
												<h2><a href="profile.html" class="avatar text-white">E</a><a
														href="profile.html">Erin A. Collins<span></span></a></h2>
											</td>
											<td>PT-0d005</td>
											<td>Male</td>
											<td>Jackson</td>
											<td>Management information systems director</td>
											<td>3076 Gandy street,Syracuse, NY 13224</td>
											<td><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
													data-cfemail="781d0a1116191b17141411160b381d00191508141d561b1715">[email&#160;protected]</a>
											</td>
											<td>315-224-9840</td>
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
						<h4 class="modal-title">Delete Student</h4>
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

	<script data-cfasync="false"
		src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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