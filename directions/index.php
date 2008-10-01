<?php $page = 'directions'; ?>
<?php include('../includes/header.php') ?>
<script src="http://maps.google.co.uk/maps?file=api&v=1&key=ABQIAAAAnfs7bKE82qgb3Zc2YyS-oBR78nq_95Djm4YmBFGyvh4BlFyY9RSyLd5q4ff_cBqTJLI1nRE5gZsdvw" type="text/javascript"></script>

<p><strong>Below is a map of the location.</strong> There are a couple of links below to print it out. If you press the button marked <em>Satelite</em> on the large map, you get a nice detailed view of the location surroundings so to give you an idea of the venue. There's also the <a href="#location">location address below</a>.</p>
<ul>
<li><a href="http://maps.google.com/maps?f=q&hl=en&q=DT118RX&sll=37.0625,-95.677068&sspn=59.076726,112.5&ie=UTF8&z=14&ll=50.879021,-2.079377&spn=0.023341,0.083084&om=1">Link to printable map (Google Maps)</a></li>
<li><a href="http://www.multimap.com/map/browse.cgi?local=h&amp;scale=25000&amp;title=Duncan%20and%20Ellens%20Wedding&amp;pc=DT118RX&amp;icon=x">Link to printable map (Multimap)</a></li>
</ul>
<p id="map" style="width: 680px; height: 400px;"></p>
<a name="location" id="location"></a>
<p>The Langton Arms<br />Tarrant Monkton<br />Nr Blandford<br />Dorset<br />DT11 8RX<br /><em>Phone: 01258 830225</em></p>

<script type="text/javascript">
 //<![CDATA[
if (GBrowserIsCompatible()) {
  var map = new GMap(document.getElementById("map"));
  map.addControl(new GLargeMapControl());
  map.addControl(new GMapTypeControl());
	map.addControl(new GOverviewMapControl());
  map.centerAndZoom(new GPoint(-2.0794, 50.8779), 7);
  var point = new GPoint(-2.0794, 50.8779);
  var marker = createMarker(point, 1);
  map.addOverlay(marker);
}

// Creates a marker whose info window displays the given number
function createMarker(point, number) {
var marker = new GMarker(point);

// Show this marker's index in the info window when it is clicked
var html = "<span style='font:12px arial;font-weight:bold;'>The Langton Arms<br />Tarrant Monkton<br />Nr Blandford<br />Dorset<br />DT11 8RX<br />Phone: 01258 830225</span>";
GEvent.addListener(marker, "click", function() {
  marker.openInfoWindowHtml(html);
});

return marker;
}
//]]>
</script>

<?php include('../includes/footer.php') ?>
