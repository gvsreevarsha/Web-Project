<?php
session_start();

$con = mysqli_connect('localhost','root','',);

mysqli_select_db($con, 'gb_dotp');

$name = $_SESSION['username'];

$sql="select * from gb_dotp_mdb where Roll_No='$name'";
                      $result=mysqli_query($con,$sql);
                      $resultCheck=mysqli_num_rows($result);
                      $row=mysqli_fetch_assoc($result);
$_SESSION['rollno'] = $row['Roll_No'];

$sql1="select * from gb_dotp_cocubes where Roll_No='$name'";
                      $result1=mysqli_query($con,$sql1);
                      $resultCheck1=mysqli_num_rows($result1);
                      $row1=mysqli_fetch_assoc($result1);
$_SESSION['rollno'] = $row1['Roll_No'];

/*
$sql2="select * from hashedin where Roll_No='$name'";
                      $result2=mysqli_query($con,$sql2);
                      $resultCheck2=mysqli_num_rows($result2);
                      $row2=mysqli_fetch_assoc($result2);
$_SESSION['rollno'] = $row2['Roll_No'];

$sql3="select * from ihsmarkit where Roll_No='$name'";
                      $result3=mysqli_query($con,$sql3);
                      $resultCheck3=mysqli_num_rows($result3);
                      $row3=mysqli_fetch_assoc($result3);
$_SESSION['rollno'] = $row3['Roll_No'];

$sql4="select * from tcsdigital where Roll_No='$name'";
                      $result4=mysqli_query($con,$sql4);
                      $resultCheck4=mysqli_num_rows($result4);
                      $row4=mysqli_fetch_assoc($result4);
$_SESSION['rollno'] = $row4['Roll_No'];

$sql6="select * from nineleaps where Roll_No='$name'";
                      $result6=mysqli_query($con,$sql6);
                      $resultCheck6=mysqli_num_rows($result6);
                      $row6=mysqli_fetch_assoc($result6);
$_SESSION['rollno'] = $row6['Roll_No'];

$sql5="select * from std_attendance where Std_ID='$name'";
                      $result5=mysqli_query($con,$sql5);
                      $resultCheck5=mysqli_num_rows($result5);
                      $row5=mysqli_fetch_assoc($result5);
$_SESSION['rollno'] = $row5['Std_ID'];

$sql7="select * from crt_attendance where Roll_No='$name'";
                      $result7=mysqli_query($con,$sql7);
                      $resultCheck7=mysqli_num_rows($result7);
                      $row7=mysqli_fetch_assoc($result7);
$_SESSION['rollno'] = $row7['Roll_No'];
*/
$sql8="select * from gb_dotp_ddc where Roll_No='$name'";
                      $result8=mysqli_query($con,$sql8);
                      $resultCheck8=mysqli_num_rows($result8);
                      $row8=mysqli_fetch_assoc($result8);
$_SESSION['rollno'] = $row8['Roll_No'];


$sql9="select * from gb_dotp_ita where Roll_No='$name'";
                      $result9=mysqli_query($con,$sql9);
                      $resultCheck9=mysqli_num_rows($result9);
                      $row9=mysqli_fetch_assoc($result9);
$_SESSION['rollno'] = $row9['Roll_No'];




$query = "select * from gb_dotp_ita where Roll_No='$name' && Date BETWEEN '2018-07-02' AND '2018-07-07'";

$result=mysqli_query($con,$query);


$query1 = "select * from gb_dotp_ita where Date BETWEEN '2018-07-02' AND '2018-07-07'";
$result1=mysqli_query($con,$query1);


$query2 = "select * from gb_dotp_ita where Roll_No='$name' && Date BETWEEN '2018-11-03' AND '2018-11-08'";
$result2=mysqli_query($con,$query2);

$query3 = "select * from gb_dotp_ita where Date BETWEEN '2018-11-03' AND '2018-11-08'";
$result3=mysqli_query($con,$query3);


$count=0;
$count1=0;
$c=0;
$c1=0;
$count2=0;
$c2=0;
$count3=0;
$c3=0;


while($row11 = mysqli_fetch_array($result))
{
  if(!strcmp($row11[4],'P'))
        {
      $count=$count+1;
        }
$c=$c+1;
}
$k="{$count}"*100/"{$c}";

while($row22 = mysqli_fetch_array($result1))
{
if(!strcmp($row22[4],'P'))
{
$count1=$count1+1;
}
$c1=$c1+1;
}
$k1="{$count1}"*100/"{$c1}";

while($row33 = mysqli_fetch_array($result2))
{
  if(!strcmp($row33[4],'P'))
        {
        $count2=$count2+1;
        }
$c2=$c2+1;
}
$k2="{$count2}"*100/"{$c2}";


while($row44 = mysqli_fetch_array($result3))
{
if(!strcmp($row44[4],'P'))
{
$count3=$count3+1;
}
$c3=$c3+1;
}
$k3="{$count3}"*100/"{$c3}";

$query_cjs = "select * from gb_dotp_cjs where Roll_No='$name'";

$result_cjs=mysqli_query($con,$query_cjs);


while($row_cjs = mysqli_fetch_array($result_cjs))
{
    
    $Analyst = $row_cjs[1];
    $Sales = $row_cjs[2];
    $Plant = $row_cjs[3];
    $RD = $row_cjs[4];
    $N_Engineer = $row_cjs[5];
    $Operation = $row_cjs[6];
    $Developer = $row_cjs[7];
    $S_Engineer = $row_cjs[8];
    $S_Tester = $row_cjs[9];

    $JFC = ("{$Analyst}"+"{$Sales}"+"{$Plant}"+"{$RD}"+
    "{$N_Engineer}"+"{$Operation}"+"{$Developer}"+"{$S_Engineer}"+"{$S_Tester}")/9;

    $JFC = floor($JFC);

}

$query_cdt1 = "select * from gb_dotp_cdt1 where Roll_No='$name'";

$result_cdt1=mysqli_query($con,$query_cdt1);

$c1_C=0;
$c1_E=0;
$c1_A=0;
$c1_W=0;
$c1_G=0;
$c1_T=0;
$c1_H=0;

