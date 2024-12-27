<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> body { font-family: Arial, sans-serif; 
    background-color: #f8f9fa;
     margin: 0; padding: 0;
     } .container 
     { max-width: 500px;
     margin: 50px auto;
     padding: 20px;
     background-color: #fff; 
     box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
     border-radius: 5px; }
      h2 { 
        text-align: center; 
        margin-bottom: 20px;
     } .form-group
      { margin-bottom: 15px;
     } .form-group label 
     { display: block; 
    margin-bottom: 5px; 
} .form-group input 
{ width: calc(100% - 20px);
 padding: 10px;
  font-size: 14px;
   border: 1px solid #ced4da;
    border-radius: 4px; 
    background-color: #fff; 
    margin-bottom: 5px;
 } .form-group input[type="submit"]
  { background-color: pink; color: #fff;
     border: none; 
     cursor: pointer; width: 100%;
     } .form-group input[type="submit"]:hover 
     {
        background-color: pink; }
     
            </style>
</head>
<body>
<div class="container"> 
    
<h2>Student Registration Form</h2>
<form method="post" action="process.php">
 <div class="form-group"> 
<label for="first_name">First Name:</label>
 <input type="text" id="first_name" name="first_name" required>
 </div> <div class="form-group">
 <label for="last_name">Last Name:</label>
  <input type="text" id="last_name" name="last_name" required> 
</div>
 <div class="form-group">
 <label for="dob">Date of Birth:</label> 
 <input type="date" id="dob" name="dob" required> </div> 
 <div class="form-group"> <label for="address">Address:</label> 
 <input type="text" id="address" name="address" required> </div>
  <div class="form-group"> 
    <label for="mobile">Mobile Number:</label> 
  <input type="tel" id="mobile" name="mobile" required> </div> 
  <div class="form-group">
     <label for="email">Email:</label>
   <input type="email" id="email" name="email" required>
 </div>
  <div class="form-group">
     <input type="submit" value="Submit"> </div> </form>


</body>
</html>