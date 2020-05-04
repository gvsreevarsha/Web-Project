<?php require('header.php');?> 
<?php require('header2.php');?> 
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

$sql1="select * from cocubes where Roll_No='$name'";
                      $result1=mysqli_query($con,$sql1);
                      $resultCheck1=mysqli_num_rows($result1);
                      $row1=mysqli_fetch_assoc($result1);
$_SESSION['rollno'] = $row1['Roll_No'];

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement report</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Example of Bootstrap 3 One Column Grid Layout for All Devices</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
 .class1{
    border: 3px solid coral ;
  border-radius: 5px;
  padding: 12px;
  background-color: #E6E1DC ;
  height: 55px;
  width: 300px;
  
}

.collapsible {
 
  cursor: pointer;
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  
}
 .inlineTable {
            display: inline-block;
        }
.floatl
{
float: left;
}
.float2
{
 
  
}
.float3
{
float: right;
}
.fontT
{
font-size: 30px;

}
.fontu
{
font-size: 25px;
}
.fonti
{
font-size: 20px;
}
.table .down{
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

#customers tr:nth-child(even){background-color: white;}

#customers tr:nth-child(odd){background-color: white;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: white;
  color: black;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: white;
}

li {
  float: left;
}

li a {
  color: black;
  text-align: center;
  padding: 5px 14px;
  text-decoration: none;
}


.active {
  background-color: #4CAF50;
}

  
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <body>


<div class="container-fluid">
  <div class="container-fluid"> 
    <div class="row">
      
    </div>  
    </div>
  <br>  
  <div class="col-xs-12">
  <div class="col-xs-1"></div>
  <div class="col-xs-10">
    <div class="col-xs-7"><h3>Manage Individual Student</h3></div>
    <div class="col-xs-2"><a href="gb_dotp_Individual_admin.php"><button type="submit" class="btn btn-primary">Admin view</button></a></div>
    <div class="col-xs-1">&nbsp</div>
    <div class="col-xs-2"><a href="in1.php"><button type="submit" class="btn btn-primary">Dashboard view</button></a></div>
  </div>
  <div class="col-xs-1"></div>
</div>
<div class="col-xs-12">
  <div class="col-xs-1"></div>
  <div class="col-xs-10">
    <div class="col-xs-12" style="padding:5px; background-color:#4169E1; color: #ffffff;">Search Student</div>  
      <div class="col-xs-12">&nbsp</div>
      <div class="col-xs-12">
        <div class="col-xs-1">Batch:</div>
        <div class="dropdown col-xs-1">
              <select>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
              </select>
        </div>
        <div class="col-xs-4">
          <div class="col-xs-5">Search By:</div>
              <select class="col-xs-7">
                  <option value="name">Student Name</option>
                  <option value="rollno">Student Roll No</option>
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
    <div class="col-xs-1"></div>
  </div>
  <div class="col-xs-12">&nbsp</div>
  <div class="col-xs-12">
    <div class="col-xs-1"></div>
    <div class="col-xs-10">
      <div class="col-xs-12" style="padding:5px; background-color:#4169E1;  color: #ffffff;">Student Details</div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">Registration number </label>
           <span id="MainContent_lblgetregistrationnumber" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Roll_No']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Campus </label>
           <span id="MainContent_lblcampus" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Campus']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">College</label>
            <span id="MainContent_lblcollege" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['College']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Batch</label>
            <span id="MainContent_lblbatch" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Batch']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for=""style="color: black">Degree</label>
            <span id="MainContent_lbldegree" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Degree']; ?></span>
          </div>
<div class="form-group col-md-4">
<label for=""style="color: black">Program</label>
<span id="MainContent_lblcourse" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Program']; ?></span>
</div>
<div class="form-group col-md-4">
<label for="" style="color: black">Branch</label>
<span id="MainContent_lblbranch" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Branch']; ?></span>
</div>

<div class="form-group col-md-4">
<label for="" style="color: black">Semester</label>
<span id="MainContent_lblcurrsem" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Semester']; ?></span>

</div>
 <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br/>
            <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <a href="in1.php"><button type="submit" class="btn btn-primary">Go To DashBoard</button>
            </a></span>
          </div>
   


          </div>
         <div class="col-md-1">  <div class="col-md-gitam">
<img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php 
                      echo $row['Roll_No']; ?>" id="MainContent_img1" alt="Student Photo" class="photo img-responsive" height="200" width="150">
</div> </div>

                       
</div>


  </div>
  
  
  <br></br>

