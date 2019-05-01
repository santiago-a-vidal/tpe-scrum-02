
function addMarkerToGroup(group, coordinate, html) {
    var marker = new H.map.Marker(coordinate);

    marker.setData(html);
    group.addObject(marker);
}

function addInfoBubble(map) {
    var group = new H.map.Group();

    map.addObject(group);

    group.addEventListener('tap', function (evt) {

        var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {

        content: evt.target.getData()
    });

    ui.addBubble(bubble);
    }, false);
    addMarkerToGroup(group, {lat:-37.318796, lng:-59.138583},
        '<div><a href=>Montevideo y 9 de julio</a>' +
        '</div><div >Basura<br>Cantidad: Baja</div>');

    addMarkerToGroup(group, {lat:-37.325354, lng: -59.136346},
        '<div ><a href=>Sarmiento y 9 de julio</a>' +
        '</div><div >Basura<br>Cantidad: Baja</div>');

    addMarkerToGroup(group, {lat: -37.325986, lng: -59.147128},
        '<div ><a href=>Av. Peron y Av. Espania</a>' +
        '</div><div >Basura<br>Cantidad: Media</div>');

    addMarkerToGroup(group, {lat: -37.311726, lng: -59.128931},
        '<div ><a href=>Uriburu y Montiel</a>' +
        '</div><div >Basura<br>Cantidad: Media</div>');

    addMarkerToGroup(group, {lat: -37.321976, lng: -59.121555},
        '<div ><a href=>Pinto y Moreno</a>' +
        '</div><div >Basura<br>Cantidad: Alta</div>');

    addMarkerToGroup(group, {lat: -37.330662, lng: -59.128889},
        '<div ><a href=>Constitucion y Paz</a>' +
        '</div><div >Basura<br>Cantidad: Alta</div>');
}

var platform = new H.service.Platform({
    app_id: 'devportal-demo-20180625',
    app_code: '9v2BkviRwi9Ot26kp2IysQ',
    useHTTPS: true
});
var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
    tileSize: pixelRatio === 1 ? 256 : 512,
    ppi: pixelRatio === 1 ? undefined : 320
});

var map = new H.Map(document.getElementById('map'),
    defaultLayers.normal.map,{
    center: {lat: -37.32167, lng: -59.13316},
    zoom: 14,
    pixelRatio: pixelRatio
});

var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var ui = H.ui.UI.createDefault(map, defaultLayers);

addInfoBubble(map);
