<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>Chart</title>
</head>
<body>
<?php
        $con= mysqli_connect('localhost','root','','sports_cultural_portal');
        if(isset($_POST['chart'])){
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
          
          if($n1>$n2 and $n2!="none"){
            echo"<script>alert('Start year should be smaller than end year'); window.location='cultural.php'</script>";
          }
          else{
          
          while($n1<$n2 ){
              $n1++;
              $n++;
              $p=strval($n1);
              $q=strval($n);
              $tot=$p.'-'.$q;
              $year[]=$tot;
          }
        
          $sql = "SELECT * FROM `chart_cultural` WHERE year IN('".implode("','",$year)."');";
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
        
        
        }}
          ?>
          <div class="container">
<canvas id="myChart" width="800px" height="450px" style="margin-bottom: 4rem;"></canvas>
<div class="text-center ">
<a id="download" 
        download="ChartImage.jpg" 
        href=""
        class="btn btn-primary float-right bg-flat-color-1"
        title="Descargar Gráfico"
        >



        <!-- Download Icon -->
Download
 </a></div>

</div>


<script>
var data1 = <?php echo json_encode($data1); ?>;
    var data2 = <?php echo json_encode($data2); ?>;
    var years= <?php echo json_encode($year); ?>;

    function myFunction(x) {
  if (x.matches) { // If media query matches
    
    new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
      labels: years,
      datasets: [
        {
          label: "AWARDS",
          backgroundColor: "#3e95cd",
          data: data1
        }, {
          label: "ONLY PARTICIPATION",
          backgroundColor: "#8e5ea2",
          data: data2
        }
      ]
    },
    options: {
      
      
      scales: {
        xAxes: [{
      scaleLabel: {
        display: true,
        labelString: 'YEAR',
        fontSize: 10
      },
      ticks: {
                
                fontSize: 10
            }
    }],
        yAxes: [{
          scaleLabel: {
        display: true,
        labelString: 'No. of Students',
        fontSize: 10
      },
            ticks: {
                beginAtZero: true,
                fontSize: 10           }
        }]
    },
        responsive: true,
      title: {
        display: true,
        text: 'CULTURAL BAR CHART',
        fontSize: 30
      }
    }
});
document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("myChart").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  } else {
    new Chart(document.getElementById("myChart"), {
    type: 'bar',
    data: {
      labels: years,
      datasets: [
        {
          label: "AWARDS",
          backgroundColor: "#3e95cd",
          data: data1
        }, {
          label: "ONLY PARTICIPATION",
          backgroundColor: "#8e5ea2",
          data: data2
        }
      ]
    },
    options: {
      
      
      scales: {
        xAxes: [{
      scaleLabel: {
        display: true,
        labelString: 'YEAR',
        fontSize: 20
      },
      ticks: {
                
                fontSize: 20
            }
    }],
        yAxes: [{
          scaleLabel: {
        display: true,
        labelString: 'No. of Students',
        fontSize: 20
      },
            ticks: {
                beginAtZero: true,
                fontSize: 25            }
        }]
    },
        responsive: true,
      title: {
        display: true,
        text: 'CULTURAL BAR CHART',
        fontSize: 30
      }
    }
});
document.getElementById("download").addEventListener('click', function(){
  /*Get image of canvas element*/
  var url_base64jp = document.getElementById("myChart").toDataURL("image/jpg");
  /*get download button (tag: <a></a>) */
  var a =  document.getElementById("download");
  /*insert chart image url to download button (tag: <a></a>) */
  a.href = url_base64jp;
});
  }
}

  
var x = window.matchMedia("(max-width: 450px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) 

    
  
</script>
<style>
.download{
    margin-top=3rem;
}
</style>
</body>
</html>