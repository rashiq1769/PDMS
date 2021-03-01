<?php
session_start();
require_once('config.php');
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {

}else{
echo " Please Login ";
exit;
}
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">PDMS <i class="fa fa-server" aria-hidden="true"></i></span>
</div>

<!-- Sidebar/menu -->
    <div class="w3-container"></div>
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    
  <div class="w3-container w3-row">
		<br><br>
    <div class="w3-col s4">
      <img src="avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="3.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue w3-card-4"><i class="fa fa-bar-chart" aria-hidden="true"></i>    Production Details</a>
    <a href="5.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-files-o" aria-hidden="true"></i>  Peak Values</a>
    <a href="6.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-upload fa-fw"></i>  Upload</a>
    <a href="1.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-sign-out fa-fw"></i>  Logout</a><br><br>
  </div>
    
</nav>
    
    <!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:42px;">
<div class="w3-row-padding w3-margin-bottom">
<div class="w3-container ">
 <html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
    
    
     <?php

$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=1";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

             $rawName1 = 'Iron Ore';
            $rawCapacity1[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=2";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$rawName2 = 'coking coal';
            $rawCapacity2[] = $row['Capacity'];
        }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=1 and t.Actual_Type=3";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$rawName3 = 'boiler coal';
            $rawCapacity3[] = $row['Capacity'];
         }
    
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=4";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$loadingName1 = 'Coal Tar';
            $loadingCapacity1[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=5";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$loadingName2 = 'Coke Dust';
            $loadingCapacity2[] = $row['Capacity'];
        }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=2 and t.Actual_Type=6";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$loadingName3 = 'Nuts Coke';
            $loadingCapacity3[] = $row['Capacity'];
         }
    
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=7";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$prodName1 = 'Angles';
            $prodCapacity1[] = $row['Capacity'];
         }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=8";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$prodName2 = 'Wire Rods';
            $prodCapacity2[] = $row['Capacity'];
        }
$sql = "select t.*, s.Material_Type, r.Type from Materials_Data t, Actual_materials s, Basic_materials r\n"

    . "where t.Basic_Type = r.S_No AND\n"

    . "t.Actual_Type = s.S_No AND Year=2018 AND t.Basic_Type=3 and t.Actual_Type=9";

         $result = mysqli_query($con,$sql);
         $chart_data="";
         while ($row = mysqli_fetch_array($result)) {

$prodName3 = 'Beams';
            $prodCapacity3[] = $row['Capacity'];
         }
?>
<div class="w3-bar w3-black ">
  <button id='raw' class="w3-bar-item w3-button" onclick=generateGraph('raw.php','r')>Raw Materials</button>
  <button id='loading' class="w3-bar-item w3-button" onclick=generateGraph('loading.php','l')>Loading Materials</button>
  <button id='prod' class="w3-bar-item w3-button" onclick=generateGraph('production.php','p')>Production Materials</button>
</div>

<div id = "container" style = "width: 900px; height: 500px; margin: 0 auto">
    <iframe id='graph' src="raw.php" style='width:900px; height:700px; border:none;' ></iframe>
    </div>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<script>
    function generateGraph(url, type){
        $('#graph').attr('src', url);
    }
    
    
    </script>
</body>
</html>
</div>
</div>
</div>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
