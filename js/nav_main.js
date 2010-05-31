$(function(){
	//$("#nav_main ul.nav").superfish(); 
		$("#nav_main a").click(function(){
		$(this).parent().find("#nav_sub").toggle("show");
		$("#nav_main #nav_sub li").css("position","relative");
		});
}); 
