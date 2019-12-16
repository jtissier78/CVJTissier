/**
 * Slider for social card
 */
$('#slider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 0,
    thumbItem: 9
});


/**
 * Fixed navBar when Scroll page.
 * Code pull from CodePen by Juan Gallardo.
 * 
 */
$(window).scroll(function(){
    if ($(window).scrollTop() >= 200) {
        $('#Navigation').addClass('fixed-header');
        $('#main-footer').addClass('fixed-footer');
       
    }
    else {
        $('#Navigation').removeClass('fixed-header');
        $('#main-footer').removeClass('fixed-footer');
        
    }
});