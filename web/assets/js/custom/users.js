$(document).ready(function(){
 	//alert('entro');

	// Instanciamos el objeto IAS
	var ias = jQuery.ias({
		container: '.box-users',
		item: '.user-item',
		pagination: '.pagination',
		next: '.pagination .next_link',
		triggerPageThreshold: 5
	});
	
	// Boton para ir cargando cada pagina cuando lleguemos a un limite
	ias.extension(new IASTriggerExtension({
		text: 'Ver más',
		offset: 3
	}));
	
	// GIF de efecto cargando
	ias.extension(new IASSpinnerExtension({
		src: URL+'/../assets/images/ajax-loader.gif'
	}));
	
	// Mensaje para cuando no existan mas resultados
	ias.extension(new IASNoneLeftExtension({
		text: 'No hay más resultados'
	}));
	
});

