<?php
session_start();

$con= mysqli_connect('localhost','root','','sports_cultural_portal');
$name=$_SESSION['name'];
$roll=$_SESSION['username'];
$event=$_POST['event'];
$event_level=$_POST['event_level'];
$participate=$_POST['participate'];
$award_level=$_POST['award_level'];
$date=$_POST['Date'];
$docname= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($docname, "."); 
$fileextension= substr($docname, $position + 1);
$fileextension= strtolower($fileextension);

$path= 'Docs/';
$docname=$docname;
move_uploaded_file($tmp_name, $path.$docname);

$docname1= $_FILES['photo']['name'];

$tmp_name= $_FILES['photo']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($docname1, "."); 
$fileextension= substr($docname1, $position + 1);
$fileextension= strtolower($fileextension);

$path= 'Photo/';
$docname1=$docname;
move_uploaded_file($tmp_name, $path.$docname);
$reg="INSERT into `cultural_docs`(name,rollno,event_name,event_level,awards_participate,prize,date,doc_name) 
values ('$name' ,'$roll', '$event' , '$event_level' ,'$participate' , '$award_level' , '$date' , '$docname')";
    mysqli_query($con, $reg);

/*mysqli_select_db($con, 'login_signup');
if (isset($_POST["submit"]))
{
$name=$_POST['name'];
$event=$_POST['event_name'];
$date=$_POST['Date'];
        

if($_FILES["file"]["name"]!="")
{
$pname = rand(1000,10000)."-".$_FILES["file"]["name"];
$tname = $_FILES["file"]["tmp_name"];
$uploads_dir = 'Docs';
move_uploaded_file($tname, $uploads_dir.'/'.$tname);
}
$reg="INSERT into `documents`(name,event,date,doc_name) values ('$name' , '$event' , '$date' , '$tname')";
    mysqli_query($con, $reg);

}*/
header("location:cultural_portal1.php");
      
    mysqli_close($con);
    
?>