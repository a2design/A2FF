<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en' xml:lang='en'>
<head>
<!-- Website Design By: www.happyworm.com -->
<title>Demo (jPlayer 1.1.1) : ThemeRoller Version</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="../css/jPlayer.css" rel="stylesheet" type="text/css" />
<link type="text/css" href="../css/jquery-ui-1.8.custom.css" rel="stylesheet" />

<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="../js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="../js/demos.common.js"></script>

<script type="text/javascript">
<!--
$(function(){

	var global_lp = 0;

	$("#jquery_jplayer").jPlayer({
		ready: function ()
		{
			this.element.jPlayer("setFile", "http://www.miaowmusic.com/mp3/Miaow-01-Tempered-song.mp3").jPlayer("play");
			showPauseBtn();
			demoInstanceInfo(this.element, $("#demo_info")); // This displays information about jPlayer's configuration in the demo page
		},
		customCssIds: true
	})
	.jPlayer("onProgressChange", function(lp,ppr,ppa,pt,tt) {
 		var lpInt = parseInt(lp);
 		var ppaInt = parseInt(ppa);
 		global_lp = lpInt;

		$('#loaderBar').progressbar('option', 'value', lpInt);
 		$('#sliderPlayback').slider('option', 'value', ppaInt);
	})
	.jPlayer("onSoundComplete", function() {
		this.element.jPlayer("play");
	});

	$("#pause").hide();

	function showPauseBtn()
	{
		$("#play").fadeOut(function(){
			$("#pause").fadeIn();
		});
	}

	function showPlayBtn()
	{
		$("#pause").fadeOut(function(){
			$("#play").fadeIn();
		});
	}

	function playTrack(t,n)
	{
		$("#jquery_jplayer").jPlayer("setFile", t).jPlayer("play");

		showPauseBtn();

		return false;
	}

	$("#play").click(function() {
		$("#jquery_jplayer").jPlayer("play");
		showPauseBtn();
		return false;
	});

	$("#pause").click(function() {
		$("#jquery_jplayer").jPlayer("pause");
		showPlayBtn();
		return false;
	});

	$("#stop").click(function() {
		$("#jquery_jplayer").jPlayer("stop");
		showPlayBtn();
		return false;
	});


	$("#volume-min").click( function() {
		$('#jquery_jplayer').jPlayer("volume", 0);
		$('#sliderVolume').slider('option', 'value', 0);
		return false;
	});

	$("#volume-max").click( function() {
		$('#jquery_jplayer').jPlayer("volume", 100);
		$('#sliderVolume').slider('option', 'value', 100);
		return false;
	});

	$("#player_progress_ctrl_bar a").live( "click", function() {
		$("#jquery_jplayer").jPlayer("playHead", this.id.substring(3)*(100.0/global_lp));
		return false;
	});

	// Slider
	$('#sliderPlayback').slider({
		max: 100,
		range: 'min',
		animate: true,

		slide: function(event, ui) {
			$("#jquery_jplayer").jPlayer("playHead", ui.value*(100.0/global_lp));
		}
	});

	$('#sliderVolume').slider({
		value : 50,
		max: 100,
		range: 'min',
		animate: true,

		slide: function(event, ui) {
			$("#jquery_jplayer").jPlayer("volume", ui.value);
		}
	});

	$('#loaderBar').progressbar();


	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);

});
-->
</script>


<style>
<!--

#player_container {
	position:relative;
	border: 1px solid #009BE3;
	padding:20px;
}

ul#icons {margin: 0; padding: 0;}
ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
ul#icons span.ui-icon {float: left; margin: 0 4px;}

ul#icons #volume-min {
	margin:2px 140px 2px 364px;
}

#sliderVolume {
	position:absolute;
	top:30px;
	left:480px;
	width:120px;
	height:.4em;
}


#sliderVolume .ui-slider-handle {
	height:.8em;
	width:.8em;
}

#bars_holder {
	position:absolute;
	top:27px;
	left:100px;
	width:300px;
}

#sliderPlayback .ui-slider-handle {
	height:1.6em;
}

#loaderBar.ui-progressbar {
	height:.2em;
	border:0;
}

-->
</style>

<!--[if IE 6]>
<link href="../css/ie6.css" rel="stylesheet" type="text/css" />
<style>
ul#icons #volume-min {
	margin:2px 130px 2px 216px;
}

#sliderVolume {
	width:110px;
	left:476px;
	height:.8em;
}
</style>

<![endif]-->

<!--[if IE 7]>
<style>

ul#icons #stop {
	margin-right:360px;
}

ul#icons #volume-min {
	margin:2px 154px 2px 0px;
}

</style>

<![endif]-->



</head>

