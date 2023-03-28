function initMap(){
    var exploreterus = {lat: -6.358983778968957, lng: 106.81114194911538};

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: exploreterus
    });

    var contentString = '<h2>Kantor Explore Terus</h2>';

    var infowindow =  new google.maps.InfoWindow({
        content: contentString,
        position: exploreterus
    });
    
    infowindow.open(map);
}

