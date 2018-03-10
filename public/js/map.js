function initMap() {
    var location = {lat: 53.011920, lng: -2.215491};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}




