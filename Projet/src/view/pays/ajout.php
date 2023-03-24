<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ajouter un pays</title>
</head>

<body>
    <h1>Ajouter un pays</h1>
    <form action="index.php?action=Pays&method=add" method="post">
        <div>
            <label for="">Nom Pays : </label>
            <input type="text" name="nomPays" />
        </div>
        <div>
            <label for="">Population : </label>
            <input type="text" name="population" />
        </div>
        <div>
            <input type="submit" name="submit" value="Enregistrer" />
            <input type="reset" name="reset" value="Annuler" />
        </div>
    </form>
    <a href="index.php?action=Pays">Retour à la liste des pays</a>
</body>

</html>