<?php
require_once 'db_con.php';
    session_start();

    if(!isset($_SESSION['username'])){
      $username = $_SESSION['username'];
      $email = $_SESSION['email'];
      header("Log_in.php");
    }

    if(isset($_POST['logoutuser'])){
      header("Location: ../index.php");
      session_destroy();

    }
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/indexStyle.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://kit.fontawesome.com/0c95e134ce.js" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link href ="../css/indexStyle.css" rel="stylesheet">
    <link href = "../css/login-style.css" rel="stylesheet">
    <link href="../css/userprofile.css" rel ="stylesheet">

<body>
<div class="navbar">
        <header>
        <a href = "../index.php"> <img src="../Photos/Logo.png" alt = "logo" width="80px"></a>
        </header>
        <ul id = "menubar">
            <li> <a href="../index.php">Home</a> </li>
            <li> <a href="#about">About Us</a> </li>
            <li> <a href="#products">Products</a> </li>
            <li> <a href="#customers">Customers</a> </li>
            <li> <a href="#contact">Contact Us</a> </li>
            <?php
                if(isset($_SESSION['username'])){
                    $username = $_SESSION['username'];
                    //palagay here yung sa profile php
                    echo "<li> <a href=",'../Pages/userprofile.php',">",$_SESSION['username'],"</a> </li>";
                }
                else{
                    echo"<li> <a href=",'../Pages/Log_In.php',">Login</a> </li>";
                }
            
            ?>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
</div>

<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">
      Account settings
    </h4>

    <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
        <div class="col-md-3 pt-0">
          <div class="list-group list-group-flush account-settings-links">
            <a class="list-group-item list-group-item-action active" data-toggle="list" href = "userprofile.php">General</a>
          </div>
        </div>
        <div class="col-md-9">
          <div class="tab-content">
            <div class="tab-pane fade active show" id="account-general">

              <div class="card-body media align-items-center">
                <img src="" alt="" class="d-block ui-w-80">
                <div class="media-body ml-4">
                  <label class="btn btn-outline-primary">
                    Upload new photo
                    <input type="file" class="account-settings-fileinput">
                  </label> &nbsp;
                  <button type="button" class="btn btn-default md-btn-flat">Reset</button>

                  <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                </div>
              </div>
              <hr class="border-light m-0">
              <form method = "post">
                <div class="card-body">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control mb-1" name= "usernamebox" value="<?php echo($_SESSION['username']); ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">E-mail</label>
                    <input type="text" class="form-control mb-1" name = "emailbox" value="<?php echo $_SESSION['email'] ?>">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Change Password</label>
                    <input type="text" class="form-control mb-1" name ='password1' id = 'password1' value="Password">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Confirm Password</label>
                    <input type="text" class="form-control mb-1" name ='password2' id = 'password2' value="Confirm Password">
                  </div>
                </div>

            </div>
            <div class="tab-pane fade" id="account-change-password">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Current password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">New password</label>
                  <input type="password" class="form-control">
                </div>

                <div class="form-group">
                  <label class="form-label">Repeat new password</label>
                  <input type="password" class="form-control">
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="account-info">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Bio</label>
                  <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                </div>
                <div class="form-group">
                  <label class="form-label">Birthday</label>
                  <input type="text" class="form-control" value="May 3, 1995">
                </div>
                <div class="form-group">
                  <label class="form-label">Country</label>
                  <select class="custom-select">
                    <option>USA</option>
                    <option selected="">Canada</option>
                    <option>UK</option>
                    <option>Germany</option>
                    <option>France</option>
                  </select>
                </div>


              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">Contacts</h6>
                <div class="form-group">
                  <label class="form-label">Phone</label>
                  <input type="text" class="form-control" value="+0 (123) 456 7891">
                </div>
                <div class="form-group">
                  <label class="form-label">Website</label>
                  <input type="text" class="form-control" value="">
                </div>

              </div>
      
            </div>
            <div class="tab-pane fade" id="account-social-links">
              <div class="card-body pb-2">

                <div class="form-group">
                  <label class="form-label">Twitter</label>
                  <input type="text" class="form-control" value="https://twitter.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Facebook</label>
                  <input type="text" class="form-control" value="https://www.facebook.com/user">
                </div>
                <div class="form-group">
                  <label class="form-label">Google+</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">LinkedIn</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group">
                  <label class="form-label">Instagram</label>
                  <input type="text" class="form-control" value="https://www.instagram.com/user">
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="account-connections">
              <div class="card-body">
                <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
              </div>
              <hr class="border-light m-0">
              <div class="card-body">
                <h5 class="mb-2">
                  <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                  <i class="ion ion-logo-google text-google"></i>
                  You are connected to Google:
                </h5>
                nmaxwell@mail.com
              </div>
              <hr class="border-light m-0">
              <div class="card-body">
                <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
              </div>
              <hr class="border-light m-0">
              <div class="card-body">
                <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
              </div>
            </div>
            <div class="tab-pane fade" id="account-notifications">
              <div class="card-body pb-2">

                <h6 class="mb-4">Activity</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone comments on my article</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone answers on my forum thread</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Email me when someone follows me</span>
                  </label>
                </div>
              </div>
              <hr class="border-light m-0">
              <div class="card-body pb-2">

                <h6 class="mb-4">Application</h6>

                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">News and announcements</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Weekly product updates</span>
                  </label>
                </div>
                <div class="form-group">
                  <label class="switcher">
                    <input type="checkbox" class="switcher-input" checked="">
                    <span class="switcher-indicator">
                      <span class="switcher-yes"></span>
                      <span class="switcher-no"></span>
                    </span>
                    <span class="switcher-label">Weekly blog digest</span>
                  </label>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>               
        <div class="text-right mt-3">
          <button type="submit" class="btn btn-primary" name ="savechanges">Save changes</button>
          <button type="submit" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary" name="logoutuser" href="../index.php">Log Out</button>
    </div>
</form>

  </div>

  <?php
      if(isset($_POST['savechanges'])){
        $stmt = "SELECT username, email, password from users where username = '$username'";
        //Password
        if (isset($_POST['password1']) && isset($_POST['password2'])){
          if($_POST['password1'] == $_POST['password2']){
            //Same Password
            echo "Password same as before";
          } else if(isset($_POST['password1']) && $_POST['password1'] != 'Password'){
            echo "Password Change.";
          } else {

          }
        }

        //Username
        if (isset($_POST['usernamebox'])){
          if($_POST['usernamebox'] == $username){
            echo "Username same as before";
          } else if ($_POST['usernamebox'] != $username){
            echo "Username Change";
          }
        }
        
      }
  ?>
</body>
</html>