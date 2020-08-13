<?php
$mysqli= new mysqli('localhost','root','','sports_cultural_portal');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <title> Admin Student info with table </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="ad_student_t.css" rel="stylesheet">
    <!--link href="bgtest.css" rel="stylesheet"-->
    <link href="main.css" rel="stylesheet">
    <link href="util.css" rel="stylesheet">
</head>
<body>
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
<div class="container text-center">
<br>
<br>
 <form method="post">
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text"><i class='fas fa-search'></i></span>
</div>
<input type="text" class="form-control" title=" Search any event from the list"id="myInput" placeholder="Search">
</div>
 
<div class="container-add-event " style="margin-bottom: 2rem;">
  <label class="text-center">ADD EVENT</label>
   <input type="text" class="form-control form-space" title=" Add event" name="event" placeholder="Event name" required>
   
     
   <div class="form-group form-space">
     <label style="float: left; width: 10%;">Event Date:-</label>
     <input style="float: left;  width: 90%;" type="date" class="form-control" id="birthday" name="Date" placeholder="Event Date" required>
   </div>
 
   <input type="submit" class="mx-auto btn btn-lg rounded-0 form-space btn-p" name="add"  value="ADD EVENT"/>
  </div> 
</form>

<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
if(isset($_POST['add']))
{
$event=$_POST['event'];
$date=$_POST['Date'];
$active="YES";
$sql="INSERT into `sports_list`(event_name,date,activity) values ('$event' , '$date' , '$active')";
mysqli_query($con, $sql);
}

?>

<form method="post" action="activity_sports.php">
<table class="table table-hover table-striped table-bordered shadow p-4 mb-4  w-70">
<thead class="thead-dark">
<tr>
<th class="text-center">EVENT NAME</th>
<th class="text-center">DATE</th>
<th class="text-center">ACTIVE</th>
</tr>
</thead>
<tbody id="myTable">

<?php
$sql="SELECT id,event_name,date,activity FROM sports_list";
$res=mysqli_query($con,$sql);
while ($row = $res->fetch_assoc()){

  echo "
  <tr>
  <td class='text-center'>".$row["event_name"]."</td>
  <td class='text-center'>".$row['date']."</td> 
  <td class='text-center'>
  <label class='form-check-label'>
  <input type='radio'method='post' class='form-check-input' value='YES' name='".$row['id']."'".(($row['activity']=='YES')?'checked':"").">YES
  </label><br>
  <label class='form-check-label'>
  <input type='radio' method='post' class='form-check-input' value='NO' name='".$row['id']."'".(($row['activity']=='NO')?'checked':"").">NO
  </label></td>  
  </tr>    
  ";  
}
?>

</tbody>          
</table>
<input type="submit" class="mx-auto btn btn-lg rounded-0 update-btn btn-p" name="update" value="UPDATE"/> 
</form>
</div>
        
        <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>

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
  font-family: 'Inter', sans-serif;
  font-size: 15px;
}
.btn-p:hover{
  background-color: #3f0d12;
  background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
  color: silver;
}

.row-color{
  background-color: #e6e6e6;
}
/* navbar styles close */ 




      </style>
</body>
</html>