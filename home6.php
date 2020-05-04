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

$sql7="select * from crt_attendance where Roll_No='$name'";
                      $result7=mysqli_query($con,$sql7);
                      $resultCheck7=mysqli_num_rows($result7);
                      $row7=mysqli_fetch_assoc($result7);
$_SESSION['rollno'] = $row7['Roll_No'];

$sql6="select * from cocubes where Roll_No='$name'";
                      $result6=mysqli_query($con,$sql6);
                      $resultCheck6=mysqli_num_rows($result6);
                      $row6=mysqli_fetch_assoc($result6);
$_SESSION['rollno'] = $row6['Roll_No'];

$sql8="select * from internal_exam_result where Roll_No='$name'";
                      $result8=mysqli_query($con,$sql8);
                      $resultCheck8=mysqli_num_rows($result8);
                      $row8=mysqli_fetch_assoc($result8);
$_SESSION['rollno'] = $row8['Roll_No'];


$host = "localhost";
$user = "root";
$password ="";
$database = "gb_dotp";

$id = "";
$TT1_Total = "";
$TT2_Total = "";
$TT3_Total = "";
$TT4_Total = "";
$TT5_Total = "";
$CRT1_Total = "";
$CRT2_Total = "";
$CRT3_Total = "";
$CRT_GT1 = "";
$CRT_GT2 = "";
$PA1_Score800_PG = "";
$TT1_percentile = "";
$TT2_percentile = "";
$TT3_percentile = "";
$TT4_percentile = "";
$TT5_percentile = "";
$CRT_AT1 = "";
$CRT_AT2 = "";
$CRT_AT3 = "";
$CRT_AT4 = "";
$CRT_AT5 = "";
$CRT_AT6 = "";
$GT1_rank = "";
$GT2_rank = "";
$TT1_rank = "";
$TT2_rank = "";
$TT3_rank = "";
$TT4_rank = "";
$TT5_rank = "";
$AT1_rank = "";
$AT2_rank = "";
$AT3_rank = "";
$AT4_rank = "";
$AT5_rank = "";
$AT6_rank = "";



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
    $posts[1] = $_POST['TT1_Total'];
    $posts[2] = $_POST['TT2_Total'];
    $posts[3] = $_POST['TT3_Total'];
    $posts[4] = $_POST['TT4_Total'];
    $posts[5] = $_POST['TT5_Total'];
    $posts[6] = $_POST['CRT1_Total'];
    $posts[7] = $_POST['CRT2_Total'];
    $posts[8] = $_POST['CRT3_Total'];
    $posts[9] = $_POST['CRT_GT1'];
    $posts[10] = $_POST['CRT_GT2'];
    $posts[11] = $_POST['PA1_Score800_PG'];
    $posts[12] = $_POST['TT1_percentile'];
    $posts[13] = $_POST['TT2_percentile'];
    $posts[14] = $_POST['TT3_percentile'];
    $posts[15] = $_POST['TT4_percentile'];
    $posts[16] = $_POST['TT5_percentile'];
    $posts[17] = $_POST['CRT_AT1'];
    $posts[18] = $_POST['CRT_AT2'];
    $posts[19] = $_POST['CRT_AT3'];
    $posts[20] = $_POST['CRT_AT4'];
    $posts[21] = $_POST['CRT_AT5'];
    $posts[22] = $_POST['CRT_AT6'];
    $posts[23] = $_POST['GT1_rank'];
    $posts[24] = $_POST['GT2_rank'];
    $posts[25] = $_POST['TT1_rank'];
    $posts[26] = $_POST['TT2_rank'];
    $posts[27] = $_POST['TT3_rank'];
    $posts[28] = $_POST['TT4_rank'];
    $posts[29] = $_POST['TT5_rank'];
    $posts[30] = $_POST['AT1_rank'];
    $posts[31] = $_POST['AT2_rank'];
    $posts[32] = $_POST['AT3_rank'];
    $posts[33] = $_POST['AT4_rank'];
    $posts[34] = $_POST['AT5_rank'];
    $posts[35] = $_POST['AT6_rank'];
    return $posts;
}

// Search

// Insert

// Delete


