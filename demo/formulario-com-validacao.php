<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Formul�rio com valida��o</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunica��o" />
	<link rel="stylesheet" type="text/css" href="snippets/reset.css" media="all" />	
	<link rel="stylesheet" type="text/css" href="../snippets/formulario-com-validacao.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Formul�rio com valida��o RSS" href="#" />	
	
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="../js/jquery.tooltip.min.js"></script>	
	<script type="text/javascript">
	$(document).ready(function(){
		$('.tooltip').tooltip({posicao : 'top2'});
		$('input').tooltip({
			posicao : 'top�',
			evento: 'focus',
			eventoFim: 'blur',
			atributo:'title'
		});
	});
</script>    
            
</head>
<body id="teste">
<div id="page">

<p>
Este � um <a href="#" class="tooltip" rel="tooltip <b>normal</b> com um texto maior" title="Tooltip">tooltip normal</a>.<br />
Este � uma <a href="#" class="tooltip imagem" rel="http://common-sense.no-ip.org/images/sigs/osx/snow_leopard.png">imagem</a>.<br />
Este � um <a href="#" class="tooltip ajax" rel="../ajax.php">tooltip em ajax</a>.<br />
</p>	
<p>
<form action="#">
	<input type="text" value="Tente digitar algo..." title="mais um tooltip...� so ter criatividade, n�o tem limites :)"/>
</form>
</p>
<form action="#">
	<input type="text" value="Tente digitar algo..." title="mais um tooltip...� so ter criatividade, n�o tem limites :)"/>
</form>

         
</div>
</body>
</html>

