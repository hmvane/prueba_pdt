import './bootstrap';
import 'tw-elements'; 
// Initialization for ES Users
import {
    Carousel,
    initTWE,
  } from "tw-elements";
  
  initTWE({ Carousel });

  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll("a[href^='#']");

    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
        // Elimina la clase de todos los enlaces
            navLinks.forEach((l) => l.classList.remove("text-gray-400"));

             // Agrega la clase al enlace seleccionado
            this.classList.add("text-gray-400");
        });
    });
  });