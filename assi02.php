<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //question i
 $foo = "100foo"; 
  $bar = "200bar"; 
    settype( $foo, "integer" ); 
    settype( $bar , "integer");
    $sum=$foo+$bar;
    echo $sum;
    echo "<br>";
    //question 2
    $str1 = "Hello ";
     $str2 = "hi ";
      $str3 = "Bye"; 
   $concat_string = $str1 . $str2 . $str3; 
   echo $concat_string; 
   //question 3
   echo "<br>"; 
   echo "<br>";
   $github_profile = "https://github.com/NosheenFatima";
    echo "My GitHub profile link is: " . $github_profile;
?>
</body>
</html>