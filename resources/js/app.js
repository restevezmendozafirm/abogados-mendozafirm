/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

import './bootstrap';
import './componentes/NotFound';
import './componentes/VideoPrincipal';
import './componentes/AccessNot';

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

document.addEventListener('DOMContentLoaded', function() {
    var lazyBgs = document.querySelectorAll('.lazy-bg');
    
    lazyBgs.forEach(function(lazyBg) {
      var dataSrc = lazyBg.getAttribute('data-src');
      lazyBg.style.backgroundImage = 'url(' + dataSrc + ')';
    });
});


const menuIcon = document.querySelector('.menu-icon');
const sidebar = document.querySelector('.sidebar');


menuIcon.addEventListener('click', () => {
    sidebar.classList.toggle('none');
});

