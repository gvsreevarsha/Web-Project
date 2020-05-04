<?php require('header.php');?> 
<?php require('header2.php');?> 
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
<title>Admin-Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <body>

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
    
</div>
<form action="in.php" method="post">
<div class="col-xs-12">
    <div class="col-xs-12" style="padding:5px; background-color:#4169E1; color: #ffffff;">Search Student</div>  
      <div class="col-xs-12">&nbsp</div>
      <div class="col-xs-12">
        <div class="col-xs-1">Batch:</div>
        <div class="dropdown col-xs-1">
             <select name="year">
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
              </select>
        </div>
        <div class="col-xs-4">
          <div class="col-xs-5">Search By:</div>
              <select class="col-xs-7" name="student">
                  <option value="name">Student Roll No</option>
                  <option value="rollno">Student Name</option>
              </select>
        </div>
          <div class="col-xs-6">
              <input class="col-xs-7" type="text" placeholder="Enter the Roll no:" name="user">
              <div class="col-xs-1"></div>
              <input type="submit" name="formSubmit" class="btn btn-primary" value="submit">
              
          </div>
        </div>
    </div>
    <div class="col-xs-1"></div>
  </div>
</div>
</form>