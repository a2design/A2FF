<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Fale Conosco</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />		
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Fale Conosco RSS" href="#" />	
	<link rel="stylesheet" href="../snippets/fale-conosco.css" type="text/css" media="all"  charset="utf-8" />
</head>
<body id="">

<div id="fale_conosco">
	<div class="ui-widget">
			<div class="ui-state-highlight ui-corner-all"> 
				<p><span class="ui-icon ui-icon-info"></span>
				<strong>Aviso</strong> Lorem ipsum dolor si amet.</p>
			</div>
	</div>
	<div class="ui-widget">
		<div class="ui-state-error ui-corner-all"> 
			<p><span class="ui-icon ui-icon-alert"></span> 
			<strong>Alerta</strong> Lorem ipsum dolor si amet.</p>
		</div>
	</div>
	<div class="ui-widget">
		<div class="ui-state-error ui-corner-all ui-green"> 
			<p><span class="ui-icon ui-icon-check"></span> 
			<strong>Sucesso</strong> Lorem ipsum dolor si amet.</p>
		</div>
	</div>			
	<form action="/sis/fale.php" method="post">
		<label for="fl1" id="fl1">
			<span>Nome</span>
			<input type="text" class="input_text" name="formContatoNome" />
		</label>
		<label for="fl2" id="fl2" >
			<span>E-mail</span>
			<input type="text" class="input_text" name="formContatoEmail"/>
		</label>
		<label for="fl3" id="fl3">
			<span>Mensagem</span>
			<textarea name="formContatoMensagem" ></textarea>
		</label>
		<div class="block">
			<input type="submit" class="input_submit" value="Enviar" />
		</div>				
	</form>
</div>
	
</body>
</html>