while($row_cdt1 = mysqli_fetch_array($result_cdt1))
{
    $Company= $row_cdt1[2];
    $Elligible = $row_cdt1[3];
    $Attendance = $row_cdt1[4];
    $WTC = $row_cdt1[5];
    $GDC = $row_cdt1[6];
    $TRC = $row_cdt1[7];
    $HRC = $row_cdt1[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c1_E=$c1_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c1_A=$c1_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c1_W=$c1_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c1_G=$c1_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c1_T=$c1_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c1_H=$c1_H+1;
    }
    $c1_C=$c1_C+1;
}

$query_cdt2 = "select * from gb_dotp_cdt2 where Roll_No='$name'";

$result_cdt2=mysqli_query($con,$query_cdt2);

$c2_C=0;
$c2_E=0;
$c2_A=0;
$c2_W=0;
$c2_G=0;
$c2_T=0;
$c2_H=0;
while($row_cdt2 = mysqli_fetch_array($result_cdt2))
{
    $Company= $row_cdt2[2];
    $Elligible = $row_cdt2[3];
    $Attendance = $row_cdt2[4];
    $WTC = $row_cdt2[5];
    $GDC = $row_cdt2[6];
    $TRC = $row_cdt2[7];
    $HRC = $row_cdt2[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c2_E=$c2_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c2_A=$c2_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c2_W=$c2_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c2_G=$c2_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c2_T=$c2_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c2_H=$c2_H+1;
    }
    $c2_C=$c2_C+1;
}

$query_cdt3 = "select * from gb_dotp_cdt3 where Roll_No='$name'";

$result_cdt3=mysqli_query($con,$query_cdt3);

$c3_C=0;
$c3_E=0;
$c3_A=0;
$c3_W=0;
$c3_G=0;
$c3_T=0;
$c3_H=0;
while($row_cdt3 = mysqli_fetch_array($result_cdt3))
{
    $Company= $row_cdt3[2];
    $Elligible = $row_cdt3[3];
    $Attendance = $row_cdt3[4];
    $WTC = $row_cdt3[5];
    $GDC = $row_cdt3[6];
    $TRC = $row_cdt3[7];
    $HRC = $row_cdt3[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c3_E=$c3_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c3_A=$c3_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c3_W=$c3_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c3_G=$c3_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c3_T=$c3_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c3_H=$c3_H+1;
    }
    $c3_C=$c3_C+1;
}

$query_cdt4 = "select * from gb_dotp_cdt4 where Roll_No='$name'";

$result_cdt4=mysqli_query($con,$query_cdt4);

$c4_C=0;
$c4_E=0;
$c4_A=0;
$c4_W=0;
$c4_G=0;
$c4_T=0;
$c4_H=0;
while($row_cdt4 = mysqli_fetch_array($result_cdt4))
{
    $Company= $row_cdt4[2];
    $Elligible = $row_cdt4[3];
    $Attendance = $row_cdt4[4];
    $WTC = $row_cdt4[5];
    $GDC = $row_cdt4[6];
    $TRC = $row_cdt4[7];
    $HRC = $row_cdt4[8];

    ?>
    <?php

    if(strcmp($Elligible, 'E')==0)
    {
        $c4_E=$c4_E+1;
    }
    if(strcmp($Attendance, 'P')==0)
    {
        $c4_A=$c4_A+1;
    }
    if(strcmp($WTC, 'Y')==0)
    {
        $c4_W=$c4_W+1;
    }
    if(strcmp($GDC, 'Y')==0)
    {
        $c4_G=$c4_G+1;
    }
    if(strcmp($TRC, 'Y')==0)
    {
        $c4_T=$c4_T+1;
    }
    if(strcmp($HRC, 'Y')==0)
    {
        $c4_H=$c4_H+1;
    }
    $c4_C=$c4_C+1;
}

$c11=$c1_C+$c2_C+$c3_C+$c4_C;
$c22=$c1_E+$c2_E+$c3_E+$c4_C;
$c33=$c1_A+$c2_A+$c3_A+$c4_A;
$c44=$c1_W+$c2_W+$c3_W+$c4_W;
$c55=$c1_G+$c2_G+$c3_G+$c4_G;
$c66=$c1_T+$c2_T+$c3_T+$c4_T;
$c77=$c1_H+$c2_H+$c3_H+$c4_H;


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta charset="utf-8">
    	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
<style>
html,body,#myChart{height: 100%;width: 100%;}
zing-grid[loading]{height:100%;}
#myChart2020 {
  height:200%;
  width:100%;
  min-height:300px;

}
#myChart2021 {
  height:50%;
  width:100%;
  min-height:300px;
}
.zc-ref {
  display:none;
}
zing-grid[loading]{height:100%;}

   
.collapsible1 {
 
  cursor: pointer;
}

.content1 {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
.table .down{
  border-collapse: collapse;
  
  width: 85%;
}
   

	
   
</style>
<style type="text/css">

.bordered ,th {
  border: 1px solid black;
  
}



table {
  border-collapse: collapse;
  
  width: 85%;
}

th {
  height: 50px;
}



#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:nth-child(odd){background-color: #f2f2f2;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",

  axisY:{
    includeZero: "True"
  },
    legend: {
    cursor:"pointer",
    itemclick: toggleDataSeries
  },
  data: [{    
      legendText: "DCT",
    color: "blue",
    showInLegend: true,  
    indexLabel: "{y}",   
    type: "line",
       name: "DCT :",                           //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,
        y: <?php echo $row8['DCT1']; ?> },
      { x: 2,y: <?php echo $row8['DCT2']; ?>},
      {x: 3, y: <?php echo $row8['DCT3']; ?> },
      { x: 4,y: <?php echo $row8['DCT4']; ?>},
      {x: 5, y: <?php echo $row8['DCT5']; ?> },
      { x: 6,y: <?php echo $row8['DCT6']; ?> },
      { x: 7,y: <?php echo $row8['DCT7']; ?>},
      { x: 8,y: <?php echo $row8['DCT8']; ?>}
  
    ]
  },
  {
  	    legendText: "Domain",
    color: "green",
    showInLegend: true, 
 type: "line",
 indexLabel: "{y}", 
           name: "Domain :",                       //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,y: <?php echo $row8['Domain1']; ?> },
      { x: 2,y: <?php echo $row8['Domain2']; ?>},
      {x: 3, y: <?php echo $row8['Domain3']; ?> },
      { x: 4,y: <?php echo $row8['Domain4']; ?>},
      {x: 5, y: <?php echo $row8['Domain5']; ?> },
      { x: 6,y: <?php echo $row8['Domain6']; ?> },
      { x: 7,y: <?php echo $row8['Domain7']; ?>},
      { x: 8,y: <?php echo $row8['Domain8']; ?>},
  
    ]



  },
  {
 type: "line",
   	    legendText: "Coding",
    color: "orange",
    indexLabel: "{y}", 
    showInLegend: true,                                 //indexLabel: "{y}", //Shows y value on all Data Points
name: "Coding :",

    dataPoints: [
      { x: 1,y: <?php echo $row8['Coding1']; ?> },
      { x: 2,y: <?php echo $row8['Coding2']; ?>},
      {x: 3, y: <?php echo $row8['Coding3']; ?> },
      { x: 4,y: <?php echo $row8['Coding4']; ?>},
      {x: 5, y: <?php echo $row8['Coding5']; ?> },
  
    ]



  }]
});


