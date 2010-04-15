<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Album de fotos (Galeria)</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/album-de-fotos_galleria.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Album de fotos (Galeria) RSS" href="#" />

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.cycle.js" ></script>
	<script type="text/javascript">
		 $(document).ready(function() {
			$.fn.cycle.defaults.timeout = 7000;
				$(function() {
					$('#slideshow').cycle({ 
				    fx:     'fade', 
				    delay: -1000,
				    next:   '#next2',
				    prev:   '#prev2'	
				}); 
			});
		});	
	</script>

</head>
<body id="">
<div id="slide" class="figure image left c">
	<div id="slideshow">
		<div class="figure">
			<span class="credit">Milton Michida</span> 
			<a href=""><img src="../img/modelo02.jpg" alt="Discurso" /></a>

			<div class="legend">
				<p><a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec auctor felis.</a></p>
			</div>
		</div>
		<div class="figure">
			<span class="credit">Milton Michida</span> 
			<a href=""><img src="../img/modelo02.jpg" alt="#" /></a>
			<div class="legend">

				<p><a href="">Curabitur tincidunt vestibulum quam, eu mattis ante bibendum id. Donec tempor vestibulum venenatis.</a></p>
			</div>
		</div>
		<div class="figure">
			<span class="credit">Ciete Silvério</span> 
			<a href=""><img src="../img/modelo02.jpg" alt="Futebol Feminino" /></a>
			<div class="legend">
				<p><a href="">Consectetur adipiscing elit. Aenean nec auctor felis, eu mattis ante bibendum id. Donec tempor vestibulum venenatis.</a></p>

			</div>
		</div>
	</div>	
	<div id="slideNav" class="nav">
		<span><a id="prev2" href="#">Anterior</a></span>
		<span><a id="next2" href="#">Posterior</a></span>
	</div>
</div>
</body>
</html>

