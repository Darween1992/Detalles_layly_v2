document.addEventListener('DOMContentLoaded', function(){

EventListener();

darkMode();


});

function darkMode(){
    const botonDarkMode = document.querySelector('.dark-mode-boton');
    botonDarkMode.addEventListener('click',function(){
        document.body.classList.toggle('dark-mode');
    })
}

function EventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.header-contenido-barra');
    if (navegacion.classList.contains('mostrar')){
        navegacion.classList.remove('mostrar');
    }else{
        navegacion.classList.add('mostrar');
    }
}