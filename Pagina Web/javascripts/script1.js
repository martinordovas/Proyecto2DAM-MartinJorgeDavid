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

document.addEventListener('DOMContentLoaded', function() {
    const toastElement = document.getElementById('liveToast');
    if (toastElement) {
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
    }
});

function conseguirCookie(nombre){
    const valor = `; ${document.cookie}`
    const partes = valor.split(`; ${nombre}=`);
    if (partes.length === 2) return partes.pop().split(';').shift();
    return null;
}

document.addEventListener('DOMContentLoaded', () => {
    aparecerRecuadro("quienesSomos", -100);
    aparecerRecuadro("contenedor", -100);
    aparecerRecuadro("contenedorDescarga1", -200);
    aparecerRecuadro("contenedorDescarga2", -200);
    aparecerRecuadro("contenedorDescarga3", -200);
    const sesionActiva = conseguirCookie('sesion_activa');
    const enlaceInicioSesion = document.getElementById('enlaceFormulario');
    const enlaceCerrarSesion = document.getElementById('enlaceCerrarSesion');
    if (sesionActiva === 'true') {
        if(enlaceInicioSesion){
            enlaceInicioSesion.style.display = 'none';
        }
        if(enlaceCerrarSesion){
            enlaceCerrarSesion.style.removeProperty('display');
        }
    }
    else {
        if(enlaceCerrarSesion){
            enlaceCerrarSesion.style.display = 'none'
        }
    }
});