<br></br> 
      <div class="row">
          
   <div class="col-xs-10" style="padding-left:200px;">
          
          <div class="form-group col-md-4">
            <label for="" style="color: black">First name</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['F_Name']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Middle Name</label>
              <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true"><?php 
                      echo $row['M_Name']; ?></span>
                  </div>

           <div class="form-group col-md-4">
            <label for="" style="color: black">Last name</label>
           <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['L_Name']; ?></span>
          </div>
        
          <div class="form-group col-md-4">
            <label for="" style="color: black">Date of Birth</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Date_of_Birth']; ?></span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black">Gender</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Gender']; ?></span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">Blood Group</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Blood_Group']; ?></span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black">Nationality</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Nationality']; ?></span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black">Government ID number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Govt_ID']; ?></span>
          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: black">Father name</label>
            <span id="MainContent_lblfathername" class="form-control" style="color:black"  readonly="true">
              <?php 
                      echo $row['Father_Name']; ?>
            </span>
            
          </div>
               <div class="form-group col-md-4">
            <label for="" style="color: black">Mother name</label>
            <span id="MainContent_lblmothername" class="form-control" style="color:black"  readonly="true">
              <?php 
                      echo $row['Mother_Name']; ?>
            </span>
            
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">Reservaton Category</label>
            <span id="MainContent_lblreligion" class="form-control" style="color:black"  readonly="true">
              <?php 
                      echo $row['Reservation_Category']; ?>
            </span>
    </div>

  <!--  <div class="container">
<div class="login-box">
  <div class="row"> -->
 <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br/>
            <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <a href="home3.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>
   




          </div>
          </div>
          </div>
          </div>


         <br></br>
        
         <!-- Two -->


      <div class="row">
         <div class="col-md-10" style="padding-left:200px;">
          
<div class="form-group col-md-4">
            <label for="" style="color: black">Student Phone Number</label>
           <span id="MainContent_lblstudentfullname" class="form-control"style="color:black"  readonly="true"><?php 
                      echo $row['Mobile_Number']; ?></span>
          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: black">Student Email</label>
           <span id="MainContent_lblemail" class="form-control"style="color:black"  readonly="true"><?php 
                      echo $row['Email_ID']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black">Parent Email </label>
              <span id="MainContent_lblemail" class="form-control"style="color:black"  readonly="true">
                <?php 
                      echo $row['Parent_Mail_ID']; ?>
              </span>
           
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
      
               </div>

         <div class="form-group col-md-4">
            <label for="" style="color: black">Parent Number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true"><?php 
                      echo $row['Parent_Mobile_Number']; ?></span>
          </div>



          <div class="form-group col-md-4">
            <label for="" style="color: black">Land Mark</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
             <?php 
                      echo $row['LandMark']; ?>
           </span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black">District</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['District']; ?>
            </span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black">City</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['City']; ?>
            </span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black">State</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['State']; ?>
            </span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black">Country</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
             <?php 
                      echo $row['Country']; ?>
           </span>
          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: black">Pincode</label>
            <span id="MainContent_lblfathername" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['Pincode']; ?>
            </span>
            
          </div>
 <div class="form-group col-md-4">
            
          </div>

          <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br/>
            <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <a href="home4.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a></span>
          </div>
              
          </div>
                              
        <br></br>
  

<!-- Table2 -->
<p style="page-break-before: always">
      
<div class="container">
<button style="width: 20%"  class = "collapsible" name= "togglea" id= "togglea" onclick="myFunctiona()"><h4><b>Academic report Open</b></h4></button>
<div class = "content">

