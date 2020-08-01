
<!DOCTYPE html>
<html>
<body>

<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
   
$yea="2020-21";
$year=substr($yea, 0, 4);
$n=(int)($year);
$n=$n+1;
$year1=strval($n);
$year .="-07-01" ;
$year1 .="-06-30";

$sql="SELECT DISTINCT name from `cultural_docs` WHERE
(date BETWEEN '$year'AND '$year1') 
AND (event_level='College Level')
ORDER BY event_name";
$setRec = mysqli_query($con, $sql);
$docs=array();

    
    $names=array();
    if (!$setRec) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
   while($row = mysqli_fetch_array($setRec)) {
    $names[] = $row['name'];
 }
 foreach ($names as $name){
    print_r($name);
 }
 print_r($names);
 print_r($year);
/*
 $file_folder = "Docs/Cultural_docs/";
    $zipname = 'documents.zip';
    $zip = new ZipArchive;
    $zip->open($zipname, ZipArchive::CREATE);
    foreach ($docs as $file) {
        $path=$file_folder.$file;
    $zip->addFile($path,$file);
    }
    $zip->close();
    header('Content-Type: application/zip');
    header('Content-disposition: attachment; filename='.$zipname);
    header('Content-Length: ' . filesize($zipname));
    readfile($zipname);
    unlink($zipname);
  */  
?> 

</body>
</html>