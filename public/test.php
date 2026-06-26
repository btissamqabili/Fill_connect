<?php

require_once '../config/connexion.php';

$db = new Database();
$conn = $db->getConnection();

echo "Connexion réussie";
?>