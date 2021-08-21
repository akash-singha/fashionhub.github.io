<?php
require  "./includes/connection.php";
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Fashion-Hub</title>
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
        <nav class="nav navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavBar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
                    <a href="index.php" class="navbar-brand">Fashion-Hub</a>
		</div>
		<div class="collapse navbar-collapse" id="mynavBar">
			
			
				<ul class="nav navbar-nav navbar-right">
					
					
                                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart "></span> Cart</a></li>
                                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Setting</a></li>
                                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
			
		</div>
	</div>
</nav>
        
        
        
        
        
        
        
        
        
        
    
       <?php
	require './includes/footer.php'; ?>       
    </body>
</html>