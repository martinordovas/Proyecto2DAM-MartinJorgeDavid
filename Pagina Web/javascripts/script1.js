const barraNavegacion = document.getElementById('navBarPaginaPrincipal');
const altura = 50;
window.addEventListener('scroll', function() {
    if (window.scrollY >= altura) {
        barraNavegacion.classList.add('cambioNavbar');
    } else {
        barraNavegacion.classList.remove('cambioNavbar');
    }
});