<body class="demos">
<div id="container">
	<div id="branding">
		<a href="http://www.happyworm.com/jquery/jplayer"><img src="../graphics/jplayer_logo.gif" alt="jPlayer" /></a>
		<h1>jQuery audio player plugin</h1>
	</div>
	<div id="menu">
		<ul>
			<li id="home"><a href=".."><span>home</span></a></li>

			<li id="demos"><a href="../latest/demos.htm"><span>demos</span></a></li>
			<li id="download"><a href="../download.htm"><span>download</span></a></li>
			<li id="dev_guide"><a href="../latest/developer-guide.htm"><span>dev guide</span></a></li>
			<li id="support"><a href="../support.htm"><span>support</span></a></li>
			<li id="sites"><a href="../sites.htm"><span>sites</span></a></li>
			<li id="about"><a href="../about.htm"><span>about</span></a></li>

		</ul>
	</div>
	<div id="content_main">
		<div class="section demo_section_top">
			<ul id="breadcrumbs">
				<li><a href="demos.htm">demos (jPlayer 1.1.1)</a></li>
				<li>> ThemeRoller Version</li>
			</ul>

			<h2>ThemeRoller Version</h2>
			<p>This demo uses jQueryUI ThemeRoller widgets, allowing developers to easily customise the look and feel by rolling their own theme.</p>
			<p>We have used the Slider widget for volume and playhead, Progressbar for play progress and Framework Icons for buttons.</p>
			<p><a href="http://jqueryui.com/themeroller/">jQueryUI ThemeRoller</a></p>
		</div>

		<div id="jquery_jplayer"></div>

		<div id="player_container">
			<ul id="icons" class="ui-widget ui-helper-clearfix">
				<li id="play" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-play"></span></li>
				<li id="pause" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-pause"></span></li>
				<li id="stop" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-stop"></span></li>
				<li id="volume-min" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-volume-off"></span></li>
				<li id="volume-max" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-volume-on"></span></li>
			</ul>

			<!-- Sliders -->
			<div id="sliderVolume"></div>
			<div id="bars_holder">
				<div id="sliderPlayback"></div>
				<div id="loaderBar"></div>
			</div>
		</div>

		<div class="section demo_section_bot">

			<div id="demo_info"></div>
			<p class="miaow">Tracks courtesy of Miaow <a href="http://www.miaowmusic.com">MiaowMusic.com</a></p>
		</div>
	</div>

	<div id="content_sub">
		<div class="section highlight">
			<h2>Help us improve jPlayer</h2>

			<p>Developing and supporting jPlayer is almost a full-time job and we are really just beginning. Help us continue to help you.</p>
			<div class="center">
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick" />
					<input type="hidden" name="hosted_button_id" value="5356703" />
					<input type="image" src="http://www.paypal.com/en_US/i/btn/btn_donate_LG.gif" name="submit" alt="PayPal - The safer, easier way to pay online." />
					<img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
				</form>

			</div>
		</div>
		<div class="section highlight">
			<h2>Hire Us!</h2>
			<p>Need an audio based solution realized or just need some help. Hire <a href="http://www.happyworm.com">Happyworm</a>! Contact: <a href="mailto:hello@happyworm.com">hello@happyworm.com</a>.</p>
		</div>

		<div class="section">
			<h2>Also by Happyworm</h2>
		</div>
		<div class="section highlight">
			<h2><a href="http://www.happyworm.com/projects/Qwiiz/qwiiz-massively-multiplayer-quiz-game.htm">Qwiiz</a></h2>
			<p>Massively multiplayer real-time quiz game. Cross platform and tuned for the iPad.</p>
		</div>

		<div class="section">
			<h2>Collaborate</h2>
			<ul>
				<li><a href="http://github.com/happyworm/jPlayer">jPlayer on GitHub</a></li>
			</ul>
		</div>
		<div class="section">
			<h2>jQuery JavaScript Library</h2>

			<ul>
				<li><a href="http://jquery.com">jQuery Website</a></li>
				<li><a href="http://docs.jquery.com">jQuery Documentation</a></li>
				<li><a href="http://plugins.jquery.com/project/jPlayer">jPlayer on jQuery website</a></li>
			</ul>
		</div>
		<div class="section">

			<h2>ActionScript 2 Compiler</h2>
			<ul>
				<li><a href="http://mtasc.org/">MTASC</a></li>
			</ul>
		</div>
	</div>
	<div id="footer">
		<p>29th April 2010 <a href="http://www.happyworm.com">&copy; 2009 - 2010 Happyworm Ltd</a></p>

		<a id="twitter" href="http://twitter.com/happyworm"> <img alt="twitter" src="../graphics/twitter_small.png"/> follow us on twitter </a>
	</div>
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-3557377-3");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
