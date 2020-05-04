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
    <div class="col-xs-2"><a href="index-2.php"><button type="submit" class="btn btn-primary">Admin view</button></a></div>
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
    <div class="col-xs-1"></div>
  </div>
  <div class="col-xs-12">&nbsp</div>
  <div class="col-xs-12">
    <div class="col-xs-1"></div>
    <div class="col-xs-10">
      <div class="col-xs-12" style="padding:5px; background-color:#4169E1;  color: #ffffff;">Student Details</div>
	  </br></br>
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

   


          </div>
         <div class="col-md-1">  <div class="col-md-gitam">
<img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php 
                      echo $row['Roll_No']; ?>" id="MainContent_img1" alt="Student Photo" class="photo img-responsive" height="200" width="150">
</div> </div>

                       
</div>


  </div>
<div class="container">
<button style=" background-color:#4169E1;  color: #ffffff;"  class = "col-xs-12 collapsibl" name= "toggle1" id= "toggle1" onclick="myFunction1()"><h4><b>Personal details open</b></h4></button>
<div class = "content">

 
   <br></br>


     <div class="col-xs-12" style="padding:5px; background-color:#4169E1;  color: #ffffff;">Personal details </div>
         <br></br> 

          
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


 <div class="form-group col-md-4">
          <!--  <span id="MainContent_lblfathername" class="form-control" readonly="true"> -->
            <br/>
            <br/>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
 <a href="home3.php"><button type="submit" class="btn btn-primary">UPDATE</button>
            </a>
          </div>


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

          
          
      


          





</div>

</div>






      





          


    
        
         <!-- Two -->


     
  

<!-- Table2 -->
<p style="page-break-before: always">
      
<div class="container">
<button style="width: 100%"  class = "collapsible" name= "togglea" id= "togglea" onclick="myFunctiona()"><h4><b>Academic report Open</b></h4></button>
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


</div>

</div>
</div>

</div>
<br></br>


<!--comment end-->
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
   
    <div class="col-xs-1"></div>
 
  </body>
</html>            
       