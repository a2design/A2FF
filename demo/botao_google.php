<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Botões a la Google</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script language="JavaScript" type="text/javascript" src="http://swizec.com/code/styledButton/js/jquery.js" ></script>
	<script language="JavaScript" type="text/javascript" src="http://swizec.com/code/styledButton/js/jquery.styledButton.js" ></script>
	<script language="JavaScript" type="text/javascript" src="http://swizec.com/code/styledButton/js/shCore.js" ></script>
	<script language="JavaScript" type="text/javascript" src="http://swizec.com/code/styledButton/js/shBrushJScript.js" ></script>

	<script language="JavaScript" type="text/javascript" src="http://swizec.com/code/styledButton/js/jquery.beautyOfCode.js" ></script>
		
	<link rel="stylesheet" type="text/css" href="../snippets/reset.css" media="all" />	
	<link rel="stylesheet" href="http://swizec.com/code/styledButton/css/css.css" type="text/css" />
	<link rel="stylesheet" href="http://swizec.com/code/styledButton/css/styledButton.css" type="text/css" />
	<link rel="stylesheet" href="http://swizec.com/code/styledButton/css/SyntaxHighlighter.css" type="text/css" />
	
	<script type="text/javascript">
		$(document).ready(function () {
			$("span").css({
				 'padding' : '5px 20px',
				 'font-size' : '14px'
			});
			
			$("span.alone").styledButton({
				'orientation' : 'alone',
				'action' : function () { alert( 'omfg' ) },
				'display' : 'block'
			});
			
			$("span.left").styledButton({
				'orientation' : 'left'
			});
			$("span.center").styledButton({
				'orientation' : 'center',
				'action' : { 'on' :function () {
								alert( "You've turned on the button" );
							},
							'off' : function () {
								alert( "You've turned it off" );
							} },
				'toggle' : true
			});
			$("span.checked").styledButton({
				'orientation' : 'center',
				'role' : 'checkbox',
				'checked' : true
			});
			$("span.tell1").styledButton({
				'orientation' : 'right',
				'action' : function () { alert( $("span.checked").val() ) }
			});
			$("span.unchecked").styledButton({
				'orientation' : 'left',
				'role' : 'checkbox',
				'checkboxValue' : { 'on' : "custom on!",
									'off' : "custom off!" }
			});
			$("span.tell2").styledButton({
				'orientation' : 'right',
				'action' : function () { alert( $("span.unchecked").val() ) }
			});

			$("span.bla").styledButton({
				'orientation' : 'right',
				'dropdown' : { 'element' : 'ul' },
				'role' : 'select',
				'defaultValue' : 'default value',
				'name' : 'testSelect',
				'clear' : true
			});
			$("span.dummyDrop").styledButton({
				'orientation' : 'alone',
				'dropdown' : { 'element' : 'ul' },
				'role' : 'select',
				'defaultValue' : 'default value',
				'name' : 'dummy',
				'clear' : true
			});

			$("span.teller").styledButton({
				'action' : function () { alert( $("span.bla").val() ) },
				'orientation' : 'left',
				'clear' : true
			});
			
			$.beautyOfCode.init('js/clipboard.swf');
			$("pre").beautifyCode('javascript');
		} );
	</script>	
	
	<?php //include("../snippets/botao_google_head.html");?>
	
</head>
<body>
	<?php include("../snippets/botao_google.html");?>

</body>
</html>
