<?php
if ($_POST) {
    $errors = array();

    //Part Lastname

    if(empty($_POST["lastname"])) {
        $errors['lastname'] = "lastname is required";
    }
    if(strlen($_POST["lastname"]) < 2 || strlen($_POST["lastname"]) > 30) {
        $errors['lastname2'] = "Lastname must be atleast between 3 and 30 characters long";
    }

    //Part Firstname

    if(empty($_POST["firstname"])) {
        $errors['firstname'] = "<p>firstname is required<p>";
    }
    if(strlen($_POST["firstname"]) < 2 || (strlen($_POST["firstname"])) > 30) {
        $errors['firsystname2'] = "<p>firstName must be at least 3 characters long<p>";
    }

    //Part email

    if(!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',$_POST['email'])) {
        $errors['email'] = "<p>email is not valid</p>";
    }
    if(strlen($_POST["email"]) < 4) {
        $errors['email2'] = "<p>email must have at least 6 characters long</p>";
    }

    //Part text

    if(empty($_POST["text"])) {
        $errors['text'] = "text is required";
    }
    if(strlen($_POST["text"]) > 100) {
        $errors['text2'] = "<p>Your comment must have less 100 characters</p>";
    }

    //Part Succes

    $contenu = $_POST['lastname'] . " " . $_POST['firstname'] . " " . $_POST['email'] . " " .  $_POST['question'] . " " .  $_POST['text'];

    if(count($errors) == 0){
        echo "<center><h1>Successfull</h1></center>";
        echo$_POST['lastname'] = " ";
        echo$_POST['firstname'] = " ";
        echo$_POST['email'] = " ";
        echo$_POST['text'] = " ";
        mail('julemaire01@gmail.com','Form Send' ,$contenu);
    }
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Les cinq commandements! Pas 10 pas flemme...</title>
    <meta charset="utf-8">

    <!-- Bootstrap library CSS v. 3.3.7 -->
    <link rel="stylesheet" media="all" type="text/css" href="../js/bootstrap-3.3.7-dist/css/bootstrap.css">

    <!-- Links to the top_10.css file -->
    <link rel="stylesheet" media="all" type="text/css" href="../css/top_10.css">

    <!-- Links to the header.css file for the navbar -->
    <link rel="stylesheet" media="all" type="text/css" href="../css/header.css">

    <!-- link to the footer.css -->
    <link rel="stylesheet" media="all" type="text/css" href="../css/footer.css">

    <!-- Link to the google fonts Montserrat -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>

<!-- PHP navabar include -->
<?php include('../html/header.php');?>

<!-- Fifth Order section -->
<section id="Fifth_order" class="fives_rules">
    <div class="container-fluid">

        <!-- Text's row -->
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Title -->
                <h1 class="text-center blue bold"> 5. </h1>
            </div>
            <div class="col-md-5 col-xs-11">
                <h2 class="blue bold">Dojo Time !</h2>

            </div>
        </div>

        <!-- Row for the image -->
        <div class="row">
            <div >
                <p class="text-center"> Quand Gaëtan vient te chercher pour aller en Dojo !</p>
                <img src="/public/assets/img/dojo.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>

        <div class="row">
            <div >
                <p class="text-center"> Quand Louis résoud le dojo alors que t'as galéré pendant 57 minutes !</p>
                <img src="/public/assets/img/Louis.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

<!-- Fourth Order section -->
<section id="Fourth_order" class="fives_rules">
    <div class="container-fluid">

        <!-- Text's row -->
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Title -->
                <h1 class="text-center blue bold"> 4. </h1>
            </div>
            <div class="col-md-5 col-xs-11">
                <h2 class="blue bold">Have a break have a ... </h2>
            </div>
        </div>

        <!-- Row for the image -->
        <div class="row">
            <div >
                <p class="text-center"> Quand tu attends ton tour pour le seul, le grand, l'unique, la clé de voute de la wild, le MICRO-ONDE !</p>
                <img src="/public/assets/img/wait.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>

        <div class="row">
            <div >
                <p class="text-center"> Quand tu as 3 vies et que tu fais du ping-pong champagne !</p>
                <img src="/public/assets/img/pingpong.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

<!-- Thrith Order section -->
<section id="Third_order" class="fives_rules">
    <div class="container-fluid">

        <!-- Text's row -->
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Title -->
                <h1 class="text-center blue bold"> 3. </h1>
            </div>
            <div class="col-md-5 col-xs-11">
                <h2 class="blue bold" >Quest Time.</h2>
            </div>
        </div>

        <!-- Row for the image -->
        <div class="row">
            <div >
                <p class="text-center"> Quand ton responsive fonctionne du feu de DIEU !</p>
                <img src="/public/assets/img/responsive.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>

        <div class="row">
            <div >
                <p class="text-center"> Quand tu arrives à resoudre ton problème alors que ca fait 2h que tu en chies !</p>
                <img src="/public/assets/img/celebration.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

<!-- Second Order section -->
<section id="Second_order" class="fives_rules">
    <div class="container-fluid">

        <!-- Text's row -->
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Title -->
                <h1 class="text-center blue bold"> 2. </h1>
            </div>
            <div class="col-md-5 col-xs-11">
                <h2 class="blue bold" >WARNING ZONE.</h2>
            </div>
        </div>

        <!-- Row for the image -->
        <div class="row">
            <div >
                <p class="text-center"> Quand tu joues avec le feu ou ta vie clairement !</p>
                <img src="/public/assets/img/magueule.jpg" alt="dojo" class="img-responsive center-block">
            </div>
        </div>

        <div class="row">
            <div >
                <p class="text-center"> Quand tu arrives à resoudre ton problème alors que ca fait 2h que tu en chies !</p>
                <img src="/public/assets/img/celebration.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

<!-- First Order section -->
<section id="First_order" class="fives_rules">
    <div class="container-fluid">

        <!-- Text's row -->
        <div class="row">
            <div class="col-md-1 col-xs-1">
                <!-- Title -->
                <h1 class="text-center blue bold"> 1. </h1>
            </div>
            <div class="col-md-5 col-xs-11">
                <h2 class="blue bold">Steal loving you wilders !</h2>
            </div>
        </div>

        <!-- Row for the image -->
        <div class="row">
            <div >
                <p class="text-center"> Quand tu voles une idée à l'un des groupes pour le projet 1 !</p>
                <img src="/public/assets/img/project.gif" alt="dojo" class="img-responsive center-block">
            </div>
        </div>
    </div>
</section>

<!-- Form section -->
<section class="form" id="contact_form">

    <div class="container-fluid">
        <div class="row">
            <h1 class="blue text-center">Contactez-nous</h1>
        </div>

        <!--Section Contact Us-->
        <form method="post" action="#" class="form-horizontal">

            <!-- Name input -->
            <div class="form-group">
                <label for="lastname" class="col-ms-2 col-xs-3 control-label">Votre nom</label>
                <div class="col-xs-8 col-ms-9">
                    <input type="text" name="lastname" id="lastname" maxlength="30"
                           placeholder="<?php if(isset($_POST['lastname'])) echo "ex: Bond"; ?>"
                           value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" class="form-control" />
                    <p><?php if(isset($errors['lastname'])) echo $errors['lastname']; ?></p>
                    <p><?php if(isset($errors['lastname2'])) echo $errors['lastname2']; ?></p>
                </div>

            </div>

            <!-- First Name input -->
            <div class="form-group">
                <label for="firstname" class="col-xs-3 col-ms-2 control-label">Votre prénom</label>
                <div class="col-xs-8 col-ms-9">
                    <input type="text" name="firstname" id="firstname" maxlength="30"
                           placeholder="<?php if(isset($_POST['firstname'])) echo "ex: James"; ?>"
                           value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" class="form-control">
                    <p><?php if(isset($errors['firstname'])) echo $errors['firstname']; ?></p>
                    <p><?php if(isset($errors['firstname2'])) echo $errors['firstname2']; ?></p>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-group">
                <label for="email" class="col-ms-2 col-xs-3 control-label">Votre email</label>
                <div class="col-xs-8 col-ms-9">
                    <input type="email" name="email" id="email"
                           placeholder="<?php if(isset($_POST['email'])) echo "ex: toto@gmail.com"; ?>"
                           value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" class="form-control">
                    <p><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                    <p><?php if(isset($errors['email2'])) echo $errors['email2']; ?></p>
                </div>
            </div>


            <div class="form-group">
                <label for="question" class="col-ms-2 col-xs-3 control-label">Quel est votre objet ?</label>

                <div class="col-xs-8 col-ms-9">
                    <select name="question" id="question" class="form-control">
                        <option value="integration">Integration à la Wild code School</option>
                        <option value="microwave">Un micro-onde supplémentaire</option>
                        <option value="dojo">Avoir les réponses du prochain dojo</option>
                        <option value="othersubject">Autre</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-offset-3 col-xs-8 col-ms-9 col-ms-offset-2">
                <textarea name="text" rows="5" class="form-control" placeholder="<?php if(isset($_POST['text'])) echo "Don't forget to put a message"; ?>">
                <?php if(isset($_POST['text'])) echo $_POST['text']; ?></textarea>
                <p><?php if(isset($errors['text'])) echo $errors['text']; ?></p>
            </div>

            <div class="col-xs-offset-3 col-xs-8 col-ms-9 col-ms-offset-2 text-center">
                <input type="submit" value="submit" class="form-control btn btn-orange btn-lg">
            </div>
        </form>
    </div>
</section>

<!--End section Contact Us-->


<!-- PHP include for the footer -->
<?php include('../html/footer.php'); ?>

<!-- JQuery library v. 3.3.1 -->
<script src="../js/jquery-3.3.1.js"></script>

<!-- Bootstrap library JS v. 3.3.7 -->
<script src="../js/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body>
</html>
