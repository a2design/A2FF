<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Navmain</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />	
	<script type="text/javascript" src="../js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="../js/superfish.js" ></script>
	<link rel="stylesheet" type="text/css" href="../snippets/navmain.css" media="all" />	
	<script type="text/javascript">
		$(function(){
			$("#nav_main ul").superfish();
			$("#nav_main ul .item01 .submenu li:last, #nav_main ul .item03 .submenu li:last, #nav_main ul .item06 .submenu li:last, #nav_main ul .item08 .submenu li:last").css('border-bottom', 'none');
		});
	</script>

</head>
<body id="teste">
<div id="nav_main">
	<ul>
		<li class="item01"><a href="javascript:void(0);">item01</a>
			<ul class="submenu">
					<li class="item01"><a href="javascript:void(0);">sub01</a></li>
					<li class="item02"><a href="javascript:void(0);">sub02</a></li>
			</ul>
		</li>
		<li class="item02"><a href="javascript:void(0);">item02</a></li>
		<li class="item03"><a href="javascript:void(0);">item03</a>
			<ul class="submenu">
					<li class="item01"><a href="javascript:void(0);">sub01</a></li>
					<li class="item02"><a href="javascript:void(0);">sub02</a></li>
			</ul>		
		</li>
		<li class="item04"><a href="javascript:void(0);">item04</a></li>
		<li class="item05"><a href="javascript:void(0);">item05</a></li>
		<li class="item06"><a href="javascript:void(0);">item06</a>
			<ul class="submenu">
					<li class="item01"><a href="javascript:void(0);">sub01</a></li>
					<li class="item02"><a href="javascript:void(0);">sub02</a></li>
			</ul>		
		</li>
		<li class="item07"><a href="javascript:void(0);">item07</a></li>
		<li class="item08"><a href="javascript:void(0);">item08</a>
			<ul class="submenu">
					<li class="item01"><a href="javascript:void(0);">sub01</a></li>
					<li class="item02"><a href="javascript:void(0);">sub02</a></li>
			</ul>		
		</li>
		<li class="item09"><a href="javascript:void(0);">item09</a></li>
		<li class="item10"><a href="javascript:void(0);">item10</a></li>
	</ul>
</div>
</body>
</html>

