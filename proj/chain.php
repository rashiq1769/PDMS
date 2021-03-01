<?php
session_start();
require_once('config.php');

 ?>
<html>
<body>
<style>
#chartdiv {
width: 100%;
height:800px;
}
</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/plugins/forceDirected.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

var chart = am4core.create("chartdiv", am4plugins_forceDirected.ForceDirectedTree);
var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

chart.data = [
  {
    name: "Materials",
    children: [
      {
        name: "Raw Material",
        children: [
          { name: "Iron Ore", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=1");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Cooking Coal ", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=2");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Boiler Coal", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=1 AND Actual_Type=3");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> }
        ]
      },
      {
        name: "Loading Material",
        children: [
          { name: "Coal Tar", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=4");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Coke Dust", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=5");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Nuts Coke", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=2 AND Actual_Type=6");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> }
        ]
      },

      {
        name: "Production",
        children: [
          { name: "Angles", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=7");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Wire Rods", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=8");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> },
          { name: "Beams", value: <?php
				$sql = mysqli_query($con,"SELECT SUM(Capacity) AS SUM_Capacity FROM Materials_Data WHERE Basic_Type=3 AND Actual_Type=9");
				while($row = mysqli_fetch_array($sql))
				echo $row ['SUM_Capacity'];
				?> }
        ]
      },


    ]
  }
];

networkSeries.dataFields.value = "value";
networkSeries.dataFields.name = "name";
networkSeries.dataFields.children = "children";
networkSeries.nodes.template.tooltipText = "{name}:{value}";
networkSeries.nodes.template.fillOpacity = 1;
networkSeries.manyBodyStrength = -20;
networkSeries.links.template.strength = 3.8;
networkSeries.minRadius = am4core.percent(2);

networkSeries.nodes.template.label.text = "{name}"
networkSeries.fontSize = 10;

}); // end am4core.ready()
</script>
<!-- HTML -->
<div id="chartdiv"></div>
</body>
</html>
