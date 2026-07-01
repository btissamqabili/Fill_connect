<?php
$currentDir = basename(dirname($_SERVER['SCRIPT_NAME']));
?>

<nav class="navbar">

    <a class="<?= $currentDir == 'dashboard' ? 'active' : '' ?>"
       href="/Fill_connect/views/dashboard/index.php">Dashboard</a>

    <a class="<?= $currentDir == 'salles' ? 'active' : '' ?>"
       href="/Fill_connect/views/salles/index.php">Salles</a>

    <a class="<?= $currentDir == 'adherents' ? 'active' : '' ?>"
       href="/Fill_connect/views/adherents/index.php">Adhérents</a>

    <a class="<?= $currentDir == 'abonnements' ? 'active' : '' ?>"
       href="/Fill_connect/views/abonnements/index.php">Abonnements</a>

    <a class="<?= $currentDir == 'seances' ? 'active' : '' ?>"
       href="/Fill_connect/views/seances/index.php">Séances</a>
</nav>
