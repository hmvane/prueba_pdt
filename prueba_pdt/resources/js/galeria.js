let tabs = document.querySelectorAll(".tab")
let indicator = document.querySelector(".indicator")
let panels = document.querySelectorAll(".tab-panel")

indicator.style.width = tabs[0].getBoundingClientRect().width + 'px'
indicator.style.left = tabs[0].getBoundingClientRect().left - tabs[0].parentElement.getBoundingClientRect(). left + 'px'

tabs.forEach(tab => {
    tab.addEventListener("click", ()=>{
        let tabTarget = tab.getAttribute("aria-controls")

        indicator.style.width = tab.getBoundingClientRect().width + 'px'
        indicator.style.left = tab.getBoundingClientRect().left - tab.parentElement.getBoundingClientRect(). left + 'px'

        panels.forEach(panel=>{
            let panelId = panel.getAttribute("id")
            
            if (tabTarget === panelId) {
                panel.classList.remove("invisible", "opacity-0")
                panel.classList.add("visible", "opacity-100")
            }else{
                panel.classList.add("invisible", "opacity-0")
            }
        })
    })
})


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