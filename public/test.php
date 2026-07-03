<?php

require_once __DIR__ . '/../config/Database.php';

require_once __DIR__ . '/../app/Repositories/SalleRepository.php';
require_once __DIR__ . '/../app/Repositories/AdherentRepository.php';
require_once __DIR__ . '/../app/Repositories/AbonnementRepository.php';
require_once __DIR__ . '/../app/Repositories/SeanceRepository.php';

echo "<h1>Test de l'application FitConnect</h1>";

try {

    // Test connexion
    $db = new Database();
    $conn = $db->getConnection();

    echo "<p style='color:green'>
            ✅ Connexion à la base de données réussie.
          </p>";

    // Test SalleRepository
    $salleRepository = new SalleRepository();
    $salles = $salleRepository->findAll();

    echo "<p>✅ SalleRepository : "
        . count($salles)
        . " salle(s) trouvée(s).</p>";

    // Test AdherentRepository
    $adherentRepository = new AdherentRepository();
    $adherents = $adherentRepository->findAll();

    echo "<p>✅ AdherentRepository : "
        . count($adherents)
        . " adhérent(s) trouvé(s).</p>";

    // Test AbonnementRepository
    $abonnementRepository = new AbonnementRepository();
    $abonnements = $abonnementRepository->findAll();

    echo "<p>✅ AbonnementRepository : "
        . count($abonnements)
        . " abonnement(s) trouvé(s).</p>";

    // Test SeanceRepository
    $seanceRepository = new SeanceRepository();
    $seances = $seanceRepository->findAll();

    echo "<p>✅ SeanceRepository : "
        . count($seances)
        . " séance(s) trouvée(s).</p>";

    echo "<hr>";

    echo "<h3>Exemple de données : Salles</h3>";

    echo "<pre>";
    print_r($salles);
    echo "</pre>";

} catch (Exception $e) {

    echo "<p style='color:red'>
            ❌ Erreur : "
            . $e->getMessage() .
         "</p>";
}
?>