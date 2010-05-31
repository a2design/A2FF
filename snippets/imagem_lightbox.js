/*
	category: A2 Multimidia
	name: Imagem (Lightbox) [JS]
	toolTip: Imagem (Lightbox) [JS]
*/

/*Imagem (Lightbox)**************************************************/
// <![CDATA[
	$(document).ready(function(){
        $('.zoom').lightBox({
			overlayBgColor : '#FFFFFF',
			overlayOpacity : '0.5',
			imageLoading  : '/js/lightbox/images/lightbox-ico-loading.gif',
			imageBtnClose : '/js/lightbox/images/lightbox-btn-close.gif',
			containerResizeSpeed  : '200',
			txtImage  : '',
			txtOf  : 'de'
		});
    });
// ]]>