var chart1 = new CanvasJS.Chart("chartContainer1", {
  animationEnabled: true,
  toolTip: {
    shared: true
  },
  legend: {
    cursor:"pointer",
    itemclick: toggleDataSeries
  },
  data: [{
    type: "column",
    name: "Individual Score :",
    legendText: "Individual Analysis",
    color: "#29629F",
    indexLabel: "{y}", 
    indexColor: "blue",
    showInLegend: true, 
    dataPoints:[
      { label: "CRT1", y: <?php echo "{$k}"; ?> },
      { label: "CRT2", y: <?php echo "{$k2}"; ?> },
      { label: "CRT3", y: 45 },
      { label: "CRT4", y: 75 },
      { label: "CRT5", y: 75 },
      { label: "TT1", y: 80 },
      { label: "TT2", y: 75 },
      { label: "TT3", y: 36 },
      { label: "TT4", y: 70 },
      { label: "TT4", y: 90 }
    ]
  },
  {
    type: "column", 
    name: "Average Score :",
    legendText: "Average Analysis",
    color: "#a9a9a9",
    indexLabel: "{y}", 
    showInLegend: true,
    dataPoints:[
      { label: "CRT1", y: 74 },
      { label: "CRT2", y: 73 },
      { label: "CRT3", y: 65 },
      { label: "CRT4", y: 75 },
      { label: "CRT5", y: 55 },
      { label: "TT1", y: 85 },
      { label: "TT2", y: 75 },
      { label: "TT3", y: 45 },
      { label: "TT4", y: 85 },
      { label: "TT5", y: 35 }
    ]
  }]
});


function toggleDataSeries(e) {
  if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  }
  else {
    e.dataSeries.visible = true;
  }
  chart1.render();
}





chart.render();
chart1.render();

}
</script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <meta charset="UTF-8">
  <title>jQuery Vroom Plugin Demo</title>
    <link rel="stylesheet" href="css/vroom2.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/plugins/CSSPlugin.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/easing/EasePack.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenLite.min.js"></script>
  <script type="text/javascript" src="js/vroom.js"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head>
<body class="sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php require('header.php');?> 
  <?php require('header2.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <!-- Small boxes (Stat box) -->

<div class="col-xs-12"> 
    <div class="col-xs-9"><h3>Manage Individual Student</h3></div>
    <div class="col-xs-1">&nbsp</div>
    <div class="col-xs-2"><a href="in1.php"><button type="submit" class="btn btn-primary">Dashboard view</button></a></div>
</div>
<div class="col-xs-12">
    <div class="col-xs-12" style="padding:5px; background-color:#4169E1; color: #ffffff;">Search Student</div>  
      <div class="col-xs-12">&nbsp</div>
      <div class="col-xs-12">
    
        <div class="col-xs-1">Batch:</div>
        <div class="dropdown col-xs-1">
             <select>
                  <option value="2017">2020</option>
                  <option value="2018">2019</option>
                  <option value="2019">2018</option>
                  <option value="2020">2017</option>
                  <option value="2021">2021</option>
              </select>
        </div>
        <div class="col-xs-4">
          <div class="col-xs-5">Search By:</div>
              <select class="col-xs-7">
                  <option value="name">Student Roll No</option>
                  <option value="rollno">Student Name</option>
              </select>
        </div>
          <div class="col-xs-6">
            <form action="in.php" method="post">
              <input class="col-xs-7" type="text" placeholder="Enter the Roll no:" name="user" value="<?php 
                      echo $row['Roll_No']; ?>">
              <div class="col-xs-1"></div>
              <button class="col-xs-4" type="submit">Submit</button>
            
            </form>
          </div>
        </div>
  </div>
  <div class="col-xs-12">&nbsp</div>
  <div class="col-xs-12">
      <div class="col-xs-12" style="padding:5px; background-color:#4169E1;  color: #ffffff;">Student Details</div>
    </br></br>
<div class = "row">		
		  </br></br>
      <div class="col-lg-10">
      <div class="form-group col-md-4">
            <label for="" style="color: black">Registration number </label>
           <span id="MainContent_lblgetregistrationnumber" class="form-control" style="color:black"><?php 
                      echo $row['Roll_No']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Campus </label>
           <span id="MainContent_lblcampus" class="form-control" style="color:black"><?php 
                      echo $row['Campus']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">College</label>
            <span id="MainContent_lblcollege" class="form-control" style="color:black"><?php 
                      echo $row['College']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Batch</label>
            <span id="MainContent_lblbatch" class="form-control" style="color:black"><?php 
                      echo $row['Batch']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for=""style="color: black">Degree</label>
            <span id="MainContent_lbldegree" class="form-control" style="color:black"><?php 
                      echo $row['Degree']; ?></span>
          </div>
<div class="form-group col-md-4">
<label for=""style="color: black">Program</label>
<span id="MainContent_lblcourse" class="form-control" style="color:black"><?php 
                      echo $row['Program']; ?></span>
</div>
<div class="form-group col-md-4">
<label for="" style="color: black">Branch</label>
<span id="MainContent_lblbranch" class="form-control" style="color:black"><?php 
                      echo $row['Branch']; ?></span>
</div>

<div class="form-group col-md-4">
<label for="" style="color: black">Semester</label>
<span id="MainContent_lblcurrsem" class="form-control" style="color:black"><?php 
                      echo $row['Semester']; ?></span>

</div>

   


          </div>
       <div class="col-md-2">  <div class="col-md-gitam">
<img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php 
                      echo $row['Roll_No']; ?>" id="MainContent_img1" alt="Student Photo" class="photo img-responsive" height="200" width="150">
</div> </div>
                       
</div>
 </div>
		
		
		
		
		
		
<!-- personal details --->		
<div class="container-fluid">
<button style="width: 100%"  class = "collapsible1" name= "toggle1" id= "toggle1" onclick="myFunction1()"><h4><b>Personal details open</b></h4></button>
<div class = "content1">

 
   <br></br>

<div class = "row">
    
         <br></br> 

          
          <div class="form-group col-md-4" >
            <label for="" style="color: black" >First name</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  ><?php 
                      echo $row['F_Name']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Middle Name</label>
              <span id="MainContent_lblemail" class="form-control" style="color:black" ><?php 
                      echo $row['M_Name']; ?></span>
                  </div>

           <div class="form-group col-md-4">
            <label for="" style="color: black">Last name</label>
           <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"><?php 
                      echo $row['L_Name']; ?></span>
          </div>
        
          <div class="form-group col-md-4">
            <label for="" style="color: black">Date of Birth</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Date_of_Birth']; ?></span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black">Gender</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Gender']; ?></span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">Blood Group</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Blood_Group']; ?></span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black">Nationality</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Nationality']; ?></span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black">Government ID number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Govt_ID']; ?></span>
          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: black">Father name</label>
            <span id="MainContent_lblfathername" class="form-control" style="color:black">
              <?php 
                      echo $row['Father_Name']; ?>
            </span>
            
          </div>
               <div class="form-group col-md-4">
            <label for="" style="color: black">Mother name</label>
            <span id="MainContent_lblmothername" class="form-control" style="color:black">
              <?php 
                      echo $row['Mother_Name']; ?>
            </span>
            
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">Reservaton Category</label>
            <span id="MainContent_lblreligion" class="form-control" style="color:black">
              <?php 
                      echo $row['Reservation_Category']; ?>
            </span>
    </div>


 


