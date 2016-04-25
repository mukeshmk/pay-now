<?php
	require_once('../login/auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
	$a_id=$_SESSION['SESS_MEMBER_ID'];
	
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);
	$q1="SELECT a_nm FROM admins WHERE admin_id=$a_id;";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$a_nm=$row['a_nm'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
    
    $q1="SELECT COUNT(c_id) FROM customer";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$count_c=$row['COUNT(c_id)'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
    
    $q1="SELECT COUNT(v_id) FROM vendor";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$count_v=$row['COUNT(v_id)'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
    
    $q1="SELECT SUM(c_account) FROM customer";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$c_money=$row['SUM(c_account)'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
    $q1="SELECT SUM(v_account) FROM vendor";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$v_money=$row['SUM(v_account)'];
	
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}
?>    
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
                <li class="user-name"><span><?php echo $a_nm; ?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                </li>
                  <li><a href='../index.php'><span class="glyphicon glyphicon-off"></span></a></li>
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
                                <ul class="nav nav-list tree">
									<li><a href="admin_home.php">Home</a></li>
								</ul>
							</li>
							<li class="ripple">
								<a class="tree-toggle nav-header">
									<span class="fa-diamond fa"></span> Vendor
									<span class="fa-angle-right fa right-arrow text-right"></span>
								</a>
								<ul class="nav nav-list tree">
									<li><a href="wizard.php">Account creation</a></li>
									<li><a href="itemadd.php">Item addition</a></li>
									<li><a href="vendor_table.php">Deactivate</a></li>
								</ul>
							</li>
							<li class="ripple">
								<a class="tree-toggle nav-header">
									<span class="fa-area-chart fa"></span> Customer
									<span class="fa-angle-right fa right-arrow text-right"></span>
								</a>
								<ul class="nav nav-list tree">
									<li><a href="addmoney.php">Add Money</a></li>
									<li><a href="cust_table.php">Deactivate Account</a></li>
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
                                        <h1><?php echo $count_c; ?></h1>
                                        <p>Active Users</p>
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
                                        <h1><?php echo $count_v; ?></h1>
                                        <p>New Shops</p>
                                        <hr/>
                                      </div>
                                    </div>
                              </div>
															<div class="col-md-6">
																	<div class="panel box-v1">
																		<div class="panel-heading bg-white border-none">
																			<div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
																				<h4 class="text-left">Money with Users</h4>
																			</div>
																			<div class="col-md-6 col-sm-6 col-xs-6 text-right">
																				 <h4>
																				 <span class="icon-user icons icon text-right"></span>
																				 </h4>
																			</div>
																		</div>
																		<div class="panel-body text-center">
																			<h1><?php echo $c_money; ?></h1>
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
																			<h1><?php echo $v_money; ?></h1>
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