<div class="aspNetHidden">

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="7CED6252">
</div>
    <div class="wrapper">
        
   <div class="container">
   <br></br>
     <div class="form-group col-md-3">
            <label for="" style="color: black">SSC </label>
           <span id="MainContent_lblcampus" class="form-control" readonly="true"><?php 
                      echo $row['_Marks_10th']; ?></span>
          </div>
          <div class="form-group col-md-3">
            <label for="" style="color: black">Intermediate </label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true"><?php 
                      echo $row['_Marks_12th']; ?></span>
          </div>
       <div class="form-group col-md-3">
            <label for="" style="color: black">Engineering</label>
            <span id="MainContent_lblcollege" class="form-control" readonly="true"><?php 
                      echo $row['Aggregate_Graduation']; ?></span>
          </div>
           <div class="form-group col-md-3">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br>
 <a href="home5.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>
          <br></br>
                      <table class="table">

                                        <tbody><tr>
                                            <td>
                                                
                                                        <div id="accordion">
                                                            
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_0">1</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_0" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_0">EMA101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_0">Engineering Mathematics-I</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_0">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_0">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_0">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_0">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_1">EHS101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_1">Communicative English - I</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_1">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_1">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_1">B+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_1">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_1">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_2">EPH101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_2">Engineering Physics</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_2">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_2">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_2">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_2">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_2">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_3">ECY101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_3">Engineering Chemistry</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_3">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_3">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_3">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_3">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_4">EID101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_4">Programming with C</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_4">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_4">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_4">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_4">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_5">EEC101</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_5">Basic Electronics Engineering</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_5">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_5">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_5">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_5">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_5">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_6">EME123</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_6">Engineering Graphics</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_6">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_6">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_6">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_7">EID121</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_7">Programming with C Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_7">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_7">2016</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcode_8">ECY121</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubname_8">Engineering Chemistry Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubtype_8">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubcategory_8">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_credits_8">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblsubject_grade_8">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblmonth_8">November</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_0_lblyear_8">2016</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                            <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_1">2</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_1" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_0">EMA102</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_0">Engineering Mathematics-II</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_0">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_0">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_0">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_0">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_1">EHS102</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_1">Communicative English-II</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_1">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_1">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_1">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_1">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_1">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_2">EPH104</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_2">Solid State Physics</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_2">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_2">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_2">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_2">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_2">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_3">EID102</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_3">Data Structures with C</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_3">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_3">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_3">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_3">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_4">EID104</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_4">Fundamentals of Digital Logic Circuits</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_4">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_4">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_4">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_4">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_5">EME121</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_5">Workshop</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_5">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_5">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_5">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_5">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_5">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_6">EID122</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_6">Data Structures with C Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_6">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_6">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_6">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_7">EID124</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_7">Digital Circuits Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_7">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_7">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcode_8">EPH121</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubname_8">Engineering Physics Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubtype_8">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubcategory_8">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_credits_8">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblsubject_grade_8">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblmonth_8">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_1_lblyear_8">2017</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                     <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_2">3</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_2" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_0">EMA203</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_0">Probability and Statistics </span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_0">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_0">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_0">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_0">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_1">EID201</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_1">Object Oriented Programming with C++</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_1">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_1">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_1">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_1">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_1">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_2">EID203</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_2">Computer Organization and Architecture</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_2">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_2">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_2">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_2">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_2">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_3">EID205</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_3">Data Communications</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_3">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_3">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_3">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_3">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_4">ECS201</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_4">Programming Language Pragmatics</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_4">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_4">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_4">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_4">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_5">EID221</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_5">C++ Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_5">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_5">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_5">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_5">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_5">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_6">EID223</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_6">UNIX Programming Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_6">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_6">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_6">2017</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcode_7">ECS221</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubname_7">Computer Engineering Workshop</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblmonth_7">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_2_lblyear_7">2017</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                           <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_3">4</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_3" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_0">EMA208</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_0">Discrete Mathematical Structures</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_0">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_0">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_0">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_0">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_1">EOE202</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_1">German for Beginners</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_1">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_1">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_1">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_1">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_1">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_2">EHS201</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_2">Environmental Studies</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_2">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_2">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_2">B+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_2">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_2">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_3">EID202</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_3">Programming with JAVA</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_3">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_3">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_3">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_3">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_4">EID204</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_4">Operating Systems</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_4">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_4">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_4">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_4">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_5">EID206</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_5">Computer Networks</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_5">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_5">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_5">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_5">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_5">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_6">EID222</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_6">Programming with JAVA Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_6">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_6">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_6">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcode_7">EID224</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubname_7">Operating Systems Lab</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblmonth_7">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_3_lblyear_7">2018</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                            <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_4">5</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_4" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_0">EOE313</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_0">Professional Communication</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_0">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_0">B+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_0">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_0">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_1">EHS301</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_1">Engineering Economics and Management</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_1">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_1">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_1">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_1">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_1">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_2">EID301</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_2">Database Management Systems</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_2">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_2">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_2">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_2">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_2">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_3">EID303</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_3">Software Engineering</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_3">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_3">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_3">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_3">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_4">EID305</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_4">Design and Analysis of Algorithms</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_4">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_4">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_4">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_4">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_5">ECS301</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_5">Formal Languages and Automata Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_5">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_5">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_5">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_5">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_5">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_6">EID321</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_6">Database Management Systems Laboratory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_6">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_6">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_6">2018</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcode_7">ECS321</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubname_7">Unified Modeling Language Laboratory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblmonth_7">October</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_4_lblyear_7">2018</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                           <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        <h4 style="color: black">Semester -
                                                            <span id="ContentPlaceHolder1_ListView1_lblsem_5">6</span>


                                                        </h4>
                                                        <div class="g-card">
                                                        <div>
  <table class="table" cellspacing="0" rules="all" border="1" id="ContentPlaceHolder1_ListView1_GridView1_5" style="border-collapse:collapse;">
    <tbody><tr>
      <th scope="col">Course code</th><th scope="col">Course name</th><th scope="col">Course type</th><th scope="col">Course category</th><th scope="col">Credits</th><th scope="col">Grade</th><th scope="col">Month</th><th scope="col">Year</th>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_0">EID356</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_0">Data Mining and Data Warehousing</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_0">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_0">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_0">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_0">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_0">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_0">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_1">EID362</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_1">Mobile Computing</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_1">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_1">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_1">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_1">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_1">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_1">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_2">EHS304</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_2">Business Ethics and Corporate Governance</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_2">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_2">Elective</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_2">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_2">B+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_2">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_2">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_3">EID302</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_3">Web Technologies</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_3">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_3">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_3">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_3">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_3">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_3">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_4">ECS302</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_4">Artificial Intelligence</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_4">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_4">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_4">4</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_4">A+</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_4">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_4">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_5">ECS304</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_5">Compiler Design</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_5">Theory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_5">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_5">3</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_5">A</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_5">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_5">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_6">EID322</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_6">Web Technologies Laboratory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_6">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_6">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_6">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_6">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_6">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_6">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_7">ECS324</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_7">Compiler Design Laboratory</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_7">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_7">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_7">2</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_7">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_7">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_7">2019</span>
                                                                    </td>
    </tr><tr style="color:#000066;">
      <td>

                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcode_8">ECS392</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubname_8">Seminar</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubtype_8">Pratical</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubcategory_8">General</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_credits_8">1</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblsubject_grade_8">O</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblmonth_8">April</span>
                                                                    </td><td>
                                                                        <span id="ContentPlaceHolder1_ListView1_GridView1_5_lblyear_8">2019</span>
                                                                    </td>
    </tr>
  </tbody></table>
