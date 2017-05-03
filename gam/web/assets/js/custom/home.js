$(document).ready(function(){
	
	//alert('entro');

	// Instanciamos el objeto IAS
	var ias = jQuery.ias({
		container: '#timeline .box-content',
		item: '.cenote-item',
		pagination: '#timeline .pagination',
		next: '#timeline .pagination .next_link',
		triggerPageThreshold: 9
	});
	
	// Boton para ir cargando cada pagina cuando lleguemos a un limite
	ias.extension(new IASTriggerExtension({
		text: 'Ver más registros',
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

