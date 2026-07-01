<?php

require_once '../../app/Controllers/AbonnementController.php';

$controller = new AbonnementController();
$abonnement = $controller->show($_GET['id']);
?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="show-container">

    <h1>Détails de l'abonnement</h1>

    <div class="info">
        <strong>ID :</strong>
        <?= $abonnement['id_abonnement'] ?>
    </div>

    <div class="info">
        <strong>Type :</strong>
        <?= $abonnement['type_abonnement'] ?>
    </div>

    <div class="info">
        <strong>Date début :</strong>
        <?= $abonnement['date_debut'] ?>
    </div>

    <div class="info">
        <strong>Date fin :</strong>
        <?= $abonnement['date_fin'] ?>
    </div>

    <a class="back-btn" href="index.php">
        Retour
    </a>

</div>

<?php require_once '../layouts/footer.php'; ?>