<?php
if ($_POST) {
    $errors = array();

    //Part Lastname

    if(empty($_POST["lastname"])) {
        $errors['lastname'] = "<p>Champ obligatoire</p>";
    }
    if (strlen($_POST["lastname"]) < 2 || strlen($_POST["lastname"]) > 30) {
        $errors['lastname2'] = "<p>Le prénom doit contenir entre 3 et 30 caractères</p>";
    }

    //Part Firstname

    if (empty($_POST["firstname"])) {
        $errors['firstname'] = "<p>Champ obligatoire</p>";
    }
    if(strlen($_POST["firstname"]) < 2 || (strlen($_POST["firstname"])) > 30) {
        $errors['firstname2'] = "<p>Le prénom doit contenir entre 3 et 30 caractères</p>";
    }

    //Part email

    if (!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#',$_POST['email'])) {
        $errors['email'] = "<p>L'email n'est pas valide</p>";
    }
    if (strlen($_POST["email"]) < 4) {
        $errors['email2'] = "<p>L'email doit contenir au moins 6 caractères</p>";
    }

    //Part text

    if (empty($_POST["text"])) {
        $errors['text'] = "<p>Champ obligatoire</p>";
    }
    if (strlen($_POST["text"]) > 100) {
        $errors['text2'] = "<p>Le message doit contenir moins de 100 caractères</p>";
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