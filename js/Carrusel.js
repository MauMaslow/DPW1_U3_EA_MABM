
   window.onload = function () {
    // Variables
    const IMAGENES = [
        '../img/101.jpg',        
        '../img/C1.jpg',
        '../img/C2.jpg',
        '../img/C3.jpg',
        '../img/C4.jpg',
        '../img/C5.jpg',
        '../img/103.jpg'
    ];
    const Tiempo = 4000;
    let posicionActual = 0;
    let $botonRetroceder = document.querySelector('#retroceder');
    let $botonAvanzar = document.querySelector('#avanzar');
    let $imagen = document.querySelector('#imagen');
    let $botonPlay = document.querySelector('#play');
    let $botonStop = document.querySelector('#stop');
    let intervalo;

    // Funciones

    /**
     * Funcion que cambia la foto en la siguiente posicion
     */
    function pasarFoto() {
        if(posicionActual >= IMAGENES.length - 1) {
            posicionActual = 0;
        } else {
            posicionActual++;
        }
        renderizarImagen();
    }

    /**Funcion que cambia la foto en la anterior posicion*/
    function retrocederFoto() {
        if(posicionActual <= 0) {
            posicionActual = IMAGENES.length - 1;
        } else {
            posicionActual--;}
        renderizarImagen();
    }

    /**Funcion que actualiza la imagen de imagen dependiendo de posicionActual */
    function renderizarImagen () {
        $imagen.style.backgroundImage = `url(${IMAGENES[posicionActual]})`;
    }

    /**Activa el autoplay de la imagen*/
    function playIntervalo() {
        intervalo = setInterval(pasarFoto, Tiempo);
        // Desactivamos los botones de control
        $botonAvanzar.setAttribute('disabled', true);
        $botonRetroceder.setAttribute('disabled', true);
        $botonPlay.setAttribute('disabled', true);
        $botonStop.removeAttribute('disabled');
    }

    /**Para el autoplay de la imagen*/
    function stopIntervalo() {
        clearInterval(intervalo);
        // Activamos los botones de control
        $botonAvanzar.removeAttribute('disabled');
        $botonRetroceder.removeAttribute('disabled');
        $botonPlay.removeAttribute('disabled');
        $botonStop.setAttribute('disabled', true);
    }

    // Eventos
document.getElementById("avanzar").onclick=pasarFoto;
document.getElementById("retroceder").onclick=retrocederFoto;
document.getElementById("play").onclick=playIntervalo;
document.getElementById("stop").onclick=stopIntervalo;
renderizarImagen();


   setInterval(function(){
    pasarFoto();
   },8000);

//Descripción ONMAUSEOVER

document.getElementById("detalle1").onmouseover = function (){alert("Información de Caja de Arena para gato es un producto donde su mascota se sentira super bien!!! :3");};
document.getElementById("detalle2").onmouseover = function (){alert("Información de Rascadora para gato es un producto donde Se ahorrará las reparaciones del hogar");};
document.getElementById("detalle3").onmouseover = function (){alert("Información de Juguete en forma de Ratón para su gato horas de gran entretenimiento!!! :3");};
document.getElementById("detalle4").onmouseover = function (){alert("Información de Cama acolchonada para su gato garantiza reposo, satisfacción y un gran descanso -_O");};
document.getElementById("detalle5").onmouseover = function (){alert("Información de Disfraz de Vampiro sea aclamado y adorado por el público");};
document.getElementById("detalle6").onmouseover = function (){alert("Información de Alimento para gato diversidad de alimentos gourmet para su mascota favorita");};










}
