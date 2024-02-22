<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>
<body>
<!-- Modifier le tableau -->
<form action="template-modif.php" method="post">
    <div>   
        <label for="id">ID</label>
        <input name="id" id="id" type="number"/> 
    </div>
    <div>   
        <label for="name">Nom</label>
        <input name="noom" id="nom" type="text"/> 
    </div>
    <div>   
        <label for="email">Email</label>
        <input name="maail" id="mail" type="text"/> 
    </div>
    <button type="submit">Envoyez</button>


</form>
</body>
</html>