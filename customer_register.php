<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>M-Dev Store</title>
      <link rel="stylesheet" href="styles/bootstrap-337.min.css">
      <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
      <link rel="stylesheet" href="styles/style.css">
   </head>
   <body>
      <div id="top">
         <!-- Top Begin --> 
         <div class="container">
            <!-- container Begin -->
            <div class="col-md-6 offer">
               <!-- col-md-6 offer Begin -->  
               <a href="#" class="btn btn-success btn-sm">Welcome</a>
               <a href="checkout.php">4 Items In Your Cart | Total Price: $300 </a>    
            </div>
            <!-- col-md-6 offer Finish -->
            <div class="col-md-6">
               <!-- col-md-6 Begin -->
               <ul class="menu">
                  <!-- menu Begin -->   
                  <li>
                     <a href="customer_register.php">Register</a>
                  </li>
                  <li>
                     <a href="customer/my_account.php">My Account</a>
                  </li>
                  <li>
                     <a href="cart.php">Go To Cart</a>
                  </li>
                  <li>
                     <a href="checkout.php">Login</a>
                  </li>
               </ul>
               <!-- menu Finish -->    
            </div>
            <!-- col-md-6 Finish -->  
         </div>
         <!-- container Finish -->     
      </div>
      <!-- Top Finish -->
      <div id="navbar" class="navbar navbar-default">
         <!-- navbar navbar-default Begin -->  
         <div class="container">
            <!-- container Begin -->
            <div class="navbar-header">
               <!-- navbar-header Begin -->
               <a href="index.php" class="navbar-brand home">
                  <!-- navbar-brand home Begin -->
                  <img src="images/ecom-store-logo.png" alt="M-dev-Store Logo" class="hidden-xs">
                  <img src="images/ecom-store-logo-mobile.png" alt="M-dev-Store Logo Mobile" class="visible-xs">
               </a>
               <!-- navbar-brand home Finish -->
               <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
               <span class="sr-only">Toggle Navigation</span>
               <i class="fa fa-align-justify"></i>   
               </button>
               <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
               <span class="sr-only">Toggle Search</span>
               <i class="fa fa-search"></i>    
               </button>         
            </div>
            <!-- navbar-header Finish -->
            <div class="navbar-collapse collapse" id="navigation">
               <!-- navbar-collapse collapse Begin -->
               <div class="padding-nav">
                  <!-- padding-nav Begin --> 
                  <ul class="nav navbar-nav left">
                     <!-- nav navbar-nav left Begin -->
                     <li class="active">
                        <a href="index.php">Home</a>
                     </li>
                     <li>
                        <a href="shop.php">Shop</a>
                     </li>
                     <li>
                        <a href="customer/my_account.php">My Account</a>
                     </li>
                     <li>
                        <a href="cart.php">Shopping Cart</a>
                     </li>
                     <li>
                        <a href="contact.php">Contact Us</a>
                     </li>
                  </ul>
                  <!-- nav navbar-nav left Finish -->                   
               </div>
               <!-- padding-nav Finish -->       
               <a href="cart.php" class="btn navbar-btn btn-primary right">
                  <!-- btn navbar-btn btn-primary Begin -->
                  <i class="fa fa-shopping-cart"></i>
                  <span>4 Items In Your Cart</span>
               </a>
               <!-- btn navbar-btn btn-primary Finish -->
               <div class="navbar-collapse collapse right">
                  <!-- navbar-collapse collapse right Begin --> 
                  <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                     <!-- btn btn-primary navbar-btn Begin -->
                     <span class="sr-only">Toggle Search</span>
                     <i class="fa fa-search"></i>
                  </button>
                  <!-- btn btn-primary navbar-btn Finish -->    
               </div>
               <!-- navbar-collapse collapse right Finish -->
               <div class="collapse clearfix" id="search">
                  <!-- collapse clearfix Begin -->
                  <form method="get" action="results.php" class="navbar-form">
                     <!-- navbar-form Begin -->
                     <div class="input-group">
                        <!-- input-group Begin -->
                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn">
                           <!-- input-group-btn Begin -->
                           <button type="submit" name="search" value="Search" class="btn btn-primary">
                              <!-- btn btn-primary Begin --> 
                              <i class="fa fa-search"></i>               
                           </button>
                           <!-- btn btn-primary Finish -->
                        </span>
                        <!-- input-group-btn Finish -->    
                     </div>
                     <!-- input-group Finish -->
                  </form>
                  <!-- navbar-form Finish -->                 
               </div>
               <!-- collapse clearfix Finish -->          
            </div>
            <!-- navbar-collapse collapse Finish -->       
         </div>
         <!-- container Finish -->    
      </div>
      <!-- navbar navbar-default Finish -->
      <div id="content">
         <!-- #content Begin -->
         <div class="container">
            <!-- container Begin -->
            <div class="col-md-12">
               <!-- col-md-12 Begin -->
               <ul class="breadcrumb">
                  <!-- breadcrumb Begin -->
                  <li><a href="index.php">Home</a></li>
                  <li>Register</li>
               </ul>
               <!-- breadcrumb Finish -->
            </div>
            <!-- col-md-12 Finish -->
            <div class="col-md-3">
               <!-- col-md-3 Begin -->
               <?php require_once"includes/sidebar.php"; ?>   
            </div>
            <!-- col-md-3 Finish -->

            <div class="col-md-9"><!-- col-md-9 Begin -->

              <div class="box"><!-- box Begin -->

                <div class="box-header"><!-- box-header Begin -->

                  <center><!-- center Begin -->

                    <h2>Crea a New Account</h2>

                    
                    
                  </center><!-- center Finish -->

                  <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Name</label>

                      <input type="text" name="c_name" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Email</label>

                      <input type="text" name="c_email" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Phone</label>

                      <input type="text" name="c_phone" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Password</label>

                      <input type="password" name="c_password" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Country</label>

                      <input type="text" name="c_country" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>City</label>

                      <input type="text" name="c_city" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Address</label>

                      <input type="text" name="c_address" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="form-group"><!-- form-group Begin -->

                      <label>Profile Picture</label>

                      <input type="file" name="c_image" class="form-control" required>
                      
                    </div><!-- form-group Finish -->

                    <div class="text-center"><!-- text-center Finish -->

                      <button type="submit" name="submit" class="btn btn-primary">

                        <i class="fa fa-user"></i> Register
                        
                      </button>
                      
                    </div><!-- text-center Finish -->
                    
                  </form><!-- form Finish -->
                  
                </div><!-- box-header Finish -->
                
              </div><!-- box Finish -->
              
            </div><!-- col-md-9 Finish -->
         </div>
         <!-- container Finish -->
      </div>
      <!-- #content Finish -->
      <?php require_once"includes/footer.php"; ?>   
      <script src="js/jquery-331.min.js"></script>
      <script src="js/bootstrap-337.min.js"></script>  
   </body>
</html>