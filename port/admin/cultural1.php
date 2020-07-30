<!DOCTYPE html>
<html lang="en">
<head> 
    <title> Admin Student info with table </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="ad_student_t.css" rel="stylesheet">
    <!--link href="bgtest.css" rel="stylesheet"-->
    <link href="main.css" rel="stylesheet">
    <link href="util.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="#"><img src="logo-1-RAIT.png" alt="RAIT Logo" height= 50px width= auto title="Go to the RAIT website"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Search Student
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href=#>Cultural</a>
                  <a class="dropdown-item" href="sports.php">Sports</a>
                </div>
            </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                  Update List
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="cultural_list.php">Cultural Events</a>
                  <a class="dropdown-item" href="Sports_list.php">Sports Events</a>
                </div>
              </li>  
          </ul>
          <!--ul class="navbar-nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
          </ul-->
        </div>  
      </nav>
    <div class="container">
    <div class="header"><p>Gap</p></div>
    <br>
    <br>
    <form action="excel1.php" method="post">
    <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-2">
            <div class="name">YEAR</div>
            <div class="value">
                <select name="year" id="year">
                    <option value="2018-19">2018-19</option>
                    <option value="2018-19">2019-20</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="name">EVENT</div>
                <div class="value">
				    <select name="event" id="event">
                         <option value="ALL">ALL</option>
                         <?php
                         $con= mysqli_connect('localhost','root','','sports_cultural_portal');
                         $sql="SELECT * FROM cultural_list WHERE activity='YES'";
                         $res=mysqli_query($con,$sql);
                         while ($row = $res->fetch_assoc()){
                            echo '
                            <option value="'.$row['id'].'">'.$row['event_name'].'</option>
                            ';
                         }
                         ?>
                         
				    </select>
                </div>
        </div>
        <div class="col-sm-2">
            <div class="name">LEVEL</div>
            <div class="value">
                <select name="level" id="level">
                        <option value="National">National</option>
                        <option value="Intercollege">Inter-College</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="name">CERTIFICATION</div>
            <div class="value">
                <select name="certi" id="certi">
                        <option value="Awards">Awards</option>
                        <option value="Participation">Participation</option>
                </select>
            </div>
        </div>
        <div class="col-sm-2">
            <br>
            <input type="button" class="btn btn-primary btn-sm" name="search" value="SEARCH"/>
        </div>
    </div>
    </form>
    <br><br>
    <div class="container">
    <div class="row">
        <div class="col-sm-2"> </div>
        <div class="col-sm-2">
            <div class="name">
    <form action="excel1.php" method="post">
    <input type="submit" class="btn btn-primary btn-sm" name = "report" value="Get report">
    </div>
    </div>
    </div>
    </div>
  </form>
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Roll No.</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABC</td>
                        <td>19CE1828</td>
                        <td><button type="button" class="btn btn-primary btn-sm">View Profile</button></td>
                    </tr>
                    <tr>
                        <td>ABC</td>
                        <td>19CE1828</td>
                        <td><button type="button" class="btn btn-primary btn-sm">View Profile</button></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
        <div class="col-sm-1"></div>
    </div>
</body>
</html>