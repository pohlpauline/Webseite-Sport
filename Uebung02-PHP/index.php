<?php

session_start();

$page = $_GET['page'] ?? '';
#echo page;

require_once __DIR__.'/config/db.php';




$templateFile = __DIR__.'/view/'.$page.'.view.php';

if(file_exists($templateFile)){
    require_once $templateFile;
}else{    require_once __DIR__.'/view/home.view.php';
}


if(isset($_SESSION['message'])) unset($_SESSION['message']);
if(isset($_SESSION['msg'])) unset($_SESSION['msg']); #ist meldung für Registrierung
