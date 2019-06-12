var map;

function initMap() {
  var lat = 0;
  var lng = 0;
  var zoom = 1;
  var type = $("#map").data("type");
  if (type == 1) {
    lat = Number($("#map").data("lat"));
    lng = Number($("#map").data("lng"));
    zoom = 18;
  }
  if (type == 2) {
    lat_vlp = Number($("#map").data("lat-vlp"));
    lng_vlp = Number($("#map").data("lng-vlp"));
    lat_plf = Number($("#map").data("lat-plf"));
    lng_plf = Number($("#map").data("lng-plf"));
    lat = (lat_vlp + lat_plf) / 2;
    lng = (lng_vlp + lng_plf) / 2;
    zoom = 16;
  }
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: lat, lng: lng },
    zoom: zoom
  });
  if (type == 1) {
    marker = new google.maps.Marker({
      map: map,
      draggable: false
    });
    marker.setIcon({
      url: "/frontend/images/hotel_here.png",
      scaledSize: new google.maps.Size(65, 65)
    });
    marker.setPosition({ lat: lat, lng: lng });
    marker.setVisible(true);
    marker.setZIndex(1000);

    var infowindow = new google.maps.InfoWindow({
      content: $("#info_template").html()
    });
    marker.addListener("click", function() {
      infowindow.open(map, marker);
    });
  }
  if (type == 2) {
    lat_vlp = Number($("#map").data("lat-vlp"));
    lng_vlp = Number($("#map").data("lng-vlp"));
    marker_vlp = new google.maps.Marker({
      map: map,
      draggable: false
    });
    marker_vlp.setIcon({
      url: "/frontend/images/hotel_here.png",
      scaledSize: new google.maps.Size(65, 65)
    });
    marker_vlp.setPosition({ lat: lat_vlp, lng: lng_vlp });
    marker_vlp.setVisible(true);
    marker_vlp.setZIndex(1000);

    var infoVLP = new google.maps.InfoWindow({
      content: $("#vlp_template").html()
    });
    marker_vlp.addListener("click", function() {
      infoVLP.open(map, marker_vlp);
    });
    lat_plf = Number($("#map").data("lat-plf"));
    lng_plf = Number($("#map").data("lng-plf"));
    marker_plf = new google.maps.Marker({
      map: map,
      draggable: false
    });
    marker_plf.setIcon({
      url: "/frontend/images/hotel_here.png",
      scaledSize: new google.maps.Size(65, 65)
    });
    marker_plf.setPosition({ lat: lat_plf, lng: lng_plf });
    marker_plf.setVisible(true);
    marker_plf.setZIndex(1000);

    var infoPLF = new google.maps.InfoWindow({
      content: $("#plf_template").html()
    });
    marker_plf.addListener("click", function() {
      infoPLF.open(map, marker_plf);
    });
  }
}
