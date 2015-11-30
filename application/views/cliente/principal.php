
<div class="container">
	<div class="row pesq">

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-push-3 search">

			<?php echo form_open('Home/pesquisa'); ?>

			<div class="input-group" id="pesquisa">
				<input type="text" class="form-control" name="filtro" placeholder="Procure pelo nome do hotel ou pousada...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</span>
			</div>
			<div class="input-daterange input-group" id="datepicker">
				<input type="text" class="input-sm form-control" name="start" placeholder="Data de Entrada" disabled />
				<span class="input-group-addon">até</span>
				<input type="text" class="input-sm form-control" name="end" placeholder="Data de Saída" disabled/>
			</div>
			<select name="quarto" id="input" class="form-control">
				<option value="">Escolha o tipo de quarto...</option>
				<option value="1">Quarto individual</option>
				<option value="2">Quarto Duplo</option>
				<option value="3">Quartos Família</option>
			</select>
		</form>
	</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	</div>

	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
	</div>
</div>
<div class="row principal" >
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 starmenu">
		<h4> Filtros avançados</h4>
		<?php echo form_open('Home/filtroAvancado'); ?>
		<fieldset id="stars">
			<span class="star-cb-group">
				<input type="radio" id="rating-5" name="rating" value="5" /><label for="rating-5">5</label>
				<input type="radio" id="rating-4" name="rating" value="4"  /><label for="rating-4">4</label>
				<input type="radio" id="rating-3" name="rating" value="3" /><label for="rating-3">3</label>
				<input type="radio" id="rating-2" name="rating" value="2" /><label for="rating-2">2</label>
				<input type="radio" id="rating-1" name="rating" value="1" /><label for="rating-1">1</label>
				<input type="radio" id="rating-0" name="rating" value="0" class="star-cb-clear" /><label for="rating-0">0</label>
			</span>
		</fieldset>
		<hr>
		<h4>Categoria</h4>
		<div class="checkbox">
			<label>
				<input type="radio" name="categoria" onclick="desabilitar()" id="cathotel" value="1">
				Hotel
			</label>
			<br>
			<label>
				<input type="radio" name="categoria" onclick="desabilitar()" id="catpousada" value="2">
				Pousada
			</label>
		</div>

		<hr>
		<h4>Preço</h4>
		<input id="ex13" name="preco" type="text" data-slider-ticks="[0, 200, 400, 600, 800]" data-slider-ticks-snap-bounds="10" data-slider-ticks-labels='["$0", "$200", "$400", "$600", "$800"]'/>
		<button class="btn btn-primary" style="float:right" type="submit">Buscar</button>
	</form>
</div>

<div class="col-xs9 col-sm-9 col-md-9 col-lg-9 corpo">
	<?php foreach ($hoteis as $hotel) {  ?>
	<div class="row">
		<div class="cupom">
			<p>Desconto!</p>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<div class="media" id="listahotel">
				<div class="media-left image">
					<a href="#">
						<img class="media-object" src="<?php echo IMG . $hotel['imgHotel'] ?>" alt="...">
					</a>
				</div>
				<div class="media-body">
					<h3 class="media-heading"><?php echo $hotel['nome']; ?></h3>
					<?php for($i = 0; $i < $hotel['classificacao']; $i++){ ?>
					<span class="glyphicon glyphicon-star estrelas" aria-hidden="true"></span>
					<?php } ?>
				</div>
			</div>

		</div>


		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 servicos">
			<h4> Serviços Oferecidos </h4>

			<?php 
			if($hotel['servicos'] != 0) {
				foreach ($hotel['servicos'] as $servico){


					?>

					<img src="<?php echo IMG . $servico['img'] ?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo $servico['nome'] ?>">
					<?php }}else{ ?>
					<p>Serviços não inseridos</p>
					<?php } ?>
					<p><?php echo $hotel['endereco_fisico'];?></p>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 preco">
					<h4><?php echo $hotel['tipoquarto']?></h4>
					<h3 style="text-decoration:line-through"> R$ <?php echo $hotel['precoFixo'] ?></h3>
					<h3>R$ <?php echo $hotel['precoPromo']?> </h3>
					<a href="<?php  echo site_url('DetalhesHotel/index/'.$hotel['idHotelPousada'])?>" class="btn btn-primary" type="button"><span class="glyphicon glyphicon-question-sign"></span> Ver detalhes</a>
				</div>

			</div>
			<hr>
			<?php } ?>

			<nav id="paginacao">
				<ul class="pagination">
					<li>
						<a href="#" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
						</a>
					</li>
					<li><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li>
						<a href="#" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>


</div>


<script type="text/javascript">
	$('.input-daterange').datepicker({
		format: "dd/mm/yyyy",
		language: "pt-BR",
		todayHighlight: true
	});
	$("#ex13").slider({
		ticks: [0, 200, 400, 600, 800],
		ticks_labels: ['$0', '$200', '$400', '$600', '$800'],
		ticks_snap_bounds: 10
	});
</script>

<script type="text/javascript">
	$(document).ready(function() {
		$('.starmenu').scrollToFixed({
			preFixed: function() { 
				$(this).css('margin-top','15');
			},
			postFixed: function() { 
				$(this).css('margin-top','15');
			}
		});
	});

	$(document).ready(function() {
		$('.pesq').scrollToFixed({
			preFixed: function() {
     //$(this).removeClass().addClass('col-xs-3 col-sm-3 col-md-3 col-lg-3 col-lg-push-3 search');

 },
 postFixed: function() { 
    //$(this).removeClass().addClass('col-xs-6 col-sm-6 col-md-6 col-lg-6 col-lg-push-3 search');   
}
});
	});
</script>

<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip()
	})
</script>

<script type="text/javascript">
	function desabilitar(){
		if(document.getElementById('catpousada').checked)
		{
			document.getElementById('stars').style.display = "none";
		}
		else
		{
			document.getElementById('stars').style.display = "block";
		}
	}
</script>