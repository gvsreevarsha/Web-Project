<?php require('header.php');?> 
<?php require('header2.php');?> 
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script type="text/javascript">
      var expanded = false;
      function showCheckboxes(){
          var checkboxes = document.getElementById("checkboxes");
          if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
          }
          else {
            checkboxes.style.display = "none";
            expanded = false;
          }
      }
      function myFunction(x) {
                    var change = document.getElementById("select");
                        change.innerHTML = x;
      }
    </script>
    <style type="text/css">
      .right{
        float: right;
      }
      .dropbtn {
        color: white;
        font-size: 16px;
        border: none;
      }
      .dropdown {
        position: relative;
        display: inline-block;
      }
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        z-index: 1;
      }
      .dropdown-content form {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      .dropdown-content form:hover {background-color: #ddd;}
      .dropdown:hover .dropdown-content {display: block;}
    </style>
  </head>
  <body>
    <div class="container">
    <h2 class="col-xs-12">Manage students</h2><br>
    <div style="align-content: center; border: 1px solid black; background-color: #ffffff"  class="col-xs-11 col-xs-offset-1">
      <div class="col-xs-12">
        <form>
        <div class="col-xs-12"><h2>Search Filter</h2><span class="right">Total students:0</span></div>
        <h2 class="col-xs-12">Education Filter</h2>
        <hr>
        <table class="col-xs-12">
          <tr>
            <th class="col-xs-2">Degree</th>
            <th class="col-xs-4">Branch</th>
            <th class="col-xs-5">CGPA</th>
          </tr>
          <tr>
            <td>
              <div class="dropdown">
                <button class="dropbtn" id="select">Select</button>
                <div class="dropdown-content">
                  <button onclick="myFunction('Any')">Any</button>
                  <button onclick="myFunction('BTech')">BTech</button>
                  <button onclick="myFunction('MBA')">MBA</button>
                </div>
            </td>
            <td>
              <div class="dropdown">
                <button class="dropbtn">Select option</button>
                <div class="dropdown-content">
                  <form>
                    <label><input type="checkbox" name="CSE">Computer Science Engineering</label>
                    <label><input type="checkbox" name="CSE">Electronics and Communications Engineering</label>
                    <label><input type="checkbox" name="CSE">Mechanical Engineering</label>
                    <label><input type="checkbox" name="CSE">Civil Engineering</label>
                    <label><input type="checkbox" id="eee">Electrical and Electronics Engineering</label>
                    <label><input type="checkbox" id="Electrical">Electrical and Communications Engineering</label>
                    <label><input type="checkbox" id="automation">Automation and Robotics Engineering</label>
                  </form>
                </div>
              </div>
            </td>
            <td>
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                          <label for="cgpa-min"></label>
                          <input type="range" name="cgpa-min" id="cgpa-min" value="0" min="0" max="10" step="0.01">
                          <label for="cgpa-max"></label>
                          <input type="range" name="cgpa-max" id="cgpa-max" value="10" min="0" max="10" step="0.01">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
          </tr>
        </table>
        <h2 class="col-xs-12">Other Filter</h2>
        <hr>
        <table>
          <tr class="col-xs-12">
            <th class="col-xs-2">Batch</th>
            <td class="col-xs-2">
              <select name="Degree">
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select>
            </td>
            <th class="col-xs-2">Sort By</th>
            <td class="col-xs-2">
              <select name="Sortby">
                <option value="select">Select Sorting Order...</option>
                <option value="Name">Name</option>
                <option value="Branch">Branch</option>
                <option value="Rollno">Roll No</option>
                <option value="Institute">Institute marks</option>
                <option value="10th">10th Marks</option>
                <option value="12th">12th Marks</option>
                <option value="Last">Last Login</option>
                <option value="Gender">Gender</option>
              </select>
            </td>
            <th class="col-xs-2">Gender</th>
            <td class="col-xs-2">
              <select name="Gender">
                <option value="no">No Preference</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </td>
          </tr>
          <tr class="col-xs-12">
            <th class="col-xs-2">Jobs In Hand</th>
            <td class="col-xs-2">
              <select name="Eligible">
                <option value="no">No Preference</option>
                <option value="0">0 jobs</option>
                <option value="1"><=1 jobs</option>
                <option value="2"><=2 jobs</option>
                <option value="3"><=3 jobs</option>
                <option value="4"><=4 jobs</option>
              </select>
            </td>
            <td class="col-xs-8"></td>
          </tr>
        </table>
        <h2 class="col-xs-12">Advance Filter</h2>
        <hr>
        <table class="col-xs-12">
          <tr>
            <th class="col-xs-1">10<sup>th</sup> %</th>
            <td class="col-xs-5">
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                          <label for="10thper-min"></label>
                          <input type="range" name="10thper-min" id="10thper-min" value="0" min="0" max="100">
                          <label for="10thper-max"></label>
                          <input type="range" name="10thper-min" id="10thper-min" value="100" min="0" max="100">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
              <th class="col-xs-1">12<sup>th</sup> %</th>
            <td class="col-xs-5">
              <div>
                  <div data-role="main" class="ui-content">
                    <form method="post" action="/action_page_post.php">
                        <div data-role="rangeslider">
                          <label for="12thper-min"></label>
                          <input type="range" name="12thper-min" id="12thper-min" value="0" min="0" max="100">
                          <label for="12thper-max"></label>
                          <input type="range" name="12thper-min" id="12thper-min" value="100" min="0" max="100">
                        </div>
                      </form>
                    </div>
                  </div>
              </td>
          </tr>
          <tr>
            <th class="col-xs-1">Backlogs</th>
            <td class="col-xs-5">
              upto<input type="range" name="Backlogs" min="0" max="60">
              </td>
          </tr>
        </table>
        </div>
        <div class="col-xs-12">
        	<div class="col-xs-4"></div>
        	<div class="col-xs-4"><button type="submit">Submit</button></div>
        	<div class="col-xs-4"></div>
        </div>
      </form>
    </div>
    </div>
  </body>
</html>