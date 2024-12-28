<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> body { font-family: Arial, sans-serif; background-color: #f0f8ff; padding: 50px; } 
    .container { max-width: 700px; padding: 20px; background-color: 
    #fff; border-radius: 10px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); }
    table {
         width: 100%; border-collapse: collapse; margin-top: 20px; } 
    table, th, td { border: 1px solid black; 
    } th, td {    padding: 10px;
    text-align: left;
    background-color: antiquewhite; }
    th {
    background-color: pink;
    color: white;
}
.container h2{
    text-align:center;
   
}

     </style>
      </head> 
      <body> 
        <div class="container"> 
            <h2 class="text-center">Submitted Registration Details</h2>
             <?php if ($_SERVER["REQUEST_METHOD"] == "POST")
              {  $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
                 $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING); 
                 $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
                  $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING); 
                  $role = filter_input(INPUT_POST, 'role', FILTER_SANITIZE_STRING);
                   $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
                    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                     if ($email === false)
                      { echo "<div class='alert alert-danger'>Invalid email format.</div>"; exit; }
                    echo "<table class='table table-bordered'>
                     <tr><th>Field</th><th>Value</th></tr>
                      <tr><td>First Name</td><td>$first_name</td></tr>
                       <tr><td>Last Name</td><td>$last_name</td></tr> 
                       <tr><td>Email</td><td>$email</td></tr>
                        <tr><td>Gender</td><td>$gender</td></tr>
                         <tr><td>Role</td><td>$role</td></tr> 
                         <tr><td>Username</td><td>$username</td></tr> 
                         <tr><td>Password</td><td>$password</td></tr>
                          </table>"; } 
                          else { 
                            echo "<div class='alert alert-danger'>No data submitted.</div>"; 
                            } ?>
                             </div>
</body>
</html>