<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Modal</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<link rel="stylesheet" type="text/css" href="../snippets/reset.css" media="all" />	
	<script type='text/javascript' src='../js/jquery-1.4.2.min.js'></script>
	<!--Núcleo do jQuery UI-->
	<script type='text/javascript' src='../js/ui/jquery.ui.core.min.js'></script>
	<script type='text/javascript' src='../js/ui/jquery.ui.widget.min.js'></script>
	<script type='text/javascript' src='../js/ui/jquery.ui.mouse.min.js'></script>
	<script type='text/javascript' src='../js/ui/jquery.ui.position.min.js'></script>
	<!--UI Dialog-->
	<script type='text/javascript' src='../js/ui/jquery.ui.dialog.min.js'></script>
	<script type='text/javascript' src='../js/ui/jquery.ui.draggable.min.js'></script>
	<script type='text/javascript' src='../js/ui/jquery.ui.resizable.min.js'></script>
	<link rel="stylesheet" type="text/css" href="../css/jquery-ui-1.8.1.custom.css" media="all" />
	<script type='text/javascript'>
	$(function(){
		//Chama o elemento via clique
		$('a').click(function() {
			// Declara o elemento #dialog como modal e configs
			$('#dialog').dialog({
					autoOpen: false,
					stackfix: true,
					height: 300,
					width:300,
					modal: true,
					resizable: false,
					buttons: {
						'Ok': function() {
							$(this).dialog('close');
						}
					}
				});
			//abertura do dialog 
			$('#dialog').dialog('open');
			return false;
		});

	});
	</script>
</head>
<body id="teste" class="frame">
<a class="trigger"href="#">Abrir modal</a>
<div id="dialog" title="Basic dialog" style="display:none;">
	<p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
</div>
</body>
</html>