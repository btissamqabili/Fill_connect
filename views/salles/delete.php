<?php

require_once '../../app/Repositories/SalleRepository.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];

$repository = new SalleRepository();

$repository->delete($id);

header('Location: index.php');
exit;
?>