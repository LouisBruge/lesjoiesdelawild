<?php
if ($_POST) {
    $errors = array();

    //Part Lastname

    if(empty($_POST["lastname"])) {
        $errors['lastname'] = "lastname is required";
    }
    if (strlen($_POST["lastname"]) < 2 || strlen($_POST["lastname"]) > 30) {
        $errors['lastname2'] = "Lastname must be atleast between 3 and 30 characters long";
    }

    //Part Firstname

    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "<p>firstname is required<p>";
    }
    if(strlen($_POST["firstname"]) < 2 || (strlen($_POST["firstname"])) > 30) {
        $errors['firstname2'] = "<p>firstName must be at least 3 characters long<p>";
    }

    //Part email

    if (!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',$_POST['email'])) {
        $errors['email'] = "<p>email is not valid</p>";
    }
    if (strlen($_POST["email"]) < 4) {
        $errors['email2'] = "<p>email must have at least 6 characters long</p>";
    }

    //Part text

    if (empty($_POST["text"])) {
        $errors['text'] = "<p>text is required</p>";
    }
    if (strlen($_POST["text"]) > 100) {
        $errors['text2'] = "<p>Your comment must have less 100 characters</p>";
    }

    //Part Succes

    $contenu = $_POST['lastname'] . " " . $_POST['firstname'] . " " . $_POST['email'] . " " .  $_POST['question'] . " " .  $_POST['text'];

    if (count($errors) == 0){
        echo "Nom :" . $_POST['lastname'] . "<br>";
        echo "Prénom :" . $_POST['firstname'] . "<br>";
        echo "Email :" . $_POST['email'] . "<br>";
        echo "Question :" . $_POST['question'] . "<br>";
        echo "Message :" . $_POST['text'] . "<br>";
        mail('julemaire01@gmail.com','Form Send' ,$contenu);
        header('Location: /src/php/contactUs.php');

    }

}
//header('location: /src/php/contactUs.php');