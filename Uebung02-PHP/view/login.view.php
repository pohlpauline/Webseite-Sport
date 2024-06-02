<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <link rel="stylesheet" href="../Uebung02-PHP/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../Uebung02-PHP/css/login.css" />
</head>

<body>
    <div class="container">
        <div class="card mx-auto col-md-6">
            <div class="card-body">
            <h3 class="card-title text-center">SPORT 1</h3>
            <h4 class="text-center">Login</h4>
            <div class="balken"></div>
           <!-- <div class="balken2"></div>-->
            <form action="./controller/login.php"method="POST" class="mx-auto p-2 form-sizing" id="formular">
            <p class="form-group">
                            <label for="email p-2">E-Mail*</label>
                            <input type="email" name="email" onclick="changeColor()" class="form-control" id="email" placeholder="Email eingeben..." />
                            <script>
                                function changeColor(){
                              let inputEmail = document.querySelector("input[type=email]");
                              inputEmail.style.backgroundColor="black";
                              inputEmail.style.color="white";

                                }
                            </script>
                        </p>
                        <p class="form-group">
                            <label for="kwd p-2">Kennwort*</label>
                            <input type="password" name="pwd"onclick="wechselColor()" class="form-control" id="kwd" placeholder="Kennwort eingeben..." />
                            <script>
                                function wechselColor(){
                              let inputPassword = document.querySelector("input[type=password]");
                              inputPassword.style.backgroundColor="black";
                              inputPassword.style.color="white";

                                }
                            </script>
                            
                        </p>
                        <p><button type="submit" class="btn" name="login" onclick="wechselFarbe()">Anmelden</button></p>
                        <script>
                                   function wechselFarbe(){
                              let button = document.querySelector(".btn");
                              button.style.backgroundColor="rgba(194,249,112,0.8) ";
                              button.style.color="white";

                                }
                        </script>
            </form>
            </div>
          
        </div>

    </div>
</body>
</html>