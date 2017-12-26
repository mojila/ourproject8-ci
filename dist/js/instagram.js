$(function() {
    $.ajax({
        url: 'https://api.instagram.com/v1/users/self/media/recent/?access_token=1319429349.4ebdf23.e561731c97b9451bb6a93d83fc382b1e',
        method: 'get',
        crossDomain: true,
        success: function(res) {
            $('#list_instagram').html('');
            
            // console.log(res.data[0].images);
            for(var i = 0; i < res.data.length; i++) {
                $('#list_instagram').append('<div class="col col-md-4 col-xs-6 pt-50">'+
                '<center><a href="#"><img src="'+res.data[i].images.low_resolution.url+'" alt="" height="320" style="border-radius: 10px;"></a></center>' +
                '</div>');
            }
        }      
    });
});