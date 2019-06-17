/**
 * Crea un nuevo marker y lo agrega al grupo
    group: donde se guarda
    coord: localizacion
    html : info asociada
 */


function addMarkerToGroup(group, coordinate, html) {
    let marker = new H.map.Marker(coordinate);
  // agrega datos del marker   // add custom data to the marker
    marker.setData(html);
    group.addObject(marker);
}

/**
 * Agrega los markers mostrando la posicion
 * Clickeando en el marker abre la info que contiene el HTML
 * map :Instancia Map con la app
 */

function addInfoBubble(map) {
    let group = new H.map.Group();

    map.addObject(group);
//  envento tap': abre la info del group
    group.addEventListener('tap', function (evt) {

//     para todos los objetos que contiene
        let bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
//     lee la info
        content: evt.target.getData()
    });
//  muestra la info
    ui.addBubble(bubble);
    }, false);

        let numero_reporte = document.getElementsByClassName('id_reporte');
        let longitud = document.getElementsByClassName('longitud');
        let latitud = document.getElementsByClassName('latitud');
        let foto = document.getElementsByClassName('foto');
        let descripcion= document.getElementsByClassName('descripcion');
        //iteramos los reportes y los agregamos al mapa
        for(let i = 0; i < longitud.length; i++){

            addMarkerToGroup(group, {lat: latitud[i].innerHTML, lng: longitud[i].innerHTML},
                '<div class="infoReporte"><div><p>'+numero_reporte[i].innerHTML +'</p><a> <img class="reporte" src="'+foto[i].innerHTML+'"></a>' +
                '</div><div> '+descripcion[i].innerHTML+'</div></div>');

        }

}

/**
 * Se inicia la api
 */

let platform = new H.service.Platform({
    app_id: 'devportal-demo-20180625',
    app_code: '9v2BkviRwi9Ot26kp2IysQ',
    useHTTPS: true
});
let pixelRatio = window.devicePixelRatio || 1;
let defaultLayers = platform.createDefaultLayers({
    tileSize: pixelRatio === 1 ? 256 : 512,
    ppi: pixelRatio === 1 ? undefined : 320
});
// ininicia el mapa en Tandil
let map = new H.Map(document.getElementById('map'),
    defaultLayers.normal.map,{
    center: {lat: -37.32167, lng: -59.13316},
    zoom: 15,
    pixelRatio: pixelRatio
});

// behavior: interacciones del mapa(paneo/zoom)
let behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
// crea la interfaz del usuario(ui)
let ui = H.ui.UI.createDefault(map, defaultLayers);

// llama a la funcion para usar el mapa
addInfoBubble(map);
