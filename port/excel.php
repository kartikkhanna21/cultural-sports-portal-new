<?php  
$con= mysqli_connect('localhost','root','','login_signup');
if(isset($_POST['report']))
{
$sql = "SELECT name,date FROM `documents`";  
$setRec = mysqli_query($con, $sql); 
$count=mysqli_num_rows($setRec); 
$columnHeader = '';  
$columnHeader =  "Sr No." . "\t" . "Name" . "\t" . "Date";

$sql="SELECT name,date FROM `documents` WHERE event='badminton'";
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

$total="COUNT = "."\t".$count;

header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=User_Detail.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  
echo ucwords("\t"."BADMINTON")."\n";
echo ucwords($columnHeader) . "\n" . $setData1 . "\n";  
echo ucwords("\t"."CRICKET")."\n";
echo ucwords($columnHeader) . "\n" . $setData2 . "\n"; 
echo ucwords("\t"."FOOTBALL")."\n";
echo ucwords($columnHeader) . "\n" . $setData3 . "\n" . "\n" . "\t" . $total; 


}
?> 


