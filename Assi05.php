<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
function reverse_string($str) { 
    return strrev($str); 
} 

echo reverse_string("Hello Gyus"); 
//qustion 02
echo"<br>";
function factorial($n) {
     if ($n < 0) {
         return "Invalid input. Factorial is not defined for negative numbers.";
     } if ($n == 0) {
         return 1; 
        } 
        $result = 1; 
    for ($i = 1; $i <= $n; $i++) {
         $result *= $i;
    } 
    return $result; 
} 
 echo factorial(5); 
//  question 3
echo"<br>";
function check_palindrome($string) 
{
    
    if ($string == strrev($string)){
    
    echo "yes $string.this word is plandrome";
        return 1; 
    }
    else
        return 0; 
}

echo check_palindrome('madam')."\n"; 

?>
</body>
</html>