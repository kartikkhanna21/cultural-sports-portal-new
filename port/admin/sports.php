<?php
session_start();
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
   
$sql="SELECT DISTINCT YEAR(date) from `sports_docs` ";
$setRec = mysqli_query($con, $sql);
    
    $names=array();
    if (!$setRec) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
   while($row = mysqli_fetch_array($setRec)) {
    $names[] = $row;
 } 
 $dates=array();
        foreach ($names as $name){
        $yea=$name[0];
        $n=(int)($yea);
        $n=strval($n);
        $year=substr($n, 2, 4);
        $year=(int)($year);
        $year=$year+1;
        $year=strval($year);
        $yea .="-".$year;
        $dates[]=$yea;
    }
    foreach ($dates as $yea){

        $year=substr($yea, 0, 4);
        $n=(int)($year);
        $n=$n+1;
        $year1=strval($n);
        $year .="-07-01" ;
        $year1 .="-06-30";

        $sql="SELECT *  from `sports_docs` WHERE
        (date BETWEEN '$year'AND '$year1') ";
        $setRec = mysqli_query($con, $sql);
        $total=mysqli_num_rows($setRec);        
        mysqli_free_result($setRec); 
        
        $sql="SELECT *  from `sports_docs` WHERE
        (date BETWEEN '$year'AND '$year1') 
        AND awards_participate='Only Participation'";
        $setRec = mysqli_query($con, $sql);
        $participate=mysqli_num_rows($setRec);
        mysqli_free_result($setRec); 
        $awards=$total-$participate;

        $sql="SELECT *  from `chart_sports` WHERE year='".$yea."'";
        $setRec = mysqli_query($con, $sql);
        $n=mysqli_num_rows($setRec);
        mysqli_free_result($setRec); 
        if($n==0){
            $sql="INSERT into `chart_sports`(year,awards,participate,total) values('".$yea."','".$awards."','".$participate."','".$total."');";
            mysqli_query($con, $sql);
        } 
        else{
            $sql="update `chart_sports` set awards='".$awards."',participate='".$participate."',total='".$total."' where year='".$yea."'";;
            mysqli_query($con, $sql);
        }       
        
    }
     
?> 
<!DOCTYPE html>
<html lang="en">
<head> 
    <title> Admin Student info with table </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <link href="ad_student_t.css" rel="stylesheet">
    <!--link href="bgtest.css" rel="stylesheet"-->
    <link href="main.css" rel="stylesheet">
    <link href="util.css" rel="stylesheet">
</head>
<body >
<nav class=" navbar navbar-expand-lg navbar-light slideInDown animated sticky-top nav-look">
        <img src="logo-1-RAIT.png" class="culinary-logo-nav">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon my-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            
         
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle look" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Report
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" id="change" href="cultural.php">Cultural</a>
                <a class="dropdown-item" id="change" href="sports.php">Sports</a>
              </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle look" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Update List
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" id="change" href="cultural_list.php">Cultural Event</a>
                  <a class="dropdown-item" id="change" href="Sports_list.php">Sports Event</a>
                </div>
              </li>
              <li class="nav-item">
              <a class="nav-link item-look" href=#>Dashboard<span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>

     <div class="text-center heading">
        <label>SPORTS EVENTS REPORT</label> 
     </div> 
      
     <div class="vertical-center">


<div class="container ">
<br>
<br>
<form action="sports_download.php" method="post">
<div class="row">
    <div class="col-sm-2" > </div>
    <div class="col-sm-8  container-add-event" style="margin-bottom: 2rem;">
      <div>
        <div class="name al-items"><h5 class="heading2">SELECT YEAR:</h5>
        <div class=" form-group text-center">
        <select name="year" id="year" class="form-control year-drop ">
        <?php
          

          $sql="SELECT DISTINCT YEAR(date) from `sports_docs` ";
          $setRec = mysqli_query($con, $sql);
          $names=array();
          if (!$setRec) {
              printf("Error: %s\n", mysqli_error($con));
              exit();
          }
            while($row = mysqli_fetch_array($setRec)) {
              $names[] = $row;
          }
              foreach ($names as $name){
              $yea=$name[0];
              $n=(int)($yea);
              $n=strval($n);
              $year=substr($n, 2, 4);
              $year=(int)($year);
              $year=$year+1;
              $year=strval($year);
              $yea .="-".$year;
              echo '
              <option value="'.$yea.'" >'.$yea.'</option>
              
              ';
              }
              mysqli_free_result($setRec);

        ?>
        <option value="2019-20" >2019-20</option>
        <option value="2018-19" >2018-19</option>
        <option value="2017-18" >2017-18</option>
              <option value="2016-17" >2016-17</option>
            
            
            </select>
        </div>
    </div>
      

        <div class="al-items" style="margin-top: 1rem; margin-bottom:1rem;">
        
          <div class="name" style="">
            <input type="submit" class="btn  btn-sm btn-p" name = "report" value="Get report">
          </div>

          <div class="name" style="">
            <input type="submit" class="btn  btn-sm btn-p" name = "certi" value="Download certificates">
          </div>

          <div class="name" style="">
            <input type="submit" class="btn btn-sm btn-p" name = "photo" value="Download photographs">
          </div>
        </div>
    </div>
    </div>




    </div>
    
    </div>
   

 
