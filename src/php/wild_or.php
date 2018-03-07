<!DOCTYPE html>
<html lang="zxx">
    <head>
	<meta charset="utf-8">
	<title>mediaobject</title>
    
    <link rel="stylesheet" href="mediaobject.css">

    <!-- Bootstrap library CSS v. 3.3.7 -->
    <link rel="stylesheet" media="all" type="text/css" href="../js/bootstrap-3.3.7-dist/css/bootstrap.css">

    </head>
	<body>
        <!-- PHP navbar include -->
        <?php include('../html/header.php'); ?>

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

        <!-- PHP include for the footer -->
        <?php include('../html/footer.php'); ?>
    
        <!-- JQuery library v. 3.3.1 -->
        <script src="../js/jquery-3.3.1.js"></script>

        <!-- Bootstrap library JS v. 3.3.7 -->
        <script src="../js/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
    
	</body>
</html>
