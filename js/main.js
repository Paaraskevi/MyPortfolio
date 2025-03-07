// Toggle icon navbar
let menuIcon = document.querySelector(".menu-icon-container");

menuIcon.onclick = () => {
    menuIcon.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// Scroll section active link
let sections = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector('header nav a[href="#' + id + '"]').classList.add('active');
        };
    });

    // Sticky navbar and other operations
};

// Scroll reveal
ScrollReveal().reveal('.home-content , .heading', { origin: 'top' });
ScrollReveal().reveal('.home-img, .services-container , .portfolio-box, .contact form', { origin: 'bottom' });
ScrollReveal().reveal('.about-img, .about-content', { origin: 'left' });
ScrollReveal().reveal('.home-content, .about-content', { origin: 'right' });

// Typed.js
const typed = new Typed('.multiple-text', {
    strings: ['Full Stack Web Developer'],
    typeSpeed: 70,
    backSpeed: 70,
    backDelay: 1000,
    loop: true
});
