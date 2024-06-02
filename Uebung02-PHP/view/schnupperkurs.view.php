


<!--Schriftart Open sans-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!--Schriftart Quicksand-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../Uebung02-PHP/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../Uebung02-PHP/css/schnupperkurs.css" />
    <title>Schnupperkurse</title>

</head>
<body>
<?php require_once dirname( __DIR__,1).'/inc/header.inc.php'; 
require_once dirname(__DIR__).'/config/db.php';
?>
    <main>
        <div class="container">
        <div class="styling">
           <span>S</span><span>P</span><span>O</span><span>R</span><span>T</span> 
        </div>
        <div class="pos">
        <div class="balken"><h2>Unsere Schnupperkurse:</h2></div>

 
    <div class="container">
       <p></p>

       <?php
       $stmt =$db->query('SELECT `id`, `titel`,`von`,`bis`,`preis`,`ort` FROM `kurse`');
       $stmt->execute();
       $result = $stmt->fetchAll(); 
       ?>
        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">Nr.</th>
                    <th scope="col">Sportkurs</th>
                    <th scope="col">von</th>
                    <th scope="col">bis</th>
                    <th scope="col">Preis</th>
                    <th scope="col">Ort</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($result AS $item): ?>  
                <tr>
                    <th scope="row"><?= $item['id']; ?></th>
                    <td><?=$item['titel'];?></td>
                    <td><?=date('d.m.Y', strtotime($item['von'])); ?> </td>
                    <td><?=date('d.m.Y', strtotime($item['bis'])); ?> </td>
                    <td><?= number_format($item['preis'],2, ",", ".")."€"; ?></td>
                    <td><?=$item['ort'];?></td>
                </tr>
              
                <?php endforeach; ?>
            
            </tbody>
        </table>
    </div>
    </div> <!--end-pos-->


        <!--formular-->
        <?php
    $stmt = $db->query('SELECT* FROM `kurse` ORDER BY `titel`' );
    $stmt ->execute();
    $kurs = $stmt->fetchAll();
    ?>
    <div class="container">
       <div class="row"><div class=" col-md-6" id="ueberschrift">
       <h3>Melden Sie sich für ein Kursangebot an.</h3></div>
    <div class="col-md-6 mt-5">
        <form action=""method="POST" >
           
           <input type="text" name="name" class="form-control mt-3 mb-3" placeholder="Namen eingeben..."/>
            <input type="text" name="vorname" class="form-control mt-3 mb-3" placeholder="Vornamen eingeben..."/>
            <input type="text" name="email" class="form-control mt-3 mb-3" placeholder="E-Mail eingeben..."/>
           <input type="text" name="telefon" class="form-control mt-3 mb-3" placeholder="Telefon eingeben..."/>
           
            <select name="kurs" class="form-select">
             <?php foreach($kurs AS $kursitem): ?>
                <option value="<?= $kursitem['id'];?>"><?=$kursitem['titel']; ?></option>
                <?php endforeach; ?>
            </select>
            <button class="btn mt-5 mb-3 button" type="submit "name="anmelden">anmelden</button>
        </form>
             </div>
            
              </div> 
             </div>

             <?php
            
               
                 $name = isset($_POST['name']) ? $_POST['name'] : '';
                 $vorname = isset($_POST['vorname']) ? $_POST['vorname'] : '';
                 $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : '';
                 $email = isset($_POST['email']) ? $_POST['email'] : '';
                 $kursid = isset($_POST['kurs']) ? (int) $_POST['kurs'] : '';
              
                        if(empty($_POST['name']) || empty($_POST['vorname'])
                         || empty($_POST['email']) || empty($_POST['telefon']) ||  !is_int($kursid)){
                        echo "<p> Bitte alle Felder ausfüllen.</p>";
                    }else{
            
            
            
              
                    $sql = "INSERT INTO `teilnehmer` (lastname, firstname, telefon, email, kursid) 
                            VALUES (:name, :vorname, :telefon, :email, :kursid)";
                    $statement = $db->prepare($sql);
                    $statement->bindValue(':name', $name);
                    $statement->bindValue(':vorname', $vorname);
                    $statement->bindValue(':telefon', $telefon);
                    $statement->bindValue(':email', $email);
                    $statement->bindValue(':kursid', $kursid);
                    $statement->execute();
                    $db = null;
               
                    }
                   
             
             ?>




        </div>

        
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
