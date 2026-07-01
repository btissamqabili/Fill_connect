<?php

require_once '../../app/Controllers/AbonnementController.php';
require_once '../../app/Controllers/AdherentController.php';

$controller = new AbonnementController();

$adherentController = new AdherentController();
$adherents = $adherentController->index();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->store(
        $_POST['type_abonnement'],
        $_POST['date_debut'],
        $_POST['date_fin'],
        $_POST['id_adherent']
    );

    header('Location: index.php');
    exit;
}
?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="form-container">

    <h1>Ajouter un abonnement</h1>

    <form method="POST">

        <div class="form-group">
            <label>Type d'abonnement</label>
            <input type="text"
                   name="type_abonnement"
                   required>
        </div>

        <div class="form-group">
            <label>Date début</label>
            <input type="date"
                   name="date_debut"
                   required>
        </div>

        <div class="form-group">
            <label>Date fin</label>
            <input type="date"
                   name="date_fin"
                   required>
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

        <button class="btn-submit">
            Ajouter
        </button>

    </form>

</div>

<?php require_once '../layouts/footer.php'; ?>