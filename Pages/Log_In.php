<?php

   require_once "db_con.php";
   $username = $password = "";
   $username_err = $password_err = $login_err = "";
   $stmt = "SELECT username, email, password from users where username = '$username'";

   if (isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $stmt = "SELECT username, email, password from users where username = '$username'";
      //Validate Credentials

      if($stmt = mysqli_prepare($conn, $stmt)){
         $par_username = $username;

         //Execute Statement
         if(mysqli_stmt_execute($stmt)){
            //Store
            mysqli_stmt_store_result($stmt);

            //If username Exists
            if(mysqli_stmt_num_rows($stmt) == 1){
               mysqli_stmt_bind_result($stmt, $username, $email, $hashed_password);
               if(mysqli_stmt_fetch($stmt)){
                  if ($password == $hashed_password){
                     //Correct Password
                     session_start();
                     $_SESSION['loggedin'] = true;
                     $_SESSION['username'] = $username;
                     $_SESSION['email'] = $email;
                     echo "Correct Password";
                     header("location:../index.php");
                  } else {
                     //Invalid Password
                     $login_err = "Invalid password";
                     echo $login_err;         
                  }
               }
            }elseif($username == 'admin' && $password == 'admin12345'){
               header("location:Admin/admin.php");
            }else {
               $login_err = "Username Does not exist";
               echo $login_err;
            }
         } else {
            echo "oops lmao";
         }
         mysqli_stmt_close($stmt);
      }
      mysqli_close($conn);
   }

   //Skip the box if empty thing
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login-style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/0c95e134ce.js" crossorigin="anonymous"></script>
</head>

<body style="font-family: 'Oswald', sans-serif;">
    <div class="sidenav">
        <div class="login-main-text">
            <a href="../index.php"><i class="fas fa-home fa-lg "></i></a>
            <br><br>
            <div>LOGO</div>
            <h2>Accounts <br> Login Page</h2>
            <br><br><br>
            <h5>No Registered Yet?<br>
               <a href="Registration.php">Click Here!</a>
            </h5>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method = "post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name = "username" class="form-control">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name = "password" class="form-control">
                  </div>
                  <button type="submit" name ="submit" class="btn btn-black">Login</button>
               </form>
            </div>
         </div>
      </div>
    
</body>
</html>