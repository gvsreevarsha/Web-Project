<?php require('header.php');?>
<head>
  <title>Manage Individually</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head> 
<?php require('header2.php');?>
<body>
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
        	   	<input type="text" placeholder="Enter the Roll no" name="search"><br/>
	      </div>
    </div>
</div>
</div>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
  <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="#demo">Submit</button></div>
  <div id="demo" class="collapse">
    <div class="row">
          <div class="col-md-10" style="padding-left:200px;">
              <div class="form-group col-md-4">
            <label for="" style="color: black;">Registration number </label>
           <span id="MainContent_lblgetregistrationnumber" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Roll_No']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Campus </label>
           <span id="MainContent_lblcampus" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Campus']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black;">College</label>
            <span id="MainContent_lblcollege" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['College']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Batch</label>
            <span id="MainContent_lblbatch" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Batch']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for=""style="color: black;">Degree</label>
            <span id="MainContent_lbldegree" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Degree']; ?></span>
          </div>
<div class="form-group col-md-4">
<label for=""style="color: black;">Program</label>
<span id="MainContent_lblcourse" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Program']; ?></span>
</div>
<div class="form-group col-md-4">
<label for="" style="color: black;">Branch</label>
<span id="MainContent_lblbranch" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Branch']; ?></span>
</div>

<div class="form-group col-md-4">
<label for="" style="color: black;">Semester</label>
<span id="MainContent_lblcurrsem" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Semester']; ?></span>

</div>

          </div>
         <div class="col-md-2">  <div class="col-md-gitam">
<img src="https://doeresults.gitam.edu/gitamhallticket/img.aspx?id=<?php 
                      echo $row['Roll_No']; ?>" id="MainContent_img1" alt="Student Photo" class="photo img-responsive" height="200" width="150">
</div> </div>

                         
</div>

  
  
  
  <br></br>

<br></br> 
      <div class="row">
          
   <div class="col-md-10" style="padding-left:200px;">
          
          <div class="form-group col-md-4">
            <label for="" style="color: black;">First name</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['F_Name']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Middle Name</label>
              <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true"><?php 
                      echo $row['M_Name']; ?></span>
                  </div>

           <div class="form-group col-md-4">
            <label for="" style="color: black;">Last name</label>
           <span id="MainContent_lblstudentfullname" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['L_Name']; ?></span>
          </div>
        
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Date of Birth</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Date_of_Birth']; ?></span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black;">Gender</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Gender']; ?></span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black;">Blood Group</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Blood_Group']; ?></span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black;">Nationality</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Nationality']; ?></span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black;">Government ID number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black"  readonly="true"><?php 
                      echo $row['Govt_ID']; ?></span>
          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: black;">Father name</label>
            <span id="MainContent_lblfathername" class="form-control" style="color:black"  readonly="true">
              <?php 
                      echo $row['Father_Name']; ?>
            </span>
            
          </div>
               <div class="form-group col-md-4">
            <label for="" style="color: black;">Mother name</label>
            <span id="MainContent_lblmothername" class="form-control" style="color:black"  readonly="true">
              <?php 
                      echo $row['Mother_Name']; ?>
            </span>
            
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black;">Reservaton Category</label>
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
            </a></span>
          </div>
   




          </div>
         
          </div>


         <br></br>
        
         <!-- Two -->


      <div class="row">
         <div class="col-md-10" style="padding-left:200px;">
          
<div class="form-group col-md-4">
            <label for="" style="color: black;">Student Phone Number</label>
           <span id="MainContent_lblstudentfullname" class="form-control"style="color:black"  readonly="true"><?php 
                      echo $row['Mobile_Number']; ?></span>
          </div>
          
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Student Email</label>
           <span id="MainContent_lblemail" class="form-control"style="color:black"  readonly="true"><?php 
                      echo $row['Email_ID']; ?></span>
          </div>
          <div class="form-group col-md-4">
            <label for="" style="color: black;">Parent Email </label>
              <span id="MainContent_lblemail" class="form-control"style="color:black"  readonly="true">
                <?php 
                      echo $row['Parent_Mail_ID']; ?>
              </span>
           
                                  
            <!--          <span id="MainContent_RequiredFieldValidator6" style="color:Red;display:none;">* Select date</span>-->
      
               </div>

         <div class="form-group col-md-4">
            <label for="" style="color: black;">Parent Number</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true"><?php 
                      echo $row['Parent_Mobile_Number']; ?></span>
          </div>



          <div class="form-group col-md-4">
            <label for="" style="color: black;">Land Mark</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
             <?php 
                      echo $row['LandMark']; ?>
           </span>
          </div>
       <div class="form-group col-md-4">
            <label for="" style="color: black;">District</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['District']; ?>
            </span>
          </div>
      <div class="form-group col-md-4">
            <label for="" style="color: black;">City</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['City']; ?>
            </span>
          </div>
         
      <div class="form-group col-md-4">
            <label for="" style="color: black;">State</label>
            <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
              <?php 
                      echo $row['State']; ?>
            </span>
          </div>

            <div class="form-group col-md-4">
            <label for="" style="color: black;">Country</label>
           <span id="MainContent_lblemail" class="form-control" style="color:black" readonly="true">
             <?php 
                      echo $row['Country']; ?>
           </span>
          </div>
          
              <div class="form-group col-md-4">
            <label for="" style="color: black;">Pincode</label>
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
  
  </div>
   </div>

</div>
      		<hr/>
  			
</body>
</html>