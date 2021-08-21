<?php
require  "./includes/connection.php";


?>
<!DOCTYPE html>

<html>
    <head>
        <title>Fashion-Hub-LogIn</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                <!--google fonts link-->
               <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

  <style>
      .panel-body{
          margin-left: 40px;
         margin-right: 40px;
        
      }
      
</style>
    </head>
    <body>
        <?php
	require './includes/navbar.php'; ?>
           <div class="login-img">
               <div class="container">
           <div class="row_style_login">
                            <h1 style="color:white;">&nbsp;  &nbsp; &nbsp; &nbsp;Login</h1>
                            
                   <div class="panel-body">
                       <p style="color:white;">&nbsp; &nbsp;Login to make a purchase</p>
                       <form action="login_submit.php" method="post">
						<div class="form-group ">
							<input type="email" class="form-control w3-round-xlarge" id="email" name="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
						</div>
						<div class="form-group ">
							<input type="password" class="form-control w3-round-xlarge" id="password" name="password" placeholder="Enter Password" pattern=".{6,}" required>
						</div>
                           <div class="panel-footer w3-round-xlarge">
                               <strong>   Don't have an account?<a href="signup.php" style="text-decoration: none">&nbsp;Register</a></strong>
				</div>
                           <br>	<button type="submit" class="btn btn-primary w3-round-xlarge">Login</button>   
                    <a href="#">Forgot Password?</a>
                
                                                
					</form>
                                    <br>
				
			</div>




               
              </div>
        
         </div>
   </div>
        
        
        
       <?php
	require './includes/footer.php'; ?> 
    </body>
</html>