<div class="form-group col-md-4">
            <label for="" style="color: black">Student Phone Number</label>
           <span id="MainContent_lblstudentfullname" class="form-control"style="color:black"><?php 
                      echo $row['Mobile_Number']; ?></span>
          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: black">Student Email</label>
           <span id="MainContent_lblemail" class="form-control"style="color:black"><?php 
                      echo $row['Email_ID']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Parent Email </label>
              <span id="MainContent_lblemail" class="form-control"style="color:black">
                <?php 
                      echo $row['Parent_Mail_ID']; ?>
              </span>
           
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
      
               </div>
         <div class="form-group col-md-4">
            <label for="" style="color: black">Parent Number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"><?php 
                      echo $row['Parent_Mobile_Number']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Land Mark</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black">
             <?php 
                      echo $row['LandMark']; ?>
           </span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black">District</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black">
              <?php 
                      echo $row['District']; ?>
            </span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">City</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black">
              <?php 
                      echo $row['City']; ?>
            </span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black">State</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black">
              <?php 
                      echo $row['State']; ?>
            </span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black">Country</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black">
             <?php 
                      echo $row['Country']; ?>
           </span>
          </div>   
              <div class="form-group col-md-4">
            <label for="" style="color: black">Pincode</label>
            <span id="MainContent_lblfathername" class="form-control" style="color:black">
              <?php 
                      echo $row['Pincode']; ?>
            </span>
            
          </div>
 <div class="form-group col-md-8">
            
          </div>

          <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control> -->
            <br/>
            <br/>
 <a href="home4.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a></span>
          </div>
              
          </div>
		  </div>
</div>
          
          
      		
		
		
</br>		
		
			
		<!-----Academic report open-->
		<div class="container-fluid">
<button style="width: 100%"  class = "collapsible1" name= "togglea" id= "togglea" onclick="myFunctiona()"><h4><b>Academic report Open</b></h4></button>
<div class = "content1">

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7CED6252">
</div>
    <div class="wrapper">
        
   <div class="container-fluid">
   <br></br>
   <div class = "row">
     <div class="form-group col-md-3">
            <label for="" style="color: black">SSC </label>
           <span id="MainContent_lblcampus" class="form-control"><?php 
                      echo $row['_Marks_10th']; ?></span>
          </div>
          <div class="form-group col-md-3">
            <label for="" style="color: black">Intermediate </label>
            <span id="MainContent_lblcollege" class="form-control"><?php 
                      echo $row['_Marks_12th']; ?></span>
          </div>
       <div class="form-group col-md-3">
            <label for="" style="color: black">Engineering</label>
            <span id="MainContent_lblcollege" class="form-control"><?php 
                      echo $row['Aggregate_Graduation']; ?></span>
          </div>
           <div class="form-group col-md-3">
          <!--  <span id="MainContent_lblfathername" class="form-control> -->
            <br>
 <a href="home5.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>
          <br></br>
		  </div>

</div>
</div>
</div>
</div>
</br>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><input type="text" name="id" size="2" class="form-control  col-lg-2" placeholder="Tenth marks" value="<?php 
                      echo $row['_Marks_10th']; ?>%"></h3>
                      <br><br>

                <p align="left">Tenth Percentage</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-bo bg-success"><br/></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><input type="text" name="id" size="2" class="form-control col-lg-2" placeholder="Inter marks" style="color:black" value="<?php 
                      echo $row['_Marks_12th']; ?>%"></h3>
                      <br><br>
                <p align="left">Intermediate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-bo bg-warning"><br/></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <input type="text" class="form-control col-lg-2" name="id" placeholder="B.tech marks" size="3" style="color:black" 
                  value="<?php echo $row['Aggregate_Graduation']; ?> (<?php echo $row['Pass_Category']; ?>)"></h3>
                  <br><br>

                <p align="left">B.Tech</p>
              </div>
             <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-6 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Job Fit Curve
                </h3>

              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <!-- Morris chart - Sales -->
                  <div id="jquery-script-center">
