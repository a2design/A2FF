<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<head>
	<title>Slideshow Scrollable</title>	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="A2 Comunicação" />
	<link rel="stylesheet" type="text/css" href="snippets/reset.css" media="all" />	
	<link rel="stylesheet" type="text/css" href="../snippets/slideshow-scrollable.css" media="all" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />	
	<link rel="alternate" type="application/rss+xml" title="Slideshow Scrollable RSS" href="#" />	
	
	<!-- include the Tools -->
	<script type="text/javascript" src="../js/jquery.tools.min.js"></script>
</head>
<body>
		<div id="slideshow">
			<div id="image_wrap">		
				<!-- Initially the image is a simple 1x1 pixel transparent GIF -->
				<img src="http://static.flowplayer.org/tools/img/blank.gif" width="500" height="375" />
			
			</div>
			<div id="image_thumb">
				<div id="anterior"><a class="prev browse left"></a></div>
				<div class="scrollable">   
				   <div class="items">
				      <div>
				         <img src="http://farm1.static.flickr.com/143/321464099_a7cfcb95cf_t.jpg" />
				         <img src="http://farm4.static.flickr.com/3089/2796719087_c3ee89a730_t.jpg" />
				         <img src="http://farm1.static.flickr.com/79/244441862_08ec9b6b49_t.jpg" />
				         <img src="http://farm1.static.flickr.com/28/66523124_b468cf4978_t.jpg" />				
				         <img src="http://farm1.static.flickr.com/164/399223606_b875ddf797_t.jpg" />
				      </div>
				      <div>
				         <img src="http://farm1.static.flickr.com/163/399223609_db47d35b7c_t.jpg" />
				         <img src="http://farm1.static.flickr.com/135/321464104_c010dbf34c_t.jpg" />
				         <img src="http://farm1.static.flickr.com/40/117346184_9760f3aabc_t.jpg" />
				         <img src="http://farm1.static.flickr.com/153/399232237_6928a527c1_t.jpg" />
				         <img src="http://farm1.static.flickr.com/50/117346182_1fded507fa_t.jpg" />
				
				      </div>
				      <div>
				         <img src="http://farm4.static.flickr.com/3629/3323896446_3b87a8bf75_t.jpg" />
				         <img src="http://farm4.static.flickr.com/3023/3323897466_e61624f6de_t.jpg" />
				         <img src="http://farm4.static.flickr.com/3650/3323058611_d35c894fab_t.jpg" />
				         <img src="http://farm4.static.flickr.com/3635/3323893254_3183671257_t.jpg" />
				         <img src="http://farm4.static.flickr.com/3624/3323893148_8318838fbd_t.jpg" />
				      </div>
				   </div>
				</div>
				<div id="proximo"><a class="next browse right"></a></div>
			</div>	
		</div>
<script type="text/javascript">
$(function() {

$(".scrollable").scrollable();

$(".items img").click(function() {

	// see if same thumb is being clicked
	if ($(this).hasClass("active")) { return; }

	// calclulate large image's URL based on the thumbnail URL (flickr specific)
	var url = $(this).attr("src").replace("_t", "");

	// get handle to element that wraps the image and make it semi-transparent
	var wrap = $("#image_wrap").fadeTo("medium", 0.5);

	// the large image from www.flickr.com
	var img = new Image();


	// call this function after it's loaded
	img.onload = function() {

		// make wrapper fully visible
		wrap.fadeTo("fast", 1);

		// change the image
		wrap.find("img").attr("src", url);

	};

	// begin loading the image from www.flickr.com
	img.src = url;

	// activate item
	$(".items img").removeClass("active");
	$(this).addClass("active");

// when page loads simulate a "click" on the first image
}).filter(":first").click();
});
</script>


</body>
</html>

