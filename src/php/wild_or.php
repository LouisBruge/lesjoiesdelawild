<!DOCTYPE html>

<html lang="fr">
    <head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Louis Bruge, Lucas Poirier, Julien Lemaire et Amandine Claude">
    <meta name="description" content="First project Wild Code School">
    <meta name="keywords" content="First project">
 
    <!-- Title of the page -->
	<title>Wild d'or</title>

    <!-- Bootstrap library CSS v. 3.3.7 -->
    <link rel="stylesheet" media="all" type="text/css" href="../js/bootstrap-3.3.7-dist/css/bootstrap.css">

    <!-- CSS file for the footer -->
    <link rel="stylesheet" href="../css/header.css">

    <!-- CSS file for this page -->
    <link rel="stylesheet" href="../css/wild_or.css">

    <!-- CSS file for the footer -->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

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
<body>
<!-- PHP navbar include -->
<?php include('../html/header.php'); ?>

<!--Section wild d'or-->
<section class="guestBook">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-1 col-lg-10 text-center" id="citations">
                <h1>Le Wild d'or</h1>

            </div>
        </div>
    </div>
</section>
<!-- End of the Section wild d'or -->

<section id="formWildBook">
    <div class="container-fluid">
        <div class="row">
            <!-- Picture for the Guest boook -->
            <div class="col-md-offset-1 col-md-4 hidden-sm hidden-xs media-left">
                <img src="/public/assets/img/stark.gif" alt="Gif picture with Stark" class="block-center img-responsive">
            </div>

            <!-- Form for the Guest Book -->
            <div class="row">
                <div class="col-md-6 col-xs-12 media-right">
                    <form id="form_wild" class="form-horizontal" action="#">
                        <div class="form-group">
                            <label for="pseudo" class="control-label col-xs-2 col-ms-1 text-center">Votre pseudo</label>
                            <div class="col-xs-9 col-ms-10">
                                <input type="text" id="pseudo" maxlength="20" placeholder="TotoRoxxx" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea rows="5"  placeholder="Laisse un commentaire" class="form-control"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="form-control btn btn-orange">
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

<script src="../js/wild_or_form.js"></script>

</body>
</html>