<div id="gauge">
    <div id="circle"></div>
    <div id="numbers"></div>
    <div id="needle"></div>
</div>
    
    

  <strong>
                      <br/>
                      <br/>
                      <br/>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br><br><br><br><br>
                   <br>
        <h5> <input type="text" name="miles" class="form-control col-lg-2" maxlength="2" id="miles" value="<?php echo "{$JFC}"; ?>"> </h5>
                   <h5 align="left"> <br><br><br> Description : You are  <?php echo "{$JFC}"; ?>% suitable to the industry <br> with
                    your current performance in all the tests<br>
                    conducted by T&P.</h5>

                    </strong>

                    

               </div>
</div>




                </div>
              </div>
            </div>
            <!-- /.card -->
          </section>


                  

            <!-- DIRECT CHAT -->
           
            <!--/.direct-chat -->

            <!-- TO DO List -->
           
            <!-- /.card -->
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">

            <!-- Map card -->

            <div class="card">
              <div class="card-header">

                <h3 class="card-title">

                  <i class="fa fa-briefcase"></i>
                  &nbsp;&nbsp;Current Job Suitability
                </h3>
                <h1></h1>
              </div>
<!-- /.card-header -->
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <br><br>
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" value="<?php echo "{$Analyst}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Analyst</div></strong>
                  </div>
                  <div class="col-4 text-center">
                    <input type="text" class="knob" value="<?php echo "{$Sales}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">

                    <strong><div style="color: #29629F">Customer & Sales Executive</div></strong>
                  </div>
                  <div class="col-4 text-center">
                    <input type="text" class="knob" value="<?php echo "{$Plant}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Graduate Engineer (Plant)  </div></strong>
                  </div>
              </div>
          </div>
           <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                   <input type="text" class="knob" value="<?php echo "{$RD}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Graduate Engineer (R&D)</div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" value="<?php echo "{$N_Engineer}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Network Engineer</div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" value="<?php echo "{$Operation}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Operations and Executive</div></strong>
                  </div>
              </div>
          </div>
          <div class="card-footer bg-transparent">
              <div class="row">
                  <!-- ./col -->
                  <div class="col-4 text-center">
                   <input type="text" class="knob" value="<?php echo "{$Developer}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                     <strong><div style="color: #29629F">Software Developer  </div></strong>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" value="<?php echo "{$S_Engineer}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Software Engineer   </div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" value="<?php echo "{$S_Tester}"; ?>" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                   <strong><div style="color: #29629F">Software Tester</div></strong>
                  </div>
                  <!-- ./col -->
                 
                </div>
              </div>
                <!-- /.row -->
           <br> <br> <br>
           <br>

              </div>
              </div>
          </section>





<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-12 col-6">
            <!-- small box -->

<div class="card">

              <div class="card-header">

                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Cocubes Analysis
                </h3>
              </div>
               <div class="card-body">
                <div class="tab-content p-0">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="col-lg-2">
                    <table class="bordered1">
                      <tr>
                        <td>Analytical</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Analytical']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Quantitative</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Quantitative']; ?>"></td>
                      </tr>
                      <tr>
                        <td>English</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_English']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Domain</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Domain']; ?>"></td>
                      </tr>
                      <tr>
                        <td>CF</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Computer_Fundamental']; ?>"></td>
                      </tr>
                      <tr>
                        <td>Coding</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Coding']; ?>"></td>
                      </tr>
                      <tr>
                        <td>WET</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="<?php echo $row1['PA1_Written_English']; ?>"></td>
                      </tr>
                    </table>
                  </div>
                   <div id='myChart2020' class="col-lg-8"></div>

  <script>ZC.LICENSE=["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];var myConfig = {
  type : 'radar',
  plot : {
    aspect : 'area',
    animation: {
      effect:3,
      sequence:1,
      speed:700
    }
  },
  scaleV : {
    visible : false
  },
  scaleK : {
    values : '0:6:1',
    labels : ['Analytical','Quantative','English','Domain', 'CF', 'Coding', 'WET' ],
    item : {
      fontColor : '#607D8B',
      backgroundColor : "white",
      borderColor : "#aeaeae",
      borderWidth : 1,
      padding : '5 10',
      borderRadius : 10
    },
    refLine : {
      lineColor : '#c10000'
    },
    tick : {
      lineColor : '#59869c',
      lineWidth : 2,
      lineStyle : 'dotted',
      size : 20
    },
    guide : {
      lineColor : "#607D8B",
      lineStyle : 'solid',
      alpha : 0.3,
      backgroundColor : "#c5c5c5 #718eb4"
    }
  },
  series : [
    {
      values : [<?php echo $row1['PA1_Analytical']; ?>, <?php echo $row1['PA1_Quantitative']; ?>, <?php echo $row1['PA1_English']; ?>, <?php echo $row1['PA1_Domain']; ?>, <?php echo $row1['PA1_Computer_Fundamental']; ?>, <?php echo $row1['PA1_Coding']; ?>, <?php echo $row1['PA1_Written_English']; ?>],
      text:'farm'
    },
    {
      values : [20, 20, 54, 41, 41, 35, 75],
      lineColor : '#53a534',
      backgroundColor : '#689F38'
    }
  ]
};

zingchart.render({ 
  id : 'myChart2020', 
  data : myConfig, 
  height: '100%', 
  width: '100%' 
});</script>
<div class="col-lg-2">
                    <table  class="bordered1">
                      <tr>
                        <td>Analytical</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="20"></td>
                      </tr>
                      <tr>
                        <td>Quantitative</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="20"></td>
                      </tr>
                      <tr>
                        <td>English</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="54"></td>
                      </tr>
                      <tr>
                        <td>Domain</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="41"></td>
                      </tr>
                      <tr>
                        <td>CF</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="41"></td>
                      </tr>
                      <tr>
                        <td>Coding</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="35"></td>
                      </tr>
                      <tr>
                        <td>WET</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="75"></td>
                      </tr>
                    </table>
                  </div>
