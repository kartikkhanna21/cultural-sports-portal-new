<?php

$con= mysqli_connect('localhost','root','','sports_cultural_portal');

$year=array();
$y1=$_POST['year1'];
$y2=$_POST['year2'];
$year1=substr($y1, 0, 4);
$np=substr($y1, 2, 4);
$year[]=$y1;
$n=(int)($np);
$sql="INSERT into `years`(years) values('$y1');";
mysqli_query($con, $sql);
$n++;
$n1=(int)($year1);
$year2=substr($y2, 0, 4);
$n2=(int)($year2);
while($n1<$n2){
    $n1++;
    $n++;
    $p=strval($n1);
    $q=strval($n);
    $tot=$p.'-'.$q;
    $sql="INSERT into `years`(years) values('$tot');";
    mysqli_query($con, $sql);
    $year[]=$tot;
}

header('location:signin.php');


?>