<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>A2 Framework</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/qtip.js"></script>
	<script type="text/javascript" src="js/index.js"></script>	
	<link rel="stylesheet" type="text/css" href="css/index.css" media="all"/>
</head>

<body>
<div id="global">
<p class="date">
<?
	$file = $_SERVER["SCRIPT_NAME"];
	$break = Explode('/', $file);
	$pfile = $break[count($break) - 1];
	echo "Atualizado em " .date("d/m/y",filemtime($pfile));
?>
</p>
<h1>Framework</h1>
<h2>Snippets para o Aptana</h2>
<p class="description">Estes arquivos estão formatados para serem usados com o <strong>Aptana</strong>. Para ativação, <a href="http://wiki.a2/index.php?title=Snippets" target="_blank">clique aqui</a>.</p>
<h2>Índice de códigos</h2>
<p class="description">Aponte o mouse no nome para ler a descrição do código.</p>
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
			<th scope="row"><strong>Arquivo</strong></th>
			<td><a class="enable" 	href="demo/arquivo.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/arquivo.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/arquivo.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Boletim</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/boletim.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Busca</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/busca.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Chamada</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/chamada.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Imagem</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/imagem.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Lista de notícias</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Lista de notícias</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-noticias_tabela.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Login</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/login.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Logo</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/logo.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Navmain</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/navmain.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Reset</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="disable" 	href="snippets/navmain.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/reset.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Áudio</strong></th>
			<td><a class="enable" 	href="demo/audio.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/audio.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/audio.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Vídeo</strong></th>
			<td><a class="enable" 	href="demo/video.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/video.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/video.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Álbum de fotos (Galleria)</strong></th>
			<td><a class="enable" 	href="demo/album-de-fotos_galleria.php">Demo</a></td>			
			<td><a class="enable" 	href="snippets/album-de-fotos_galleria.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleria.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Álbum de fotos (Gallery View)</strong></th>
			<td><a class="enable" 	href="demo/album-de-fotos_galleryview.php">Demo</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/album-de-fotos_galleryview.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Paginação</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/paginacao.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
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
			<th scope="row"><strong>Twitter</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/twitter.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
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
			<th scope="row"><strong>Toolbox</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/toolbox.html">HTML</a></td>
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
			<th scope="row"><strong>Cadastro</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/cadastro.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
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
			<th scope="row"><strong>Lista de álbuns (Tabela)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns_tabela.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Lista de álbuns</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-albuns.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>		
		<tr>
			<th scope="row"><strong>Lista de comentários</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista-comentarios.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Comentar</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/lista_noticias.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Página 404</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/erro404.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Modal</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/modal.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="snippets/homepage.php">JS</a></td>
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
			<th scope="row"><strong>Endereço (Microformatos)</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
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
			<th scope="row"><strong>Abas</strong></th>
			<td><a class="disable" 	href="snippets/arquivo.html">Demo</a></td>			
			<td><a class="enable" 	href="snippets/abas.html">HTML</a></td>
			<td><a class="disable" 	href="snippets/template.css">CSS</a></td>
			<td><a class="disable" 	href="php/homepage.php">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
		<tr>
			<th scope="row"><strong>Slide de Imagens (Efeito Carrossel)</strong></th>
			<td><a class="enable" 	href="demo/slide-de-imagens_efeito_carrossel.php">Demo</a></td>	
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.html">HTML</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.css">CSS</a></td>
			<td><a class="enable" 	href="snippets/slide-de-imagens_efeito_carrossel.js">JS - </a><a class="enable" href="snippets/slide-de-imagens_efeito_carrossel_v2.js">JS</a></td>
			<td><a class="disable" 	href="php/homepage.php">PHP</a></td>
		</tr>
	</tbody>
</table>
</div>
</body>
</html>
