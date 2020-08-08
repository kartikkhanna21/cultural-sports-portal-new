<!DOCTYPE html>
<html>
<body>

<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
   
$sql="SELECT DISTINCT YEAR(date) from `cultural_docs` ";
$setRec = mysqli_query($con, $sql);
$docs=array();

    
    $names=array();
    if (!$setRec) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
   while($row = mysqli_fetch_array($setRec)) {
    $names[] = $row;
 }
 foreach ($names as $name){
 $yea=$name[0];
 $n=(int)($yea);
 $n=strval($n);
 $year=substr($n, 2, 4);
 $year=(int)($year);
 $year=$year+1;
 $year=strval($year);
 $yea .="-".$year;
 print_r($yea);
    
 }
 #print_r($names);
 /*
 $yea=$names[0][0];
 $n=(int)($yea);
 $n=strval($n);
 $year=substr($n, 2, 4);
 $year=(int)($year);
 $year=$year+1;
 $year=strval($year);
 $yea .="-".$year;
 print_r($yea);
 /*
 $year=substr($names[0], 0, 4);
 $n=(int)($year);
 $n=$n+1;
 $year1=strval($n);
 $year .=$year1 ;


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