
    
    /*!
     * @author JTissier <jtissier78@gmail.com>
     * date 12/19/2019
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
            $('footer').addClass('fixed-footer');
            
            
        }
        else {
            $('#Navigation').removeClass('fixed-header');
            $('footer').removeClass('fixed-footer');
            
        }

        if ($(window).scrollTop()>= $(window).height()*.05) {
            $('#Gen-Info').addClass('fixed-aside');
            $('#Main-Content').addClass('fixed-main');
            $('#Social-Card-Bloc').addClass('fixed-aside fixed-card');
            
        } else {
            $('#Gen-Info').removeClass('fixed-aside');
            $('#Main-Content').removeClass('fixed-main');
            $('#Social-Card-Bloc').removeClass('fixed-aside fixed-card');
            
        }

        
    });

    

    
