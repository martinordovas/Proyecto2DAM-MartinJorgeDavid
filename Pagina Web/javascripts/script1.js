const enlaceFormulario = document.getElementById('enlaceFormulario');
const tituloContenedor = document.getElementById('tituloContenedor');
const formularioContenedor = document.getElementById('formularioContenedor');
const barraNavegacion = document.getElementById('navbarPaginaPrincipal');
const contenidoMenu = document.getElementById('menuNavbar');
const quienesSomos = document.getElementById('quienesSomos');
const altura = 50;

window.addEventListener('scroll', function() {
    if (barraNavegacion && window.scrollY > altura) {
        barraNavegacion.classList.add('cambioNavbar');
    } else {
        if (!contenidoMenu.classList.contains('show')) {
            barraNavegacion.classList.remove('cambioNavbar');
        }
    }
});

contenidoMenu.addEventListener('show.bs.collapse', function() {
    barraNavegacion.classList.add('cambioNavbar');
});

contenidoMenu.addEventListener('hide.bs.collapse', function() {
    if (window.scrollY <= altura) {
        barraNavegacion.classList.remove('cambioNavbar');
    }
});

document.addEventListener('DOMContentLoaded', () => {
    if (!quienesSomos) return;
    const opciones = {root: null, rootMargin: '0px 0px -100px 0px', threshold: 0.1};
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('ocultar'); 
                entry.target.classList.add('aparecer');
                
                observer.unobserve(entry.target);
            }
        });
    }, opciones);
    observer.observe(quienesSomos);

    if (enlaceFormulario && tituloContenedor && formularioContenedor){
        enlaceFormulario.addEventListener('click', function(event) {
            event.preventDefault();
            if(!formularioContenedor.classList.contains('formulario-aparecer')){
                tituloContenedor.style.opacity = '0';
                formularioContenedor.classList.add('formulario-aparecer');
                setTimeout(() => {
                    formularioContenedor.scrollIntoView({
                        behavior: 'smooth',
                        block: 'center'
                    });
                }, 500);
            }
        });
    }
});