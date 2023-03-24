<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des pays</title>
</head>

<body>
    <h1>Liste des pays</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Population</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listepays as $pays) : ?>
            <tr>
                <td><?= $pays['IdPays'] ?></td>
                <td><?= $pays['NomPays'] ?></td>
                <td><?= $pays['Population'] ?></td>
                <td>
                    <a href="index.php?action=Pays&method=edit&id=<?= $pays['IdPays'] ?>">Modifier</a>
                    <a href="index.php?action=Pays&method=delete&id=<?= $pays['IdPays'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?action=Pays&method=add">Ajouter un pays</a>
</body>

</html>