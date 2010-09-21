$(document).ready(function() {

	//tabela
	$('#a2ff').dataTable( {
		"bPaginate": false,
		"bLengthChange": false,
		"bFilter": true,
		"bSort": true,
		"bInfo": true,
		"aoColumns": [ 
			{ "bSortable": false },
			null,
			{ "bSortable": false },
			null,
			null,
			null,
		],  
		"bAutoWidth": false });
	
	//hightlight
		$('#a2ff td').hover( function() {
			var iCol = $('td').index(this) % 5;
			var nTrs = oTable.fnGetNodes();
			$('td:nth-child('+(iCol+1)+')', nTrs).addClass( 'highlighted' );
		
		}, function() {
			$('td.highlighted', oTable.fnGetNodes()).removeClass('highlighted');
		} );
		
	//selected
	$('#a2ff tr').click( function() {
		if ( $(this).hasClass('row_selected') )
			$(this).removeClass('row_selected');
			
		else
			$(this).addClass('row_selected');
			$('#a2ff input:checkbox', this).attr('checked', true);
	} );

	
	
	

	//controles
	$("#controls").slideToggle("hide");
	$("#bt_controls").click(function(){
		$("#controls").slideToggle("slow");
		$(this).children("span").toggleClass("ui-icon-triangle-1-s"); 
		$(this).children("span").toggleClass("ui-icon-triangle-1-n"); 	
		return false;
	});

	//hover states on the static widgets
	$('.icon, .bt').hover(
		function() { $(this).addClass('ui-state-hover'); }, 
		function() { $(this).removeClass('ui-state-hover'); }
	);

	//checkbox
	$("th.a a").toggle(function(){ $(".input_checkbox").attr("checked","checked"); $(this).text("Nenhum"); },
		function(){ $(".input_checkbox").attr("checked",""); $(this).text("Todos"); });

	//dialogs
	$('#sobre, #funcionamento').dialog(
		{ 
			autoOpen: false,
			resizable: false,
			modal: true,
			draggable: false,
			position: ['center', 215]
		}
	);

	$('#funcionamento').dialog({ width: 400 });
		
	$('#bt_funcionamento').click(function() {
		$('#funcionamento').dialog('open');
		return false;
	});
	
	$('#bt_sobre').click(function() {
		$('#sobre').dialog('open');
		return false;
	});

	//tabs
	$('#tabs_funcionamento').tabs();

	//etc
	$('.disable a').attr('href','javascript:void(0);');
	
});
