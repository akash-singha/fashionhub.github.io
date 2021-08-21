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
        <?php
	require './includes/navbar.php'; ?>
       
         
             <div class="banner-upper">
                 <img src="images/banner1.png" alt="" class="responsive">
                 
                 
             </div>
         <br>
        
   <div class="container etsy">
       <img src="images/13.png" alt="" style="width:100%;">
</div>
         <br><br>     
        
 <div class="section">
        <div class="row text-center">
        	<div class="col-md-3 col-sm-6">       	
                    <div class="thumbnail w3-round-xlarge"><img class="w3-round-xlarge"src="images/10.png" alt=""/>
            	      <div class="caption">
                          <h4>Stylish Jacket</h4>
            	        <p>Price: &#8377 6000.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div>          
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/8.png" alt=""/>
            	      <div class="caption">
            	        <h4>Women's Fashion</h4>
            	        <p>Price: &#8377 4000.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div>
        <div class="col-md-3 col-sm-6">       	
            	    <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/14.jpg" alt=""/>
            	      <div class="caption">
            	        <h4>Allen's Premium Fashion</h4>
            	        <p>Price: &#8377 4999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div>
       <div class="col-md-3 col-sm-6">       	
           <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/1.jpg" alt=""/>
            	      <div class="caption">
            	        <h4>Urban Girl's Fashion</h4>
            	        <p>Price: &#8377 2999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div>
        </div>
     <br>
        <div class="row text-center">
        	<div class="col-md-3 col-sm-6">       	
           <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/12.png" alt=""/>
            	      <div class="caption">
            	        <h4>Wrangler Men's Fashion</h4>
            	        <p>Price: &#8377 5999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div>       
        <div class="col-md-3 col-sm-6">       	
           <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/7.png" alt=""/>
            	      <div class="caption">
            	        <h4>Wrangler Friend's Fashion</h4>
            	        <p>Price: &#8377 7999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div> 
             <div class="col-md-3 col-sm-6">       	
           <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/11.png" alt=""/>
            	      <div class="caption">
            	        <h4>Urban Stylish Jacket</h4>
            	        <p>Price: &#8377 2999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div> 
             <div class="col-md-3 col-sm-6">       	
           <div class="thumbnail  w3-round-xlarge"><img class="w3-round-xlarge" src="images/9.png" alt=""/>
            	      <div class="caption">
            	        <h4>Women's Clothing</h4>
            	        <p>Price: &#8377 999.00</p>                        
                        <p><a href="login.php" class="btn btn-primary btn-block" role="button">Order Now</a></p>
          	        </div>
          	      </div>
          	 </div> 
            
        </div>
 </div>
         <br>
        <center>
                       <div class="end container panel panel-default w3-round-xlarge">
                           <div class="panel-heading"><h4>Do you want to explore more?</h4></div>
                         </div>  
            <br>
                        <a href="login.php" class="btn btn-danger btn-lg active">Press Here</a>                                        
                       
                   </center> 
        <br> <br> <br>
        
        <?php
			require './includes/footer.php';
		?>
        
        
    </body>
</html>
