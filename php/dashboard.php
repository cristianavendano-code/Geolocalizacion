<?php
require_once 'functions.php';
render_header("Investigación de Servicios", "../"); 
render_navbar("../"); 
?>

<div class="container mt-5">
    <div class="row mb-5 animate__animated animate__fadeIn">
        <div class="col-12 text-center">
            <span class="badge bg-primary mb-2">Documentación Técnica</span>
            <h1 class="display-4 fw-bold">Servicios de Geolocalización</h1>
            <p class="text-muted mx-auto" style="max-width: 700px;">
                Exploración de los fundamentos tecnológicos que permiten la integración de datos espaciales en aplicaciones web modernas orientadas a servicios.
            </p>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-md-6 animate__animated animate__fadeInUp">
            <div class="card h-100 p-2">
                <div class="card-body">
                    <div class="icon-box mb-3">
                        <i class="bi bi-geo-alt-fill fs-4"></i>
                    </div>
                    <h4 class="fw-bold">¿Qué es la Geolocalización?</h4>
                    <p class="text-muted">
                        Es el proceso tecnológico de identificar la ubicación geográfica real de un objeto o persona mediante datos digitales. A diferencia del simple posicionamiento, la geolocalización moderna integra <strong>latitud, longitud, altitud</strong> y, en servicios avanzados, el <strong>rumbo y velocidad</strong> del dispositivo en tiempo real.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6 animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
            <div class="card h-100 p-2">
                <div class="card-body">
                    <div class="icon-box mb-3" style="background-color: #e6fffa; color: #00a3c4;">
                        <i class="bi bi-cloud-arrow-down-fill fs-4"></i>
                    </div>
                    <h4 class="fw-bold">¿Qué es una API?</h4>
                    <p class="text-muted">
                        <strong>Application Programming Interface:</strong> Es un contrato de comunicación entre dos sistemas. En el desarrollo orientado a servicios, las APIs permiten que nuestra aplicación "pida" datos complejos (como mapas o rutas) a servidores potentes (como Google o Mapbox) sin necesidad de procesar nosotros toda la infraestructura cartográfica.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-12 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
            <div class="card p-2">
                <div class="card-body">
                    <h4 class="fw-bold mb-4">Tipos de Ubicación y Geodatos</h4>
                    <div class="row">
                        <div class="col-md-3 border-end">
                            <h6 class="fw-bold text-primary">Ubicación Estática</h6>
                            <p class="small text-muted">Puntos fijos en el mapa, como la dirección de un servidor o un local comercial.</p>
                        </div>
                        <div class="col-md-3 border-end">
                            <h6 class="fw-bold text-primary">Ubicación Dinámica</h6>
                            <p class="small text-muted">Seguimiento constante (tracking) de activos o usuarios en movimiento.</p>
                        </div>
                        <div class="col-md-3 border-end">
                            <h6 class="fw-bold text-primary">Geocodificación</h6>
                            <p class="small text-muted">Transformación de direcciones físicas (texto) en coordenadas GPS y viceversa.</p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="fw-bold text-primary">Proximidad</h6>
                            <p class="small text-muted">Detección por cercanía a Beacons, redes Wi-Fi o antenas de telefonía.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
            <div class="card h-100 p-2">
                <div class="card-body">
                    <h4 class="fw-bold mb-3">Tecnologías de Posicionamiento</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            <span><i class="bi bi-satellite me-2"></i> GPS (Global Positioning System)</span>
                            <span class="badge bg-light text-dark border">Satélites</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            <span><i class="bi bi-broadcast me-2"></i> Triangulación de Celdas (GSM)</span>
                            <span class="badge bg-light text-dark border">Torres Móviles</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            <span><i class="bi bi-wifi me-2"></i> WPS (Wi-Fi Positioning)</span>
                            <span class="badge bg-light text-dark border">Nodos de Red</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                            <span><i class="bi bi-hdd-network me-2"></i> Geolocalización por IP</span>
                            <span class="badge bg-light text-dark border">Bases de Datos</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-5 animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
            <div class="card h-100 p-2 bg-light border-0">
                <div class="card-body">
                    <h4 class="fw-bold">Generación de API Keys</h4>
                    <p class="small text-muted">Proceso estándar para consumir servicios:</p>
                    <ol class="small text-muted">
                        <li><strong>Registro:</strong> Crear cuenta en el portal (ej. Google Cloud Console).</li>
                        <li><strong>Proyecto:</strong> Definir una nueva aplicación en el dashboard del proveedor.</li>
                        <li><strong>Activación:</strong> Habilitar la librería específica (ej. <em>Maps JavaScript API</em>).</li>
                        <li><strong>Credenciales:</strong> Generar la llave alfanumérica única.</li>
                        <li><strong>Restricción:</strong> Configurar la seguridad (referrers de HTTP) para evitar robo de cuotas.</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-12 animate__animated animate__fadeInUp" style="animation-delay: 0.5s;">
            <div class="p-4 rounded-4 bg-white border">
                <h5 class="fw-bold mb-4 text-center">Ecosistema de Aplicaciones Líderes</h5>
                <div class="row g-3 text-center">
                    <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bd/Google_Maps_Logo_2020.svg/960px-Google_Maps_Logo_2020.svg.png" height="40" class="mb-2 d-block mx-auto"> <small class="fw-bold">Maps</small></div>
                    <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Uber_logo_2018.png/800px-Uber_logo_2018.png" height="20" class="mb-3 d-block mx-auto"> <small class="fw-bold">Uber</small></div>
                    <div class="col"><img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" height="40" class="mb-2 d-block mx-auto"> <small class="fw-bold">Instagram</small></div>
                    <div class="col"><img src="https://1000marcas.net/wp-content/uploads/2022/07/DiDi-Logo.png" height="30" class="mb-2 d-block mx-auto"> <small class="fw-bold">Didi</small></div>
                    <div class="col"><img src="https://play-lh.googleusercontent.com/VELJaQVX-Gq0FCqUwqMMPbCd-oqds24iXcaqQ_4u5ql9fl8Devc7lPfd9BPhzkZ-Nww" height="30" class="mb-2 d-block mx-auto"> <small class="fw-bold">KNQ BusNow</small></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php render_footer(); ?>