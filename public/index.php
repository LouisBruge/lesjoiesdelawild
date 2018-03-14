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
    <link rel="shortcut icon" type="image/x-icon" href="/public/assets/img/favicon.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="/public/assets/img/favicon.ico">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

 
  </head>

  <body onload="Weather()">

    <?php include('../src/html/header.php');?>

    <!-- Carousel section -->
  	<div class="container-fluid hidden-xs hidden-ms" id="carousel">
        <div id="slider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
            </ol>
		<div class="carousel-inner">
			<div class="item active grd">
				<img src="/public/assets/img/beatles.jpg" alt="theBeatles">
			</div>
			<div class="item grd">
				<img src="/public/assets/img/empty-school.jpg" alt="empty-school">
			</div>
            <div class="item" id="slippers">
                <img src="/public/assets/img/slippers.jpg" alt="slippers">
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
    <!-- End of the carousel section -->
    
    <!-- Weather Section -->
	<section id="weather">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2 > Aujourd'hui, la température de Lille est de : <span id="temp"></span><span> °C </span></h2>
                    <h3>Bah, c'est toujours mieux qu'hier !</h3>
                </div>
                <div class="col-md-4 col-md-offset-1 hidden-xs">
		            <img class="img-responsive" id="pictureOfLille" src="#" alt="The town of Lille according the weather" />
                </div>
            </div>
        </div>
	</section>
    <!-- End of the weather section -->

    <!-- ? section -->
    <section id="presentation">
    <div class="container-fluid">
	    <div class="row">
            <!-- Picture of Lille -->
            <div class="col-md-4">
                <img src="/public/assets/img/braderie-lille.jpg" alt="lille">
                <p class="text-center">Bienvenue à Lille ! Ville synonyme de fêtes, de bonnes bières, de copieux "petits"
                    plats et de futurs développeurs en herbe.</p>
            </div>
            <!-- Picture of Euratechnologies -->
            <div class="col-md-4 col-md-offset-4">
                <img src="/public/assets/img/euratechnologies.jpg" alt="euratechnologies">
                <p class="text-center">Euratechnologies, QG de la Wild Code School de Lille et également repère fourmillant
                de Pokémons. Un véritable attrape-geeks !</p>
            </div>
	    </div>
	    <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="/public/assets/img/school.jpg" alt="promo-2018">
                <p class="text-center">La promo lilloise studieuse...</p>
            </div>
	    </div>
    </section>
    <!-- End of the ? section -->

    <!-- Wanted men -->
    <div class="container">
        <h2>La Wild de Lille c'est aussi : </h2>
        <div class="row">
            <div class="col-lg-12">
                <!-- Gaetan -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#" class="thumbnail">
                        <div class="containerPortrait">
                            <h1>Gaëtan</h1>
                            <img class="img-responsive" src="/public/assets/img/gaetan.jpg" alt="Gaetan">
                        </div>
                        <div class="portraitDescription">
                            <p>Un formateur incorruptible... mais il ne résistera pas à une boîte de Kinder Surprise !</p>
                        </div>
                    </a>
                </div>
                <!-- Olivier -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#" class="thumbnail">
                        <div class="containerPortrait">
                            <h1>Olivier</h1>
                            <img class="img-responsive" src="/public/assets/img/olivier.jpg" alt="Olivier">
                        </div>
                        <div class="portraitDescription" id="olivier">
                            <p>Campus manager, dénicheur de projets hors paire et roi de l'aspi !</p>
                        </div>
                    </a>
                </div>
                <!-- Lucas -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href="#" class="thumbnail">
                        <div class="containerPortrait">
                            <h1>Lucas</h1>
                            <img class="img-responsive" src="/public/assets/img/lucas.jpg" alt="Lucas">
                        </div>
                        <div class="portraitDescription">
                            <p>JS is dead</p>
                            <p>!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- top 10 link section -->
    <section id="Top10Link">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 text-center">
                    <p>Tu souhaites en savoir davantage sur l'univers impitoyable de la <b>Wild Code School de Lille</b> ?</p>
                </div>
                <a class="btn btn-orange col-xs-offset-1 col-xs-10" href="/src/php/top_10.php">Clique ici !</a>
            </div>
        </div>
    </section>
    <!-- End of the top 10 link section -->

        <!-- Footer include by php -->
        <?php include('../src/html/footer.php') ?>

    <!-- load the JQuery v. 3.3.1. Library -->
    <script src="../src/js/jquery-3.3.1.js"></script>

    <!-- load the Bootstrap v. 3.3.7 Library -->
    <script src="../src/js/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
    
    <!-- load a personnal script in order to change the picture of Lille according the weather -->
    <script src="../src/js/weather.js"></script>
	</body>    
</html>
