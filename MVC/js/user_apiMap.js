function addMarkersToMap(map, coordinate) {
    map.removeObjects(map.getObjects());
    var marker = new H.map.Marker(coordinate);
    map.addObject(marker);
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

/**
 * An event listener is added to listen to tap events on the map.
 * Clicking on the map displays an alert box containing the latitude and longitude
 * of the location pressed.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function setUpClickListener(map) {
    // Attach an event listener to map display
    // obtain the coordinates and display in an alert box.
    map.addEventListener('tap', function (evt) {
      var coord = map.screenToGeo(evt.currentPointer.viewportX,
              evt.currentPointer.viewportY);

      let x = document.getElementsByClassName('lat');
      addMarkersToMap(map, {lat:-(Math.abs(coord.lat.toFixed(4))), lng:-(Math.abs(coord.lng.toFixed(4)))});
      x[0].value = -Math.abs(coord.lat.toFixed(4));
      x[1].value = -Math.abs(coord.lng.toFixed(4));
    });
  }

setUpClickListener(map);
