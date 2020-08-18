<?php
		session_start();

	$con= mysqli_connect('localhost','root','','sports_cultural_portal');

	$data1 = '';
	$data2 = '';
  $db=array();
  $db=$_SESSION['year'];
	//query to get data from the table
    $sql = "SELECT * FROM `chart_sports` WHERE year IN('".implode("','",$db)."')
            ORDER BY year;";
    $result = mysqli_query($con, $sql);
    $data1=array();
    $data2=array();
	//loop through the returned data
	while ($row = mysqli_fetch_array($result)) {

		$data1[] = $row['awards'];
		$data2[] = $row['participate'];
	}

	
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
  
  <div class="container">
  <button type="submit" onclick=f()>chart</button>
  <canvas id="mychart" width="800" height="450"></canvas>
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
    var db = <?php echo json_encode($db); ?>;
    var data1 = <?php echo json_encode($data1); ?>;
    var data2 = <?php echo json_encode($data2); ?>;
  new Chart(document.getElementById("mychart"), {
    type: 'bar',
    data: {
      labels: db,
      datasets: [
        {
          label: "Africa",
          backgroundColor: "#3e95cd",
          data: data1
        }, {
          label: "Europe",
          backgroundColor: "#8e5ea2",
          data: data2
        }
      ]
    },
    options: {
      
      scaleLabel: {
            display: true,
            labelString: 'value'
          },
      scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    },
        responsive: true,
      title: {
        display: true,
        text: 'Population growth (millions)'
      }
    }
});}
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
