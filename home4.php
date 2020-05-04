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
$sph = "";
$semail = "";
$pemail = "";
$pph="";
$land="";
$dist="";
$city="";
$state="";
$coun="";
$pin="";

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
    $posts[1] = $_POST['sph'];
    $posts[2] = $_POST['semail'];
    $posts[3] = $_POST['pemail'];
    $posts[4] = $_POST['pph'];
    $posts[5] = $_POST['land'];
    $posts[6] = $_POST['dist'];
    $posts[7] = $_POST['city'];
    $posts[8] = $_POST['state'];
    $posts[9] = $_POST['coun'];
    $posts[10] = $_POST['pin'];
    return $posts;
}

// Search

// Insert

// Delete


// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
   $update_Query = "UPDATE `gb_dotp_mdb` SET `Mobile_Number`='$data[1]',`Email_ID`='$data[2]',`Parent_Mail_ID`='$data[3]',  `Parent_Mobile_Number`='$data[4]',
    `LandMark`='$data[5]',`District`='$data[6]',
    `City`='$data[7]',`State`='$data[8]',
    `Country`='$data[9]',`Pincode`='$data[10]' WHERE `Roll_No` = '$data[0]'";
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
 <form action="home4.php" method="post">
      <div class="row">

<div class="col-md-10" style="padding-left:200px;">
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:black" value="<?php 
                      echo $row['Roll_No']; ?>" readonly="true">

          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">Student Phone Number</label>

     <input type="text" id="MainContent_lblstudentfullname" name="sph" placeholder="Student Phone Number" class="form-control" style="color:black" value="<?php 
                      echo $row['Mobile_Number']; ?>">

          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: white">Student Email ID</label>

       <input type="text" id="MainContent_lblemail" name="semail" placeholder="Student Email ID" class="form-control" style="color:black" value="<?php 
                      echo $row['Email_ID']; ?>">
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
			
               </div>

               <div class="form-group col-md-4">
            <label for="" style="color: white">Parent Mail ID</label>
        <!--   <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"> -->

 <input type="text" id="MainContent_lblstudentfullname" name="pemail" placeholder="Parent Mail ID" class="form-control" style="color: black"value="<?php 
                      echo $row['Parent_Mail_ID']; ?>" >
          </div>
        
          <div class="form-group col-md-4">
            <label for="" style="color: white">Parent Mobile Number</label>

  <input type="text" name="pph" placeholder="Parent Mobile Number" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['Parent_Mobile_Number']; ?>">
          </div>

		   <div class="form-group col-md-4">
            <label for="" style="color: white">Land Mark</label>

          <input type="text" name="land" placeholder="Land Mark" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['LandMark']; ?>">    

          </div>
		  <div class="form-group col-md-4">
            <label for="" style="color: white">District</label>

              <input type="text" name="dist" placeholder="District" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['District']; ?>">
          </div>
         
		  <div class="form-group col-md-4">
            <label for="" style="color: white">City</label>

       <input type="text" name="city" placeholder="City" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['City']; ?>">      
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: white">State</label>
 <input type="text" name="state" placeholder="State" id="MainContent_lblemail" class="form-control" style="color:black" value="<?php 
                      echo $row['State']; ?>">

          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: white">Country</label>

    <input type="text" name="coun" placeholder="Country" id="MainContent_lblfathername" class="form-control" style="color:black" value="<?php 
                      echo $row['Country']; ?>">
            
          </div>

               <div class="form-group col-md-4">
            <label for="" style="color: white">PinCode</label>

             <input type="text" name="pin" placeholder="PinCode" id="MainContent_lblmothername" class="form-control" style="color:black" value="<?php 
                      echo $row['Pincode']; ?>">
            
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
		  