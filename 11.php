

<!DOCTYPE html>
<html lang="en">
<head>
<title>Placement report</title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

.collapsible {
 
  cursor: pointer;
}

.content {
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
</head>

 <body>

  

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
         
       