<?php  
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
if(isset($_POST['report']))
{

$columnHeader = '';  
$columnHeader =  "Sr No." . "\t" . "Name" . "\t" . "Roll no." . "\t" . "Event_name" . "\t" . "Certification"
                    . "\t" . "Award Recieved" . "\t" . "Doc_name";

$year=$_POST['year'];
$event=$_POST['event'];
$year=substr($year, 0, 4);
$n=number_format($year);
$n=$n+1;
$year1=strval($n);
$year .="-07-01" ;
$year1 .="-06-30";

if($event=='ALL'){
$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') ";
    $setRec = mysqli_query($con, $sql);
    $count=mysqli_num_rows($setRec);

$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='National level'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData1 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData1 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  

$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='State level'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData2 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData2 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  
$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='College Level'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData3 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData3 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  

}
else
{
    $sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') AND
    event = '$event'";
    $setRec = mysqli_query($con, $sql);
    $count=mysqli_num_rows($setRec);

$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='National level' AND
    event = '$event'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData1 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData1 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  

$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='State level' AND
    event = '$event'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData2 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData2 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  
$sql="SELECT * from `sports_docs` WHERE
    (date BETWEEN '$year'AND '$year1') 
    AND event_level='College Level' AND
    event = '$event'";
    $setRec = mysqli_query($con, $sql);

    $i=1;

$setData3 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData3 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  
    
}
/*
$i=1;

$setData1 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData1 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  


$sql="SELECT name,date FROM `documents` WHERE event='cricket'";
$setRec = mysqli_query($con, $sql);
$i=1;

$setData2 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData2 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  


$sql="SELECT name,date FROM `documents` WHERE event='Football'";
$setRec = mysqli_query($con, $sql);
$i=1;

$setData3 = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;          
    }  
    
    
    $setData3 .= $i."\t".trim($rowData) . "\n"; 
    $i++;
     
}  
*/

$total="COUNT = "."\t".$count;

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
echo ucwords("\t"."\t"."\t"."\t"."NATIONAL LEVEL")."\n";
echo ucwords($columnHeader) . "\n" . $setData1 . "\n";  
echo ucwords("\t"."\t"."\t"."\t"."STATE LEVEL")."\n";
echo ucwords($columnHeader) . "\n" . $setData2 . "\n"; 
echo ucwords("\t"."\t"."\t"."\t"."COLLEGE LEVEL")."\n";
echo ucwords($columnHeader) . "\n" . $setData3 . "\n" . "\n" . "\t" . $total; 


}
?> 


