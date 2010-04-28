<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>A2 Front-end Framework</title>
	<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
	<script type="text/javascript" src="js/qtip.js"></script>
	<script type="text/javascript" src="js/index.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
</head>
<body>
<div id="global">
<div id="logo">
	<h1>Front-end Framework</h1>
</div>
<div id="nav_main">
	<ul>
		<li class="item01"><a href="#mod_estr">Estruturais</a></li>
		<li class="item04"><a href="#mod_nav">Navegacionais</a></li>
		<li class="item02"><a href="#mod_multi">Multim�dia</a></li>
		<li class="item03"><a href="#mod_form">Formul�rios</a></li>

	</ul>
</div>
<div id="page">
<p class="version">Vers�o pre-Alpha / Revis�o 01 / jQuery 1.4.2 / jQuery UI 1.8</p>
<!--p class="date">
<?
	$file = $_SERVER["SCRIPT_NAME"];
	$break = Explode('/', $file);
	$pfile = $break[count($break) - 1];
	echo "Atualizado em " .date("d/m/y",filemtime($pfile));
?>
</p-->

<h2 id="trac"><a target="_blank" href="http://trac.framework-design.a2">Trac �</a></h2>
<p style="color:#666;font-weight:bold;">Passe o mouse sobre o nome para ver a descri��o do m�dulo .</p>
<h2 id="mod_estr"><a title="#">M�dulos estruturais</a></h2>
<p class="description">M�dulos que organizam a estrutura geral da p�gina.</p>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong class="complete" title="Estrutura b�sica de layout com #header, #extra, #content, #sidebar e #footer.">Template</strong></th>
			<td><a class="enable" 	href="demo/template.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="demo/template.html">PHP</a></td>			
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Amostras � um arquivo HTML com tags utilizadas regularmente. Reset � um arquivo CSS para resetar e unificar estilos entre navegadores.">Amostras e Reset</strong></th>
			<td><a class="enable" 	href="demo/amostras-reset.php">Demo</a></td>						
			<td><a class="enable" 	href="snippets/amostras.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/reset.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/base.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="partial" title="Nome do site com logotipo. Falta inserir prompt com nome do t�tulo.">Logo</strong></th>
			<td><a class="enable" 	href="demo/logo.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/logo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/logo.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Estrutura b�sica para p�gina vers�o mobile com reset.">Template (mobile)</strong></th>
			<td><a class="enable" 	href="demo/template_mobile.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template_mobile.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template_mobile.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Estrutura b�sica para p�gina n�o encontrada.">P�gina 404</strong></th>
			<td><a class="enable" 	href="demo/erro404.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/erro404.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/erro404.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formata��o do endere�o em microformatos.">Endere�o (Microformatos)</strong></th>
			<td><a class="enable" 	href="snippets/endereco.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/endereco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Estrutura b�sica para p�gina de impress�o baseado nos m�dulos Template e Amostras.">CSS de impress�o</strong></th>
			<td><a class="enable" 	href="demo/print.php">Demo</a></td>			
			<td><a class="disable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/print.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Template para Boletim Eletr�nico. Estilos CSS declarados inline.">Boletim</strong></th>
			<td><a class="enable" 	href="snippets/boletim.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/boletim.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>		
	</tbody>
</table>
<a class="back" href="#logo">Voltar ao topo</a>
<h2 id="mod_nav">M�dulos navegacionais</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong class="complete" title="Barra de navega��o principal.">Navmain</strong></th>
			<td><a class="enable" 	href="demo/navmain.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/navmain.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/navmain.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Navega��o entre p�ginas: primeiro, anterior, pr�ximo, �ltimo e status.">Pagina��o</strong></th>
			<td><a class="enable" 	href="demo/paginacao.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/paginacao.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Navega��o entre p�gina com anterior, pr�ximo e status.">Pagina��o Lite</strong></th>
			<td><a class="enable" 	href="demo/paginacao_lite.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao_lite.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/paginacao_lite.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="2� n�vel de navega��o entre p�ginas.">Submenu</strong></th>
			<td><a class="enable" 	href="demo/submenu.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/submenu.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/submenu.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete "title="">Modal (jQuery UI Dialog)</strong></th>
			<td><a class="enable" 	href="demo/modal.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/modal.html">HTML</a></td>
			<td><a class="disable" 	href=".css">CSS</a></td>
			<td><a class="disable" 	href=".js">JS</td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete">Dropdown</strong></th>
			<td><a class="enable" 	href="demo/dropdown.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/dropdown.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/dropdown.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
