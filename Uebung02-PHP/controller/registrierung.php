<?php
session_start();
require_once dirname(__DIR__,1).'/config/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
 
      
    $name='';
    if(isset($_POST['firstname'])) $name=(string) $_POST['firstname'];
    $nachname='';
    if(isset($_POST['secondname'])) $nachname=(string) $_POST['secondname'];
    $email='';
    if(isset($_POST['email'])) $email=(string) $_POST['email'];
    $pwd='';
    if(isset($_POST['pwd'])) $pwd=(string) $_POST['pwd'];
  
    
##-------Prüfung, ob die E-Mail schon existiert---------##
if(!empty($name) && !empty($nachname) && !empty($email) && !empty($pwd)){
    $stmt = $db->prepare('SELECT `email` FROM `users` WHERE `email` = :mail');
    $stmt->bindValue('mail',$email);
    $stmt->execute();
    $erg =$stmt->fetch();

    if(!empty($erg['email'])){
        $_SESSION['message'] = 'Die eingegebene E-Mail-Adresse existiert schon.';

    }else{
   ###------------andernsfalls erfolgt neuer Eintrag in der DB-----###
   $stmt = $db->prepare('INSERT INTO `users`(`lastname`,`firstname`,`email`,`password`)
                        VALUES (:firstname,:secondname,:mail,:pwd)');   

                        $stmt->bindValue ('firstname',$name);
                        $stmt->bindValue('secondname',$nachname);
                        $stmt->bindValue('mail',$email);
                        $stmt->bindValue('pwd',password_hash($pwd,PASSWORD_DEFAULT));
                       
                        $stmt->execute();
                        
                        $_SESSION['message'] ='Hey '. mb_strtoupper($name).' ,Ihre Registrierung war erfolgreich.<br> Viel Spaß beim Anmelden.';
                    
                    }                     
    
}else{
        $_SESSION['message'] = 'Bitte alle Pflichtfelder * ausfüllen.';
    }

header('location:../?index.php');


}#ende button-registrieren 



