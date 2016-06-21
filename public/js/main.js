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
	
});

