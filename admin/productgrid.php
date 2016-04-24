<?php
	require_once('../login/auth.php');
?>
<!DOCTYPE html>
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
                 <b>MIMIN</b>
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

          <!-- end: Left Menu -->


          <!-- start: Content -->
            <div id="content">
              <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Product Grid</h3>
                        <p class="animated fadeInDown">
                          Vendor <span class="fa-angle-right fa"></span> Product Grid
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="row">
                    <div class="col-sm-6 col-md-3 product-grid">
                      <div class="thumbnail">
                        <div class="product-location">
                          <span class="fa-map-marker fa"></span> Banyumas
                          </div>
                        <div class="product-price product-price-bottom">
                          <h4>$1,716</h4>
                        </div>
                        <img src="holder.js/250x250" alt="...">
                        <div class="caption">
                          <small>Category</small>
                          <small class="pull-right">
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star-half fa"></span>
                          </small>
                          <h4>Product Name</h4>
                          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                          <p><a href="#" class="btn btn-primary" role="button">Buy</a></p>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-6 col-md-3 product-grid">
                      <div class="thumbnail">
                        <div class="product-price product-price-top">
                          <h4>$1,716</h4>
                        </div>
                        <img src="holder.js/250x250" alt="...">
                        <div class="caption">
                          <small>Category</small>
                          <small class="pull-right">
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star-half fa"></span>
                          </small>
                          <h4>Product Name</h4>
                          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                          <p><a href="#" class="btn btn-danger" role="button">Buy</a></p>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-6 col-md-3 product-grid">
                      <div class="col-md-12 product-location">
                          <span class="pull-right"><span class="fa-map-marker fa"></span> Banyumas</span>
                      </div>
                      <div class="thumbnail">
                        <div class="product-price product-price-bottom">
                          <h4>$1,716</h4>
                        </div>
                        <img src="holder.js/250x250" alt="...">
                        <div class="caption">
                          <small>Category</small>
                          <small class="pull-right">
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star-half fa"></span>
                          </small>
                          <h4>Product Name</h4>
                          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                          <p><a href="#" class="btn btn-success" role="button">Buy</a></p>
                        </div>
                      </div>
                    </div>
                     <div class="col-sm-6 col-md-3 product-grid">
                      <div class="col-md-12 product-location">
                          <span class="pull-right">
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star fa"></span>
                            <span class="rate fa-star-half fa"></span>
                          </span>
                      </div>
                      <div class="thumbnail">
                        <div class="product-price product-price-bottom">
                          <h4>$1,716</h4>
                        </div>
                        <img src="holder.js/250x250" alt="...">
                        <div class="caption">
                          <small>Category</small>
                          <small class="pull-right">
                            <span>20 Minutes Ago</span>
                          </small>
                          <h4>Product Name</h4>
                          <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis.</p>
                          <p><a href="#" class="btn btn-info" role="button">Buy</a></p>
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
<script src="asset/js/plugins/holder.min.js"></script>
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>


<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  });
</script>
<!-- end: Javascript -->
</body>
</html>
