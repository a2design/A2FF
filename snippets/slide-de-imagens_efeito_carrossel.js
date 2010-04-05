/*
	category: A2
	name: Slide de Imagens [JS]
	toolTip: Slide de Imagens [JS]
*/
$(function(){
      $("#carrossel").jCarouselLite({
            btnPrev : '.prev',
            btnNext : '.next',
			  btnGo : [".1", ".2",".3",".4",".5",".6"],
            auto    : 1000,
            speed   : 2000,
            visible : 1
      })
})