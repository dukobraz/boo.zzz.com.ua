<div id="block-footer">
<!-- HotLog -->
<script src="bootstrap/js/bootstrap.min.js"></script> 




<script>jQuery(window).scroll(function() { 
    var the_top = jQuery(document).scrollTop();
    
if(window.innerWidth>991 && window.innerWidth<2000)
{
    if (the_top > 100) {
        jQuery('#header-menu').addClass('header-menu-fixed');
    }
    else {
        jQuery('#header-menu').removeClass('header-menu-fixed');
    }
}
if(window.innerWidth>767 && window.innerWidth<992)
{
    if (the_top > 200) {
        jQuery('#header-menu').addClass('header-menu-fixed');
    }
    else {
        jQuery('#header-menu').removeClass('header-menu-fixed');
    }
}
if(window.innerWidth<768)
{
    if (the_top > 270) {
        jQuery('#header-menu').addClass('header-menu-fixed');
    }
    else {
        jQuery('#header-menu').removeClass('header-menu-fixed');
    }
}

})
</script> 



<!-- /HotLog -->
<script>





$('#hamburger').on("click", function() {
               $('#menu_0').toggleClass('d-none');
               $('#menu_1').toggleClass('d-none');
               $('#menu_1').toggleClass('d-md-block');
               $('#menu_2').toggleClass('d-none');
               $('#menu_2').toggleClass('d-md-block');
               $('#menu_3').toggleClass('d-none');
               $('#menu_3').toggleClass('d-md-block');
               $('#menu_4').toggleClass('d-none');
               $('#menu_4').toggleClass('d-md-block');
               $('#menu_5').toggleClass('d-none');
               $('#menu_5').toggleClass('d-md-block');
                
              if ( $("#window2").hasClass("openwindow") ) {
               $('#window2').toggleClass('closewindow');
               $('#window2').toggleClass('openwindow');
           }
           if ( $("#window3").hasClass("openwindow") ) {
               $('#window3').toggleClass('closewindow');
               $('#window3').toggleClass('openwindow');
           }
           if ( $("#window4").hasClass("openwindow") ) {
               $('#window4').toggleClass('closewindow');
               $('#window4').toggleClass('openwindow');
           }
           if ( $("#window1").hasClass("openwindow") ) {
               $('#window1').toggleClass('closewindow');
               $('#window1').toggleClass('openwindow');
           }

                })



 $('#menu_1').on("click", function() {
            if ( $("#window2").hasClass("openwindow") ) {
               $('#window2').toggleClass('closewindow');
               $('#window2').toggleClass('openwindow');
           }
           if ( $("#window3").hasClass("openwindow") ) {
               $('#window3').toggleClass('closewindow');
               $('#window3').toggleClass('openwindow');
           }
           if ( $("#window4").hasClass("openwindow") ) {
               $('#window4').toggleClass('closewindow');
               $('#window4').toggleClass('openwindow');
           }
        

            if ( $("#menu_2").hasClass("menu_active") ) {
             $('#menu_2').toggleClass('menu_active');
         }
         if ( $("#menu_3").hasClass("menu_active") ) {
             $('#menu_3').toggleClass('menu_active');
         }
         if ( $("#menu_4").hasClass("menu_active") ) {
             $('#menu_4').toggleClass('menu_active');
         }

         $('#menu_1').toggleClass('menu_active');
         $('#window1').toggleClass('closewindow');
         $('#window1').toggleClass('openwindow');
     })

 $('#menu_2').on("click", function() {
            if ( $("#window1").hasClass("openwindow") ) {
               $('#window1').toggleClass('closewindow');
               $('#window1').toggleClass('openwindow');
           }
           if ( $("#window3").hasClass("openwindow") ) {
               $('#window3').toggleClass('closewindow');
               $('#window3').toggleClass('openwindow');
           }
           if ( $("#window4").hasClass("openwindow") ) {
               $('#window4').toggleClass('closewindow');
               $('#window4').toggleClass('openwindow');
           }
        

            if ( $("#menu_1").hasClass("menu_active") ) {
             $('#menu_1').toggleClass('menu_active');
         }
         if ( $("#menu_3").hasClass("menu_active") ) {
             $('#menu_3').toggleClass('menu_active');
         }
         if ( $("#menu_4").hasClass("menu_active") ) {
             $('#menu_4').toggleClass('menu_active');
         }

         $('#menu_2').toggleClass('menu_active');
         $('#window2').toggleClass('closewindow');
         $('#window2').toggleClass('openwindow');
     })

 $('#menu_3').on("click", function() {
            if ( $("#window1").hasClass("openwindow") ) {
               $('#window1').toggleClass('closewindow');
               $('#window1').toggleClass('openwindow');
           }
           if ( $("#window2").hasClass("openwindow") ) {
               $('#window2').toggleClass('closewindow');
               $('#window2').toggleClass('openwindow');
           }
           if ( $("#window4").hasClass("openwindow") ) {
               $('#window4').toggleClass('closewindow');
               $('#window4').toggleClass('openwindow');
           }
        

            if ( $("#menu_1").hasClass("menu_active") ) {
             $('#menu_1').toggleClass('menu_active');
         }
         if ( $("#menu_2").hasClass("menu_active") ) {
             $('#menu_2').toggleClass('menu_active');
         }
         if ( $("#menu_4").hasClass("menu_active") ) {
             $('#menu_4').toggleClass('menu_active');
         }

         $('#menu_3').toggleClass('menu_active');
         $('#window3').toggleClass('closewindow');
         $('#window3').toggleClass('openwindow');
     })

