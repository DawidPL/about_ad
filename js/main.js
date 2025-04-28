import scrollTop from './scrollTop.js';
import contactForm from './contactForm.js';

scrollTop();

// contact form handler
const form = document.getElementById("form");
if (form) {
    const contact = contactForm();
    contact.init();
 }
