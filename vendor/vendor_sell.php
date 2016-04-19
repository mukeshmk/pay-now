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
    $bal = 0;
    
    $result = mysqli_query($connect, "SELECT c_account FROM customer where c_id = '" .$_SESSION['cid']."'");
    if (!$result)  
    {  
    	echo "Error fetching data 1: " . mysqli_error($connect);  
    }
	if(mysqli_num_rows($result) > 0) 
    {
		$row = mysqli_fetch_array($result);
        {
    		$bal = $row['c_account'];
    	}
    }
    if($_SESSION['total']>$bal && $bal > 0)
    {
        echo '
        <script>
            alert("Insufficient Funds !!");
        </script>';
    }
    else
    {
        $bal = $bal - $_SESSION['total'];
    
        $q1="UPDATE customer SET c_account = ".$bal." WHERE c_id = ".$_SESSION['cid'];
	   $r=mysqli_query($connect,$q1);
        if (!$r)  
        {  
            echo "Error fetching data 2: " . mysqli_error($connect);  
        }
	   $result = mysqli_query($connect, "SELECT v_account FROM vendor where v_id = '" .$_SESSION['SESS_MEMBER_ID']."'");
        
        if (!$result)  
        {  
            echo "Error fetching data 3: " . mysqli_error($connect);  
        }
	   if(mysqli_num_rows($result) > 0) 
        {
           $row = mysqli_fetch_array($result);
            {
                $bal = $row['v_account'];
            }
        }
        $bal = $bal + $_SESSION['total'];

        $q1="UPDATE vendor SET v_account = ".$bal." WHERE v_id = ".$_SESSION['SESS_MEMBER_ID'];
        $r=mysqli_query($connect,$q1);
        if (!$r)  
        {  
            echo "Error fetching data 4: " . mysqli_error($connect);  
        }

        $q1="INSERT INTO cust_logs (v_id,c_id,c_price) VALUES (".$_SESSION['SESS_MEMBER_ID'].",'".$_SESSION['cid']."',".$_SESSION['total'].")";
        $r=mysqli_query($connect,$q1);
        if (!$r)  
        {  
            echo "Error fetching data 5: " . mysqli_error($connect);  
        }

        $q1="INSERT INTO vendor_logs (v_id,c_id,c_price) VALUES (".$_SESSION['SESS_MEMBER_ID'].",'".$_SESSION['cid']."',".$_SESSION['total'].")";
        $r=mysqli_query($connect,$q1);
        if (!$r)  
        {  
            echo "Error fetching data 6: " . mysqli_error($connect);  
        }
    }
    mysqli_close($connect);
?>
<html>
	<meta http-equiv="refresh" content="0; URL=vendor_cancel.php">
	<meta name="keywords" content="automatic redirection">
</html>