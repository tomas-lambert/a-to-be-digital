const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links')
    const navLinks = document.querySelectorAll('.nav-links ul li');

    burger.addEventListener('click',()=> {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if (link.style.animation) {
            link.style.animation = '';
            } else {
            link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3 }s`;
            }
        }); 
        //Burger
        burger.classList.toggle('toggle');
    });
}
navSlide();

function newsLetter(){
    alert ("Lo Sentimos, esta función no se encuentra disponible por el momento. Dejanos tu mensaje en el Formulario de Contacto, en la sección 'Contacto'");
};