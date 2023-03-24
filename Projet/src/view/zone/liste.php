<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liste des zones</title>
</head>

<body>
    <h1>Liste des zones</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom Zone</th>
                <th>Nombre Personnes symptomatique</th>
                <th>Nombre Personnes Positives</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listezone as $zone) : ?>
            <tr>
                <td><?= $zone['IdZone'] ?></td>
                <td><?= $zone['NomZone'] ?></td>
                <td><?= $zone['NbrPersSympt'] ?></td>
                <td><?= $zone['NbrPersPositi'] ?></td>
                <td>
                    <a href="index.php?action=Zone&method=edit&id=<?= $zone['IdZone'] ?>">Modifier</a>
                    <a href="index.php?action=Zone&method=delete&id=<?= $zone['IdZone'] ?>">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="index.php?action=Zone&method=add">Ajouter une zone</a>
</body>

</html>