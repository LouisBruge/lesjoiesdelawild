<!DOCTYPE html>
<html>
  <head>
    <title>Meilleure Wild de France !</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../src/js/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/header.css"/>
    <link rel="stylesheet" type="text/css" href="../src/css/footer.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   
  </head>

  <body>
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
				<img src="http://via.placeholder.com/1500x500" alt="Image 2">
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
	<div class="row">
		<div class="col-md-5">
			<img src="http://via.placeholder.com/140x140" class="img-responsive">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
		</div>
		<div class="col-md-2">
			<div class="outer">
  				
			</div>
		</div>
		<div class="col-md-5">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
			<img src="http://via.placeholder.com/140x140" class="img-responsive">
		</div>
	</div>
	<div class="row">
		<div class="col-md-5">
			<img src="http://via.placeholder.com/140x140" class="img-responsive">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
		</div>
		<div class="col-md-2">
			<div class="outer">
  				
			</div>
		</div>
		<div class="col-md-5">
			<p class="text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam feugiat urna ac ullamcorper interdum. Sed mattis accumsan dolor, a cursus magna fermentum eu. Vestibulum vel tincidunt nisl, vitae</p>
			<img src="http://via.placeholder.com/140x140" class="img-responsive">
		</div>
	</div>
    <section id="link_to_top_5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 text-center">
                    <p> Tu souhaites en découvrir d'avantage sur la <b>Wild Code School de Lille</b> ? <br />
                        Sur son univers impitoyable? <br />
                    </p>
                </div>
                <a class="btn btn-orange col-xs-offset-1 col-xs-10" href="/src/php/top_10.php">Clique ici! </a>
            </div>
        </div>
    </section>

        <?php include('../src/html/footer.php') ?>
	</body>
<script src="../src/js/jquery-3.3.1.js"></script>
<script src="../src/js/bootstrap-3.3.7-dist/js/bootstrap.js"></script> 
</html>
