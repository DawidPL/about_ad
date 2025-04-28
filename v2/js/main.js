import scrollTop from './scrollTop.js';
import contactForm from './contactForm.js';
import initHotspots from './hotspots.js';


// scroll top handler
scrollTop();

// contact form handler
const form = document.getElementById("form");
if (form) {
    const contact = contactForm();
    contact.init();
 }

 // aos handler
 window.onload = function() {
    AOS.init({
        offset: 200,
        duration: 600, 
        easing: 'ease-in-out',
        once: false, 
    });
};

// hotspot handler
document.addEventListener('DOMContentLoaded', () => {
    initHotspots(); 
  });


