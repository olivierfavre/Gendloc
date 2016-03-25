<?php
// Fichier qui permet de récupérer l'altitude d'un point en passant par IGN

// boucle sur l'ensemble des SMS du jour présent dans le tableau $data de taille $size défini dans day_sms.php
for($i=0;$i<$size;$i++)
{
    if (isset($data[$i]['lat']))
    {
        // récupération des données de latitude et de longitude de la ligne i
        $lat=$data[$i]['lat'];
        $long=$data[$i]['lng'];

        // définition de la requête à envoyer à IGN
        $request_url = 'http://gpp3-wxs.ign.fr/tfn3j0pulpy03h00sv16ychs/alti/rest/elevation.json?lon='.$long.'&lat='.$lat.'&zonly=true'; 
        $request_params = '';
        
        // définition de la requête CURL
        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $request_url);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:text/xml', 'Referer: http://pghm-isere.com'));
        $response = curl_exec( $ch );

        // décodage de la réponse en json pour obtenir l'altitude sous forme de tableau
        $altitude0 = json_decode($response, true);
        
        //récupération de la valeur de l'altitude
        $altitude = $altitude0['elevations'][0];
        
        // ajout de l'altitude dans data
        $data[$i]['altitude'] = $altitude;

    } else { // si la latitude n'est pas définie, on ajoute juste le champ altitude pour qu'il n'y ait pas de bug dans les .twig
        $data[$i]['altitude'] = "";
    } // end if
} //end for

?>