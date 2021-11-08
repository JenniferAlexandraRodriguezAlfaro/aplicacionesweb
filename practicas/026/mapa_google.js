const API_KEY_MAPAS = "AIzaSyARJ8lDlhVR4orZ78OU28170TKCFQTyJyY"
let map;

// Creacion del script y llmado:
var script = document.createElement('script');
script.src = `https://maps.googleapis.com/maps/api/js?key=${API_KEY_MAPAS}&callback=initMap`;
script.async = true;

// Adjuntar la llamada al mapa para su uso 
window.initMap = function (){
    map = new google.maps.Map(document.getElementById("divMapaGoogle"), {
        center : { lat: 19.40404675, lng: -98.9865747 },
        zoom: 15, 
    });
};

// Agregar el script a la cabecera
document.head.appendChild(script);