</div>


                                                             </div>
                                                              <div class="g-card1 text-center">
                                                                  
                                                                          <div class="t-details" style="color: black">
                                                                          <ul>
                                                                             <li><div>SGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsgpa_0">8.46</span> 
                                                                              
                                                                                  &emsp;&emsp;&emsp; CGPA : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcgpa_0">9.05</span>
                                                                             
                                                                                  &emsp;&emsp;&emsp; Semester grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblsem_credits_0">203</span>
                                                                             
                                                                            &emsp;&emsp;&emsp; Cumulative grade points : <span id="ContentPlaceHolder1_ListView1_ListView2_5_lblcum_credits_0">1321</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Semester credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label1_0">24</span>
                                                                             

                                                                                &emsp;&emsp;&emsp;  Cumulative credits : <span id="ContentPlaceHolder1_ListView1_ListView2_5_Label2_0">146</span>
                                                                                </div>
                                                                              
                                                                               
                                                                            
                                                                            </li> 
                                                                        
                                                                          </ul>
                                                       </div>
                                                           
                                                                          

                                                           

                                                                  </div>
                                                    
                                                        </div>
                                                    
                                            </td>

                                        </tr>
                                        </tbody></table>
                                     
                                    <br>
                                       
                                      </div>
                            
       
  <center> <button onclick="javascript: window.print();" class="btn btn-info text-center center-block print-btn">Print</button></center>
      </div>
    <br> <br>
         <a href="#" class="scrollToTop" style="display: none;"></a>

    </div>
    </form>

    </div>
    


</div>

<br></br>
<div class="container">
<button style="width: 20%"  class = "collapsible" name= "togglep" id= "togglep" onclick="myFunctionp()"><h4><b>CRT report Open</b></h4></button>

<div class = "content">

<h3 style="color: black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Training Attendance&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assessment Test Reports</h3>

<table align = "center" id="customers" class="inlineTable">

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
<td><?php  echo $row7['TT1_Total']; ?></td>
<td>COCUBES - DCT 1</td>
<td><?php  echo $row8['CRT_GT1']; ?></td>
<td><?php  echo $row8['GT1_rank']; ?></td>
</tr>
<tr>
<td>Technical Training 2</td>
<td><?php  echo $row7['TT2_Total']; ?></td>
<td>COCUBES - DCT 2</td>
<td><?php  echo $row8['CRT_GT2']; ?></td>
<td><?php  echo $row8['GT2_rank']; ?></td>
</tr>
<tr>
<td>Technical Training 3</td>
<td><?php  echo $row7['TT3_Total']; ?></td>
<td>COCUBES - Main</td>
<td><?php  echo $row1['PA1_Score800_PG']; ?></td>
<td>10</td>
</tr>
<tr>
<td>Technical Training 4</td>
<td><?php  echo $row7['TT4_Total']; ?></td>
<td>Technical-Assessment Test 1</td>
<td><?php  echo $row8['TT1_percentile']; ?></td>
<td><?php  echo $row8['TT1_rank']; ?></td>
</tr>
<tr>
<td>Technical Training 5</td>
<td><?php  echo $row7['TT5_Total']; ?></td>
<td>Technical-Assessment Test 2</td>
<td><?php  echo $row8['TT2_percentile']; ?></td>
<td><?php  echo $row8['TT2_rank']; ?></td></td>
</tr>
<tr>
<td>CRT 1</td>
<td><?php  echo $row7['CRT1_Total']; ?></td>
<td>Technical-Assessment Test 3</td>
<td><?php  echo $row8['TT3_percentile']; ?></td>
<td><?php  echo $row8['TT3_rank']; ?></td></td>
</tr>
<tr>
<td>CRT 2</td>
<td><?php  echo $row7['CRT2_Total']; ?></td>
<td>Technical-Assessment Test 4</td>
<td><?php  echo $row8['TT4_percentile']; ?></td>
<td><?php  echo $row8['TT4_rank']; ?></td></td>
</tr>
<tr>
<td>CRT 3</td>
<td><?php  echo $row7['CRT3_Total']; ?></td>
<td>Technical-Assessment Test 5</td>
<td><?php  echo $row8['TT5_percentile']; ?></td>
<td><?php  echo $row8['TT5_rank']; ?></td></td>
</tr>
<tr>
<th align="center" colspan="2">Mock 1</th>
  <td>CRT1-Assessment Test 1</td>
<td><?php  echo $row8['CRT_AT1']; ?></td>
<td><?php  echo $row8['AT1_rank']; ?></td>
</th>

</tr>
<tr>
<td><table><td>WT</td><td>Selected&nbsp;</td></table></td>
<td><table><td>GD</td><td>Selected&nbsp;</td></table></td>
<td>CRT1-Assessment Test 2</td>
<td><?php  echo $row8['CRT_AT2']; ?></td>
<td><?php  echo $row8['AT2_rank']; ?></td>
</tr>
<tr>
<td><table><td>TR</td><td>Selected&nbsp;</td></table></td>
<td><table><td>HR</td><td>Selected&nbsp;</td></table></td>
<td>CRT1-Assessment Test 3</td>
<td><?php  echo $row8['CRT_AT3']; ?></td>
<td><?php  echo $row8['AT3_rank']; ?></td>
</tr>
<tr>
<th align="center" colspan="2">Mock 2</th>
  <td>CRT2-Assessment Test 4</td>
