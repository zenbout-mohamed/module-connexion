<?php
$DB_HOST = '127.0.0.1';   
$DB_USER = 'root';
$DB_PASS = '';            
$DB_NAME = 'moduleconnexion';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($mysqli->connect_errno) {
    die('Échec de la connexion MySQL: ' . htmlspecialchars($mysqli->connect_error));
}
$mysqli->set_charset('utf8mb4'); 
