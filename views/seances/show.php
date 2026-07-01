<?php

require_once '../../app/Controllers/SeanceController.php';

$controller = new SeanceController();
$seance = $controller->show($_GET['id']);

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="show-container">

    <h1>Détails de la séance</h1>

    <div class="info">
        <strong>ID :</strong>
        <?= $seance['id_seance'] ?>
    </div>

    <div class="info">
        <strong>Date :</strong>
        <?= $seance['date_seance'] ?>
    </div>

    <div class="info">
        <strong>Activité :</strong>
        <?= $seance['type_activite'] ?>
    </div>

    <div class="info">
        <strong>Durée :</strong>
        <?= $seance['duree'] ?> min
    </div>

    <div class="info">
        <strong>Équipement :</strong>
        <?= $seance['equipement_utilise'] ?>
    </div>

    <a class="back-btn" href="index.php">
        Retour
    </a>

</div>

<?php require_once '../layouts/footer.php'; ?>