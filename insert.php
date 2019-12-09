<?php
        $con = mysqli_connect("localhost", "phpmyadmin", "polo1018", "testdb");

        if (mysqli_connect_error())
        {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

   $humidity = $_GET["humidity"];
   $temperature = $_GET["temperature"];
   $waterlevel = $_GET["waterlevel"];
   $brightness = $_GET["brightness"];

   $sql = "INSERT INTO sensor_data(humidity, temperature, waterlevel, brightness) VALUES('$humidity', '$temperature', '$waterlevel', '$brightness')";


   echo $sql;

   $result = mysqli_query($con, $sql);

   if($result){
           echo $con->affected_rows." data inserted into databases.";
   }
   else{
           echo "ERROR: Failed to connect.";
   }


   mysqli_close($con);
?>
