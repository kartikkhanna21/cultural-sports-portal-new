<!DOCTYPE html>
<html>
<body>

<?php
	session_start();

$con= mysqli_connect('localhost','root','','sports_cultural_portal');
   
$sql="SELECT DISTINCT YEAR(date) from `sports_docs` ";
$setRec = mysqli_query($con, $sql);
    
    $names=array();
    if (!$setRec) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
   while($row = mysqli_fetch_array($setRec)) {
    $names[] = $row;
 } 
 $data1 = '';
	$data2 = '';
 $year=array("2018-19","2020-21");
 
	//query to get data from the tableri
    $sql = "SELECT * FROM `chart_sports` WHERE year IN('".implode("','",$year)."');";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    $data1=array();
	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1[] =  $row['awards'];
		$data2 = $data2 . ''. $row['participate'] .',';
    }
    print_r($data1);
/*
	print_r($data1);
    $data2 = trim($data2,",");
    print($data2);

    $y1="2016-17";
    $y2="2020-21";
    $year1=substr($y1, 0, 4);
    $np=substr($y1, 2, 4);
    $year[]=$y1;
    $n=(int)($np);
    $n++;
    $n1=(int)($year1);
    $year2=substr($y2, 0, 4);
    $n2=(int)($year2);
    while($n1<$n2-1){
        $n1++;
        $n++;
        $p=strval($n1);
        $q=strval($n);
        $tot=$p.'-'.$q;
        $year[]=$tot;
    }
    $year[]=$y2;
    #print_r($year);
  $_SESSION['year']=$year; 
  $rt=array();
  $rt= $_SESSION['year'];
  */  
   
?> 
<script>
  
    
    var datab = <?php echo json_encode($year); ?>;
    var a, s;
a = ["1900", "1950", "1999", "2050","1020","42525"];
s = "25";
<?php 
$phpvar='"+s+"'; 

?>
    document.write(typeof datab);
    
    
</script>
<?php
print($phpvar);
?>
</body>
</html>