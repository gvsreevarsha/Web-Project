<?php

session_start();
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');

$name = $_SESSION['username'];

$s="select * from gb_dotp_cdt where Roll_No='$name' ";

$result = mysqli_query($con, $s);

$num=mysqli_num_rows($result);
   
    $_SESSION['username'] = $name;
	header('location:index.php');


?>