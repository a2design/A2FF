<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Slide de Imagens - Efeito Cycle</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/reset.css" media="all" />
	<link rel="stylesheet" type="text/css" href="__index.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Slide de Imagens - Efeito Cycle RSS" href="#" />	
	
	<?php //include("../snippets/slide-de-imagens_efeito_cycle_head.html");?>
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery.linha.framework.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#slide').slideTabs({
				seletor_painel: '.painel',
				seletor_miniatura: '.miniatura',
				inicial: 1,
				auto: true,
				tempo: 400
			});
		});
	</script>
         
   
</head>
<body id="teste">
	<div class="slide" id="slide">	
		<div class="slide-conteudo"><!--paineis-->
			<div class="painel">
				<p><img src="../img/img-slide01.jpg" alt=""</p>
			</div>
			<div class="painel">
				<p><img src="../img/img-slide02.jpg" alt=""</p>
			</div>
			<div class="painel">
				<p><img src="../img/img-slide03.jpg" alt=""</p>
			</div>
			<div class="painel">
				<p><img src="../img/img-slide04.jpg" alt=""</p>
			</div>
			<div class="painel">
				<p><img src="../img/img-slide05.jpg" alt=""</p>
			</div>
		</div>	
		<div class="slide-miniaturas">
			<div class="miniatura">1</div>
			<div class="miniatura">2</div>
			<div class="miniatura">3</div>
			<div class="miniatura">4</div>
			<div class="miniatura">5</div>
		</div>
	</div>         
</body>
</html>

