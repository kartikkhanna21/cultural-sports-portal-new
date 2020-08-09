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

$target_dir = "Docs/Sports_docs/";
$filename=basename($_FILES["file"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname=$name."_".$event."_".$organizer."_".$date.".".$ext;
$target_file = $target_dir . $newname ;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
$docname=$newname;


$target_dir = "Photo/Sports_photo/";
$filename=basename($_FILES["photo"]["name"]);
$ext = pathinfo($filename, PATHINFO_EXTENSION);
$newname=$name."_".$event."_".$organizer."_".$date.".".$ext;
$target_file = $target_dir . $newname;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
$photo_name=$newname;

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