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
        <label for="nom">Nom</label>
        <input name="nom" id="nom" type="text"/> 
    </div>
    <div>   
    <label for="prenom">Prenom</label>
    <input name="prenom" id="prenom" type="text"/> 
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
</body>
</html>