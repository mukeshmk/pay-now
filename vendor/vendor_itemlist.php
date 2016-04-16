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
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../assets/css/form-elements.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:regular,bold"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+Sans:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Nixie+One:regular,italic,bold,bolditalic"/>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alegreya+SC:regular,italic,bold,bolditalic"/>
    
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
        			<li><a href='vendor_cancel.php'><span class="glyphicon glyphicon-remove"></span> Cancel</a></li>
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>		
    </body> 
    
    
    
    <?php
	echo'<br><br>';
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
    
    $_SESSION['cid'] = $_GET['cid'];
    $result = mysqli_query($connect, "SELECT c_id FROM customer where c_id = '" .$_SESSION['cid']."'");
    if (!$result)  
    {  
    	echo "Error fetching data: " . mysqli_error($connect);
    }
    if(mysqli_num_rows($result) == 0)
    {
        echo '
            <html>
	           <meta http-equiv="refresh" content="0; URL=vendor_cancel.php">
	           <meta name="keywords" content="automatic redirection">
            </html>
        ';
    }
    else
    {
    
    $result = mysqli_query($connect, "SELECT item_no, item_nm, item_price, v_id FROM item_list where v_id = '" .$_SESSION['SESS_MEMBER_ID']."'");
    if (!$result)  
    {  
    	echo "Error fetching data: " . mysqli_error($connect);  
    }
	
	if(mysqli_num_rows($result) > 0) 
    {
		while ($row = mysqli_fetch_array($result))
    	{
    		$item_no[] = $row['item_no'];
    		$item_nm[] = $row['item_nm'];  
    		$item_price[] = $row['item_price'];
    		$v_id[] = $row['v_id'];
    	}
	
    ?>
  
    
    
    
    	<div class="container">
            <br><br>
			<div class="container">
	          <div class="row">
               	<div class="row">
                <?php 
						$x=0; 
						foreach ($item_no as $i_no):
                    		echo "
                <div class=\"col-md-3 text-center\" >
                    <div class=\"box\"\">
                        <div class=\"box-content\">";        
                        echo '
                            <div class=" hero-feature">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/800x500" alt="">
                                    <div class="caption">
                                        <h3><strong>Item Name: </strong>'.$item_nm[$x].'</h3>
                                        <p><strong>Price :</strong>'.$item_price[$x].'</p>
                                        <p>
                                        <a href="tocart.php?id='.$item_no[$x].'" class="btn btn-primary">Add to Cart</a> 
                                        <a href="#" class="btn btn-default">More Info</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                        $x=$x+1; 
                        endforeach; 
	}
	else
	{
		echo'<h1 align="center">NO Notes to Display !!</h1>';
	}
				?>
                    
                </div>           
            </div>
	   </div>
    </div>
    <!-- /.container -->

    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.backstretch.min.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <style>
        body 
        {
            background: url('../assets/img/backgrounds/1.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        html 
        {
            background: url('../assets/img/backgrounds/1.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }
        .box 
        {
            margin-bottom: 20px;
            padding: 30px 15px;
            background: rgba(225,225,225,0.8);
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
    </style>
    <?php } ?>
</html>