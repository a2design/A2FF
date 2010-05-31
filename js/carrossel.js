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