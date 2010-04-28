/*
	category: A2 Multimidia
	name: Tamanho do Texto [JS]
	toolTip: Tamanho do Texto [JS]
*/

/* Tamanho do Texto
 *****************************************/ 
 
$(document).ready(function(){
  // Reset Font Size
  var originalFontSize = $('.text-entry p').css('font-size', '12px');
    $("#text_size .igual a").click(function(){
	    $('.text-entry p, #poll label var').css('font-size', '12px');
  });
  // Increase Font Size
  $("#text_size .maior a").click(function(){
    var currentFontSize = $('.text-entry p').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 12);
    var newFontSize = $('.text-entry p, #poll label var').css('font-size', '16px').css('line-height', '21px');
    $('.text-entry p').css('font-size', newFontSize);
    return false;
  });
  // Decrease Font Size
  $("#text_size .menor a ").click(function(){
    var currentFontSize = $('.text-entry p').css('font-size');
    var currentFontSizeNum = parseFloat(currentFontSize, 12);
    var newFontSize = $('.text-entry p, #poll label var').css('font-size', '10px');
    $('.text-entry p').css('font-size', newFontSize);
    return false;
  });
});
