<?php
	require_once('../login/auth.php');
?>
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
    $_POST['cid']=$_SESSION['cid'];
    $result = mysqli_query($connect, "TRUNCATE temp_cart");
    if (!$result)  
    {  
    	echo "Error fetching data 1: " . mysqli_error($connect);  
    }
	mysqli_close($connect);
?>
<html>
	<meta http-equiv="refresh" content="0; URL=vendor_home.php">
	<meta name="keywords" content="automatic redirection">
</html>