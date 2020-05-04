<?php

session_start();

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');

$name = $_SESSION['rollno'];

$sql6="select * from cocubes where Roll_No='$name'";
                      $result6=mysqli_query($con,$sql6);
                      $resultCheck6=mysqli_num_rows($result6);
                      $row1=mysqli_fetch_assoc($result6);
$_SESSION['rollno'] = $row1['Roll_No'];



$host = "localhost";
$user = "root";
$password ="";
$database = "gb_dotp";

$id = "";
$DCT1_ART_M = "";
$DCT1_ART_PG = "";
$DCT2_ART_M = "";
$DCT2_ART_PG = "";
$DCT1_ART_LR_M = "";
$DCT1_ART_LR = "";
$DCT2_ART_LR_M = "";
$DCT2_ART_LR = "";
$DCT1_ART_CR_M = "";
$DCT1_ART_CR = "";
$DCT2_ART_CR_M = "";
$DCT2_ART_CR = "";
$DCT1_ART_FVR_M = "";
$DCT1_ART_FVR = "";
$DCT2_ART_FVR_M = "";
$DCT2_ART_FVR = "";
$DCT1_ART_OOA_M = "";
$DCT1_ART_OOA = "";
$DCT2_ART_OOA_M = "";
$DCT2_ART_OOA = "";
$DCT1_ART_SCD_M = "";
$DCT1_ART_SCD = "";
$DCT2_ART_SCD_M = "";
$DCT2_ART_SCD = "";
$DCT1_EUT_M = "";
$DCT1_EUT_PG = "";
$DCT2_EUT_M = "";
$DCT2_EUT_PG = "";
$DCT1_EUT_APV_M = "";
$DCT1_EUT_APV = "";
$DCT2_EUT_APV_M = "";
$DCT2_EUT_APV = "";
$DCT1_EUT_PIS_M = "";
$DCT1_EUT_PIS = "";
$DCT2_EUT_PIS_M = "";
$DCT2_EUT_PIS = "";
$DCT1_EUT_RC_M = "";
$DCT1_EUT_RC = "";
$DCT2_EUT_RC_M = "";
$DCT2_EUT_RC = "";
$DCT1_EUT_SCS_M = "";
$DCT1_EUT_SCS = "";
$DCT2_EUT_SCS_M = "";
$DCT2_EUT_SCS = "";
$DCT1_EUT_SAA_M = "";
$DCT1_EUT_SAA = "";
$DCT2_EUT_SAA_M = "";
$DCT2_EUT_SAA = "";
$DCT1_QAT_M = "";
$DCT1_QAT_PG = "";
$DCT2_QAT_M = "";
$DCT2_QAT_PG = "";
$DCT1_QAT_SDTW_M = "";
$DCT1_QAT_SDTW = "";
$DCT2_QAT_SDTW_M = "";
$DCT2_QAT_SDTW = "";
$DCT1_QAT_PLI_M = "";
$DCT1_QAT_PLI = "";
$DCT2_QAT_PLI_M = "";
$DCT2_QAT_PLI = "";
$DCT1_QAT_RPP_M = "";
$DCT1_QAT_RPP = "";
$DCT2_QAT_RPP_M = "";
$DCT2_QAT_RPP = "";
$DCT1_QAT_NAE_M = "";
$DCT1_QAT_NAE = "";
$DCT2_QAT_NAE_M = "";
$DCT2_QAT_NAE = "";
$DCT1_QAT_GMT_M = "";
$DCT1_QAT_GMT = "";
$DCT2_QAT_GMT_M = "";
$DCT2_QAT_GMT = "";
$DCT1_QAT_ST_M = "";
$DCT1_QAT_STA = "";
$DCT2_QAT_ST_M = "";
$DCT2_QAT_ST = "";
$DCT1_QAT_DI_M = "";
$DCT1_QAT_DI = "";
$DCT2_QAT_DI_M = "";
$DCT2_QAT_DI = "";
$DCT1_EAT_M = "";
$DCT1_EAT_PG = "";
$DCT2_EAT_M = "";
$DCT2_EAT_PG = "";
$DCT1_EAT_EU_M = "";
$DCT1_EAT_EU = "";
$DCT2_EAT_EU_M = "";
$DCT2_EAT_EU = "";
$DCT1_EAT_NA_M = "";
$DCT1_EAT_NA = "";
$DCT2_EAT_NA_M = "";
$DCT2_EAT_NA = "";
$DCT1_EAT_AR_M = "";
$DCT1_EAT_AR = "";
$DCT2_EAT_AR_M = "";
$DCT2_EAT_AR = "";
$DCT1_DOM_M = "";
$DCT1_DOM_PG = "";
$DCT2_DOM_M = "";
$DCT2_DOM_PG = "";
$DCT1_CD_M = "";
$DCT1_CD_PG = "";
$DCT2_CD_M = "";
$DCT2_CD_PG = "";



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
    $posts[1] = $_POST['DCT1_ART_M'];
    $posts[2] = $_POST['DCT1_ART_PG'];
    $posts[3] = $_POST['DCT2_ART_M'];
    $posts[4] = $_POST['DCT2_ART_PG'];
    $posts[5] = $_POST['DCT1_ART_LR_M'];
    $posts[6] = $_POST['DCT1_ART_LR'];
    $posts[7] = $_POST['DCT2_ART_LR_M'];
    $posts[8] = $_POST['DCT2_ART_LR'];
    $posts[9] = $_POST['DCT1_ART_CR_M'];
    $posts[10] = $_POST['DCT1_ART_CR'];
    $posts[11] = $_POST['DCT2_ART_CR_M'];
    $posts[12] = $_POST['DCT2_ART_CR'];
    $posts[13] = $_POST['DCT1_ART_FVR_M'];
    $posts[14] = $_POST['DCT1_ART_FVR'];
    $posts[15] = $_POST['DCT2_ART_FVR_M'];
    $posts[16] = $_POST['DCT2_ART_FVR'];
    $posts[17] = $_POST['DCT1_ART_OOA_M'];
    $posts[18] = $_POST['DCT1_ART_OOA'];
    $posts[19] = $_POST['DCT2_ART_OOA_M'];
    $posts[20] = $_POST['DCT2_ART_OOA'];
    $posts[21] = $_POST['DCT1_ART_SCD_M'];
    $posts[22] = $_POST['DCT1_ART_SCD'];
    $posts[23] = $_POST['DCT2_ART_SCD_M'];
    $posts[24] = $_POST['DCT2_ART_SCD'];
    $posts[25] = $_POST['DCT1_EUT_M'];
    $posts[26] = $_POST['DCT1_EUT_PG'];
    $posts[27] = $_POST['DCT2_EUT_M'];
    $posts[28] = $_POST['DCT2_EUT_PG'];
    $posts[29] = $_POST['DCT1_EUT_APV_M'];
    $posts[30] = $_POST['DCT1_EUT_APV'];
    $posts[31] = $_POST['DCT2_EUT_APV_M'];
    $posts[32] = $_POST['DCT2_EUT_APV'];
    $posts[33] = $_POST['DCT1_EUT_PIS_M'];
    $posts[34] = $_POST['DCT1_EUT_PIS'];
    $posts[35] = $_POST['DCT2_EUT_PIS_M'];
    $posts[36] = $_POST['DCT2_EUT_PIS'];
    $posts[37] = $_POST['DCT1_EUT_RC_M'];
    $posts[38] = $_POST['DCT1_EUT_RC'];
    $posts[39] = $_POST['DCT2_EUT_RC_M'];
    $posts[40] = $_POST['DCT2_EUT_RC'];
    $posts[41] = $_POST['DCT1_EUT_SCS_M'];
    $posts[42] = $_POST['DCT1_EUT_SCS'];
    $posts[43] = $_POST['DCT2_EUT_SCS_M'];
    $posts[44] = $_POST['DCT2_EUT_SCS'];
    $posts[45] = $_POST['DCT1_EUT_SAA_M'];
    $posts[46] = $_POST['DCT1_EUT_SAA'];
    $posts[47] = $_POST['DCT2_EUT_SAA_M'];
    $posts[48] = $_POST['DCT2_EUT_SAA'];
    $posts[49] = $_POST['DCT1_QAT_M'];
    $posts[50] = $_POST['DCT1_QAT_PG'];
    $posts[51] = $_POST['DCT1_QAT_M'];
    $posts[52] = $_POST['DCT1_QAT_PG'];
    $posts[53] = $_POST['DCT1_QAT_SDTW_M'];
    $posts[54] = $_POST['DCT1_QAT_SDTW'];
    $posts[55] = $_POST['DCT2_QAT_SDTW_M'];
    $posts[56] = $_POST['DCT2_QAT_SDTW'];
    $posts[57] = $_POST['DCT1_QAT_PLI_M'];
    $posts[58] = $_POST['DCT1_QAT_PLI'];
    $posts[59] = $_POST['DCT2_QAT_PLI_M'];
    $posts[60] = $_POST['DCT2_QAT_PLI'];
    $posts[61] = $_POST['DCT1_QAT_RPP_M'];
    $posts[62] = $_POST['DCT1_QAT_RPP'];
    $posts[63] = $_POST['DCT2_QAT_RPP_M'];
    $posts[64] = $_POST['DCT2_QAT_RPP'];
    $posts[65] = $_POST['DCT1_QAT_NAE_M'];
    $posts[66] = $_POST['DCT1_QAT_NAE'];
    $posts[67] = $_POST['DCT2_QAT_NAE_M'];
    $posts[68] = $_POST['DCT2_QAT_NAE'];
    $posts[69] = $_POST['DCT1_QAT_GMT_M'];
    $posts[70] = $_POST['DCT1_QAT_GMT'];
    $posts[71] = $_POST['DCT2_QAT_GMT_M'];
    $posts[72] = $_POST['DCT2_QAT_GMT'];
    $posts[73] = $_POST['DCT1_QAT_ST_M'];
    $posts[74] = $_POST['DCT1_QAT_STA'];
    $posts[75] = $_POST['DCT2_QAT_ST_M'];
    $posts[76] = $_POST['DCT2_QAT_ST'];
    $posts[77] = $_POST['DCT1_QAT_DI_M'];
    $posts[78] = $_POST['DCT1_QAT_DI'];
    $posts[79] = $_POST['DCT2_QAT_DI_M'];
    $posts[80] = $_POST['DCT2_QAT_DI'];
    $posts[81] = $_POST['DCT1_EAT_M'];
    $posts[82] = $_POST['DCT1_EAT_PG'];
    $posts[83] = $_POST['DCT2_EAT_M'];
    $posts[84] = $_POST['DCT2_EAT_PG'];
    $posts[85] = $_POST['DCT1_EAT_EU_M'];
    $posts[86] = $_POST['DCT1_EAT_EU'];
    $posts[87] = $_POST['DCT2_EAT_EU_M'];
    $posts[88] = $_POST['DCT2_EAT_EU'];
    $posts[89] = $_POST['DCT1_EAT_NA_M'];
    $posts[90] = $_POST['DCT1_EAT_NA'];
    $posts[91] = $_POST['DCT2_EAT_NA_M'];
    $posts[92] = $_POST['DCT2_EAT_NA'];
    $posts[93] = $_POST['DCT1_EAT_AR_M'];
    $posts[94] = $_POST['DCT1_EAT_AR'];
    $posts[95] = $_POST['DCT2_EAT_AR_M'];
    $posts[96] = $_POST['DCT2_EAT_AR'];
    $posts[97] = $_POST['DCT1_DOM_M'];
    $posts[98] = $_POST['DCT1_DOM_PG'];
    $posts[99] = $_POST['DCT2_DOM_M'];
    $posts[100] = $_POST['DCT2_DOM_PG'];
    $posts[101] = $_POST['DCT1_CD_M'];
    $posts[102] = $_POST['DCT1_CD_PG'];
    $posts[103] = $_POST['DCT2_CD_M'];
    $posts[104] = $_POST['DCT2_CD_PG'];
    return $posts;
}

