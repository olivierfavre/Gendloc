<?php
// Fichier qui permet de récupérer les coordonnées de l'unité de l'utilisateur connecté

$user = $this->get('security.token_storage')->getToken()->getUser();
$unite = $user->getUnite();

//chargement des coordonnées de l'opérateur connecté.
$conn = $this->get('database_connection');
$query = "SELECT ST_X(coordinates::geometry) AS lng, ST_Y(coordinates::geometry) AS lat FROM app_unites where id=".$unite;
$rows =$conn->fetchAll($query);


?>