<?php
session_start();
require_once('config.php');
$sql = "SELECT * FROM Basic_Materials";
$result2 = mysqli_query($con, $sql);
$options = "";
while($row2 = mysqli_fetch_array($result2))
{
$options = $options."<option value=$row2[0]>$row2[1]</option>";
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<select id='basicMaterial' onchange="populateActualMaterials()">
<?php echo $options;?>
</select>
<select id='actualMaterial' >
</select>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
function populateActualMaterials(){
$('#actualMaterial').empty();
var basicMaterial = $("#basicMaterial").val()==undefined?1:$("#basicMaterial").val();
console.info(basicMaterial);
$.ajax({ 'url' : 'utility.php',
          'method' : 'POST',
          'data' : {
          'id' : basicMaterial,
          'api' : 'getActualMaterial'
},
          'success' : function(dlist){
                        console.info(dlist);
                        var dlist = JSON.parse(dlist);
                        for(var i=0; i<dlist.length;i++)
                          $('#actualMaterial').append('<option value='+dlist[i].id+'>'+dlist[i].desc+'</option>')
                      }
                    }
                  );
                }
$(document).ready(function(){
populateActualMaterials();
}
);
</script>
</body>
</html>
