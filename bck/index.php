<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>A2 Framework</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/qtip.js"></script>
	<script type="text/javascript" src="js/index.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
</head>
<body>
<div id="global">
<div id="logo">
	<h1><a href="/" title="A2 Framework" accesskey="1">Framework</a></h1>
</div>
<div id="page">
<!--p class="date">
<?
	$file = $_SERVER["SCRIPT_NAME"];
	$break = Explode('/', $file);
	$pfile = $break[count($break) - 1];
	echo "Atualizado em " .date("d/m/y",filemtime($pfile));
?>
</p-->

<h2>Configurando o Aptana</h2>
<p class="description">Estes arquivos estão formatados para serem usados com o <strong>Aptana</strong>. Para ativação, <a href="http://wiki.a2/index.php?title=Snippets" target="_blank">clique aqui</a>.</p>
<h2>Módulos estruturais</h2>
<p class="description">Módulos que organizam a estrutura geral da página.</p>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong title="Estrutura básica de layout com #header, #extra, #content, #sidebar e #footer.">Template</strong></th>
			<td><a class="enable" 	href="demo/template.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="demo/template.html">PHP</a></td>			
		</tr>
		<tr>
			<th scope="row"><strong title="Amostras é um arquivo HTML com tags utilizadas regularmente. Reset é um arquivo CSS para resetar e unificar estilos entre navegadores.">Amostras e Reset</strong></th>
			<td><a class="enable" 	href="demo/amostras-reset.php">Demo</a></td>						
			<td><a class="enable" 	href="snippets/amostras.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/reset.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/base.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Nome do site com logotipo.">Logo</strong></th>
			<td><a class="enable" 	href="demo/logo.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/logo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/logo.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Template (mobile)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template_mobile.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Página 404</strong></th>
			<td><a class="enable" 	href="demo/erro404.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/erro404.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/erro404.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Formatação do endereço em microformatos.">Endereço (Microformatos)</strong></th>
			<td><a class="enable" 	href="snippets/endereco.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/endereco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>CSS de impressão</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="disable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/print.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
