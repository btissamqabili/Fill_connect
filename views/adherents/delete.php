<?php

require_once '../../app/Controllers/AdherentController.php';

$controller = new AdherentController();

$id = $_GET['id'];

$controller->delete($id);

header('Location: index.php');
exit;
?>