<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!--Bodoni-Schrifart-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display&display=swap" rel="stylesheet">
<!--Merriweather--> 
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
   
<!--Schriftart Open sans-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

<!--Schriftart Quicksand-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Playfair+Display&family=Quicksand:wght@300..700&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">



<link rel="stylesheet" href="../Uebung02-PHP/bootstrap/css/bootstrap.css" />
<link rel="stylesheet" href="../Uebung02-PHP/css/home.css"/>
   
    <script src="../js/jquery-3.7.1.min.js"></script>
    <title>Mitglieder werben</title>

</head>
<body>
<?php require_once dirname( __DIR__,1).'/inc/header.inc.php'; ?>

<?php  if(isset($_SESSION['message'])):?> <!--hier ist meldung von gelungener registrierung-->
<div class="col-12 p-2">
	<p class="alert alert-danger"><?= ($_SESSION['message']) ?>
</div>

<?php endif;?>



    <!--Login-Bereich-->
    <?php if(isset($_SESSION['id'] )&& isset($_SESSION['login'])):?> <!--erfolgreiches Login-->
<div class="bg-secondary bg-opacity-25 col-12 p-2">
	<h3>Hallo <?= $_SESSION['name']?></h3>
	<a href="controller/logout.php" class="btn btn-sm btn-outline-primary fw-bold">Logout</a>
  

 
</div>
</div>
<?php endif;?>

<main class="row p-2">
<?php if(isset($_SESSION['msg'])): ?><!--Meldung, dass beim Login, die Pflichtfelder nicht leer sein dürfen-->
<div class="col-12 p-2">
	<p class="alert alert-danger"><?= nl2br($_SESSION['msg']) ?>
</div>
<?php endif;?>





<div class="container zweiteiler">
    <div class="row">

        <div class="col-md-6 mt-5">
            <img src="./img/generationen.jpg" class="img-fluid header-bild">
        </div>

        <div class="col-md-6 d-flex align-items-center mt-4 bg-light">
            <div class="text-block mr-5 slogan">
                <P id="eingeblendeter-satz">Denken Sie an Ihre <span>Gesund</span>heit.</P>
                <script>
                $(function() {
  // Element auswählen und verstecken
  let flyingText = $("#eingeblendeter-satz").hide();

  // Einfliegen animieren
  flyingText.delay(800).fadeIn("slow",function() {
  
  });
});
                </script>
            </div>


        </div>
    </div>
</div>
<!--GRID-->
<div class="container pos">
    <div class="grid">
        <div class="grid-item1"><img src="./img/jugend.jpg" alt="jugendliche Gruppe"></div>
        <div class="grid-item2"><p>Mit Leichtigkeit begleitet die <span>Sport1</span> Euer Wohlbefinden. </p></div>
        <div class="grid-item3"><!--<img src="bild.jpg" id="bild3">--><div id="bild3"><p>Werden Sie Mitglied und erfahren Sie über Ihre individuellen Vorteile bei der SPORT 1. Bei uns steht Sport an erster Stelle.</p></div></div>
        <div class="grid-item4"><img src="./img/apfel.jpg" id="bild4" class="wechseln"><img src="./img/altundneu.jpg" class="wechseln" alt="Pflanze" id="bild5">
 
        <p id="intention">Gemeinsam mit Ihnen wollen wir Ihr Befinden über unterschiedliche Lebensphasen konstant halten und verbessern.</p></div>
      <!--  <div class="grid-item5"><img src="bild.jpg"></div>-->
    </div>
   <script>


          /*Border-Styling*/
          document.querySelector("#bild4").style.border = "2px solid rgba(255, 255, 0, 0.65)";
          document.querySelector("#bild5").style.border = "2px solid green";
            
            
            /*slider*/
            let currentImage=0; 
            displayBilder();
            
            function displayBilder(){
              
            const bilder=document.querySelectorAll(".wechseln");
            for(let i=0; i<bilder.length;i++){
                bilder[i].style.display="none";
            }
            currentImage++;
            if(currentImage >bilder.length){
                currentImage=1;
            }
            bilder[currentImage-1].style.display= "block";
            setTimeout(displayBilder, 4000);
            }
                    </script>

