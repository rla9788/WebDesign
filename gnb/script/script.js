$('.navi > li').mouseover(function(){
    $(this).children('.sub').stop().slideDown(200);
});
$('.navi > li').mouseout(function(){
    $(this).children('.sub').stop().slideUp(200);
});