<td><?php  echo $row8['CRT_AT4']; ?></td>
<td><?php  echo $row8['AT4_rank']; ?></td>
</th>

</tr>
<tr>
<td><table><td>WT</td><td>Selected&nbsp;</td></table></td>
<td><table><td>GD</td><td>Selected&nbsp;</td></table></td>
<td>CRT2-Assessment Test 5</td>
<td><?php  echo $row8['CRT_AT5']; ?></td>
<td><?php  echo $row8['AT5_rank']; ?></td>
</tr>
<tr>

<td><table><td>TR</td><td>Selected&nbsp;</td></table></td>
<td><table><td>HR</td><td>Rejected&nbsp;</td></table></td>
<td>CRT2-Assessment Test 6</td>
<td><?php  echo $row8['CRT_AT6']; ?></td>
<td><?php  echo $row8['AT6_rank']; ?></td>
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
 <a href="home6.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>
          <br>

<h3 style="color: black" align="center">Cocubes DCT Marks Analysis</h3>
<table align="center" id="customers">
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
     <td><?php  echo $row1['DCT1_ART_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_PG']; ?></td>
     <td><?php  echo $row1['DCT2_ART_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_PG']; ?></td>
  </tr>
   <tr>
     <td>1.Logical Reasoning(LR) </td>
     <th>15</th>
     <td><?php  echo $row1['DCT1_ART_LR_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_LR']; ?></td>
     <td><?php  echo $row1['DCT2_ART_LR_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_LR']; ?></td>
  </tr>
  
  
   <tr>
     <td>2.Critical Reasoning(CR) </td>
     <th>12</th>
     <td><?php  echo $row1['DCT1_ART_CR_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_CR']; ?></td>
     <td><?php  echo $row1['DCT2_ART_CR_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_CR']; ?></td>
  </tr>
   <tr>
     <td>3.Flow Chart & Visual Reasoning(FV)</td>
     <th>10</th>
     <td><?php  echo $row1['DCT1_ART_FVR_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_FVR']; ?></td>
     <td><?php  echo $row1['DCT2_ART_FVR_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_FVR']; ?></td>
  </tr>
   <tr>
     <td>4.Odd one out & Analogies(OA) </td>
     <th>6</th>
     <td><?php  echo $row1['DCT1_ART_OOA_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_OOA']; ?></td>
     <td><?php  echo $row1['DCT2_ART_OOA_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_OOA']; ?></td>
  </tr>
   <tr>
     <td>5.Series & Coding decoding (SC)</td>
     <th>7</th>
     <td><?php  echo $row1['DCT1_ART_SCD_M']; ?></td>
     <td><?php  echo $row1['DCT1_ART_SCD']; ?></td>
     <td><?php  echo $row1['DCT2_ART_SCD_M']; ?></td>
     <td><?php  echo $row1['DCT2_ART_SCD']; ?></td>
  </tr>
   <tr>
     <td><b>II.English Usage Test(EUT)</b></td>
     <th>50</th>
     <td><?php  echo $row1['DCT1_EUT_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_PG']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_PG']; ?></td>
  </tr>
   <tr>
     <td>1.Articles Prepositions and Voice(APV)</td>
     <th>9</th>
     <td><?php  echo $row1['DCT1_EUT_APV_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_APV']; ?></td>
    <td><?php  echo $row1['DCT2_EUT_APV_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_APV']; ?></td>
  </tr>
   <tr>
     <td>2.Phrases Idioms and Sequencing(PIS)</td>
     <th>6</th>
     <td><?php  echo $row1['DCT1_EUT_PIS_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_PIS']; ?></td>
      <td><?php  echo $row1['DCT2_EUT_PIS_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_PIS']; ?></td>
  </tr>
   <tr>
     <td>3.Reading Comprehension(RC)</td>
     <th>10</th>
     <td><?php  echo $row1['DCT1_EUT_RC_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_RC']; ?></td>
    <td><?php  echo $row1['DCT2_EUT_RC_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_RC']; ?></td>
  </tr>
   <tr>
     <td>4.Sentence Correction and Speech(SCS)</td>
     <th>14</th>
     <td><?php  echo $row1['DCT1_EUT_SCS_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_SCS']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_SCS_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_SCS']; ?></td>
  </tr>
   <tr>
     <td>5.Synonyms,Antonyms & Spellings(SAS) </td>
     <th>11</th>
     <td><?php  echo $row1['DCT1_EUT_SAA_M']; ?></td>
     <td><?php  echo $row1['DCT1_EUT_SAA']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_SAA_M']; ?></td>
     <td><?php  echo $row1['DCT2_EUT_SAA']; ?></td>
  </tr>
   <tr>
     <td><b>III.Quantitative Aptitude Test(QAT)</b></td>
     <th>50</th>
     <td><?php  echo $row1['DCT1_QAT_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_PG']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_PG']; ?></td>
  </tr>
   <tr>
     <td>1.Speed Distance Time and Work(SDTW)</td>
     <th>5</th>
     <td><?php  echo $row1['DCT1_QAT_SDTW_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_SDTW']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_SDTW_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_SDTW']; ?></td>
  </tr>
   <tr>
     <td>2.Profit Loss and Interest(PLI) </td>
     <th>6</th>
     <td><?php  echo $row1['DCT1_QAT_PLI_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_PLI']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_PLI_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_PLI']; ?></td>
  </tr>
   <tr>
     <td>3.Ratio and Percentage(RPP) </td>
     <th>11</th>
     <td><?php  echo $row1['DCT1_QAT_RPP_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_RPP']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_RPP_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_RPP']; ?></td>
  </tr>
   <tr>
     <td>4.Number System and Algebra(NSA)</td>
     <th>8</th>
     <td><?php  echo $row1['DCT1_QAT_NAE_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_NAE']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_NAE_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_NAE']; ?></td>
  </tr>
   <tr>
     <td>5.Geometry and Mensuration(GM) </td>
     <th>7</th>
     <td><?php  echo $row1['DCT1_QAT_GMT_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_GMT']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_GMT_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_GMT']; ?></td>
  </tr>
   <tr>
     <td>6.Statistics and Probability(SP) </td>
     <th>5</th>
     <td><?php  echo $row1['DCT1_QAT_ST_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_STA']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_ST_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_ST']; ?></td>
  </tr>
   <tr>
     <td>7.Data Interpretation(DI)</td>
     <th>8</th>
     <td><?php  echo $row1['DCT1_QAT_DI_M']; ?></td>
     <td><?php  echo $row1['DCT1_QAT_DI']; ?></td>
    <td><?php  echo $row1['DCT2_QAT_DI_M']; ?></td>
     <td><?php  echo $row1['DCT2_QAT_DI']; ?></td>
  </tr>
   <tr>
     <td><b>IV.Employability Aptitude Test(EAT)</b></td>
     <th>60</th>
     <td><?php  echo $row1['DCT1_EAT_M']; ?></td>
     <td><?php  echo $row1['DCT1_EAT_PG']; ?></td>
    <td><?php  echo $row1['DCT2_EAT_M']; ?></td>
     <td><?php  echo $row1['DCT2_EAT_PG']; ?></td>
  </tr>
   <tr>
     <td>1. English(E) </td>
     <th>20</th>
     <td><?php  echo $row1['DCT1_EAT_EU_M']; ?></td>
     <td><?php  echo $row1['DCT1_EAT_EU']; ?></td>
    <td><?php  echo $row1['DCT2_EAT_EU_M']; ?></td>
     <td><?php  echo $row1['DCT2_EAT_EU']; ?></td>
  </tr>
   <tr>
     <td>2. Quantitative(Q)</td>
     <th>20</th>
     <td><?php  echo $row1['DCT1_EAT_NA_M']; ?></td>
     <td><?php  echo $row1['DCT1_EAT_NA']; ?></td>
    <td><?php  echo $row1['DCT2_EAT_NA_M']; ?></td>
     <td><?php  echo $row1['DCT2_EAT_NA']; ?></td>
  </tr>
   <tr>
     <td>3. Reasoning(R) </td>
     <th>20</th>
     <td><?php  echo $row1['DCT1_EAT_AR_M']; ?></td>
     <td><?php  echo $row1['DCT1_EAT_AR']; ?></td>
    <td><?php  echo $row1['DCT2_EAT_AR_M']; ?></td>
     <td><?php  echo $row1['DCT2_EAT_AR']; ?></td>
  </tr>
   <tr>
     <td>V.Domain</td>
     <th>30</th>
     <td><?php  echo $row1['DCT1_DOM_M']; ?></td>
     <td><?php  echo $row1['DCT1_DOM_PG']; ?></td>
   <td><?php  echo $row1['DCT2_DOM_M']; ?></td>
     <td><?php  echo $row1['DCT2_DOM_PG']; ?></td>
  </tr>
   <tr>
     <td><b>V.Coding(C)</b> </td>
     <th>50</th>
     <td><?php  echo $row1['DCT1_CD_M']; ?></td>
     <td><?php  echo $row1['DCT1_CD_PG']; ?></td>
    <td><?php  echo $row1['DCT2_CD_M']; ?></td>
     <td><?php  echo $row1['DCT2_CD_PG']; ?></td>
  </tr>
   <tr>
     <td>1.Programming 1(P1)</td>
     <th>20</th>
     <td></td>
     <td></td>
   <td></td>
   <td></td>
  </tr>
    <tr>
     <td>2.Programming 2(P2)</td>
     <th>30</th>
     <td></td>
     <td></td>
   <td></td>
   <td></td>
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
 <a href="home7.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>
          <br>
          <br>

       

      

