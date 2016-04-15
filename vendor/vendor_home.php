<?php
	require_once('../login/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pay Now - Customer</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#">PayNow</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="vendor_home.php">Home</a>
                    </li>
                    <li>
                        <a href="vendor_cart.php">Cart</a>
                    </li>
                    <li>
                        <a href="vendor_sett.php">Settings</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
        <br><br><br>
        <div class="container">            
            <div class="jumbotron">
                <form name="loginform" action="vendor_itemlist.php" method="get">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-2" align="center">
                        <h3>
                            QR Code:
                        </h3>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="cid" autocomplete="off">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn">Sign in!</button>
                    </div>
                    <div class="col-sm-2"></div>
                </form>
            </div>
        </div>
    
    
    </body> 
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.backstretch.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
    <script src="fun.js"></script>

    <style>
        .nav-tabs
        {
            background-color:#fff;
        }
        .tab-content
        {
            background-color:#fff;
            color:#fff;
            padding:5px
        }
        .nav-tabs > li > a
        {
            border: medium none;
        }
        .nav-tabs > li > a:hover
        {
            background-color: #fff !important;
            border: medium none;
            border-radius: 0;
            color:#161616;
        }
    </style>
</html>