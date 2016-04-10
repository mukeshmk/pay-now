<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<script src="../bootstrap-3.3.5-dist/jquery.min.js"></script>
  		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css" />
	</head>
<?php
	$c_fnm=$_POST['fnm'];
	$c_lnm=$_POST['lnm'];
	$c_email=$_POST['email'];
	

	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);

	$q1="INSERT INTO customer(c_fnm,c_lnm,c_email) VALUES ('$c_fnm','$c_lnm','$c_email')";
	if(!mysqli_query($connect,$q1))
	{
		echo"<head>
			<title>User Details</title>
			<h1 align='center'>Login Un-Successful!! :(</h1>
			
			<style>
			table, th, td 
			{
     			border: 1px solid black;
			}
			</style>
		</head>
		<body>
		<div class='container'>";
		echo("<h1 align='center'>Error description: " . mysqli_error($connect)."<h1>");
		echo"<br><br>
			</div>
			</body>
			<form method='get' action='../index.php' align='center'>
    			<button type='submit' class='btn btn-success'>Login</button>
			</form>";
	}
	else
	{
	
	//$d="SELECT * FROM admins WHERE c_id = $mem_id;";
	//$d1=mysqli_query($connect,$d);

	echo"<head>
			<title>User Details</title>
			<h1 align='center'>Account Created Successfully !!</h1>
            <h3 align='center'>Contact the admin to get the account activated !!</h3>";
	}
	mysqli_close($connect);
?>
</html>
<body>

<div class="container">


<!-- Hover User Details - START -->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            
        </div>
        <div class="col-lg-4">
            <div class="form_hover " style="background-color: #428BCA;">
                <p style="text-align: center; margin-top: 20px;">
                    <i class="fa fa-user" style="font-size: 147px;"></i>
                </p>
                <div class="header">
                    <div class="blur"></div>
                    <div class="header-text">
                        <div class="panel panel-success" style="height: 247px;">
                            <div class="panel-heading">
                                <h3 style="color: #428BCA;">Your Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    First Name:<b><?php echo $c_fnm; ?></b>
                                </div>
                                <div class="form-group">
                                    Last Name:<b><?php echo $c_lnm; ?></b>
                                </div>
                                <div class="form-group">
                                    E-Mail<b> <?php echo $c_email; ?></b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            
        </div>
    </div>
    <div align='center'>
        <br>
        <form method='get' action='index.php' align='center'>
    	   <button type='submit' class='btn btn-success'>Login</button>
        </form>
    </div>
</div>
<style>
    .form_hover {
        padding: 0px;
        position: relative;
        overflow: hidden;
        height: 240px;
    }

        .form_hover:hover .header {
            opacity: 1;
            transform: translateY(-172px);
            -webkit-transform: translateY(-172px);
            -moz-transform: translateY(-172px);
            -ms-transform: translateY(-172px);
            -o-transform: translateY(-172px);
        }

        .form_hover img {
            z-index: 4;
        }

        .form_hover .header {
            position: absolute;
            top: 170px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form_hover .blur {
            height: 240px;
            z-index: 5;
            position: absolute;
            width: 100%;
        }

        .form_hover .caption-text {
            z-index: 10;
            color: #fff;
            position: absolute;
            height: 240px;
            text-align: center;
            top: -20px;
            width: 100%;
        }
</style>


<!-- Hover User Details - END -->

</div>

</body>
</html>