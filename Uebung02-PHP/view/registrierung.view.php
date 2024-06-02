<head>
    <title>Registrierung</title>
    <link rel="stylesheet" href="../Uebung02-PHP/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="../Uebung02-PHP/css/registrierung.css" />
</head>
<body>
    <section>
        <div class="container">
            <div class="card mx-auto col-md-8" >
                <div class="card-body">
                    <h3 class="card-title text-center">Mein SPORT 1</h3>
                    <h4 class="text-center">Bitte registrieren Sie sich</h4>
                    <form action ="./controller/registrierung.php" method="POST" class="mx-auto p-2 form-sizing"id="formular">
                        <p class="form-group">
                            <label for="firstname p-2">Vorname*</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Vorname eingeben..." />
                        </p>
                        <p class="form-group">
                            <label for="secondname p-2">Nachname*</label>
                            <input type="text" name="secondname" class="form-control" id="secondname" placeholder="Nachname eingeben..." />
                        </p>
                        <p class="form-group">
                            <label for="email p-2">E-Mail*</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email eingeben..." />
                        </p>
                        <p class="form-group">
                            <label for="pwd p-2">Password*</label>
                            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password eingeben..." />
                            
                        </p>
                        <p><button type="submit" class="btn" name="registrieren" id="bestaetigen">Bestätigen</button></p>
                            <script>
                                    let button = document.querySelector(".btn").style.backgroundColor="#acdafb";
                            </script>
                    </form>

        
                </div>
            </div>
        </div>
    </section>
</body>