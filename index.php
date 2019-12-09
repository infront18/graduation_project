<?php
        $con = mysqli_connect('localhost', 'phpmyadmin', 'polo1018', 'testdb');

?>

<html>
<head>
 <meta charset="utf-8">
 <title>Values of Sensor</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);

 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Sensor Value'],

<?php
         $query = "select * from sensor_data order by times desc limit 5";

         $exec = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($exec)){
                 echo "['".$row['times']."',".$row['brightness']."],";
         }
         ?>

]);

var options = {
 title: 'Value of Brightness',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.LineChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }

    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>

 <script type="text/javascript">
 google.load("visualization", "2", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);

 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Sensor Value2'],

<?php
         $query = "select * from sensor_data order by times desc limit 5";

         $exec = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($exec)){
                 echo "['".$row['times']."',".$row['temperature']."],";
         }
         ?>

]);

var options = {
 title: 'Value of Temperature',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.LineChart(document.getElementById("columnchart22"));
 chart.draw(data,options);
 }

    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart22" style="width: 100%; height: 500px;"></div>
 </div>

 <script type="text/javascript">
 google.load("visualization", "3", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);

 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Sensor Value3'],

<?php
         $query = "select * from sensor_data order by times desc limit 5";

         $exec = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($exec)){
                 echo "['".$row['times']."',".$row['humidity']."],";
         }
         ?>

]);

var options = {
 title: 'Value of Humidity',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.LineChart(document.getElementById("columnchart32"));
 chart.draw(data,options);
 }

    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart32" style="width: 100%; height: 500px;"></div>
 </div>

 <script type="text/javascript">
 google.load("visualization", "4", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);

 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['class Name','Sensor Value4'],

<?php
         $query = "select * from sensor_data order by times desc limit 5";

         $exec = mysqli_query($con, $query);
         while($row = mysqli_fetch_array($exec)){
                 echo "['".$row['times']."',".$row['waterlevel']."],";
         }
         ?>

]);

var options = {
 title: 'Light of Water Level ',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.LineChart(document.getElementById("columnchart42"));
 chart.draw(data,options);
 }

    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart42" style="width: 100%; height: 500px;"></div>
 </div>



</body>
</html>
