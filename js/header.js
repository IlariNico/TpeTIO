const navarItem = document.querySelectorAll('.nav__item');

let URLactual = window.location;

function urlActive() {
    if (URLactual.pathname === '/TpeTIO/home') {
        navarItem[0].classList.add('categoriaActiva');
    } else if (URLactual.pathname === '/TpeTIO/productos') {
        navarItem[1].classList.add('categoriaActiva');

    } else if (URLactual.pathname === '/TpeTIO/armarpc') {
        navarItem[2].classList.add('categoriaActiva');

    }
    if (URLactual.pathname === '/TpeTIO/') {
        navarItem[0].classList.add('categoriaActiva');
    } else {
        null
    }
}
console.log(URLactual);
document.addEventListener('DOMContentLoaded', urlActive);