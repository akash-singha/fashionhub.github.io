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
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    body{
        font-family: 'Roboto', sans-serif;
       color: white;
    }
    h4{
        color: white;
        cursor: pointer;
    }
    p{
        color: white;
        cursor: pointer;
    }
    .btn{
        margin-bottom: 15px;
    }
</style>

</head>
 <body>
        <?php
	require './includes/navbar.php'; ?>
     <br><br>
<div class="contact">
          <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <h2 class="p-bold" style="color: white;">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores maxime expedita voluptatibus? Quam, cumque cupiditate laboriosam ducimus optio neque repudiandae vero sint nulla ipsum facilis earum consequuntur eum quo. voluptate obcaecati eveniet suscipit provident animi voluptatem placeat doloremque facere maxime totam nostrum necessitatibus cupiditate in corrupti quidem, explicabo saepe. Dolorem aut odit quo qui veniam!</p>
              </div>
              </div>

              
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control w3-round-xlarge" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control w3-round-xlarge"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control w3-round-xlarge" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-danger w3-round-xlarge" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">500, Lorem, ipsum dolor sit amet consectetur,</p>
                  <p class="text-muted">12-568-875 Wall street,Mumbai</p>
                  <p class="text-muted">INDIA</p>
                  <p class="text-muted">Phone : +91-123-0000000</p>
                  <p class="text-muted">Email : fashionhub@gmail.com</p>
                  <p class="text-muted">Follow On: <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-facebook-square"></a></i> <a href="#"><i class="fa fa-twitter"></a></i> </p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
     
     
    
     
        <?php
	require './includes/footer.php'; ?>
    </body>
</html>