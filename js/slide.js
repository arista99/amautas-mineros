/*=============================================
VARIABLES
=============================================*/
var item = 0;
var itemPaginacion = $("#paginacion li");
var interrumpirCiclo = false;
var detenerIntervalo = false;
/*=============================================
PAGINACION
=============================================*/

$("#paginacion li").click(function() {
    item = $(this).attr("item")-1;
    // console.log("item", item);
    movimientosSlide(item);
})

/*==============================================
AVANZAR
=============================================*/

function avanzar() {
    
    if (item == 3) {
        
        item = 0;
    }else{
        item++
    }
    movimientosSlide(item);

}

$("#slider #avanzar").click(function() {
    
    avanzar();
})

/*==============================================
RETROCEDER
=============================================*/

$("#slider #retroceder").click(function() {
    
    if (item == 0) {
        
        item = 3;
    }else{
        item--
    }
    movimientosSlide(item);
})

/*=============================================
MOVIMIENTOS SLIDE
=============================================*/

function movimientosSlide(item) {

    $("#slider ul").animate({"left": item * -100 +"%"}, 1000)

    $("#paginacion li").css({"opacity":.5})

    $(itemPaginacion[item]).css({"opacity":1});

    interrumpirCiclo = true;
}

/*==============================================
INTERVALO
=============================================*/

setInterval(function() {
    
    if (interrumpirCiclo) {
        interrumpirCiclo = false;
    }else{

        if (!detenerIntervalo) {
            avanzar();
        }
    }

}, 3000);

/*==============================================
APARECER FLECHAS
=============================================*/

$("#slider").mouseover(function() {
    
    $("#slider #avanzar").css({"opacity":1})
    $("#slider #retroceder").css({"opacity":1})

    detenerIntervalo = true;
})


$("#slider").mouseout(function() {
    
    $("#slider #avanzar").css({"opacity":0})
    $("#slider #retroceder").css({"opacity":0})
    
    detenerIntervalo = false;
})