<h3 style="color: black" align="center">Cocubes Plagarism Analysis</h3>
<table align="center" id="customers">
  <col width="390">
  <col width="120">
    <col width="120">
    <col width="120">
      <col width="120">
      <col width="120">
        <col width="120">
  <tr align = "center">
     <th align = "center">Test Name</th>
     <th>Time Taken(Before)</th>
     <th>Switch Count(Before)</th>
     <th>Switch Time(Before)</th>
   <th>Time Taken(After)</th>
   <th>Switch Count(After)</th>
   <th>Switch Time(After)</th>
  </tr>
   <tr>
     <td><b>I.Analytical Reasoning Test(ART)</b></td>
   <td><?php  echo $row1['DCT1_ART_Time']; ?></td>
   <td><?php  echo $row1['DCT1_ART_SC']; ?></td>
   <td><?php  echo $row1['DCT1_ART_ST']; ?></td>
   <td><?php  echo $row1['DCT1_ART_Time']; ?></td>
   <td><?php  echo $row1['DCT1_ART_SC']; ?></td>
   <td><?php  echo $row1['DCT1_ART_ST']; ?></td>
  </tr>
   <tr>
     <td>1.Logical Reasoning(LR) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
  

   <tr>
     <td>2.Critical Reasoning(CR) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>3.Flow Chart & Visual Reasoning(FV)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>4.Odd one out & Analogies(OA) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>5.Series & Coding decoding (SC)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td><b>II.English Usage Test(EUT)</b></td>
   <td><?php  echo $row1['DCT1_EUT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_EUT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_EUT_ST']; ?></td>
   <td><?php  echo $row1['DCT1_EUT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_EUT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_EUT_ST']; ?></td>
  </tr>
   <tr>
     <td>1.Articles Prepositions and Voice(APV)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>2.Phrases Idioms and Sequencing(PIS)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>3.Reading Comprehension(RC)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>4.Sentence Correction and Speech(SCS)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>5.Synonyms,Antonyms & Spellings(SAS) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td><b>III.Quantitative Aptitude Test(QAT)</b></td>
   <td><?php  echo $row1['DCT1_QAT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_QAT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_QAT_ST']; ?></td>
   <td><?php  echo $row1['DCT1_QAT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_QAT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_QAT_ST']; ?></td>
  </tr>
   <tr>
     <td>1.Speed Distance Time and Work(SDTW)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>2.Profit Loss and Interest(PLI) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>3.Ratio and Percentage(RP) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>4.Number System and Algebra(NSA)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>5.Geometry and Mensuration(GM) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>6.Statistics and Probability(SP) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>7.Data Interpretation(DI)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td><b>IV.Employability Aptitude Test(EAT)</b></td>
   <td><?php  echo $row1['DCT1_EAT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_EAT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_EAT_ST']; ?></td>
   <td><?php  echo $row1['DCT1_EAT_Time']; ?></td>
   <td><?php  echo $row1['DCT1_EAT_SC']; ?></td>
   <td><?php  echo $row1['DCT1_EAT_ST']; ?></td>
  </tr>
   <tr>
     <td>1. English(E) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>2. Quantitative(Q)</td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>3. Reasoning(R) </td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
   <tr>
     <td>V.Domain</td>
   <td><?php  echo $row1['DCT1_DOM_Time']; ?></td>
   <td><?php  echo $row1['DCT1_DOM_SC']; ?></td>
   <td><?php  echo $row1['DCT1_DOM_ST']; ?></td>
   <td><?php  echo $row1['DCT1_DOM_Time']; ?></td>
   <td><?php  echo $row1['DCT1_DOM_SC']; ?></td>
   <td><?php  echo $row1['DCT1_DOM_ST']; ?></td>
  </tr>
   <tr>
     <td><b>V.Coding(C)</b> </td>
   <td><?php  echo $row1['DCT1_CD_Time']; ?></td>
   <td><?php  echo $row1['DCT1_CD_SC']; ?></td>
   <td><?php  echo $row1['DCT1_CD_ST']; ?></td>
   <td><?php  echo $row1['DCT1_CD_Time']; ?></td>
   <td><?php  echo $row1['DCT1_CD_SC']; ?></td>
   <td><?php  echo $row1['DCT1_CD_ST']; ?></td>
  </tr>
   <tr>
     <td>1.Programming 1(P1)</td>
     <td></td>
     <td></td>
     <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
    <tr>
     <td>2.Programming 2(P2)</td>
     <td></td>
     <td></td>
     <td></td>
   <td></td>
   <td></td>
   <td></td>
  </tr>
  
  
      </table>
       
  <br></br>

      
      <center>
