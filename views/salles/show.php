<?php

require_once '../../app/Controllers/SalleController.php';

$controller = new SalleController();

$id = $_GET['id'];

$salle = $controller->show($id);

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>
<div class="show-container">

    <h1>Détails de la salle</h1>

    <div class="info">
        <strong>ID :</strong>
        <?= $salle['id_salle'] ?>
    </div>

    <div class="info">
        <strong>Nom :</strong>
        <?= $salle['nom_salle'] ?>
    </div>

    <div class="info">
        <strong>Adresse :</strong>
        <?= $salle['adresse'] ?>
    </div>

    <a class="back-btn" href="index.php">
        Retour
    </a>

</div>