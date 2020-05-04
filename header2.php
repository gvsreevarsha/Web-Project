<head>
	<style type="text/css">
	.dropbtn {
        font-size: 16px;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
      }
      .navtop{
      	color: white;
      }
      .dropdown-content ul li:hover {background-color: #eeeeee;}
      .dropdown:hover .dropdown-content {display: block;}
</style>
</head>
<body>
 <div class="container2">
	<div class="col-xs-12">&nbsp;</div>
	<div class="col-xs-12">
		<div class="col-xs-1"></div>
		<div class="table1" class="col-xs-10">
			<table class="col-xs-11 col-xs-offset-1 tab1"> 
				<tr>
					<td rowspan="4" class="col-xs-1"><img src="pic1.jpg" width="100%"></td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>
				<tr style="background-color: #999999">
					<td class="col-xs-6" style="color: white;">Dr.Kishore Buddha</td>
					<td class="col-xs-1 navtop">
						<div class="dropdown">
                			<div class="dropbtn" id="select" style="color: white;">Manage</div>
                			<div class="dropdown-content">
                				<ul type="none" style="padding-left: 0; width:200px; background-color: #eeeeee; display: inline-block;">
                					<li onclick="myFunction('All')"><a href="gb_dotp_All_admin.php" style="color: black;">All Students</a></li>
                  					<li onclick="myFunction('Individual')"><a href="gb_dotp_Individual_admin_head.php" style="color: black;">Individual</a></li>
                  					<li onclick="myFunction('New Student')"><a href="" style="color: black;">New Student</a></li>
                				</ul>
                  			</div>
                		</div>
                	</td>
					<td class="col-xs-1 navtop"><a href="" style="color: white;">Statistics</a></td>
					<td class="col-xs-1 navtop"><a href="pages/calendar.html" style="color: white;">Calendar</a></td>
				</tr>
				<tr>
					<td colspan="4">
						<div class="col-xs-7">Designation: Placement Director</div>
						<div>Mobile:+91-9701516999 &nbsp; &nbsp; Email:gitamblr.tpo@gitam.in</div>
					</td>
				</tr>
        		<tr> 
        			<td colspan="4">
            		<div class="col-xs-7">&nbsp</div>
            		</td>
        		</tr>
			</table>
		</div>
		<div class="col-xs-1"></div>
	</div>
</div>
<div class="col-xs-12">&nbsp;</div>
