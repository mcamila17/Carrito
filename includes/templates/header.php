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
                </nav>
            </div><!--.barra-->
            
            <?php if($inicio){?>
                <h1 class="shell"> <img src="build/img/shell.png" alt="logo shell"> Shell Eco-marathon</h1>
        </div>
                <div class="sombra">
                    <p>Grupo Estudiantil Universidad Militar Nueva Granada</p>
                </div>
            <?php }?>
            

        
    </header>