<div id="chartContainer" style="height: 700px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</center>
<br><br>


<table align="center" id="customers">
   <col width="100">
    <col width="60">
     <col width="100">
     <col width="60">
   <tr>
   <td><h3> Overall Score (800) </h3></td>
     
     
     <td><h2><?php  echo $row1['PA1_Score800']; ?></h2></td>
     
     
     <td>
     <h3> Percentage </h3> </td>
    
     
     <td><h2><?php  echo $row1['PA1_Score800_PG']; ?></h2></td>
     
     
     
     </tr>
     </table>
     
     
     
    <p> <h3 style="color: black"> Note: < 480 Poor (<60%) || 481 to 599 Average ( 60 -75%) || > 600 Good (>75%) </h3></p>
<table align="center" id="customers">
  <col width="100">
  <col width="60">
    <col width="20">
    <col width="60">
     

  <tr align = "center">

     <th>Module</th>
   <th>% of Marks</th>
  
  </tr>
   <tr>
     <td>Over all</td>
     <td><?php  echo $row1['PA1_Score800_PG']; ?></td>
   

  </tr>
   <tr>
     <td>Aptitude </td>
     <td><?php  echo $row1['PA1_Aptitude']; ?></td>
   

  </tr>
  
   <tr>
     <td>English</td>
     <td><?php  echo $row1['PA1_English']; ?></td>
   

  </tr>  <tr>
     <td>Quantative</td>
     <td><?php  echo $row1['PA1_Quantitative']; ?></td>
   

  </tr>
   <tr>
     <td>Analytical </td>
     <td><?php  echo $row1['PA1_Analytical']; ?></td>
   

  </tr>
  
   <tr>
     <td>Domain</td>
     <td><?php  echo $row1['PA1_Domain']; ?></td>
 
  </tr>
    <tr>
     <td>Computer Fundamental</td>
     <td><?php  echo $row1['PA1_Computer_Fundamental']; ?></td>
   
  


  </tr>
   <tr>
     <td>Coding </td>
     <td><?php  echo $row1['PA1_Coding']; ?></td>
   

  </tr>
  
   <tr>
     <td> Written English</td>
     <td><?php  echo $row1['PA1_Written_English']; ?></td>
   
  
  </tr>
