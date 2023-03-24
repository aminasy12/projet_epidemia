<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ajouter une zone</title>
</head>

<body>
    <h1>Ajouter une zone</h1>
    <form action="index.php?action=Zone&method=add" method="post">
        <div>
            <label for="">Nom Zone : </label>
            <input type="text" name="nomZone" />
        </div>
        <div>
            <label for="">nombre de personne symptomatique : </label>
            <input type="number" name="NbrPersSympt" />
        </div>
        <div>
            <label for="">nombre de personne positive: </label>
            <input type="number" name="NbrPersPositi" />
        </div>
        <div>
            <input type="submit" name="submit" value="Enregistrer" />
            <input type="reset" name="reset" value="Annuler" />
        </div>
    </form>
    <a href="index.php?action=Zone">Retour à la liste des zone</a>
</body>

</html>