<!DOCTYPE html>
 <html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Louis Bruge, Lucas Poirier, Julien Lemaire et Amandine Claude">
    <meta name="description" content="First project Wild Code School">
    <meta name="keywords" content="First project">
    
<!--Title of the page -->
    <title>Bienvenue à Lille, futurs wilders !</title>
    
<!-- Bootstrap CSS files -->
    <link rel="stylesheet" href="../src/js/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    
    <!-- Personal CSS -->
    <link rel="stylesheet" type="text/css" href="../src/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/footer.css"/>
    
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/public/assets/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="/public/assets/img/favicon/favicon.ico">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

 
  </head>

  <body onload="Weather()">
    <?php include('../src/html/header.php');?>
  	<div class="container-fluid">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="/public/assets/img/beatles.jpg" alt="theBeatles">
			</div>
			<div class="item">
				<img src="/public/assets/img/inside-school.jpg" alt="school">
			</div>
			<div class="item">
				<img src="http://via.placeholder.com/1500x500" alt="Image 2">
			</div>
		</div>
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

	</div>
    
    <!-- Weather Section -->
	<section id="weather">
        <div class="container">
            <div class="row">
		        <h2> Aujourd'hui, la température de Lille est de : <span id="temp"></span><span> °C </span> <br> <h4>C'est ce que tu verrais si tu mettais le nez dehors</h4></h2>
		        <img class="img-responsive"id="pictureOfLille" src="" alt="The town of Lille according the weather" />
            </div>
        </div>
	</section>

	<div class="row">
		<div class="col-md-5">
			<img src="/public/assets/img/slippers.jpg" alt="slippersMascott">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
		</div>
		<div class="col-md-5">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
			<img src="/public/assets/img/mascot.jpg" alt="mascotPostIt">
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<img src="/public/assets/img/alone.jpg" alt="alone">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
		</div>
		<div class="col-md-5">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
			<img src="/public/assets/img/alone.jpg" alt="alone">
		</div>
	</div>

    <section id="link_to_top_5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 text-center">
                    <p> Tu souhaites en savoir davantage sur l'univers impitoyable de la <b>Wild Code School de Lille</b> ?</p>
                </div>
                <a class="btn btn-orange col-xs-offset-1 col-xs-10" href="/src/php/top_10.php">Clique ici !</a>
            </div>
        </div>
    </section>
        <!-- Footer include by php -->
        <?php include('../src/html/footer.php') ?>
	</body>    
    <!-- load the JQuery v. 3.3.1. Library -->
    <script src="../src/js/jquery-3.3.1.js"></script>

    <!-- load the Bootstrap v. 3.3.7 Library -->
    <script src="../src/js/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
    
    <!-- load a personnal script in order to change the picture of Lille according the weather -->
    <script src="../src/js/weather.js"></script>
</html>
