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
	
	$d="SELECT * FROM temp_cart;";
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
        <table align = 'left' width='0%' class='table table-condensed table-hover table-bordered'>
            <thead>
                <tr>
                    <th align='center'>Sr No</th>
                    <th align='center'>Item No</th>
                    <th align='center'>Item Name</th>
                    <th align='center'>Item Price</th>
                </tr>
            </thead>
            <tbody>";
    $sno = 1;
    $total = 0;
    // output data of each row
    while($row=mysqli_fetch_array($d1)) 
	{
       	echo "
		<tr>
        <td align='center'>".$sno."</td>
       	<td align='center'>".$row["item_no"]."</td>
		<td align='center'>".$row["item_nm"]."</td>
		<td align='center'>".$row["item_price"]."</td>
		</tr>";
        $sno = $sno + 1;
        $total = $total + $row["item_price"];
	}
    $_SESSION['total'] = $total;
    echo "
        <tr>
       	<td><strong>Total Price</strong></td>
		<td align='center'></td>
		<td align='center'></td>
		<td align='center'>".$total."</td>
		</tr>
        
        </tbody>
		</table>";

        echo("<form action='vendor_sell.php' method='get'>
			<button type='submit' class='btn btn-success' align='center'><span class='glyphicon glyphicon-ok-circle'></span> Sell</button>
			</form>");
        echo"</body>
		</html>";
?>