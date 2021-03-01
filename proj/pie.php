<?php
session_start();
require_once('config.php');
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=1";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity[] = $row['SUM_Capacity'];
		         }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=2";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity1[] = $row['SUM_Capacity'];
		         }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=3";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity2[] = $row['SUM_Capacity'];
		                  }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=4";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity3[] = $row['SUM_Capacity'];
		                           }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=5";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity4[] = $row['SUM_Capacity'];
		                                    }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=6";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity5[] = $row['SUM_Capacity'];
		                                             }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=7";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity6[] = $row['SUM_Capacity'];
		                                                      }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=8";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity7[] = $row['SUM_Capacity'];
		                                                               }
		$sql = "SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=9";

		         $result = mysqli_query($con,$sql);
		         $chart_data="";
		         while ($row = mysqli_fetch_array($result)) {
             $Capacity8[] = $row['SUM_Capacity'];
		                                                                        }

		?>
		<html>
		   <head>

		      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
		      </script>
		      <script src = "https://code.highcharts.com/highcharts.js"></script>
		   </head>

		   <body>
		      <div id = "container" style = "width: 700px; height: 385px; margin: 0 auto"></div>
		      <script language = "JavaScript">
		         $(document).ready(function() {
		            var chart = {
		               plotBackgroundColor: null,
		               plotBorderWidth: null,
									 backgroundColor: 'transparent',
		               plotShadow: false
		            };
		            var title = {
		               text: ''
		            };
		            var tooltip = {
		               pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
		            };
		            var plotOptions = {
		               pie: {
		                  allowPointSelect: true,
		                  cursor: 'pointer',

		                  dataLabels: {
		                     enabled: true,
		                     format: '<b>{point.name}%</b>: {point.percentage:.1f} %',
		                     style: {
		                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor)||
		                        'black'
		                     }
		                  }
		               }
		            };
		            var series = [{
		               type: 'pie',
		               name: 'Tonnes',
		               data: [
		                  ['Iron Ore',   <?php echo join($Capacity, ',') ?>],
		                  ['Cooking Coal',       <?php echo join($Capacity1, ',') ?>],
		                  ['Boiler Coal',    <?php echo join($Capacity2, ',') ?>],
		                  ['Coal Tar',     <?php echo join($Capacity3, ',') ?>],
		                  ['Coke Dust',   <?php echo join($Capacity4, ',') ?>],
		                  ['Nuts Cokes',   <?php echo join($Capacity5, ',') ?>],
		                  ['Angles',   <?php echo join($Capacity6, ',') ?>],
		                  ['Wire Rods',   <?php echo join($Capacity7, ',') ?>],
		                  ['Beams',   <?php echo join($Capacity8, ',') ?>]
		               ]
		            }];
		            var json = {};
		            json.chart = chart;
		            json.title = title;
		            json.tooltip = tooltip;
		            json.series = series;
		            json.plotOptions = plotOptions;
		            $('#container').highcharts(json);
		         });
		      </script>
		   </body>
</html>
