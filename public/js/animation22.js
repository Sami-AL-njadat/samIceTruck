 
    document.addEventListener("DOMContentLoaded", function () {
        const spinElements = document.querySelectorAll('.spin-on-scroll');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.classList.remove('spin'); // reset if already has
                    void el.offsetWidth; // trigger reflow to restart animation
                    el.classList.add('spin');
                }
            });
        }, { threshold: 0.5 }); // only trigger when at least 50% visible

        spinElements.forEach(el => observer.observe(el));
    });
 
