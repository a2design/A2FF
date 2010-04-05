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
	<script type="text/javascript" src="../js/jquery.cycle.js ></script>
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
	<div class="figure album left c">
		<div id="gallery">
			<div id="image-desc"></div>
			<div id="slideshow"></div>
			<div id="details">
				<div id="image-title"></div>			
				<a id="download-link">Download</a>
			</div>
			<div id="controls"></div>					
		</div>
		<div id="navigation">
			<ul class="thumbs noscript">
				<li><a href="../img/modelo02.jpg" title="Crédito 1"><img src="../img/modelo02.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris vel metus. Nulla ac nisi. Proin quis erat. Vestibulum adipiscing massa ut risus." longdesc="../img/modelo02.jpg" /></a></li>
				<li><a href="../img/modelo02.jpg" title="Crédito 1"><img src="../img/modelo02.jpg" alt="Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris vel metus. Nulla ac nisi. Proin quis erat. Vestibulum adipiscing massa ut risus." longdesc="../img/modelo02.jpg" /></a></li>				
			</ul>
		</div>		
	</div>
</body>
</html>

