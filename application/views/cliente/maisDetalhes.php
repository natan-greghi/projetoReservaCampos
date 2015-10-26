
     <div class="container">
            <div id="imagens" class="row">
                <div class="col-md-12">  
                    <div id="slider" class="carousel slide" data-ride="carousel">

                      <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                      </ol>                     

                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="<?php echo IMG . "/grandehotel/im1.jpg"?>" alt="screen1">
                              <div class="carousel-caption">
                                  <h3>Caption Text</h3>
                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo IMG . "/grandehotel/im2.jpg"?>" alt="screen2">
                              <div class="carousel-caption">
                                  <h3>Caption Text</h3>
                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo IMG . "/grandehotel/im3.jpg"?>" alt="screen3">
                              <div class="carousel-caption">
                                  <h3>Caption Text</h3>
                              </div>
                            </div>
                        </div>

                        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
            
        <div class="container" id="corpo">
            <div class="row">
                <div class="col-md-8">
                    <h3><strong>Nome do Hotel/Pousada</strong></h3>
                    <h4>Rua margarida, nº 666, Bairro Capivari</h4>
                    <h4>Telefone: (12)3333-3333</h4>
                    <h4><u>www.linkdosite.com.br</u></h4>
                    <hr>
                    <h3>Informações sobre as comodidades oferecidas</h3>
                    <div id="informacoes">
                        <div>
                        <h4>Atividades</h4>
                        <ui>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Sauna</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Academia</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Salão de jogos</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Piscina</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Quadra de esportes</li>
                        </ui>
                        </div>
                        <div>
                        <h4>Comidas e bebidas</h4>
                        <ui>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Bar</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Restaurante</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Lanchonete</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Cafe da manhã no quarto</li>
                        </ui>
                        </div>
                        <div>
                        <h4>Serviços</h4>
                        <ui>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Serviço de quarto</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Recepção 24hrs</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Lavanderia</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Loja de Souvenirs</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Serviço de concierge</li>
                        </ui>
                        </div>
                        <div>
                        <h4>Geral</h4>
                        <ui>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Áre para fumantes</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Quartos ant-alergicos</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Estacionamento</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Elevador</li>
                            <li><spam class="glyphicon glyphicon-ok"></spam> Wi-Fi</li>
                        </ui>
                        </div>
                        <div>
                            <h4>Cartões aceitos</h4> 
                            <img src="<?php echo IMG. "/grandehotel/amex-48px.png"?>">
                            <img src="<?php echo IMG. "/grandehotel/elo-48px.png"?>">
                            <img src="<?php echo IMG. "/grandehotel/mastercard-48px.png"?>">
                            <img src="<?php echo IMG. "/grandehotel/visa-48px.png"?>">
                            <img src="<?php echo IMG. "/grandehotel/diners-48px.png"?>">
                        </div>
                    </div>

            </div>

            <div class="col-md-4" id="col">
                <div id="googleMap"></div>
            </div>

        </div>

        <div class="row">
            <div class="table-responsive"><hr>
                <table class="table table-hover" id="quarto">
                    <thead>
                        <tr>
                            <th>Quarto</th>
                            <th>Tipo de Quarto</th>
                            <th>Serviços</th>
                            <th>Max. Pessoa</th>
                            <th>Preço</th>
                            <th>Reservar Agora</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="<?php echo IMG ."/grandehotel/casa2.jpg"?>"></td>
                            <td>Suíte master</td>
                            <td><span class="fa fa-lock fa-lg" data-toggle="tooltip" data-placement="top" title="Cofre"></span>
                                <span class="fa fa-phone fa-lg" data-toggle="tooltip" data-placement="top" title="Telefone"></span>
                                <span class="fa fa fa-coffee fa-lg" data-toggle="tooltip" data-placement="top" title="Café da manhã"></span>

                            </td>
                            <td>2 adultos</td>
                            <td>R$ 850,00</td>
                            <td><a class="btn btn-warning">Reservar agora</a></td>

                        </tr>
                        <tr>
                            <td><img src="<?php echo IMG ."/grandehotel/casa2.jpg"?>"></td>
                            <td>Suite família</td>
                            <td>
                                <span class="fa fa-lock fa-lg" data-toggle="tooltip" data-placement="top" title="Cofre"></span>
                                <span class="fa fa-phone fa-lg" data-toggle="tooltip" data-placement="top" title="Telefone"></span>
                                <span class="fa fa fa-coffee fa-lg" data-toggle="tooltip" data-placement="top" title="Café da manhã"></span>
                            </td>
                            <td>2 adultos e 2 crianças</td>
                            <td>R$ 1500,00</td>
                            <td><a class="btn btn-warning">Reservar agora</a></td>
                        </tr>
                        <tr>
                            <td><img src="<?php echo IMG ."/grandehotel/casa2.jpg"?>"></td>
                            <td>Economico</td>
                            <td>
                                <span class="fa fa-lock fa-lg" data-toggle="tooltip" data-placement="top" title="Cofre"></span>
                                <span class="fa fa-phone fa-lg" data-toggle="tooltip" data-placement="top" title="Telefone"></span>
                                <span class="fa fa fa-coffee fa-lg" data-toggle="tooltip" data-placement="top" title="Café da manhã"></span>
                            </td>
                            <td>1 pessoa</td>
                            <td>R$ 300,00</td>
                            <td><a class="btn btn-warning">Reservar agora</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>
        </div>
        
      
	</body>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
        function initialize() {
            var mapProp = {
              center:new google.maps.LatLng(-22.743070, -45.591944),
              zoom:15,
              mapTypeId:google.maps.MapTypeId.ROADMAP
          };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        var endereco = 'Rua Monsenhor José Vita, 280, Campos do Jordão - SP';
        geocoder = new google.maps.Geocoder();     
        geocoder.geocode({'address':endereco}, function(results, status){
        if( status = google.maps.GeocoderStatus.OK){
            latlng = results[0].geometry.location;
            markerInicio = new google.maps.Marker({position: latlng,map: map});    
            map.setCenter(latlng);
        }
        });
     </script>