</div>
</form>
</div>
</div>

<div class="text-center heading">
        <label>GENERATE BAR GRAPH</label> 
     </div> 

    
<div class="vertical-center">


<div class="container ">
<br>
<br>
<form action="chart_sports.php" method="post" target="_blank">
<div class="row">
    <div class="col-sm-2" > </div>
    <div class="col-sm-8  container-add-event" style="margin-bottom: 2rem;">
      <div>
        <div class="name al-items"><h5 class="heading3">START YEAR:</h5>
        <div class=" form-group text-center">
        <select name="year1" id="year" class="form-control year-drop-2 ">
        <?php
          $con= mysqli_connect('localhost','root','','sports_cultural_portal');

          $sql="SELECT DISTINCT YEAR(date) from `cultural_docs` ";
          $setRec = mysqli_query($con, $sql);
          $names=array();
          if (!$setRec) {
              printf("Error: %s\n", mysqli_error($con));
              exit();
          }
            while($row = mysqli_fetch_array($setRec)) {
              $names[] = $row;
          }
              foreach ($names as $name){
              $yea=$name[0];
              $n=(int)($yea);
              $n=strval($n);
              $year=substr($n, 2, 4);
              $year=(int)($year);
              $year=$year+1;
              $year=strval($year);
              $yea .="-".$year;
              echo '
              <option value="'.$yea.'" >'.$yea.'</option>
              
              ';
              }
              mysqli_free_result($setRec);
        ?>
            <option value="2019-20" >2019-20</option>
        <option value="2018-19" >2018-19</option>
        <option value="2017-18" >2017-18</option>
              <option value="2016-17" >2016-17</option>
            </select>
        </div>
    </div>
      

    <div class="name al-items"><h5 class="heading3">END YEAR:</h5>
      <div class=" form-group text-center">
      <select name="year2" id="year" class="form-control year-drop-2 ">
      <option value="none" >none</option>
      <?php
        $con= mysqli_connect('localhost','root','','sports_cultural_portal');

        $sql="SELECT DISTINCT YEAR(date) from `cultural_docs` ";
        $setRec = mysqli_query($con, $sql);
        $names=array();
        if (!$setRec) {
            printf("Error: %s\n", mysqli_error($con));
            exit();
        }
          while($row = mysqli_fetch_array($setRec)) {
            $names[] = $row;
        }
            foreach ($names as $name){
            $yea=$name[0];
            $n=(int)($yea);
            $n=strval($n);
            $year=substr($n, 2, 4);
            $year=(int)($year);
            $year=$year+1;
            $year=strval($year);
            $yea .="-".$year;
            echo '
            <option value="'.$yea.'" >'.$yea.'</option>
            
            ';
            }
            mysqli_free_result($setRec);
      ?>
            
            <option value="2019-20" >2019-20</option>
        <option value="2018-19" >2018-19</option>
        <option value="2017-18" >2017-18</option>
              
          </select>
      </div>
  </div>


      <div class="name" style="margin-top: 2rem;">
      
      <button type="submit" name="chart" class="btn  btn-sm btn-p">Generate Graph</button>
      
      </div>

    </div>
   </div>

 

</div>
     
</div>
</div>
</form>

<style type="text/css">
/*navbar styles */  
/*toggler styles */ 

.navbar-light .navbar-toggler {
    /* color: rgb(255, 255, 255); */
    border-color: rgb(113, 107, 107);
    background-color: rgb(72, 72, 72);
}
.navbar-light .navbar-toggler-icon {
    background-image: url("../images/nav-icon.png");
    height:27px;
}
/*toggler styles close*/ 
.culinary-logo-nav{
  height:50px;
}
@media only screen and (max-width: 365px){
  .culinary-logo-nav{
  height:36px;
  margin-left:0rem;
}
}
.nav-look{
    background-color: #e6e6e6;
}
.navbar-light .navbar-brand {
     color: #c80000;
     font-weight:bold;
}
.navbar-light .navbar-brand:hover {
      color: #c80000;
      -webkit-transform: scale(1.2);
      -ms-transform: scale(1.2);
      transform: scale(1.1);
      transition: 0.3s ease;
          
}
.navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:1.4rem;
}
@media only screen and (max-width: 420px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left: 0.4rem;
}
}
@media only screen and (max-width: 380px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left: 4rem;
}
}

