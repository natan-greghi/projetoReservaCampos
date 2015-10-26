
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS . "/estilo.css "; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo CSS . "/bootstrap.css "; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo DATE . "/css/bootstrap-datepicker.min.css" ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo STAR . "/css/stars.css" ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo SLIDER . "/css/bootstrap-slider.css" ?>">

	<script src="<?php echo JS . "/jquery-2.1.4.min.js"?>"></script>
	<script src="<?php echo JS . "/bootstrap.js" ?>"></script>
	<script src="<?php echo DATE . "/js/bootstrap-datepicker.min.js" ?>"></script>
	<script src="<?php echo SLIDER . "/js/bootstrap-slider.js" ?>"></script>
	<script src="<?php echo SLIDER . "/dependencies/js/modernizr.js" ?>"></script>
	<script src="<?php echo JS . "/jquery-scrolltofixed.js" ?>"></script>
	<!--<script src="http://maps.googleapis.com/maps/api/js"></script>-->
</head>

<body>

<div class="container-fluid">
	<div class="row topo">
	<div class="fundo"></div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3" >
			<a href="<?php echo site_url('Home/principal'); ?>"><img src="<?php echo IMG . "/logo.png"?>" id="logo"></a>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
			<h1>Reserva Campos!</h1>
			<a id="btnanuncio" class="btn btn-default btn-block btn-lg">Anuncie Aqui!</a>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<button type="button" data-placement="bottom" data-toggle="popover" data-html="true" id="btnlogin" class="btn btn-default">Login</button>
		</div>
	</div>
	<div id="popover-content" class="hide">
      <form class="form-inline" role="form">
        <div class="form-group">
          <input placeholder="Email" class="form-control" maxlength="40" type="text">	
          <input placeholder="Senha" class="form-control" maxlength="10" type="password">
          <button type="submit" class="btn btn-primary">Logar-se »</button>
          <br>
          <a href="cadastro_usuario.php"> Ainda não cadastrado? Clique aqui</a>                                  
        </div>
      </form>
    </div>
    <script type="text/javascript">
     $("[data-toggle=popover]").popover({
    html: true, 
	content: function() {
          return $('#popover-content').html();
        }
});
     </script>
</div>
