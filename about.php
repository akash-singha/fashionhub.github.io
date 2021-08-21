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
<style>
    body{
         font-family: 'Roboto', sans-serif;
    }
   
</style>
    </head>
    <body>
        <?php
	require './includes/navbar.php'; ?>
        <br><br>

         <div class="content">
            <div class="container">
              
            <div class="row">
                <div class="col-md-4">
                  <h3 class="about-h3 text-uppercase">Who We Are</h3>                  
                  <div class="box-padding-10">
                      <img src="images/about.jpg" alt="" class="img-responsive img-circle about-img">  
                  <p class="text-muted about-p">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima, quae dicta earum et nisi aliquid totam velit? Amet asperiores quis obcaecati sed reprehenderit consectetur alias dolores id quisquam eos totam vitae ipsam delectus, maxime, Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam voluptatibus dolor, rerum nesciunt nisi illum sapiente vero iure reprehenderit? sapiente incidunt quia odit omnis. Debitis!</p>                
                  </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OUR HISTORY</h3>
                  <div class="box-padding-10">
                  <p class="p-bold p-blue">1999 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque, vitae odio alias rerum nam quasi laudantium possimus facere soluta voluptatum?</p>

                  <p class="p-bold p-blue">2002 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2006 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2008 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2012 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>

                  <p class="p-bold p-blue">2020 -</p>
                  <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia corrupti, laudantium consectetur hic iste molestiae modi possimus optio incidunt quas. Lorem ipsum dolor sit amet  soluta voluptatum?</p>
                </div>
                </div>

                <div class="col-md-4">
                  <h3 class="about-h3">OPPURTUNITIES</h3>
                  <div class="box-padding-10">
                    <p class="p-bold">Availabe Roles</p>
                    <div class="box-padding-left">
                      <p class="text-muted">
                        1. Jr./Sr. Web Developer<br>
                        2. Graphic Designer<br>
                        3. Web Designer<br>
                        4. Front End Developer<br>
                        5. Back End Developer<br>
                        6. Database Admin<br>
                        7. System Admin<br>
                        8. Product Model
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <?php
	require './includes/footer.php'; ?>
    </body>
</html>