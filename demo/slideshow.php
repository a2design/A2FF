<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Slideshow</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/slideshow.css" media="all" />
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
<?php include("../snippets/slideshow.html");?>
</body>
</html>

