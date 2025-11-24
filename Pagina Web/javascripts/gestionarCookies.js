function conseguirCookie(nombre){
    const valor = `; ${document.cookie}`
    const partes = valor.split(`; ${nombre}=`);
    if (partes.length === 2) return partes.pop().split(';').shift();
    return null;
}

document.addEventListener('DOMContentLoaded', function(){
    const toastElement = document.getElementById('liveToast');
    if (toastElement) {
        const toast = new bootstrap.Toast(toastElement);
        toast.show();
    }
});

document.addEventListener('DOMContentLoaded', () => {
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