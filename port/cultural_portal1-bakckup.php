<?php
session_start();
if(!isset ($_SESSION['username'])){
	header('location:signin.php');
}
$roll=$_SESSION['username'];
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$sql="SELECT * FROM `stu_record` WHERE Roll_no = '$roll'" ;
$name="";

if ($result = mysqli_query($con, $sql)) {
    // Fetch one and one row
    while ($row = mysqli_fetch_row($result)) {
      $name = $row[3]." ".$row[4]." ".$row[2];
    }
    mysqli_free_result($result);
    $_SESSION['name']=$name;
    
  }
$i=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="signin-form container col-sm-5">
        <form action="cultural_docs.php" method="post" enctype="multipart/form-data">
            <div class="form-header">
                <h2>Form</h2>
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" value="<?php echo $name?>" name="name" disabled>
            </div>
            <div >
                <div class="form-group float-items" >
                    <label>Event Name</label>
                    <div class="input-group">
                        <div>
                            <select class="form-control" name="event" placeholder="" required>
                            <option value="" disabled selected hidden>Event Name</option>
                            <?php
                                $sql="SELECT * FROM `cultural_list` WHERE activity='YES'";
                                $result=mysqli_query($con, $sql);
                                while ($row = $result->fetch_assoc()){
                                    echo '<option value='.$row['event_name'].'>'.$row['event_name'].'</option>';

                                }
                            ?>
                                
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
    
                <div class="form-group float-items">
                    <label>Event Level</label>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select class="form-control" name="event_level" placeholder="" required>
                            <option value="" disabled selected hidden>Event Level</option>
                                <option>National level</option>
                                <option>State level</option>
                                <option>College Level</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div>

            


           
                <div class="form-group float-items" >
                    <label>Award/Participation</label>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select class="form-control" name="participate" placeholder="" required>
                            <option value="" disabled selected hidden>Award/Participation</option>
                                <option onclick="addBlock()">Award</option>
                                <option>Participated</option>                           
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>
    
                <div class="form-group float-items" id="award-field" >
                    <label>Award level</label>
                    <div class="input-group">
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select class="form-control" name="award_level" placeholder="" required>
                            <option value="" disabled selected hidden>Award Level</option>
                                <option>None</option>
                                <option>1st prize</option>
                                <option>2nd prize</option> 
                                <option>3rd prize</option>                         
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>
                </div>

            </div>
           



           
           
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" id="birthday" name="Date">
            </div>
            <div class="form-group">
                <label for="file">Upload File:</label> <br>
                <input class="form-control" type="file" id="img" name="file" accept="application/pdf" >
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Upload"></input>
            </div>	
        </form>
        
    </div>
    <style>
    .rait-logo{
        padding: 5px;
        width: 8rem;
    }
    .navbar-light .navbar-toggler {
        /* color: rgb(255, 255, 255); */
        border-color: rgb(113, 107, 107);
        background-color: rgb(72, 72, 72);
    }
    .navbar-light .navbar-toggler-icon {
        background-image: url("images/nav-icon.png");
        height:27px;
    }
    .nav-look{
    background-color: silver;
        
    }
    
    .nav-link{
      font-family: 'Dosis', sans-serif;
      font-family: 'Oswald', sans-serif;
      font-size: 19px;
    }
    .nav-link.active{
        font-weight: bold;
    }
    .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link {
          color: white;
      
    }
    .navbar-light .navbar-nav .active>.nav-link, .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .show>.nav-link:hover {
        color: #af1414;
          -webkit-transform: scale(1.1);
          -ms-transform: scale(1.0);
          transform: scale(1.0);
      
    }
    .navbar-light .navbar-nav .nav-link {
          color: white;
          margin-right: 1rem;
    }
    .navbar-light .navbar-nav .nav-link:hover {
        background-color: #3f0d12;
    background-image: linear-gradient(315deg, #3f0d12 0%, #a71d31 74%);
    
        border-radius: 10px;
          color: white;
          -webkit-transform: scale(1.1);
          -ms-transform: scale(1.4);
          transform: scale(1.03);
    }
    .dropdown-item{
      font-family: 'Dosis', sans-serif;
      font-family: 'Oswald', sans-serif;
        color:white;
    }
    
    
    
    
    
    

        body{
		color: #999;
		background-image:url(../images/image1.jpg);
		font-family: 'Roboto', sans-serif;
		background-size: cover;
	}
	.form-control{
		min-height: 41px;
		box-shadow: none;
		border-color: #e1e1e1;
	}
	.form-control:focus{
		border-color: #00cb82;
	}	
    .form-control, .btn{        
        border-radius: 3px;
    }
    .form-control-2{
        min-height: 41px;
		box-shadow: none;
		border-color: #e1e1e1;
    }
    .form-control-2:focus{
		border-color: #00cb82;
    }	
    .form-control-2, .btn{        
        border-radius: 3px;
        width: 207%;
    }
	.form-header{
		margin: -30px -30px 20px;
		padding: 20px 20px 10px;
		text-align: center;
		background: #00cb82;
		border-bottom: 1px solid #eee;
		color: #fff;
	}
	.form-header h2{
		font-size: 32px;
		font-weight: bold;
        
		font-family: 'Pacifico', sans-serif;
    }

    .signin-form{
		margin: 0 auto;	
		padding: 30px 0;	
    }
    @media only screen and (max-width: 616px){
		.signin-form{
			min-width: 40%;
			margin: 0 auto;	
			padding: 30px 0;	
		}
	  }
    @media only screen and (max-width: 860px){
		.signin-form{
			max-width: 90%;
			margin: 0 auto;	
			padding: 30px 0;	
		}
	  }
	@media only screen and (max-width: 370px){
		.signin-form{
			width: 310px;
			margin: 0 auto;	
			padding: 30px 0;	
		}
	  }
    .signin-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f0f0f0;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signin-form .form-group{
		margin-bottom: 20px;
	}		
	.signin-form label{
		font-weight: normal;
		font-size: 13px;
	}
    .signin-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #00cb82;
		border: none;
		min-width: 200px;
    }
	.signin-form .btn:hover, .signin-form .btn:focus{
		background: #00b073 !important;
        outline: none;
	}
    .signin-form a{
		color: #00cb82;		
	}
    .signin-form a:hover{
		text-decoration: underline;
    }
    .float-items{
        float:left;
        width:50%;
    }
    @media only screen and (max-width: 1060px){
        .float-items{
            float: none;
            width: 100%;
        }
	  }
    </style>
    <script src="navbar.js"></script>
<script>
    function addBlock() {
        var elem = Document.getElementById('award-field');
        elem.innerhtml = "HTML HERE";
        return false;
    }
</script>
</body>