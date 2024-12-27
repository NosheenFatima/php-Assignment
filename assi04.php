<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   $cities = array("Karachi", "Islamabad", "Lahore", "Peshawar", "Skardu", "Gilgit");

   echo "<table border='1'>";

   echo "<tr><th>Cities</th></tr>";
   foreach ($cities as $city) {
       echo "<tr><td>$city</td></tr>";
   }
   echo "</table>"; 
   echo "<br>";
   
   //quetsion03
   $capitals = array(
     "Italy" => "Rome", 
   "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
     "Denmark" => "Copenhagen", 
     "Finland" => "Helsinki",
      "France" => "Paris" ); 
    $capitals["Pakistan"] = "Islamabad"; 
    echo "<h2> cities name</h2>"; 
    foreach ($capitals as $country => $capital) {
         echo "The capital of $country is $capital.<br>";
         }
       
 ?>

</body>
</html>