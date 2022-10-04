<?php

$errors = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // contrôle des données soumises via le formulaire 


    if (!isset($_POST['user_firstname']) || trim($_POST['user_firstname']) === '')
    $errors = 'Prénom manquant';
    
    if (!isset($_POST['user_lastname']) || trim($_POST['user_lastname']) === '')
    $errors = 'Nom manquant';

    if (!isset($_POST['user_subject']) || trim($_POST['user_subject']) === '')
    $errors = 'Sujet manquant';

    if (!isset($_POST['user_tel']) || trim($_POST['user_tel']) === '')
    $errors = 'Téléphone manquant';

    if (!isset($_POST['user_email']) || trim($_POST['user_email']) === '' || !filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
    $errors = 'email manquant ou invalide';

    if (!isset($_POST['user_message']) || trim($_POST['user_message']) === '')
    $errors = 'message manquant';

    if (empty($errors))
    echo  "Merci ".$_POST['user_firstname']." ".$_POST['user_lastname']." de nous avoir contacté à propos de ".$_POST['user_subject'].".<br>
    Un de nos conseillers vous contactera, soit à l’adresse ".$_POST['user_email'].", soit par téléphone au ".$_POST['user_tel'].", dans les plus brefs délais, afin de traiter votre demande : <br>
    ".$_POST['user_message'];
    
    if (!empty($errors))
    echo 'Tous les champs n\'ont pas été rentrés correctement.';
}

?>