</div>
</div>
</div>
 

</div>


          <!-- ./col -->

          <!-- ./col -->

          <!-- ./col -->
        </div>











<section class="col-lg-12 connectedSortable">

<div class="container-fluid">

	<div class="row">

<div class="col-lg-12">

            <!-- TO DO List -->
            <div class="card">

              <div class="card-header">

                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Amcat Analysis
                </h3>
              </div>

               <div class="card-body">
                <div class="tab-content p-0">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="col-lg-2">
                    <table class="bordered1">
                      <tr>  
                        <td>English</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="70"></td>
                      </tr>
                      <tr>
                        <td>Quantitative</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="29"></td>
                      </tr>
                      <tr>
                        <td>Logical</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="88"></td>
                      </tr>
                      <tr>
                        <td>Automata</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="49"></td>
                      </tr>
                      <tr>
                        <td>Writex</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="61"></td>
                      </tr>
                      <tr>
                        <td>Automatafix</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="55"></td>
                      </tr>
                      <tr>
                        <td>Domain</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="75"></td>
                      </tr>
                    </table>
                  </div>
                   <div id='myChart2021' ></div>
  <script>ZC.LICENSE=["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];var myConfig = {
  type : 'radar',
  plot : {
    aspect : 'area',
    animation: {
      effect:3,
      sequence:1,
      speed:700
    }
  },
  scaleV : {
    visible : false
  },
  scaleK : {
    values : '0:6:1',
    labels : ['English','Quantative Ability','Logical Ability','Automata', 'WriteX', 'Automatafix', 'Domain' ],
    item : {
      fontColor : '#607D8B',
      backgroundColor : "white",
      borderColor : "#aeaeae",
      borderWidth : 1,
      padding : '5 10',
      borderRadius : 10
    },
    refLine : {
      lineColor : '#c10000'
    },
    tick : {
      lineColor : '#59869c',
      lineWidth : 2,
      lineStyle : 'dotted',
      size : 20
    },
    guide : {
      lineColor : "#607D8B",
      lineStyle : 'solid',
      alpha : 0.3,
      backgroundColor : "#c5c5c5 #718eb4"
    }
  },
  series : [
    {
      values : [70, 29, 88, 49, 61, 55, 75],
      indexLabel : "{values}",
      text:'farm'
    },
    {
      values : [50, 59, 60, 21, 80, 35, 95],
      lineColor : '#53a534',
      backgroundColor : '#689F38'
    }
  ]
};

zingchart.render({ 
  id : 'myChart2021', 
  data : myConfig, 
  height: '100%', 
  width: '100%' 
});</script>
<div class="col-lg-2">
                    <table class="bordered1">
                      <tr>  
                        <td>English</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="50"></td>
                      </tr>
                      <tr>
                        <td>Quantitative</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="59"></td>
                      </tr>
                      <tr>
                        <td>Logical</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="60"></td>
                      </tr>
                      <tr>
                        <td>Automata</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="21"></td>
                      </tr>
                      <tr>
                        <td>Writex</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="80"></td>
                      </tr>
                      <tr>
                        <td>Automatafix</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="35"></td>
                      </tr>
                      <tr>
                        <td>Domain</td>
                        <td align="center"><input type="text" name="miles" class="form-control col-lg-6" maxlength="2" id="miles" value="95"></td>
                      </tr>
                    </table>
                  </div>
</div>
</div>

</div>             
</div>

</div>

</div>


	
</div>
          
            <!-- /.card -->

</section>

</div>
</div>
</section>






















<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->

 <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Attendance Analysis
                </h3>
              </div>
              <div class="card-header">

             <center>
              <br>
<div id="chartContainer1" style="height: 500px; width: 95%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js">
</script>

</center>

<br>
   
</div>
</div>
</div>


<section class="col-lg-6 connectedSortable">

<div class="container-fluid">

	<div class="row">

<div class="col-lg-12">


            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-line"></i>
                  &nbsp;&nbsp;Scores Analysis
                </h3>
              </div>
             <center>
              <br>
<div id="chartContainer" style="height: 500px; width: 95%;"></div>
<br>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</center>
<br>
</div>
                
</div>
</div>
</div>
</section>
</div>

	
</div>
               
            <!-- /.card -->

</section>









<section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Placement Analysis
                </h3>
              </div>
              <br>
               <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            
              <div class="inner">
                <h5 style="color: black" align="left">Total Number of Companies </h5>
           
            <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c11}"; ?>">
            <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">

             <h5 style="color: black" align="left">Number of Companies Elligible </h5>
            <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c22}"; ?>">

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
               <h5 style="color: black" align="left">Number of Companies Attended</h5>
            <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c33}"; ?>">
        </div>
          </div>
          <!-- ./col -->
        </div>
    </div>
</section>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            
              <div class="inner">
                <h5 style="color: black" align="left">Number of Companies Test Cleared</h5>
           <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c44}"; ?>">
         <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
      
              <div class="inner">
               <h5 style="color: black" align="left">Number of Companies GD Cleared </h5>
            <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c55}"; ?>">
        
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <h5 style="color: black" align="left">Number of Companies TR Cleared</h5>
            <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c66}"; ?>">
         
            </div>
          </div>

           <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <h5 style="color: blue" align="left">Number of Offers</h5>
           <input type="text" name="id" size="1" class="form-control" placeholder="Inter marks" style="color:black" value="<?php 
                      echo "{$c77}"; ?>">
        <br>
            </div>
          </div>
          <!-- ./col -->

        </div>

    </div>

</section>
</div>
</section>





            <!-- /.card -->
 
    <!-- /.content -->

  <!-- /.content-wrapper -->
 
<section class="col-lg-12 connectedSortable">
            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Individual Drive Tracks
                </h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0 bordered1">
                    <thead>
                    <tr>
                      <th>Date</th>
                      <th>Company logo</th>
                      <th>Company Name</th>
                      <th>CTC</th>
                      <th>Attendance</th>
                      <th>Written Test</th>
                      <th>Group Discussion</th>
                      <th>Tech Round</th>
                      <th>HR Round</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="10/06/2019"></td>
                      <td><img src="images/IHSMarkit.jpg" alt="ms image" style="width:150px;height:70px;"></td>
                      <td><span class="badge badge-success">IHS Markit</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5 LPA"></div>
                      </td>
