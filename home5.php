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
$tenth = "";
$inter = "";
$btech = "";

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
    $posts[1] = $_POST['tenth'];
    $posts[2] = $_POST['inter'];
    $posts[3] = $_POST['btech'];
    return $posts;
}

// Search

// Insert

// Delete


// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
   $update_Query = "UPDATE `gb_dotp_mdb` SET `_Marks_10th`='$data[1]',`_Marks_12th`='$data[2]',`Aggregate_Graduation`='$data[3]' WHERE `Roll_No` = '$data[0]'";
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



<a class="float-right" href="gb_dotp_individual_admin.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Go Back</a>
  <div class = "fontT"> 
    <p align = "center" style="color: white"><b> Placement Report</b> </p>
	  
   </div>

<br></br> 
 <form action="home5.php" method="post">
      <div class="row">

<div class="col-md-10" style="padding-left:200px;">
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:black" value="<?php 
                      echo $row['Roll_No']; ?>" readonly="true">

          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: white">Tenth Percentage</label>

     <input type="text" id="MainContent_lblstudentfullname" name="tenth" placeholder="Tenth Percentage" class="form-control" style="color:black" value="<?php 
                      echo $row['_Marks_10th']; ?>">

          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: white">Inter Percentage</label>

       <input type="text" id="MainContent_lblemail" name="inter" placeholder="Inter Percentage" class="form-control" style="color:black" value="<?php 
                      echo $row['_Marks_12th']; ?>">
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
			
               </div>

               <div class="form-group col-md-4">
            <label for="" style="color: white">B.tech CGPA</label>
        <!--   <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"> -->

 <input type="text" id="MainContent_lblstudentfullname" name="btech" placeholder="B.Tech CGPA" class="form-control" style="color: black"value="<?php 
                      echo $row['Aggregate_Graduation']; ?>" >
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
		  