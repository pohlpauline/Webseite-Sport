<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
<!--Schriftart Open sans-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!--Schriftart Quicksand-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../Uebung02-PHP/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../Uebung02-PHP/css/kursanmeldung.css" />
    
 
    <title>Kursanmeldung</title>
 
   
  
</head>
<body>
<?php 
#session_start();
require_once dirname( __DIR__).'/inc/header.inc.php'; 
require_once dirname(__DIR__).'/config/db.php';
?>



<main>
    <img src="./img/yoga.jpg" alt="yoga" class="yoga-hitting">
    <h2> Fühlen Sie sich wohl!</h2>
    <div class="balken"></div>
    <h3> Unsere Kursangebote:</h3>

    <div class="txt">
        <?php 
        $sql = "SELECT * FROM `kursmotivationstexte`";
        $stmt =$db->query($sql);
        $stmt->execute();
        $text = $stmt->fetch();
        ?>
        <p><?=$text['motivation']; ?> </p>
    </div>
    <div class=" balken balken2"></div>
    <!--formular-->
    <?php
    $stmt = $db->query('SELECT* FROM `kurse` ORDER BY `titel`' );
    $stmt ->execute();
    $kurs = $stmt->fetchAll();
    ?>
    <div class="col-md-12">
        <form action=""method="POST" >
            <p>Melden Sie sich für ein Kursangebot an.</p>
        
           <input type="text" name="telefon" class="form-control mt-3 mb-3" placeholder="Telefon eingeben..."/>
           
            <select name="kurs" class="form-select">
             <?php foreach($kurs AS $kurstitel): ?>
                <option><?=$kurstitel['titel'] ?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn mt-4 mb-3 button" type="submit "name="kursanmeldung">Mich für den Kurs anmelden</button>
        </form>
        <?php
#session_start();
require_once dirname(__DIR__).'/config/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kursanmeldung'])){
    // Überprüfen, ob alle Felder ausgefüllt sind
    if( empty($_POST['telefon'])){
      echo "<p> Bitte geben Sie eine Telefonnummer ein.</p>";
   } else {
       
        $telefon = $_POST['telefon'];

       

            foreach($kurs AS $kurstitel){
                if($kurstitel['titel'] === $_POST['kurs']){
                    $kid = $kurstitel['id'];
                    break;
                }
            }
            $userid = $_SESSION['id']; // Eindeutige Benutzer-ID aus der Session
           
            $statement = $db->prepare('UPDATE `users` SET `telefon` = :telefon, `kid` = :kursid WHERE `id` = :userid');
            $statement->bindValue(':telefon', $telefon);
            $statement->bindValue(':kursid', $kid);
            $statement->bindValue(':userid', $userid);
            $statement->execute();
      
       }
    }

?>

        
    </div>
    <div class=" balken balken3"><p>Für ein vitales Leben</p></div>

    <!--Footer-->
    <footer>
    
    <div class="col-25"> 
        <ul>
            <li><a href="#" id="footerschrift"></a></li>
            <li><a href="#">SPORT 1</a></li>
            <li><a href="#">Über uns</a></li>
            <li><a href="#">Vorstand</a></li>
        </ul>
    </div>
    <div class="col-25">
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#">Mitglied werden</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="#">Weiterempfehlen</a></li>
        </ul>
    </div>
    <div class="col-25">
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#">Nutzungsbedingungen</a></li>
            <li><a href="#">Datenschutz</a></li>
            <li><a href="#">Impressum</a></li>
        </ul>
    </div>
    <div class="col-25"id="last">
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#"class="fab fa-instagram icons white"></a></li>
            <li><a href="#"class="fab fa-facebook icons white"></a></li>
            <li><a href="#"class="fab fa-twitter icons white"></a></li>
        </ul>
    </div>

</footer>
     




</main>
</body>
</html>