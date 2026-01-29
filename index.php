<?php
require_once 'php/functions.php';

render_header("Inicio"); 
render_navbar();
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<div class="landing-page">
    <div class="container">
        <div class="row align-items-center min-vh-75 py-5">
            <div class="col-md-7 text-start animate__animated animate__fadeInLeft">
                <div class="badge bg-primary mb-3 px-3 py-2 shadow-sm">
                    <i class="bi bi-cpu-fill me-2"></i> Ingeniería de Servicios
                </div>
                <h1 class="display-1 mb-3">
                    PLATAFORMA DE <br>
                    <span class="text-highlight">GEODATOS</span>
                </h1>
                <p class="fs-4 text-muted mb-4 pe-md-5">
                    Arquitectura orientada a servicios para la gestión, visualización y análisis de coordenadas geográficas en entornos web de alta precisión.
                </p>
                <p class="text-secondary small text-uppercase fw-bold ls-1">
                    Unidad 2: Implementación de Interfaces de Programación de Aplicaciones de Terceros (APIS)
                </p>
            </div>

            <div class="col-md-5 text-center text-md-end animate__animated animate__fadeInRight">
                <div class="card-map-preview mb-4 shadow-sm border rounded-4 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?auto=format&fit=crop&q=80&w=600" 
                         alt="Geolocalización Interface" 
                         class="img-fluid" 
                         style="filter: grayscale(20%);">
                </div>
                <a href="php/dashboard.php" class="btn btn-action btn-lg shadow">
                    Explorar Investigación <i class="bi bi-arrow-right-circle ms-2"></i>
                </a>
            </div>
        </div>

        <div class="row g-4 pb-5 animate__animated animate__fadeInUp animate__delay-1s">
            <div class="col-12 mb-2">
                <h5 class="fw-bold text-uppercase text-primary small">Servicios Integrados</h5>
            </div>
            
            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="icon-box mb-3">
                        <i class="bi bi-radar fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Rastreo Real-Time</h5>
                    <p class="small text-muted">Consumo de la API de Geolocalización de HTML5 para capturar latitud y longitud con precisión de metros.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="icon-box mb-3" style="background-color: #fef3c7; color: #d97706;">
                        <i class="bi bi-map-fill fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Visualización GIS</h5>
                    <p class="small text-muted">Representación de capas de datos sobre mapas interactivos utilizando proveedores de servicios externos.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card p-4 h-100">
                    <div class="icon-box mb-3" style="background-color: #dcfce7; color: #16a34a;">
                        <i class="bi bi-database-fill-check fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Persistencia</h5>
                    <p class="small text-muted">Almacenamiento eficiente de rutas y puntos de interés en bases de datos relacionales (MySQL/PHPMyAdmin).</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

render_footer(); 
?>