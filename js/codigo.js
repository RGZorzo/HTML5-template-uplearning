
//Mostramos el menu al accionar el boton del header y rotamos el icono.

var btn_menu = document.getElementById("btn_menu");

var viewport = document.getElementById("viewport");
var mascara = document.getElementById("mascara");
var iconmenu = document.getElementById("btn_menu");


btn_menu.onclick = moverViewport;

function moverViewport(){
    
//    FUNCION Y CONDICIONAL PARA CAMBIAR DESPLAZAMIENTO DEL VIEWPORT SEGÚN EL ANCHO VARIABLE DEL MENU CON LAS MEDIQUERIES PARA MÓVILES
    
    if(window.innerWidth<550){
	viewport.style.right = "250px";
    }else{
	viewport.style.right = "350px";
    }
    
    mascara.style.display ="block";
    iconmenu.className = iconmenu.className + " rotated";
}

mascara.onclick = function(){
    viewport.style.right = "0px";
    mascara.style.display ="none";
    iconmenu.className = iconmenu.className = "icon-menu";
}

//Funcion para llamar a la animacion de rayos del iman cuando se esta sobre el boton de cursos

var btniman = document.getElementById("btniman");
var rombos = document.getElementsByClassName("rombo-2");
console.log(rombos);

btniman.onmouseover = rayos;
btniman.onmouseout = rayosOut;

function rayos(){
    rombos[0].className += " imantado";
    rombos[1].className += " imantado";
}
function rayosOut(){
    rombos[0].className = "rombo-2";
    rombos[1].className = "rombo-2";
}


//Funciones de slider principal para pantalla y frase


var fondo = document.getElementById("pantalla");
var imagen = document.getElementById("imagen-slider");
var frase = document.getElementById("frase-slider");


var listadoFotos= new Array("img/cr-globo.png","img/cr-manos.png","img/cr-diploma.png","img/cr-rosas.png");

var contador=0;

var animacionfoto=setInterval(cambiarFondo,6000);

function cambiarFondo(){
    contador++;
    if( contador == listadoFotos.length){
        contador=0;
    }
    imagen.style.background = "url("+listadoFotos[contador]+") no-repeat center";
    imagen.style.backgroundSize = "cover";
}


//SLIDER FRASES___________________

var slider_frases = document.getElementById("slider-frases");
var animacionfrase = setInterval(cambiarFoto,6000);

var pos_left=0;


function cambiarFoto(){
    pos_left += 100;
    if(pos_left == (400) ){
        pos_left=0;
        slider_frases.className = "";
    }else{
         slider_frases.className = "slider_animate";
    }
    slider_frases.style.left = "-"+pos_left+"%";
    
    
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Eventos
slider_frases.onmouseover = function(){
    clearInterval(animacionfoto);
    clearInterval(animacionfrase);
}
slider_frases.onmouseout = function(){
    animacionfoto = setInterval(cambiarFondo,6000);
    animacionfrase = setInterval(cambiarFoto,6000);
}


//CÓDIGO ORIENTADO A REMOVER IMÁGENES PESADAS Y POCO FUNCIONALES DEL HTML EN DISPOSITIVOS MÓVILES

var busi1 = document.getElementById("busi1");
var busi2 = document.getElementById("teacher");

//UNCOMMENT PARA APLICARSE (DESACTIVADO POR DEFECTO PORQUE NO RECARGA LAS IMAGENES AL HACER RESIZE EN ORDENADORES, PERO BUENA PARA EVITAR CARGAS PESADAS EN MOVILES)


//removeImgs();
//function removeImgs(){
//    if(window.innerWidth<1200){
//    //    Remover al businessman del iman
//	busi1.src="";
//    }else{
//	
//	busi1.src="img/businessman2.png";
//    }
//    
//    if(window.innerWidth<1080){
//
//    //    Remover al businessman de la pizarra
//	busi2.src="";
//    }else{
//	busi2.src="img/businessman3.png";
//    }
//}



//FUNCION DE CONTACT.PHP PARA ESCONDER/MOSTRAR FORMULARIO, MASK, E IFRAME DE GOOGLE MAPS____________________________________________________//------------------------>(con JQuery al final de body)





