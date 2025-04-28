import scrollTop from './scrollTop.js';
import contactForm from './contactForm.js';


scrollTop();

// contact form handler
const form = document.getElementById("form");
if (form) {
    const contact = contactForm();
    contact.init();
 }


 window.onload = function() {
    AOS.init({
        offset: 200,
        duration: 600, 
        easing: 'ease-in-out',
        once: false, 
    });
};
