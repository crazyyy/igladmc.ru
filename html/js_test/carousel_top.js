//Обработка клика на стрелку вправо
$(document).on('click', ".carousel-button-right_top",function(){ 
    var carusel_top = $(this).parents('.carousel_top');
    right_carusel_top(carusel_top);
    return false;
});
//Обработка клика на стрелку влево
$(document).on('click',".carousel-button-left_top",function(){ 
    var carusel_top = $(this).parents('.carousel_top');
    left_carusel_top(carusel_top);
    return false;
});
function left_carusel_top(carusel_top){
   var block_width = $(carusel_top).find('.carousel-block_top').outerWidth();
   $(carusel_top).find(".carousel-items_top .carousel-block_top").eq(-1).clone().prependTo($(carusel_top).find(".carousel-items_top")); 
   $(carusel_top).find(".carousel-items_top").css({"left":"-"+block_width+"px"});
   $(carusel_top).find(".carousel-items_top .carousel-block_top").eq(-1).remove();    
   $(carusel_top).find(".carousel-items_top").animate({left: "0px"}, 200); 
    
}
function right_carusel_top(carusel_top){
   var block_width = $(carusel_top).find('.carousel-block_top').outerWidth();
   $(carusel_top).find(".carousel-items_top").animate({left: "-"+ block_width +"px"}, 200, function(){
      $(carusel_top).find(".carousel-items_top .carousel-block_top").eq(0).clone().appendTo($(carusel_top).find(".carousel-items_top")); 
      $(carusel_top).find(".carousel-items_top .carousel-block_top").eq(0).remove(); 
      $(carusel_top).find(".carousel-items_top").css({"left":"0px"}); 
   }); 
}
 
$(function() {
//Раскомментируйте строку ниже, чтобы включить автоматическую прокрутку карусели
    auto_right_top('.carousel_top:first');
})
 
// Автоматическая прокрутка
function auto_right_top(carusel_top){
    setInterval(function(){
        if (!$(carusel_top).is('.hover'))
            right_carusel_top(carusel_top);
    }, 6000) // время прокрутки (1000 = 1 сек)
}
// Навели курсор на карусель
$(document).on('mouseenter', '.carousel_top', function(){$(this).addClass('hover')})
//Убрали курсор с карусели
$(document).on('mouseleave', '.carousel_top', function(){$(this).removeClass('hover')})