</table>


<br></br>

  
      
     
<table align="center" id="customers">
  <col width="100">
 
    <col width="20">
    <col width="60">
     

  <tr align = "center">

    
     <th>Job role </th>
   <th>Fitness Status</th>
  
  </tr>
   <tr>
  
     <td>Software Developer</td>
     <td><?php  echo $row1['PA1_Software_Developer']; ?></td>
   

  </tr>
   <tr>
    
     <td>Customer Service Executive</td>
     <td><?php  echo $row1['PA1_Customer_Service_Executive']; ?></td>
   

  </tr>
  
   <tr>
     <td>Analyst</td>
     <td><?php  echo $row1['PA1_Analyst']; ?></td>
     
   

  </tr>  <tr>
     <td>Software Engineer </td>
     <td><?php  echo $row1['PA1_Software_Engineer']; ?></td>
     
   

  </tr>
   <tr>
     <td>Operations Executive </td>
     <td><?php  echo $row1['PA1_Operations_Executive']; ?></td>
    
   

  </tr>
  
   <tr>
     <td>Software Tester </td>
     <td><?php  echo $row1['PA1_Software_Tester']; ?></td>
     
 
  </tr>
    <tr>
     <td>Network Engineer </td>
     <td><?php  echo $row1['PA1_Network_Engineer']; ?></td>
    
   
  


  </tr>
   <tr>
     <td>Sales Executive</td>
     <td><?php  echo $row1['PA1_Sales_Executive']; ?></td>
     
   

  </tr>
  
   <tr>
     <td> Graduate Engineer (Plant) </td>
     <td><?php  echo $row1['PA1_Graduate_Engineer_Plant']; ?></td>
   
   
  
  </tr>
   <tr>
     <td> Graduate Engineer (R and D) </td>
     <td><?php  echo $row1['PA1_Graduate_Engineer_RD']; ?></td>
     
   
  
  </tr>
  
  
</table>

 <center><br/><br/> <button onclick="javascript: window.print();" class="btn btn-info text-center center-block print-btn">Print</button></center>

 </div>
 </div>
 <br/>
 <br/>
</p>
</div>


 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  exportEnabled: true,
  theme: "light1", // "light1", "light2", "dark1", "dark2"
  title:{
    text: "Cocubes Pre-assessment Analysis"
  },
  data: [{
    type: "column", //change type to bar, line, area, pie, etc
    //indexLabel: "{y}", //Shows y value on all Data Points
    indexLabelFontColor: "#5A5757",
    indexLabelPlacement: "outside",
    dataPoints: [
      
      { x: 1, y: 50 },
      { x: 2, y: 90 },
      { x: 3, y: 80 },
      { x: 4, y: 30 },
      { x: 5, y: 90 },
      { x: 6, y: 23 },
      { x: 7, y: 45 },
      { x: 8, y: 55 },

    ]
  }]
});
chart.render();

}
</script>


<script>
   
var coll = document.getElementsByClassName("collapsible");
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
                   function myFunction2() {
                    var change = document.getElementById("toggle2");
                    if (change.innerHTML == "<h4><b>Contact details open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Contact details close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Contact details open</b></h4>";
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
         function myFunctionp() {
                    var change = document.getElementById("togglep");
                    if (change.innerHTML == "<h4><b>CRT report Open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>CRT report Close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>CRT report Open</b></h4>";
                    }
                }
            function myFunctioni() {
                    var change = document.getElementById("togglei");
                    if (change.innerHTML == "<h4><b>Placement report open</b></h4>")
                    {
                        change.innerHTML = "<h4><b>Placement report close</b></h4>";
                    }
                    else {
                        change.innerHTML = "<h4><b>Placement report open</b></h4>";
                    }
                }


function PrintFunction() {
  window.print();
}

</script>
    </div>
    <div class="col-xs-1"></div>
  </div> 
  </body>
</html>            
       