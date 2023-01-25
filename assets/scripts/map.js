/* eslint-disable quotes */
/* eslint-disable no-unused-vars */
/* eslint-disable no-undef */

import $ from 'jquery'

global.mapStyle = [{
  elementType: "geometry",
  stylers: [{
    color: "#f5f5f5"
  }]
},
{
  elementType: "labels.icon",
  stylers: [{
    visibility: "off"
  }]
},
{
  elementType: "labels.text.fill",
  stylers: [{
    color: "#616161"
  }]
},
{
  elementType: "labels.text.stroke",
  stylers: [{
    color: "#f5f5f5"
  }]
},
{
  featureType: "administrative.land_parcel",
  stylers: [{
    visibility: "off"
  }]
},
{
  featureType: "administrative.land_parcel",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#bdbdbd"
  }]
},
{
  featureType: "administrative.neighborhood",
  stylers: [{
    visibility: "off"
  }]
},
{
  featureType: "poi",
  elementType: "geometry",
  stylers: [{
    color: "#eeeeee"
  }]
},
{
  featureType: "poi",
  elementType: "labels.text",
  stylers: [{
    visibility: "off"
  }]
},
{
  featureType: "poi",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#757575"
  }]
},
{
  featureType: "poi.park",
  elementType: "geometry",
  stylers: [{
    color: "#e5e5e5"
  }]
},
{
  featureType: "poi.park",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#9e9e9e"
  }]
},
{
  featureType: "road",
  elementType: "geometry",
  stylers: [{
    color: "#ffffff"
  }]
},
{
  featureType: "road",
  elementType: "labels",
  stylers: [{
    visibility: "off"
  }]
},
{
  featureType: "road.arterial",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#757575"
  }]
},
{
  featureType: "road.highway",
  elementType: "geometry",
  stylers: [{
    color: "#dadada"
  }]
},
{
  featureType: "road.highway",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#616161"
  }]
},
{
  featureType: "road.local",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#9e9e9e"
  }]
},
{
  featureType: "transit.line",
  elementType: "geometry",
  stylers: [{
    color: "#e5e5e5"
  }]
},
{
  featureType: "transit.station",
  elementType: "geometry",
  stylers: [{
    color: "#eeeeee"
  }]
},
{
  featureType: "water",
  elementType: "geometry",
  stylers: [{
    color: "#c9c9c9"
  }]
},
{
  featureType: "water",
  elementType: "labels.text",
  stylers: [{
    visibility: "off"
  }]
},
{
  featureType: "water",
  elementType: "labels.text.fill",
  stylers: [{
    color: "#9e9e9e"
  }]
}
]

export const appendMaps = () => {
  var mapScript = document.createElement('script')
  mapScript.setAttribute('src', 'https://maps.googleapis.com/maps/api/js?key=' + $('.acf-map').data().key + '&callback=initMap')
  document.getElementsByClassName('acf-map')[0].parentNode.appendChild(mapScript)
}

export const initMap = () => {
  const mapData = $('.acf-map').data()
  const markerData = $('.marker').data()

  var map = new google.maps.Map(document.getElementsByClassName('acf-map')[0], {
    zoom: 13,
    center: markerData,
    styles: mapStyle,
    disableDefaultUI: true
  })
  var marker = new google.maps.Marker({
    position: markerData,
    map: map,
    icon: {
      url: '/wp-content/uploads/2022/08/marker.svg',
      scaledSize: new google.maps.Size(25, 35)
    }
  })
}
