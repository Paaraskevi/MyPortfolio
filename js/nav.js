
navLinks.forEach(link => {
    link.addEventListener('click', () => {

        navLinks.forEach(navLink => {
            navLink.classList.remove('active');
        });

        link.classList.add('active');

        let targetId = link.getAttribute('href').substring(1);
        let targetElement = document.getElementById(targetId);
        let offset = targetElement.offsetTop;

        window.scrollTo({
            top: offset,
            behavior: 'smooth'
        });
    });
});
