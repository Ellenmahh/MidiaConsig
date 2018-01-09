<!DOCTYPE html>
<html lang="en">

<?php require_once('head.html');?>

<body>
  <header id="header">
    <nav class="navbar navbar-default navbar-static-top" role="banner">
      <?php require_once('cabecalho.html'); ?>
      <!--/.container-->
    </nav>
    <!--/nav-->
  </header>
  <!--/header-->

  <div  class="map">
    <div style="display:none" id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
      
       
  </div>

   
  <section  class="contact-page">
    <div class="container">
      <div class="text-center">
        <h2>Envie sua mensagem</h2>
        <p>Não fique com dúvidas!</p>
          <p>Midiaconsig@midiaconsig.com.br </p>
      </div>
      <div style="display:none" class="row contact-wrap">
        <div class="col-md-6 col-md-offset-3">
          <div id="sendmessage">Enviado com sucesso!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" data-rule="minlen:4" data-msg="seu nome precisa ter no mínimo 4 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Seu email" data-rule="email" data-msg="Por favor, digite um emaill válido" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Por favor, coloque um assunto com mais de 8 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Escreva algo para nós" placeholder="Mensagem"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Mensagem</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

    <?php require_once('footer.html');?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/wow.min.js"></script>
  <script>
    wow = new WOW({}).init();
  </script>
  <script>
    (function($) {
      //Google Map
      var get_latitude = $('#google-map').data('latitude');
      var get_longitude = $('#google-map').data('longitude');

      function initialize_google_map() {
        var myLatlng = new google.maps.LatLng(get_latitude, get_longitude);
        var mapOptions = {
          zoom: 14,
          scrollwheel: false,
          center: myLatlng
        };
        var map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
        });
      }
      google.maps.event.addDomListener(window, 'load', initialize_google_map);
    })(jQuery);
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
