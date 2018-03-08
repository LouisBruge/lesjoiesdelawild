<!DOCTYPE html>
<html lang="zxx">
    <head>
	<meta charset="utf-8">
	<title>mediaobject</title>


    <!-- Bootstrap library CSS v. 3.3.7 -->
    <link rel="stylesheet" media="all" type="text/css" href="../js/bootstrap-3.3.7-dist/css/bootstrap.css">

    <link rel="stylesheet" href="../css/header.css">

    <link rel="stylesheet" href="../css/wild_or.css">
    </head>
	<body>
        <!-- PHP navbar include -->
        <?php include('../html/header.php'); ?>

		<!--Section wild d'or-->
		<section class="guestbook">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-offset-1 col-lg-10 text-center">
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
                        </div>
                    </div>
                </div>
            </section>

            <section id="form_wild_book">
                <div class="container-fluid">
						<div class="row">
			           		<!-- Picture for the Guest boook -->
			            	<div class="col-md-offset-1 col-md-4 hidden-sm hidden-xs media-left">
				                	<img src="/public/assets/img/stark.gif" alt="Gif picture with Stark" class="block-center img-responsive"> 
        					</div>

			            <!-- Form for the Guest Book -->
                            <div class="row">
                                <div class="col-md-6 col-xs-12 media-right">
				               	<form method="post" action="traitement.php" class="form-horizontal">
                                    <div class="form-group">
										<label for="pseudo" class="control-label col-xs-2 col-ms-1 text-center">Votre pseudo</label>
                                        <div class="col-xs-9 col-ms-10">
									    <input type="text" name="pseudo" id="pseudo" maxlength="20" placeholder="TotoRoxxx" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
										<textarea rows="5"  placeholder="Laisse un commentaire" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group text-center">
										<button type="submit" class="send">Envoyer</button>
                                    </div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
			<hr>
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