if(isset($_POST['update']))
{
    $data = getPosts();
   $update_Query = "UPDATE `cocubes` SET `DCT1_ART_M`='$data[1]',`DCT1_ART_PG`='$data[2]',`DCT2_ART_M`='$data[3]',
   `DCT2_ART_PG`='$data[4]',`DCT1_ART_LR_M`='$data[5]',`DCT1_ART_LR`='$data[6]',`DCT2_ART_LR_M`='$data[7]',`DCT2_ART_LR`='$data[8]',`DCT1_ART_CR_M`='$data[9]',`DCT1_ART_CR`='$data[10]',`DCT2_ART_CR_M`='$data[11]',`DCT2_ART_CR`='$data[12]',`DCT1_ART_FVR_M`='$data[13]',`DCT1_ART_FVR`='$data[14]',`DCT2_ART_FVR_M`='$data[15]',`DCT2_ART_FVR`='$data[16]',`DCT1_ART_OOA_M`='$data[17]',`DCT1_ART_OOA`='$data[18]',`DCT2_ART_OOA_M`='$data[19]',`DCT2_ART_OOA`='$data[20]',`DCT1_ART_SCD_M`='$data[21]',`DCT1_ART_SCD`='$data[22]',`DCT2_ART_SCD_M`='$data[23]',`DCT2_ART_SCD`='$data[24]',`DCT1_EUT_M`='$data[25]',`DCT1_EUT_PG`='$data[26]',`DCT2_EUT_M`='$data[27]',`DCT2_EUT_PG`='$data[28]',`DCT1_EUT_APV_M`='$data[29]',`DCT1_EUT_APV`='$data[30]',`DCT2_EUT_APV_M`='$data[31]',`DCT2_EUT_APV`='$data[32]',`DCT1_EUT_PIS_M`='$data[33]',`DCT1_EUT_PIS`='$data[34]',`DCT2_EUT_PIS_M`='$data[35]',`DCT2_EUT_PIS`='$data[36]',`DCT1_EUT_RC_M`='$data[37]',`DCT1_EUT_RC`='$data[38]',`DCT2_EUT_RC_M`='$data[39]',`DCT2_EUT_RC`='$data[40]',`DCT1_EUT_SCS_M`='$data[41]',`DCT1_EUT_SCS`='$data[42]',`DCT2_EUT_SCS_M`='$data[43]',`DCT2_EUT_SCS`='$data[44]',`DCT1_EUT_SAA_M`='$data[45]',`DCT1_EUT_SAA`='$data[46]',`DCT2_EUT_SAA_M`='$data[47]',`DCT2_EUT_SAA`='$data[48]',`DCT1_QAT_M`='$data[49]',`DCT1_QAT_PG`='$data[50]',`DCT2_QAT_M`='$data[51]',`DCT2_QAT_PG`='$data[52]',`DCT1_QAT_SDTW_M`='$data[53]',`DCT1_QAT_SDTW`='$data[54]',`DCT2_QAT_SDTW_M`='$data[55]',`DCT2_QAT_SDTW`='$data[56]',`DCT1_QAT_PLI_M`='$data[57]',`DCT1_QAT_PLI`='$data[58]',`DCT2_QAT_PLI_M`='$data[59]',`DCT2_QAT_PLI`='$data[60]',
   `DCT1_QAT_RPP_M`='$data[61]',`DCT1_QAT_RPP`='$data[62]',`DCT2_QAT_RPP_M`='$data[63]',`DCT2_QAT_RPP`='$data[64]',`DCT1_QAT_NAE_M`='$data[65]',`DCT1_QAT_NAE`='$data[66]',`DCT2_QAT_NAE_M`='$data[67]',`DCT2_QAT_NAE`='$data[68]',`DCT1_QAT_GMT_M`='$data[69]',`DCT1_QAT_GMT`='$data[70]',`DCT2_QAT_GMT_M`='$data[71]',`DCT2_QAT_GMT`='$data[72]',`DCT1_QAT_ST_M`='$data[73]',`DCT1_QAT_STA`='$data[74]',`DCT2_QAT_ST_M`='$data[75]',`DCT2_QAT_ST`='$data[76]',`DCT1_QAT_DI_M`='$data[77]',`DCT1_QAT_DI`='$data[78]',`DCT2_QAT_DI_M`='$data[79]',`DCT2_QAT_DI`='$data[80]',`DCT1_EAT_M`='$data[81]',`DCT1_EAT_PG`='$data[82]',`DCT2_EAT_M`='$data[83]',`DCT2_EAT_PG`='$data[84]',`DCT1_EAT_EU_M`='$data[85]',`DCT1_EAT_EU`='$data[86]',`DCT2_EAT_EU_M`='$data[87]',`DCT2_EAT_EU`='$data[88]',`DCT1_EAT_NA_M`='$data[89]',`DCT1_EAT_NA`='$data[90]',`DCT2_EAT_NA_M`='$data[91]',`DCT2_EAT_NA`='$data[92]',`DCT1_EAT_AR_M`='$data[93]',`DCT1_EAT_AR`='$data[94]',`DCT2_EAT_AR_M`='$data[95]',`DCT2_EAT_AR`='$data[96]',`DCT1_DOM_M`='$data[97]',`DCT1_DOM_PG`='$data[98]',`DCT2_DOM_M`='$data[99]',`DCT2_DOM_PG`='$data[100]',`DCT1_CD_M`='$data[101]',`DCT1_CD_PG`='$data[102]',`DCT2_CD_M`='$data[103]',`DCT2_CD_PG`='$data[104]' WHERE `Roll_No` = '$data[0]'";
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
 <form action="home7.php" method="post">
<div class="row">

<div class="col-md-10">
          
          <div class="form-group col-md-4">
            <label for="">Roll No</label>

     <input type="text" id="MainContent_lblgetregistrationnumber" name="id" placeholder="Roll No" class="form-control" style="color:black" value="<?php 
                      echo $row1['Roll_No']; ?>" readonly="true">

          </div>
        </div>
      </div>

<div class="container">
<h3 style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cocubes DCT Marks Analysis</h3>
<table align="center" id="customers" class="inlineTable" border="1px" >
  <col width="390">
  <col width="120">
    <col width="120">
    <col width="120">
      <col width="120">
      <col width="120">
        <col width="120">
  <tr align = "center">
     <th align = "center">Test Name</th>
     <th>Total Marks</th>
     <th>Marks Obtained (Before)</th>
     <th>% of Marks (Before)</th>
   <th>Marks Obtained (After)</th>
   <th>% of Marks (After)</th>
  </tr>
   <tr>
     <td><b>I.Analytical Reasoning Test(ART)</b></td>
     <th>50</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_M" placeholder="DCT1_ART_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_PG" placeholder="DCT1_ART_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_PG']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_M" placeholder="DCT2_ART_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_PG" placeholder="DCT2_ART_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_PG']; ?>"></td>
  </tr>
   <tr>
     <td>1.Logical Reasoning(LR) </td>
     <th>15</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_LR_M" placeholder="DCT1_ART_LR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_LR_M'] ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_LR" placeholder="DCT1_ART_LR" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_LR']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_LR_M" placeholder="DCT2_ART_LR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_LR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_LR" placeholder="DCT2_ART_LR" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_LR']; ?>"></td>
  </tr>
  
  
   <tr>
     <td>2.Critical Reasoning(CR) </td>
     <th>12</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_CR_M" placeholder="DCT1_ART_CR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_CR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_CR" placeholder="DCT1_ART_CR" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_CR']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_CR_M" placeholder="DCT2_ART_CR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_CR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_CR" placeholder="DCT2_ART_CR" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_CR']; ?>"></td>
  </tr>
   <tr>
     <td>3.Flow Chart & Visual Reasoning(FV)</td>
     <th>10</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_FVR_M" placeholder="DCT1_ART_FVR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_FVR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_FVR" placeholder="DCT1_ART_FVR" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_FVR']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_FVR_M" placeholder="DCT2_ART_FVR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_FVR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_FVR" placeholder="DCT2_ART_FVR" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_FVR']; ?>"></td>
  </tr>
   <tr>
     <td>4.Odd one out & Analogies(OA) </td>
     <th>6</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_OOA_M" placeholder="DCT1_ART_OOA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_OOA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_OOA" placeholder="DCT1_ART_OOA" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_OOA']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_OOA_M" placeholder="DCT2_ART_OOA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_OOA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_OOA" placeholder="DCT2_ART_OOA" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_OOA']; ?>"></td>
  </tr>
   <tr>
     <td>5.Series & Coding decoding (SC)</td>
     <th>7</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_SCD_M" placeholder="DCT1_ART_SCD_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_SCD_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_ART_SCD" placeholder="DCT1_ART_SCD" class="form-control" style="color:black" value="<?php echo $row1['DCT1_ART_SCD']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_SCD_M" placeholder="DCT2_ART_SCD_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_SCD_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_ART_SCD" placeholder="DCT2_ART_SCD" class="form-control" style="color:black" value="<?php echo $row1['DCT2_ART_SCD']; ?>"></td>
  </tr>
   <tr>
     <td><b>II.English Usage Test(EUT)</b></td>
     <th>50</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_M" placeholder="DCT1_EUT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_PG" placeholder="DCT1_EUT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_PG']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_M" placeholder="DCT2_EUT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_PG" placeholder="DCT2_EUT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_PG']; ?>"></td>
  </tr>
   <tr>
     <td>1.Articles Prepositions and Voice(APV)</td>
     <th>9</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_APV_M" placeholder="DCT1_EUT_APV_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_APV_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_APV" placeholder="DCT1_EUT_APV" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_APV']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_APV_M" placeholder="DCT2_EUT_APV_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_APV_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_APV" placeholder="DCT2_EUT_APV" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_APV']; ?>"></td>
  </tr>
   <tr>
     <td>2.Phrases Idioms and Sequencing(PIS)</td>
     <th>6</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_PIS_M" placeholder="DCT1_EUT_PIS_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_PIS_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_PIS" placeholder="DCT1_EUT_PIS" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_PIS']; ?>"></td>
      <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_PIS_M" placeholder="DCT2_EUT_PIS_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_PIS_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_PIS" placeholder="DCT2_EUT_PIS" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_PIS']; ?>"></td>
  </tr>
   <tr>
     <td>3.Reading Comprehension(RC)</td>
     <th>10</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_RC_M" placeholder="DCT1_EUT_RC_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_RC_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_RC" placeholder="DCT1_EUT_RC" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_RC']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_RC_M" placeholder="DCT2_EUT_RC_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_RC_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_RC" placeholder="DCT2_EUT_RC" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_RC']; ?>"></td>
  </tr>
   <tr>
     <td>4.Sentence Correction and Speech(SCS)</td>
     <th>14</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_SCS_M" placeholder="DCT1_EUT_SCS_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_SCS_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_SCS" placeholder="DCT1_EUT_SCS" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_SCS']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_SCS_M" placeholder="DCT2_EUT_SCS_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_SCS_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_SCS" placeholder="DCT2_EUT_SCS" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_SCS']; ?>"></td>
  </tr>
   <tr>
     <td>5.Synonyms,Antonyms & Spellings(SAS) </td>
     <th>11</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_SAA_M" placeholder="DCT1_EUT_SAA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_SAA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EUT_SAA" placeholder="DCT1_EUT_SAA" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EUT_SAA']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_SAA_M" placeholder="DCT2_EUT_SAA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_SAA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EUT_SAA" placeholder="DCT2_EUT_SAA" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EUT_SAA']; ?>"></td>
  </tr>
   <tr>
     <td><b>III.Quantitative Aptitude Test(QAT)</b></td>
     <th>50</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_M" placeholder="DCT1_QAT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_PG" placeholder="DCT1_QAT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_PG']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_M" placeholder="DCT1_QAT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_PG" placeholder="DCT1_QAT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_PG']; ?>"></td>
  </tr>
   <tr>
     <td>1.Speed Distance Time and Work(SDTW)</td>
     <th>5</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_SDTW_M" placeholder="DCT1_QAT_SDTW_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_SDTW_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_SDTW" placeholder="DCT1_QAT_SDTW" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_SDTW']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_SDTW_M" placeholder="DCT2_QAT_SDTW_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_SDTW_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_SDTW" placeholder="DCT2_QAT_SDTW" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_SDTW']; ?>"></td>
  </tr>
   <tr>
     <td>2.Profit Loss and Interest(PLI) </td>
     <th>6</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_PLI_M" placeholder="DCT1_QAT_PLI_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_PLI_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_PLI" placeholder="DCT1_QAT_PLI" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_PLI']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_PLI_M" placeholder="DCT2_QAT_PLI_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_PLI_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_PLI" placeholder="DCT2_QAT_PLI" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_PLI']; ?>"></td>
  </tr>
   <tr>
     <td>3.Ratio and Percentage(RPP) </td>
     <th>11</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_RPP_M" placeholder="DCT1_QAT_RPP_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_RPP_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_RPP" placeholder="DCT1_QAT_RPP" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_RPP']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_RPP_M" placeholder="DCT2_QAT_RPP_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_RPP_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_RPP" placeholder="DCT2_QAT_RPP" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_RPP']; ?>"></td>
  </tr>
   <tr>
     <td>4.Number System and Algebra(NSA)</td>
     <th>8</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_NAE_M" placeholder="DCT1_QAT_NAE_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_NAE_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_NAE" placeholder="DCT1_QAT_NAE" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_NAE']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_NAE_M" placeholder="DCT2_QAT_NAE_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_NAE_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_NAE" placeholder="DCT2_QAT_NAE" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_NAE']; ?>"></td>
  </tr>
   <tr>
     <td>5.Geometry and Mensuration(GM) </td>
     <th>7</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_GMT_M" placeholder="DCT1_QAT_GMT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_GMT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_GMT" placeholder="DCT1_QAT_GMT" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_GMT']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_GMT_M" placeholder="DCT2_QAT_GMT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_GMT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_GMT" placeholder="DCT2_QAT_GMT" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_GMT']; ?>"></td>
  </tr>
   <tr>
     <td>6.Statistics and Probability(SP) </td>
     <th>5</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_ST_M" placeholder="DCT1_QAT_ST_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_ST_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_STA" placeholder="DCT1_QAT_STA" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_STA']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_ST_M" placeholder="DCT2_QAT_ST_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_ST_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_ST" placeholder="DCT2_QAT_ST" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_ST']; ?>"></td>
  </tr>
   <tr>
     <td>7.Data Interpretation(DI)</td>
     <th>8</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_DI_M" placeholder="DCT1_QAT_DI_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_DI_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_QAT_DI" placeholder="DCT1_QAT_DI" class="form-control" style="color:black" value="<?php echo $row1['DCT1_QAT_DI']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_DI_M" placeholder="DCT2_QAT_DI_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_DI_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_QAT_DI" placeholder="DCT2_QAT_DI" class="form-control" style="color:black" value="<?php echo $row1['DCT2_QAT_DI']; ?>"></td>
  </tr>
   <tr>
     <td><b>IV.Employability Aptitude Test(EAT)</b></td>
     <th>60</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_M" placeholder="DCT1_EAT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_PG" placeholder="DCT1_EAT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_PG']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_M" placeholder="DCT2_EAT_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_PG" placeholder="DCT2_EAT_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_PG']; ?>"></td>
  </tr>
   <tr>
     <td>1. English(E) </td>
     <th>20</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_EU_M" placeholder="DCT1_EAT_EU_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_EU_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_EU" placeholder="DCT1_EAT_EU" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_EU']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_EU_M" placeholder="DCT2_EAT_EU_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_EU_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_EU" placeholder="DCT2_EAT_EU" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_EU']; ?>"></td>
  </tr>
   <tr>
     <td>2. Quantitative(Q)</td>
     <th>20</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_NA_M" placeholder="DCT1_EAT_NA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_NA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_NA" placeholder="DCT1_EAT_NA" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_NA']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_NA_M" placeholder="DCT2_EAT_NA_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_NA_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_NA" placeholder="DCT2_EAT_NA" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_NA']; ?>"></td>
  </tr>
   <tr>
     <td>3. Reasoning(R) </td>
     <th>20</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_AR_M" placeholder="DCT1_EAT_AR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_AR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_EAT_AR" placeholder="DCT1_EAT_AR" class="form-control" style="color:black" value="<?php echo $row1['DCT1_EAT_AR']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_AR_M" placeholder="DCT2_EAT_AR_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_AR_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_EAT_AR" placeholder="DCT2_EAT_AR" class="form-control" style="color:black" value="<?php echo $row1['DCT2_EAT_AR']; ?>"></td>
  </tr>
   <tr>
     <td>V.Domain</td>
     <th>30</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_DOM_M" placeholder="DCT1_DOM_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_DOM_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_DOM_PG" placeholder="DCT1_DOM_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_DOM_PG']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_DOM_M" placeholder="DCT2_DOM_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_DOM_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_DOM_PG" placeholder="DCT2_DOM_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_DOM_PG']; ?>"></td>
  </tr>
   <tr>
     <td><b>V.Coding(C)</b> </td>
     <th>50</th>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_CD_M" placeholder="DCT1_CD_M" class="form-control" style="color:black" value="<?php echo $row1['DCT1_CD_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT1_CD_PG" placeholder="DCT1_CD_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT1_CD_PG']; ?>"></td>
    <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_CD_M" placeholder="DCT2_CD_M" class="form-control" style="color:black" value="<?php echo $row1['DCT2_CD_M']; ?>"></td>
     <td><input type="text" id="MainContent_lblgetregistrationnumber" name="DCT2_CD_PG" placeholder="DCT2_CD_PG" class="form-control" style="color:black" value="<?php echo $row1['DCT2_CD_PG']; ?>"></td>
  </tr>
   <tr>
     <td>1.Programming 1(P1)</td>
     <th>20</th>
     <td><input type="text" value=" "/></td>
     <td><input type="text" value=" "/></td>
   <td><input type="text" value=" "/></td>
   <td><input type="text" value=" "/></td>
  </tr>
    <tr>
     <td>2.Programming 2(P2)</td>
     <th>30</th>
     <td><input type="text" value=" "/></td>
     <td><input type="text" value=" "/></td>
   <td><input type="text" value=" "/></td>
   <td><input type="text" value=" "/></td>
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
            </a>
          </div>
          <br>
          <br>
</div>
</body>
</html>