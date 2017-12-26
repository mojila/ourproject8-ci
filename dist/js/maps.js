// Maps
function initMap() {
    var myLatLng = { lat: -7.4940897, lng: 112.7146102 };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 17,
        center: myLatLng
    });

    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Perum Griya Candi Asri O no. 7, kel. Gelam, kec. Candi, kab. Sidoarjo'
    });
}

$(function(){
    initMap();
});