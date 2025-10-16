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
    const quienesSomosElement = document.getElementById('quienesSomos');
    
    if (!quienesSomosElement) return;

    const opciones = {
        root: null, 
        rootMargin: '0px 0px -100px 0px', 
        threshold: 0.1
    };

    // La función callback del observador debe tener la sintaxis correcta
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Cuando es visible:
                // 1. Quitar la clase de estado inicial (oculto/ocultar)
                entry.target.classList.remove('ocultar'); 
                // 2. Aplicar la clase que activa la animación
                entry.target.classList.add('aparecer');
                
                // Dejar de observar para que la animación no se repita
                observer.unobserve(entry.target);
            }
        });
    }, opciones); // Aquí pasamos las opciones

    // Empezamos a observar el elemento
    observer.observe(quienesSomosElement);
});