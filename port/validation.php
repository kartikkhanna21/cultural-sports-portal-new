<?php
session_start();
$con= mysqli_connect('localhost','root','');
mysqli_select_db($con, 'sports_cultural_portal');

$name=$_POST['uname'];
$pass=$_POST['password'];


$s="SELECT * FROM `stu_record1` WHERE Roll_no = '$name' && Password='$pass'" ;
$result=mysqli_query($con, $s);

$s1="SELECT * FROM `admin_details` WHERE username = '$name' && password='$pass'" ;
$result1=mysqli_query($con, $s1);

$num1 = mysqli_num_rows($result1);
$num = mysqli_num_rows($result);
if($num==1){
	
	$row = $result->fetch_assoc();
	$_SESSION['username']=$row['Roll_no'];
	
	
	header('location:student/choice.php');
}

else if($num1==1){
	$row = $result1->fetch_assoc();
	$_SESSION['username']=$row['username'];
	header('location:admin/cultural.php');
}
else{
	$_SESSION['invalid']= "true";
	$_SESSION['fail']= "invalid credentials";
	header('location:signin.php');
}
?>