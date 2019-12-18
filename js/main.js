/**
 * Slider for social card
 */
$('#slider').lightSlider({
    gallery: true,
    item: 1,
    loop: true,
    slideMargin: 1,
    thumbItem: 9
});


/*!
 * @author JTissier <jtissier78@gmail.com>
 * date 12/17/2019
 * Change classe around scroll value.
 * 
 * Code pull from codepen.com bu Jaun Gallardo.
 */
$(window).scroll(function(){


    if ($(window).scrollTop() >= $('#Information').height()) {
        $('#Navigation').addClass('fixed-header');
       
        
        
    }
    else {
        $('#Navigation').removeClass('fixed-header');
 
        
    }

    if ($(window).scrollTop()>= $(window).height()*.05) {
        $('aside').addClass('fixed-aside');
        $('#Main-Content').addClass('fixed-main');
        $('#Social-Card-Bloc').addClass('fixed-card');
        
    } else {
        $('aside').removeClass('fixed-aside');
        $('#Main-Content').removeClass('fixed-main');
        $('#Social-Card-Bloc').removeClass('fixed-card');
        
    }

    
});