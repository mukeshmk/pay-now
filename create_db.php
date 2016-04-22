<?php
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$createdb="CREATE DATABASE paynow;";
	$crate1=mysqli_query($connect,$createdb);
	$c="USE paynow;";
	$c1=mysqli_query($connect,$c);
	$qry1="
	CREATE TABLE admins
	(
  		admin_id INT PRIMARY KEY,
  		a_nm VARCHAR(30)NOT NULL,
  		a_pwd VARCHAR(20)NOT NULL,
  		email_id VARCHAR(20)NOT NULL,
		su boolean NOT NULL
	)";
	$result1=mysqli_query($connect,$qry1);
	
    $qry2a="
	CREATE TABLE vendor
	(
  		v_id INT AUTO_INCREMENT,
  		v_unm VARCHAR(20) NOT NULL,
  		v_pwd VARCHAR(20) DEFAULT 'default',
  		v_name VARCHAR(30) NOT NULL,
        v_shop VARCHAR(30) NOT NULL,
        v_email VARCHAR(30) NOT NULL,
  		v_account INT DEFAULT 0 CHECK(v_account >= 0),
        v_active INT DEFAULT 1 CHECK(v_active IN (0,1)),
  		CONSTRAINT pk2a  PRIMARY KEY(v_id),
        CONSTRAINT chk_v CHECK (v_account > 0)

	)";
	$result2a=mysqli_query($connect,$qry2a);
	
    $qry2b="
	CREATE TABLE item_list
	(
  		item_no INT NOT NULL,
  		item_nm VARCHAR(20) NOT NULL,
  		item_price INT DEFAULT 10,
        v_id INT NOT NULL,
  		CONSTRAINT fk2b FOREIGN KEY (v_id) REFERENCES vendor(v_id),
        CONSTRAINT pk2b  PRIMARY KEY(item_no,v_id) 
	)";
	$result2b=mysqli_query($connect,$qry2b);

    $qry3a="
	CREATE TABLE customer
	(
  		c_id INT AUTO_INCREMENT,
  		c_email VARCHAR(30) NOT NULL,
        c_unm VARCHAR(20) NOT NULL,
        c_pwd VARCHAR(30) NOT NULL,
  		c_account INT DEFAULT 0 CHECK(c_account >= 0),
        c_active INT DEFAULT 1 CHECK(c_active IN(0,1)),
  		CONSTRAINT pk3a PRIMARY KEY(c_id),
        CONSTRAINT chk_c CHECK (c_account > 0)
	)";
	$result3a=mysqli_query($connect,$qry3a);

    $qry2c="
	CREATE TABLE vendor_logs
	(
  		vl_id INT AUTO_INCREMENT,
        v_id INT NOT NULL,
        c_id INT NOT NULL,
  		c_price INT NOT NULL,
        CONSTRAINT fk2c1 FOREIGN KEY (v_id) REFERENCES vendor(v_id),
        CONSTRAINT fk2c2 FOREIGN KEY (c_id) REFERENCES customer(c_id),
        CONSTRAINT pk2c  PRIMARY KEY(vl_id)
	)";
	$result2c=mysqli_query($connect,$qry2c);

    $qry2d="
	CREATE TABLE temp_cart
	(
  		item_no INT NOT NULL,
  		item_nm VARCHAR(20) NOT NULL,
  		item_price INT DEFAULT 10
	)";
	$result2d=mysqli_query($connect,$qry2d);


    $qry3b="
	CREATE TABLE cust_logs
	(
  		cl_id INT AUTO_INCREMENT,
        v_id INT NOT NULL,
        c_id INT NOT NULL,
  		c_price INT NOT NULL,
        CONSTRAINT fk3c1 FOREIGN KEY (v_id) REFERENCES vendor(v_id),
        CONSTRAINT fk3c2 FOREIGN KEY (c_id) REFERENCES customer(c_id),
        CONSTRAINT pk3c  PRIMARY KEY(cl_id)
	)";
	$result3b=mysqli_query($connect,$qry3b);
	
    $q1="INSERT INTO admins VALUES(0,'root','root','root@admin.com',TRUE)";
	$r=mysqli_query($connect,$q1);
	mysqli_close($connect);
?>