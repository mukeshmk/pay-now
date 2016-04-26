<?php
	require_once('../login/auth.php');
?>
<?php
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);

	$d="SELECT v_id, c_price FROM cust_logs where c_id = ".$_SESSION['SESS_MEMBER_ID'].";";
	$d1=mysqli_query($connect,$d);

	$_SESSION['qur']=$d;

	echo"<html>
		<head>
			<meta charset='utf-8'>
   			<meta name='viewport' content='width=device-width, initial-scale=1'>
  			<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
			<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  			<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
			<style>
			table, th, td
			{
                text: solid black
     			border: 1px solid black;
				white-space:nowrap
			}
			</style>
		</head>
		<body>";

	echo "
		<div class='jumbotron'>
        <table align = 'center' width='0%' class='table table-condensed table-hover table-bordered'>
            <thead>
                <tr>
                    <th align='center'>Sr No</th>
                    <th align='center'>Vendor ID</th>
                    <th align='center'>Cost</th>
                </tr>
            </thead>
            <tbody>
						</div>";

    $sno = 1;
    // output data of each row
    while($row=mysqli_fetch_array($d1))
	{
       	echo "
		<tr>
        <td align='center'>".$sno."</td>
       	<td align='center'>".$row["v_id"]."</td>
		<td align='center'>".$row["c_price"]."</td>
		</tr>";
        $sno = $sno + 1;
	}
    echo "
        </tbody>
		</table>";

        echo("
            <div align='center'>
            <form action='cust_home.php' method='get'>
			    <button type='submit' class='btn btn-success' align='center'>
                    <span class='glyphicon glyphicon-ok-sunglasses'></span> Okay
                </button>
			</form>
            </div>");
        echo"</body>
		</html>";
?>
