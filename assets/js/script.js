jQuery(document).ready(function(){
    jQuery('.slider').bxSlider({
     pager: false
    });
  
});

jQuery(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				jQuery(".group1").colorbox({rel:'group1'});

            });
            
            jQuery(document).ready(function() {
                jQuery('.owl-carousel').owlCarousel({
                  loop: true,
                  margin: 10,
                  responsiveClass: true,
                  responsive: {
                    0: {
                      items: 1,
                      nav: true
                    },
                    600: {
                      items: 6,
                      nav: false
                    },
                    1000: {
                      items: 6,
                      nav: true,
                      loop: false,
                      margin: 20
                    }
                  }
                })
              })