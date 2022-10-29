const categoria = document.querySelectorAll('.categoria');



// link active with a diferent items in list of categories but the item 0 is active by default
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