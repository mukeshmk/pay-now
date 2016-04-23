<?php
	require_once('../login/auth.php');
?>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="description" content="PayNow - Admin Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PayNow - Admin</title>

    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/fullcalendar.min.css"/>
	<link href="asset/css/style.css" rel="stylesheet">
	<!-- end: Css -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
			<nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
						<div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>

                <a href="admin_home.php" class="navbar-brand">
                 <b>Pay Now</b>
                </a>

								<div class="container">
              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Akihiko Avaron</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                </li>

              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
			<div class="container-fluid mimin-wrapper">
			<div id="left-menu">
				<div class="sub-left-menu scroll">
					<ul class="nav nav-list">
							<li><div class="left-bg"></div></li>
							<li class="time">
								<h1 class="animated fadeInLeft">21:00</h1>
								<p class="animated fadeInRight">Sat,October 1st 2029</p>
							</li>
							<li class="active ripple">
								<a class="tree-toggle nav-header" href="admin_home.php"><span class="fa-home fa"></span> Dashboard
									<span class="fa-angle-right fa right-arrow text-right"></span>
								</a>
							</li>
							<li class="ripple">
								<a class="tree-toggle nav-header">
									<span class="fa-diamond fa"></span> Vendor
									<span class="fa-angle-right fa right-arrow text-right"></span>
								</a>
								<ul class="nav nav-list tree">
									<li><a href="wizard.php">Account creation</a></li>
									<li><a href="itemadd.php">Item addition</a></li>
									<li><a href="tablestatic.php">Deactivate</a></li>
								</ul>
							</li>
							<li class="ripple">
								<a class="tree-toggle nav-header">
									<span class="fa-area-chart fa"></span> Customer
									<span class="fa-angle-right fa right-arrow text-right"></span>
								</a>
								<ul class="nav nav-list tree">
									<li><a href="addmoney.php">Add Money</a></li>
									<li><a href="tablestatic.php">Deactivate Account</a></li>
								</ul>
							</li>
						</ul>
					</div>
			</div>

          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Customer Service</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Coimbatore, India</p>
                    </div>

                  </div>
                </div>

                <div class="col-md-12" style="padding:20px;">
                    <div class="col-md-12 padding-0">
                        <div class="col-md-8 padding-0">
                            <div class="col-md-12 padding-0">
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Users</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-user icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>51181,320</h1>
                                        <p>User active</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Vendors</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="icon-basket-loaded icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1>51181,320</h1>
                                        <p>New Shops</p>
                                        <hr/>
                                      </div>
                                    </div>
                              </div>
															<div class="col-md-6">
																	<div class="panel box-v1">
																		<div class="panel-heading bg-white border-none">
																			<div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
																				<h4 class="text-left">Money from Users</h4>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-6 text-right">
																				 <h4>
																				 <span class="icon-user icons icon text-right"></span>
																				 </h4>
																			</div>
																		</div>
																		<div class="panel-body text-center">
																			<h1>51181,320</h1>
																			<p>Rs.</p>
																			<hr/>
																		</div>
																	</div>
															</div>
															<div class="col-md-6">
																	<div class="panel box-v1">
																		<div class="panel-heading bg-white border-none">
																			<div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
																				<h4 class="text-left">Vendors Accounts</h4>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-6 text-right">
																				 <h4>
																				 <span class="icon-basket-loaded icons icon text-right"></span>
																				 </h4>
																			</div>
																		</div>
																		<div class="panel-body text-center">
																			<h1>51181,320</h1>
																			<p>Rs.</p>
																			<hr/>
																		</div>
																	</div>
														</div>
                            </div>
                        </div>
                    </div>
                </div>
      		  </div>
          <!-- end: content -->
      </div>
		</div>

		</div>
    <!-- start: Javascript -->
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>


		<script src="asset/js/plugins/moment.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <!-- custom -->
     <script src="asset/js/main.js"></script>
  <!-- end: Javascript -->
  </body>
</html>