<?php

require_once '../../app/Controllers/SalleController.php';

$controller = new SalleController();

$id = $_GET['id'];

// Ila t3emmer formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller->update(
        $id,
        $_POST['nom_salle'],
        $_POST['adresse']
    );

    header('Location: index.php');
    exit;
}

// Jib données dyal salle
$salle = $controller->show($id);

?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="form-container">

    <h1>Modifier une salle</h1>

    <form method="POST">

        <div class="form-group">
            <label>Nom de la salle</label>
            <input
                type="text"
                name="nom_salle"
                value="<?= $salle['nom_salle'] ?>"
                required
            >
        </div>

        <div class="form-group">
            <label>Adresse</label>
            <input
                type="text"
                name="adresse"
                value="<?= $salle['adresse'] ?>"
                required
            >
        </div>

        <button type="submit" class="btn-submit">
            Modifier
        </button>

    </form>

</div>