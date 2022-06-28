/*Inicia modulos/pestañas de la consulta.*/
$(document).ready(function(){
	$('ul.tabs li a:first').addClass('active');
	$('.secciones section').hide();
	$('.secciones section:first').show();

	$('ul.tabs li a').click(function(){
		$('ul.tabs li a').removeClass('active');
		$(this).addClass('active');
		$('.secciones section').hide();

		var activeTab = $(this).attr('href');
		$(activeTab).show();
		return false;
	});
});
/*Finaliza modulos/pestañas de la consulta.*/


/* Inicia Popup ventana emergente "Información almacenada con éxito".*/
$(document).ready(function (){

	function showPopup(){
		$('.pop-up').addClass('show');
		$('.pop-wrap').addClass('show');
	}	

	$("#close").click(function(){
		$('.pop-up').removeClass('show');
		$('.pop-wrap').removeClass('show');
	});

	$(".btn1").click(showPopup);
	$(".btn3").click(showPopup);

	/*setTimeout(showPopup, 5000);*/

});
/* Finaliza Popup ventana emergente "Información almacenada con éxito".*/

/*Inicia Popup ventana emergente "Cancelar registro - Respuesta: No".*/
$(document).ready(function (){

	function showCancelar(){
		$('.cancelar-pop-up').addClass('show');
		$('.cancelar-pop-wrap').addClass('show');
	}	

	$("#close-cancelar").click(function(){
		$('.cancelar-pop-up').removeClass('show');
		$('.cancelar-pop-wrap').removeClass('show');
	});

	$(".btn4").click(showCancelar);

	/*setTimeout(showPopup, 5000);*/

});
/*Finaliza Popup ventana emergente "Cancelar registro".*/



/*" Inicia limpieza de campos digitados"*/
function vaciar(control) {
        control.value = '';
 }
/*" Inicia limpieza de campos digitados"*/

/*$(document).ready(function() {
       $('#limpiar').click(function() {
              $('.descripcion').val('');
              $('.antecedentes').val('');
              $('.cirugias').val('');
              $('.estadoMedico').val('');
              $('.procedimiento').val('');
              $('.cancelar-pop-up').removeClass('show');
		$('.cancelar-pop-wrap').removeClass('show');
        });
});*/

/* Inicia Popup ventana emergente visualizar paciente.*/
$(document).ready(function (){

	function showVispac(){
		$('.vis-pac-pop-up').addClass('show');
		$('.vis-pac-pop-wrap').addClass('show');
	}	

	$("#close-vis-pac").click(function(){
		$('.vis-pac-pop-up').removeClass('show');
		$('.vis-pac-pop-wrap').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-eye-pac").click(showVispac);

});
/* Finaliza Popup ventana emergente visualizar paciente.*/


/* Inicia Popup ventana emergente EDITAR paciente.*/
$(document).ready(function (){

	function showVisPacEdit(){
		$('.vis-pac-pop-up-edit').addClass('show');
		$('.vis-pac-pop-wrap-edit').addClass('show');
	}	

	$("#close-vis-pac-edit").click(function(){
		$('.vis-pac-pop-up-edit').removeClass('show');
		$('.vis-pac-pop-wrap-edit').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-pencil-pac").click(showVisPacEdit);

});
/* Finaliza Popup ventana emergente EDITAR paciente.*/

/* Inicia Popup ventana emergente NUEVO paciente.*/
$(document).ready(function (){

	function showVisPacNew(){
		$('.vis-pac-pop-up-new').addClass('show');
		$('.vis-pac-pop-wrap-new').addClass('show');
	}	

	$("#close-vis-pac-new").click(function(){
		$('.vis-pac-pop-up-new').removeClass('show');
		$('.vis-pac-pop-wrap-new').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-circle-plus-pac").click(showVisPacNew);

});
/* Finaliza Popup ventana emergente NUEVO paciente.*/

/* Inicia Popup ventana emergente visualizar propietario.*/
$(document).ready(function (){

	function showVisPro(){
		$('.vis-pro-pop-up').addClass('show');
		$('.vis-pro-pop-wrap').addClass('show');
	}	

	$("#close-vis-pro").click(function(){
		$('.vis-pro-pop-up').removeClass('show');
		$('.vis-pro-pop-wrap').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-eye-pro").click(showVisPro);

});
/* Finaliza Popup ventana emergente visualizar propietario.*/

/* Inicia Popup ventana emergente EDITAR propietario.*/
$(document).ready(function (){

	function showVisProEdit(){
		$('.vis-pro-pop-up-edit').addClass('show');
		$('.vis-pro-pop-wrap-edit').addClass('show');
	}	

	$("#close-vis-pro-edit").click(function(){
		$('.vis-pro-pop-up-edit').removeClass('show');
		$('.vis-pro-pop-wrap-edit').removeClass('show');
	});

	$(".icon.icon-tabler.icon-tabler-pencil-pro").click(showVisProEdit);

});
/* Finaliza Popup ventana emergente EDITAR propietario.*/

function getFocus() {
       document.getElementById("edNomPac").focus();
 }

/*Inicia Convertir de HTML a PDF*/

function HTMLtoPDF(){

	var doc = new jsPDF();
	var HTMLelement = $(".html_to_pdf").html();
	doc.fromHTML(HTMLelement,10,10,{
		'width': 190
	})
	doc.save('htmltopdf.pdf')
}