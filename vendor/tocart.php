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
    $result = mysqli_query($connect, "SELECT item_no, item_nm, item_price, v_id FROM item_list where v_id = '" .$_SESSION['SESS_MEMBER_ID']."' and item_no = '".$_GET['id']."'");
    if (!$result)  
    {  
    	echo "Error fetching data 1: " . mysqli_error($connect);  
    }
	if(mysqli_num_rows($result) > 0) 
    {
		$row = mysqli_fetch_array($result);
        {
    		$item_no = $row['item_no'];
    		$item_nm = $row['item_nm'];  
    		$item_price = $row['item_price'];
    		$v_id = $row['v_id'];
    	}
    }
    $q1="INSERT INTO temp_cart VALUES(".$item_no.",'".$item_nm."',".$item_price.")";
	$r=mysqli_query($connect,$q1);
    if (!$r)  
    {  
    	echo "Error fetching data 2: " . mysqli_error($connect);  
    }
	mysqli_close($connect);
?>
<html>
	<meta http-equiv="refresh" content="0; URL=vendor_itemlist.php?cid=<?php echo $_SESSION['cid'];?>">
	<meta name="keywords" content="automatic redirection">
</html>