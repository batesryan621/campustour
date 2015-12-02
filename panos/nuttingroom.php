<?php include 'header1.php';?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<script>
function initialize() {
  // Set up Street View and initially set it visible. Register the
  // custom panorama provider function. Set the StreetView to display
  // the custom panorama 'reception' which we check for below.
  var panoOptions = {
    pano: 'nuttingroompano',
    visible: true,
    panoProvider: getCustomPanorama
  };

  var panorama = new google.maps.StreetViewPanorama(
    document.getElementById('map-canvas'), panoOptions);
}

// Return a pano image given the panoID.
function getCustomPanoramaTileUrl(pano, zoom, tileX, tileY) {
  // Note: robust custom panorama methods would require tiled pano data.
  // Here we're just using a single tile, set to the tile size and equal
  // to the pano "world" size.
  return 'nuttingroompano.jpg';
}

// Construct the appropriate StreetViewPanoramaData given
// the passed pano IDs.
function getCustomPanorama(pano, zoom, tileX, tileY) {
  if (pano == 'nuttingroompano') {
    return {
      location: {
        pano: 'nuttingroompano',
        description: 'Vermont Tech - Nutting Room'
      },
      links: [],
      // The text for the copyright control.
      copyright: 'Imagery (c) 2015 Kyle Emmons & Andrew Tipper',
      // The definition of the tiles for this panorama.
      tiles: {
        tileSize: new google.maps.Size(1024, 512),
        worldSize: new google.maps.Size(1024, 512),
        // The heading in degrees at the origin of the panorama
        // tile set.
        centerHeading: 105,
        getTileUrl: getCustomPanoramaTileUrl
      }
    };
  }
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>	
<div id="wrapper">
	<div id='menu'>
	<a href="../" style="margin-left:10%;"><img src="../images/logo2.jpg"></img></a>
	<ul style="float:right; margin-right:10%;">
	   <li class='active'><a href='../'><span><b>HOME</b></span></a></li>
	   <li><a href='../tour.php'><span><b>CAMPUS TOUR</b></span></a></li>
	   <li class='last'><a href="http://www.vtc.edu/admissions-aid/request-information"><span><b>CONTACT</b></span></a></li>
	</ul>
	</div>
    <center><table>
	<tr>
		<td>
			<div id="map-canvas" style="border-radius:25px;width:1875px;height:800px;margin-right:15px;box-shadow:10px 10px 10px #888888"></div>
		</td>
	</tr>
	</table></center>

<?php include 'footer1.php';?>