<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Modifier un pays</title>
</head>

<body>
    <h1>Modifier un pays</h1>
    <form method="post">
        <label for="nomPays">Nom du pays :</label>
        <input type="text" id="nomPays" name="nomPays" value="<?php echo $pays['NomPays']; ?>"><br>

        <label for="population">Population :</label>
        <input type="text" id="population" name="population" value="<?php echo $pays['Population']; ?>"><br>

        <input type="submit" value="Modifier">
        <a href="index.php?action=Pays">Annuler</a>
    </form>

</body>


</html>