<?php
//  chemin pour appeler les donnéees database //
$pdo = new PDO('SQlite:Nouveau dossier/test2.db');

// pour appeler les données de la table 
$query = $pdo->query('SELECT*FROM clients');

$data=$query->fetchAll(PDO::FETCH_ASSOC);
 var_dump($data);
?>