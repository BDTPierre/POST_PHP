<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
<form action="traitement.php" method="post">
    <div>   
        <label for="name">Nom</label>
        <input name="name" id="name" type="text"/> 
    </div>
    <div>   
        <label for="email">Email</label>
        <input name="email" id="email" type="text"/> 
    </div>
    <div>   
        <label for="password">Password</label>
        <input name="password" id="password" type="password"/> 
    </div>
    <button type="submit">Envoyez</button>
</form>

<h1>Methode PDO</h1>

<form action="index2.php" method="post">
    <div>   
        <label for="name">Nom</label>
        <input name="nom" id="nom" type="text"/> 
    </div>
    <div>   
        <label for="email">Email</label>
        <input name="mail" id="mail" type="text"/> 
    </div>
    <button type="submit">Envoyez</button>
</form>

<a href="modifier.php">modifier</a>
<a href="supprimer.php">supprimer</a>
</body>
</html>