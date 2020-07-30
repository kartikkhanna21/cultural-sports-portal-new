<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
$id=$_POST[pid];
$toggle=$_POST[pid];
$sql="
UPDATE sports_list 
SET 
    activity = 
WHERE
    id = '$id';
";
?>