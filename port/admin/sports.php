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
            <li class="nav-item">
              <a class="nav-link item-look" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
         
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle look" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Get Report
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
    <form action="cultural_download.php" method="post">
    <div class="row">
        <div class="col-sm-2" > </div>
        <div class="col-sm-8  container-add-event" style="margin-bottom: 2rem;">
          <div>
            <div class="name al-items"><h5 class="heading2">SELECT YEAR:</h5>
            <div class=" form-group text-center">
            <select name="year" id="year" class="form-control year-drop ">
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

            ?>
            <option>2018-19</option>
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
    <br><br>


  
    <br>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-9">
        </div>
        <div class="col-sm-1"></div>
    </div>

    <style>
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
.btn-p{
  background-color: #3f0d12;
  background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
  color: white;
  margin-bottom: 1rem;
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
.al-items{
    float:left;
    width:50%;
  }

.heading{
    margin-top: 3rem;
    font-family: 'Abel', sans-serif;
    font-size: xx-large;
    font-weight: bold;
}
.heading2{
  font-family: 'Abel', sans-serif;
  font-weight: bold;
  font-size: x-large;
}
.vertical-center {
  min-height: 60%;  /* Fallback for browsers do NOT support vh unit */
  min-height: 60vh; /* These two lines are counted as one :-)       */

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
}
@media only screen and (max-width: 455px){
    .year-drop{
        width:62%;
        margin-top:2rem;
        margin-bottom: 2rem;
        margin-left: 4rem;
        margin-right: 3rem;
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

}


/* navbar styles close */ 




      </style>
</body>
</html>