<h2>Módulos multimídia (áudio, vídeo, texto, arquivo e imagem)</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong title="Download de arquivo.">Arquivo</strong></th>
			<td><a class="enable" 	href="demo/arquivo.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/arquivo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/arquivo.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Chamada com antetítulo, título e subtítulo.">Chamada</strong></th>
			<td><a class="enable" 	href="demo/chamada.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Chamada com antetítulo, título e subtítulo.">Chamada com imagem</strong></th>
			<td><a class="enable" 	href="demo/chamada_imagem.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Imagem simples com descrição.">Imagem</strong></th>
			<td><a class="enable" 	href="demo/imagem.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Imagem com lightbox (zoom) e descrição.">Imagem (Lightbox)</strong></th>
			<td><a class="enable" 	href="demo/imagem_lightbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem_lightbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Lista de notícias baseada no Governo do Estado de São Paulo.">Lista de notícias</strong></th>
			<td><a class="enable" 	href="demo/lista_noticias.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de notícias em tabela.">Lista de notícias (tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-noticias_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Player de áudio.">Áudio</strong></th>
			<td><a class="enable" 	href="demo/audio.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/audio.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/audio.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Player de vídeo.">Vídeo</strong></th>
			<td><a class="enable" 	href="demo/video.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/video.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/video.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Aplicativo para transição de imagens com legenda.">Slideshow</strong></th>
			<td><a class="enable" 	href="demo/slideshow.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/slideshow.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slideshow.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Aplicativo para transição de imagens com legenda e thumbnails.">Álbum de fotos (Gallery View)</strong></th>
			<td><a class="enable" 	href="demo/album-de-fotos_galleryview.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Display de tweets.">Twitter</strong></th>
			<td><a class="enable" 	href="demo/twitter.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/twitter.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/twitter.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Tamanho do texto</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>
			<td><a class="enable" 	href="snippets/texto.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Toolbox geralmente aplicado em notícias">Toolbox</strong></th>
			<td><a class="enable" 	href="demo/toolbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/toolbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/toolbox.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de Álbuns em Tabela, baseado no site Arnaldo Madeira.">Lista de álbuns (Tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de álbuns com títulos, descrição e imagem">Lista de álbuns</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Lista de comentários</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de Comentários, baseada no site CidadãoSP">Lista de comentários II</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios_v2.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>

		<tr>
			<th scope="row"><strong title"">Modal</strong></th>
			<td><a class="disable" 	href="demo/modal.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/modal.html">HTML</a></td>
			<td><a class="disable" 	href=".css">CSS</a></td>
			<td><a class="disable" 	href=".js">JS</td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Dropdown</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/dropdown.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Formatação do endereço em microformatos.">Endereço (Microformatos)</strong></th>
			<td><a class="enable" 	href="snippets/endereco.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/endereco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Blog toolbox</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/blog-toolbox.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Menu em abas feito com jQuery">Abas</strong></th>
			<td><a class="enable" 	href="demo/abas.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/abas.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/abas.css">CSS</a></td>
			<td><a class="enable" 	href="js/abas.js">JS - </a><a class="enable" href="js/ui-abas.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Slide de Imagens (Efeito Carrossel)">Slide de Imagens (Efeito Carrossel)</strong></th>
			<td><a class="enable" 	href="demo/slide-de-imagens_efeito_carrossel.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.js">JS - </a><a class="enable" href="snippets/slide-de-imagens_efeito_carrossel_v2.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
<h2>Módulos para formulários</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong title="Formulário de busca.">Busca</strong></th>
			<td><a class="enable" 	href="demo/busca.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/busca.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/busca.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Formulário de login.">Login</strong></th>
			<td><a class="enable" 	href="demo/login.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/login.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/login.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Esqueceu a senha?</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/esqueceu.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Enquete</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/enquete.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Fale Conosco</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/fale-conosco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Receber Notícias</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/receber-noticias.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Formulário de Cadastro">Cadastro</strong></th>
			<td><a class="enable" 	href="demo/cadastro.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/cadastro.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/cadastro.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Lista de comentários</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de Comentários, baseada no site CidadãoSP">Lista de comentários II</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios_v2.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title"">Comentar</strong></th>
			<td><a class="enable" 	href="demo/comentar.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/comentar.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/comentar.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title"">Comentar II</strong></th>
			<td><a class="disable" 	href="demo/comentar.php">Demo</a></td>			
			<td><a class="disable" 	href="snippets/comentar.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/comentar.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
<h2>Módulos navegacional</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong title="Lista de notícias baseada no Governo do Estado de São Paulo.">Lista de notícias</strong></th>
			<td><a class="enable" 	href="demo/lista_noticias.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de notícias em tabela.">Lista de notícias (tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-noticias_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Barra de navegação principal.">Navmain</strong></th>
			<td><a class="enable" 	href="demo/navmain.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/navmain.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/navmain.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Navegação entre páginas: primeiro, anterior, próximo, último e status.">Paginação</strong></th>
			<td><a class="enable" 	href="demo/paginacao.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/paginacao.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Paginação (Vr.II)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao_v2.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Submenu</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/submenu.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Lista de Álbuns em Tabela, baseado no site Arnaldo Madeira.">Lista de álbuns (Tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de álbuns com títulos, descrição e imagem">Lista de álbuns</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
	</tbody>
</table>
<h2>Módulos gerais</h2>
<table summary="#">
    <tbody>
		<tr>
			<th scope="row"><strong title="Estrutura básica de layout com #header, #extra, #content, #sidebar e #footer.">Template</strong></th>
			<td><a class="enable" 	href="demo/template.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="demo/template.html">PHP</a></td>			
		</tr>
		<tr>
			<th scope="row"><strong title="Amostras é um arquivo HTML com tags utilizadas regularmente. Reset é um arquivo CSS para resetar e unificar estilos entre navegadores.">Amostras e Reset</strong></th>
			<td><a class="enable" 	href="demo/amostras-reset.php">Demo</a></td>						
			<td><a class="enable" 	href="snippets/amostras.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/reset.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/base.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Download de arquivo.">Arquivo</strong></th>
			<td><a class="enable" 	href="demo/arquivo.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/arquivo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/arquivo.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Template para Boletim Eletrônico. Estilos CSS declarados inline.">Boletim</strong></th>
			<td><a class="enable" 	href="snippets/boletim.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/boletim.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Formulário de busca.">Busca</strong></th>
			<td><a class="enable" 	href="demo/busca.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/busca.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/busca.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Chamada com antetítulo, título e subtítulo.">Chamada</strong></th>
			<td><a class="enable" 	href="demo/chamada.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Chamada com antetítulo, título e subtítulo.">Chamada com imagem</strong></th>
			<td><a class="enable" 	href="demo/chamada_imagem.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/chamada_imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Imagem simples com descrição.">Imagem</strong></th>
			<td><a class="enable" 	href="demo/imagem.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Imagem com lightbox (zoom) e descrição.">Imagem (Lightbox)</strong></th>
			<td><a class="enable" 	href="demo/imagem_lightbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem_lightbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/imagem_lightbox.js">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Lista de notícias baseada no Governo do Estado de São Paulo.">Lista de notícias</strong></th>
			<td><a class="enable" 	href="demo/lista_noticias.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista_noticias.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de notícias em tabela.">Lista de notícias (tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-noticias_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Formulário de login.">Login</strong></th>
			<td><a class="enable" 	href="demo/login.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/login.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/login.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Nome do site com logotipo.">Logo</strong></th>
			<td><a class="enable" 	href="demo/logo.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/logo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/logo.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Barra de navegação principal.">Navmain</strong></th>
			<td><a class="enable" 	href="demo/navmain.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/navmain.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/navmain.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Player de áudio.">Áudio</strong></th>
			<td><a class="enable" 	href="demo/audio.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/audio.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/audio.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Player de vídeo.">Vídeo</strong></th>
			<td><a class="enable" 	href="demo/video.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/video.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/video.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Aplicativo para transição de imagens com legenda.">Slideshow</strong></th>
			<td><a class="enable" 	href="demo/slideshow.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/slideshow.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slideshow.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Aplicativo para transição de imagens com legenda e thumbnails.">Álbum de fotos (Gallery View)</strong></th>
			<td><a class="enable" 	href="demo/album-de-fotos_galleryview.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Navegação entre páginas: primeiro, anterior, próximo, último e status.">Paginação</strong></th>
			<td><a class="enable" 	href="demo/paginacao.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/paginacao.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Paginação (Vr.II)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao_v2.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Display de tweets.">Twitter</strong></th>
			<td><a class="enable" 	href="demo/twitter.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/twitter.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/twitter.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Esqueceu a senha?</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/esqueceu.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Submenu</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/submenu.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Enquete</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/enquete.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Tamanho do texto</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>
			<td><a class="enable" 	href="snippets/texto.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Toolbox geralmente aplicado em notícias">Toolbox</strong></th>
			<td><a class="enable" 	href="demo/toolbox.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/toolbox.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/toolbox.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Fale Conosco</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/fale-conosco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Receber Notícias</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/receber-noticias.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Formulário de Cadastro">Cadastro</strong></th>
			<td><a class="enable" 	href="demo/cadastro.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/cadastro.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/cadastro.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Template (mobile)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/template_mobile.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de Álbuns em Tabela, baseado no site Arnaldo Madeira.">Lista de álbuns (Tabela)</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns_tabela.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns_tabela.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de álbuns com títulos, descrição e imagem">Lista de álbuns</strong></th>
			<td><a class="enable" 	href="demo/lista-albuns.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Lista de comentários</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Lista de Comentários, baseada no site CidadãoSP">Lista de comentários II</strong></th>
			<td><a class="enable" 	href="demo/lista-comentarios_v2.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/lista-comentarios_v2.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title"">Comentar</strong></th>
			<td><a class="enable" 	href="demo/comentar.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/comentar.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/comentar.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title"">Comentar II</strong></th>
			<td><a class="disable" 	href="demo/comentar.php">Demo</a></td>			
			<td><a class="disable" 	href="snippets/comentar.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/comentar.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Página 404</strong></th>
			<td><a class="enable" 	href="demo/erro404.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/erro404.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/erro404.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title"">Modal</strong></th>
			<td><a class="disable" 	href="demo/modal.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/modal.html">HTML</a></td>
			<td><a class="disable" 	href=".css">CSS</a></td>
			<td><a class="disable" 	href=".js">JS</td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Dropdown</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/dropdown.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong title="Formatação do endereço em microformatos.">Endereço (Microformatos)</strong></th>
			<td><a class="enable" 	href="snippets/endereco.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/endereco.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Blog toolbox</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/blog-toolbox.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>CSS de impressão</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="disable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/print.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Menu em abas feito com jQuery">Abas</strong></th>
			<td><a class="enable" 	href="demo/abas.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/abas.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/abas.css">CSS</a></td>
			<td><a class="enable" 	href="js/abas.js">JS - </a><a class="enable" href="js/ui-abas.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong title="Slide de Imagens (Efeito Carrossel)">Slide de Imagens (Efeito Carrossel)</strong></th>
			<td><a class="enable" 	href="demo/slide-de-imagens_efeito_carrossel.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.js">JS - </a><a class="enable" href="snippets/slide-de-imagens_efeito_carrossel_v2.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
</div>
</div>
</body>
</html>
