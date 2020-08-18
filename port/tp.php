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
  <div class="container">
  <div class="name al-items"><h5 class="heading2">FROM YEAR:</h5>
            
            <select name="fromyear" id="fromyear" class="year-drop ">
            <option value="2018-19" >2018-19</option>
            </select>
           
        </div>
        <div class="name al-items"><h5 class="heading2">TO YEAR:</h5>
            
            <select name="toyear" id="toyear" class="year-drop ">
            <?php
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
            </select>
           
        </div>
  <button type="submit" onclick=f()>chart</button>
  
  
    <canvas id="myChart"></canvas>
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
  

  <script>
  function f(){
    document.getElementById("download").style.visibility = "visible";
    let myChart = document.getElementById('myChart').getContext('2d');
    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(myChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
        datasets:[{
          label:'Population',
          data:[
            617594,
            181045,
            153060,
            106519,
            105162,
            95072
          ],
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
          data:[
            61759,
            18105,
            15360,
            10519,
            15162,
            5072
          ],
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
