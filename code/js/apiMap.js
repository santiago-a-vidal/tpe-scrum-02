
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