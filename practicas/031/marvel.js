const URL_APY_MARVEL ="https://gateway.marvel.com/433/v1/public/";
const KEY_PUBLICA ='298aee66b618cfcbd441b845e4585faa';
const KEY_PRIVADA = '370db02a0499dfc9d6c5ea6f184e35e7797cbf18';
let marcaTiempo = '';
let parametros = '';
let html = '';
let url = '';
let respuesta = null;
let datos = null;
let jsonPersonajes = null;
let objetoPersonajes = null;
let offset = 0;

$(document).ready( function()
    {
          //crearParametros() //La quite de aqui, porque produce conflictos con la peticion
    }
);

function marcarTiempo()
{
    marcaTiempo = new Date().getTime();
}

function crearHash()
{
    return CryptoJS.MD5(marcaTiempo + KEY_PRIVADA + KEY_PUBLICA);
}

function crearParametros()
{
    marcarTiempo();
    parametros = '';
    parametros += 'characters?limit=20&offset=' + offset + '&ts=';
    parametros += marcaTiempo;
    parametros += '&apikey=';
    parametros += KEY_PUBLICA;
    parametros += '&hash=';
    parametros += crearHash();
    url = URL_APY_MARVEL + parametros;
}

async function obtenerDatos()
{
    crearParametros();
    window.scrollTo( { top: 1, left: 1, behavior: 'smooth'} );
    let respuesta = await fetch(url);
    if (!respuesta.ok) {
        alertify.alert('¡Atención!', 'Ocurrio algo, mira el log.');
        cosole.log('ESTATUS: ' + respuesta.status);
        limpiarDatos();
    }
    datos = await respuesta.json();
    pintarDatos();
}

function limpiarDatos()
{
    $("#tbodyDatos > tr").remove();
    $("#tbodyDatos").append( '<tr class="trDatos"><td>Esperando datos...</td></tr>' );
}

function pintarDatos()
{
    jsonPersonajes = datos.data.results;
    offset += jsonPersonajes.length;
    $("#tbodyDatos > tr").remove();
    if(jsonPersonajes.length > 0) {
        html = '';
        //Si hay personajes:
        for(indice=0; indice<jsonPersonajes.length; indice++) {
            objetoPersonajes = objetoPersonajes[indice];
            html += '<tr class="trDatos">';
                html += '<td>';
                    html += '<div class="card mb-3">';
                    html += '<div class="row g-0">';
                    html += '<div class="col-md-4">';
                        html += '<img src="' + (objetoPersonajes.thumbnail.path).replace("http", "https") + '.';
                        html += objetoPersonajes.thumbnail.extension + '" class="img-fluid rounded-start" alt="';
                        html += + objetoPersonajes.name + '">';
                    html += '</div>';
                    html += '<div class="col-md-8">';
                    html += '<div class="card-body">';
                    html += 'h5 id="h5_' + objetoPersonajes.id + '" class="card-title">' + objetoPersonajes.name + '</h5>';
                    objetoPersonajes.description = (objetoPersonajes.description=="")? 'No hay descripción':objetoPersonajes.description;
                    html += '<p class="card-text">' + objetoPersonajes.description + '</p>';
                    html += '<p class="card-text"><small class="text-muted">';
                    html += objetoPersonajes.comics.available + ' Comic(s) disponible(s).<br />';
                    html += objetoPersonajes.series.available + ' Serie(s) disponibñe(s).<br  />';
                    html += objetoPersonajes.stories.available + ' Historia(s) disponible(s).<br />';
                    html += objetoPersonajes.events.available + ' Evento(s) disponible(s).';
                    html += '</small></p>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                    html += '</div>';
                html += '</td>';
            html += '</tr>';
        }
    }else {
        //No hay personajes:
        html += '<tr class="trDatos"><td>NO hay datos...</td></tr>';
    }
    $("#tbodyDatos").append( html );
}

obtenerDatos().catch(error => {
    alertify.alert('¡Atención!', 'Ocurrio un error, mira el log.');
    console.log('ERROR: ' + error.message);
    limpiarDatos();
});