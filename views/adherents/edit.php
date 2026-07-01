<?php

require_once '../../app/Controllers/AdherentController.php';
require_once '../../app/Repositories/SalleRepository.php';

$controller = new AdherentController();

$salleRepository = new SalleRepository();
$salles = $salleRepository->findAll();

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->update(
        $id,
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['telephone'],
        $_POST['id_salle']
    );

    header('Location: index.php');
    exit;
}

$adherent = $controller->show($id);

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="form-container">

    <h1>Modifier un adhérent</h1>

    <form method="POST">

        <div class="form-group">
            <label>Nom</label>
            <input
                type="text"
                name="nom"
                value="<?= $adherent['nom'] ?>"
                required>
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input
                type="text"
                name="prenom"
                value="<?= $adherent['prenom'] ?>"
                required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input
                type="email"
                name="email"
                value="<?= $adherent['email'] ?>"
                required>
        </div>

        <div class="form-group">
            <label>Téléphone</label>
            <input
                type="text"
                name="telephone"
                value="<?= $adherent['telephone'] ?>"
                required>
        </div>

        <div class="form-group">
            <label>Salle</label>

            <select name="id_salle">

                <?php foreach ($salles as $salle): ?>

                    <option
                        value="<?= $salle['id_salle'] ?>"
                        <?= $salle['id_salle'] == $adherent['id_salle'] ? 'selected' : '' ?>>
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