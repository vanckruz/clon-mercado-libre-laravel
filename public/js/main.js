particlesJS.load('particles-js', 'js/json/particlesjs-config.json');

$(document).on("ready",function(){

	$("#section_calendar_pub").on("scroll",function(){
		alert("scroll");
	});

    $(".banner .text_action .t_1").typed({
        strings: [
        	"Revolucionando los servicios",
        	"Seguridad ,calidad y entrega garantizada",
        	"Ingresa ya y disfruta de la comodidad del siglo 21"
        ],
        typeSpeed: 30
     });

	$(window).scroll(function(){
		var top = $(window).scrollTop();
		var posicion = top * 0.10;

		$("#particles-js").css({
			"background-position" : "0 -"+posicion+"px"
		});
	});

	
	$("#buscador").on("submit",function(e){
		e.preventDefault();
		var ruta = $("#buscador").attr("action")+"/"+$("#busqueda").val();
		window.location = ruta;
	});


	$(".add_cart_inicio").on("click",function(e)
	{
		e.preventDefault();

		var id_item          = $(this).data("menuid");
		var totals_items     = $(this).data('cantidad');
		var precio    		 = $(this).data('precio');
		var token 			 = $(this).data('token');
		var addcartlink      = $(this).attr('href');
		var resumencartlink  = $(this).attr('carrito');
		
		$.ajax({
			type	: "post",
			url		: addcartlink,
			data    : { 
				_token   : token,
				menu_id  : id_item,
				cantidad : totals_items,
				precio_t : precio,
			},
			success : function(data){					

				swal({
					title: "Menu agregado al carrito",
					text: "<a style='color:orange;' href='"+resumencartlink+"'></a>",
					type:"success",
					confirmButtonText: "Okey!",
 					html: true
				});	

			},
			
		});			

	});
	
});

