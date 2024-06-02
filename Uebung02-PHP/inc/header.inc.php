<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" />
  
   <!--Bodoni-Schriftart-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display&display=swap" rel="stylesheet">
<!--Schrift Roboto Mono-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">   
<!--Schriftart Noto san-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Playfair+Display&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
<script src="../js/jquery-3.7.1.min.js"></script>
    <title>Mitglieder werben</title>
    <style>
      *{
        box-sizing:border-box;
        padding:0;
        margin:0;
      }

          /*für 6 Kacheln*/
          .header {
    display: flex;
    justify-content: center; /*space-around*/
    background-color: rgba(0,177,106,0.7); /*jade a 1 a0.8*/
    padding: 2px;
}
          .kachel{
            font-family: "Roboto Mono", monospace;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  line-height:60px;
   font-size:28px;    /*30px*/     
    width: calc(16.666% - (1px * (6 -1) /6)); /* Berechnung der Breite der Kacheln */
    background-color: (0,177,106,0.8); /*jade a 1*/
    padding:20px;
    color:white;
          }
          nav{
            background-color:rgba(183,244,216,0.7);
            height:80px; /* 50px 100px*/
          }
          .navbar-collapse{
            background-color:white;
          }
          .nav-link{
            color:black;
          }
          a{
            text-decoration:none;
            color:black;
            justify-content:center;
            font-family: "Noto Sans", sans-serif;
  font-optical-sizing: auto;
  
  font-style: normal;
  padding:2.5px; /*3px*/
  display:inline-block;
 

          }
        


 @media screen and (min-width: 768px) {

  .navbar-collapse{
            background-color:rgba(183,244,216,0.7)!important;
            height:80px; /* 50px 100px*/
          }
 
    }
    

    
    

 

    </style>
</head>
<body>
   <header class= "header">
    <div class="kachel">S</div>
    <div class="kachel">P</div>
    <div class="kachel">O</div>
    <div class="kachel">R</div>
    <div class="kachel">T</div>
    <div class="kachel">1</div>
   </header> 

   <nav class="navbar navbar-expand-lg ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
 
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 p-4">
      <li class="nav-item active  p-2">
        <a class="<?php echo empty($page)? 'nav-link':'';?>" href="index.php">Home</a>
      </li>
      <?php if(!isset($_SESSION['id']) && !isset($_SESSION['login'])) :?>
      <li class="nav-item p-2">
        <a class="<?=($page==='registrierung')?'nav-link':'';?>" href="index.php?page=registrierung">Registrierung</a>
      </li>
      
      <li class="nav-item p-2">
        <a class="<?=($page==='login')?'nav-link':'';?>" href="index.php?page=login">Login</a>
      </li>
      <?php else: ?>
      <li class="nav-item p-2">
        <a class="<?=($page==='kursanmeldung')?'nav-link':'';?>" href="index.php?page=kursanmeldung">Kursanmeldung</a>
      </li>
      <?php endif;?>
      <li class="nav-item p-2">
        <a class="<?=($page==='schnupperkurs')?'nav-link':'';?>" href="index.php?page=schnupperkurs">Schnupperkurs</a>
      </li>
    </ul>
  
  </div>

</nav>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>











 
    
</body>
</html>