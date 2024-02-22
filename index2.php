<?php require_once("index.php") ?>;

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>

<?php
//Definir des constantes d'information
define("DBHOST", "localhost");
define("DBUSER", "root");
define("DBPASS", "root");
define("DBNAME", "entrainement");

//DSN (Data Source Name) de connexion
$dsn = "mysql:dbname=".DBNAME.";host=".DBHOST;

//Se connecter à la base
//Enlever une exception PDO
try {
    // On va instancier PDO
    $db = new PDO ($dsn, DBUSER, DBPASS);

    // On s'assure d'envoyer les données en UTF8

    $db->exec("SET NAMES utf8"); 

} catch(PDOException $e){
    die("Erreur:".$e->getMessage());
};

// ICI, on est connecté à la base
// On peut récupérer la liste des users

$sql = "SELECT * FROM `user`";

// On execute directement la requête

$requete = $db->query($sql);

// On récupère les données (fetch ou fetchall)

$user = $requete->fetchall();

// echo "<pre>";
// var_dump($user);
// echo "</pre>";


//Recuperer les informations du tableau avec la methode POST

//Inserer des nouvelles valeurs dans la BA

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $mail = $_POST["mail"];
    $name = $_POST["nom"];
    $sql = "INSERT INTO user (`name`, `email`) VALUES ('$name', '$mail')";
    $requete = $db->query($sql);
} 
header ('location: index.php');

?>
</body>
</html>