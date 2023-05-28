<?php wp_head(); 
?>
<h1>Calculate Distance</h1>
        <div class="row">
            <label for="origin_lat">Origin Latitude</label>
            <input type ="text" name="origin_lat" id="origin_lat">
            <label for="origin_long">Origin Longitude</label>
            <input type ="text" name="origin_long" id="origin_long">
        </div>
        <div class="row">
            <label for="destination_lat">Destination Latitude</label>
            <input type ="text" name="destination_lat" id="destination_lat">
            <label for="destination_long">Destination Longitude</label>
            <input type ="text" name="destination_long" id="destination_long">
        </div>
        <button type="button" name="cal_distance" id="cal_distance" onclick="getDistanceFromLatLonInKm();">Distance Is?</button>
    <div id="container">
      <div id="map"></div>
      <div id="sidebar">
        <h3 style="flex-grow: 0">Distance Between</h3>
        <pre style="flex-grow: 1" id="response"></pre>
      </div>
    </div>
      <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"
      defer
    ></script>
  