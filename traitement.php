<?php

if (!empty($_POST['nom']) && ($_POST['prenom']) && ($_POST['email']) && ($_POST['password'])) {
    echo "Vous avez rempli tous les champs du formulaire";
} else {
    echo "Vous n'avez pas rempli tous les champs du formulaire";
}

// Code de Mohammed
$link = mysqli_connect("localhost", "!!!!! votre nom d'utilisateur sur localhost !!!!!", "!!!!! votre mot de passe sur localhost !!!!!", "entrainement");
//JE VERIFIE MA CONNECTION A MA BDD(base de donné)
if (mysqli_connect_errno()) {
    printf("Échec de la connexion : %s\n", mysqli_connect_error());
}

$sqli = "INSERT INTO contact (name, email, password) VALUES ('$name', '$mail', '$password')";
mysqli_query($link,$sqli);

var_dump($_POST);