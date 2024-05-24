const abrirMenu = document.getElementById('menu-telefonos');
const navLinks = document.querySelector('.nav-links');

abrirMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

//ESTO SIRVE PARA QUE SE OCULTEN LOS LINKS DE LA BARRA DE NAVEGACION.