<?php

require_once '../../app/Controllers/SeanceController.php';

$controller = new SeanceController();
$seances = $controller->index();

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="container">

    <h1>Liste des séances</h1>

    <a class="btn" href="create.php">
        + Ajouter une séance
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Activité</th>
                <th>Durée</th>
                <th>Équipement</th>
                <th>Adhérent</th>
                <th>Salle</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($seances as $seance): ?>

            <tr>
                <td><?= $seance['id_seance'] ?></td>
                <td><?= $seance['date_seance'] ?></td>
                <td><?= $seance['type_activite'] ?></td>
                <td><?= $seance['duree'] ?> min</td>
                <td><?= $seance['equipement_utilise'] ?></td>
                <td><?= $seance['nom'] . ' ' . $seance['prenom'] ?></td>
                <td><?= $seance['nom_salle'] ?></td>

                <td class="actions">
                    <a class="action-btn show"
                       href="show.php?id=<?= $seance['id_seance'] ?>">
                        Voir
                    </a>

                    <a class="action-btn edit"
                       href="edit.php?id=<?= $seance['id_seance'] ?>">
                        Modifier
                    </a>

                    <a class="action-btn delete"
                       href="delete.php?id=<?= $seance['id_seance'] ?>">
                        Supprimer
                    </a>
                </td>
            </tr>

        <?php endforeach; ?>

        </tbody>
    </table>

</div>

<?php require_once '../layouts/footer.php'; ?>