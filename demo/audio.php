<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>teste</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunica��o" />	
	<link rel="stylesheet" type="text/css" href="../snippets/audio.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="teste RSS" href="#" />	
	
	<script type="text/javascript">
		$(document).ready(function(){
	
			//�udio			
		    $('div.audio a[@href$="mp3"]').flash(
		        { src: '../snippets/mp3player.swf', height: 34, width: 500, allowFullScreen : false, wmode : 'transparent' },
				{ version: 8 },
		        function(htmlOptions) {
		            $this = $(this);
		            htmlOptions.flashvars.mp3url = $this.attr('href');
					this.innerHTML = '';
					$this.before($.fn.flash.transform(htmlOptions));						
		        }
		    );			
		});		

		</script>
		
</head>
<body id="">
	
<?php include('../snippets/audio2.html'); ?>

</body>
</html>

