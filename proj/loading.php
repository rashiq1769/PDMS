<?php
session_start();
require_once('config.php');
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=4";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=5";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity1[] = $row['Capacity'];
        }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=6";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {


            $Capacity2[] = $row['Capacity'];
         }
?>
<html>
   <head>
      <title>Total Loading Materials Data</title>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>
   </head>
   <body>
      <div id = "container" style = "width: 800px; height: 500px; margin: 0 auto"></div>
      <script language = "JavaScript">
         $(document).ready(function() {
            var chart = {
               type: 'column',
                backgroundColor: 'transparent',
            };
            var title = {
               text: 'Total Loading Materials Data'
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

                name: 'Coal Tar',
                data: [<?php echo join($Capacity, ',') ?>]

            },
                         {

                name: 'Coke Dust',
                data: [<?php echo join($Capacity1, ',') ?>]

            },
                         {
                name: 'Nuts Coke',
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

</html>
