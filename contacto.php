<!DOCTYPE html>

<html>
    <head>
        <title>Uplearning | Contacto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="UpLearning es tu centro especializado en enseñanza de idiomas a todos los niveles, cursos, viajes y preparación para certificados y títulos oficiales." />
	<meta name="keywords" content="academia idiomas, aprender ingles, aprender frances, aprender aleman, aprender chino, aprender japones" />
	<link rel="shortcut icon" href="">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>
	<link href="css/media.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}

		body {
			max-width: 700px;
			margin: 0 auto;
		}
	</style>
       </head>
       <body onresize="recalcMenu()" id="contactbody">
	   
	   
              
              <!--Menu lateral-->
              <div id="menu">
                     <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="nosotros.html">Nosotros</a></li>
                            <li><a href="contacto.php">Contacto</a></li>
                     </ul>
		  <div class="gallery">
		      <a class="fancybox" href="img/academia-gallery1.jpg" data-fancybox-group="gallery" title="Bienvenidos a Uplearning!"><img src="img/academia-gallery1.jpg" alt=""/></a>

		<a class="fancybox" href="img/academia-gallery2.jpg" data-fancybox-group="gallery" title="Nuestra recepción!"> <img src="img/academia-gallery2.jpg" alt=""/></a>

		<a class="fancybox" href="img/academia-gallery3.jpg" data-fancybox-group="gallery" title="Aulas preparadas eventos en grupo"><img src="img/academia-gallery3.jpg" alt=""/></a>

		<a class="fancybox" href="img/academia-gallery4.jpg" data-fancybox-group="gallery" title="Entre clase y clase...relax!"><img src="img/academia-gallery4.jpg" alt=""/></a>
		  </div>
		  <div class="media">
		      <i class="icon-facebook"></i>
		      <i class="icon-twitter"></i>
		  </div>
		  
		  
		  
              </div>
              <!--Cierre de menu-->
              <div id="mascara"></div>
              
              <!--Cabecera---->
<div id="viewport">	      
	    <header>
                            <div class="main">
                                   <div id="btn_menu" class="icon-menu"></div>
				   <img src="img/logo3.png">
                                   <a href="index.php"><h1>Uplearning</h1></a>
                            </div>
            </header>
	
	<section class="contact-form second"  id="top">
	    
	    <div class="frasecontacto" >
		<img src="img/logo3.png" alt="logouplearning">
		<p>¿A qué esperas? Anímate a preguntarnos cualquier cosilla; Teléfono, Mail, Fax, visitándonos...o por señales de humo! =)</p>
		
	    </div>
	    
	    
	    <div class="contact-data">
		
		<ul>
		    
		    <li> <img src="img/iconphoneflat.jpg" alt=""/><br><span>+34 889 543 624</span></li>
		    
		    <li><img src="img/iconmailflat.jpg" alt=""/><br><span>hello@uplearning.com</span></li>
		    
		    <li><img src="img/iconfaxflat.jpg" alt=""/><br><span>+34 800 987 328</span></li>
		</ul>
	    </div>
		<div class="adress">Calle de la Povedilla número 4 | 28009 | Madrid, España</div>
		

	 </section>
    <section class="city paris">
	
	<div class="mask-map" id="mask-map"></div>
	
	<div class="icon-cog" id="clickerMap"></div>
	
	<div class="maincontact" id="maincontact">
	    
	    <form>
		<input type="text" placeholder="Nombre" name="nombre" required>
		<input type="email" placeholder="Email" name="email" required>
		<textarea name="texto" placeholder="Mensaje"></textarea>
		<input type="submit" class="btn" value="Enviar">
	    </form>
	    </div>  
	
	
	
	
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12149.451238156438!2d-3.6764567549392724!3d40.42296451451593!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228afd0c69f91%3A0xbc1edefe9f43c656!2sCalle+de+la+Povedilla%2C+4%2C+28009+Madrid!5e0!3m2!1ses!2ses!4v1425831848286" width="1024" height="768" frameborder="0" style="border:0"></iframe>
	 <img src="img/madridblack.png" alt="" id="york"/>
	<img src="img/businessman4.png" id="runner" alt=""/>
	
	
    </section>

	 
	<footer>
	       
	    <div class="groundline"></div>
	    <a href="#top"><div class="circletop">^</div></a>
	    <div class="subfooter1">
		<div class="col">
		    <h5>UpLearning</h5>
		    <p>UpLearning es tu centro especializado en enseñanza de idiomas a todos los niveles. Cursos, idiomas orientados al mundo de los negocios, viajes, intercambios, y preparación para los certificados y títulos oficiales de cada disciplina.</p>
		</div>
		<div class="col">
		    <h5>Nuestro método</h5>
		    <p>Optamos por un sistema dinámico, entretenido y muy personal. Sin limitarnos únicamente a las aulas, con herramientas online de soporte y complementarias de lo más chulas. <span>Enseñamos y nos divertimos, hacemos alumnos y hacemos amigos.</p>
		</div>
		
		<div class="col">
		    <h5>Top UpLearning</h5>
		    <ul>
			<li>1º / Inglés</li>
			<li>2º / Alemán</li>
			<li>3º / Chino <span>↑</span></li>
			<li>4º / Francés <span>↓</span></li>
			<li>5º / Japonés
			
		    </ul>
		</div>
		
		<div class="col">
		    <h5>Be social my friend!</h5>
		    <div class="subcol">
			<i class="icon-facebook"></i>
			<i class="icon-twitter"></i>
			<i class="icon-mail-1"></i>
		    </div>
		</div>
		
		
		
	    </div>
	    
	    <div class="subfooter">
		
		<div class="copy">© 2014 Desarrollado y diseñado por Ricardo Gª Zorzo.<br><a href="https://www.ricardozorzo.com" target="_blank"><span>www.ricardozorzo.com</span></a></div>
		
		<div class="scrollup"></div>
	    </div>
	    
	</footer>
	
	
	
</div>	
cript>
<script>
    $(window).scroll(function()
		{
			if ($(this).scrollTop() > 200) $('header').addClass("fixed").fadeIn();
			
			if ($(this).scrollTop() > 200) $('.frasecontacto').addClass("margincontact").fadeIn();
			else $('nav').removeClass("fixed");
		});
</script>
<script src="js/codigo.js" type="text/javascript"></script>

<script src="js/SmoothScroll.js"></script>
<script type="text/javascript">
	$(document).ready(function()
	    {
	    $("#clickerMap").click(function () {	 
	        $('#mask-map').toggle();
	         });
	    $("#clickerMap").click(function () {	 
	        $('#maincontact').toggle();
	         });
	    
		 $("#clickerMap").click(function(){
		    if ($(this).hasClass('animate-clicker')){
			$('#clickerMap').removeClass("animate-clicker");
		    }else{
			$('#clickerMap').addClass("animate-clicker");
		    }
		});
	    });
</script>
<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 2000);
        return false;
      }
    }
  });
});
</script>

    </body>
</html>