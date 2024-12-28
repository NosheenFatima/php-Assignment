<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style> body { font-family: Arial, sans-serif; background-color:#fff; padding: 50px; }
 .container { max-width: 600px; padding: 20px; background-color:pink;
  border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); } 
  .form-group { margin-bottom: 15px; }
   .form-group label { font-weight: bold; }
    .form-control { border-radius: 8px;
    width: 100%;
    height: 37px; } 
    .btn-custom {     background-color: black;
    color: #fff;
    border-radius: 20px;
    width: 100%;
    height: 50px;
    font-weight: 700;
    font-size: 20px; }
      .btn-custom:hover { background-color: #0056b3; }
       </style>
        </head> 
        <body> 
            <div class="container mt-5">
                 <h2 class="text-center">Registration Form</h2>
                  <form method="post" action="proces.php">
                     <div class="form-group"> <label for="first_name">First Name:</label>
                      <input type="text" class="form-control" id="first_name" name="first_name" required> 
                    </div>
                     <div class="form-group"> <label for="last_name">Last Name:</label>
                      <input type="text" class="form-control" id="last_name" name="last_name" required> 
                    </div> <div class="form-group"> <label for="email">Email:</label> 
                    <input type="email" class="form-control" id="email" name="email" required> 
                
                </div>
                 <div class="form-group"> <label>Gender:</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="gender_male" name="gender" value="male"> 
                    <label class="form-check-label" for="gender_male">Male</label>
                 </div> <div class="form-check form-check-inline"> 
                    <input class="form-check-input" type="checkbox" id="gender_female" name="gender" value="female"> 
                    <label class="form-check-label" for="gender_female">Female</label> </div> </div> <div class="form-group">
                         <label for="role">Role:</label> <select class="form-control" id="role" name="role"> <option value="Admin">Admin</option>
                          <option value="Student">Student</option> <option value="Teacher">Teacher</option> </select> </div> <div class="form-group"> 
                            <label for="username">Username:</label>
                             <input type="text" class="form-control" id="username" name="username" required>
                            
                            </div> <div class="form-group"> <label for="password">Password:</label>
                             <input type="password" class="form-control" id="password" name="password" required> 
                            </div> <button type="submit" class="btn btn-custom btn-block">Submit</button> 
                        </form>
                     </div> 
</body>
</html>