$('#menu_4').on("click", function() {
            if ( $("#window1").hasClass("openwindow") ) {
               $('#window1').toggleClass('closewindow');
               $('#window1').toggleClass('openwindow');
           }
           if ( $("#window2").hasClass("openwindow") ) {
               $('#window2').toggleClass('closewindow');
               $('#window2').toggleClass('openwindow');
           }
           if ( $("#window3").hasClass("openwindow") ) {
               $('#window3').toggleClass('closewindow');
               $('#window3').toggleClass('openwindow');
           }
        

            if ( $("#menu_1").hasClass("menu_active") ) {
             $('#menu_1').toggleClass('menu_active');
         }
         if ( $("#menu_2").hasClass("menu_active") ) {
             $('#menu_2').toggleClass('menu_active');
         }
         if ( $("#menu_3").hasClass("menu_active") ) {
             $('#menu_3').toggleClass('menu_active');
         }

         $('#menu_4').toggleClass('menu_active');
         $('#window4').toggleClass('closewindow');
         $('#window4').toggleClass('openwindow');
     })
     
 </script>
<script>


$('#block_content').on("click", function() {
              
          if ( $("#menu_0").hasClass("d-none") ) {
              
           }else{
               $('#menu_0').toggleClass('d-none');
               $('#menu_1').toggleClass('d-none');
               $('#menu_1').toggleClass('d-md-block');
               $('#menu_2').toggleClass('d-none');
               $('#menu_2').toggleClass('d-md-block');
               $('#menu_3').toggleClass('d-none');
               $('#menu_3').toggleClass('d-md-block');
               $('#menu_4').toggleClass('d-none');
               $('#menu_4').toggleClass('d-md-block');
               $('#menu_5').toggleClass('d-none');
               $('#menu_5').toggleClass('d-md-block');
           }


          
                
              if ( $("#window2").hasClass("openwindow") ) {
               $('#window2').toggleClass('closewindow');
               $('#window2').toggleClass('openwindow');
           }
           if ( $("#window3").hasClass("openwindow") ) {
               $('#window3').toggleClass('closewindow');
               $('#window3').toggleClass('openwindow');
           }
           if ( $("#window4").hasClass("openwindow") ) {
               $('#window4').toggleClass('closewindow');
               $('#window4').toggleClass('openwindow');
           }
           if ( $("#window1").hasClass("openwindow") ) {
               $('#window1').toggleClass('closewindow');
               $('#window1').toggleClass('openwindow');
           }
          if ( $("#window5").hasClass("openwindow") ) {
               $('#window5').toggleClass('closewindow');
               $('#window5').toggleClass('openwindow');
           }

                })

</script>
</div>