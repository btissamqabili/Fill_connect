<?php

require_once '../../app/Controllers/SalleController.php';

$controller = new SalleController();
$salles = $controller->index();

?>

<link rel="stylesheet" href="../../public/css/style.css">

<div class="container">

    <h1>Liste des salles</h1>

    <a href="create.php" class="btn">
        + Ajouter une salle
    </a>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Actions</th>
        </tr>
        </thead>

<tbody>

<?php foreach ($salles as $salle): ?>

<tr>
    <td><?= $salle['id_salle'] ?></td>
    <td><?= $salle['nom_salle'] ?></td>
    <td><?= $salle['adresse'] ?></td>

    <td>
        <a class="action-btn show"
           href="show.php?id=<?= $salle['id_salle'] ?>">
           Voir
        </a>

        <a class="action-btn edit"
           href="edit.php?id=<?= $salle['id_salle'] ?>">
           Modifier
        </a>

        <a class="action-btn delete"
           href="delete.php?id=<?= $salle['id_salle'] ?>">
           Supprimer
        </a>
    </td>
</tr>

<?php endforeach; ?>

</tbody>
    </table>

</div>