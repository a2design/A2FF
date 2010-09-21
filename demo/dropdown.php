<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Dropdown</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />
	<link rel="stylesheet" type="text/css" href="../snippets/dropdown.css" media="all" />
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript">
	$(function(){
		//top_tb
		$(".drop").click(function(){
			$(".down").toggleClass('display');
		});
	});
	</script>
</head>
<body id="teste">
<ul class="dropdown">
	<li class="item01">
		<a class="drop" href="javascript:void(0);">item01</a>
		<ul class="down display">
			<li>item01</li>
			<li>item02</li>
			<li>item03</li>
		</ul>
	</li>
	<li class="item02"><a href="javascript:void(0);"><a href="#">item02</a></li>
	<li class="item03"><a href="javascript:void(0);"><a href="#">item03</a></li>	
</ul>
</body>
</html>

