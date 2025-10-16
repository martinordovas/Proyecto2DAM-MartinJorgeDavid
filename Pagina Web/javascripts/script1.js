const barraNavegacion = document.getElementById('navbarPaginaPrincipal');
const altura = 50;
window.addEventListener('scroll', function() {
    if (barraNavegacion && window.scrollY > altura) {
        barraNavegacion.classList.add('cambioNavbar');
    } else {
        barraNavegacion.classList.remove('cambioNavbar');
    }
});