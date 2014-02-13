<center><h5>Carte</h5></center>

<center><div id="map" style="height:380px;width: 500px"></div></center>

<script type="text/javascript">

	// create a map in the "map" div, set the view to a given place and zoom
var map = L.map('map').setView([47.9029640, 1.9092510], 5);

// add an OpenStreetMap tile layer
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);
</script>


<?php echo "<script>".getMarkerList()."</script>"; ?>
