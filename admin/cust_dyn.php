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
    
    $q1="SELECT * FROM customer";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();
	$qu = mysqli_query($connect,$q1);
	if(!$qu)
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
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/datatables.bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
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
                <li class="user-name"><span><?php echo "$a_nm"; ?></span></li>
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

              <!-- start:Left Menu -->
              <div id="left-menu">
                <div class="sub-left-menu scroll">
                  <ul class="nav nav-list">
                      <li><div class="left-bg"></div></li>
                      <li class="time">
                        <h1 class="animated fadeInLeft">21:00</h1>
                        <p class="animated fadeInRight">Sat,October 1st 2029</p>
                      </li>
                      <li class="ripple">
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
                      <li class="active ripple">
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


            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Customer Details</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Customer Table
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Customer Table</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>S No</th>
                          <th>Customer ID</th>
                          <th>User Name</th>
                          <th>E-Mail ID</th>
                          <th>Balance</th>
                        </tr>
                      </thead>
                      <tbody>
            <?php
                    $sno = 1;      
                   while($row=mysqli_fetch_array($qu)) 
	               {
       	                echo "
		                  <tr>
                            <td align='center'>".$sno."</td>
       	                    <td align='center'>".$row["c_id"]."</td>
		                    <td align='center'>".$row["c_unm"]."</td>
		                    <td align='center'>".$row["c_email"]."</td>
		                    <td align='center'>".$row["c_account"]."</td>
		                  </tr>";
                          $sno = $sno + 1;
	               }
            ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          <!-- end: content -->

<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.datatables.min.js"></script>
<script src="asset/js/plugins/datatables.bootstrap.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
</body>
</html>
