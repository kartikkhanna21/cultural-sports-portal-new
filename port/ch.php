<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>My Chart.js Chart</title>
</head>
<body>
<div class="text-center heading">
        <label>GENERATE BAR GRAPH</label> 
     </div> 

    
<div class="vertical-center">


<div class="container ">
<br>
<br>

<div class="row">
    <div class="col-sm-2" > </div>
    <div class="col-sm-8  container-add-event" style="margin-bottom: 2rem;">
      <div>

      <form onsubmit="return false;" method="post" >

        <div class="name al-items"><h5 class="heading3">START YEAR:</h5>
        <div class=" form-group text-center">
        <select name="year1" id="year" class="form-control year-drop-2 ">
        <?php
          $con= mysqli_connect('localhost','root','','sports_cultural_portal');

          $sql="SELECT DISTINCT YEAR(date) from `cultural_docs` ";
          $setRec = mysqli_query($con, $sql);
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
              echo '
              <option value="'.$yea.'" >'.$yea.'</option>
              
              ';
              }

        ?>
            <option value="2019-20" >2019-20</option>
        <option value="2018-19" >2018-19</option>
        <option value="2017-18" >2017-18</option>
              <option value="2016-17" >2016-17</option>
            </select>
        </div>
    </div>
      

    <div class="name al-items"><h5 class="heading3">END YEAR:</h5>
      <div class=" form-group text-center">
      <select name="year2" id="year" class="form-control year-drop-2 ">
      <option value="none" >none</option>
      <?php
        $con= mysqli_connect('localhost','root','','sports_cultural_portal');

        $sql="SELECT DISTINCT YEAR(date) from `cultural_docs` ";
        $setRec = mysqli_query($con, $sql);
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
            echo '
            <option value="'.$yea.'" >'.$yea.'</option>
            
            ';
            }

      ?>
            
            <option value="2019-20" >2019-20</option>
        <option value="2018-19" >2018-19</option>
        <option value="2017-18" >2017-18</option>
              <option value="2016-17" >2016-17</option>
          </select>
      </div>
  </div>


      <div class="name" style="margin-top: 2rem;">
      <button type="submit" name="year1">chart</button>
      </div>
    </div>
    
    </div>

</div>
</div>
</div>

</form>
<div class="container">
<canvas id="myChart" width="500px" height="100px"></canvas>
<a id="download"
        download="ChartImage.jpg" 
        href=""
        class="btn btn-primary float-right bg-flat-color-1"
        title="Descargar Gráfico"
        style="visibility: hidden">

        <!-- Download Icon -->
Download
 </a>
</div>
<?php
if (isset($_POST['year1'])){
  $n=$_POST['year1'];
$years=array();

  $sql = "SELECT * FROM `chart_sports` WHERE year IN('$n');";
  $result = mysqli_query($con, $sql);
  if (!$result) {
      printf("Error: %s\n", mysqli_error($con));
      exit();
  }
  $data1=array();
  $data2=array();
  
  
//loop through the returned data
while ($row = mysqli_fetch_array($result)) {

  $data1[] =  $row['awards'];
  $data2[] = $row['participate'] ;
}

}
echo '<script>
f();
</script>';
?>

  <script>
  function f(){
    document.getElementById("download").style.visibility = "visible";
    let myChart = document.getElementById('myChart').getContext('2d');
    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';
    var data1 = <?php echo json_encode($data1); ?>;
    var data2 = <?php echo json_encode($data2); ?>;
    var years= <?php echo json_encode($n); ?>;
    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:years,
        datasets:[{
          label:'Population',
          data:data1,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        },{
          label:'Population',
          data:data2,
          //backgroundColor:'green',
          backgroundColor:[
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(255, 99, 132, 0.6)'
          ],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:true,
          text:'Largest Cities In Massachusetts',
          fontSize:25
        },
        legend:{
          display:true,
          position:'right',
          labels:{
            fontColor:'#000'
          }
        },
        layout:{
          padding:{
            left:50,
            right:0,
            bottom:0,
            top:0
          }
        },
        tooltips:{
          enabled:true
        }
      }
    });
    }
    document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("myChart").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  </script>
</body>
</html>
