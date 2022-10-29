const navarItem = document.querySelectorAll('.nav__item');

let URLactual = window.location;

if (URLactual.pathname === '/TpeTIO/home') {
    navarItem[0].classList.add('categoriaActiva');
} else if (URLactual.pathname === '/TpeTIO/productos') {
    navarItem[1].classList.add('categoriaActiva');

} else if (URLactual.pathname === '/TpeTIO/armarpc') {
    navarItem[2].classList.add('categoriaActiva');

} else {
    null
}