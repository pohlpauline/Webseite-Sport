<?php
session_start();
## SESSION löschen
unset($_SESSION['name']);
unset($_SESSION['id']);
unset($_SESSION['login']);

$_SESSION['msg'] ='Sie sind ausgelogt.';

header('Location:../index.php');