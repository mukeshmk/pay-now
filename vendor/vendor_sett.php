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
                    <li>
                        <a href="vendor_home.php">Home</a>
                    </li>
                    <li>
                        <a href="vendor_cart.php">Cart</a>
                    </li>
                    <li class="active">
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
<?php
	$v_id=$_SESSION['SESS_MEMBER_ID'];
	
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);

	$q1="SELECT v_unm, v_pwd, v_name, v_shop, v_email FROM vendor WHERE v_id=$v_id;";	
	$result = $connect->query($q1);
	$row=$result->fetch_assoc();

	$v_unm=$row['v_unm'];
	$v_pwd=$row['v_pwd'];
	$v_name=$row['v_name'];
	$v_shop=$row['v_shop'];
	$v_email=$row['v_email'];

	if(!mysqli_query($connect,$q1))
	{
		echo("Error description 1: " . mysqli_error($connect));
		echo('<br><br>');
	}

	echo("<br><br><br><br><br>");
	mysqli_close($connect);
	echo'
	<h1 align="center">Edit these fields:</h1>';
?>
            

        <form action="update_vendor.php" method="post" autocomplete="off" id="note_update">
			<table style="width:0%" align="center">
			<tr>
				
			<td>
			<table style="width:0%" align="center" class="table table-bordered table-hover table-condensed">
				<tr>
					<td>Vendor-ID: </td>
					<td><input type="text" name="v_id" disabled value="<?php echo $v_id; ?>"></td>
				</tr>
				<tr>
					<td>User-Name: </td>
					<td><input type="text" name="v_unm" value="<?php echo $v_unm; ?>"</td>
				</tr>
                <tr>
					<td>Vendor-Name: </td>
					<td><input type="text" name="v_name" value="<?php echo $v_name; ?>"</td>
				</tr>
			</table>
			</td>			
			<td>
			<table style="width:0%" align="right" class="table table-bordered table-hover table-condensed">
				<tr>
					<td>Shop-Name: </td>						
					<td><input type="text" name="v_shop" required value="<?php echo $v_shop; ?>"></td>
				</tr>
				<tr>
					<td>Password: </td>						
					<td><input type="text" name="v_pwd" required value="<?php echo $v_pwd; ?>"></td>
				</tr>
                <tr>
					<td>E-Mail: </td>						
					<td><input type="text" name="v_email" required value="<?php echo $v_email; ?>"></td>
				</tr>
			</table>
			</td>
			</tr>
			</table>
			<div class="row"></div>
			<div class="row">
				<div class="col-sm-5"></div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-info">
						<span class="glyphicon glyphicon-plus-sign"></span> Update
					</button>	
				</div>
				<div class="col-sm-6"></div>
			</div>
        </form>
            
            
            
        </div>
            
    </body> 
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.backstretch.min.js"></script>
    <script src="../assets/js/scripts.js"></script>

    <style>
        html 
        {
            background: url('../assets/img/backgrounds/1.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover; 
            -o-background-size: cover;
            
        }
        body
        {       
            background: url('../assets/img/backgrounds/1.png') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;            
            -o-background-size: cover;
        }
            
        h1, h2, h3, h4, h5, h6
        {
            text-align:center;
	       margin: 0 0 15px 0;
	       color: #3A4F52;
	       font-family: 'Alegreya Sans';
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
</html>