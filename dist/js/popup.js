$(document).ready(function() {
    $.submit = function() {
        if (document.getElementById('inputLangganan').value != '') {
            $.ajax({
                url: 'http://localhost:8000/home/langganan',
                method: 'get',
                data: { 'contact': document.getElementById('inputLangganan').value },
                success: function(res) {
                    swal("Berhasil!", "Anda Berhasil Berlangganan produk Kami! terimakasih.", "success");
                    popupClose();
                }
            });          
        } else {
            swal('Form langganan masih kosong, silahkan isi terlebih dahulu.');
        }
    }
});

document.addEventListener('DOMContentLoaded', function() {
  var isMobile = {
      Android: function() {
          return navigator.userAgent.match(/Android/i);
      },
      BlackBerry: function() {
          return navigator.userAgent.match(/BlackBerry/i);
      },
      iOS: function() {
          return navigator.userAgent.match(/iPhone|iPad|iPod/i);
      },
      Opera: function() {
          return navigator.userAgent.match(/Opera Mini/i);
      },
      Windows: function() {
          return navigator.userAgent.match(/IEMobile/i);
      },
      any: function() {
          return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
      }
  }

  if (!isMobile.any()) {
    
  }
});
var popupClose = () => {
  document.getElementById('popup-subscribe').style.display = 'none';
};