@media only screen and (max-width: 361px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:4.2rem;
}
}

@media only screen and (max-width: 325px){
  .navbar-brand {
      display: inline-block;
      padding-top: .3125rem;
      padding-bottom: .3125rem;
      font-size: 2.25rem;
      line-height: inherit;
      white-space: nowrap;
      padding-left:3rem;
}
}


.brand{
  font-family: 'Oswald', sans-serif;
    font-family: 'Dosis', sans-serif;
      
}
.nav-link{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
  font-size: larger;
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
      color: black;
  
}
.navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link:hover {
      color: #c80000;
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.0);
      transform: scale(1.0);
      transition: 0.5s ease;
  
}
.navbar-light .navbar-nav .nav-link {
      color: black;
}
.navbar-light .navbar-nav .nav-link:hover {
      color: #c80000;
      -webkit-transform: scale(1.1);
      -ms-transform: scale(1.4);
      transform: scale(1.03);
      transition: 0.5s ease;
}
.dropdown-item{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
    color:black;
}
.dropdown-item:hover{
  font-family: 'Dosis', sans-serif;
  font-family: 'Oswald', sans-serif;
  color:#c80000;
  
}
.dropdown-menu{
    background-color: #e6e6e6;
}
.body-bg{
background-color: #b8c6db;
background-image: linear-gradient(315deg, #b8c6db 0%, #f5f7fa 74%); 
background-repeat:no-repeat; 
min-height:100vh;
}
.btn-p{
  background-color: #3f0d12;
  background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
  color: white;
  margin-bottom: 1rem;
  margin-top: 5px;
  width: 15rem;
}
.btn-p:hover{
  background-color: #3f0d12;
  background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
  color: silver;
}
.year-drop{
  width:60%;
  margin-top:4rem;
  margin-left: 4rem;
 
}
.year-drop-2{
  width:60%;
  margin-top:2rem;
  margin-left: 4rem;
 
}
.al-items{
    float:left;
    width:50%;
  }

.heading{
    margin-top: 1rem;
    font-family: 'Abel', sans-serif;
    font-size: xx-large;
    font-weight: bold;
}
.heading2{
  font-family: 'Abel', sans-serif;
  font-weight: bold;
  font-size: x-large;
}
.heading3{
  font-family: 'Abel', sans-serif;
  font-weight: bold;
  font-size: large;
}
.vertical-center {


  display: flex;
  align-items: center;
}
.name{
    margin-bottom: 1rem;
}
@media only screen and (max-width: 993px){
.al-items{
    float: none;
    width: 100%;
}
.year-drop{
    width:55%;
    margin-top:2rem;
    margin-bottom: 2rem;
  }
.year-drop-2{
    width:55%;
    margin-top:2rem;
    margin-left: 5rem;
   
}
  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: 0px;
    margin-left: 0px;
}
}
@media only screen and (max-width: 768px){
    .year-drop{
        width:55%;
        margin-top:2rem;
        margin-bottom: 2rem;
        margin-left: 5rem;
        margin-right: 3rem;
      }
      .year-drop-2{
        width:55%;
        margin-top:2rem;
        margin-left: 5rem;
       
    }
}
@media only screen and (max-width: 455px){
    .year-drop{
        width:62%;
        margin-top:2rem;
        margin-bottom: 2rem;
        margin-left: 4rem;
        margin-right: 3rem;
      }
      .year-drop-2{
        width:60%;
        margin-top:2rem;
        margin-left: 4rem;
      }
}
@media only screen and (max-width: 430px){
    .year-drop{
        width:66%;
        margin-top:2rem;
        margin-bottom: 2rem;
        margin-left: 3rem;
        margin-right: 3rem;
      }
      .year-drop-2{
        width:66%;
        margin-top:2rem;
        margin-left: 3rem;
      }
}
@media only screen and (max-width: 380px){
  .year-drop-2{
    width:73%;
    margin-top:2rem;
    margin-left: 2rem;
  }
}
@media only screen and (max-width: 330px){
    .btn-p{
        background-color: #3f0d12;
        background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
        color: white;
        margin-bottom: 1rem;
        width: 10rem;
      }
      .year-drop{
        width:66%;
        margin-top:2rem;
        margin-bottom: 2rem;
        margin-left: 2rem;
      }
      .year-drop-2{
        width:67%;
        margin-top:2rem;
        margin-left: 2rem;
      }

}


/* navbar styles close */ 




      </style>
</body>
</html>