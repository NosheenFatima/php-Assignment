<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          body { font-family: Arial, sans-serif; 
        background-color: #f8f9fa;
         margin: 0;
         padding: 0; }
          .container { 
        max-width: 700px;
         margin: 50px auto;
          padding: 20px;
         background-color:pink;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           border-radius: 5px;
         } 
         h2 { 
            text-align: center;
             margin-bottom: 20px;
             }
             
             
             
    table { 
        width: 100%; border-collapse: collapse; 
    } table, th, td { border: 1px solid white; 
    } 
    th, td { padding: 10px;
         text-align: left; } 
         th 
        { 
            background-color: black; 
            color: white; }
    </style>
</head>
<body>
<div class="container"> 
    <h2>Submitted Student Information</h2>
     
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
     $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING); 
     $dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING);
      $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
       $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        
        if ($email === false) 
        { 
            echo "<div class='alert alert-danger'>Invalid email format.</div>";
             exit; 
        } 
         echo "<table> <tr><th>Field</th><th>Value</th></tr> 
         <tr><td>First Name</td><td>$first_name</td></tr>
          <tr><td>Last Name</td><td>$last_name</td></tr> 
          <tr><td>Date of Birth</td><td>$dob</td></tr>
           <tr><td>Address</td><td>$address</td></tr> 
           <tr><td>Mobile Number</td><td>$mobile</td></tr> 
           <tr><td>Email</td><td>$email</td></tr> </table>";
         } else { 
            echo "<div class='alert alert-danger'>No data submitted.</div>";
         }
?>
   </div>
</body>
</html>