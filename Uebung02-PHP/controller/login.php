<?php
session_start();
require_once dirname(__DIR__).'/config/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = '';
    if(isset($_POST['email'])) $email =(string) $_POST['email'];
    $pwd ='';
    if(isset($_POST['pwd'])) $pwd =(string) $_POST['pwd'];

    if(!empty($email) && !empty($pwd)){
        $stmt = $db->prepare('SELECT * FROM `users` WHERE `email` = :mail');
        $stmt->bindValue(':mail',$email);
        $stmt->execute();
        $erg= $stmt->fetch();

        if(!$erg && !password_verify($pwd, $erg['password'])){
            $_SESSION['msg'] =' Falsche Logindaten.';
           
        }else{
            $_SESSION['name'] = $erg['firstname'];
            $_SESSION['id'] = $erg['id'];
            $_SESSION['login']=true;
        
        }
    }else{
        $_SESSION['msg'] =' Bitte die Pflichtfelder* ausfüllen.';
    }
}

unset($_SESSION['token']);
header('Location:../index.php');
?>



