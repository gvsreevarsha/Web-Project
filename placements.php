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

/*$sql1="select * from cocubes where Roll_No='$name'";
                      $result1=mysqli_query($con,$sql1);
                      $resultCheck1=mysqli_num_rows($result1);
                      $row1=mysqli_fetch_assoc($result1);
$_SESSION['rollno'] = $row1['Roll_No'];

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

$sql8="select * from internal_exam_result where Roll_No='$name'";
                      $result8=mysqli_query($con,$sql8);
                      $resultCheck8=mysqli_num_rows($result8);
                      $row8=mysqli_fetch_assoc($result8);
$_SESSION['rollno'] = $row8['Roll_No'];
*/

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
<style>html,body,#myChart{height: 100%;width: 100%;}
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

   
</style>
<style type="text/css">
table, th, td {
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
    type: "line",
       name: "DCT :",                           //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,y: 7.50 },
      { x: 2,y: 8.35},
      {x: 3, y: 8.03 },
      { x: 4,y: 8.40},
      {x: 5, y: 7.71 },
      { x: 6,y: 8.57 },
      { x: 7,y: 8.60},
      { x: 8,y: 9.00}
  
    ]
  },
  {
  	    legendText: "Domain",
    color: "green",
    showInLegend: true, 
 type: "line",
           name: "Domain :",                       //indexLabel: "{y}", //Shows y value on all Data Points

    dataPoints: [
      { x: 1,y: 8.50 },
      { x: 2,y: 3.35},
      {x: 3, y: 6.03 },
      { x: 4,y: 5.40},
      {x: 5, y: 6.71 },
      { x: 6,y: 6.57 },
      { x: 7,y: 3.60},
      { x: 8,y: 8.00},
  
    ]



  },
  {
 type: "line",
   	    legendText: "Coding",
    color: "orange",
    showInLegend: true,                                 //indexLabel: "{y}", //Shows y value on all Data Points
name: "Coding :",

    dataPoints: [
      { x: 1,y: 6.50 },
      { x: 2,y: 4.35},
      {x: 3, y: 5.03 },
      { x: 4,y: 7.40},
      {x: 5, y: 3.71 },
      { x: 6,y: 4.57 },
      { x: 7,y: 5.60},
      { x: 8,y: 6.00},
  
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
    showInLegend: true,
    dataPoints:[
      { label: "CRT1", y: <?php echo "{$k1}"; ?> },
      { label: "CRT2", y: <?php echo "{$k3}"; ?> },
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
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="sidebar-collapse">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color: #303030;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <h4 style="color: white;">   
      <img src="dist/img/gitam_logo.jpg" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8" height="100px" width="100px">
      &nbsp;&nbsp;GITAM, Bengaluru
   </h4>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
       <h1>&emsp;&emsp;&emsp;&emsp;&emsp;</h1>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->

  <li class="nav-item">
      	<li class="nav-item d-none d-sm-inline-block">
      		<br>
      		<br>
      		<br>
      	<a href="index.html">	<h5 style="color: lightgreen; vertical-align: bottom;">Dashboard &nbsp;&nbsp;&emsp;</h5></a>
      </li>
  </li>

  <li class="nav-item">
        <li class="nav-item d-none d-sm-inline-block">
          <br>
          <br>
          <br>
          <h5 style="color: lightgreen; vertical-align: bottom;">Personal Details &nbsp;&nbsp;&emsp;</h5>
      </li>
  </li>

          <li class="nav-item">
      	<li class="nav-item d-none d-sm-inline-block">
      		<br>
      		<br>
      		<br>
      		<h5 style="color: lightgreen; vertical-align: bottom;">Calendar &nbsp;&nbsp;&emsp;</h5>
      </li>
  </li>
    

       <li class="nav-item">
      	<li class="nav-item d-none d-sm-inline-block">
      		<br>
      		<br>
      		<br>
      		<h5 style="color: lightgreen; vertical-align: bottom;">Logout &nbsp;&nbsp;&emsp;</h5>
      </li>
  </li>
    
      <li class="nav-item">
        <br>
          <h2 style="color: white; vertical-align: bottom; font-size: 25px; font-family: candara" ><strong>Welcome <?php  echo $row['F_Name']; ?></strong></h2>

      	<li class="nav-item d-none d-sm-inline-block">

        <div class="image">

          <img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php 
                      echo $row['Roll_No']; ?>" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8" height="100px" width="100px">
         
        </div>
    </li>
</li>

  
    </ul>
  </nav>

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <br>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $row['_Marks_10th']; ?>%</h3>

                <p>Tenth Percentage</p>
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
                <h3><?php echo $row['_Marks_12th']; ?>%</h3>

                <p>Intermediate</p>
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
                <h3><?php echo $row['Aggregate_Graduation']; ?> (<?php echo $row['Pass_Category']; ?>)</h3>

                <p>B.Tech</p>
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
                  <div class="chart tab-pane active" id="revenue-chart"
                  style="position: absolute; height: 250px; width: 200px;">
                                    		<div id='myChart'></div>
	<script>ZC.LICENSE=["569d52cefae586f634c54f86dc99e6a9", "b55b025e438fa8a98e32482b5f768ff5"];var myConfig7 = {
  "type":"gauge",
  "scale-r":{
    "aperture":200,
    "values":"0:100:20",
    "center":{
      "size":5,
 	    "background-color":"#66CCFF #FFCCFF",
 	    "border-color":"none"
    },
    "ring":{
      "size":10,
      "rules":[
        {
          "rule":"%v >= 0 && %v <= 20",
 	        "background-color":"red"
        },
        {
          "rule":"%v >= 20 && %v <= 40",
 	        "background-color":"orange"
        },
        {
          "rule":"%v >= 40 && %v <= 60",
 	        "background-color":"yellow"
        },
        {
          "rule":"%v >= 60 && %v <= 80",
 	        "background-color":"green"
        },
        {
          "rule":"%v >= 80 && %v <=100",
          "background-color":"blue"
        }
      ]
    },
    "labels":["0","20","40","60","80","100"]  //Scale Labels
  },
  "plot":{
    "csize":"5%",
    "size":"100%",
    "background-color":"#000000"
  },
  "series":[
    {"values":[60]}
  ]
};

zingchart.render({ 
	id : 'myChart', 
	data : myConfig7, 
	height : "120%", 
	width: "100%"
});</script>           
                   </div>

                    <strong>
                    	<br/>
                    	<br/>
                    	<br/>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br><br><br><h2></h2>Description :
                    You are 60% suitable to the industry<br/> with
                    your current performance in all the tests<br/>
                    conducted by T&P.

                    </strong>

               </div>





                </div>

              </div><!-- /.card-body -->
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
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Analyst</div></strong>
                  </div>
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#29629F">

                    <strong><div style="color: #29629F">Customer & Sales Executive</div></strong>
                  </div>
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="40" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Graduate Engineer (Plant)  </div></strong>
                  </div>
              </div>
          </div>
           <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                   <input type="text" class="knob" data-readonly="true" value="70" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Graduate Engineer (R&D)</div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Network Engineer</div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" data-readonly="true" value="40" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Operations and Executive</div></strong>
                  </div>
              </div>
          </div>
          <div class="card-footer bg-transparent">
              <div class="row">
                  <!-- ./col -->
                  <div class="col-4 text-center">
                   <input type="text" class="knob" data-readonly="true" value="80" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                     <strong><div style="color: #29629F">Software Developer  </div></strong>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                    <strong><div style="color: #29629F">Software Engineer   </div></strong>
                  </div>
                  <div class="col-4 text-center">
                   <input type="text" class="knob" data-readonly="true" value="80" data-width="60" data-height="60"
                           data-fgColor="#29629F">
                   <strong><div style="color: #29629F">Software Tester</div></strong>
                  </div>
                  <!-- ./col -->
                 
                </div>
              </div>
                <!-- /.row -->
           <br> <br>

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
                  Cocubes Analysis
                </h3>
              </div>
               <div class="card-body">
                <div class="tab-content p-0">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                   <div id='myChart2020'></div>

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
      values : [59, 39, 38, 19, 21, 35, 80],
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
</div>
</div>
</div>
</div>


          <!-- ./col -->

          <!-- ./col -->

          <!-- ./col -->
        </div>











<section class="col-lg-6 connectedSortable">

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
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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
                <label for="" style="color: black">Total Number of Companies </label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">75</span>
            <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">

             <label for="" style="color: black">Number of Companies Elligible </label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">60</span>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
               <label for="" style="color: black">Number of Companies Attended</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">55</span>
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
                <label for="" style="color: black">Number of Companies Test Cleared</label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">15</span>
         <br>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
      
              <div class="inner">
               <label for="" style="color: black">Number of Companies GD Cleared </label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">10</span>
        
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <label for="" style="color: black">Number of Companies TR Cleared</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true">5</span>
         
            </div>
          </div>

           <div class="col-lg-4 col-6">
            <!-- small box -->
           
              <div class="inner">
                 <label for="" style="color: blue;">Number of Offers</label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true">2</span>
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
  </div>
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
                  <table class="table m-0">
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
                      <td>10/06/2019</td>
                      <td><img src="images/logos/ihs.png" alt="ms image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">IHS Markit</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">4.5 LPA</div>
                      </td>
                      <td><?php  echo $row9['Attendance']; ?></td>
    <td><?php  echo $row3['WTC']; ?></td>
    <td><?php  echo $row3['GDC']; ?></td>
    <td><?php  echo $row3['T_HR_Clear']; ?></td>
    <td><?php  echo $row3['Offers']; ?></td>

                    </tr>
                   <tr>
                      <td>20/07/2019</td>
                      <td><img src="images/logos/hashedin.jpg" alt="amazon image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-danger">Hashed IN</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                      <td><?php  echo $row2['WTA']; ?></td>
    <td><?php  echo $row2['WTC']; ?></td>
    <td><?php  echo $row2['GD']; ?></td>
    <td><?php  echo $row2['TR1A']; ?></td>
    <td><?php  echo $row2['TRC']; ?></td>

                    </tr>
                    <tr>
                      <td>31/07/2019</td>
                     <td><img src="images/logos/musigma.png" alt="google image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">Mu-Sigma</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                      <td>Y</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>
    <td>Yes</td>

                    </tr>
                   <tr>
                      <td>18/07/2019</td>
                      <td><img src="images/logos/tcs.jpg" alt="ibm image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">TCS Digital</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">7 LPA</div>
                      </td>
                     <td><?php  echo $row4['WTA']; ?></td>
    <td><?php  echo $row4['WTC']; ?></td>
    <td><?php  echo $row4['GD']; ?></td>
    <td><?php  echo $row4['TIC']; ?></td>
    <td><?php  echo $row4['TIC']; ?></td>
                    </tr>
                    <tr>
                      <td>23/07/2019</td>
                       <td><img src="images/logos/nineleaps.png" alt="netflix image" style="width:100px;height:100px;"></td>
                      <td><span class="badge badge-success">Nine Leaps</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">4.5 LPA</div>
                      </td>
                      <td><?php  echo $row6['Attended']; ?></td>
    <td><?php  echo $row6['WTC']; ?></td>
    <td><?php  echo $row6['ARC']; ?></td>
    <td><?php  echo $row6['TC']; ?></td>
    <td><?php  echo $row6['HRC']; ?></td>

                    </tr>
                    
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











  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

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
