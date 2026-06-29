<?php

require_once __DIR__ . '/../config/connexion.php';
require_once __DIR__ . '/../app/Repositories/SalleRepository.php';

$db = new Database();
$conn = $db->getConnection();

echo "Connexion réussie <br><br>";

$salleRepository = new SalleRepository();

$salles = $salleRepository->findAll();

echo "<pre>";
print_r($salles);
echo "</pre>";