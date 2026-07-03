<?php

require_once '../../app/Controllers/AdherentController.php';

$controller = new AdherentController();

try {

    if (isset($_GET['id'])) {
        $controller->delete($_GET['id']);
        header('Location: index.php');
        exit;
    }

} catch (Exception $e) {
    echo "
    <script>
        alert('Impossible de supprimer cet adhérent car il possède des abonnements.');
        window.location.href='index.php';
    </script>";
}
?>