(function() {
    let navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach((link) => {
        link.addEventListener('click', function(e) {
            let active = document.querySelector('.nav-link.focus');
            active.classList.remove('focus');
            e.target.classList.add('focus');
        });
    });
})();

