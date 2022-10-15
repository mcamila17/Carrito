<?php 
require 'includes/funciones.php';

incluirTemplate('header');
?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="/src/main.js">
<!-- 
    <script src="src/js/sesion.js" type="module"></script>-->
    <main class="contenedor seccion">
        <div class="sesion">
            <div class="imagen-formulario">
                <img src="build/img/sesion.jpg" alt="imga">
            </div>
            <form class="formulario" id="login-form">
                <div class="texto-formulario">
                    <h2>Bienvenido de nuevo</h2>
                    <h3>Inicia sesión con tu cuenta</h3>
                </div>
                <div class="input">
                    <label for="usuario">Usuario</label>
                    <input placeholder="Ingresa tu nombre" type="text" id="login-email">
                </div>
                <div class="input">
                    <label for="contraseña">Contraseña</label>
                    <input placeholder="Ingresa tu contraseña" type="password" id="login-password">
                </div>
                <div class="password-olvidada">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="input">
                    <input type="submit" value="Login">
                </div>
            </form>
    
        </div>
        
    </main>
  <!-- SCRIPTS -->
    <!-- Toastify js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="/src/main.js" type="module"></script>
    
    

    <?php incluirTemplate('footer'); ?>