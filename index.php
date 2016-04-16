<?php require 'create_db.php' ?>
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	unset($_SESSION['SU']);
?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pay Now</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style1.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>PayNow</strong><br>Login or Register</h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-key"></i>
	                        		</div>
	                            </div>
  <ul class="nav nav-tabs" align="center">
    <li class="active"><a data-toggle="tab" href="#home">Admin</a></li>
    <li><a data-toggle="tab" href="#menu1">Customer</a></li>
    <li><a data-toggle="tab" href="#menu2">Vendor</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
        <div class="form-bottom">
            <form class="form-signin" name="loginform" action="login/login_exec_admin.php" method="post" autocomplete="off" role="form">
                <?php
				    if(isset($_SESSION['ERRMSG_ARR'])&&is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) 
				    {
					    echo('<div class="alert alert-danger">');
					    echo '<ul class="err">';
					    foreach($_SESSION['ERRMSG_ARR'] as $msg) 
					    {
                            echo '<li><strong>Error! </strong>',$msg,'</li>'; 
					    }
					    echo '</ul>';
					    unset($_SESSION['ERRMSG_ARR']);
					    echo('</div>');
				    }
			     ?>
            	<div class="form-group">
            		<label class="sr-only" for="form-username">Username</label>
                	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-password">Password</label>
                	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                </div>
                    <button type="submit" class="btn">Sign in!</button>
                </form>
           </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <div class="form-bottom">
            <form class="form-signin" name="loginform" action="login/login_exec_customer.php" method="post" autocomplete="off" role="form">
                <?php
				    if(isset($_SESSION['ERRMSG_ARR'])&&is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) 
				    {
					    echo('<div class="alert alert-danger">');
					    echo '<ul class="err">';
					    foreach($_SESSION['ERRMSG_ARR'] as $msg) 
					    {
                            echo '<li><strong>Error! </strong>',$msg,'</li>'; 
					    }
					    echo '</ul>';
					    unset($_SESSION['ERRMSG_ARR']);
					    echo('</div>');
				    }
			     ?>
            	<div class="form-group">
            		<label class="sr-only" for="form-username">Username</label>
                	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-password">Password</label>
                	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                </div>
                    <button type="submit" class="btn">Sign in!</button>
                </form>
           </div>
      </div>
    <div id="menu2" class="tab-pane fade">
      <div class="form-bottom">
            <form class="form-signin" name="loginform" action="login/login_exec_vendor.php" method="post" autocomplete="off" role="form">
                <?php
				    if(isset($_SESSION['ERRMSG_ARR'])&&is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) 
				    {
					    echo('<div class="alert alert-danger">');
					    echo '<ul class="err">';
					    foreach($_SESSION['ERRMSG_ARR'] as $msg) 
					    {
                            echo '<li><strong>Error! </strong>',$msg,'</li>'; 
					    }
					    echo '</ul>';
					    unset($_SESSION['ERRMSG_ARR']);
					    echo('</div>');
				    }
			     ?>
            	<div class="form-group">
            		<label class="sr-only" for="form-username">Username</label>
                	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
                </div>
                <div class="form-group">
                	<label class="sr-only" for="form-password">Password</label>
                	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
                </div>
                    <button type="submit" class="btn">Sign in!</button>
                </form>
           </div>
      </div>
  </div>

	                            
		                    </div>
                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
                                    <form action="new_cust.php" role="form" method="post" autocomplete="off" class="registration-form">
				                    	<div class="form-group">
				                        	<label class="sr-only" for="form-unm">User Name</label>
				                        	<input type="text" name="unm" placeholder="User name..." class="form-nsername form-control" id="form-email">
				                        </div>
                                        <div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
				                        </div>
                                        <div class="form-group">
				                        	<label class="sr-only" for="form-pwd">Password</label>
				                        	<input type="password" name="pwd" placeholder="Password..." class="form-pwd form-control" id="form-email">
				                        </div>
				                        <button type="submit" class="btn">Sign me up!</button>
				                    </form>
			                    </div>
                        	</div>

                        </div>
                    </div>
                </div>
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
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
