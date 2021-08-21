<?php
require "./includes/connection.php";

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Fashion-Hub-SignUp</title>
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
    </head>
    <body>
        <?php
	require './includes/navbar.php'; ?>
        
       <div class="bg-img">
           <div class="row_style_signup">
          <h1 style="color: white;">Sign Up</h1>
               <div class="panel-body">
					<form method="post" action="signup_script.php">
						<div class="form-group">
							<input type="text" class="form-control w3-round-xlarge" name="name" placeholder="Name"  pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control w3-round-xlarge" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
						</div>
						<div class="form-group">
							<input type="password" class="form-control w3-round-xlarge" name="password" placeholder="Password" pattern=".{6,}" required>
						</div>
						<div class="form-group">
							<input type="number" class="form-control w3-round-xlarge" name="contact" placeholder="Contact" maxlength="10" size="10" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control w3-round-xlarge" name="city" placeholder="City" required>
						</div>
						<div class="form-group">
							<input type="text" class="form-control w3-round-xlarge" name="address" placeholder="Address" required>
						</div>
						<button type="submit" class="btn btn-primary w3-round-xlarge">Submit</button>
					</form>
				</div>
           </div>
</div>
        
        
        
        
        
       
     <?php
	require './includes/footer.php'; ?>    
        
    </body>
</html>