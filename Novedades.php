<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos - SAE</title>
    <link rel="stylesheet" href="<?php echo 'Style.css'; ?>">
    <script src="https://kit.fontawesome.com/e1826cb6ba.js" crossorigin="anonymous"></script>
</head>

<body id="body">
    <video autoplay muted loop id="bgVideo">
        <source src="<?php echo 'Apoyo_grafico/videoropa.mp4'; ?>" type="video/mp4">
    </video>
    
    <!-- Encabezado -->
    <header>
        <div class="icon__menu" id="btn_open">
            <i class="fa-solid fa-list"></i>
        </div>
        <!-- Botón de registro -->
        <div class="register-box">
            <a href="<?php echo 'login - copia/index.php'; ?>" class="btn-register">Regístrate</a>
        </div>
    </header>
    
    <!-- Menú lateral -->
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <h4>SAE</h4>
            <i class="fa-solid fa-hippo"></i>
        </div>

        <div class="option__menu">
            <a href="<?php echo 'Principal.php'; ?>">
                <div class="option">
                    <i class="fa-solid fa-home"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="<?php echo 'Productos.html'; ?>">
                <div class="option">
                    <i class="fa-solid fa-tag"></i>
                    <h4>Productos</h4>
                </div>
            </a>
            <a href="<?php echo 'Novedades.php'; ?>">
                <div class="option">
                    <i class="fa-solid fa-star"></i>
                    <h4>Novedades</h4>
                </div>
            </a>
            <a href="<?php echo 'Contacto.php'; ?>" class="select">
                <div class="option">
                    <i class="fa-solid fa-envelope"></i>
                    <h4>Contactos</h4>
                </div>
            </a>
        </div>
    </div>

    <main>
        <div class="container">
            <div class="intro">
                <h2>Contactos</h2>
                <p>¿Tienes alguna pregunta? No dudes en contactarnos. Estamos aquí para ayudarte con cualquier consulta sobre nuestros productos y servicios.</p>
            </div>
            <div class="image" id="galeria">
                <img src="<?php echo 'material/contactos_image.jpeg'; ?>" alt="Contactos S.A.E">
            </div>
        </div>
    </main>

    <script src="<?php echo 'Script.js'; ?>"></script>

</body>

</html>
