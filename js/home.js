const categoria = document.querySelectorAll('.categoria');



categoria[0].classList.add('categoriaActiva');

categoria.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        categoria.forEach((item) => {
            item.classList.remove('categoriaActiva');
        });
        item.classList.add('categoriaActiva');
    });
});