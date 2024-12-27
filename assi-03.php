<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php function calculate_grade($marks) { 
    if ($marks < 0 || $marks > 100) {
         return "Error: Marks should be between 0 and 100."; 
        }
    
    
    elseif ($marks >= 90) { 
        return "Grade: A"; 
    }
     elseif ($marks >= 80) {
         return "Grade: B";
     } elseif ($marks >= 70) {
         return "Grade: C"; 
    } elseif ($marks >= 60) { 
        return "Grade: D"; 
    } else { 
        return "Grade: F"; 
    } 
}
     $marks = 85; 
     echo calculate_grade($marks);
     ?>
</body>
</html>