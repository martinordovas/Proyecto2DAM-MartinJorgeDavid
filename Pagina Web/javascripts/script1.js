const barraNavegacion = document.getElementById('navbarPaginaPrincipal');
const contenidoMenu = document.getElementById('menuNavbar');
const altura = 50;

function comprobarScroll() {
    if (contenidoMenu.classList.contains('show')){
        return;
    }
}

window.addEventListener('scroll', function() {
    if (barraNavegacion && window.scrollY > altura) {
        barraNavegacion.classList.add('cambioNavbar');
    } else {
        barraNavegacion.classList.remove('cambioNavbar');
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

document.addEventListener('DOMContentLoaded', comprobarScroll);