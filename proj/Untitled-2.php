<?php
	session_start();
	require_once('config.php');
?>
<html>
<div class="w3-main " style="margin-left:300px;margin-top:42px;">
<div class="w3-row-padding w3-margin-bottom">
<div class="w3-container w3-animate-right">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body>

<div class="w3-display ">
<div class="w3-centre">
<div class="w3-container">
<div class="w3-container  w3-black ">
<h2 class="w3-center"><i class="fa fa-database" aria-hidden="true"></i> Peak Values</h2>
</div>
<div class="w3-container w3-white  w3-card-4  w3-padding-16">
<form action="get.php">
<br>
<div class="w3-row-padding" style="margin:0 -16px;">
<div class="w3-quarter w3-margin-bottom">
<label><i class="fa fa-calendar-o"></i> From </label>
<input class="w3-input w3-border" type="number" placeholder=" MM " name="Year" min="1" max="12" required>
</div>
<div class="w3-quarter w3-margin-bottom">
<br>
<input class="w3-input w3-border" type="number" placeholder=" YYYY " name="Year" required>
</div>
<div class="w3-quarter">
<label><i class="fa fa-calendar-o"></i> To </label>
<input class="w3-input w3-border" type="number" placeholder=" MM " name="Month" min="1" max="12" required>
</div>
<div class="w3-quarter">
<br>
<input class="w3-input w3-border" type="number" placeholder=" YYYY " name="Month" required><br><br>
</div>
</div>
<div class="w3-row-padding">
<script>
function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Raw Material"){
		var optionArray = ["|","iron Ore|Iron Ore","cooking Coal|Cooking Coal","boiler Coal|Boiler Coal"];
	} else if(s1.value == "Loading Material"){
		var optionArray = ["|","coal Tar|Coal Tar","coke Dust|Coke Dust","nuts Coke|Nuts Coke"];
	} else if(s1.value == "Production Material"){
		var optionArray = ["|","angles|Angles","wire Rods|Wire Rods","beams|Beams"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
</script>
<div class="w3-row-padding" style="margin:0 -16px;">   
<div class="w3-container w3-half">
Basic Type:<br>
<select id="slct1" name="slct1" onchange="populate(this.id,'slct2')">
  <option value=""></option>
  <option value="Raw Material">Raw Material</option>
  <option value="Loading Material">Loading Material</option>
  <option value="Production Material">Production Material</option>
</select>
</div>

<div class=" w3-half">
Actual Type:<br>
<select id="slct2" name="slct2"></select>
</div>

</div>

<div class="w3-container w3-margin-bottom"><br><br>

<button class="w3-button w3-dark-grey" type="submit"><i class="fa fa-search w3-margin-right"></i>  Get Data  </button>
</div>
<br>

</div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </body>
    </div>
    </div>
</div>
    </html>
