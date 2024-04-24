$('.menu > li').mouseover(function(){
    $(this).children('.submenu').stop().slideDown(200);
});
$('.menu > li').mouseout(function(){
    $(this).children('.submenu').stop().slideUp(200);
});