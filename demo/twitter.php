<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Twitter</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/twitter.css" media="all" />
	<!--Twitter <head>-->    
	<script type="text/javascript" src="../js/jquery.js"></script>	
	<script type="text/javascript" src="../js/twitter.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('#timeline').tweets({
			tweets:4,
			username: "smashingmag"
		});
	});
	</script>
</head>
<body id="teste">
<div id="twitter" class="section">
	<h3><a href="javascript:void(0);">Twitter</a></h3>
	<div id="timeline">

	</div>
	<p class="more"><a href="javascript:void(0);">Siga-me no Twitter »</a></p>
</div>
</body>
</html>

