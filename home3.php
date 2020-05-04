<?php
session_start();

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');

$name = $_SESSION['rollno'];

$sql="select * from gb_dotp_mdb where Roll_No='$name'";
                      $result=mysqli_query($con,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      $row=mysqli_fetch_assoc($result);
$_SESSION['rollno'] = $row['Roll_No'];


$host = "localhost";
$user = "root";
$password ="";
$database = "gb_dotp";

$id = "";
$fname = "";
$mname = "";
$lname = "";
$dob="";
$gender="";
$Blood_Group="";
$Nationality="";
$Govt_ID="";
$Father_Name="";
$Mother_Name="";
$RC = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to mysql database
try{
    $connect = mysqli_connect($host, $user, $password, $database);
} catch (mysqli_sql_exception $ex) {
    echo 'Error';
}


// get values from the form
function getPosts()
{
   $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['fname'];
    $posts[2] = $_POST['mname'];
    $posts[3] = $_POST['lname'];
    $posts[4] = $_POST['dob'];
    $posts[5] = $_POST['gender'];
    $posts[6] = $_POST['Blood_Group'];
    $posts[7] = $_POST['Nationality'];
    $posts[8] = $_POST['Govt_ID'];
    $posts[9] = $_POST['Father_Name'];
    $posts[10] = $_POST['Mother_Name'];
    $posts[11] = $_POST['RC'];
    return $posts;
}

// Search

// Insert

// Delete


// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
   $update_Query = "UPDATE `gb_dotp_mdb` SET `F_Name`='$data[1]',`M_Name`='$data[2]',`L_Name`='$data[3]',  `Date_of_Birth`='$data[4]',
    `Gender`='$data[5]',`Blood_Group`='$data[6]',
    `Nationality`='$data[7]',`Govt_ID`='$data[8]',
    `Father_Name`='$data[9]',`Mother_Name`='$data[10]',`Reservation_Category`='$data[11]' WHERE `Roll_No` = '$data[0]'";
    try{
        $update_Result = mysqli_query($connect, $update_Query);
        
        if($update_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo 'Data Updated';
                header('location:gb_dotp_individual_admin.php');
            }else{
                echo 'Data Not Updated';
            }
        }
    } catch (Exception $ex) {
        echo 'Error Update '.$ex->getMessage();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement report</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 One Column Grid Layout for All Devices</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style1.css"> 
</head>
<body style="background-image:url(images/iprbg.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: 100% 100%;">



<a class="float-right" href="ipr_new.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Go Back</a>
  <div class = "fontT"> 
    <p align = "center" style="color: white"><b> Placement Report</b> </p>
	  
   </div>

<br></br> 
 <form action="home3.php" method="post">
      <div class="row">

<div class="col-md-10" style="padding-left:200px;">
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:black" value="<?php 
                      echo $row['Roll_No']; ?>" readonly="true">

          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">First Name</label>

     <input type="text" id="MainContent_lblstudentfullname" name="fname" placeholder="First Name" class="form-control" style="color:black" value="<?php 
                      echo $row['F_Name']; ?>">

          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: white">Middle Name</label>

       <input type="text" id="MainContent_lblemail" name="mname" placeholder="Middle Name" class="form-control" style="color:black" value="<?php 
                      echo $row['M_Name']; ?>">
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
			
               </div>

               <div class="form-group col-md-4">
            <label for="" style="color: white">Last Name</label>
        <!--   <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"> -->

 <input type="text" id="MainContent_lblstudentfullname" name="lname" placeholder="Last Name" class="form-control" style="color: black"value="<?php 
                      echo $row['L_Name']; ?>" >
          </div>
        
          <div class="form-group col-md-4">
            <label for="" style="color: white">Date of Birth</label>

  <input type="text" name="dob" placeholder="Date of Birth" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Date_of_Birth']; ?>">
          </div>

		   <div class="form-group col-md-4">
            <label for="" style="color: white">Gender</label>

          <input type="text" name="gender" placeholder="Gender" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Gender']; ?>">    

          </div>
		  <div class="form-group col-md-4">
            <label for="" style="color: white">Blood Group</label>

              <input type="text" name="Blood_Group" placeholder="Blood Group" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Blood_Group']; ?>">
          </div>
         
		  <div class="form-group col-md-4">
            <label for="" style="color: white">Nationality</label>

       <input type="text" name="Nationality" placeholder="Nationality" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Nationality']; ?>">      
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: white">Government ID</label>
 <input type="text" name="Govt_ID" placeholder="Government ID" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Govt_ID']; ?>">

          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: white">Father Name</label>

    <input type="text" name="Father_Name" placeholder="Father Name" id="MainContent_lblfathername" class="form-control" style="color:black" value="<?php 
                      echo $row['Father_Name']; ?>">
            
          </div>

               <div class="form-group col-md-4">
            <label for="" style="color: white">Mother Name</label>

             <input type="text" name="Mother_Name" placeholder="Mother Name" id="MainContent_lblmothername" class="form-control" style="color:black" value="<?php 
                      echo $row['Mother_Name']; ?>">
            
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: white">Reservation Category</label>

             <input type="text" name="RC" placeholder="Reservation Category" id="MainContent_lblmothername" class="form-control" style="color:black" value="<?php 
                      echo $row['Reservation_Category']; ?>">
            
          </div>

  <!--  <div class="container">
<div class="login-box">
  <div class="row"> -->
 <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br/>
            <br/>
   <input type="submit" name="update" class="btn btn-primary" value="Update">
            </a></span>
          </div>
        </div>
		  </div>	  
    </form>
		  </body>
		  </html>
		  