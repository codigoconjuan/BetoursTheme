(function ($, root, undefined) {

	$(function ($) {

		'use strict';

                $('.bxSlider').bxSlider({
                   auto: true
                });



                jQuery('.gallery a').each(function(){
                        var captionText = $(this).closest('.gallery-item').find('.wp-caption-text').html();
                        jQuery(this).attr({'data-lightbox':'slideshow', 'title': captionText});
                });


                $("body.single-autobus ul#menu-header-menu a:contains('Autobuses')").parent().addClass('current_page_item');

                $("body.single-vans ul#menu-header-menu a:contains('Vans')").parent().addClass('current_page_item');


                $('form').children().wrapAll("<div id='form-wrap'></div>");


				var output = "<div id='aviso'> <h3>AVISO DE PRIVACIDAD:</h3>";
				output += '<p>ROSA MARIA PEREZ MORAN (BETOURS AGENCIA DE VIAJES RENTA DE AUTOBUSES Y VANS DE LUJO), CON DOMICILIO FISCAL EN EL FRACC. ARANDAS, COL. OBLATOS EN GUADALAJARA JALISCO, ES RESPONSABLE DE RECABAR SUS DATOS PERSONALES Y DEL USO QUE SE LE DE A LOS MISMOS Y DE SU PROTECCION.</p>';
 			    output += '<p>SU INFORMACION PERSONAL SERA UTILIZADA PARA PROVEER LOS SERVICIOS Y PRODUCTOS QUE HA SOLICITADO, INFORMARLE SOBRE LOS CAMBIOS EN LOS MISMOS Y EVALUAR LA CALIDAD DEL SERVICIO QUE LE BRINDAMOS.</p>';
				output += '<p>PARA LAS FINALIDADES ANTES MENCIONADAS REQUERIMOS OBTENER LOS SIGUIENTES DATOS PERSONALES: NOMBRE, CORREO ELECTRONICO, TELEFONO ASI COMO TODO DATO PERSONAL CONSIDERADO COMO SENCIBLE SEGÚN LA LEY FEDERAL DE PROTECCION DE DATOS PERSONALES EN POSESIÓN DE LOS PARTICULARES NOMBRE DE LA EMPRESA Y TELÉFONO DE CONTACTO.</p>';
				output += '<p>USTED TIENE DERECHO DE ACCEDER, RECTIFICAR Y CANCELAR SUS DATOS PERSONALES, ASI COMO OPONERSE AL TRATAMIENTO DE LOS MISMOS O REVOCAR EL CONSENTIMIENTO QUE PARA TAL FIN NOS HAYA OTORGADO A TRAVÉS DE LOS PROCEDIMIENTOS QUE HEMOS IMPLEMENTADO.</p>';
				output += '<p>PARA CONOCER DICHOS PROCEDIMIENTOS, LOS REQUISITOS Y PLAZOS SE PUEDE PONER EN CONTACTO CON NUESTRO DEPARTAMENTO DE ATENCION Y DATOS PERSONALES AL CORREO: eponcemoran@hotmail.com o al teléfono 36098977.</p>';
				output += '<p>Cualquier modificación a este aviso de privacidad podrá consultarlo en nuestro portal: www.betours.com.mx </p>';
				output += '<p>Guadalajara Jalisco 17 de enero 2013</p>';
				output += '</div>';

                $('form p').last().prepend(output);

                $('<a id="avisoBoton" href="#aviso" class="boton">Ver aviso de privacidad</a>').insertBefore('#aviso');

                $('<div class="checkbox"><input id="checkboxprivacidad" type="checkbox" name="acepto" value="acepto"><label>He leído y acepto el aviso de privacidad</label></div>').insertAfter('#aviso');

				$('#avisoBoton').click(function(){
					$('#aviso').toggle();
				});

                $('#aviso').hide();

				$('input:submit').attr('disabled','disabled');
				$('#checkboxprivacidad').change( function() {
				    $('input:submit').attr('disabled', !this.checked);
				});

                /** MAGIC LINE **/
                var $el, leftPos, newWidth;
                 var   $mainNav2 = $("#menu-header-menu");


                /* Add Magic Line markup via JavaScript, because it ain't gonna work without */
                $("#menu-header-menu").append("<li id='magic-line'></li>");

                /* Cache it */
                var $magicLine = $("#magic-line");

                $magicLine
                    .width($(".current_page_item").width())
                    .css("left", $(".current_page_item").position().left)
                    .data("origLeft", $magicLine.position().left)
                    .data("origWidth", $magicLine.width());

                $("#menu-header-menu li").find("a").hover(function() {
                    $el = $(this);
                    leftPos = $el.parent().position().left;
                    newWidth = $el.parent().width();

                    $magicLine.stop().animate({
                        left: leftPos,
                        width: newWidth
                    });
                }, function() {
                    $magicLine.stop().animate({
                        left: $magicLine.data("origLeft"),
                        width: $magicLine.data("origWidth")
                    });
                });

                // fin magicline




                $(window).scroll(function(event) {
                    var y = $(this).scrollTop();


                    // ANIMACIONS VAN PAGINA INICIO
                    if (y >= 450) {
                    	$('.home #50.amarilloVan').addClass('visible animated fadeInLeft');
                    	setTimeout(function()  {$('.home #48.amarilloVan').addClass('visible animated fadeInRight'); }, 400 );
                    }

                    // ANIMACIONES SERVICIOS AZUL PAGINA INICIO
                    if (y >= 650) {
                        $('img#aire').addClass('animated bounceIn');
                        setTimeout(function() { $('img#musica').addClass('animated bounceIn'); }, 200);
                        setTimeout(function() { $('img#pantalla').addClass('animated bounceIn'); }, 400);
                        setTimeout(function() { $('img#wc').addClass('animated bounceIn'); }, 600);
                    }

                    //ANIMACIONES PAGINA NOSOTROS
                    if (y >= 430) {
                         $('img#img1').addClass('animated fadeInLeft');
                         setTimeout(function() { $('img#img2').addClass('animated fadeInRight'); }, 400);
                    }

                    // ANIMACIONES AUTOBUSES.

                    if (y >= 300 ) {
                    	$('div#88.itemAutobus').addClass('opacity1 animated fadeInLeft');
                    	setTimeout(function() { $('div#58.itemAutobus').addClass('opacity1 animated fadeInRight'); }, 400);
                    }
                    if (y >= 650 ) {
                    	$('div#110.itemAutobus').addClass('opacity1 animated fadeInRight');
                    	setTimeout(function() { $('div#95.itemAutobus').addClass('opacity1 animated fadeInLeft'); }, 400);
                    }
                    if (y >= 800 ) {
                    	$('div#123.itemAutobus').addClass('opacity1 animated fadeInLeft');
                    	setTimeout(function() { $('div#114.itemAutobus').addClass('opacity1 animated fadeInRight'); }, 400);
                    }


                    // ANIMACIONES VAN PAGINA VANS.
                    if (y >= 350) {
                    	$('.vans #50.amarilloVan').addClass('visible animated fadeInLeft');
                    	setTimeout(function()  {$('.vans #48.amarilloVan').addClass('visible animated fadeInRight'); }, 400 );
                    }








                });


	});

})(jQuery, this);
