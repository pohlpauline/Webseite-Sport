<?php
#### Datenbank-Verbindung aufbauen ###
$optionen = [
    PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC
];

try{
    $db = new PDO ('mysql:host=localhost;dbname=db_ppohl','root','',$optionen);
}catch(PDOException $error){
     echo 'Die Datenverbindung ist fehlgeschlagen';
     die(); #zeige nichts weiter an,falls DB-Verbindung fehlgeschlagen
}
$db->query('SET NAMES utf8');
#echo 'Die datenverbindung ist da';

