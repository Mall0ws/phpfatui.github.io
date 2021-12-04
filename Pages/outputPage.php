<!--- test page lang. --->

<!DOCTYPE html>
<html>
<body>
    <?php
    include 'db_con.php';
        //echo($_POST['fName']);
        //echo($_POST['lName']);
        //echo($_POST['address']);
        //echo($_POST['email']);
        echo($_POST['password']);
        //echo($_POST['cpass']);
        echo($_POST['username']);

        require_once "db_con.php";
   $username = $password = "";
   $username_err = $password_err = $login_err = "";
   $hashed_password = "";

   if (isset($_POST['submit'])){
      $username = $_POST['username'];
      $password = $_POST['password'];
      $stmt = "SELECT username, email, password FROM users WHERE username = ?";
      //Validate Credentials

      if($stmt = mysqli_prepare($conn, $stmt)){
        mysqli_stmt_bind_param($stmt, "s", $par_username);
        $par_username = $username;

         //Execute Statement
         if(mysqli_stmt_execute($stmt)){
            //Store
            mysqli_stmt_store_result($stmt);

            //If username Exists
            if(mysqli_stmt_num_rows($stmt) == 1){
               mysqli_stmt_bind_result($stmt, $username, $email, $hashed_password);
               $hash = password_hash($hashed_password, PASSWORD_DEFAULT);
               if(mysqli_stmt_fetch($stmt)){
                  if ($password == $hashed_password){
                     //Correct Password
                     session_start();
                     $_SESSION['loggedin'] = true;
                     $_SESSION['username'] = $username;
                     echo "Correct Password";
                     header("location:../index.php");
                  } else {
                     //Invalid Password
                     $login_err = "Invalid password";
                     echo $login_err;
                  }
               }
            } else {
               $login_err = "Username Does not exist";
               echo $login_err;
            }
         } else {
            echo "oops lmao";
         }
         mysqli_stmt_close($stmt);
      }
   }

   die(mysqli_error($conn));
   mysqli_close($conn);
   echo $username;
    ?>
</body>
</html>