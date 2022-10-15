<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ?'inicio':''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="build/img/logo.svg" alt="logo carrito">
                </a>
                <nav class="navegacion">
                    <a href="equipo.php"> Equipo</a>
                    <a href="galeria.php">Galería</a>
                    <a href="sesion.php">Iniciar Sesión</a>
                    <a href="index.php">Cerrar Sesión</a>
                </nav>
            </div><!--.barra-->
        
    </header>

<body>
    
<main class="contenedor seccion intento">
        <h1 class="Dato-carrito">Datos Carrito</h1>
        <div >
            <table class="tabla">
            <tbody id="bodyVariables" class="tabla-datos"></tbody>
                  <tr>
                       
                        <th  class="bg-rc" >Temperatura (°C)</th>
                        <th class="bg-ro">Voltaje (V)</th>
                        <th class="bg-rc">Corriente (A)</th>
                        <th class="bg-ro">Potencia (W)</th>
                        <th class="bg-rc">Velocidad Angular (ω)</th>
                        <th class="bg-ro">Velocidad Lineal (Km/h)</th>
                  </tr>
            
            </table>

        </div>
 
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    

    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-app.js"></script>

    <script src="https://www.gstatic.com/firebasejs/9.10.0/firebase-auth.js"></script>

    <script>
      var firebaseConfig = {
            apiKey: "AIzaSyC708W40Mivm4vkTlEbCW4iiNrLgtDkqho",
            authDomain: "pagcarrito-4ca82.firebaseapp.com",
            databaseURL: "https://pagcarrito-4ca82-default-rtdb.firebaseio.com",
            projectId: "pagcarrito-4ca82",
            storageBucket: "pagcarrito-4ca82.appspot.com",
            messagingSenderId: "260258023294",
            appId: "1:260258023294:web:c75cdf417c9d4408e8152f"
      };
      // Initialize Firebase
       firebase.initializeApp(firebaseConfig);
       const auth = firebase.auth();
    </script>


    <script src="src/js/inicio.js"></script>
  </body>
    <?php incluirTemplate('footer'); ?>