// Edit
if(isset($_POST['update']))
{
    $data = getPosts();
   $update_Query = "UPDATE `crt_attendance`, `internal_exam_result`, `cocubes`
   SET `crt_attendance`.`TT1_Total`='$data[1]', `crt_attendance`.`TT2_Total`='$data[2]', `crt_attendance`.`TT3_Total`='$data[3]', `crt_attendance`.`TT4_Total`='$data[4]', `crt_attendance`.`TT5_Total`='$data[5]', `crt_attendance`.`CRT1_Total`='$data[6]', `crt_attendance`.`CRT2_Total`='$data[7]', `crt_attendance`.`CRT3_Total`='$data[8]', 
      `internal_exam_result`.`CRT_GT1`='$data[9]', `internal_exam_result`.`CRT_GT2`='$data[10]',
       `cocubes`.`PA1_Score800_PG`='$data[11]', `internal_exam_result`.`TT1_percentile`='$data[12]', 
      `internal_exam_result`.`TT2_percentile`='$data[13]', `internal_exam_result`.`TT3_percentile`='$data[14]', `internal_exam_result`.`TT4_percentile`='$data[15]', `internal_exam_result`.`TT5_percentile`='$data[16]', `internal_exam_result`.`CRT_AT1`='$data[17]', `internal_exam_result`.`CRT_AT2`='$data[18]', `internal_exam_result`.`CRT_AT3`='$data[19]', `internal_exam_result`.`CRT_AT4`='$data[20]', 
      `internal_exam_result`.`CRT_AT5`='$data[21]', `internal_exam_result`.`CRT_AT6`='$data[22]', `internal_exam_result`.`GT1_rank`='$data[23]', `internal_exam_result`.`GT2_rank`='$data[24]', 
       `internal_exam_result`.`TT1_rank`='$data[25]', `internal_exam_result`.`TT2_rank`='$data[26]', `internal_exam_result`.`TT3_rank`='$data[27]', 
      `internal_exam_result`.`TT4_rank`='$data[28]', `internal_exam_result`.`TT5_rank`='$data[29]', `internal_exam_result`.`AT1_rank`='$data[30]', `internal_exam_result`.`AT2_rank`='$data[31]', 
      `internal_exam_result`.`AT3_rank`='$data[32]', `internal_exam_result`.`AT4_rank`='$data[33]', `internal_exam_result`.`AT5_rank`='$data[34]', `internal_exam_result`.`AT6_rank`='$data[35]'         
   WHERE  `crt_attendance`.`Roll_No` = '$data[0]'";
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

</head>
<body>



<a class="float-right" href="ipr_new.php">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Go Back</a>
  <div class = "fontT"> 
   <h2> <p align = "center"><b> Placement Report</b> </p> </h2>
	  
   </div>


<div class="container">
 <form action="home6.php" method="post">
<div class="row">

<div class="col-md-10">
          
          <div class="form-group col-md-4">
            <label for="">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:black" value="<?php 
                      echo $row['Roll_No']; ?>" readonly="true">

          </div>
        </div>
      </div>

<h3 style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training Attendance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assessment Test Reports</h3>

<table align = "center" id="customers" class="inlineTable" border="1px">

<col width="400">
    <col width="300">
    <col width="100">
    <col width="600">
    <col width="200">
    <col width="200">

  
    
<tr>
<th>Module</th>
<th>Attendence %</th>
<th rowspan="15" style="color: transparent !important;"></th>
<th>Assessment</th>
<th>Score in %</th>
<th> College Rank</th>

</tr>
<tr>
<td>Technical Training 1</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT1_Total" placeholder="TT1_Total" class="form-control" style="color:black" value="<?php echo $row7['TT1_Total']; ?>"></td>
<td>COCUBES - DCT 1</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_GT1" placeholder="CRT_GT1" class="form-control" style="color:black" value="<?php echo $row8['CRT_GT1']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="GT1_rank" placeholder="GT1_rank" class="form-control" style="color:black" value="<?php echo $row8['GT1_rank']; ?>"></td>
</tr>
<tr>
<td>Technical Training 2</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT2_Total" placeholder="TT2_Total" class="form-control" style="color:black" value="<?php echo $row7['TT2_Total']; ?>"></td>
<td>COCUBES - DCT 2</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_GT2" placeholder="CRT_GT2" class="form-control" style="color:black" value="<?php echo $row8['CRT_GT2']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="GT2_rank" placeholder="GT2_rank" class="form-control" style="color:black" value="<?php echo $row8['GT2_rank']; ?>"></td>

</tr>
<tr>
<td>Technical Training 3</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT3_Total" placeholder="TT3_Total" class="form-control" style="color:black" value="<?php echo $row7['TT3_Total']; ?>"></td>
<td>COCUBES - Main</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="PA1_Score800_PG" placeholder="PA1_Score800_PG" class="form-control" style="color:black" value="<?php echo $row6['PA1_Score800_PG']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="PA1_Score800_PGP" placeholder="PA1_Score800_PGP" class="form-control" style="color:black" value="10"></td>
</tr>
<tr>
<td>Technical Training 4</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT4_Total" placeholder="TT4_Total" class="form-control" style="color:black" value="<?php echo $row7['TT4_Total']; ?>"></td>
<td>Technical-Assessment Test 1</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT1_percentile" placeholder="TT1_percentile" class="form-control" style="color:black" value="<?php echo $row8['TT1_percentile']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT1_rank" placeholder="TT1_rank" class="form-control" style="color:black" value="<?php echo $row8['TT1_rank']; ?>"></td>
</tr>
<tr>
<td>Technical Training 5</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT5_Total" placeholder="TT5_Total" class="form-control" style="color:black" value="<?php echo $row7['TT5_Total']; ?>"></td>
<td>Technical-Assessment Test 2</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT2_percentile" placeholder="TT2_percentile" class="form-control" style="color:black" value="<?php echo $row8['TT2_percentile']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT2_rank" placeholder="TT2_rank" class="form-control" style="color:black" value="<?php echo $row8['TT2_rank']; ?>"></td>
</tr>
<tr>
<td>CRT 1</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT1_Total" placeholder="CRT1_Total" class="form-control" style="color:black" value="<?php echo $row7['CRT1_Total']; ?>"></td>
<td>Technical-Assessment Test 3</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT3_percentile" placeholder="TT3_percentile" class="form-control" style="color:black" value="<?php echo $row8['TT3_percentile']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT3_rank" placeholder="TT3_rank" class="form-control" style="color:black" value="<?php echo $row8['TT3_rank']; ?>"></td>
</tr>
<tr>
<td>CRT 2</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT2_Total" placeholder="CRT2_Total" class="form-control" style="color:black" value="<?php echo $row7['CRT2_Total']; ?>"></td>
<td>Technical-Assessment Test 4</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT4_percentile" placeholder="TT4_percentile" class="form-control" style="color:black" value="<?php echo $row8['TT4_percentile']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT4_rank" placeholder="TT4_rank" class="form-control" style="color:black" value="<?php echo $row8['TT4_rank']; ?>"></td>
</tr>
<tr>
<td>CRT 3</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT3_Total" placeholder="CRT3_Total" class="form-control" style="color:black" value="<?php echo $row7['CRT3_Total']; ?>"></td>
<td>Technical-Assessment Test 5</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT5_percentile" placeholder="TT5_percentile" class="form-control" style="color:black" value="<?php echo $row8['TT5_percentile']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="TT5_rank" placeholder="TT5_rank" class="form-control" style="color:black" value="<?php echo $row8['TT5_rank']; ?>"></td>
</tr>
<tr>
<th align="center" colspan="2">Mock 1</th>
  <td>CRT1-Assessment Test 1</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT1" placeholder="CRT_AT1" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT1']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT1_rank" placeholder="AT1_rank" class="form-control" style="color:black" value="<?php echo $row8['AT1_rank']; ?>"></td>
</th>

</tr>
<tr>
<td><table><td>WT : </td><td>Selected&nbsp;</td></table></td>
<td><table><td>GD : </td><td>Selected&nbsp;</td></table></td>
<td>CRT1-Assessment Test 2</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT2" placeholder="CRT_AT2" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT2']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT2_rank" placeholder="AT2_rank" class="form-control" style="color:black" value="<?php echo $row8['AT2_rank']; ?>"></td>
</tr>
<tr>
<td><table><td>TR : </td><td>Selected&nbsp;</td></table></td>
<td><table><td>HR : </td><td>Selected&nbsp;</td></table></td>
<td>CRT1-Assessment Test 3</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT3" placeholder="CRT_AT3" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT3']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT3_rank" placeholder="AT3_rank" class="form-control" style="color:black" value="<?php echo $row8['AT3_rank']; ?>"></td>
</tr>
<tr>
<th align="center" colspan="2">Mock 2</th>
  <td>CRT2-Assessment Test 4</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT4" placeholder="CRT_AT4" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT4']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT4_rank" placeholder="AT4_rank" class="form-control" style="color:black" value="<?php echo $row8['AT4_rank']; ?>"></td>
</th>

</tr>
<tr>
<td><table><td>WT : </td><td>Selected&nbsp;</td></table></td>
<td><table><td>GD : </td><td>Selected&nbsp;</td></table></td>
<td>CRT2-Assessment Test 5</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT5" placeholder="CRT_AT5" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT5']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT5_rank" placeholder="AT5_rank" class="form-control" style="color:black" value="<?php echo $row8['AT5_rank']; ?>"></td>
</tr>
<tr>

<td><table><td>TR : </td><td>Selected&nbsp;</td></table></td>
<td><table><td>HR : </td><td>Rejected&nbsp;</td></table></td>
<td>CRT2-Assessment Test 6</td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="CRT_AT6" placeholder="CRT_AT6" class="form-control" style="color:black" value="<?php echo $row8['CRT_AT6']; ?>"></td>
<td><input type="text" id="MainContent_lblgetregistrationnumber" name="AT6_rank" placeholder="AT6_rank" class="form-control" style="color:black" value="<?php echo $row8['AT6_rank']; ?>"></td>
</tr>

</table>
<div class="form-group col-md-3">
  </div>
  <div class="form-group col-md-3">
  </div>
  <div class="form-group col-md-3">
  </div>

 <div class="form-group col-md-3">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br>
<input type="submit" name="update" class="btn btn-primary" value="Update">
          </div>
          <br>
          <br>
</form>
</div>
</body>
</html>		  