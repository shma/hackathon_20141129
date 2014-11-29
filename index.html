<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA_RCytoYi52ryjczc1U8LMBa_muJAH9nU&sensor=TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
      var App = {};
      App.maxVolLng = 100;

      var audio = new Audio("/assets/sound/sample.wav");
      audio.volume = 0;
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(35.6, 139.6),
          zoom: 3,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);

        google.maps.event.addListener(map, 'mousemove', mylistener);
        google.maps.event.addListener(map, 'click', myClickListener);
      }

      function myClickListener(event) {
        console.log(event.latLng.lat()); 
        console.log(event.latLng.lng()); 
      }

      function mylistener(event) {
        mouseLat = event.latLng.lat();
        mouseLng = event.latLng.lng();

        var usLatRange = (mouseLat > 20) && (mouseLat < 50);
        var usLngRange = (mouseLat > -74) && (mouseLat < 50);

        if (usLatRange) {
          audio.play(); 
          console.log(audio.volume);
          if (audio.volume < 0.9) {
            audio.volume += 0.01;
          }
        } else {
          audio.pause(); 
        }

      }
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>
  </body>
</html>
