<!DOCTYPE html>
<html>
  <head>
    <title>Meilleure Wild de France !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../src/js/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/index.css"/>
   
  </head>

  <body>

      <!-- Header include with PHP -->
      <?php include('../src/html/header.php'); ?>

      <section id="slider-section">
  	    <div class="container-fluid">

            <!-- Indicator for the carousel -->
  	        <div id="slider" class="carousel slide" data-ride="carousel">
  		        <ol class="carousel-indicators">
  			        <li data-target="#slider" data-slide-to="0" class="active"></li>
    		        <li data-target="#slider" data-slide-to="1"></li>
  			        <li data-target="#slider" data-slide-to="2"></li>
		        </ol>

            <!-- List of images for the carousel -->
		    <div class="carousel-inner">
			    <div class="item active">
				    <img src="assets/img/yolo.png" alt="Image 1">
				    <div class="carousel-caption">
					    <h3>C'est à Lille qu'on apprend le mieux</h3>
				    </div>
			    </div>

			    <div class="item">
				    <img src="assets/img/slide2.png" alt="Image 2">
				    <div class="carousel-caption">
					    <h3>C'est à Lille qu'on rigole le plus</h3>
				    </div>
			    </div>

			    <div class="item">
				    <img src="assets/img/yolo.png" alt="Image 3">
				    <div class="carousel-caption">
					    <h3>C'est à Lille que les gens sont les plus cools</h3>
				    </div>
			    </div>
		    </div>


            <!-- Buttons for the carousel -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
            </div>
        </div>
      </section>

      <!-- Footer include with PHP -->
      <?php include('../src/html/footer.php'); ?>

    <script src="../src/js/jquery-3.3.1.js"></script>
    <script src="../src/js/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
  </body>
</html>