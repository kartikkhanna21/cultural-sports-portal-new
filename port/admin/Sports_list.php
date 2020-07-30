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
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Search Student</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="Cultural.php">Cultural</a>
<a class="dropdown-item" href="sports.php">Sports</a>
</div>
</li> 
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Update List</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="cultural_list.php">Cultural Events</a>
<a class="dropdown-item" href=#>Sports Events</a>
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
<div class="container text-center">
<div class="header"><p>Gap</p></div>
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
 
   <input type="submit" class="mx-auto btn btn-success btn-lg rounded-0 form-space" name="add"  value="ADD EVENT"/>
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
<input type="submit" class="mx-auto btn btn-success btn-lg rounded-0 update-btn" name="update" value="UPDATE"/> 
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
</body>
</html>