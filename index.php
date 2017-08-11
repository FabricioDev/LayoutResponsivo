<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Novo Template Simflex</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Início do Cabeçalho -->
	<header>
		<!-- Início MenuPontas -->
		<nav class="MenuPontas">
			<!-- Início MenuCentro -->
			<nav class="MenuCentro">
				<div class="logo pull-left">
<!--
				<a href="#"><img src="img/icones/SIMFLEX_mono.png" alt="Simflex"></a>
-->
				</div>
				<div class="Entrar pull-right"><a href="#"><img src="img/entrar.png" style="width: 50%;" alt="Entrar"></a></div>
			</nav>
			<!-- Fim MenuCentro -->
			<!-- Início ContDinamico -->
			<nav class="ContDinamico">
				<div class="row">
					<div class="col-md-6">
						<div class="logoIES">
							<a href="#"><img src="img/logo_inst_1.png" alt=""></a>
						</div>
					</div>
					<div class="col-md-1 MenuFav">
						<a href="#" class="LinkFav">
							<img src="img/icones/planos_out.png" class="BotoesFav" alt="Mensalidade" title="Mensalidade"><p>Mensalidade</p></a>
					</div>
					<div class="col-md-1 MenuFav" >
						<a href="#" class="LinkFav">
							<img src="img/icones_svg/beneficos_out.svg" class="BotoesFav" alt="Benefícios" title="Benefícios"><p>Benefícios</p></a>
					</div>
					<div class="col-md-1 MenuFav">
						<a href="#" class="LinkFav">
							<img src="img/icones_svg/decontos_out.svg" class="BotoesFav" alt="Deduções" title="Deduções"><p>Deduções</p></a>
					</div>
					<div class="col-md-1 MenuFav">
						<a href="#" class="LinkFav">
							<img src="img/icones_svg/simula_out.svg" class="BotoesFav" title="Matrícula" alt="Matrícula"><p>Matrícula</p></a>
					</div>
				</div>
			</nav>
			<!-- Fim ContDinamico -->
			<!-- Início MenuInfFav -->
			<nav class="MenuInfFav">
				<div class="col-md-3">
					<div class="topo">
						<a href="#" class="icone_menu"  class="material-icons">Menu</i></a>
					</div>
					<ul >
						<li><a href="#">Menu</a></li>

						<li><a href="#" class="item_menu">Grupo Educacional</a></li>
						<li><a href="#" class="item_menu">Mantenedora</a></li>
						<li><a href="#" class="item_menu">IES</a></li>
						<li><a href="#" class="item_menu">Parâmetros</a></li>
						<li><a href="#" class="item_menu">Aluno</a></li>
						<li><a href="#" class="item_menu">Relatório</a></li>
					</ul>
					<!--
					<a href="#" class="Menuinf">
					Menu</a>
					-->
				</div>
				<div class="col-md-9">&nbsp;</div>
			</nav>
			<!-- Fim MenuInfFav -->
		</nav>
		<!-- Fim MenuPontas -->
	</header>
	<!-- Fim do Cabeçalho -->
	<!-- Início do Conteúdo -->
	<main>
		<!-- Início Carousel -->

		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/slider/PlanoPagamento.png" class="imgCarousel" alt="Planos de Pagamento">
		      <div class="carousel-caption">
		      <h3 class="CabecalhoSlider">Planos de Pagamento</h3>
		        <!-- Posso colocar um texto aqui, P ou H3 -->
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/slider/Beneficios.jpg" class="imgCarousel" alt="Benefícios">
		      <div class="carousel-caption">
		      	<h3 class="CabecalhoSlider">Benefícios</h3>
		        <!-- Posso colocar um texto aqui, P ou H3 -->
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/slider/Deducoes.jpg" class=" imgCarousel" alt="Deduções">
		      <div class="carousel-caption">
		      	<h3 class="CabecalhoSlider">Deduções</h3>
		        <!-- Posso colocar um texto aqui, P ou H3 -->
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/slider/Simulador.jpg" class="imgCarousel" alt="Simulador">
		      <div class="carousel-caption">
		      <h3 class="CabecalhoSlider">Simulador</h3>
		        <!-- Posso colocar um texto aqui, P ou H3 -->
		      </div>
		    </div>
		    <!-- Posso colocar um texto aqui, P ou H3 -->
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<!-- Fim Carousel -->
	</main>
	<!-- Fim do Conteúdo -->
	<!-- Início do Rodapé -->
	<footer class="navbar navbar-fixed-bottom">
		<nav class="RodapePontas">
			<nav class="RodapeCentro">
				<a href="#"><img src="img/icones/SIMFLEX_mono.png" alt="Simflex"></a>
			</nav>
		</nav>
	</footer>
	<!-- Fim do Rodapé -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>