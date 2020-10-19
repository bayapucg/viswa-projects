<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <meta name="viewport" content="maximum-scale=1.6,width=320,user-scalable=false" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>

  <title>Pulse Ox Status</title>

<?php

try
{
  $servername="localhost";
  $username="vegya";
  $password = "vegya4all";

  
$dbh = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$query=$dbh->prepare("SELECT date ,temp from sample order by  no desc limit 1");
$query->execute();
$result=$query->fetch();


$last_update = $result[0] ;
$temp_data = $result[1];
$query=$dbh->prepare("SELECT round(avg(bpm),1), round(avg(spo2),1) AS avg from (SELECT bpm,spo2 FROM sample ORDER BY no DESC LIMIT 8) AS t");

$query->execute();
$result=$query->fetch();
$chart_avg_bpm_data = $result[0];
$chart_avg_spo2_data = $result[1];


$dbh = null;

}
catch(PDOException $e)
{
print 'Exception: ' .$e->getMessage();
}

?>

     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Create and populate the data table.
		

		var avg_bpm_data = google.visualization.arrayToDataTable([
			['Label', 'Value'],
  			['AVG BPM', <?php echo $chart_avg_bpm_data; ?>]]);

		var avg_spo2_data = google.visualization.arrayToDataTable([
			['Label', 'Value'],
  			['AVG SPO2', <?php echo $chart_avg_spo2_data; ?>]]);
    var temperature_data = google.visualization.arrayToDataTable([
			['Label', 'Value'],
  			['temp', <?php echo $temp_data; ?>]]);


        var BPM_Chart_Options = {
          min: 0, max: 200,
          greenFrom: 60, greenTo: 130,
          redFrom: 160, redTo: 200,
          yellowFrom:130, yellowTo: 160,
          minorTicks: 5,
        };
        		    
        var SPO2_Chart_Options = {
          min: 0, max: 100,
          greenFrom: 90, greenTo: 100,
          redFrom: 50, redTo: 80,
          yellowFrom:80, yellowTo: 90,
          minorTicks: 5,
        };
        
        var temp_Chart_Options = {
          min: 90, max: 110,
          greenFrom: 95, greenTo: 100,
          redFrom: 100, redTo: 110,
          yellowFrom:90, yellowTo: 95,
          minorTicks: 5,
        };
        			    
        
        var avg_bpm_chart = new google.visualization.Gauge(document.getElementById('chart1'));
        avg_bpm_chart.draw(avg_bpm_data, BPM_Chart_Options);

        var avg_spo2_chart = new google.visualization.Gauge(document.getElementById('chart2'));
        avg_spo2_chart.draw(avg_spo2_data, SPO2_Chart_Options);
        
        var temp_chart = new google.visualization.Gauge(document.getElementById('chart3'));
        temp_chart.draw(temperature_data,temp_Chart_Options);
      }
      

      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="color:white";font-family: Arial;border: 0;"font-size:30px" none;">
  <?php echo nl2br("<b>Updated: $last_update \n</b>"); 
    ?>
  <body bgcolor="black"></body>
  <div id="containerDiv" style="width: 630px;">
    <div id="chart1" style="float:left; width: 210px; height: 210px;"></div>
    <div id="chart2" style="float:left; width: 210px; height: 210px;"></div>
    <div id="chart3" style="float:left; width: 210px; height: 210px;"></div>
  </div>
  <div align=bottom>
  <?php 
 //  echo  nl2br("<b>Emp no = $temp_data \n </b>"); 
 //    echo  nl2br("<b>UID = $chart_avg_spo2_data \n </b>"); 
 //    echo nl2br("<b>Time-in = $chart_avg_bpm_data \n </b>"); 
  //   echo  nl2br("<b>Temperature = $temp_data \n </b>"); 
//     echo  nl2br("<b>Spo2 = $chart_avg_spo2_data \n </b>"); 
  //   echo nl2br("<b>Bpm = $chart_avg_bpm_data \n </b>"); 
     ?>
    </div>
  </body>
</html>
​
