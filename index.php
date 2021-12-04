<?php
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Business Page</title>
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
</head>
<body>
    <!-- start of section-products -->
    <div class="navbar">
        <header>
        <a href = "#home"> <img src="Photos/Logo.png" alt = "logo" width="80px"></a>
        </header>
        <ul id = "menubar">
            <li> <a href="#home">Home</a> </li>
            <li> <a href="#about">About Us</a> </li>
            <li> <a href="#products">Products</a> </li>
            <li> <a href="#customers">Customers</a> </li>
            <li> <a href="#contact">Contact Us</a> </li>
            <?php
                if(isset($_SESSION['username'])){
                    $username = $_SESSION['username'];
                    //palagay here yung sa profile php
                    echo "<li> <a href=",'Pages/userprofile.php',">$username</a> </li>";
                }
                else{
                    echo"<li> <a href=",'Pages/Log_In.php',">Login</a> </li>";
                }
            
            ?>
            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
        </ul>
    </div>

    <section id = "home">
    <div class="section-intro">
        <div class="row">
            <div class="col">
            <br> 
            </div>
            <div class="col">
            <br><br><br><br><br><br><br><br><br><br><br>
                <div class="animate__animated animate__backInLeft"><h1>Lorem</h1></div>
                <div class="animate__animated animate__backInLeft"><h1>Ipsum</h1></div>
                <div class="animate__animated animate__backInLeft">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis voluptates ullam neque aspernatur velit dolore at aliquid est sequi. Nemo architecto.</p>
                </div>
                <a href="Pages/Registration.php">
                    <div class="animate__animated animate__bounceIn animate__delay-2s">
                    <div class="button" align = center>Register Now</div>
                    </div>
                </a>
          <br>
        </div>

        <div class="col-sm-8">
        <br> 
        </div>
    </div>
    </section>

    <!-- start of section-about -->
    <section id = "about">

        <div class="about-content">
            <div class = "inner">
                <h2>About Us</h2> 
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisi vitae suscipit tellus mauris a diam maecenas sed. 
                </p>
    
            </div>
            
            
        </div>
    </section>
    <!-- end of section-about  -->


    <!-- start of section-products -->
    <section class="section-products" id = "products">
		<div class="container">
				<div class="row justify-content-center text-center">
						<div class="col-md-8 col-lg-6">
								<div class="header">
										<h3>Featured Product</h3>
										<h2>Popular Products</h2>
								</div>
						</div>
				</div>
				<div class="row">
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-1" class="single-product">
										<div class="part-1">
                                                <span class="discount">15% off</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Zhong Li</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-2" class="single-product">
										<div class="part-1">
										</div>
										<div class="part-2">
												<h3 class="product-title">Ayaka</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-3" class="single-product">
										<div class="part-1">
                                                <span class="discount">15% off</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Eula</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-4" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Raiden Shogun</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-5" class="single-product">
										<div class="part-1">
                                                <span class="discount">15% off</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Rosaria</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-6" class="single-product">
										<div class="part-1">
										</div>
										<div class="part-2">
												<h3 class="product-title">Xiao</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-7" class="single-product">
										<div class="part-1">
                                                <span class="discount">15% off</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Venti</h3>
												<h4 class="product-old-price">$79.99</h4>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
						<!-- Single Product -->
						<div class="col-md-6 col-lg-4 col-xl-3">
								<div id="product-8" class="single-product">
										<div class="part-1">
												<span class="new">new</span>
										</div>
										<div class="part-2">
												<h3 class="product-title">Bennett</h3>
												<h4 class="product-price">$49.99</h4>
										</div>
								</div>
						</div>
				</div>
		</div>
</section>
    <!-- start of section-products -->
    
    <!-- start of section-customers -->
    <section id = "customers">
        <div class = "customers-content">
            
            <h2 style = "color: black">Customer Reviews</h2>
            <div class="border">
                
            </div>

            <div class="row">

                <!-- Customer 1 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer1.png">
                        <div class="name">Person 1 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>
                

                <!-- Customer 2 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer2.png">
                        <div class="name">Customer 2 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>


                <!-- Customer 3 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer3.png">
                        <div class="name">Customer 3 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>

            </div>

            <div class="row">

                <!-- Customer 1 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer1.png">
                        <div class="name">Person 1 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>
                

                <!-- Customer 2 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer2.png">
                        <div class="name">Customer 2 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>


                <!-- Customer 3 -->
                <div class="column">
                    <div class="review">
                        <img src="Photos/Customers/customer3.png">
                        <div class="name">Customer 3 Name</div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                </div>

            </div>
        </div>           
    </section>
    <!-- end of section-customers  -->

    <section id = "contact">   
        <div class = "contact-content"> 
            <div class = "title">
                <h2>Get In Touch with us</h2>
            </div>
            <br>
            <div class = "box"> 
                <!-- contact form -->
                <div class="contact form"> 
                    <h3> Send us a message</h3>
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>   
                                    <input type="text" name = "fname">
                                </div>
                                
                                <div class="inputBox">
                                    <span>Last Name</span>   
                                    <input type="text" name = "lname"> 
                                </div>
                            </div>

                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email</span>   
                                    <input type="email" name = "email">  
                                </div>

                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" name = "num"> 
                                </div>
                            </div>

                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea name = "msg"></textarea>                                
                                </div>
                            </div>
                                <br>

                            <div class="row100">
                                <div class="inputBox">
                                    <input type="submit" name = "submit" value = "Submit" class = "submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- contact info -->
                <div class="contact info"> 
                  <h3>Contact Information</h3> 
                  
                  <div class = "infoBox">
                    <div>
                      <span><ion-icon name="location"></ion-icon></span>
                      Sampaloc, Manila, Philippines
                    </div>

                    <div>
                      <span><ion-icon name="mail"></ion-icon></span>
                      <a href = "#">company@gmail.com</a>
                    </div>

                    <div>
                      <span><ion-icon name="call"></ion-icon></span>
                      <a href = "#">+63 912 3456 789</a>
                    </div>                    
                  </div> 
                </div>

                <!-- map  -->
                <div class="contact map"> 
                  <div class ="gmap"><iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d965.3674208193393!2d120.98238900000001!3d14.572291999999997!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d14.5722401!2d120.9825607!5e0!3m2!1sen!2ssg!4v1638277887511!5m2!1sen!2ssg" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>

            </div>

        </div>
    </section>
    <!-- end of section-contact  -->
    
    <!-- start of footer  -->
    <footer>
        <div class="footer-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>

            <ul class="socials">
                <li><a href ="#"><i class="fab fa-facebook"></i></a> </li>
                <li><a href ="#"><i class="fab fa-twitter"></i></a> </li>
                <li><a href ="#"><i class="fab fa-instagram"></i></a> </li>
                <li><a href ="#"><i class="fab fa-google-plus"></i></a> </li>
            </ul>
            <p>Copyright &copy; 2021. Designed by <span>Fatui</span></p>
        </div>


    </footer>
    <!-- end of footer  -->

<?php
    if(isset($_GET['submit'])){
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $num = $_REQUEST['num'];
        $msg = $_REQUEST['msg'];

        include_once "Pages/db_con.php";
        $sql = "INSERT INTO response(`firstName`,`lastName`,`email`,`contact`,`message`)
            VALUES('$fname','$lname','$email','$num','$msg')";
                                            
        $result = mysqli_query($conn, $sql);
        if($result){
            // echo "Submitted Successfully";
        }else{
            // echo "Error Occured";
        }
    }
?>

    </body>
</html>