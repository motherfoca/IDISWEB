<!DOCTYPE html>

<!--[if IE 7]>                  <html class="ie7 no-js" lang="en">     <![endif]-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="not-ie no-js" lang="en">  <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
<title>S.C.Braga - Voleibol</title>
	
	
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!--[if !lte IE 6]><!-->
		<link rel="stylesheet" href="css/style.css" media="screen" />

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800,700,400italic|PT+Serif:400,400italic" />
		
		<link rel="stylesheet" href="css/fancybox.min.css" media="screen" />

		<link rel="stylesheet" href="css/video-js.min.css" media="screen" />

		<link rel="stylesheet" href="css/audioplayerv1.min.css" media="screen" />
	<!--<![endif]-->

	<!--[if lte IE 6]>
		<link rel="stylesheet" href="//universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen, projection">
	<![endif]-->

	<!-- HTML5 Shiv + detect touch events -->
	<script src="js/modernizr.custom.js"></script>

	<!-- HTML5 video player -->
	<script src="js/video.min.js"></script>
	<script>_V_.options.flash.swf = 'js/video-js.swf';</script>
</head>
<body>

<header id="header" class="container clearfix">

	<a href="principal.php" id="logo">
		<img src="img/logo4.png" alt="SmartStart">
	</a>

	<nav id="main-nav">
		
		<ul>
			<li class="current">
				<a href="principal.php" data-description="Página Inicial">Home</a>
				<ul>
					<li><a href="noticiasfeed.php">Noticias</a></li>
					<li><a href="proxjogos.php">Próximos Jogos</a></li>
				</ul>
			</li>
			<li>
				<a href="#" data-description="escalões e calendário">Equipa</a>
				<ul>

					<li><a href="#">Cadetes</a>
						<ul>
							<li><a href="adminjogadorascadetes.php">Plantel</a></li>
							<li><a href="ResultCadetes.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juvenis</a>
						<ul>
							<li><a href="adminjogadorasjuvenis.php">Plantel</a></li>
							<li><a href="ResultJuvenis.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Juniores</a>
						<ul>
							<li><a href="adminjogadorasjuniores.php">Plantel</a></li>
						    <li><a href="ResultJuniores.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Séniores</a>
						<ul>
							<li><a href="adminjogadorasseniores.php">Plantel</a></li>
							<li><a href="ResultSeniores.php">Resultados</a></li>
						</ul>
					</li>
					<li><a href="#">Calendário</a>
						<ul>
							<li><a href="calendariojogos.php">Jogos</a></li>
							<li><a href="calendariotreinos.php">Treinos</a></li>
						</ul>
					</li>

				</ul>
			</li>
			
			<li>
				<a href="#" data-description="Painel Instruções">Painel</a>
				<ul>

					<li><a href="estatisticasgerais.php">Estisticas</a></li>
					<li><a href="listarjogadores.php">Gestão de Atletas</a></li>
					<li><a href="gradesjogadoraslista.php">Gestão Académica</a></li>
					<li><a href="noticias.php">Gestão de Noticias</a></li>
					<li><a href="pagamentos.php">Pagamentos</a></li>
					
				</ul>
			</li>
			<li>
				<a href="contactos.php" data-description="Fale Conosco">Contactos</a>
			</li>
			<li>
				<a href="#" data-description="area pessoal">Área Pessoal</a>

				<ul>
					  <li><a href="altpassword.php">Alterar Password</a></li>
					<li><a href="../sair.php">Sair</a></li>
				</ul>
			</li>
		</ul>

	</nav><!-- end #main-nav -->
	
</header><!-- end #header -->