</div>
<!--zweibilder-->
<div class="container pos-gleichgewicht">
  <div class="row">
    <div class="col-md-6">
              <div id="gleichgewichtText"></div> 
          <img src="./img/gleichgewicht.jpg" id="gleichgewicht" alt="Gleichgewichtsbild1">
    </div>
    <div class="col-md-6 gleichgewichtbild">
    <img src="./img/gleichgewicht (3).jpg" alt="Gleichgewichtbild2"id="gleichgewicht2">

    </div>

    <script>
        

                    /* zweites gleichgewicht-Bild(links)*/

                       let zielElement2 = document.querySelector("#gleichgewicht2");
       function createPTag2(){
                        if(!document.querySelector("#hoverGleichgewicht2")){
                        let text = document.createElement("p");

                        text.textContent="Für mehr Gelassenheit: Wir bieten Ihnen die Leistungen an, die Sie für Ihre Bedürfnisse erwarten. Ganz einfach und auf Sie abgestimmt.";

                        zielElement2.parentNode.appendChild(text);
                        text.id="hoverGleichgewicht2";
                       
                    }
                }
                    zielElement2.addEventListener('mouseover',createPTag2);
       
    </script>
 
   
    </div>
  </div>
     <!--drittes Bild in einer neuen Zeile-->
  <div class="container">
    <div class="row">
    <div class="col-md-4 p-2 entspannung">
      <img src="./img/entspannung.jpg" id="gleichgewicht3" alt="Gleichgewichtsbild3">
    </div>
    <script>
                  let zielElement3 = document.querySelector("#gleichgewicht3");
       function createPTag3(){
                        if(!document.querySelector("#hoverGleichgewicht3")){
                        let text = document.createElement("p");

                        text.textContent="Für mehr innere Stärke: Unsere Schnupperkurse bewirken, dass Sie mal vom Alltag abschalten können und sich auf sich fokussieren können. Finden Sie Ihre innere Stärke und melden Sie sich für einen Sportkurs an.";

                        zielElement3.parentNode.appendChild(text);
                        text.id="hoverGleichgewicht3";
                       
                    }
                }
                    zielElement3.addEventListener('mouseover',createPTag3);
    </script>
  </div>
</div>

<div class="container">
  <div class="row">
    <!--accordion-->
    <div class="col-md-12 accordion-style"><!-- accordion-style">-->

    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-header text-center">Ihre Vorteile <span class="p-2">&gt;</span></div>
        <div class="accordion-content">
          <ul>
        <li> <span>&#x002B;</span> Angebot von Sportkursen</li>
        <li> <span> &#x002B;</span> Erfahren Sie über unsere Ernäherungstipps</li>
        <li> <span> &#x002B;</span> unkomplizierte Kursanmeldung</li>
        <li> <span> &#x002B;</span> Profitieren Sie von unserer Meditationsapp</li>
       </ul>
       <ul>
        <li> <span> &#x002B;</span> Bei Fragen stehen wir Ihnen gerne zur Seite</li>
        <li> <span> &#x002B;</span> Wir sind für Ihre gesundheitliche Zukunft da</li>
       
       </ul>
      
        </div>
      </div>
     </div>
       <script>
  
  document.addEventListener('DOMContentLoaded', function() {
  const accordionItems = document.querySelectorAll('.accordion-item');
  for (let item of accordionItems) {
    const header = item.querySelector('.accordion-header');
    const content = item.querySelector('.accordion-content');

    header.addEventListener('click', ()=> {
      if (content.style.display === 'block') {
        content.style.display = 'none';
      } else {
        content.style.display = 'block';
      }
    });
  }
});
  </script>
     
  



  </div>
  </div>
</div>
<!--Mitgliedschaft-->
<div class="container ">
  <div class="row">
  <div class="col-md-12 mitgliedschaft-pos p-2" id="mitgliedschaft-container">

  <div class="mitgliedschaft">
  <h3>Haben wir Sie überzeugt?</h3>
<P class="mt-4  col-md-6  justify-content-center mitgliedschaft-text">Dann beantragen Sie Ihre Mitgliedschaft bei SPORT 1.<br> Ganz einfach und bequem.<br> Wir sind Ihr Ansprechpartner, wenn es um Gesundheit geht.</P>

<!-- hier gelange ich zur Registrierung-Auswertung-->
<form action="view/registrierung.view.php">
<button type="submit" class="btn mitglied-werden-btn" id="fadeInButton"> Mitglied werden</button></form>
<script>
            "use strict";

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  var triggerDiv = document.querySelector("#mitgliedschaft-container");
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    triggerDiv.style.display = "block";

       // Überprüfen, ob der Button sichtbar ist
       if ($(".mitglied-werden-btn").is(":visible")) {
        // Wenn sichtbar, ausblenden und dann mit Fade-In-Effekt anzeigen
        $(".mitglied-werden-btn").fadeOut("slow", function() {
          
            $(this).fadeIn("slow");
        });
    } else {
        // Wenn nicht sichtbar, direkt mit Fade-In-Effekt anzeigen
        $(".mitglied-werden-btn").fadeIn("slow");
    }
  } else {
    triggerDiv.style.display = "none";
  }
}
 </script>
</div>

  </div>
  </div>
</div>

<!--footer-->

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
</body>
</html>