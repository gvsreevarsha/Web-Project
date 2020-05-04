<?php

session_start();
$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');



if(isset($_POST['formSubmit']) )
{
	$name=$_POST['user'];
  $year = $_POST['year'];
  $student = $_POST['student'];
 }

 $year1 = '2020';
 $student1= 'Student Roll No';
 
if(strcmp($year, $year1) && strcmp($student, $student1))
 {
    header('location:gb_dotp_Individual_admin_head.php');
}
else
{
	$_SESSION['username'] = $name;
	header('location:index-2c.php');
	
}

?>