<section id="content" class="container clearfix">

	<header class="page-header">
	
		<h1 class="page-title">Registo de novos Atletas</h1>
			<p>Insira os dados do atleta no formulário abaixo: <p>
	</header><!-- end .page-header -->
	
	<section id="main" >
	
	
		<form action="validaInserirAtleta.php" method="post">
          <div class="form_settings">
			<br><span>Nome:<input type="text" name="nome3" required>
			<br><span>Username:<input type="text" name="user3" required>
			<br><span>Password:<input type="text" name="pass3" required>
			<br><span>Data de Nascimento:<input type="Date" name="data3" required>
			<br><span>Morada:<input type="text" name="morada3" required>
			<br><span>Altura:<input type="float" name="altura3" required>
			<br><span>Peso:<input type="float" name="peso3" required>
			<br><span>Email:<input type="text" name="email3" required>
			<br><span>Fotografia:<input type="text" name="foto3" required>
			<br><span>Telefone:<input type="integer" name="telefone3" required>
			<br><span>Genero: <select name="genero3" required>
									<option value=1>Feminino</option>
									<option value=0>Masculino</option>
							</select>
			<br><span>Estado:<select name="ative3" required>
									<option value=1>Ativo</option>
									<option value=0>Bloqueado</option>
							</select>
			<br><span>Descricao:<input type="textarea" name="descricao3" required>
			<br><span>Numero Segurança Social:<input type="integer" name="niss3" required>
			<br><span>Numero Cartao Cidadao:<input type="integer" name="cc3" required>
			<br><span>Numero Saude:<input type="integer" name="health3" required>
			<br><span>Tamanho Camisola:<input type="text" name="jersey3" required>
			<br><span>Numero Bancario:<input type="integer" name="nib3" required>
			<br><span>Equipa:<select name="team3" required>
						<option value="0" selected="selected">Seleccione uma Equipa</option>
							<?php
							include ("mysql.connect.php");
							//Selecciona as opiniões  
							$q_op = "SELECT * FROM team ORDER BY id_team";
							$op = mysql_query($q_op);
							while($equipa = mysql_fetch_array($op)){
							 ?>
							 <!-- O value possui o id da equipa a guardar na BD e na option mostra as opiniões -->
							 <option value="<?php echo $equipa['id_team'];?>"><?php echo $equipa['name'];?></option><br/>
							<?php
							   }
							   ?>
					</select>
			<br><span>Grupo Sanguineo:<input type="text" name="blood3" required>
	        
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="Enviar" /></p>
          </div>
        </form>
		
		
	</section><!-- end #main -->


</section><!-- end #content -->

<footer id="footer" class="clearfix">

	<div class="container">

		<div class="three-fourth">

			<nav id="footer-nav" class="clearfix">

				<ul>
					
				</ul>
				
			</nav><!-- end #footer-nav -->

			<ul class="contact-info">
				<li class="address">Largo do Paço, 4704-553 Braga</li>
				<li class="phone">(253) 254-711</li>
				<li class="email"><a href="mailto:idismiegsi@gmail.com">Contactar SC Braga</a></li>
			</ul><!-- end .contact-info -->
			
		</div><!-- end .three-fourth -->

		<div class="one-fourth last">

			<span class="title">Siga-nos no:</span>

			<ul class="social-links">
				<li class="facebook"><a href="https://www.facebook.com/scbragavoleibol?fref=ts">Facebook</a></li>
				<li class="youtube"><a href="https://www.youtube.com/channel/UCP1s6J48CgQaPxU6bKc3d4A">YouTube</a></li>
			</ul><!-- end .social-links -->

		</div><!-- end .one-fourth.last -->
		
	</div><!-- end .container -->

</footer><!-- end #footer -->

<footer id="footer-bottom" class="clearfix">

	<div class="container">

		<ul>
			<li>IDIS &copy; 2014</li>
			<li><a href="portfolio.php">A equipa IDIS</a></li>
				<li><a href="noticiascfeed.php">Feed Noticias</a></li>
		</ul>

	</div><!-- end .container -->

</footer><!-- end #footer-bottom -->

<!--[if !lte IE 6]><!-->
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
	<!--[if lt IE 9]> <script src="js/selectivizr-and-extra-selectors.min.js"></script> <![endif]-->
	<script src="js/jquery.ui.widget.min.js"></script>
	<script src="js/respond.min.js"></script>
	<script src="js/jquery.easing-1.3.min.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.smartStartSlider.min.js"></script>
	<script src="js/jquery.jcarousel.min.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/audioplayerv1.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/jquery.gmap.min.js"></script>
	<script src="js/jquery.touchSwipe.min.js"></script>
	<script src="js/custom.js"></script>

<!--<![endif]-->
</body>

</html>