<?php
session_start();

$con= mysqli_connect('localhost','root','','sports_cultural_portal');
$name=$_SESSION['name'];
$roll=$_SESSION['username'];
$event=$_POST['event'];
$organizer=$_POST['event-org'];
$event_level=$_POST['event_level'];
$participate=$_POST['participate'];
$date=$_POST['Date'];
$docname= $_FILES['file']['name'];

$tmp_name= $_FILES['file']['tmp_name'];

$photo_name=$_FILES['photo']['name'];

$tmp2_name= $_FILES['photo']['tmp2_name'];

$submitbutton= $_POST['submit'];
$position= strpos($docname, "."); 
$fileextension= substr($docname, $position + 1);
$fileextension= strtolower($fileextension);

$path= 'Docs/';
$docname=$docname;
move_uploaded_file($tmp_name, $path.$docname);

$position2= strpos($photo_name, "."); 
$fileextension2= substr($photo_name, $position2 + 1);
$fileextension2= strtolower($fileextension2);

$path2= 'Photo/';
$photo_name=$photo_name;
move_uploaded_file($tmp2_name, $path2.$photo_name);


$reg="INSERT into `sports_docs`(name,rollno,event_name,event_org,event_level,awards_participate,date,doc_name,photo_name) 
values ('$name' ,'$roll', '$event' , '$organizer' , '$event_level' ,'$participate'  , '$date' , '$docname', '$photo_name')";
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
header("location:sports_portal1.php");
      
    mysqli_close($con);
    
?>