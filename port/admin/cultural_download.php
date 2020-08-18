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
    if($yea=="2016-17" or $yea=="2017-18" or $yea=="2018-19" or $yea=="2019-20"){

        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . 'cultural-data-'.$yea.'.xlsx');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('../Docs/Cultural_excel/' . 'cultural-data-'.$yea.'.xlsx'));
        readfile('../Docs/Cultural_excel/' . 'cultural-data-'.$yea.'.xlsx');

        // Now update downloads count
        
    }
    else{
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
$count_awards=0;
$count_participate=0;
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
            if($rec[4]=='Only Participation'){
                $count_participate++;
            }
            else{
                $count_awards++;
            }
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
echo "\t\tTotal Number of Students = ".$count;
echo "\n\t\tTotal Awards Won = ".$count_awards;
echo "\n\t\tOnly Participated = ".$count_participate;


}}

else if(isset($_POST['certi'])){

                 
    if($yea=="2016-17" or $yea=="2017-18" or $yea=="2018-19" or $yea=="2019-20"){
        echo"<script>alert('Data is not available for this year'); window.location='sports.php'</script>";
        

    }   
    else{
           
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
}
else if(isset($_POST['photo'])){                 
    if($yea=="2016-17" or $yea=="2017-18" or $yea=="2018-19" or $yea=="2019-20"){
        echo"<script>alert('Data is not available for this year'); window.location='sports.php'</script>";
        

    }   
    else{  
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
}
?> 


