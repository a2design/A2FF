	$(function() {
		$(".aba:first").show();
		$('#nav-aba li.item02 a').addClass('tab-current'); 
		$('#nav-aba li.item03 a').addClass('tab-current'); 

		$("#nav-aba li.item03 a").click(function() {			
				$('#nav-aba li.item03 a').removeClass('tab-current');
				$('#nav-aba li.item01 a').addClass('tab-current');
				$('#nav-aba li.item02 a').addClass('tab-current');	
				$(".aba").hide();
				var div = $(this).attr('href');
				$(div).show();
				return false;			
		});	
		$("#nav-aba li.item02 a").click(function() {			
				$('#nav-aba li.item02 a').removeClass('tab-current');
				$('#nav-aba li.item01 a').addClass('tab-current');
				$('#nav-aba li.item03 a').addClass('tab-current');	
				$(".aba").hide();
				var div = $(this).attr('href');
				$(div).show();
				return false;			
		});
		$("#nav-aba li.item01 a").click(function() {			
				$('#nav-aba li.item01 a').removeClass('tab-current');
				$('#nav-aba li.item02 a').addClass('tab-current');	
				$('#nav-aba li.item03 a').addClass('tab-current');	
				$(".aba").hide();
				var div = $(this).attr('href');
				$(div).show();
				return false;			
		});
	});