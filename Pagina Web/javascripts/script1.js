const enlaceFormulario = document.getElementById('enlaceFormulario');
const tituloContenedor = document.getElementById('tituloContenedor');
const formularioContenedor = document.getElementById('formularioContenedor');
const barraNavegacion = document.getElementById('navbarPaginaPrincipal');
const contenidoMenu = document.getElementById('menuNavbar');
const quienesSomos = document.getElementById('quienesSomos');
const altura = 50;

window.addEventListener('scroll', function () {
    if (barraNavegacion && window.scrollY > altura) {
        barraNavegacion.classList.add('cambioNavbar');
    } else {
        if (!contenidoMenu.classList.contains('show')) {
            barraNavegacion.classList.remove('cambioNavbar');
        }
    }
});

contenidoMenu.addEventListener('show.bs.collapse', function () {
    barraNavegacion.classList.add('cambioNavbar');
});

contenidoMenu.addEventListener('hide.bs.collapse', function () {
    if (window.scrollY <= altura) {
        barraNavegacion.classList.remove('cambioNavbar');
    }
});

function aparecerRecuadro(nombre, altura) {
    const recuadro = document.getElementById(nombre);
    if (!recuadro) return;
    const opciones = { root: null, rootMargin: `0px 0px ${altura}px 0px`, threshold: 0.1 };
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove('ocultar');
                entry.target.classList.add('aparecer');

                observer.unobserve(entry.target);
            }
        });
    }, opciones);
    observer.observe(recuadro);
}

document.addEventListener('DOMContentLoaded', () => {
    aparecerRecuadro("quienesSomos", -200);
    aparecerRecuadro("contenedor", -200);
});