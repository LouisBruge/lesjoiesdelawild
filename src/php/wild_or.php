<!DOCTYPE html>
<html lang="zxx">
    <head>
	<meta charset="utf-8">
	<title>mediaobject</title>


    <!-- Bootstrap library CSS v. 3.3.7 -->
    <link rel="stylesheet" media="all" type="text/css" href="../js/bootstrap-3.3.7-dist/css/bootstrap.css">

    <!-- CSS file for the footer -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- CSS file for this page -->
    <link rel="stylesheet" href="../css/wild_or.css">

    <!-- CSS file for the footer -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Link to the google fonts Montserrat -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
			
							<blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis ex eu justo iaculis dignissim nec eu arcu.</p>
							     <small>by <cite>Lorem ipsum</cite></small>
							</blockquote>

							<blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis ex eu justo iaculis dignissim nec eu arcu.</p>
							     <small>by <cite>Lorem ipsum</cite></small>
							</blockquote>

							<blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis ex eu justo iaculis dignissim nec eu arcu.</p>
							     <small>by <cite>Lorem ipsum</cite></small>
							</blockquote>

							<blockquote>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis ex eu justo iaculis dignissim nec eu arcu.</p>
							     <small>by <cite>Lorem ipsum</cite></small>
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
				                	<img src="http://via.placeholder.com/500x250" alt="placeholder" class="block-center img-responsive"> 
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