<a class="back" href="#logo">Voltar ao topo</a>
<h2 id="mod_multi">M�dulos multim�dia (�udio, v�deo, texto, arquivo e imagem)</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong class="complete" title="Download de arquivo.">Arquivo</strong></th>
			<td><a class="enable" 	href="demo/arquivo.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/arquivo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/arquivo.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Chamada com antet�tulo, t�tulo e subt�tulo.">Chamada</strong></th>
			<td><a class="enable" 	href="demo/chamada.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Chamada com antet�tulo, t�tulo e subt�tulo.">Chamada com imagem</strong></th>
			<td><a class="enable" 	href="demo/chamada_imagem.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="Imagem simples com descri��o.">Imagem</strong></th>
			<td><a class="enable" 	href="demo/imagem.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Imagem com lightbox (zoom) e descri��o.">Imagem (Lightbox)</strong></th>
			<td><a class="enable" 	href="demo/imagem_lightbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem_lightbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="Lista de not�cias baseada no Governo do Estado de S�o Paulo.">Lista de not�cias</strong></th>
			<td><a class="enable" 	href="demo/lista_noticias.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Lista de not�cias em tabela.">Lista de not�cias (tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-noticias_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="Player de �udio.">�udio</strong></th>
			<td><a class="enable" 	href="demo/audio.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/audio.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/audio.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="partial" title="Player de v�deo. Os controles n�o est�o aparecendo.">V�deo</strong></th>
			<td><a class="enable" 	href="demo/video.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/video.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/video.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Aplicativo para transi��o de imagens com legenda.">Slideshow</strong></th>
			<td><a class="enable" 	href="demo/slideshow.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/slideshow.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slideshow.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Aplicativo para transi��o de imagens com legenda e thumbnails.">�lbum de fotos (Gallery View)</strong></th>
			<td><a class="enable" 	href="demo/album-de-fotos_galleryview.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="Display de tweets.">Twitter</strong></th>
			<td><a class="enable" 	href="demo/twitter.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/twitter.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/twitter.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete">Tamanho do texto</strong></th>
			<td><a class="enable" 	href="demo/texto.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/texto.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/texto.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/texto.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Toolbox geralmente aplicado em not�cias">Toolbox</strong></th>
			<td><a class="enable" 	href="demo/toolbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/toolbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/toolbox.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Toolbox normalmente usado para aplicar em blog">Blog toolbox</strong></th>
			<td><a class="enable" 	href="demo/blog-toolbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/blog-toolbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/blog-toolbox.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Lista de �lbuns em Tabela, baseado no site Arnaldo Madeira.">Lista de �lbuns (Tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Lista de �lbuns com t�tulos, descri��o e imagem">Lista de �lbuns</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" >Lista de coment�rios</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Lista de Coment�rios, baseada no site Cidad�oSP">Lista de coment�rios II</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios_v2.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formata��o do endere�o em microformatos.">Endere�o (Microformatos)</strong></th>
			<td><a class="enable" 	href="snippets/endereco.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/endereco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Menu em abas feito com jQuery">Abas</strong></th>
			<td><a class="enable" 	href="demo/abas.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/abas.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/abas.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/abas.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Slide de Imagens (Efeito Carrossel)">Slide de Imagens (Efeito Carrossel)</strong></th>
			<td><a class="enable" 	href="demo/slide-de-imagens_efeito_carrossel.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.js">JS</td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Menu bubbleup com plugin jQuery">Menu BubbleUp</strong></th>
			<td><a class="enable" 	href="demo/menu_bubbleup.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/menu_bubbleup.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/menu_bubbleup.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="partial" title="Filtro de elementos sem suporte a Cross-browser.">Quicksand</strong></th>
			<td><a class="enable" 	href="demo/quicksand.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/quicksand.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/quicksand.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/quicksand.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>			
	</tbody>
</table>
<a class="back" href="#logo">Voltar ao topo</a>
<h2 id="mod_form">M�dulos para formul�rios</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong class="complete" title="Formul�rio de busca.">Busca</strong></th>
			<td><a class="enable" 	href="demo/busca.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/busca.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/busca.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formul�rio de login.">Login</strong></th>
			<td><a class="enable" 	href="demo/login.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/login.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/login.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete">Esqueceu a senha?</strong></th>
			<td><a class="enable" 	href="demo/esqueceu.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/esqueceu.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/esqueceu.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="partial" title="Formul�rio para enquetes. Falta c�digo do resultado da enquete.">Enquete</strong></th>
			<td><a class="enable" 	href="demo/enquete.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/enquete.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/enquete.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formul�rio de contato.">Fale Conosco</strong></th>
			<td><a class="enable" 	href="demo/fale-conosco.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/fale-conosco.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/fale-conosco.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formul�rio de Cadastro para receber not�cias">Receber Not�cias</strong></th>
			<td><a class="enable" 	href="demo/receber-noticias.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/receber-noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/receber-noticias.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong class="complete" title="Formul�rio de Cadastro">Cadastro</strong></th>
			<td><a class="enable" 	href="demo/cadastro.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/cadastro.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/cadastro.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong class="complete" title="#">Comentar</strong></th>
			<td><a class="enable" 	href="demo/comentar.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/comentar.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/comentar.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>

		<tr>
			<th scope="row"><strong class="partial" title="Bot�es para formul�rio no estilo do Gmail. N�o h� suporte para o IE, e pequenos defeitos no Opera. ">Bot�es (a la Google)</strong></th>
			<td><a class="enable" 	href="demo/botao_google.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/botao_google.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/botao_google.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>	
	</tbody>
</table>

<a class="back" href="#logo">Voltar ao topo</a>
</div>
</div>
</body>
</html>
