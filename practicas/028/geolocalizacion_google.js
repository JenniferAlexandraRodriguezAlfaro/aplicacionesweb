const API_KEY_MAPAS = "AIzaSyARJ8lDlhVR4orZ78OU28170TKCFQTyJyY"
let map;
let objetoInfoWindow;

var script = document.createElement('script');
script.src = `https://maps.googleapis.com/maps/api/js?key=${API_KEY_MAPAS}&callback=initMap`;
script.async = true;

window.initMap = function () {
    map = new google.maps.Map(document.getElementById("divMapaGoogle"), {
        center: { lat: 19.4040675, lng: -98.9865747},
        zoom: 15,
    });
    objetoInfoWindow=new google.maps.InfoWindow();
    const botonLocalizacion=document.createElement("button");
    botonLocalizacion.textContent="Moverse a tu localizacion";
    botonLocalizacion.classList.add("boton-mapa");
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(botonLocalizacion);
    botonLocalizacion.addEventListener("click", ()=>{

        if(navigator.geolocation){

            navigator.geolocation.getCurrentPosition(
                (position)=>{
                    const posicion = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    objetoInfoWindow.setPosition(posicion);
                    objetoInfoWindow.setContent('<div class="text-success">Aqui estas</div>');
                    objetoInfoWindow.open(map);
                    map.setCenter(posicion);
                },
                    ()=>{
                        mostrarError(true, objetoInfoWindow, map.getCenter());
                        
                    }
            );
        }else{
            mostrarError(false, objetoInfoWindow, map.getCenter());
        }
    });
};

function mostrarError(tieneGeolocalizacion, infoWindow,posicion){
    infoWindow.setPosition(posicion);
    infoWindow.setContent(
        tieneGeolocalizacion
        ?"Atencion: El servicio de geolocalizacion fallo."
        :"Atencion: Tu navegador no soporta geolocalizacion."

    );
    infoWindow.open(map);
}

document.head.appendChild(script);