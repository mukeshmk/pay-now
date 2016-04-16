<?php
	require_once('../login/auth.php');
?>
<html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pay Now - Customer</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    </head>
    <body background="../assets/img/cust_home.jpg">
            <!-- Navigation -->
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
                        <a href="cust_home.php">Home</a>
                    </li>
                    <li>
                        <a href="cust_paynow.php">Pay Now</a>
                    </li>
                    <li>
                        <a href="cust_sett.php">Settings</a>
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
                 <div class="clearfix content-heading">
                    <img class="pull-left" width=200 height=200 src="../assets/img/intro-pic.jpg"/>
                    <h2 class="intro-text text-center">Shop anywhere
                        <strong>without any paper!</strong>
                    </h2>
                    <hr class="visible-xs">
                    <p><strong>PayNow</strong> is a one-stop payment system. It is a centralized payment system for places which require payments at multiple places like job fairs, technology fests, food courts, etc.</p>
                    <p>This service aims at saving time and paper for the vendors and users alike. <br>You just need a mobile phone to get started!</p>
                </div>
            </div>
            <div class="jumbotron">
                 <div class="clearfix content-heading">
                    <h2 class="intro-text text-center">What is
                        <strong>PayNow?</strong>
                    </h2>
                    <hr class="visible-xs">
                    <p><strong>PayNow</strong> is an online transaction system. Money is handed over at a single counter which is then transferred to the your virtual account. If you wish to purchase any service, you need only swipe your phone near the vendor stall and money will be transferred virtually and the service is acquired.
</p>
                </div>
            </div>
            <div class="box">
                <h1>
                    Your current Balance: <strong>
                    <?php
                        $connect=mysqli_connect("localhost","root","");
                        if (!$connect) 
                        {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                        }
                        else
	                   {
                            mysqli_set_charset($connect, 'utf8');
                            if (!mysqli_select_db($connect, 'paynow')) 
                            { 
                                echo "Unable to locate database."; 
                            }
                        }   
                        $result = mysqli_query($connect, "SELECT c_account FROM customer where c_id = '".$_SESSION['SESS_MEMBER_ID']."'");
                        if (!$result)  
                        {  
    	                   echo "Error fetching data: " . mysqli_error($connect);  
                        }
                        if(mysqli_num_rows($result) > 0) 
                        {
                            while ($row = mysqli_fetch_array($result))
    	                    {
    		                  $bal = $row['c_account'];
    	                    }
                        }
                        echo $bal;
                    ?>
                    </strong>
                </h1>
            </div>
        </div>
        <!-- Javascript -->
        <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
    </body>
    <style>
        body 
        {
            background: url('../assets/img/cust_home.jpg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
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
        .box 
        {
            margin-bottom: 20px;
            padding: 30px 15px;
            background: rgba(225,225,225,0.8);
        }
 
    </style>
</html>
