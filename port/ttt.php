<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
session_start();
$year=array();
$y1=$_POST['year1'];
$y2=$_POST['year2'];
$year1=substr($y1, 0, 4);
$np=substr($y1, 2, 4);
$year[]=$y1;
$n=(int)($np);
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
    $year[]=$tot;
}
if(isset($_SESSION['year'])){
unset ($_SESSION["year"]);
}
$_SESSION['year']=$year;
print_r($year);



?>