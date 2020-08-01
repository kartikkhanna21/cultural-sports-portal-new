<?php  
$con= mysqli_connect('localhost','root','','sports_cultural_portal');

$yea=$_POST['year'];
$year=substr($yea, 0, 4);
$n=(int)($year);
$n=$n+1;
$year1=strval($n);
$year .="-07-01" ;
$year1 .="-06-30";

if(isset($_POST['report']))
{
    $xlname = $yea.'_Cultural_excel';
    header("Content-type: application/octet-stream");  
    header("Content-Disposition: attachment; filename=".$xlname.".xls");  
    header("Pragma: no-cache");  
    header("Expires: 0");  
    
    $count=0;
$columnHeader = '';  
$columnHeader =  "Sr No." . "\t" . "Event Name" . "\t" . "Event Organizer" . "\t" . "Event Level" . "\t" . "Participant"
                    . "\t" . "Awards/Prizes";
$heading="\t\t"."CULTURAL PARTICIPATION IN ".$yea;
echo ucwords($heading)."\n";

$count=0;
$sql="SELECT DISTINCT event_level from `cultural_docs` WHERE
    (date BETWEEN '$year'AND '$year1') ";
    $setRec = mysqli_query($con, $sql);
    $events=array();
    while($row = mysqli_fetch_array($setRec)) {
        $events[] = $row['event_level'];
     }
     $setData1 = '';
     foreach($events as $eventl)
     {$setData1 = '';
        
        $i=1;
        $sql="SELECT event_name, event_org,event_level,name,awards_participate from `cultural_docs`
        WHERE (date BETWEEN '$year'AND '$year1')
        AND (event_level='$eventl')
        ORDER BY event_name";        
        $setRec = mysqli_query($con, $sql);
        $count1=mysqli_num_rows($setRec);
        $count+=$count1;
        
        while ($rec = mysqli_fetch_row($setRec)) {  
            $rowData = '';  
            foreach ($rec as $value) {  
                $value = '"' . $value . '"' . "\t";  
                $rowData .= $value;          
            }  
            $setData1 .= $i."\t".trim($rowData) . "\n"; 
            $i++;

     }
     echo ucwords($columnHeader) . "\n" . $setData1 . "\n";
     }

$total="\t\tTotal Number of Students = ".$count;
echo ucwords($total);



}

else if(isset($_POST['certi'])){

                 
           
    $sql="SELECT doc_name from `cultural_docs` WHERE
    (date BETWEEN '$year'AND '$year1') ";
    $setRec = mysqli_query($con, $sql);
    $count=mysqli_num_rows($setRec);
    $docs=array();
    while ($rec = mysqli_fetch_array($setRec,MYSQLI_ASSOC)){
        $docs[] = $rec['doc_name'];
    }
    $file_folder = "../Docs/Cultural_docs/";
    $zipname = $yea.'_Cultural_docs.zip';
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
}

else if(isset($_POST['photo'])){                 
           
    $sql="SELECT photo_name from `cultural_docs` WHERE
    (date BETWEEN '$year'AND '$year1') ";
    $setRec = mysqli_query($con, $sql);
    $count=mysqli_num_rows($setRec);
    $docs=array();
    while ($rec = mysqli_fetch_array($setRec,MYSQLI_ASSOC)){
        $docs[] = $rec['photo_name'];
    }
    $file_folder = "../Photo/Cultural_photo/";
    $zipname = $yea.'_Cultural_photos.zip';
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
}

?> 


