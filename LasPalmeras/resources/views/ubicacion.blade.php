  @extends('layouts.app2')
  @section('contenido2')
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  @endsection
  @section('contenido')
    <div id="map" style="width: 700px; height: 500px;" ></div>
    <div id="debajo"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -22.02177392816143, lng: -63.68037723897214},
          zoom: 16
        });
        var objConfigMarker={
        position: {lat: -22.02177392816143, lng: -63.68037723897214},
        animation:google.maps.Animation.DROP,
        map:map,
        draggable:true,
        title:"estamos aqui"}
      var gMarker = new google.maps.Marker(objConfigMarker);
      }

    </script>
    <a href="/" class="btn btn-primary">volver</a>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1QPTN5FTSznqwajefNHh-hgzKOS6yNBo&callback=initMap"
    async defer></script>
@endsection