<?php
 $query_cdt1 = "select * from gb_dotp_cdt1 where Roll_No='$name'";

$result_cdt1=mysqli_query($con,$query_cdt1);

$c=0;
$c_C=0;
$c_E=0;
$c_A=0;
$c_W=0;
$c_G=0;
$c_T=0;
$c_H=0;
while($row_cdt1 = mysqli_fetch_array($result_cdt1))
{
    $Company[$c] = $row_cdt1[2];
    $Elligible[$c] = $row_cdt1[3];
    $Attendance[$c] = $row_cdt1[4];
    $WTC[$c] = $row_cdt1[5];
    $GDC[$c] = $row_cdt1[6];
    $TRC[$c] = $row_cdt1[7];
    $HRC[$c] = $row_cdt1[8];


?>
<?php 
if($c==0)
{
  ?>
                  
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>                   

                    </tr>
<?php } ?>                   
<?php  if($c==1) { ?>
                   <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="20/07/2019"></td>
                      <td><img src="images/hashedin.jpg" alt="amazon image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Hashed IN</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       
                    </tr>

<?php } ?>
<?php if($c==2) { ?>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="18/07/2019"></td>
                      <td><img src="images/tcs_codevita.png" alt="ibm image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">TCS CodeVita</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="11 LPA">
                        </div>
                      </td>
                      
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       
                    </tr>
<?php } ?>
<?php if($c==3) { ?>                   
                   <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="18/07/2019"></td>
                      <td><img src="images/tcs digital.jpg" alt="ibm image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">TCS Digital</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA"></div>
                      </td>
                      
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
            
                       
                    </tr>
<?php } ?>              
<?php if($c==4) { ?>      
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="31/07/2019"></td>
                     <td><img src="images/musigma.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Mu-Sigma</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       
                    </tr>
 <?php } ?>
 <?php if($c==5) { ?>                   
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="31/07/2019"></td>
                     <td><img src="images/tcs ninja.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">TCS Ninja</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.36 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                      
                    </tr>
<?php } ?>
<?php if($c==6) { ?>                    
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="3/08/2019"></td>
                     <td><img src="images/infosys.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Infosys</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       
                    </tr>
<?php } ?>
<?php if($c==7) { ?>                   
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="10/08/2019"></td>
                     <td><img src="images/sachs.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">SACHS</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="5 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                      

                    </tr>
<?php } ?>
<?php if($c==8) { ?>                    

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="15/08/2019"></td>
                     <td><img src="images/juspay.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">JusPay</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="8 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       

                    </tr>
<?php } ?>
<?php if($c==9) { ?>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="23/07/2019"></td>
                       <td><img src="images/nineleaps.jpg" alt="netflix image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Nine Leaps</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       

                    </tr>
<?php } ?>
<?php if($c==10) { ?>                    
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="20/08/2019"></td>
                     <td><img src="images/inszoom.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Inszoom</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>

                    </tr>
<?php } ?>
<?php if($c==11) { ?>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="25/08/2019"></td>
                     <td><img src="images/amazon.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Amazon</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="18 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>

                    </tr>
<?php } ?>                    
<?php if($c==12) { ?>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="31/08/2019"></td>
                     <td><img src="images/Sabre.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Sabre</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       
                    </tr>
<?php } ?>
<?php if($c==13) { ?>
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="4/09/2019"></td>
                     <td><img src="images/byjus.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Byjus</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="10 LPA">
                        </div>
                      </td>
                      
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c]}"; ?>"></td>
                       

                    </tr>
<?php } ?>                    
                    <?php
                    $c=$c+1;
                   

                  }
                  ?>
                    
                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="11/09/2019"></td>
                     <td><img src="images/zensar.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Zensar</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="5 LPA">
                        </div>
                      </td>

<?php
 $query_cdt2 = "select * from gb_dotp_cdt2 where Roll_No='$name'";

$result_cdt2=mysqli_query($con,$query_cdt2);

$c2=0;
while($row_cdt2 = mysqli_fetch_array($result_cdt2))
{
    $Company[$c2] = $row_cdt2[2];
    $Attendance[$c2] = $row_cdt2[4];
    $WTC[$c2] = $row_cdt2[5];
    $GDC[$c2] = $row_cdt2[6];
    $TRC[$c2] = $row_cdt2[7];
    $HRC[$c2] = $row_cdt2[8];


?>
<?php 
if($c2==0)
{
  ?>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>

                    </tr>
<?php } ?>                   
<?php  if($c2==1) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="21/09/2019"></td>
                     <td><img src="images/darwinbox.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Darwin-Box</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="11 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==2) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="25/09/2019"></td>
                     <td><img src="images/fss.jpeg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">FSS</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5-6 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==3) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="30/09/2019"></td>
                     <td><img src="images/axiscades.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Axis Cades</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==4) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="5/10/2019"></td>
                     <td><img src="images/hpe.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">HPE</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==5) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="9/10/2019"></td>
                     <td><img src="images/nextech.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">NextTech</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>

                    </tr>
<?php } ?>                   
<?php  if($c2==6) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="16/10/2019"></td>
                     <td><img src="images/mphasis.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Mphasis</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==7) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="24/10/2019"></td>
                     <td><img src="images/tally.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Tally</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==8) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="30/10/2019"></td>
                     <td><img src="images/cognizant.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Cognizant</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==9) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="2/11/2019"></td>
                     <td><img src="images/wipro.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Wipro</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>

                    </tr>
<?php } ?>                   
<?php  if($c2==10) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="9/11/2019"></td>
                     <td><img src="images/jk technosoft.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">JK technosoft</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==11) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="18/11/2019"></td>
                     <td><img src="images/CtrlS.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Crtl+S</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>
                       
                    </tr>
<?php } ?>                   
<?php  if($c2==12) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="24/11/2019"></td>
                     <td><img src="images/alkholocks.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Alkholocks</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="1.8 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c2]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c2]}"; ?>"></td>

                    </tr>
<?php } ?>                   
<?php $c2=$c2+1; } ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="30/11/2019"></td>
                     <td><img src="images/verizon.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Verizon</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="6 LPA">
                        </div>
                      </td>
