<!DOCTYPE html>
<html lang="en">
<head>
  <title>NavBar Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!--<link href="bgtest.css" rel="stylesheet"-->
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
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown">
          Search Student
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="cultural.php">Cultural</a>
          <a class="dropdown-item" href="sports.php">Sports</a>
        </div>
      </li> 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Update List
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="cultural_list.php">Cultural Event</a>
          <a class="dropdown-item" href="Sports_list.php">Sports Event</a>
        </div>
      </li>  
    </ul>
  </div>  
</nav>
<br>

<div class="container">

</div>

</body>
</html>