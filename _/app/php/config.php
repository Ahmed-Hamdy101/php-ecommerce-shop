<?php
//const ar_connection = Array()

define("DB_SERVER","127.0.0.1");
define("BASE","/");
define("DB_USERNAME","root");
define("DB_PASSWORD","");
define("DB_DATABASE","shop");
define("DB_DATABASE_PORT","3306");

try{
$get_conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATABASE.";port=".DB_DATABASE_PORT.";",DB_USERNAME,DB_PASSWORD);
$get_conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$get_conn->exec("SET NAMES'utf8'");

}
catch(Exception $e){

echo $e->getMessage();

}















?>
