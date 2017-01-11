    <footer>
        <div class="container">
        <div class="row">
            <nav class="nav-pie">
              <div class="main-nav-footer wow fadeInUp">
                 <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
              </div>
            </nav>
<!--      <nav>
        <ul class="legal-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'legal' ) ); ?>
        </ul>
      </nav>-->
       </div>
        </div>
        <div class="sidebars-pie">
            <div class="container">
            <div class="row">
                    <div class="col-sm-4 wow fadeInUp">
                        <?php dynamic_sidebar('Telefonos'); ?>
                    </div>
                    <div class="col-sm-4 wow fadeInUp">
                        <?php dynamic_sidebar('Redes'); ?>
                    </div>
                    <div class="col-sm-4 wow fadeInUp">
                        <?php dynamic_sidebar('Copy'); ?> 
                    </div>
        
            </div>
            </div>
        </div>
    </footer>


<a href="#" id="back-to-top" title="Subir"><span class="glyphicon glyphicon-chevron-up"></span></a>

    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.min.js"  ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js" ></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" ></script>

<!--Menu-->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.js" ></script>
<script type="text/javascript">
    new WOW().init();
$(document).ready(function(){
	$('#menu-menu-principal').slicknav();
    
    if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
                $('.red-top').addClass('red-top-fixed');
            } else {
                $('#back-to-top').removeClass('show');
                $('.red-top').removeClass('red-top-fixed');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}  
    
});
</script>

<!--Fin Menu-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
<!-- Estadisticas -->

<script type="text/javascript">
	(function ($) {
		"use strict";
		function count($this){
		var current = parseInt($this.html(), 10);
		current = current + 10; 	
		$this.html(++current);
			if(current > $this.data('count')){
				$this.html($this.data('count'));
			} else {    
				setTimeout(function(){count($this)}, 50);
			}
		}        	
		$(".stat-count").each(function() {
		  $(this).data('count', parseInt($(this).html(), 10));
		  $(this).html('0');
		  count($(this));
		});  
   })(jQuery);
   </script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexisel.js" ></script>
<script type="text/javascript">

$(window).load(function() {
    $("#carrusel-testimonio").flexisel({
        visibleItems: 3,
        itemsToScroll: 1,
        animationSpeed: 600,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: false,
            interval: 5000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });    
    $("#carrusel-clientes").flexisel({
        visibleItems: 4,
        itemsToScroll: 1, 
        animationSpeed: 500,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 4000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });
    $("#carrusel-apps").flexisel({
        visibleItems: 1,
        itemsToScroll: 1, 
        animationSpeed: 500,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 4000,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });
    $("#carrusel-redes").flexisel({
        visibleItems: 1,
        itemsToScroll: 1, 
        animationSpeed: 500,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 3800,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });
    $("#carrusel-web").flexisel({
        visibleItems: 1,
        itemsToScroll: 1, 
        animationSpeed: 500,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 4500,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });
    $("#carrusel-seo").flexisel({
        visibleItems: 1,
        itemsToScroll: 1, 
        animationSpeed: 500,
        infinite: true,
        navigationTargetSelector: null,
        autoPlay: {
            enable: true,
            interval: 3950,
            pauseOnHover: true
        },
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1,
                itemsToScroll: 1
            }, 
            landscape: {  
                changePoint:640,
                visibleItems: 2,
                itemsToScroll: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 3,
                itemsToScroll: 3
            }
        }
    });
}); 
</script>
 




<!-- Estadisticas -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js" ></script>
<!--PORTAFOLIO -->

<script type="text/javascript">
	$(function () {
		var filterList = {
			init: function () {
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.webs, .ecommerce, .seo, .redessp, .email, apps, .appsweb'  
      		}     
				});								
			
			}

		};
		// Run the show!
		filterList.init();
	});	
</script>




    <?php wp_footer(); ?>
<div class="contactenos">
    <form>
    <label for="nombre">Nombre*</label>
    <input type="text" id="nombre" name="nombre" required >
    <label for="correo">Correo electrónico*</label>
    <input type="email" id="correo" name="correo" required >
    <label for="asunto">Asunto*</label>
    <input type="text" id="asunto" name="asunto" required >
    <label for="telefono">Teléfono*</label>
    <input type="tel" id="telefono" name="telefono" required >
    <label for="proyecto">Cotice su proyecto*</label>
    <select name="proyecto" id="proyecto">
        <option value=""></option>
        <option value="Diseño Web">Diseño Web</option>
        <option value="Posicionamiento Seo">Posicionamiento Seo</option>
        <option value="Email marketing">Email marketing</option>
        <option value="Redes Sociales">Redes Sociales</option>
        <option value="Hosting">Hosting</option>
        <option value="Otro">Otro</option>
    </select>
    <label for="mensaje">Mensaje*</label><textarea id="mensaje" name="mensaje"></textarea>
    <label>
    <input type="checkbox" name="copia" id="copia" > Enviar una copia del mensaje a  mi e-mail </label>
    <input class="enviar" type="submit" value="Enviar" >
    </form>
    <a class="celular-mk" href="tel:3132497917"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>  + (57) 313 249 7917 </a>
</div>

<!--<div class="visitanos"><a href="http://marketerosweb.website/marketeros-web/site/contactenos/">Visítanos</a></div>-->

<div class="mouse-scroll js-mouse-scroll" style="margin-top: -40px; opacity: 1;">
            <div class="mouse-scroll-text">Scroll</div>
            <div class="mouse-scroll-anim"></div>
</div>
  </body>
</html>