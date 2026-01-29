<?php
// functions.php

function render_header($title, $path_prefix = './') {
    ?>
    <!DOCTYPE html>
    <html lang="es" class="h-100">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?> | Portafolio Servicios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $path_prefix; ?>assets/css/style.css">
    </head>
    <body class="d-flex flex-column h-100">
    <?php
}

function render_navbar($path_prefix = './') {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo $path_prefix; ?>index.php">
                <i class="bi bi-code-slash me-2"></i> Sistema de Geolocalización
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo $path_prefix; ?>index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?php echo $path_prefix; ?>php/geolocalizacion.php">Geolocalización</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="flex-shrink-0 my-5">
    <?php
}

function render_footer() {
    ?>
    </main>
    <footer class="footer mt-auto py-3 bg-light border-top">
        <div class="container text-center">
            <span class="text-muted small">© 2026 - Desarrollo de Aplicaciones Web Orientadas a Servicios</span><br>
            <span class="fw-bold text-primary">Brandon Arreola Cortés & Cristian Avendaño del Solar</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    <?php
}