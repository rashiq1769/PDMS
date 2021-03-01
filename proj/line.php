<?php
session_start();
require_once('config.php');
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND t.Basic_Type=1 and t.Actual_Type=1";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {
         $Capacity[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

             . "where t.Basic_Type = r.S_No AND\n"

             . "t.Actual_Type = s.S_No AND t.Basic_Type=1 and t.Actual_Type=2";

          $result = mysqli_query($con,$sql);
          $chart_data="";
          while ($row = mysqli_fetch_array($result)) {
          $Capacity1[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

             . "where t.Basic_Type = r.S_No AND\n"

             . "t.Actual_Type = s.S_No AND t.Basic_Type=1 and t.Actual_Type=3";

          $result = mysqli_query($con,$sql);
          $chart_data="";
          while ($row = mysqli_fetch_array($result)) {
          $Capacity2[] = $row['Capacity'];
                  }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                      . "where t.Basic_Type = r.S_No AND\n"

                      . "t.Actual_Type = s.S_No AND t.Basic_Type=2 and t.Actual_Type=4 ";

          $result = mysqli_query($con,$sql);
          $chart_data="";
          while ($row = mysqli_fetch_array($result)) {
          $Capacity3[] = $row['Capacity'];
                           }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                               . "where t.Basic_Type = r.S_No AND\n"

                               . "t.Actual_Type = s.S_No AND t.Basic_Type=2 and t.Actual_Type=5 ";

          $result = mysqli_query($con,$sql);
          $chart_data="";
          while ($row = mysqli_fetch_array($result)) {


                                         $Capacity4[] = $row['Capacity'];
                                    }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                                        . "where t.Basic_Type = r.S_No AND\n"

                                        . "t.Actual_Type = s.S_No AND t.Basic_Type=2 and t.Actual_Type=6 ";

          $result = mysqli_query($con,$sql);
          $chart_data="";
          while ($row = mysqli_fetch_array($result)) {
          $Capacity5[] = $row['Capacity'];
                                             }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                                                 . "where t.Basic_Type = r.S_No AND\n"

                                                 . "t.Actual_Type = s.S_No AND t.Basic_Type=3 and t.Actual_Type=7 ";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {
         $Capacity6[] = $row['Capacity'];
                                                      }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                                                          . "where t.Basic_Type = r.S_No AND\n"

                                                          . "t.Actual_Type = s.S_No AND t.Basic_Type=3 and t.Actual_Type=8 ";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {
         $Capacity7[] = $row['Capacity'];
                                                               }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

                                                                   . "where t.Basic_Type = r.S_No AND\n"

                                                                   . "t.Actual_Type = s.S_No AND t.Basic_Type=3 and t.Actual_Type=9 ";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {
         $Capacity8[] = $row['Capacity'];
                                                                        }

?>
<html>
   <head>

      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
      <script src = "https://code.highcharts.com/highcharts.js"></script>
   </head>

   <body>
      <div id = "container" style = "width: 900px; height: 400px; margin: 0 auto"></div>
      <script language = "JavaScript">
         $(document).ready(function() {
             
            var title = {
               text: 'Total Production Data'
            };
            var subtitle = {

            };
            var xAxis = {
              categories: ['1','2','3','4','5','6','7','8',
                  '9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24'],


            };
            var yAxis = {
               title: {
                  text: 'Tonnes',


               },
               plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
               }]
            };
            var tooltip = {
               valueSuffix: 'Tonnes'
            }
            var legend = {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'middle',
               borderWidth: 0
            };
            var series =  [{
                  name: 'Iron Ore',
                  data: [<?php echo join($Capacity, ',') ?>]
               },
               {
                  name: 'Boiler Coal',
                  data: [<?php echo join($Capacity1, ',') ?>]
               },
               {
                  name: 'Cooking Coal',
                  data: [<?php echo join($Capacity2, ',') ?>]
               },
               {
                  name: 'Coal Tar',
                  data: [<?php echo join($Capacity3, ',') ?>]
               },
               {
                  name: 'Coke Dust',
                  data: [<?php echo join($Capacity4, ',') ?>]
               },
               {
                  name: 'Nuts Cokes',
                  data: [<?php echo join($Capacity5, ',') ?>]
               },
               {
                  name: 'Angles',
                  data: [<?php echo join($Capacity6, ',') ?>]
               },
               {
                  name: 'Wire Rods',
                  data: [<?php echo join($Capacity7, ',') ?>]
               },
               {
                  name: 'Beams',
                  data: [<?php echo join($Capacity8, ',') ?>]
               }
            ];

            var json = {};
            json.title = title;
            json.subtitle = subtitle;
            json.xAxis = xAxis;
            json.yAxis = yAxis;
            json.tooltip = tooltip;
            json.legend = legend;
            json.series = series;

            $('#container').highcharts(json);
         });
      </script>
   </body>

</html>
