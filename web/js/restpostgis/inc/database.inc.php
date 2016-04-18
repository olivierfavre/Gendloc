<?php
/**
 * Database Include
 * Handles all database functions required by the REST web services.
 */



#Use this to work arround lack of document_root variable under PHP CGI.
//if( empty($_SERVER['DOCUMENT_ROOT']) )
//{
//	$_SERVER['DOCUMENT_ROOT'] = dirname("c:/inetpub/wwwroot/rest");
//}
	

/**
 * Return postgres data connection
 * @return 		object		- adodb data connection
 */
function pgConnection() {
	$conn = new PDO ("pgsql:host=postgresql1.alwaysdata.com;dbname=olivierfavre_gis;port=5432","olivierfavre","cC5417Zz", array(PDO::ATTR_PERSISTENT => true));
    return $conn;
}


/**
 * Sample SQL Server connection
 * @return 		object		- adodb data connection
 */
//function camaConnection() {
//    $conn = new PDO("odbc:Driver={SQL Server};Server=server_name;Database=database;Uid=userid;Pwd=password;Pooling=false;", "userid", "password");
//    return $conn;
//}



	
?>