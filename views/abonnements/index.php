<?php
require_once '../../app/Controllers/AbonnementController.php';

$controller = new AbonnementController();
$abonnements = $controller->index();
?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="container">

    <h1>Liste des abonnements</h1>

    <a class="btn" href="create.php">
        + Ajouter un abonnement
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Date début</th>
                <th>Date fin</th>
                <th>Adhérent</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($abonnements as $abonnement): ?>
            <tr>
                <td><?= $abonnement['id_abonnement'] ?></td>
                <td><?= $abonnement['type_abonnement'] ?></td>
                <td><?= $abonnement['date_debut'] ?></td>
                <td><?= $abonnement['date_fin'] ?></td>
                <td><?= $abonnement['nom'] . ' ' . $abonnement['prenom'] ?></td>

                <td class="actions">
                    <a class="action-btn show"
                       href="show.php?id=<?= $abonnement['id_abonnement'] ?>">
                        Voir
                    </a>

                    <a class="action-btn edit"
                       href="edit.php?id=<?= $abonnement['id_abonnement'] ?>">
                        Modifier
                    </a>

                    <a class="action-btn delete"
                       href="delete.php?id=<?= $abonnement['id_abonnement'] ?>">
                        Supprimer
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>

    </table>

</div>

<?php require_once '../layouts/footer.php'; ?>