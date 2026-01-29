<?php
require_once 'functions.php';
render_header("Geolocalización Completa", "../");
render_navbar("../");
?>

<!-- Incluir Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<div class="container mt-4">
    <div class="row">
        <div class="col-lg-5 animate__animated animate__fadeInLeft">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden mb-4">
                <div class="card-header bg-primary text-white py-3">
                    <h5 class="m-0 fw-bold"><i class="bi bi-info-circle-fill me-2"></i>Detalles de Ubicación</h5>
                </div>

                <!-- cambia el body para incluir loader y contenido -->
                <div class="card-body p-4">
                    <div id="loader" class="text-center d-none">
                        <div class="spinner-border text-primary" role="status"></div>
                        <p class="mt-2 text-muted small">Consultando servidores GIS...</p>
                    </div>

                    <div id="info-content">
                        <p class="text-muted">Presiona el botón para realizar un escaneo completo de tu posición.</p>
                        
                        <ul class="list-group list-group-flush" id="address-details">
                            </ul>
                    </div>
                </div>
                <div class="card-footer bg-light border-0 p-3">
                    <!-- Botón para iniciar escaneo -->
                    <button onclick="getFullLocation()" class="btn btn-primary w-100 fw-bold py-2 shadow-sm">
                        <i class="bi bi-radar me-2"></i> INICIAR ESCANEO REAL
                    </button>
                </div>
            </div>
        </div>

        <!-- Aqui va el mapa -->
        <div class="col-lg-7 animate__animated animate__fadeInRight">
            <div class="card border-0 shadow-lg rounded-4 overflow-hidden" style="min-height: 500px;">
                <!-- Cuadro del mapa -->
                <div id="map" style="height: 500px; width: 100%; background: #e0e7ff;">
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- Incluir Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<script>
// Variables del mapa que usaremos
let map;
let marker;

// Funcion para inicializa mapa, centrado en mexico con zoom 4
function initMap() {
    map = L.map('map').setView([20, -100], 4);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {attribution: '© OpenStreetMap'}).addTo(map);
}

initMap();


function getFullLocation() {
    const loader = document.getElementById('loader');
    const info = document.getElementById('info-content');
    
    // Verificar si el navegador soporta geolocalización
    if (navigator.geolocation) {
        loader.classList.remove('d-none');
        info.classList.add('opacity-50');

        // Obtener posición actual
        navigator.geolocation.getCurrentPosition(async (position) => {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // actualiza mapa
            map.setView([lat, lon], 16);
            if(marker) map.removeLayer(marker);
            marker = L.marker([lat, lon]).addTo(map)
                .bindPopup("<b>¡Estás aquí!</b>").openPopup();

            // Geocodificación Inversa (API Nominatim)
            try {
                // Realizar solicitud a Nominatim
                const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${lat}&lon=${lon}`);
                const data = await response.json();
                // Renderizar detalles en el panel izquierdo
                renderDetails(lat, lon, data);
            } catch (error) {
                console.error("Error en API:", error);
            } finally {
                loader.classList.add('d-none');
                info.classList.remove('opacity-50');
                info.classList.remove('d-none');
            }
        });
    }
}

// Función para renderizar detalles en el panel izquierdo
function renderDetails(lat, lon, data) {
    const details = document.getElementById('address-details');
    const addr = data.address;

    // Construir el HTML con los detalles
    details.innerHTML = `
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="text-muted small">Coordenadas</span>
            // Ajustar a 4 decimales
            <span class="badge bg-dark rounded-pill">${lat.toFixed(4)}, ${lon.toFixed(4)}</span>
        </li>
        <li class="list-group-item py-3">
            <i class="bi bi-geo-alt-fill text-danger me-2"></i> <strong>Dirección:</strong><br>
            <span class="text-secondary">${data.display_name}</span>
        </li>
        <li class="list-group-item">
            <i class="bi bi-building me-2"></i> <strong>Municipio/Ciudad:</strong> ${addr.city || addr.town || addr.village || 'N/A'}
        </li>
        <li class="list-group-item">
            <i class="bi bi-map me-2"></i> <strong>Estado:</strong> ${addr.state || 'N/A'}
        </li>
        <li class="list-group-item">
            <i class="bi bi-globe-americas me-2"></i> <strong>País:</strong> ${addr.country} (${addr.country_code.toUpperCase()})
        </li>
        <li class="list-group-item bg-light mt-2 small text-center text-primary fw-bold">
            Ubicación procesada vía API Nominatim
        </li>
    `;
}
</script>

<style>
/* Estilo de leaflet para que el mapa se vea profesional */
.leaflet-container {
    font-family: 'Inter', sans-serif;
}
.list-group-item {
    border-left: none;
    border-right: none;
    font-size: 0.95rem;
}
</style>

<?php render_footer(); ?>