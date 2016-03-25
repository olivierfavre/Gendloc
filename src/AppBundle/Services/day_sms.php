<?php
// Fichier qui permet de récupérer les informations des SMS envoyés par l'unité dans la journée

$current_day = date('Y-m-d');
//$current_day = date('2016-03-21'); //DEBUG
$unite = $this->get('security.token_storage')->getToken()->getUser()->getUnite();

//récupération de tous les envois de sms de la journée
// connection à la base de données
$conn = $this->get('database_connection');
// requête pour récupérer les informations nécessaire
$query ="SELECT tel_number, heure, app_smsloc.date, app_geoloc.date AS geoloc_date, ST_Y(coordinates) AS lat, ST_X(coordinates) AS lng, statut 
         FROM app_smsloc
         LEFT JOIN app_geoloc ON app_geoloc.sms_id=app_smsloc.id 
         LEFT JOIN app_users ON app_users.id=app_smsloc.operator_id
         WHERE app_users.unite=".$unite." and app_smsloc.date='".$current_day."'
         ORDER BY app_smsloc.heure DESC";
// envoi de la requête et écriture du résultat dans $data
$data = $conn->fetchAll($query);

// Mise en forme de l'heure en h:m:s dans $data
$size=count($data);
for($i=0;$i<$size;$i++)
{
    $h=substr($data[$i]['heure'],0,2);
    $m=substr($data[$i]['heure'],2,2);
    $s=substr($data[$i]['heure'],4,2);
    $data[$i]['heure']="$h:$m:$s";
}

// $data est un tableau qui est envoyer à smsloc.html.twig par le contrôleur GendlocController (méthodes sms_sendAction ou maj_smsAction)


?>