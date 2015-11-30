
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

<div>    
    <div class="container" id="corpo" style="margin-bottom: 15px";>
        <div class="row">
            <div class="col-md-8">
                <h3><strong><?php echo $topoDetalhes->nome; ?></strong></h3>
                <h4><?php echo $topoDetalhes->endereco_fisico; ?></h4>
                <h4>Telefone: <?php echo $topoDetalhes->telefone; ?></h4>
                <h4><a><?php echo $topoDetalhes->link_site; ?></a></h4>
                <hr>
                <h3>Informações sobre as comodidades oferecidas</h3>
                <div id="informacoes">
                    <div>
                        <h4>Atividades</h4>
                        <ui>
                            <?php foreach ($servicos as $servico) { 

                                if($servico->id_tiposervicos == 1){?>
                                
                                <li><spam class="glyphicon glyphicon-ok"></spam> <?php echo $servico->nome ?></li>
                                <?php   } }?>
                            </ui>
                        </div>
                        <div>
                            <h4>Comidas e bebidas</h4>
                            <ui>
                                <?php foreach ($servicos as $servico) { 
                                    if($servico->id_tiposervicos == 2){ ?>
                                    <li><spam class="glyphicon glyphicon-ok"></spam> <?php echo $servico->nome ?></li>

                                    <?php } } ?>
                                </ui>
                            </div>
                            <div>
                                <h4>Serviços</h4>
                                <ui>

                                    <?php foreach ($servicos as $servico) { 
                                        if($servico->id_tiposervicos == 3){ ?>
                                        <li><spam class="glyphicon glyphicon-ok"></spam> <?php echo $servico->nome ?></li>

                                        <?php } } ?>
                                    </ui>
                                </div>
                                <div>
                                    <h4>Geral</h4>
                                    <ui>
                                        <?php foreach ($servicos as $servico) { 
                                            if($servico->id_tiposervicos == 4){ ?>
                                            <li><spam class="glyphicon glyphicon-ok"></spam> <?php echo $servico->nome ?></li>

                                            <?php } } ?>
                                        </ui>
                                    </div>
                                    <div>
                                        <h4>Cartões aceitos</h4> 
                                        <?php foreach ($cartoes as $cartao) { ?>

                                        <img src="<?php echo IMG. "/cartoes/". $cartao->img; ?>">
                                        
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                                <?php ?>
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
                                        <?php $cont = 0; foreach ($tabela as $tabelaD) { ?>
                                        <tr>
                                            <td><h4><?php echo $tabelaD->nome; ?></h4><img src="<?php echo IMG ."/grandehotel/". $tabelaD->imagem ?>"></td>
                                            <td><h1><?php echo $tabelaD->nomeTipoQuarto ?></h1></td>
                                            <td>
                                                
                                                <?php echo $servicoQuarto[$cont]['servicos']; $cont++; ?>
                                                
                                            </td>
                                            <td><h1><?php echo $tabelaD->nPessoas; ?></h1></td>
                                            <td><h4 style="text-decoration:line-through"><?php echo $tabelaD->precoPromo;?></h4><h3> <?php echo $tabelaD->precoFixo; ?></h3></td>
                                            <td><a class="btn btn-warning">Reservar agora</a></td>

                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    
                    
                </body>
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVIpYkPFo4IWt67kNSzse-xOTVBj0G8Mc&callback=initMap">
            </script>
            <script>
                function initMap() {
                  var myLatLng = {lat: <?php echo $topoDetalhes->latitude; ?>, lng: <?php echo $topoDetalhes->longitude; ?>};

      // Create a map object and specify the DOM element for display.
      var map = new google.maps.Map(document.getElementById('googleMap'), {
        center: myLatLng,
        scrollwheel: false,
        zoom: 16
    });

      // Create a marker and set its position.
      var marker = new google.maps.Marker({
        map: map,
        position: myLatLng,
        title: '<?php echo $topoDetalhes->nome; ?>'
    });
  }


</script>