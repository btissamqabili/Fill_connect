<?php

require_once '../../config/Database.php';

$db = new Database();
$conn = $db->getConnection();

$nbSalles = $conn->query("SELECT COUNT(*) FROM salle")->fetchColumn();
$nbAdherents = $conn->query("SELECT COUNT(*) FROM adherent")->fetchColumn();
$nbAbonnements = $conn->query("SELECT COUNT(*) FROM abonnement")->fetchColumn();
$nbSeances = $conn->query("SELECT COUNT(*) FROM seance")->fetchColumn();

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php include '../layouts/header.php'; ?>
<div class="container">

    <h1>Dashboard FitConnect</h1>

    <div class="cards">

        <div class="card">
            <h2><?= $nbSalles ?></h2>
            <p>Salles</p>
        </div>

        <div class="card">
            <h2><?= $nbAdherents ?></h2>
            <p>Adhérents</p>
        </div>

        <div class="card">
            <h2><?= $nbAbonnements ?></h2>
            <p>Abonnements</p>
        </div>

        <div class="card">
            <h2><?= $nbSeances ?></h2>
            <p>Séances</p>
        </div>

    </div>

</div>