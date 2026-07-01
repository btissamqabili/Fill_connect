<?php

require_once '../../app/Controllers/AdherentController.php';

$controller = new AdherentController();
$adherents = $controller->index();

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="container">

    <h1>Liste des adhérents</h1>

    <a class="btn" href="create.php">
        + Ajouter un adhérent
    </a>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Salle</th>
            <th>Actions</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($adherents as $adherent): ?>
            <tr>
                <td><?= $adherent['id_adherent'] ?></td>
                <td><?= $adherent['nom'] ?></td>
                <td><?= $adherent['prenom'] ?></td>
                <td><?= $adherent['email'] ?></td>
                <td><?= $adherent['telephone'] ?></td>
                <td><?= $adherent['nom_salle'] ?></td>

                <td class="actions">
    <a class="action-btn show"
       href="show.php?id=<?= $adherent['id_adherent'] ?>">
        Voir
    </a>

    <a class="action-btn edit"
       href="edit.php?id=<?= $adherent['id_adherent'] ?>">
        Modifier
    </a>

    <a class="action-btn delete"
       href="delete.php?id=<?= $adherent['id_adherent'] ?>">
        Supprimer
    </a>
</td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

</div>
<?php require_once '../layouts/footer.php'; ?>