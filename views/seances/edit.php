<?php

require_once '../../app/Controllers/SeanceController.php';
require_once '../../app/Controllers/AdherentController.php';
require_once '../../app/Controllers/SalleController.php';

$controller = new SeanceController();

$id = $_GET['id'];
$seance = $controller->show($id);

$adherents = (new AdherentController())->index();
$salles = (new SalleController())->index();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $controller->update(
        $id,
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

    <h1>Modifier une séance</h1>

    <form method="POST">

        <div class="form-group">
            <label>Date</label>
            <input type="date"
                   name="date_seance"
                   value="<?= $seance['date_seance'] ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Type d'activité</label>
            <input type="text"
                   name="type_activite"
                   value="<?= $seance['type_activite'] ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Durée</label>
            <input type="number"
                   name="duree"
                   value="<?= $seance['duree'] ?>"
                   required>
        </div>

        <div class="form-group">
            <label>Équipement</label>
            <input type="text"
                   name="equipement_utilise"
                   value="<?= $seance['equipement_utilise'] ?>">
        </div>

        <div class="form-group">
            <label>Adhérent</label>

            <select name="id_adherent">

                <?php foreach ($adherents as $adherent): ?>

                    <option
                        value="<?= $adherent['id_adherent'] ?>"
                        <?= $adherent['id_adherent'] == $seance['id_adherent'] ? 'selected' : '' ?>>

                        <?= $adherent['nom'] . ' ' . $adherent['prenom'] ?>

                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <div class="form-group">
            <label>Salle</label>

            <select name="id_salle">

                <?php foreach ($salles as $salle): ?>

                    <option
                        value="<?= $salle['id_salle'] ?>"
                        <?= $salle['id_salle'] == $seance['id_salle'] ? 'selected' : '' ?>>

                        <?= $salle['nom_salle'] ?>

                    </option>

                <?php endforeach; ?>

            </select>
        </div>

        <button class="btn-submit">
            Modifier
        </button>

    </form>

</div>

<?php require_once '../layouts/footer.php'; ?>