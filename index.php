<!DOCTYPE html>

<html>
    <head>
        <title>Uplearning | Languaje center</title>
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
       <body onresize="recalcMenu()">
              
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
	
	<section class="main-slider" id="top">
	    
	    <div id="slider-frases" >
	    <h3 id="frase-slider"><span>Globalización,</span> ¿Un obstáculo? Meeeeeh! ;)</h3>
	    <h3 id="frase-slider">Te ayudamos a progresar en tu carrera <span>profesional</span></h3>
	    <h3 id="frase-slider"><span>Titulos oficiales,</span> demuestra tu valía</h3>
	    <h3 id="frase-slider">O qizás solo necesitas...<span> ¿ampliar fronteras?</span></h3>
	    </div>
	    
	    <div id="pantalla">
		<div id="imagen-slider">
		    
		</div>
	    </div>
	    
	</section>
	
	
	<section class="intro">
	    <h2>Team up with us!</h2>
	    
	    <p>UpLearning es tu centro especializado en enseñanza de idiomas a todos los niveles. Cursos, idiomas orientados al mundo de los negocios, viajes, intercambios, y preparación para los certificados y títulos oficiales de cada disciplina.
		Optamos por un sistema dinámico, entretenido y muy personal. Sin limitarnos únicamente a las aulas, con herramientas online de soporte y complementarias de lo más chulas.<br>  <span>Enseñamos y nos divertimos, hacemos alumnos y hacemos amigos.		
		    Que la enseñanza no sea rutina,<br>  ! ven a conocernos !</span></p>
	    
	    
	    <div class="fortalezas">
		<div class="fortaleza">
		    <img src="img/iconformula.jpg" alt="Formula-apredizaje">
		    <h6>Fórmula de aprendizaje</h6>
		    <p>Combinamos excelentes docentes con los mejores procedimientos y tecnologías de enseñanza.</p>
		</div>
		
		<div class="fortaleza">
		    <img src="img/icontitulo.jpg" alt="profesionales-certificados">
		    <h6>Pofesionales certificados</h6>
		    <p>Todos nuestros profesores son profesionales probados, titulados, y con amplia experiencia. </p>
		</div>
		
		<div class="fortaleza">
		    <img src="img/iconpartners.jpg" alt="partners-abroad">
		    <h6>Partners en el extranjero</h6>
		    <p>Contamos con socios del sector en diferentes países con los que llevamos a cabo nuestros porgramas "abroad".</p>
		</div>
		
		<div class="fortaleza">
		    <img src="img/icongraf.jpg" alt="seguimiento-personalizado">
		    <h6>Seguimiento personalizado</h6>
		    <p>Nos centramos en tí y en tu ritmo y problemas.!Incluso tendrás un informe de progreso actualizado al día!</p>
		</div>
		
	    </div>
	    
	    
	    
	</section>
	
	
	<section class="oferta-formativa">
	    <div class="square"></div>
	    
	    <div class="sub-oferta-formativa">
	    <h2>Nuestra oferta formativa</h2>
	    
	    <p>
		En UpLearning nos consideramos pioneros no solo en nuestros métodos sino también en la elección de las disciplinas lingüísticas que impartimos. Lenguajes con un enfoque a desenvolverse en el globo, seleccionamos los idiomas con más hablantes y también aquellos con mayor proyección de <span>futuro</span>, porque eso, es lo que queremos para tí =)
	    </p>
	    
	    <ul>
		<li><span>Inglés</span>, a todos los niveles, Desde iniciación hasta preparación de oposiciones y "Proficiency"</li>
		<li><span>Francés</span>, desde los primeros pasos hasta hablar como si hubieses nacido allí!.</li>
		<li><span>Alemán</span>, enseñanza a todos los niveles</li>
		<li><span>Chino</span>, el idioma con mas parlantes del mundo, iniciate o hazte un crack.</li>
		<li><span>Japonés</span>, enseñanza a nivel principiante y medio.</li>
		
	    </ul>
	    
	    </div>
	    <div class="sub-oferta-formativa2">
		<div class="businessman">
		    <div class="rombo-2"></div>
		    <div class="rombo-2"></div>
		    
		    
	    <img src="img/businessman2.png" alt="businessman" id="busi1">
	    <div class="ojos">
	    <div class="ojoleft">
		<div class="pupila"></div>
		<div class="pest"></div>
	    </div>
	    <div class="ojoright">
		<div class="pupila"></div>
		<div class="pest"></div>
	    </div>
	    </div>
	    </div>
	     <div class="btn" id="btniman">Nuestros Cursos</div>
	    
		
		
		
	   
	    </div>
	    
	</section>
    
    
    <section class="statistics">
	<div class="square"></div>
	<p>No solo vivimos de idiomas y letras! En UpLearning, nuestros números también nos definen, cada vez somos más amigos, cada vez lo pasamos mejor, y cada vez somos más "mundiales"</p>
	<div class="grafs">
	<div class="statistic">
	    <div class="graf">
		<div class="subgraf">
		    <div class="subsubgraf">
			<span>930</span><br>
			Alumnos totales
		    </div>
		</div>
	    </div>
	</div>
	
	
	
	<div class="statistic">
	    <div class="graf">
		<div class="subgraf">
		    <div class="subsubgraf">
			<span>245</span><br>
			Titulados con éxito
		    </div>
		</div>
	    </div>
	</div>
	
	
	
	<div class="statistic">
	    <div class="graf">
		<div class="subgraf">
		    <div class="subsubgraf">
			<span>267</span><br>
			Alumnos matriculados
		    </div>
		</div>
	    </div>
	</div>
	    
	    
	    <div class="businessman2">
	    <img id="teacher" src="img/businessman3.png" alt="teacher-dashboard"/>
	    <div class="ojos">
	    <div class="ojoleft">
		<div class="pupila"></div>
		<div class="pest"></div>
	    </div>
	    <div class="ojoright">
		<div class="pupila"></div>
		<div class="pest"></div>
	    </div>
	    </div>
	    </div>
	    
	    
	     
	    </div>
	    
	
	
	   
	
	
	
	
	
	
    </section>
    
	
	<section class="que-necesitas">
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <div class="circleground"></div>
	    <h2>¿Qué necesitas?</h2>
	    
	    <div class="clouds">
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    <div id="cloud"></div>
	    </div>
	    <div class="needs">
		
	    <div class="need">
		<img src="img/idiomasicon.png" alt=""/>
		<div class="subneed">
		<h4>Idiomas</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
		</div>
	    </div>
		
		<div class="need">
		<img src="img/certificon.png" alt=""/>
		<div class="subneed">
		<h4>Certificaciones oficiales</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
		</div>
	    </div>
	    
	    <div class="need">
		<img src="img/iconbusiness.png" alt=""/>
		<div class="subneed">
		<h4>Idiomas-business</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
		</div>
	    </div>
	    
	    
	    
	    <div class="need">
		<img src="img/iconabroad.png" alt=""/>
		<div class="subneed">
		<h4>Programas en el extranjero</h4>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
		</div>
	    </div>
	    </div>
	    
	    
	    
	    
	    
	    
	    
	    
	</section>
	
	<section class="contact-form">
	    
	    <div class="container-sun">
<svg class="svg-sun" version="1.1" viewBox="0 0 100 100" preserveAspectRatio="xMinYMin meet">
<circle cx="50" cy="50" r="35" id="sun"></circle>
</svg>
</div>
	    
	    <h2>¡Pregúntanos!</h2>
	    <div class="form">
	    <form>
		<input type="text" placeholder="Nombre" name="nombre" required>
		<input type="email" placeholder="Email" name="email" required>
		<textarea name="texto" placeholder="Mensaje"></textarea>
		<input type="submit" class="btn" value="Enviar">
	    </form>
	    </div>
	    
	</section>
    <section class="city">
	<img src="img/businessman4.png" id="runner" alt=""/>
	<img src="img/madridskyred.png" alt=""/>
	
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
			
			if ($(this).scrollTop() > 200) $('.main-slider').addClass("marginheader").fadeIn();
			else $('nav').removeClass("fixed");
		});
</script>
<script src="js/codigo.js" type="text/javascript"></script>

<script src="js/SmoothScroll.js"></script>
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
