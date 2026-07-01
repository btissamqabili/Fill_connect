<?php

require_once '../../app/Controllers/SeanceController.php';
require_once '../../app/Controllers/AdherentController.php';
require_once '../../app/Controllers/SalleController.php';

$controller = new SeanceController();

$adherents = (new AdherentController())->index();
$salles = (new SalleController())->index();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $controller->store(
        $_POST['date_seance'],
        $_POST['type_activite'],
        $_POST['duree'],
        $_POST['equipement_utilise'],
        $_POST['id_adherent'],
        $_POST['id_salle']
    );

    header('Location: index.php');
    exit;
}
?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="form-container">

    <h1>Ajouter une séance</h1>

    <form method="POST">

        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date_seance" required>
        </div>

        <div class="form-group">
            <label>Type d'activité</label>
            <input type="text" name="type_activite" required>
        </div>

        <div class="form-group">
            <label>Durée (minutes)</label>
            <input type="number" name="duree" required>
        </div>

        <div class="form-group">
            <label>Équipement utilisé</label>
            <input type="text" name="equipement_utilise">
        </div>

        <div class="form-group">
            <label>Adhérent</label>

            <select name="id_adherent" required>

                <?php foreach ($adherents as $adherent): ?>

                    <option value="<?= $adherent['id_adherent'] ?>">
                        <?= $adherent['nom'] . ' ' . $adherent['prenom'] ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label>Salle</label>

            <select name="id_salle" required>

                <?php foreach ($salles as $salle): ?>

                    <option value="<?= $salle['id_salle'] ?>">
                        <?= $salle['nom_salle'] ?>
                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <button class="btn-submit">
            Ajouter
        </button>

    </form>

</div>

<?php require_once '../layouts/footer.php'; ?>