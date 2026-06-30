<?php

require_once '../../app/Controllers/AdherentController.php';

$controller = new AdherentController();

$id = $_GET['id'];

$adherent = $controller->show($id);

?>

<link rel="stylesheet" href="../../public/css/style.css">

<div class="show-container">

    <h1>Détails de l'adhérent</h1>

    <div class="info">
        <strong>Nom :</strong>
        <?= $adherent['nom'] ?>
    </div>

    <div class="info">
        <strong>Prénom :</strong>
        <?= $adherent['prenom'] ?>
    </div>

    <div class="info">
        <strong>Email :</strong>
        <?= $adherent['email'] ?>
    </div>

    <div class="info">
        <strong>Téléphone :</strong>
        <?= $adherent['telephone'] ?>
    </div>

    <a class="back-btn" href="index.php">
        Retour
    </a>

</div>