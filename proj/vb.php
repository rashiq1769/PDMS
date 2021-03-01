<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h2>Production Material Data</h2>
</div>

<div class="w3-bar w3-black">
  <button class="w3-bar-item w3-button" onclick="openCity('raw')">Raw Materials</button>
  <button class="w3-bar-item w3-button" onclick="openCity('loading')">Loading Materials</button>
  <button class="w3-bar-item w3-button" onclick="openCity('production')">Production Materials</button>
</div>

<div id="raw" class="w3-container city">


  <?php
session_start();
require_once('config.php');
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=1";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=2";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity1[] = $row['Capacity'];
        }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=3";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity2[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

             . "where t.Basic_Type = r.S_No AND\n"

             . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=4";

                  $result = mysqli_query($con,$sql);
                  $chart_data="";
                  while ($row = mysqli_fetch_array($result)) {


                     $Capacity3[] = $row['Capacity'];
                  }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

             . "where t.Basic_Type = r.S_No AND\n"

             . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=5";

                  $result = mysqli_query($con,$sql);
                  $chart_data="";
                  while ($row = mysqli_fetch_array($result)) {


                     $Capacity4[] = $row['Capacity'];
                 }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

             . "where t.Basic_Type = r.S_No AND\n"

             . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=6";

                  $result = mysqli_query($con,$sql);
                  $chart_data="";
                  while ($row = mysqli_fetch_array($result)) {


                     $Capacity5[] = $row['Capacity'];
                  }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                      . "where t.Basic_Type = r.S_No AND\n"

                      . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=7";

                           $result = mysqli_query($con,$sql);
                           $chart_data="";
                           while ($row = mysqli_fetch_array($result)) {


                              $Capacity6[] = $row['Capacity'];
                           }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                      . "where t.Basic_Type = r.S_No AND\n"

                      . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=8";

                           $result = mysqli_query($con,$sql);
                           $chart_data="";
                           while ($row = mysqli_fetch_array($result)) {


                              $Capacity7[] = $row['Capacity'];
                          }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                      . "where t.Basic_Type = r.S_No AND\n"

                      . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=9";

                           $result = mysqli_query($con,$sql);
                           $chart_data="";
                           while ($row = mysqli_fetch_array($result)) {


                              $Capacity8[] = $row['Capacity'];
                           }
?>

<head>

     <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
     </script>
     <script src = "https://code.highcharts.com/highcharts.js"></script>
  </head>
  <body>
     <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
     <script language = "JavaScript">
        $(document).ready(function() {
           var chart = {
              type: 'column'
           };
           var title = {
              text: 'Total Raw Materials Data'
           };
           var subtitle = {
              text: 'Year:2018'
           };
           var xAxis = {
              categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul',
                 'Aug','Sep','Oct','Nov','Dec'],
              crosshair: true
           };
           var yAxis = {
              min: 0,
              title: {
                 text: 'Capacity (Tonnes)'
              }
           };
           var tooltip = {
              headerFormat: '<span style = "font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style = "color:{series.color};padding:0">{series.name}: </td>' +
                 '<td style = "padding:0"><b>{point.y:.1f} tonnes</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
           };
           var plotOptions = {
              column: {
                 pointPadding: 0.2,
                 borderWidth: 0
              }
           };
           var credits = {
              enabled: false
           };
           var series= [{

               name: 'Iron Ore',
               data: [<?php echo join($Capacity, ',') ?>]

           },
                        {

               name: 'Cooking Coal',
               data: [<?php echo join($Capacity1, ',') ?>]

           },
                        {
               name: 'Boiler Coal',
               data: [<?php echo join($Capacity2, ',') ?>]

           },
           ];

           var json = {};
           json.chart = chart;
           json.title = title;
           json.subtitle = subtitle;
           json.tooltip = tooltip;
           json.xAxis = xAxis;
           json.yAxis = yAxis;
           json.series = series;
           json.plotOptions = plotOptions;
           json.credits = credits;
           $('#container').highcharts(json);

        });
     </script>
  </body>


</div>

<div id="loading" class="w3-container city" style="display:none">


      


  <body>
     <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
     <script language = "JavaScript">
        $(document).ready(function() {
           var chart = {
              type: 'column'
           };
           var title = {
              text: 'Total Raw Materials Data'
           };
           var subtitle = {
              text: 'Year:2018'
           };
           var xAxis = {
              categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul',
                 'Aug','Sep','Oct','Nov','Dec'],
              crosshair: true
           };
           var yAxis = {
              min: 0,
              title: {
                 text: 'Capacity (Tonnes)'
              }
           };
           var tooltip = {
              headerFormat: '<span style = "font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style = "color:{series.color};padding:0">{series.name}: </td>' +
                 '<td style = "padding:0"><b>{point.y:.1f} tonnes</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
           };
           var plotOptions = {
              column: {
                 pointPadding: 0.2,
                 borderWidth: 0
              }
           };
           var credits = {
              enabled: false
           };
           var series= [{

               name: 'Iron Ore',
               data: [<?php echo join($Capacity3, ',') ?>]

           },
                        {

               name: 'Cooking Coal',
               data: [<?php echo join($Capacity4, ',') ?>]

           },
                        {
               name: 'Boiler Coal',
               data: [<?php echo join($Capacity5, ',') ?>]

           },
           ];

           var json = {};
           json.chart = chart;
           json.title = title;
           json.subtitle = subtitle;
           json.tooltip = tooltip;
           json.xAxis = xAxis;
           json.yAxis = yAxis;
           json.series = series;
           json.plotOptions = plotOptions;
           json.credits = credits;
           $('#container').highcharts(json);

        });
     </script>
  </body>

</div>

<div id="production" class="w3-container city" style="display:none">

  <body>
     <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto"></div>
     <script language = "JavaScript">
        $(document).ready(function() {
           var chart = {
              type: 'column'
           };
           var title = {
              text: 'Total Raw Materials Data'
           };
           var subtitle = {
              text: 'Year:2018'
           };
           var xAxis = {
              categories: ['Jan','Feb','Mar','Apr','May','Jun','Jul',
                 'Aug','Sep','Oct','Nov','Dec'],
              crosshair: true
           };
           var yAxis = {
              min: 0,
              title: {
                 text: 'Capacity (Tonnes)'
              }
           };
           var tooltip = {
              headerFormat: '<span style = "font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style = "color:{series.color};padding:0">{series.name}: </td>' +
                 '<td style = "padding:0"><b>{point.y:.1f} tonnes</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
           };
           var plotOptions = {
              column: {
                 pointPadding: 0.2,
                 borderWidth: 0
              }
           };
           var credits = {
              enabled: false
           };
           var series= [{

               name: 'Iron Ore',
               data: [<?php echo join($Capacity6, ',') ?>]

           },
                        {

               name: 'Cooking Coal',
               data: [<?php echo join($Capacity7, ',') ?>]

           },
                        {
               name: 'Boiler Coal',
               data: [<?php echo join($Capacity8, ',') ?>]

           },
           ];

           var json = {};
           json.chart = chart;
           json.title = title;
           json.subtitle = subtitle;
           json.tooltip = tooltip;
           json.xAxis = xAxis;
           json.yAxis = yAxis;
           json.series = series;
           json.plotOptions = plotOptions;
           json.credits = credits;
           $('#container').highcharts(json);

        });
     </script>
  </body>


</div>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  document.getElementById(cityName).style.display = "block";
}
</script>

</body>
</html>