<?php
 $query_cdt3 = "select * from gb_dotp_cdt3 where Roll_No='$name'";

$result_cdt3=mysqli_query($con,$query_cdt3);

$c3=0;
while($row_cdt3 = mysqli_fetch_array($result_cdt3))
{
    $Company[$c3] = $row_cdt3[2];
    $Attendance[$c3] = $row_cdt3[4];
    $WTC[$c3] = $row_cdt3[5];
    $GDC[$c3] = $row_cdt3[6];
    $TRC[$c3] = $row_cdt3[7];
    $HRC[$c3] = $row_cdt3[8];


?>
<?php 
if($c3==0)
{
  ?>

                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c3==1) { ?>              


                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="2/12/2019"></td>
                     <td><img src="images/ibm.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">IBM</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>

                    </tr>
<?php } ?>  
<?php  if($c3==2) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="5/12/2019"></td>
                     <td><img src="images/youngman.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">YoungMan</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==3) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="12/12/2019"></td>
                     <td><img src="images/cargill.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Cargill</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c3==4) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="19/12/2019"></td>
                     <td><img src="images/idisha.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Idisha</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==5) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="26/12/2019"></td>
                     <td><img src="images/paygyft.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">PayGyft</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==6) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="30/12/2019"></td>
                     <td><img src="images/lido.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">LIDO</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="10 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c3==7) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="2/01/2020"></td>
                     <td><img src="images/commvault.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Commvault</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="23 LPA"></div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==8) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="7/01/2020"></td>
                     <td><img src="images/shenzyn.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Shenzyn</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==9) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="10/01/2020"></td>
                     <td><img src="images/upgrad.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">UPGRAD</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="10 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==10) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="12/01/2020"></td>
                     <td><img src="images/codehall.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Code Hall</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==11) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="14/01/2020"></td>
                     <td><img src="images/ig infotech.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">IG Infotech</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c3==12) { ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="17/01/2020"></td>
                     <td><img src="images/Intellipaat.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Intellipaat</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c3]}"; ?>"></td>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c3]}"; ?>"></td>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c3]}"; ?>"></td>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c3]}"; ?>"></td>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c3]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php $c3=$c3+1; } ?>     

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="18/01/2020"></td>
                     <td><img src="images/tech mahindra.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Tech Mahindra</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
<?php
 $query_cdt4 = "select * from gb_dotp_cdt4 where Roll_No='$name'";

$result_cdt4=mysqli_query($con,$query_cdt4);

$c4=0;
while($row_cdt4 = mysqli_fetch_array($result_cdt4))
{
    $Company[$c4] = $row_cdt4[2];
    $Attendance[$c4] = $row_cdt4[4];
    $WTC[$c4] = $row_cdt4[5];
    $GDC[$c4] = $row_cdt4[6];
    $TRC[$c4] = $row_cdt4[7];
    $HRC[$c4] = $row_cdt4[8];


?>
<?php 
if($c4==0)
{
  ?>

                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c4==1) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="20/01/2020"></td>
                     <td><img src="images/johnson controls.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Johnson Control</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.75 LPA">
                        </div>
                      </td>
                       <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c4==2) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="23/01/2020"></td>
                     <td><img src="images/collins.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Collins Aerospace</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="5.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c4==3) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="25/01/2020"></td>
                     <td><img src="images/goldman_sachs.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-danger">Goldman Sachs</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c4==4) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="27/01/2020"></td>
                     <td><img src="images/uhg.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">UHG</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="7 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td> 
                    </tr>
<?php } ?>  
<?php  if($c4==5) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="1/02/2020"></td>
                     <td><img src="images/vedantu.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Vedantu</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c4==6) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="1/02/2020"></td>
                     <td><img src="images/rave.jpeg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Rave</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="3.5 LPA">
                        </div>
                      </td>
                     <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                      
                    </tr>
<?php } ?>  
<?php  if($c4==7) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="3/02/2020"></td>
                     <td><img src="images/aliens group.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Aliens Group</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="2 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c4==8) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="5/02/2020"></td>
                     <td><img src="images/TEK.png" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">TEK Systems</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  if($c4==9) { ?>

                    <tr>
                      <td><input type="text" name="id" size="6" class="form-control col-lg-9" placeholder="Tenth marks" value="9/02/2020"></td>
                     <td><img src="images/reverie.jpg" alt="google image" style="width:150px;height:100px;"></td>
                      <td><span class="badge badge-success">Reverie</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20" align="right">
                          <input type="text" name="id" size="6" class="form-control col-lg-8" placeholder="Tenth marks" value="4.5-5.5 LPA">
                        </div>
                      </td>
                      <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$Attendance[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$WTC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$GDC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$TRC[$c4]}"; ?>"></td>
                        <td align="center"><input type="text" name="id" size="6" class="form-control col-lg-4" placeholder="Tenth marks" value="<?php echo "{$HRC[$c4]}"; ?>"></td>
                       
                    </tr>
<?php } ?>  
<?php  $c4=$c4+1; } ?>




                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>

</section>




              
</div>






  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
</div>
</div>
</section>
<!--Footer start-->

<?php require('footer_new.php');?> 


<script>
   
var coll = document.getElementsByClassName("collapsible1");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}


       function myFunction() {
                    var change = document.getElementById("toggle");
                    if (change.innerHTML == "<h4><b>Student details open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Student details close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Student details open</b></h4>";
                    }
                }
        
           function myFunction1() {
                    var change = document.getElementById("toggle1");
                    if (change.innerHTML == "<h4><b>Personal details open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Personal details close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Personal details open</b></h4>";
                    }
                }
        function myFunctiona() {
                    var change = document.getElementById("togglea");
                    if (change.innerHTML == "<h4><b>Academic report Open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Academic report Close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Academic report Open</b></h4>";
                    }
                }
				   function myFunction2() {
                    var change = document.getElementById("toggle2");
                    if (change.innerHTML == "<h4><b>Placement Report Update module open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Placement Report Update module close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Placement Report Update module open</b></h4>";
                    }
                }
        


function PrintFunction() {
  window.print();
}

</script>












<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
