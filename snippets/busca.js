/*
	category: A2 Formularios
	name: Busca [JS]
	toolTip: Busca [JS]
*/
// got from http://www.josefrichter.com/blog/clear-and-re-fill-form-fields-using-jquery/
// Reseta o valor do form

$(document).ready(function(){
				// set all input.text default value by alt attribute
				$(".input_text").each(function(){
					$(this).val($(this).attr("alt"));
				});
								
				// clear input on focus
				$(".input_text").focus(function() {
					
					if($(this).val()==$(this).attr("alt")) {
						$(this).val("");
					}
				});
				
				// if field is empty afterward, add text again
				$(".input_text").blur(function() {
					if($(this).val()=="") {
						$(this).val($(this).attr("alt"));
					}
				});
});

