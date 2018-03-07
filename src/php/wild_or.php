<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>mediaobject</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mediaobject.css">
</head>
	<body>
		<header>
		</header>
		<!--Section wild d'or-->
		<section class="guestbook">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h1>Le Wild d'or</h1>
			
							<!--Customer Louis-->
							<blockquote>
							     <p>Super formation, j'ai eu la chance de former 22 noobs et de réussir avec succes mon CAPES developpeur web !</p>
							     <small>by <cite>Louis</cite></small>
							</blockquote>

							<!--Customer Lucas-->
							<blockquote>
							     <p>Lorem ipsum, bro ! Et merci à Toto Tutu et Tata pour leurs conseils précieux!</p>
							     <small>by <cite>Lucas</cite></small>
							</blockquote>

							<!--Customer Amandine-->
							<blockquote>
							     <p>Enorme grace à cette formation j'ai pu intégrer la maison Dior en tant que developpeur PHP, " JS is a useless language" ! Merci Gaetan</p>
							     <small>by <cite>Amandine</cite></small>
							</blockquote>

							<!--Customer Julien-->
							<blockquote>
							     <p>Malgré une super ambiance j'ai quitté la wild après le projet 1,(Conflit interne avec Ama....e) ! Et j'ai ouvert un foodtruck à Byron bay en Australie. See you there mates. PS : -10% pour les wilders!</p>
							     <small>by <cite>Julien</cite></small>
							</blockquote>
							<br>

						<div class="row">
			            <!-- Form for the Guest Book -->
			            	<div class="col-xs-12 col-md-6">
								<div class="media-center">
				                	<form method="post" action="traitement.php">
										<p>
											<label for="pseudo">Votre pseudo</label>
											<input type="text" name="pseudo" id="pseudo" maxlength="20" placeholder="TotoRoxxx" />
											<br>
											<textarea rows="5" cols="50" placeholder="Your message"></textarea>
										</p>
									</form>
			                	</div>
			        		</div>
			           	<!-- Picture for the Guest boook -->
			            	<div class="col-md-6 hidden-xs">
								<div class="media-center">
				                	<img src="integration/hunter2.png" alt="Goblin45's portrait">
			                	</div>
        					</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End section wild d'or-->

    
	</body>
</html>
