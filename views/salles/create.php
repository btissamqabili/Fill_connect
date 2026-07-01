<?php

require_once '../../app/Controllers/SalleController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $controller = new SalleController();

    $result = $controller->store(
        $_POST['nom_salle'],
        $_POST['adresse']
    );

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "Erreur lors de l'ajout.";
    }
}
?>

<link rel="stylesheet" href="../../public/css/style.css">
<?php require_once '../layouts/header.php'; ?>

<div class="form-container">
    <h1>Ajouter une salle</h1>

    <form method="POST">

        <div class="form-group">
            <label>Nom de la salle</label>
            <input type="text" name="nom_salle" required>
        </div>

        <div class="form-group">
            <label>Adresse</label>
            <input type="text" name="adresse" required>
        </div>

        <button class="btn-submit" type="submit">
            Ajouter
        </button>

    </form>
</div>
<?php require_once '../layouts/footer.php'; ?>